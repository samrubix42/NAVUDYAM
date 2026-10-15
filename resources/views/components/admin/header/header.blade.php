<header class="h-14 bg-white/80 backdrop-blur-md border-b border-slate-200/80 px-4 sm:px-6 flex items-center justify-between sticky top-0 z-30">
    
    <!-- Left: Mobile Toggle & Breadcrumbs -->
    <div class="flex items-center gap-3">
        <!-- Mobile Sidebar Hamburger -->
        <button @click="sidebarOpen = !sidebarOpen" 
                type="button"
                class="lg:hidden p-1.5 rounded-md text-slate-500 hover:text-slate-900 hover:bg-slate-100 transition-colors"
                aria-label="Toggle navigation">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Breadcrumbs (shadcn minimal) -->
        <nav aria-label="Breadcrumb" class="flex items-center gap-1.5 text-xs text-slate-500">
            <span class="hover:text-slate-700 transition-colors">Admin</span>
            <svg class="w-3.5 h-3.5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="font-medium text-slate-900">Dashboard</span>
        </nav>
    </div>

    <!-- Right: Quick Search, External Site Link & Profile -->
    <div class="flex items-center gap-3">
        
        <!-- Search Bar with ⌘K Badge (shadcn style) -->
        <div class="relative hidden sm:flex items-center">
            <svg class="w-3.5 h-3.5 text-slate-400 absolute left-2.5 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <input type="text" 
                   placeholder="Search..." 
                   class="w-48 md:w-64 h-8 pl-8 pr-10 text-xs bg-slate-50 border border-slate-200 rounded-lg text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-slate-400 focus:bg-white transition-all shadow-2xs" />
            <kbd class="absolute right-2 text-[10px] text-slate-400 bg-white border border-slate-200 px-1 rounded font-mono shadow-2xs">
                ⌘K
            </kbd>
        </div>

        <!-- View Live Site Button -->
        <a href="{{ route('home') }}" 
           target="_blank"
           class="inline-flex items-center gap-1.5 px-2.5 py-1.5 text-xs font-medium text-slate-600 hover:text-slate-900 bg-white hover:bg-slate-50 border border-slate-200 rounded-lg shadow-2xs transition-colors">
            <span>Live Site</span>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
            </svg>
        </a>

        <!-- Notifications Icon Button -->
        <button type="button" 
                class="relative p-1.5 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-100 transition-colors"
                aria-label="View notifications">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>
            <span class="absolute top-1.5 right-1.5 w-1.5 h-1.5 bg-amber-500 rounded-full"></span>
        </button>

        <!-- Profile Avatar Button -->
        <div class="w-7 h-7 rounded-full bg-slate-900 text-white font-medium text-xs flex items-center justify-center cursor-pointer select-none ring-2 ring-slate-100">
            NA
        </div>

    </div>

</header>