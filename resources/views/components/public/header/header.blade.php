<header x-data="{ mobileMenuOpen: false, scrolled: false }" 
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })" 
        class="sticky top-0 z-50 transition-all duration-300 w-full"
        :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-md border-b border-slate-200/80' : 'bg-white border-b border-slate-100'">
    
    <!-- Top Contact & Announcement Bar (Hidden on phone/mobile screens) -->
    <div class="hidden md:block bg-navy-950 text-white text-[11px] sm:text-xs py-2 px-4 sm:px-6 lg:px-8 border-b border-navy-900 select-none">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-2.5">
            <!-- Left: Direct Contact Information with Clean Icons -->
            <div class="flex items-center flex-wrap justify-center sm:justify-start gap-3 sm:gap-4 text-slate-300">
                <a href="tel:+917122550192" class="inline-flex items-center gap-1.5 hover:text-logo-yellow transition-colors">
                    <svg class="w-3.5 h-3.5 text-logo-yellow shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+91 712 255 0192</span>
                </a>
                <span class="text-navy-800">|</span>
                <a href="mailto:contact@navudyam.org" class="inline-flex items-center gap-1.5 hover:text-logo-yellow transition-colors">
                    <svg class="w-3.5 h-3.5 text-logo-yellow shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>contact@navudyam.org</span>
                </a>
                <span class="hidden md:inline text-navy-800">|</span>
                <span class="hidden md:inline-flex items-center gap-1.5 text-slate-400">
                    <svg class="w-3.5 h-3.5 text-logo-yellow shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span>Wardha, Maharashtra</span>
                </span>
            </div>

            <!-- Right: Clean Cohort Info / Key Action Links -->
            <div class="flex items-center gap-3 sm:gap-4 text-slate-300">
                
                <span class="hidden lg:inline text-navy-800">|</span>
                <a href="#impact" class="hover:text-logo-yellow transition-colors">Our Impact</a>
                <span class="text-navy-800">|</span>
                <a href="{{ route('contact') }}" class="hover:text-logo-yellow transition-colors">
                    Contact Us
                </a>
            
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo (Clean, without duplicate text beside it) -->
            <a href="{{ url('/') }}" class="flex items-center group focus:outline-none focus:ring-2 focus:ring-amber-500 rounded p-1">
                <img src="{{ asset('logo.webp') }}" 
                     alt="NAVUDYAM Foundation" 
                     class="h-14 sm:h-16 w-auto transition-transform duration-300 group-hover:scale-105 drop-shadow-sm" />
            </a>

            <!-- Desktop Navigation Links (Clean, with # anchors) -->
            <nav class="hidden lg:flex items-center gap-7 font-medium text-sm text-slate-700">
                <a href="#home" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 border-transparent hover:border-amber-500">
                    Home
                </a>
                <a href="{{ route('about') }}" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 border-transparent hover:border-amber-500">
                    About Us
                </a>
                <a href="{{ route('initiatives') }}" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 border-transparent hover:border-amber-500">
                    Our Initiatives
                </a>
                <a href="{{ route('events') }}" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 border-transparent hover:border-amber-500">
                    Events
                </a>
                <a href="{{ route('stories') }}" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 border-transparent hover:border-amber-500">
                    Stories & Resources
                </a>
                <a href="{{ route('contact') }}" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 border-transparent hover:border-amber-500">
                    Contact
                </a>
            </nav>

            <!-- Desktop Action CTA Buttons (Clean, rounded-full, triggers modal) -->
            <div class="hidden lg:flex items-center">
                <button @click="$dispatch('open-inquiry-modal')" 
                        type="button"
                        class="inline-flex items-center px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 border border-navy-950 rounded-full shadow-sm hover:shadow transition-all duration-200 cursor-pointer">
                    <span>Get Involved</span>
                    <svg class="ml-1.5 w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex lg:hidden">
                <button type="button" 
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        class="p-2 rounded-full text-slate-700 hover:text-navy-900 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-amber-500"
                        aria-label="Toggle navigation menu">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Menu (Accessible, Animated) -->
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
            <a href="#home" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">Home</a>
            <a href="{{ route('about') }}" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">About Us</a>
            <a href="{{ route('initiatives') }}" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">Our Initiatives</a>
            <a href="{{ route('events') }}" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">Events</a>
            <a href="{{ route('stories') }}" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">Stories & Resources</a>
            <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">Contact</a>
        </div>
        <div class="pt-3 border-t border-slate-100 flex flex-col gap-2">
            <button @click="mobileMenuOpen = false; $dispatch('open-inquiry-modal')" 
                    type="button"
                    class="w-full text-center px-4 py-2.5 text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 rounded-full shadow-sm cursor-pointer">
                Get Involved & Partner
            </button>
        </div>
    </div>
</header>