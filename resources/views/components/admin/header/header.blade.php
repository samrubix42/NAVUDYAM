<header class="h-14 bg-white/80 backdrop-blur-md border-b border-slate-200/80 px-4 sm:px-6 flex items-center justify-between sticky top-0 z-30">
    
    <!-- Left: Mobile Toggle & Breadcrumbs -->
    <div class="flex items-center gap-3">
        <!-- Mobile Sidebar Hamburger -->
        <button @click="sidebarOpen = !sidebarOpen" 
                type="button"
                class="lg:hidden p-1.5 rounded-md text-slate-500 hover:text-slate-900 hover:bg-slate-100 transition-colors"
                aria-label="Toggle navigation">
            <i class="ri-menu-line text-lg"></i>
        </button>

        <!-- Breadcrumbs (shadcn minimal) -->
        <nav aria-label="Breadcrumb" class="flex items-center gap-1.5 text-xs text-slate-500">
            <span class="hover:text-slate-700 transition-colors">Admin</span>
            <i class="ri-arrow-right-s-line text-slate-300 text-sm"></i>
            <span class="font-medium text-slate-900">Dashboard</span>
        </nav>
    </div>

    <!-- Right: Quick Search, External Site Link & Profile -->
    <div class="flex items-center gap-3">
        
        <!-- Search Bar with ⌘K Badge (shadcn style) -->
        <div class="relative hidden sm:flex items-center">
            <i class="ri-search-line text-slate-400 absolute left-2.5 pointer-events-none text-xs"></i>
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
            <i class="ri-external-link-line text-slate-400 text-xs"></i>
        </a>

        <!-- Notifications Icon Button -->
        <button type="button" 
                class="relative p-1.5 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-100 transition-colors"
                aria-label="View notifications">
            <i class="ri-notification-3-line text-base"></i>
            <span class="absolute top-1.5 right-1.5 w-1.5 h-1.5 bg-amber-500 rounded-full"></span>
        </button>

        <!-- Profile Avatar Button -->
        <div class="w-7 h-7 rounded-full bg-slate-900 text-white font-medium text-xs flex items-center justify-center cursor-pointer select-none ring-2 ring-slate-100">
            NA
        </div>

    </div>

</header>