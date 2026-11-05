<?php

use App\Models\Event;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

return new #[Layout('layouts::admin')] #[Title('Events | NAVUDYAM Admin')] class extends Component
{
    use WithFileUploads;
    use WithPagination;

    public bool $showModal = false;

    public bool $showDeleteModal = false;

    public bool $isEditing = false;

    public ?int $eventId = null;

    public string $title = '';

    public ?string $image = null;

    public $imageUpload = null;

    public bool $is_active = true;

    public string $search = '';

    public string $filter = 'all';

    public ?int $deletingEventId = null;

    public string $deletingEventTitle = '';

    /**
     * Validation rules
     *
     * @return array<string, string>
     */
    protected function rules(): array
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'imageUpload' => 'nullable|image|mimes:jpeg,jpg,png,webp,gif|max:5120',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Custom validation messages
     *
     * @return array<string, string>
     */
    protected function messages(): array
    {
        return [
            'title.required' => 'The event title is required.',
            'title.min' => 'The title must be at least 3 characters.',
            'title.max' => 'The title cannot exceed 255 characters.',
            'imageUpload.image' => 'The uploaded file must be an image.',
            'imageUpload.mimes' => 'Allowed image formats: JPG, PNG, WEBP, GIF.',
            'imageUpload.max' => 'Image size cannot exceed 5MB.',
        ];
    }

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
     * Open Modal to Create a New Event
     */
    public function openCreateModal(): void
    {
        $this->resetValidation();
        $this->eventId = null;
        $this->isEditing = false;
        $this->title = '';
        $this->image = null;
        $this->imageUpload = null;
        $this->is_active = true;
        $this->showModal = true;
    }

    /**
     * Open Modal to Edit an Existing Event
     */
    public function openEditModal(int $id): void
    {
        $this->resetValidation();
        $this->imageUpload = null;

        try {
            $event = Event::findOrFail($id);
            $this->eventId = $event->id;
            $this->title = $event->title;
            $this->image = $event->image;
            $this->is_active = (bool) $event->is_active;
            $this->isEditing = true;
            $this->showModal = true;
        } catch (Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Event not found: '.$e->getMessage(),
                'type' => 'error',
                'title' => 'Error',
            ]);
        }
    }

    /**
     * Clear the currently selected or uploaded image
     */
    public function removeImage(): void
    {
        $this->image = null;
        $this->imageUpload = null;
        $this->resetValidation('imageUpload');
    }

    /**
     * Close the Create/Edit Modal
     */
    public function closeModal(): void
    {
        $this->showModal = false;
        $this->resetValidation();
        $this->eventId = null;
        $this->isEditing = false;
        $this->title = '';
        $this->image = null;
        $this->imageUpload = null;
        $this->is_active = true;
    }

    /**
     * Save (Create or Update) Event
     */
    public function save(): void
    {
        $this->validate();

        $imagePath = $this->image;

        // Process file upload using Laravel Storage public disk
        if ($this->imageUpload) {
            $storedPath = $this->imageUpload->store('events', 'public');
            $imagePath = $storedPath;

            // Delete previous storage file if replacing an existing uploaded image
            if ($this->isEditing && $this->eventId) {
                $existing = Event::find($this->eventId);
                if ($existing && $existing->image && Storage::disk('public')->exists($existing->image)) {
                    Storage::disk('public')->delete($existing->image);
                }
            }
        }

        try {
            if ($this->isEditing && $this->eventId) {
                $event = Event::findOrFail($this->eventId);
                $event->update([
                    'title' => trim($this->title),
                    'image' => $imagePath,
                    'is_active' => $this->is_active,
                ]);

                $this->dispatch('toast', [
                    'message' => 'Event updated successfully.',
                    'type' => 'success',
                    'title' => 'Saved',
                ]);
            } else {
                Event::create([
                    'title' => trim($this->title),
                    'image' => $imagePath,
                    'is_active' => $this->is_active,
                ]);

                $this->dispatch('toast', [
                    'message' => 'New event created successfully.',
                    'type' => 'success',
                    'title' => 'Created',
                ]);
            }

            $this->closeModal();
        } catch (Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Could not save event: '.$e->getMessage(),
                'type' => 'error',
                'title' => 'Save Error',
            ]);
        }
    }

    /**
     * Toggle Event active state
     */
    public function toggleActive(int $id): void
    {
        try {
            $event = Event::findOrFail($id);
            $event->is_active = ! $event->is_active;
            $event->save();

            $statusText = $event->is_active ? 'Active' : 'Inactive';
            $this->dispatch('toast', [
                'message' => 'Event is now '.$statusText.'.',
                'type' => $event->is_active ? 'success' : 'info',
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
     * Prompt Delete Event Modal
     */
    public function confirmDelete(int $id): void
    {
        try {
            $event = Event::findOrFail($id);
            $this->deletingEventId = $event->id;
            $this->deletingEventTitle = $event->title;
            $this->showDeleteModal = true;
        } catch (Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Event not found: '.$e->getMessage(),
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
        $this->deletingEventId = null;
        $this->deletingEventTitle = '';
    }

    /**
     * Delete Event from Database and remove disk image if stored
     */
    public function delete(): void
    {
        if (! $this->deletingEventId) {
            return;
        }

        try {
            $event = Event::find($this->deletingEventId);
            if ($event) {
                if ($event->image && Storage::disk('public')->exists($event->image)) {
                    Storage::disk('public')->delete($event->image);
                }

                $title = $event->title;
                $event->delete();

                $this->dispatch('toast', [
                    'message' => 'Event "'.$title.'" deleted.',
                    'type' => 'success',
                    'title' => 'Deleted',
                ]);
            }

            $this->cancelDelete();
        } catch (Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Could not delete event: '.$e->getMessage(),
                'type' => 'error',
                'title' => 'Error',
            ]);
        }
    }

    /**
     * Get paginated events query
     */
    public function getEventsProperty(): LengthAwarePaginator
    {
        $query = Event::query()->latest();

        if (trim($this->search) !== '') {
            $query->where('title', 'like', '%'.trim($this->search).'%');
        }

        if ($this->filter === 'active') {
            $query->where('is_active', true);
        } elseif ($this->filter === 'inactive') {
            $query->where('is_active', false);
        }

        return $query->paginate(10);
    }
};
