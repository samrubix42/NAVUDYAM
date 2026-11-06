<div class="space-y-6">

    <!-- Page Header (shadcn style) -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-5 border-b border-zinc-200">
        <div>
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-1.5 text-xs text-zinc-500 mb-1" aria-label="Breadcrumb">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-zinc-900 transition-colors">Admin</a>
                <i class="ri-arrow-right-s-line text-zinc-400"></i>
                <span class="text-zinc-900 font-medium">Join Applications</span>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900 font-heading">
                Join Applications
            </h1>
            <p class="text-xs text-zinc-500 mt-0.5">
                Review, filter, and manage applications and inquiries to join NAVUDYAM.
            </p>
        </div>

        <div class="flex items-center gap-2.5">
            <button type="button" 
                    @click="$dispatch('open-join-modal')"
                    class="inline-flex items-center justify-center gap-1.5 h-9 px-3 rounded-md text-xs font-medium text-zinc-700 bg-white border border-zinc-200 shadow-2xs hover:bg-zinc-50 hover:text-zinc-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 transition-colors cursor-pointer">
                <i class="ri-eye-line text-xs text-zinc-500"></i>
                <span>Preview Public Modal</span>
            </button>
        </div>
    </div>

    <!-- Toolbar: Search, Role Filter & Status Tabs -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
        <!-- Search & Role Filter -->
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2.5 flex-1 max-w-xl">
            <!-- Search Input -->
            <div class="relative flex-1">
                <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-zinc-400 text-sm pointer-events-none"></i>
                <input wire:model.live.debounce.250ms="search" 
                       type="text" 
                       placeholder="Filter by phone, name, email, city, affiliation..." 
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

            <!-- Role Filter Select -->
            <div class="w-full sm:w-44 shrink-0">
                <select wire:model.live="roleFilter" 
                        class="h-9 w-full rounded-md border border-zinc-200 bg-white px-2.5 text-xs text-zinc-800 shadow-2xs focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 transition-colors">
                    <option value="all">All Roles</option>
                    <option value="student">Student</option>
                    <option value="mentor">Mentor</option>
                    <option value="entrepreneur">Entrepreneur</option>
                    <option value="volunteer">Volunteer</option>
                    <option value="partner">Partner</option>
                    <option value="general">General</option>
                </select>
            </div>
        </div>

        <!-- Filter Segmented Tabs -->
        <div class="inline-flex items-center rounded-lg border border-zinc-200 bg-zinc-50 p-0.5 text-xs font-medium text-zinc-600 self-start sm:self-auto shrink-0">
            <button type="button" 
                    wire:click="$set('filter', 'all')"
                    class="rounded-md px-3 py-1.5 transition-all cursor-pointer {{ $filter === 'all' ? 'bg-white text-zinc-950 font-semibold shadow-2xs' : 'text-zinc-600 hover:text-zinc-900' }}">
                All
            </button>
            <button type="button" 
                    wire:click="$set('filter', 'unread')"
                    class="rounded-md px-3 py-1.5 transition-all cursor-pointer {{ $filter === 'unread' ? 'bg-white text-amber-700 font-semibold shadow-2xs' : 'text-zinc-600 hover:text-zinc-900' }}">
                Unread
            </button>
            <button type="button" 
                    wire:click="$set('filter', 'read')"
                    class="rounded-md px-3 py-1.5 transition-all cursor-pointer {{ $filter === 'read' ? 'bg-white text-zinc-950 font-semibold shadow-2xs' : 'text-zinc-600 hover:text-zinc-900' }}">
                Read
            </button>
        </div>
    </div>

    <!-- Applications Table Card (shadcn Table) -->
    <div class="rounded-lg border border-zinc-200 bg-white shadow-2xs overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="border-b border-zinc-200 bg-zinc-50/75 text-[11px] font-medium text-zinc-500 uppercase tracking-wider">
                        <th class="py-3 px-4 w-48">Applicant</th>
                        <th class="py-3 px-4 w-36">Role</th>
                        <th class="py-3 px-4">Affiliation & Details</th>
                        <th class="py-3 px-4 w-28">Status</th>
                        <th class="py-3 px-4 w-32">Received</th>
                        <th class="py-3 px-4 w-32 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100">
                    @forelse($this->joinRequests as $item)
                        <tr class="hover:bg-zinc-50/70 transition-colors group {{ !$item->is_read ? 'bg-amber-50/20' : '' }}">
                            
                            <!-- Applicant Info -->
                            <td class="py-3 px-4">
                                <div class="space-y-0.5">
                                    <div class="flex items-center gap-1.5 font-medium text-zinc-900">
                                        <a href="tel:{{ $item->phone }}" class="font-mono text-xs font-semibold text-zinc-900 hover:text-amber-600 transition-colors inline-flex items-center gap-1">
                                            <i class="ri-phone-line text-zinc-400 text-xs"></i>
                                            <span>{{ $item->phone }}</span>
                                        </a>
                                    </div>
                                    <div class="text-[11px] text-zinc-600 truncate">
                                        @if($item->name)
                                            <span class="font-medium text-zinc-800">{{ $item->name }}</span>
                                        @else
                                            <span class="text-zinc-400 italic">No name provided</span>
                                        @endif
                                    </div>
                                    @if($item->email)
                                        <div class="text-[11px] text-zinc-500 truncate">
                                            <a href="mailto:{{ $item->email }}" class="hover:text-zinc-800 transition-colors inline-flex items-center gap-1">
                                                <i class="ri-mail-line text-zinc-400 text-[10px]"></i>
                                                <span>{{ $item->email }}</span>
                                            </a>
                                        </div>
                                    @endif
                                    @if($item->city)
                                        <div class="text-[10px] text-zinc-500 inline-flex items-center gap-0.5">
                                            <i class="ri-map-pin-line text-zinc-400 text-[10px]"></i>
                                            <span>{{ $item->city }}</span>
                                        </div>
                                    @endif
                                </div>
                            </td>

                            <!-- Role / Participation Type -->
                            <td class="py-3 px-4 align-top">
                                @php
                                    $roleColors = [
                                        'student' => 'bg-blue-50 text-blue-700 border-blue-200/70',
                                        'mentor' => 'bg-purple-50 text-purple-700 border-purple-200/70',
                                        'entrepreneur' => 'bg-amber-50 text-amber-800 border-amber-200/70',
                                        'volunteer' => 'bg-emerald-50 text-emerald-700 border-emerald-200/70',
                                        'partner' => 'bg-indigo-50 text-indigo-700 border-indigo-200/70',
                                        'general' => 'bg-zinc-100 text-zinc-700 border-zinc-200',
                                    ];
                                    $roleColor = $roleColors[$item->participation_type] ?? 'bg-zinc-100 text-zinc-700 border-zinc-200';
                                @endphp
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-semibold border {{ $roleColor }} capitalize">
                                    {{ $item->participation_type }}
                                </span>
                            </td>

                            <!-- Affiliation & Message Preview -->
                            <td class="py-3 px-4 align-top">
                                <div class="space-y-1">
                                    <div class="flex items-center gap-1.5 flex-wrap">
                                        @if($item->affiliation && $item->affiliation !== 'none')
                                            <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded text-[10px] font-medium bg-zinc-100 text-zinc-800 border border-zinc-200 capitalize">
                                                <i class="ri-community-line text-[10px] text-zinc-500"></i>
                                                <span>{{ $item->affiliation }}</span>
                                            </span>
                                        @else
                                            <span class="text-[11px] text-zinc-400">Non-Navodayan / General</span>
                                        @endif

                                        @if($item->affiliation_detail)
                                            <span class="text-[11px] text-zinc-600 font-medium truncate max-w-xs">
                                                {{ $item->affiliation_detail }}
                                            </span>
                                        @endif
                                    </div>

                                    @if($item->message)
                                        <p class="text-[11px] text-zinc-600 line-clamp-1 italic">
                                            "{{ $item->message }}"
                                        </p>
                                    @endif
                                </div>
                            </td>

                            <!-- Status Badge -->
                            <td class="py-3 px-4 align-top">
                                @if($item->is_read)
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-medium bg-zinc-100 text-zinc-600 border border-zinc-200">
                                        <i class="ri-check-line text-zinc-400"></i>
                                        <span>Read</span>
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-200/80">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                        <span>New / Unread</span>
                                    </span>
                                @endif
                            </td>

                            <!-- Date Received -->
                            <td class="py-3 px-4 align-top text-zinc-500">
                                <div class="text-[11px] text-zinc-800 font-medium">
                                    {{ $item->created_at->format('M d, Y') }}
                                </div>
                                <div class="text-[10px] text-zinc-400">
                                    {{ $item->created_at->format('h:i A') }}
                                </div>
                            </td>

                            <!-- Actions -->
                            <td class="py-3 px-4 align-top text-right">
                                <div class="inline-flex items-center justify-end gap-1">
                                    <!-- View Modal Button -->
                                    <button type="button" 
                                            wire:click="viewRequest({{ $item->id }})"
                                            class="p-1 rounded-md text-zinc-500 hover:text-zinc-900 hover:bg-zinc-100 transition-colors cursor-pointer"
                                            title="View Full Details">
                                        <i class="ri-eye-line text-sm"></i>
                                    </button>

                                    <!-- Toggle Read/Unread Button -->
                                    <button type="button" 
                                            wire:click="toggleRead({{ $item->id }})"
                                            class="p-1 rounded-md text-zinc-500 hover:text-zinc-900 hover:bg-zinc-100 transition-colors cursor-pointer"
                                            title="{{ $item->is_read ? 'Mark as Unread' : 'Mark as Read' }}">
                                        @if($item->is_read)
                                            <i class="ri-mail-unread-line text-sm text-zinc-400 hover:text-amber-600"></i>
                                        @else
                                            <i class="ri-mail-check-line text-sm text-amber-600 hover:text-zinc-700"></i>
                                        @endif
                                    </button>

                                    <!-- Delete Button -->
                                    <button type="button" 
                                            wire:click="confirmDelete({{ $item->id }})"
                                            class="p-1 rounded-md text-zinc-400 hover:text-rose-600 hover:bg-rose-50 transition-colors cursor-pointer"
                                            title="Delete Application">
                                        <i class="ri-delete-bin-line text-sm"></i>
                                    </button>
                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center">
                                <div class="max-w-sm mx-auto space-y-2">
                                    <div class="w-10 h-10 rounded-full bg-zinc-100 text-zinc-400 flex items-center justify-center mx-auto">
                                        <i class="ri-user-search-line text-lg"></i>
                                    </div>
                                    <p class="text-xs font-semibold text-zinc-800">No applications found</p>
                                    <p class="text-[11px] text-zinc-500 leading-normal">
                                        @if(!empty($search) || $filter !== 'all' || $roleFilter !== 'all')
                                            Try adjusting your search keywords, role selection, or status filters.
                                        @else
                                            Applications submitted through the public join modal will appear here.
                                        @endif
                                    </p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($this->joinRequests->hasPages())
            <div class="px-4 py-3 border-t border-zinc-200 bg-zinc-50/50">
                {{ $this->joinRequests->links() }}
            </div>
        @endif
    </div>

    <!-- View Application Details Modal (shadcn Dialog style matching admin pattern) -->
    <div x-data="{ open: @entangle('showViewModal') }"
         x-show="open"
         x-cloak
         x-transition:enter="transition ease-out duration-150"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-100"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @keydown.escape.window="$wire.closeViewModal()"
         class="fixed inset-0 z-50 overflow-y-auto bg-black/60 backdrop-blur-2xs p-4 sm:p-6 flex items-center justify-center">

        <div @click.outside="$wire.closeViewModal()"
             x-show="open"
             x-transition:enter="transition ease-out duration-150"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="relative w-full max-w-xl bg-white rounded-xl shadow-lg border border-zinc-200 overflow-hidden my-8">

            @if($this->selectedRequest)
                <!-- Dialog Header -->
                <div class="px-6 py-4 border-b border-zinc-200 flex items-start justify-between bg-zinc-50/50">
                    <div class="pr-6">
                        <span class="inline-flex items-center gap-1 text-[11px] font-mono text-zinc-400 mb-0.5">
                            Application #{{ $this->selectedRequest->id }} · {{ $this->selectedRequest->created_at->format('M d, Y h:i A') }}
                        </span>
                        <div class="flex items-center gap-2">
                            <h3 class="text-sm font-semibold text-zinc-950 font-heading capitalize">
                                {{ $this->selectedRequest->participation_type }} Application
                            </h3>
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-medium {{ $this->selectedRequest->is_read ? 'bg-zinc-100 text-zinc-600 border border-zinc-200' : 'bg-amber-50 text-amber-700 border border-amber-200/80' }}">
                                <span class="w-1.5 h-1.5 rounded-full {{ $this->selectedRequest->is_read ? 'bg-zinc-400' : 'bg-amber-500' }}"></span>
                                <span>{{ $this->selectedRequest->is_read ? 'Read' : 'Unread' }}</span>
                            </span>
                        </div>
                    </div>
                    <button type="button" 
                            wire:click="closeViewModal"
                            class="rounded-md p-1 text-zinc-400 hover:text-zinc-700 hover:bg-zinc-100 transition-colors cursor-pointer"
                            aria-label="Close dialog">
                        <i class="ri-close-line text-base"></i>
                    </button>
                </div>

                <div class="p-6 space-y-4">
                    <!-- Applicant Details Card -->
                    <div class="rounded-lg border border-zinc-200 bg-zinc-50/50 p-4 grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                        <!-- Phone -->
                        <div>
                            <span class="text-[11px] text-zinc-500 font-medium block">Phone / WhatsApp</span>
                            <a href="tel:{{ $this->selectedRequest->phone }}" class="text-zinc-900 font-semibold font-mono hover:text-amber-600 transition-colors inline-flex items-center gap-1.5 mt-0.5">
                                <i class="ri-phone-line text-xs text-zinc-400"></i>
                                <span>{{ $this->selectedRequest->phone }}</span>
                            </a>
                        </div>

                        <!-- Name -->
                        <div>
                            <span class="text-[11px] text-zinc-500 font-medium block">Full Name</span>
                            <span class="text-zinc-900 font-medium mt-0.5 block">
                                {{ $this->selectedRequest->name ?: 'Not provided' }}
                            </span>
                        </div>

                        <!-- Email -->
                        <div>
                            <span class="text-[11px] text-zinc-500 font-medium block">Email Address</span>
                            @if($this->selectedRequest->email)
                                <a href="mailto:{{ $this->selectedRequest->email }}" class="text-zinc-900 font-medium hover:text-amber-600 transition-colors inline-flex items-center gap-1.5 mt-0.5 truncate max-w-full">
                                    <i class="ri-mail-line text-xs text-zinc-400"></i>
                                    <span class="truncate">{{ $this->selectedRequest->email }}</span>
                                </a>
                            @else
                                <span class="text-zinc-400 italic">Not provided</span>
                            @endif
                        </div>

                        <!-- City -->
                        <div>
                            <span class="text-[11px] text-zinc-500 font-medium block">Location / City</span>
                            <span class="text-zinc-900 font-medium mt-0.5 block">
                                {{ $this->selectedRequest->city ?: 'Not provided' }}
                            </span>
                        </div>

                        <!-- Navodaya Affiliation -->
                        <div>
                            <span class="text-[11px] text-zinc-500 font-medium block">Navodaya Affiliation</span>
                            <span class="text-zinc-900 font-medium mt-0.5 block capitalize">
                                {{ $this->selectedRequest->affiliation ?: 'None' }}
                            </span>
                        </div>

                        <!-- Affiliation Detail -->
                        <div>
                            <span class="text-[11px] text-zinc-500 font-medium block">School / Batch / Org</span>
                            <span class="text-zinc-900 font-medium mt-0.5 block">
                                {{ $this->selectedRequest->affiliation_detail ?: 'Not specified' }}
                            </span>
                        </div>
                    </div>

                    <!-- Message / Area of Interest -->
                    <div>
                        <span class="text-[11px] text-zinc-500 font-medium block mb-1">Area of Interest & Message</span>
                        <div class="rounded-lg border border-zinc-200 bg-white p-4 text-xs text-zinc-800 leading-relaxed whitespace-pre-line max-h-56 overflow-y-auto">
                            {{ $this->selectedRequest->message ?: 'No additional notes provided.' }}
                        </div>
                    </div>
                </div>

                <!-- Dialog Footer -->
                <div class="border-t border-zinc-200 px-6 py-3 bg-zinc-50/50 flex items-center justify-between">
                    <button type="button" 
                            wire:click="toggleRead({{ $this->selectedRequest->id }})"
                            class="inline-flex items-center gap-1.5 h-8 px-3 rounded-md text-xs font-medium text-zinc-700 bg-white border border-zinc-200 shadow-2xs hover:bg-zinc-50 hover:text-zinc-900 transition-colors cursor-pointer">
                        @if($this->selectedRequest->is_read)
                            <i class="ri-mail-unread-line text-xs"></i>
                            <span>Mark as Unread</span>
                        @else
                            <i class="ri-mail-check-line text-xs text-amber-600"></i>
                            <span>Mark as Read</span>
                        @endif
                    </button>

                    <button type="button" 
                            wire:click="closeViewModal"
                            class="inline-flex items-center justify-center h-8 px-4 rounded-md text-xs font-medium text-zinc-700 bg-white border border-zinc-200 shadow-2xs hover:bg-zinc-50 hover:text-zinc-900 transition-colors cursor-pointer">
                        Close
                    </button>
                </div>
            @endif

        </div>
    </div>

    <!-- Delete Confirmation Modal (shadcn Alert Dialog style matching admin pattern) -->
    <div x-data="{ open: @entangle('showDeleteModal') }"
         x-show="open"
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
             x-show="open"
             x-transition:enter="transition ease-out duration-150"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="relative w-full max-w-md bg-white rounded-xl shadow-lg border border-zinc-200 overflow-hidden my-8 p-6 space-y-4">

            <div class="flex items-start gap-3">
                <div class="w-10 h-10 rounded-full bg-rose-50 text-rose-600 flex items-center justify-center shrink-0 border border-rose-100">
                    <i class="ri-error-warning-line text-lg"></i>
                </div>
                <div class="space-y-1">
                    <h3 class="text-sm font-semibold text-zinc-900 font-heading">
                        Delete Application
                    </h3>
                    <p class="text-xs text-zinc-500 leading-normal">
                        Are you sure you want to permanently delete the application from <span class="font-mono font-semibold text-zinc-900">{{ $deletingRequestPhone }}</span>? This action cannot be undone.
                    </p>
                </div>
            </div>

            <div class="flex items-center justify-end gap-2 pt-2">
                <button type="button" 
                        wire:click="cancelDelete"
                        class="inline-flex items-center justify-center h-8 px-3 rounded-md text-xs font-medium text-zinc-700 bg-white border border-zinc-200 shadow-2xs hover:bg-zinc-50 hover:text-zinc-900 transition-colors cursor-pointer">
                    Cancel
                </button>
                <button type="button" 
                        wire:click="delete"
                        wire:loading.attr="disabled"
                        class="inline-flex items-center justify-center gap-1.5 h-8 px-3.5 rounded-md text-xs font-medium text-white bg-rose-600 shadow-2xs hover:bg-rose-700 transition-colors cursor-pointer disabled:opacity-60">
                    <span wire:loading.remove wire:target="delete">Delete</span>
                    <span wire:loading wire:target="delete" class="inline-flex items-center gap-1">
                        <i class="ri-loader-4-line animate-spin text-xs"></i>
                        <span>Deleting...</span>
                    </span>
                </button>
            </div>

        </div>
    </div>

</div>
