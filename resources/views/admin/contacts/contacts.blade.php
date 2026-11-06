<div class="space-y-6">

    <!-- Page Header (shadcn style) -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-5 border-b border-zinc-200">
        <div>
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-1.5 text-xs text-zinc-500 mb-1" aria-label="Breadcrumb">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-zinc-900 transition-colors">Admin</a>
                <i class="ri-arrow-right-s-line text-zinc-400"></i>
                <span class="text-zinc-900 font-medium">Inquiries & Messages</span>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900 font-heading">
                Inquiries & Messages
            </h1>
            <p class="text-xs text-zinc-500 mt-0.5">
                Review, respond, and manage submissions sent through the public contact form.
            </p>
        </div>

        <div class="flex items-center gap-2.5">
            <a href="{{ route('contact') }}" 
               target="_blank"
               class="inline-flex items-center justify-center gap-1.5 h-9 px-3 rounded-md text-xs font-medium text-zinc-700 bg-white border border-zinc-200 shadow-2xs hover:bg-zinc-50 hover:text-zinc-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 transition-colors">
                <i class="ri-external-link-line text-xs text-zinc-500"></i>
                <span>Public Contact Page</span>
            </a>
        </div>
    </div>

    <!-- Toolbar: Search & Segmented Filter -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
        <!-- Search Input -->
        <div class="relative flex-1 max-w-sm">
            <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-zinc-400 text-sm pointer-events-none"></i>
            <input wire:model.live.debounce.250ms="search" 
                   type="text" 
                   placeholder="Filter by phone, name, email, subject..." 
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

    <!-- Contacts Table Card (shadcn Table) -->
    <div class="rounded-lg border border-zinc-200 bg-white shadow-2xs overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="border-b border-zinc-200 bg-zinc-50/75 text-[11px] font-medium text-zinc-500 uppercase tracking-wider">
                        <th class="py-3 px-4 w-52">Contact Info</th>
                        <th class="py-3 px-4">Subject & Message</th>
                        <th class="py-3 px-4 w-28">Status</th>
                        <th class="py-3 px-4 w-32">Received</th>
                        <th class="py-3 px-4 w-28 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100">
                    @forelse($this->contacts as $item)
                        <tr class="hover:bg-zinc-50/70 transition-colors group {{ !$item->is_read ? 'bg-amber-50/20' : '' }}">
                            
                            <!-- Sender / Contact Info -->
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
                                            <span>{{ $item->name }}</span>
                                        @else
                                            <span class="text-zinc-400 italic">No name provided</span>
                                        @endif
                                    </div>
                                    @if($item->email)
                                        <a href="mailto:{{ $item->email }}" class="text-[11px] text-zinc-500 hover:text-zinc-800 transition-colors block truncate">
                                            {{ $item->email }}
                                        </a>
                                    @endif
                                </div>
                            </td>

                            <!-- Subject & Message Preview -->
                            <td class="py-3 px-4 cursor-pointer" wire:click="viewContact({{ $item->id }})">
                                <p class="text-xs font-semibold text-zinc-900 leading-snug line-clamp-1 group-hover:text-amber-700 transition-colors">
                                    {{ $item->subject }}
                                </p>
                                <p class="text-[11px] text-zinc-500 line-clamp-1 mt-0.5">
                                    {{ $item->message }}
                                </p>
                                <div class="flex items-center gap-1.5 mt-1">
                                    <span class="text-[10px] text-zinc-400 font-mono">#{{ $item->id }}</span>
                                </div>
                            </td>

                            <!-- Status Badge with Toggle -->
                            <td class="py-3 px-4">
                                <button type="button" 
                                        wire:click="toggleRead({{ $item->id }})"
                                        class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-medium transition-colors cursor-pointer {{ !$item->is_read ? 'border border-amber-200 bg-amber-50 text-amber-700 hover:bg-amber-100' : 'border border-zinc-200 bg-zinc-100 text-zinc-600 hover:bg-zinc-200' }}"
                                        title="Click to toggle read status">
                                    <span class="w-1.5 h-1.5 rounded-full {{ !$item->is_read ? 'bg-amber-500' : 'bg-zinc-400' }}"></span>
                                    <span>{{ !$item->is_read ? 'Unread' : 'Read' }}</span>
                                </button>
                            </td>

                            <!-- Received At -->
                            <td class="py-3 px-4 text-zinc-500 text-[11px]" title="{{ $item->created_at ? $item->created_at->format('M d, Y h:i A') : '' }}">
                                {{ $item->created_at ? $item->created_at->diffForHumans() : '—' }}
                            </td>

                            <!-- Action Buttons -->
                            <td class="py-3 px-4 text-right">
                                <div class="flex items-center justify-end gap-1">
                                    <!-- View Button -->
                                    <button type="button" 
                                            wire:click="viewContact({{ $item->id }})"
                                            class="w-7 h-7 rounded-md text-zinc-600 hover:text-zinc-950 hover:bg-zinc-100 flex items-center justify-center transition-colors cursor-pointer"
                                            title="View Full Message">
                                        <i class="ri-eye-line text-sm"></i>
                                    </button>

                                    <!-- Quick Mark Read/Unread Toggle -->
                                    <button type="button" 
                                            wire:click="toggleRead({{ $item->id }})"
                                            class="w-7 h-7 rounded-md text-zinc-500 hover:text-zinc-900 hover:bg-zinc-100 flex items-center justify-center transition-colors cursor-pointer"
                                            title="{{ $item->is_read ? 'Mark as Unread' : 'Mark as Read' }}">
                                        <i class="{{ $item->is_read ? 'ri-mail-unread-line' : 'ri-mail-open-line' }} text-sm"></i>
                                    </button>

                                    <!-- Delete Button -->
                                    <button type="button" 
                                            wire:click="confirmDelete({{ $item->id }})"
                                            class="w-7 h-7 rounded-md text-zinc-400 hover:text-red-600 hover:bg-red-50 flex items-center justify-center transition-colors cursor-pointer"
                                            title="Delete Inquiry">
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
                                        <i class="ri-inbox-line text-lg"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold text-zinc-900">No inquiries found</p>
                                        <p class="text-xs text-zinc-500 mt-0.5">
                                            {{ $search ? 'No inquiries matched your search query.' : 'Incoming contact form submissions will appear here.' }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Table Footer / Pagination -->
        @if($this->contacts->hasPages())
            <div class="px-4 py-3 border-t border-zinc-200 bg-zinc-50/50 flex items-center justify-between">
                <span class="text-xs text-zinc-500">
                    Showing <strong class="text-zinc-900">{{ $this->contacts->firstItem() }}</strong> to <strong class="text-zinc-900">{{ $this->contacts->lastItem() }}</strong> of <strong class="text-zinc-900">{{ $this->contacts->total() }}</strong> inquiries
                </span>
                <div class="flex items-center gap-1">
                    @if($this->contacts->onFirstPage())
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

                    @if($this->contacts->hasMorePages())
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

    <!-- VIEW INQUIRY DIALOG (shadcn Dialog style) -->
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

            @if($this->selectedContact)
                <!-- Dialog Header -->
                <div class="px-6 py-4 border-b border-zinc-200 flex items-start justify-between bg-zinc-50/50">
                    <div class="pr-6">
                        <span class="inline-flex items-center gap-1 text-[11px] font-mono text-zinc-400 mb-0.5">
                            Inquiry #{{ $this->selectedContact->id }} · {{ $this->selectedContact->created_at ? $this->selectedContact->created_at->format('M d, Y h:i A') : 'Recently' }}
                        </span>
                        <h3 class="text-sm font-semibold text-zinc-950 font-heading">
                            {{ $this->selectedContact->subject }}
                        </h3>
                    </div>
                    <button type="button" 
                            wire:click="closeViewModal"
                            class="rounded-md p-1 text-zinc-400 hover:text-zinc-700 hover:bg-zinc-100 transition-colors cursor-pointer"
                            aria-label="Close dialog">
                        <i class="ri-close-line text-base"></i>
                    </button>
                </div>

                <div class="p-6 space-y-4">

                    <!-- Contact Details Card -->
                    <div class="rounded-lg border border-zinc-200 bg-zinc-50/50 p-4 grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                        <!-- Phone -->
                        <div>
                            <span class="text-[11px] text-zinc-500 font-medium block">Phone / WhatsApp</span>
                            <a href="tel:{{ $this->selectedContact->phone }}" class="text-zinc-900 font-semibold font-mono hover:text-amber-600 transition-colors inline-flex items-center gap-1.5 mt-0.5">
                                <i class="ri-phone-line text-xs text-zinc-400"></i>
                                <span>{{ $this->selectedContact->phone }}</span>
                            </a>
                        </div>

                        <!-- Email -->
                        <div>
                            <span class="text-[11px] text-zinc-500 font-medium block">Email Address</span>
                            @if($this->selectedContact->email)
                                <a href="mailto:{{ $this->selectedContact->email }}" class="text-zinc-900 font-medium hover:text-amber-600 transition-colors inline-flex items-center gap-1.5 mt-0.5 truncate max-w-full">
                                    <i class="ri-mail-line text-xs text-zinc-400"></i>
                                    <span class="truncate">{{ $this->selectedContact->email }}</span>
                                </a>
                            @else
                                <span class="text-zinc-400 italic">Not provided</span>
                            @endif
                        </div>

                        <!-- Name -->
                        <div>
                            <span class="text-[11px] text-zinc-500 font-medium block">Full Name</span>
                            <span class="text-zinc-900 font-medium mt-0.5 block">
                                {{ $this->selectedContact->name ?: 'Anonymous / Not provided' }}
                            </span>
                        </div>

                        <!-- Status -->
                        <div>
                            <span class="text-[11px] text-zinc-500 font-medium block">Inquiry Status</span>
                            <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full text-[10px] font-medium mt-1 {{ !$this->selectedContact->is_read ? 'border border-amber-200 bg-amber-50 text-amber-700' : 'border border-zinc-200 bg-zinc-100 text-zinc-600' }}">
                                <span class="w-1.5 h-1.5 rounded-full {{ !$this->selectedContact->is_read ? 'bg-amber-500' : 'bg-zinc-400' }}"></span>
                                <span>{{ !$this->selectedContact->is_read ? 'Unread' : 'Read' }}</span>
                            </span>
                        </div>
                    </div>

                    <!-- Message Body -->
                    <div class="space-y-1.5">
                        <label class="block text-xs font-medium text-zinc-900">
                            Message Content
                        </label>
                        <div class="p-4 rounded-lg border border-zinc-200 bg-white text-xs text-zinc-800 leading-relaxed whitespace-pre-wrap max-h-72 overflow-y-auto">
                            {{ $this->selectedContact->message }}
                        </div>
                    </div>

                    <!-- Dialog Footer -->
                    <div class="pt-3 border-t border-zinc-200 flex items-center justify-between gap-2">
                        <!-- Left Action: Toggle Read -->
                        <button type="button" 
                                wire:click="toggleRead({{ $this->selectedContact->id }})"
                                class="inline-flex items-center gap-1.5 h-8 px-3 rounded-md text-xs font-medium border transition-colors cursor-pointer {{ $this->selectedContact->is_read ? 'border-zinc-200 bg-white text-zinc-700 hover:bg-zinc-50' : 'border-amber-200 bg-amber-50 text-amber-800 hover:bg-amber-100' }}">
                            <i class="{{ $this->selectedContact->is_read ? 'ri-mail-unread-line' : 'ri-mail-check-line' }} text-xs"></i>
                            <span>{{ $this->selectedContact->is_read ? 'Mark as Unread' : 'Mark as Read' }}</span>
                        </button>

                        <div class="flex items-center gap-2">
                            <!-- Delete Button -->
                            <button type="button" 
                                    wire:click="confirmDelete({{ $this->selectedContact->id }})"
                                    class="h-8 px-3 rounded-md text-xs font-medium text-red-600 hover:bg-red-50 transition-colors cursor-pointer">
                                Delete
                            </button>

                            <!-- Close Button -->
                            <button type="button" 
                                    wire:click="closeViewModal"
                                    class="h-8 px-3.5 rounded-md text-xs font-medium text-zinc-700 bg-white border border-zinc-200 hover:bg-zinc-50 shadow-2xs transition-colors cursor-pointer">
                                Close
                            </button>
                        </div>
                    </div>

                </div>
            @endif

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
                        Delete this inquiry?
                    </h3>
                    <p class="text-xs text-zinc-500 leading-relaxed">
                        This action cannot be undone. This will permanently remove the inquiry from <strong class="text-zinc-900 font-medium">{{ $deletingContactPhone }}</strong> from the database.
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
                    <span wire:loading.remove>Delete Inquiry</span>
                    <span wire:loading class="inline-flex items-center gap-1.5">
                        <i class="ri-loader-4-line animate-spin"></i>
                        <span>Deleting...</span>
                    </span>
                </button>
            </div>

        </div>
    </div>

</div>

