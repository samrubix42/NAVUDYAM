<footer class="bg-navy-950 text-slate-400 py-12 sm:py-16 border-t border-navy-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-12 pb-12 border-b border-navy-900">
            
            <!-- Left: Brand Identity & Mission (Col 1-5) -->
            <div class="lg:col-span-5 space-y-4">
                <a href="{{ route('home') }}" class="inline-flex items-center group">
                    <img src="{{ asset('logo.webp') }}" 
                         alt="NAVUDYAM Foundation" 
                         class="h-12 w-auto brightness-0 invert opacity-95 transition-opacity group-hover:opacity-100 drop-shadow-sm" />
                </a>
                
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed max-w-sm">
                    Where New Ideas Find New Beginnings. A community-driven initiative focused on education, skill development, mentorship, entrepreneurship and meaningful collaboration.
                </p>

                <div class="pt-1 flex flex-wrap items-center gap-2 text-xs text-amber-400 font-medium">
                    <span>Rooted in Navodaya.</span>
                    <span class="text-slate-600">•</span>
                    <span>Open to Everyone.</span>
                    <span class="text-slate-600">•</span>
                    <span class="text-slate-300">Learn. Connect. Grow.</span>
                </div>

                <div class="pt-2 flex items-center gap-2 text-slate-400">
                    <a href="#" class="w-8 h-8 rounded-full bg-navy-900 hover:bg-amber-400 hover:text-navy-950 flex items-center justify-center transition-colors" aria-label="LinkedIn">
                        <i class="ri-linkedin-fill text-sm"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-navy-900 hover:bg-amber-400 hover:text-navy-950 flex items-center justify-center transition-colors" aria-label="Twitter X">
                        <i class="ri-twitter-x-line text-sm"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-navy-900 hover:bg-amber-400 hover:text-navy-950 flex items-center justify-center transition-colors" aria-label="Facebook">
                        <i class="ri-facebook-fill text-sm"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-navy-900 hover:bg-amber-400 hover:text-navy-950 flex items-center justify-center transition-colors" aria-label="YouTube">
                        <i class="ri-youtube-line text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Middle: Quick Navigation (Col 6-8) -->
            <div class="lg:col-span-3 space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white">
                    Quick Navigation
                </h4>
                <ul class="space-y-2 text-xs sm:text-sm"> 
                    <li>
                        <a href="{{ route('home') }}" class="text-slate-400 hover:text-amber-400 transition-colors">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-slate-400 hover:text-amber-400 transition-colors">Our Story</a>
                    </li>
                    <li>
                        <a href="{{ route('initiatives') }}" class="text-slate-400 hover:text-amber-400 transition-colors">What We Do</a>
                    </li>
                    <li>
                        <a href="{{ route('stories') }}" class="text-slate-400 hover:text-amber-400 transition-colors">Stories</a>
                    </li>
                    <li>
                        <a href="{{ route('events') }}" class="text-slate-400 hover:text-amber-400 transition-colors">Events</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-slate-400 hover:text-amber-400 transition-colors">Get Involved</a>
                    </li>               
                </ul>
            </div>

            <!-- Right: Connect & Contact (Col 9-12) -->
            <div class="lg:col-span-4 space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white">
                    Connect With Us
                </h4>
                <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                    Have questions about our initiatives, want to mentor, or wish to collaborate? We welcome everyone who believes in learning and growing together.
                </p>
                <div class="space-y-2.5 text-xs sm:text-sm">
                    <div class="flex items-center gap-2.5 text-slate-300">
                        <i class="ri-mail-line text-amber-400 text-base shrink-0"></i>
                        <a href="mailto:contact@navudyam.org" class="hover:text-amber-400 transition-colors">
                            contact@navudyam.org
                        </a>
                    </div>
                    <div class="flex items-center gap-2.5 text-slate-300">
                        <i class="ri-phone-line text-amber-400 text-base shrink-0"></i>
                        <a href="tel:+917122550192" class="hover:text-amber-400 transition-colors">
                            +91 712 255 0192
                        </a>
                    </div>
                    <div class="flex items-center gap-2.5 text-slate-400">
                        <i class="ri-map-pin-2-line text-amber-400 text-base shrink-0"></i>
                        <span>Wardha, Maharashtra, India</span>
                    </div>
                </div>
                <div>
                    <button @click="$dispatch('open-inquiry-modal')" 
                            type="button"
                            class="inline-flex items-center gap-2 px-5 py-2.5 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-all shadow-sm cursor-pointer">
                        <span>Join NAVUDYAM</span>
                        <i class="ri-arrow-right-line text-sm"></i>
                    </button>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright Row -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>© {{ date('Y') }} NAVUDYAM Foundation. All Rights Reserved.</p>
            <div class="flex items-center gap-3 text-center sm:text-right">
               
                <p>Rooted in Navodaya. Open to Everyone.</p>
            </div>
        </div>

    </div>
</footer>
