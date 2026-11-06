<div class="space-y-6">

    <!-- Page Header (shadcn style) -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-5 border-b border-zinc-200">
        <div>
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-1.5 text-xs text-zinc-500 mb-1" aria-label="Breadcrumb">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-zinc-900 transition-colors">Admin</a>
                <i class="ri-arrow-right-s-line text-zinc-400"></i>
                <span class="text-zinc-900 font-medium">Stories</span>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900 font-heading">
                Stories
            </h1>
            <p class="text-xs text-zinc-500 mt-0.5">
                Manage, publish, and craft inspirational community stories with titles, descriptions, and banners.
            </p>
        </div>

        <div class="flex items-center gap-2.5">
            <a href="{{ route('stories') }}" 
               target="_blank"
               class="inline-flex items-center justify-center gap-1.5 h-9 px-3 rounded-md text-xs font-medium text-zinc-700 bg-white border border-zinc-200 shadow-2xs hover:bg-zinc-50 hover:text-zinc-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 transition-colors">
                <i class="ri-external-link-line text-xs text-zinc-500"></i>
                <span>Public Page</span>
            </a>

            <button type="button" 
                    wire:click="openCreateModal"
                    class="inline-flex items-center justify-center gap-1.5 h-9 px-3.5 rounded-md text-xs font-medium text-white bg-zinc-900 shadow-2xs hover:bg-zinc-800 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 transition-colors cursor-pointer">
                <i class="ri-add-line text-sm"></i>
                <span>Add Story</span>
            </button>
        </div>
    </div>

    <!-- Toolbar: Search & Segmented Filter -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
        <!-- Search Input -->
        <div class="relative flex-1 max-w-sm">
            <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-zinc-400 text-sm pointer-events-none"></i>
            <input wire:model.live.debounce.250ms="search" 
                   type="text" 
                   placeholder="Filter stories by title or description..." 
                   class="h-9 w-full rounded-md border border-zinc-200 bg-white pl-8 pr-8 text-xs text-zinc-900 placeholder:text-zinc-400 shadow-2xs focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 transition-colors" />
            @if(!empty($search))
                <button type="button" 
                        wire:click="$set('search', '')"
                        class="absolute right-2.5 top-1/2 -translate-y-1/2 text-zinc-400 hover:text-zinc-700 transition-colors cursor-pointer"
                        title="Clear search">
                    <i class="ri-close-line text-sm"></i>
                </button>
            @endif
        </div>

        <!-- Filter Segmented Tabs -->
        <div class="inline-flex items-center rounded-lg border border-zinc-200 bg-zinc-50 p-0.5 text-xs font-medium text-zinc-600 self-start sm:self-auto">
            <button type="button" 
                    wire:click="$set('filter', 'all')"
                    class="rounded-md px-3 py-1.5 transition-all cursor-pointer {{ $filter === 'all' ? 'bg-white text-zinc-950 font-semibold shadow-2xs' : 'text-zinc-600 hover:text-zinc-900' }}">
                All
            </button>
            <button type="button" 
                    wire:click="$set('filter', 'active')"
                    class="rounded-md px-3 py-1.5 transition-all cursor-pointer {{ $filter === 'active' ? 'bg-white text-emerald-700 font-semibold shadow-2xs' : 'text-zinc-600 hover:text-zinc-900' }}">
                Active
            </button>
            <button type="button" 
                    wire:click="$set('filter', 'inactive')"
                    class="rounded-md px-3 py-1.5 transition-all cursor-pointer {{ $filter === 'inactive' ? 'bg-white text-zinc-950 font-semibold shadow-2xs' : 'text-zinc-600 hover:text-zinc-900' }}">
                Inactive
            </button>
        </div>
    </div>

    <!-- Stories Table Card (shadcn Table) -->
    <div class="rounded-lg border border-zinc-200 bg-white shadow-2xs overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="border-b border-zinc-200 bg-zinc-50/75 text-[11px] font-medium text-zinc-500 uppercase tracking-wider">
                        <th class="py-3 px-4 w-20">Banner</th>
                        <th class="py-3 px-4">Story Details</th>
                        <th class="py-3 px-4 w-32">Status</th>
                        <th class="py-3 px-4 w-36">Last Updated</th>
                        <th class="py-3 px-4 w-24 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100">
                    @forelse($this->stories as $item)
                        <tr class="hover:bg-zinc-50/70 transition-colors group">
                            <!-- Image Thumbnail -->
                            <td class="py-3 px-4">
                                <div class="w-14 h-10 rounded-md overflow-hidden bg-zinc-100 border border-zinc-200 shrink-0 flex items-center justify-center">
                                    @if($item->image_url)
                                        <img src="{{ $item->image_url }}" 
                                             alt="{{ $item->title }}"
                                             loading="lazy"
                                             class="w-full h-full object-cover transition-transform group-hover:scale-105" />
                                    @else
                                        <div class="flex flex-col items-center justify-center text-zinc-400">
                                            <i class="ri-image-line text-sm"></i>
                                            <span class="text-[9px] tracking-tight text-zinc-400 font-sans">No img</span>
                                        </div>
                                    @endif
                                </div>
                            </td>

                            <!-- Title & Description preview -->
                            <td class="py-3 px-4">
                                <p class="text-xs font-semibold text-zinc-900 leading-snug line-clamp-1">
                                    {{ $item->title }}
                                </p>
                                <p class="text-[11px] text-zinc-500 line-clamp-1 mt-0.5">
                                    {{ $item->description }}
                                </p>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-[10px] text-zinc-400 font-mono">#{{ $item->id }}</span>
                                    @if($item->image)
                                        <span class="inline-flex items-center gap-1 text-[10px] text-zinc-500 font-mono">
                                            <i class="ri-attachment-line text-[10px]"></i>
                                            <span class="truncate max-w-[180px]">{{ basename($item->image) }}</span>
                                        </span>
                                    @endif
                                </div>
                            </td>

                            <!-- Status Badge with Toggle -->
                            <td class="py-3 px-4">
                                <button type="button" 
                                        wire:click="toggleActive({{ $item->id }})"
                                        class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-medium transition-colors cursor-pointer {{ $item->is_active ? 'border border-emerald-200 bg-emerald-50 text-emerald-700 hover:bg-emerald-100' : 'border border-zinc-200 bg-zinc-100 text-zinc-600 hover:bg-zinc-200' }}"
                                        title="Click to toggle visibility">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $item->is_active ? 'bg-emerald-500' : 'bg-zinc-400' }}"></span>
                                    <span>{{ $item->is_active ? 'Active' : 'Inactive' }}</span>
                                </button>
                            </td>

                            <!-- Updated At -->
                            <td class="py-3 px-4 text-zinc-500 text-[11px]">
                                {{ $item->updated_at ? $item->updated_at->diffForHumans() : '—' }}
                            </td>

                            <!-- Action Buttons -->
                            <td class="py-3 px-4 text-right">
                                <div class="flex items-center justify-end gap-1">
                                    <!-- Edit Button -->
                                    <button type="button" 
                                            wire:click="openEditModal({{ $item->id }})"
                                            class="w-7 h-7 rounded-md text-zinc-600 hover:text-zinc-950 hover:bg-zinc-100 flex items-center justify-center transition-colors cursor-pointer"
                                            title="Edit Story">
                                        <i class="ri-pencil-line text-sm"></i>
                                    </button>

                                    <!-- Delete Button -->
                                    <button type="button" 
                                            wire:click="confirmDelete({{ $item->id }})"
                                            class="w-7 h-7 rounded-md text-zinc-400 hover:text-red-600 hover:bg-red-50 flex items-center justify-center transition-colors cursor-pointer"
                                            title="Delete Story">
                                        <i class="ri-delete-bin-line text-sm"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-12 px-4 text-center">
                                <div class="max-w-xs mx-auto space-y-3">
                                    <div class="w-10 h-10 rounded-full bg-zinc-100 text-zinc-400 flex items-center justify-center mx-auto">
                                        <i class="ri-article-line text-lg"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold text-zinc-900">No stories found</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">
                                            {{ $search ? 'No stories matched your search query.' : 'Get started by creating your first story.' }}
                                        </p>
                                    </div>
                                    @if(!$search)
                                        <button type="button" 
                                                wire:click="openCreateModal"
                                                class="inline-flex items-center justify-center gap-1.5 h-8 px-3 rounded-md text-xs font-medium text-white bg-zinc-900 hover:bg-zinc-800 transition-colors cursor-pointer shadow-2xs">
                                            <i class="ri-add-line text-xs"></i>
                                            <span>Add Story</span>
                                        </button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Table Footer / Pagination -->
        @if($this->stories->hasPages())
            <div class="px-4 py-3 border-t border-zinc-200 bg-zinc-50/50 flex items-center justify-between">
                <span class="text-xs text-zinc-500">
                    Showing <strong class="text-zinc-900">{{ $this->stories->firstItem() }}</strong> to <strong class="text-zinc-900">{{ $this->stories->lastItem() }}</strong> of <strong class="text-zinc-900">{{ $this->stories->total() }}</strong> stories
                </span>
                <div class="flex items-center gap-1">
                    @if($this->stories->onFirstPage())
                        <span class="h-8 px-2.5 rounded-md border border-zinc-200 bg-zinc-100 text-zinc-400 text-xs inline-flex items-center cursor-not-allowed">
                            Previous
                        </span>
                    @else
                        <button type="button" 
                                wire:click="previousPage" 
                                class="h-8 px-2.5 rounded-md border border-zinc-200 bg-white hover:bg-zinc-50 text-zinc-700 text-xs inline-flex items-center cursor-pointer transition-colors shadow-2xs">
                            Previous
                        </button>
                    @endif

                    @if($this->stories->hasMorePages())
                        <button type="button" 
                                wire:click="nextPage" 
                                class="h-8 px-2.5 rounded-md border border-zinc-200 bg-white hover:bg-zinc-50 text-zinc-700 text-xs inline-flex items-center cursor-pointer transition-colors shadow-2xs">
                            Next
                        </button>
                    @else
                        <span class="h-8 px-2.5 rounded-md border border-zinc-200 bg-zinc-100 text-zinc-400 text-xs inline-flex items-center cursor-not-allowed">
                            Next
                        </span>
                    @endif
                </div>
            </div>
        @endif

    </div>

    <!-- CREATE / EDIT STORY DIALOG (shadcn Dialog style) -->
    <div x-data="{ open: @entangle('showModal') }"
         x-show="open" 
         x-cloak
         x-transition:enter="transition ease-out duration-150"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-100"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @keydown.escape.window="$wire.closeModal()"
         class="fixed inset-0 z-50 overflow-y-auto bg-black/60 backdrop-blur-2xs p-4 sm:p-6 flex items-center justify-center">

        <div @click.outside="$wire.closeModal()"
             x-show="open"
             x-transition:enter="transition ease-out duration-150"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="relative w-full max-w-lg bg-white rounded-xl shadow-lg border border-zinc-200 overflow-hidden my-8">

            <!-- Dialog Header -->
            <div class="px-6 py-4 border-b border-zinc-200 flex items-start justify-between bg-zinc-50/50">
                <div>
                    <h3 class="text-sm font-semibold text-zinc-950 font-heading">
                        {{ $isEditing ? 'Edit Story' : 'Create New Story' }}
                    </h3>
                    <p class="text-xs text-zinc-500 mt-0.5">
                        {{ $isEditing ? 'Make changes to story details. Click save when done.' : 'Add a title, description, and banner image for this story.' }}
                    </p>
                </div>
                <button type="button" 
                        wire:click="closeModal"
                        class="rounded-md p-1 text-zinc-400 hover:text-zinc-700 hover:bg-zinc-100 transition-colors cursor-pointer"
                        aria-label="Close dialog">
                    <i class="ri-close-line text-base"></i>
                </button>
            </div>

            <!-- Dialog Form -->
            <form wire:submit="save" class="p-6 space-y-4">

                <!-- Title Input -->
                <div class="space-y-1.5">
                    <label for="story-title" class="block text-xs font-medium text-zinc-900">
                        Story Title <span class="text-red-500">*</span>
                    </label>
                    <input wire:model="title" 
                           type="text" 
                           id="story-title" 
                           required 
                           placeholder="Story title" 
                           class="h-9 w-full rounded-md border border-zinc-200 bg-white px-3 py-1 text-xs text-zinc-900 placeholder:text-zinc-400 shadow-2xs focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 transition-colors @error('title') border-red-500 focus-visible:ring-red-500 @enderror" />
                    @error('title')
                        <p class="text-red-600 text-[11px]">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description Textarea -->
                <div class="space-y-1.5">
                    <label for="story-description" class="block text-xs font-medium text-zinc-900">
                        Description <span class="text-red-500">*</span>
                    </label>
                    <textarea wire:model="description" 
                              id="story-description" 
                              rows="4" 
                              required 
                              placeholder="Write story narrative..." 
                              class="w-full rounded-md border border-zinc-200 bg-white p-3 text-xs text-zinc-900 placeholder:text-zinc-400 shadow-2xs focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 transition-colors resize-y @error('description') border-red-500 focus-visible:ring-red-500 @enderror"></textarea>
                    @error('description')
                        <p class="text-red-600 text-[11px]">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Banner Image (Clean shadcn Dropzone & Preview) -->
                <div class="space-y-1.5">
                    <div class="flex items-center justify-between">
                        <label class="block text-xs font-medium text-zinc-900">
                            Banner Image
                        </label>
                        <span class="text-[11px] text-zinc-400">Optional · Max 5MB</span>
                    </div>

                    @php
                        // Check if an existing image URL is available for edit mode
                        $existingImageUrl = null;
                        if (!$imageUpload && $isEditing && $storyId) {
                            $existingModel = \App\Models\Story::find($storyId);
                            $existingImageUrl = $existingModel?->image_url;
                        }
                    @endphp

                    <!-- 1. Live Preview of Selected/Uploaded Image OR Existing Image -->
                    @if($imageUpload || $existingImageUrl)
                        <div class="rounded-lg border border-zinc-200 bg-zinc-50/60 p-3 flex items-center gap-3">
                            <div class="w-20 h-14 rounded-md overflow-hidden bg-zinc-200 border border-zinc-300/80 shrink-0 relative">
                                @if($imageUpload)
                                    <img src="{{ $imageUpload->temporaryUrl() }}" 
                                         alt="Preview" 
                                         class="w-full h-full object-cover" />
                                @elseif($existingImageUrl)
                                    <img src="{{ $existingImageUrl }}" 
                                         alt="Current Image" 
                                         class="w-full h-full object-cover" />
                                @endif
                            </div>

                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-1.5">
                                    <span class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] font-medium {{ $imageUpload ? 'bg-amber-100 text-amber-800' : 'bg-zinc-200 text-zinc-700' }}">
                                        {{ $imageUpload ? 'New Selection' : 'Current Banner' }}
                                    </span>
                                </div>
                                <p class="text-xs font-medium text-zinc-800 truncate mt-1">
                                    {{ $imageUpload ? $imageUpload->getClientOriginalName() : basename($image) }}
                                </p>
                                <span class="text-[10px] text-zinc-500 block">
                                    {{ $imageUpload ? 'Ready to upload on save.' : 'Stored in Laravel Storage disk.' }}
                                </span>
                            </div>

                            <!-- Remove / Clear Button -->
                            <button type="button" 
                                    wire:click="removeImage"
                                    class="shrink-0 p-1.5 rounded-md text-zinc-400 hover:text-red-600 hover:bg-red-50 transition-colors cursor-pointer"
                                    title="Remove Image">
                                <i class="ri-delete-bin-line text-sm"></i>
                            </button>
                        </div>
                    @endif

                    <!-- 2. Clean Dropzone Upload Control -->
                    <div class="relative">
                        <label class="flex flex-col items-center justify-center w-full h-24 border border-dashed border-zinc-300 rounded-lg cursor-pointer bg-zinc-50/40 hover:bg-zinc-50 transition-colors p-4 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <i class="ri-upload-cloud-2-line text-xl text-zinc-400 mb-1"></i>
                                <p class="text-xs text-zinc-700 font-medium">
                                    {{ ($imageUpload || $existingImageUrl) ? 'Click to replace banner' : 'Click to upload banner image' }}
                                </p>
                                <p class="text-[10px] text-zinc-400 mt-0.5">
                                    JPG, PNG, WEBP, GIF (stored in Laravel Storage)
                                </p>
                            </div>
                            <input wire:model="imageUpload" 
                                   type="file" 
                                   accept="image/*"
                                   class="sr-only" />
                        </label>

                        <!-- Livewire upload indicator -->
                        <div wire:loading wire:target="imageUpload" class="absolute inset-0 bg-white/90 rounded-lg flex items-center justify-center gap-2 text-xs text-zinc-700 font-medium border border-zinc-200">
                            <i class="ri-loader-4-line animate-spin text-sm"></i>
                            <span>Processing selected image...</span>
                        </div>
                    </div>

                    @error('imageUpload')
                        <p class="text-red-600 text-[11px]">{{ $message }}</p>
                    @enderror
                </div>

                <!-- is_active Status (shadcn Switch style) -->
                <div class="pt-2">
                    <label class="flex items-center justify-between p-3 rounded-lg border border-zinc-200 bg-zinc-50/50 cursor-pointer select-none">
                        <div>
                            <span class="text-xs font-medium text-zinc-900 block">Active Status</span>
                            <span class="text-[11px] text-zinc-500">Visible to visitors on the public stories page</span>
                        </div>
                        <input wire:model="is_active" 
                               type="checkbox" 
                               class="w-4 h-4 rounded border-zinc-300 text-zinc-900 focus:ring-zinc-950 focus:ring-offset-0 cursor-pointer" />
                    </label>
                </div>

                <!-- Dialog Footer -->
                <div class="pt-3 border-t border-zinc-200 flex items-center justify-end gap-2">
                    <button type="button" 
                            wire:click="closeModal"
                            class="h-9 px-3.5 rounded-md text-xs font-medium text-zinc-700 bg-white border border-zinc-200 hover:bg-zinc-50 shadow-2xs transition-colors cursor-pointer">
                        Cancel
                    </button>
                    <button type="submit" 
                            wire:loading.attr="disabled"
                            class="inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-md text-xs font-medium text-white bg-zinc-900 hover:bg-zinc-800 shadow-2xs transition-colors cursor-pointer disabled:opacity-70">
                        <span wire:loading.remove>{{ $isEditing ? 'Save Changes' : 'Create Story' }}</span>
                        <span wire:loading class="inline-flex items-center gap-1.5">
                            <i class="ri-loader-4-line animate-spin"></i>
                            <span>Saving...</span>
                        </span>
                    </button>
                </div>

            </form>

        </div>
    </div>

    <!-- DELETE CONFIRMATION DIALOG (shadcn AlertDialog style) -->
    <div x-data="{ openDelete: @entangle('showDeleteModal') }"
         x-show="openDelete" 
         x-cloak
         x-transition:enter="transition ease-out duration-150"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-100"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @keydown.escape.window="$wire.cancelDelete()"
         class="fixed inset-0 z-50 overflow-y-auto bg-black/60 backdrop-blur-2xs p-4 sm:p-6 flex items-center justify-center">

        <div @click.outside="$wire.cancelDelete()"
             x-show="openDelete"
             x-transition:enter="transition ease-out duration-150"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="relative w-full max-w-md bg-white rounded-xl shadow-lg border border-zinc-200 p-6 space-y-4 my-8">

            <div class="flex items-start gap-3.5">
                <div class="w-9 h-9 rounded-full bg-red-100 text-red-600 flex items-center justify-center shrink-0">
                    <i class="ri-error-warning-line text-lg"></i>
                </div>
                <div class="space-y-1">
                    <h3 class="text-sm font-semibold text-zinc-950 font-heading">
                        Delete this story?
                    </h3>
                    <p class="text-xs text-zinc-500 leading-relaxed">
                        This action cannot be undone. This will permanently remove <strong class="text-zinc-900 font-medium">"{{ $deletingStoryTitle }}"</strong> from the database and remove any uploaded files.
                    </p>
                </div>
            </div>

            <!-- AlertDialog Footer -->
            <div class="pt-3 border-t border-zinc-100 flex items-center justify-end gap-2">
                <button type="button" 
                        wire:click="cancelDelete"
                        class="h-9 px-3.5 rounded-md text-xs font-medium text-zinc-700 bg-white border border-zinc-200 hover:bg-zinc-50 shadow-2xs transition-colors cursor-pointer">
                    Cancel
                </button>
                <button type="button" 
                        wire:click="delete"
                        wire:loading.attr="disabled"
                        class="inline-flex items-center justify-center gap-1.5 h-9 px-3.5 rounded-md text-xs font-medium text-white bg-red-600 hover:bg-red-700 shadow-2xs transition-colors cursor-pointer disabled:opacity-70">
                    <span wire:loading.remove>Delete Story</span>
                    <span wire:loading class="inline-flex items-center gap-1.5">
                        <i class="ri-loader-4-line animate-spin"></i>
                        <span>Deleting...</span>
                    </span>
                </button>
            </div>

        </div>
    </div>

</div>

