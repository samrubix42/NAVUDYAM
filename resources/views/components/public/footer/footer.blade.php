<footer class="bg-navy-950 text-slate-400 py-12 sm:py-16 border-t border-navy-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-12 pb-12 border-b border-navy-900">
            
            <!-- Left: Brand Identity & Mission (Col 1-5) -->
            <div class="lg:col-span-5 space-y-4">
                <a href="{{ url('/') }}" class="inline-flex items-center group">
                    <img src="{{ asset('logo.webp') }}" 
                         alt="NAVUDYAM Foundation" 
                         class="h-12 w-auto brightness-0 invert opacity-95 transition-opacity group-hover:opacity-100 drop-shadow-sm" />
                </a>
                
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed max-w-sm">
                    Empowering Navodaya alumni and rural youth to build real businesses, create local jobs, and support the next generation.
                </p>

       
            </div>

            <!-- Middle: Quick Navigation (Col 6-8) -->
            <div class="lg:col-span-3 space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white">
                    Quick Links
                </h4>
                <ul class="space-y-2 text-xs sm:text-sm">
                    <li>
                        <a href="#home" class="text-slate-400 hover:text-amber-400 transition-colors">Home</a>
                    </li>
                    <li>
                        <a href="#about-us" class="text-slate-400 hover:text-amber-400 transition-colors">About Us</a>
                    </li>
                    <li>
                        <a href="#initiatives" class="text-slate-400 hover:text-amber-400 transition-colors">Our Initiatives</a>
                    </li>
                    <li>
                        <a href="#events" class="text-slate-400 hover:text-amber-400 transition-colors">Events</a>
                    </li>
                    <li>
                        <a href="#resources" class="text-slate-400 hover:text-amber-400 transition-colors">Stories & Resources</a>
                    </li>
                    <li>
                        <a href="#contact" class="text-slate-400 hover:text-amber-400 transition-colors">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Right: Connect & Contact (Col 9-12) -->
            <div class="lg:col-span-4 space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white">
                    Connect With Us
                </h4>
                <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                    Have questions about our programs or want to partner with us? Reach out anytime.
                </p>
                <div class="space-y-2 text-xs sm:text-sm">
                    <div class="flex items-center gap-2 text-slate-300">
                        <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:connect@navudyam.org" class="hover:text-amber-400 transition-colors">
                            connect@navudyam.org
                        </a>
                    </div>
                    <div class="flex items-center gap-2 text-slate-400">
                        <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>New Delhi, India</span>
                    </div>
                </div>
                <div>
                    <button @click="$dispatch('open-inquiry-modal')" 
                            type="button"
                            class="inline-flex items-center gap-2 px-5 py-2.5 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-all shadow-sm cursor-pointer">
                        <span>Get In Touch</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright Row -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>© {{ date('Y') }} NAVUDYAM Foundation. All Rights Reserved.</p>
            <p class="text-slate-500 text-center sm:text-right">
                Built with pride for the Navodaya Family
            </p>
        </div>

    </div>
</footer>