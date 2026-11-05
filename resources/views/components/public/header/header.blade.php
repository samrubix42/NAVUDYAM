<header x-data="{ mobileMenuOpen: false, scrolled: false }" 
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })" 
        class="sticky top-0 z-50 transition-all duration-300 w-full"
        :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-md border-b border-slate-200/80' : 'bg-white border-b border-slate-100'">
    
    <!-- Top Contact & Positioning Bar -->
    <div class="hidden md:block bg-navy-950 text-white text-[11px] sm:text-xs py-2 px-4 sm:px-6 lg:px-8 border-b border-navy-900 select-none">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-2.5">
            <!-- Left: Direct Contact Information & Positioning -->
            <div class="flex items-center flex-wrap justify-center sm:justify-start gap-3 sm:gap-4 text-slate-300">
                <a href="tel:+917122550192" class="inline-flex items-center gap-1.5 hover:text-logo-yellow transition-colors">
                    <i class="ri-phone-line text-logo-yellow shrink-0 text-sm"></i>
                    <span>+91 712 255 0192</span>
                </a>
                <span class="text-navy-800">|</span>
                <a href="mailto:contact@navudyam.org" class="inline-flex items-center gap-1.5 hover:text-logo-yellow transition-colors">
                    <i class="ri-mail-line text-logo-yellow shrink-0 text-sm"></i>
                    <span>contact@navudyam.org</span>
                </a>
                <span class="hidden md:inline text-navy-800">|</span>
                <span class="hidden lg:inline-flex items-center gap-1.5 text-slate-300 font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-logo-yellow inline-block"></span>
                    <span>Rooted in Navodaya. Open to Everyone.</span>
                </span>
            </div>

            <!-- Right: Philosophy & Quick Link -->
            <div class="flex items-center gap-3 sm:gap-4 text-slate-300">
                <span class="hidden sm:inline text-logo-yellow font-semibold tracking-wide">Learn. Connect. Grow.</span>
                <span class="hidden sm:inline text-navy-800">|</span>
                <a href="{{ route('contact') }}" class="hover:text-logo-yellow transition-colors">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center group focus:outline-none focus:ring-2 focus:ring-amber-500 rounded p-1">
                <img src="{{ asset('logo.webp') }}" 
                     alt="NAVUDYAM Foundation" 
                     class="h-14 sm:h-16 w-auto transition-transform duration-300 group-hover:scale-105 drop-shadow-sm" />
            </a>

            <!-- Desktop Navigation Links (Consistent menu: Home | Our Story | What We Do | Stories | Events | Get Involved) -->
            <nav class="hidden lg:flex items-center gap-7 font-medium text-sm text-slate-700">
                <a href="{{ route('home') }}" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 {{ request()->routeIs('home') ? 'text-navy-950 border-amber-500' : 'border-transparent hover:border-amber-500' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 {{ request()->routeIs('about') ? 'text-navy-950 border-amber-500' : 'border-transparent hover:border-amber-500' }}">
                    Our Story
                </a>
                <a href="{{ route('initiatives') }}" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 {{ request()->routeIs('initiatives') ? 'text-navy-950 border-amber-500' : 'border-transparent hover:border-amber-500' }}">
                    What We Do
                </a>
                <a href="{{ route('stories') }}" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 {{ request()->routeIs('stories') ? 'text-navy-950 border-amber-500' : 'border-transparent hover:border-amber-500' }}">
                    Stories
                </a>
                <a href="{{ route('events') }}" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 {{ request()->routeIs('events') ? 'text-navy-950 border-amber-500' : 'border-transparent hover:border-amber-500' }}">
                    Events
                </a>
                <a href="{{ route('contact') }}" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 {{ request()->routeIs('contact') ? 'text-navy-950 border-amber-500' : 'border-transparent hover:border-amber-500' }}">
                    Get Involved
                </a>
            </nav>

            <!-- Desktop Action CTA Button -->
            <div class="hidden lg:flex items-center">
                <button @click="$dispatch('open-inquiry-modal')" 
                        type="button"
                        class="inline-flex items-center px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 border border-navy-950 rounded-full shadow-sm hover:shadow transition-all duration-200 cursor-pointer">
                    <span>Join NAVUDYAM</span>
                    <i class="ri-arrow-right-line ml-1.5 text-sm"></i>
                </button>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex lg:hidden">
                <button type="button" 
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        class="p-2 rounded-full text-slate-700 hover:text-navy-900 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-amber-500"
                        aria-label="Toggle navigation menu">
                    <i x-show="!mobileMenuOpen" class="ri-menu-line text-2xl"></i>
                    <i x-show="mobileMenuOpen" x-cloak class="ri-close-line text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Menu (Consistent menu: Home | Our Story | What We Do | Stories | Events | Get Involved) -->
    <div x-show="mobileMenuOpen" 
         x-cloak 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="lg:hidden bg-white border-b border-slate-200 px-4 pt-3 pb-6 space-y-3 shadow-xl">
        <div class="flex flex-col space-y-2 text-base font-medium text-slate-800">
            <a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900 {{ request()->routeIs('home') ? 'bg-slate-50 text-navy-950 font-bold' : '' }}">Home</a>
            <a href="{{ route('about') }}" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900 {{ request()->routeIs('about') ? 'bg-slate-50 text-navy-950 font-bold' : '' }}">Our Story</a>
            <a href="{{ route('initiatives') }}" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900 {{ request()->routeIs('initiatives') ? 'bg-slate-50 text-navy-950 font-bold' : '' }}">What We Do</a>
            <a href="{{ route('stories') }}" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900 {{ request()->routeIs('stories') ? 'bg-slate-50 text-navy-950 font-bold' : '' }}">Stories</a>
            <a href="{{ route('events') }}" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900 {{ request()->routeIs('events') ? 'bg-slate-50 text-navy-950 font-bold' : '' }}">Events</a>
            <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900 {{ request()->routeIs('contact') ? 'bg-slate-50 text-navy-950 font-bold' : '' }}">Get Involved</a>
        </div>
        <div class="pt-3 border-t border-slate-100 flex flex-col gap-2">
            <button @click="mobileMenuOpen = false; $dispatch('open-inquiry-modal')" 
                    type="button"
                    class="w-full text-center px-4 py-2.5 text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 rounded-full shadow-sm cursor-pointer">
                Join NAVUDYAM
            </button>
        </div>
    </div>
</header>
