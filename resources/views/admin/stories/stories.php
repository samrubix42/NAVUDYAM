<?php

use App\Models\Story;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

return new #[Layout('layouts::admin')] #[Title('Stories | NAVUDYAM Admin')] class extends Component
{
    use WithFileUploads;
    use WithPagination;

    public bool $showModal = false;

    public bool $showDeleteModal = false;

    public bool $isEditing = false;

    public ?int $storyId = null;

    public string $title = '';

    public string $description = '';

    public ?string $image = null;

    public $imageUpload = null;

    public bool $is_active = true;

    public string $search = '';

    public string $filter = 'all';

    public ?int $deletingStoryId = null;

    public string $deletingStoryTitle = '';

    /**
     * Validation rules
     *
     * @return array<string, string>
     */
    protected function rules(): array
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:10',
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
            'title.required' => 'The story title is required.',
            'title.min' => 'The title must be at least 3 characters.',
            'title.max' => 'The title cannot exceed 255 characters.',
            'description.required' => 'The story description is required.',
            'description.min' => 'The description must be at least 10 characters.',
            'imageUpload.image' => 'The uploaded file must be an image.',
            'imageUpload.mimes' => 'Allowed image formats: JPG, PNG, WEBP, GIF.',
            'imageUpload.max' => 'Image size cannot exceed 5MB.',
        ];
    }

    /**
     * Reset pagination when search query updates
     */
    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    /**
     * Reset pagination when filter updates
     */
    public function updatedFilter(): void
    {
        $this->resetPage();
    }

    /**
     * Open Modal to Create a New Story
     */
    public function openCreateModal(): void
    {
        $this->resetValidation();
        $this->storyId = null;
        $this->isEditing = false;
        $this->title = '';
        $this->description = '';
        $this->image = null;
        $this->imageUpload = null;
        $this->is_active = true;
        $this->showModal = true;
    }

    /**
     * Open Modal to Edit an Existing Story
     */
    public function openEditModal(int $id): void
    {
        $this->resetValidation();
        $this->imageUpload = null;

        try {
            $story = Story::findOrFail($id);
            $this->storyId = $story->id;
            $this->title = $story->title;
            $this->description = $story->description;
            $this->image = $story->image;
            $this->is_active = (bool) $story->is_active;
            $this->isEditing = true;
            $this->showModal = true;
        } catch (\Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Story not found: '.$e->getMessage(),
                'type' => 'error',
                'title' => 'Error',
            ]);
        }
    }

    /**
     * Remove the currently selected or uploaded image
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
        $this->storyId = null;
        $this->isEditing = false;
        $this->title = '';
        $this->description = '';
        $this->image = null;
        $this->imageUpload = null;
        $this->is_active = true;
    }

    /**
     * Save (Create or Update) Story
     */
    public function save(): void
    {
        $this->validate();

        $imagePath = $this->image;

        // Process file upload using Laravel Storage public disk
        if ($this->imageUpload) {
            $storedPath = $this->imageUpload->store('stories', 'public');
            $imagePath = $storedPath;

            // Delete previous storage file if replacing an existing uploaded image
            if ($this->isEditing && $this->storyId) {
                $existing = Story::find($this->storyId);
                if ($existing && $existing->image && Storage::disk('public')->exists($existing->image)) {
                    Storage::disk('public')->delete($existing->image);
                }
            }
        }

        try {
            if ($this->isEditing && $this->storyId) {
                $story = Story::findOrFail($this->storyId);
                $story->update([
                    'title' => trim($this->title),
                    'description' => trim($this->description),
                    'image' => $imagePath,
                    'is_active' => $this->is_active,
                ]);

                $this->dispatch('toast', [
                    'message' => 'Story updated successfully.',
                    'type' => 'success',
                    'title' => 'Saved',
                ]);
            } else {
                Story::create([
                    'title' => trim($this->title),
                    'description' => trim($this->description),
                    'image' => $imagePath,
                    'is_active' => $this->is_active,
                ]);

                $this->dispatch('toast', [
                    'message' => 'New story created successfully.',
                    'type' => 'success',
                    'title' => 'Created',
                ]);
            }

            $this->closeModal();
        } catch (\Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Could not save story: '.$e->getMessage(),
                'type' => 'error',
                'title' => 'Save Error',
            ]);
        }
    }

    /**
     * Toggle Story active state
     */
    public function toggleActive(int $id): void
    {
        try {
            $story = Story::findOrFail($id);
            $story->is_active = ! $story->is_active;
            $story->save();

            $statusText = $story->is_active ? 'Active' : 'Inactive';
            $this->dispatch('toast', [
                'message' => 'Story is now '.$statusText.'.',
                'type' => $story->is_active ? 'success' : 'info',
                'title' => 'Status Updated',
            ]);
        } catch (\Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Could not update status: '.$e->getMessage(),
                'type' => 'error',
                'title' => 'Error',
            ]);
        }
    }

    /**
     * Prompt Delete Story Modal
     */
    public function confirmDelete(int $id): void
    {
        try {
            $story = Story::findOrFail($id);
            $this->deletingStoryId = $story->id;
            $this->deletingStoryTitle = $story->title;
            $this->showDeleteModal = true;
        } catch (\Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Story not found: '.$e->getMessage(),
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
        $this->deletingStoryId = null;
        $this->deletingStoryTitle = '';
    }

    /**
     * Delete Story from Database and clean up disk image
     */
    public function delete(): void
    {
        if (! $this->deletingStoryId) {
            return;
        }

        try {
            $story = Story::find($this->deletingStoryId);
            if ($story) {
                if ($story->image && Storage::disk('public')->exists($story->image)) {
                    Storage::disk('public')->delete($story->image);
                }

                $title = $story->title;
                $story->delete();

                $this->dispatch('toast', [
                    'message' => 'Story "'.$title.'" deleted.',
                    'type' => 'success',
                    'title' => 'Deleted',
                ]);
            }

            $this->cancelDelete();
        } catch (\Throwable $e) {
            $this->dispatch('toast', [
                'message' => 'Could not delete story: '.$e->getMessage(),
                'type' => 'error',
                'title' => 'Error',
            ]);
        }
    }

    /**
     * Get paginated stories query
     */
    public function getStoriesProperty(): LengthAwarePaginator
    {
        $query = Story::query()->latest();

        if (trim($this->search) !== '') {
            $search = trim($this->search);
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%'.$search.'%')
                  ->orWhere('description', 'like', '%'.$search.'%');
            });
        }

        if ($this->filter === 'active') {
            $query->where('is_active', true);
        } elseif ($this->filter === 'inactive') {
            $query->where('is_active', false);
        }

        return $query->paginate(10);
    }
};
