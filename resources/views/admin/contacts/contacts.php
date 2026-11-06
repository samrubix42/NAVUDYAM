<?php

use App\Models\Contact;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

return new #[Layout('layouts::admin')] #[Title('Inquiries & Messages | NAVUDYAM Admin')] class extends Component
{
    use WithPagination;

    public bool $showViewModal = false;

    public bool $showDeleteModal = false;

    public ?int $selectedContactId = null;

    public ?int $deletingContactId = null;

    public string $deletingContactPhone = '';

    public string $search = '';

    public string $filter = 'all';

    /**
     * Reset pagination when search changes
     */
    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    /**
     * Reset pagination when filter changes
     */
    public function updatedFilter(): void
    {
        $this->resetPage();
    }

    /**
     * Get currently selected contact model
     */
    public function getSelectedContactProperty(): ?Contact
    {
        return $this->selectedContactId ? Contact::find($this->selectedContactId) : null;
    }

    /**
     * Open View Modal & Automatically Mark as Read
     */
    public function viewContact(int $id): void
    {
        try {
            $contact = Contact::findOrFail($id);
            $this->selectedContactId = $contact->id;

            if (! $contact->is_read) {
                $contact->is_read = true;
                $contact->save();
            }

            $this->showViewModal = true;
        } catch (Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Inquiry not found: '.$e->getMessage(),
                'type' => 'error',
                'title' => 'Error',
            ]);
        }
    }

    /**
     * Close the View Modal
     */
    public function closeViewModal(): void
    {
        $this->showViewModal = false;
        $this->selectedContactId = null;
    }

    /**
     * Toggle Read / Unread Status
     */
    public function toggleRead(int $id): void
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->is_read = ! $contact->is_read;
            $contact->save();

            $statusText = $contact->is_read ? 'marked as read' : 'marked as unread';
            $this->dispatch('toast', [
                'message' => 'Inquiry '.$statusText.'.',
                'type' => $contact->is_read ? 'info' : 'success',
                'title' => 'Status Updated',
            ]);
        } catch (Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Could not update status: '.$e->getMessage(),
                'type' => 'error',
                'title' => 'Error',
            ]);
        }
    }

    /**
     * Prompt Delete Modal
     */
    public function confirmDelete(int $id): void
    {
        try {
            $contact = Contact::findOrFail($id);
            $this->deletingContactId = $contact->id;
            $this->deletingContactPhone = $contact->phone.($contact->name ? ' ('.$contact->name.')' : '');
            $this->showDeleteModal = true;
        } catch (Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Inquiry not found: '.$e->getMessage(),
                'type' => 'error',
                'title' => 'Error',
            ]);
        }
    }

    /**
     * Cancel Delete Modal
     */
    public function cancelDelete(): void
    {
        $this->showDeleteModal = false;
        $this->deletingContactId = null;
        $this->deletingContactPhone = '';
    }

    /**
     * Delete Inquiry
     */
    public function delete(): void
    {
        if (! $this->deletingContactId) {
            return;
        }

        try {
            $contact = Contact::find($this->deletingContactId);
            if ($contact) {
                $contact->delete();

                $this->dispatch('toast', [
                    'message' => 'Inquiry deleted successfully.',
                    'type' => 'success',
                    'title' => 'Deleted',
                ]);
            }

            if ($this->selectedContactId === $this->deletingContactId) {
                $this->closeViewModal();
            }

            $this->cancelDelete();
        } catch (Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Could not delete inquiry: '.$e->getMessage(),
                'type' => 'error',
                'title' => 'Error',
            ]);
        }
    }

    /**
     * Get paginated contacts query
     */
    public function getContactsProperty(): LengthAwarePaginator
    {
        $query = Contact::query()->latest();

        if (trim($this->search) !== '') {
            $search = trim($this->search);
            $query->where(function ($q) use ($search) {
                $q->where('phone', 'like', '%'.$search.'%')
                    ->orWhere('name', 'like', '%'.$search.'%')
                    ->orWhere('email', 'like', '%'.$search.'%')
                    ->orWhere('subject', 'like', '%'.$search.'%')
                    ->orWhere('message', 'like', '%'.$search.'%');
            });
        }

        if ($this->filter === 'unread') {
            $query->where('is_read', false);
        } elseif ($this->filter === 'read') {
            $query->where('is_read', true);
        }

        return $query->paginate(10);
    }
};
