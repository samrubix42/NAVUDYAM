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
                    class="lg:hidden text-slate-400 hover:text-slate-600 p-1 rounded-md hover:bg-slate-100"
                    aria-label="Close sidebar">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Navigation Links (shadcn style) -->
        <nav class="flex-1 px-3 py-4 space-y-6 overflow-y-auto text-xs">
            
            <!-- Group: Overview -->
            <div>
                <p class="px-2.5 pb-2 text-[10px] font-semibold tracking-wider text-slate-400 uppercase">
                    Overview
                </p>
                <div class="space-y-1">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg font-medium transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </div>
            </div>

            <!-- Group: Programs & Content -->
            <div>
                <p class="px-2.5 pb-2 text-[10px] font-semibold tracking-wider text-slate-400 uppercase">
                    Programs & Content
                </p>
                <div class="space-y-1">
                    <a href="#initiatives" 
                       class="flex items-center justify-between px-2.5 py-2 rounded-lg font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100/70 transition-colors">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                            <span>Initiatives</span>
                        </div>
                        <span class="text-[10px] text-slate-400 font-medium">4</span>
                    </a>

                    <a href="#stories" 
                       class="flex items-center justify-between px-2.5 py-2 rounded-lg font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100/70 transition-colors">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                            <span>Stories & Resources</span>
                        </div>
                    </a>

                    <a href="#events" 
                       class="flex items-center justify-between px-2.5 py-2 rounded-lg font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100/70 transition-colors">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span>Events & Sessions</span>
                        </div>
                        <span class="text-[10px] text-slate-400 font-medium">3</span>
                    </a>

                    <a href="#inquiries" 
                       class="flex items-center justify-between px-2.5 py-2 rounded-lg font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100/70 transition-colors">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                            </svg>
                            <span>Applications & Inquiries</span>
                        </div>
                        <span class="text-[10px] font-semibold text-amber-700 bg-amber-50 border border-amber-200/70 px-1.5 py-0.2 rounded">5 New</span>
                    </a>
                </div>
            </div>

            <!-- Group: Community & Settings -->
            <div>
                <p class="px-2.5 pb-2 text-[10px] font-semibold tracking-wider text-slate-400 uppercase">
                    Platform
                </p>
                <div class="space-y-1">
                    <a href="#mentors" 
                       class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100/70 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <span>Alumni Mentors</span>
                    </a>

                    <a href="#settings" 
                       class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100/70 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Settings</span>
                    </a>
                </div>
            </div>

        </nav>

        <!-- Bottom User Profile Card (shadcn style) -->
        <div class="p-3 border-t border-slate-200/80">
            <div class="flex items-center justify-between p-2 rounded-lg hover:bg-slate-50 transition-colors">
                <div class="flex items-center gap-2.5 min-w-0">
                    <div class="w-8 h-8 rounded-full bg-slate-900 text-white font-semibold text-xs flex items-center justify-center shrink-0">
                        NA
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-semibold text-slate-900 truncate">Navudyam Admin</p>
                        <p class="text-[11px] text-slate-400 truncate">admin@navudyam.org</p>
                    </div>
                </div>
                <a href="{{ route('home') }}" 
                   title="Return to site"
                   class="p-1.5 rounded-md text-slate-400 hover:text-slate-700 hover:bg-slate-100 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                </a>
            </div>
        </div>

    </div>
</aside>