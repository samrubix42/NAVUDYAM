<aside>
    <!-- Mobile Drawer Overlay -->
    <div x-show="sidebarOpen" 
         x-cloak
         x-transition:enter="transition-opacity ease-linear duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="sidebarOpen = false"
         class="fixed inset-0 bg-slate-900/50 backdrop-blur-xs z-40 lg:hidden">
    </div>

    <!-- Sidebar Container -->
    <div class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-slate-200/80 flex flex-col transition-transform duration-200 ease-in-out lg:translate-x-0 lg:static lg:inset-auto lg:h-screen lg:sticky lg:top-0"
         :class="sidebarOpen ? 'translate-x-0 shadow-2xl' : '-translate-x-full lg:translate-x-0'">

        <!-- Brand / Header -->
        <div class="h-14 px-5 border-b border-slate-200/80 flex items-center justify-between">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5 group">
                <img src="{{ asset('logo.webp') }}" alt="Navudyam" class="h-7 w-auto" />
                <div class="flex items-center gap-1.5">
                    <span class="font-bold text-sm text-slate-900 tracking-tight font-heading">NAVUDYAM</span>
                    <span class="text-[10px] font-semibold text-slate-500 bg-slate-100 border border-slate-200 px-1.5 py-0.5 rounded">Admin</span>
                </div>
            </a>

            <!-- Close button for mobile -->
            <button @click="sidebarOpen = false" 
                    type="button" 
                    class="lg:hidden text-slate-400 hover:text-slate-600 p-1 rounded-md hover:bg-slate-100 cursor-pointer"
                    aria-label="Close sidebar">
                <i class="ri-close-line text-xl"></i>
            </button>
        </div>

        <!-- Navigation Links (Only Valid Links) -->
        <nav class="flex-1 px-3 py-4 space-y-6 overflow-y-auto text-xs">
            
            <!-- Group: Main -->
            <div>
                <p class="px-2.5 pb-2 text-[10px] font-semibold tracking-wider text-slate-400 uppercase">
                    Overview
                </p>
                <div class="space-y-1">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg font-medium transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                        <i class="ri-dashboard-line text-base shrink-0 {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-slate-400' }}"></i>
                        <span>Dashboard</span>
                    </a>
                </div>
            </div>

            <!-- Group: Submissions & Leads -->
            <div>
                <p class="px-2.5 pb-2 text-[10px] font-semibold tracking-wider text-slate-400 uppercase">
                    Submissions
                </p>
                <div class="space-y-1">
                    <!-- Join Applications -->
                    <a href="{{ route('admin.joins') }}" 
                       class="flex items-center justify-between px-2.5 py-2 rounded-lg font-medium transition-colors {{ request()->routeIs('admin.joins') ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                        <div class="flex items-center gap-2.5">
                            <i class="ri-user-add-line text-base shrink-0 {{ request()->routeIs('admin.joins') ? 'text-white' : 'text-slate-400' }}"></i>
                            <span>Join Applications</span>
                        </div>
                        @php
                            $unreadJoins = \App\Models\JoinRequest::where('is_read', false)->count();
                        @endphp
                        @if($unreadJoins > 0)
                            <span class="text-[10px] font-semibold {{ request()->routeIs('admin.joins') ? 'bg-white/20 text-white' : 'text-amber-700 bg-amber-50 border border-amber-200/70' }} px-1.5 py-0.5 rounded-full">
                                {{ $unreadJoins }} New
                            </span>
                        @endif
                    </a>

                    <!-- Inquiries & Contact Messages -->
                    <a href="{{ route('admin.contacts') }}" 
                       class="flex items-center justify-between px-2.5 py-2 rounded-lg font-medium transition-colors {{ request()->routeIs('admin.contacts') ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                        <div class="flex items-center gap-2.5">
                            <i class="ri-mail-open-line text-base shrink-0 {{ request()->routeIs('admin.contacts') ? 'text-white' : 'text-slate-400' }}"></i>
                            <span>Inquiries & Messages</span>
                        </div>
                        @php
                            $unreadContacts = \App\Models\Contact::where('is_read', false)->count();
                        @endphp
                        @if($unreadContacts > 0)
                            <span class="text-[10px] font-semibold {{ request()->routeIs('admin.contacts') ? 'bg-white/20 text-white' : 'text-amber-700 bg-amber-50 border border-amber-200/70' }} px-1.5 py-0.5 rounded-full">
                                {{ $unreadContacts }} New
                            </span>
                        @endif
                    </a>
                </div>
            </div>

            <!-- Group: Content Management -->
            <div>
                <p class="px-2.5 pb-2 text-[10px] font-semibold tracking-wider text-slate-400 uppercase">
                    Content & Events
                </p>
                <div class="space-y-1">
                    <!-- Events & Sessions -->
                    <a href="{{ route('admin.events') }}" 
                       class="flex items-center justify-between px-2.5 py-2 rounded-lg font-medium transition-colors {{ request()->routeIs('admin.events') ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                        <div class="flex items-center gap-2.5">
                            <i class="ri-calendar-event-line text-base shrink-0 {{ request()->routeIs('admin.events') ? 'text-white' : 'text-slate-400' }}"></i>
                            <span>Events & Sessions</span>
                        </div>
                    </a>

                    <!-- Stories & Resources -->
                    <a href="{{ route('admin.stories') }}" 
                       class="flex items-center justify-between px-2.5 py-2 rounded-lg font-medium transition-colors {{ request()->routeIs('admin.stories') ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                        <div class="flex items-center gap-2.5">
                            <i class="ri-article-line text-base shrink-0 {{ request()->routeIs('admin.stories') ? 'text-white' : 'text-slate-400' }}"></i>
                            <span>Stories & Resources</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Quick Website Link -->
            <div class="pt-2">
                <a href="{{ route('home') }}" 
                   target="_blank"
                   class="flex items-center justify-between px-2.5 py-2 rounded-lg font-medium text-slate-500 hover:text-slate-900 hover:bg-slate-100/70 transition-colors border border-dashed border-slate-200">
                    <div class="flex items-center gap-2">
                        <i class="ri-external-link-line text-sm shrink-0 text-slate-400"></i>
                        <span>View Public Website</span>
                    </div>
                    <i class="ri-arrow-right-up-line text-xs text-slate-400"></i>
                </a>
            </div>

        </nav>

        <!-- Bottom User Profile Card -->
        <div class="p-3 border-t border-slate-200/80">
            <div class="flex items-center justify-between p-2 rounded-lg hover:bg-slate-50 transition-colors">
                <div class="flex items-center gap-2.5 min-w-0">
                    <div class="w-8 h-8 rounded-full bg-slate-900 text-white font-semibold text-xs flex items-center justify-center shrink-0 uppercase">
                        {{ substr(auth()->user()?->name ?? 'NA', 0, 2) }}
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-semibold text-slate-900 truncate">{{ auth()->user()?->name ?? 'Navudyam Admin' }}</p>
                        <p class="text-[11px] text-slate-400 truncate">{{ auth()->user()?->email ?? 'admin@navudyam.org' }}</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" 
                            title="Sign out of Admin"
                            class="p-1.5 rounded-md text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors cursor-pointer">
                        <i class="ri-logout-box-r-line text-base"></i>
                    </button>
                </form>
            </div>
        </div>

    </div>
</aside>
