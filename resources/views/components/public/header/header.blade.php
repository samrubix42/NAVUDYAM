<header x-data="{ mobileMenuOpen: false, scrolled: false }" 
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })" 
        class="sticky top-0 z-50 transition-all duration-300 w-full"
        :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-md border-b border-slate-200/80' : 'bg-white border-b border-slate-100'">
    
    <!-- Top Announcement Bar (Wadhwani / Institutional Foundation Style) -->
    <div class="bg-navy-950 text-white text-xs py-2 px-4 sm:px-6 lg:px-8 border-b border-navy-800">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2">
            <div class="flex items-center gap-2 text-slate-300 font-medium text-center sm:text-left">
                <span class="inline-flex items-center justify-center w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                <span>Bridging Talent & Enterprise across <strong>660+ Jawahar Navodaya Vidyalayas</strong></span>
                <span class="hidden md:inline text-slate-500">•</span>
                <span class="hidden md:inline text-amber-300 font-semibold">Navudyam Cohort 2026 Applications Open</span>
            </div>
            <div class="flex items-center gap-4 text-slate-300">
                <a href="#impact" class="hover:text-amber-400 transition-colors">Our Impact</a>
                <span class="text-slate-600">|</span>
                <a href="#alumni-network" class="hover:text-amber-400 transition-colors">Alumni Network</a>
                <span class="text-slate-600">|</span>
                <a href="#contact" class="hover:text-amber-400 transition-colors">Contact</a>
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

            <!-- Desktop Navigation Links (Acumen / Wadhwani Structure) -->
            <nav class="hidden lg:flex items-center gap-8 font-medium text-sm text-slate-700">
                <a href="#mission" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 border-transparent hover:border-amber-500">
                    Who We Are
                </a>
                <a href="#pillars" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 border-transparent hover:border-amber-500">
                    Pillars
                </a>
                <a href="#model" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 border-transparent hover:border-amber-500">
                    The Model
                </a>
                <a href="#videos" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 border-transparent hover:border-amber-500">
                    Stories in Motion
                </a>
                <a href="#blog" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 border-transparent hover:border-amber-500">
                    Blog & Insights
                </a>
                <a href="#community" class="hover:text-navy-900 font-semibold transition-colors py-2 border-b-2 border-transparent hover:border-amber-500">
                    Navodayan Network
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
            <a href="#mission" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">Who We Are</a>
            <a href="#pillars" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">Pillars of Impact</a>
            <a href="#model" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">The Navudyam Model</a>
            <a href="#videos" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">Stories in Motion</a>
            <a href="#blog" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">Blog & Insights</a>
            <a href="#community" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">Navodayan Network</a>
            <a href="#contact" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-md hover:bg-slate-50 hover:text-navy-900">Contact Us</a>
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