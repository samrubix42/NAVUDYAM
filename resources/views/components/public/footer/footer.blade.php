<footer class="bg-navy-950 text-slate-300 pt-16 pb-12 border-t-4 border-amber-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Top Institutional Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-14 border-b border-navy-800">
            <!-- Brand & Mission Column (Spans 2 cols) -->
            <div class="lg:col-span-2 space-y-5">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('logo.webp') }}" 
                         alt="NAVUDYAM Foundation Logo" 
                         class="h-14 w-auto bg-white/10 backdrop-blur-sm p-1 rounded-full border border-white/20" />
                    <div>
                        <span class="text-2xl font-bold tracking-tight text-white block">
                            NAVUDYAM
                        </span>
                        <span class="text-xs font-semibold uppercase tracking-wider text-amber-400">
                            FOUNDATION
                        </span>
                    </div>
                </div>

                <p class="text-slate-300 text-sm leading-relaxed max-w-md">
                    Dedicated to empowering Jawahar Navodaya Vidyalaya alumni, students, and rural youth across India. 
                    From vocational excellence and specialized enterprise incubation in laundry & allied services, 
                    to lifelong alumni-led mentorship and dignified livelihoods.
                </p>

                <!-- Non-Profit Compliance & Trust Badges (Smile / Wadhwani style) -->
                <div class="pt-2 flex flex-wrap gap-2 text-xs">
                    <span class="inline-flex items-center px-2.5 py-1 rounded bg-navy-900 border border-navy-700 text-emerald-400 font-medium">
                        ✓ Registered Section 8 Not-For-Profit
                    </span>
                    <span class="inline-flex items-center px-2.5 py-1 rounded bg-navy-900 border border-navy-700 text-amber-300 font-medium">
                        ✓ 80G & 12A Certified
                    </span>
                    <span class="inline-flex items-center px-2.5 py-1 rounded bg-navy-900 border border-navy-700 text-sky-300 font-medium">
                        ✓ Pan-India JNV Network
                    </span>
                </div>
            </div>

            <!-- Focus Pillars Column -->
            <div class="space-y-4">
                <h4 class="text-white font-bold text-sm uppercase tracking-wider text-amber-400">
                    Focus Pillars
                </h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="#pillars" class="hover:text-white transition-colors">Education & Skilling</a></li>
                    <li><a href="#pillars" class="hover:text-white transition-colors">Enterprise Incubation</a></li>
                    <li><a href="#pillars" class="hover:text-white transition-colors">Alumni Mentorship</a></li>
                    <li><a href="#pillars" class="hover:text-white transition-colors">Navodayan Community</a></li>
                    <li><a href="#programs" class="hover:text-white transition-colors">Laundry & Service Hubs</a></li>
                    <li><a href="#model" class="hover:text-white transition-colors">The 4-Stage Pathway</a></li>
                </ul>
            </div>

            <!-- Flagship Programs Column -->
            <div class="space-y-4">
                <h4 class="text-white font-bold text-sm uppercase tracking-wider text-amber-400">
                    Programs
                </h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="#programs" class="hover:text-white transition-colors">Navudyam Enterprise Accelerator</a></li>
                    <li><a href="#programs" class="hover:text-white transition-colors">NavoShiksha Leadership Grant</a></li>
                    <li><a href="#programs" class="hover:text-white transition-colors">Margdarshan Mentorship Circle</a></li>
                    <li><a href="#programs" class="hover:text-white transition-colors">Gram Udyam Incubator</a></li>
                    <li><a href="#stories" class="hover:text-white transition-colors">Beneficiary Case Studies</a></li>
                    <li><a href="#community" class="hover:text-white transition-colors">Alumni Giving Back</a></li>
                </ul>
            </div>

            <!-- Newsletter & Connect Column -->
            <div class="space-y-4">
                <h4 class="text-white font-bold text-sm uppercase tracking-wider text-amber-400">
                    Stay Connected
                </h4>
                <p class="text-xs text-slate-300">
                    Subscribe to <em>The Navudyam Chronicle</em> — inspiring grassroots stories of enterprise and youth transformation.
                </p>

                <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to NAVUDYAM Foundation updates.');" class="space-y-2">
                    <div class="relative">
                        <input type="email" 
                               required
                               placeholder="Enter your email" 
                               class="w-full bg-navy-900 border border-navy-700 rounded-lg px-3.5 py-2.5 text-xs text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-500" />
                    </div>
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-navy-950 font-bold text-xs uppercase tracking-wider py-2.5 px-4 rounded-lg shadow transition-all">
                        Subscribe
                    </button>
                </form>

                <div class="pt-2 text-xs text-slate-400">
                    <p class="font-medium text-slate-200">Email: connect@navudyam.org</p>
                    <p class="mt-0.5">National Office: New Delhi • India</p>
                </div>
            </div>
        </div>

        <!-- Middle Quote / Ethos Banner (Acumen style philosophy) -->
        <div class="py-8 my-2 border-b border-navy-800 text-center max-w-3xl mx-auto">
            <blockquote class="italic text-slate-300 text-sm md:text-base font-light">
                "Rooted in the spirit of Jawahar Navodaya Vidyalayas: Where rural potential meets opportunity, 
                and collective mentorship turns dreams into sustainable enterprises."
            </blockquote>
        </div>

        <!-- Bottom Copyright & Legal Links -->
        <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-400">
            <p>© {{ date('Y') }} NAVUDYAM Foundation. All Rights Reserved. Built with pride for the Navodaya Family.</p>
            <div class="flex flex-wrap items-center gap-6">
                <a href="#mission" class="hover:text-slate-200 transition-colors">Privacy Policy</a>
                <a href="#mission" class="hover:text-slate-200 transition-colors">Terms of Governance</a>
                <a href="#impact" class="hover:text-slate-200 transition-colors">Annual Impact Reports</a>
                <a href="#contact" class="hover:text-slate-200 transition-colors">Grievance & Whistleblower</a>
            </div>
        </div>

    </div>
</footer>