<?php

use App\Models\JoinRequest;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

return new #[Layout('layouts::admin')] #[Title('Join Applications | NAVUDYAM Admin')] class extends Component
{
    use WithPagination;

    public bool $showViewModal = false;

    public bool $showDeleteModal = false;

    public ?int $selectedRequestId = null;

    public ?int $deletingRequestId = null;

    public string $deletingRequestPhone = '';

    public string $search = '';

    public string $filter = 'all';

    public string $roleFilter = 'all';

    /**
     * Reset pagination when search changes
     */
    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    /**
     * Reset pagination when status filter changes
     */
    public function updatedFilter(): void
    {
        $this->resetPage();
    }

    /**
     * Reset pagination when role filter changes
     */
    public function updatedRoleFilter(): void
    {
        $this->resetPage();
    }

    /**
     * Get currently selected join request model
     */
    public function getSelectedRequestProperty(): ?JoinRequest
    {
        return $this->selectedRequestId ? JoinRequest::find($this->selectedRequestId) : null;
    }

    /**
     * Open View Modal & Automatically Mark as Read
     */
    public function viewRequest(int $id): void
    {
        try {
            $request = JoinRequest::findOrFail($id);
            $this->selectedRequestId = $request->id;

            if (! $request->is_read) {
                $request->is_read = true;
                $request->save();
            }

            $this->showViewModal = true;
        } catch (Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Application not found: '.$e->getMessage(),
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
        $this->selectedRequestId = null;
    }

    /**
     * Toggle Read / Unread Status
     */
    public function toggleRead(int $id): void
    {
        try {
            $request = JoinRequest::findOrFail($id);
            $request->is_read = ! $request->is_read;
            $request->save();

            $statusText = $request->is_read ? 'marked as read' : 'marked as unread';
            $this->dispatch('toast', [
                'message' => 'Application '.$statusText.'.',
                'type' => $request->is_read ? 'info' : 'success',
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
            $request = JoinRequest::findOrFail($id);
            $this->deletingRequestId = $request->id;
            $this->deletingRequestPhone = $request->phone.($request->name ? ' ('.$request->name.')' : '');
            $this->showDeleteModal = true;
        } catch (Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Application not found: '.$e->getMessage(),
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
        $this->deletingRequestId = null;
        $this->deletingRequestPhone = '';
    }

    /**
     * Delete Join Request
     */
    public function delete(): void
    {
        if (! $this->deletingRequestId) {
            return;
        }

        try {
            $request = JoinRequest::find($this->deletingRequestId);
            if ($request) {
                $request->delete();

                $this->dispatch('toast', [
                    'message' => 'Application deleted successfully.',
                    'type' => 'success',
                    'title' => 'Deleted',
                ]);
            }

            if ($this->selectedRequestId === $this->deletingRequestId) {
                $this->closeViewModal();
            }

            $this->cancelDelete();
        } catch (Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Could not delete application: '.$e->getMessage(),
                'type' => 'error',
                'title' => 'Error',
            ]);
        }
    }

    /**
     * Get paginated join requests query
     */
    public function getJoinRequestsProperty(): LengthAwarePaginator
    {
        $query = JoinRequest::query()->latest();

        if (trim($this->search) !== '') {
            $search = trim($this->search);
            $query->where(function ($q) use ($search) {
                $q->where('phone', 'like', '%'.$search.'%')
                    ->orWhere('name', 'like', '%'.$search.'%')
                    ->orWhere('email', 'like', '%'.$search.'%')
                    ->orWhere('city', 'like', '%'.$search.'%')
                    ->orWhere('affiliation_detail', 'like', '%'.$search.'%')
                    ->orWhere('message', 'like', '%'.$search.'%');
            });
        }

        if ($this->filter === 'unread') {
            $query->where('is_read', false);
        } elseif ($this->filter === 'read') {
            $query->where('is_read', true);
        }

        if ($this->roleFilter !== 'all') {
            $query->where('participation_type', $this->roleFilter);
        }

        return $query->paginate(10);
    }
};
