<div>
    <!-- Hero Slider Section (Clean, Professional, Left-Side Content with Soft Fade to Photography on Right) -->
    <section x-data="{
        activeSlide: 0,
        totalSlides: 4,
        timer: null,
        intervalMs: 5000,
        isPaused: false,
        init() {
            this.startAutoplay();
        },
        startAutoplay() {
            if (this.timer) clearInterval(this.timer);
            this.timer = setInterval(() => {
                if (!this.isPaused) {
                    this.next();
                }
            }, this.intervalMs);
        },
        next() {
            this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
        },
        prev() {
            this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
        },
        goTo(i) {
            this.activeSlide = i;
            this.startAutoplay();
        }
    }" 
    @mouseenter="isPaused = true" 
    @mouseleave="isPaused = false"
    class="relative bg-white border-b border-slate-200 overflow-hidden select-none">

        <!-- Slides Wrapper -->
        <div class="relative w-full min-h-[460px] sm:min-h-[480px] lg:min-h-[500px] flex items-center">

            <!-- SLIDE 0: Overview & From Skills to Enterprise -->
            <div x-show="activeSlide === 0"
                 x-transition:enter="transition-opacity duration-700 ease-out"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity duration-300 ease-in"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="w-full h-full absolute inset-0 flex items-center">
                
                <!-- Right Photography with Left Fade Mask -->
                <div class="absolute inset-y-0 right-0 w-full sm:w-3/5 lg:w-3/5 h-full overflow-hidden pointer-events-none">
                    <img src="{{ asset('images/hero.jpg') }}" 
                         alt="Navudyam Foundation skilling and innovation" 
                         class="w-full h-full object-cover object-center"
                         style="-webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%); mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%);" />
                    <div class="absolute inset-0 bg-white/85 sm:hidden pointer-events-none"></div>
                </div>

                <!-- Left Content -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20 py-12 sm:py-16">
                    <div class="w-full sm:max-w-xl lg:max-w-lg space-y-4">
                        
                        <!-- Clean Bordered Badge (like reference image) -->
                        <div>
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-semibold tracking-wider text-red-600 border border-red-200 bg-red-50/50 uppercase">
                                ADMISSIONS OPEN 2026-2027
                            </span>
                        </div>

                        <!-- Clean Bold Heading -->
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-950 tracking-tight leading-[1.14] font-heading">
                            Empowering Navodayans. <br />
                            Building Sustainable <br />
                            Enterprises.
                        </h1>

                        <!-- Concise Description -->
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-md">
                            Equipping Jawahar Navodaya Vidyalaya alumni and rural youth with specialized skills, turnkey incubation, and modern enterprise ownership in service industries.
                        </p>

                        <!-- Clean Pill CTA Button -->
                        <div class="pt-2">
                            <a href="#programs" 
                               class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200">
                                Explore Programs
                            </a>
                        </div>

                    </div>
                </div>

            </div>

            <!-- SLIDE 1: Commercial Laundry & Allied Services Hub -->
            <div x-show="activeSlide === 1"
                 x-transition:enter="transition-opacity duration-700 ease-out"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity duration-300 ease-in"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="w-full h-full absolute inset-0 flex items-center">
                
                <!-- Right Photography with Left Fade Mask -->
                <div class="absolute inset-y-0 right-0 w-full sm:w-3/5 lg:w-3/5 h-full overflow-hidden pointer-events-none">
                    <img src="{{ asset('images/entrepreneur.jpg') }}" 
                         alt="Navudyam commercial laundry and service entrepreneur" 
                         class="w-full h-full object-cover object-center"
                         style="-webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%); mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%);" />
                    <div class="absolute inset-0 bg-white/85 sm:hidden pointer-events-none"></div>
                </div>

                <!-- Left Content -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20 py-12 sm:py-16">
                    <div class="w-full sm:max-w-xl lg:max-w-lg space-y-4">
                        
                        <div>
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-semibold tracking-wider text-red-600 border border-red-200 bg-red-50/50 uppercase">
                                INCUBATION COHORT 2026
                            </span>
                        </div>

                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-950 tracking-tight leading-[1.14] font-heading">
                            Creating Dignified Jobs <br />
                            Through Commercial <br />
                            Laundry Hubs.
                        </h1>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-md">
                            Transforming vocational skills into profitable commercial laundry and service ventures with turnkey machinery, operational SOPs, and working capital access.
                        </p>

                        <div class="pt-2">
                            <a href="#inquiry" 
                               class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200">
                                Apply for Incubation
                            </a>
                        </div>

                    </div>
                </div>

            </div>

            <!-- SLIDE 2: Alumni Mentorship Network -->
            <div x-show="activeSlide === 2"
                 x-transition:enter="transition-opacity duration-700 ease-out"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity duration-300 ease-in"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="w-full h-full absolute inset-0 flex items-center">
                
                <!-- Right Photography with Left Fade Mask -->
                <div class="absolute inset-y-0 right-0 w-full sm:w-3/5 lg:w-3/5 h-full overflow-hidden pointer-events-none">
                    <img src="{{ asset('images/mentorship.jpg') }}" 
                         alt="Navodaya alumni mentorship circle" 
                         class="w-full h-full object-cover object-center"
                         style="-webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%); mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%);" />
                    <div class="absolute inset-0 bg-white/85 sm:hidden pointer-events-none"></div>
                </div>

                <!-- Left Content -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20 py-12 sm:py-16">
                    <div class="w-full sm:max-w-xl lg:max-w-lg space-y-4">
                        
                        <div>
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-semibold tracking-wider text-red-600 border border-red-200 bg-red-50/50 uppercase">
                                ALUMNI MENTORSHIP NETWORK
                            </span>
                        </div>

                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-950 tracking-tight leading-[1.14] font-heading">
                            Mentoring the Next <br />
                            Generation of Rural <br />
                            Founders.
                        </h1>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-md">
                            Connecting emerging grassroots innovators with seasoned Navodaya alumni — corporate CXOs, tech founders, and civil servants walking beside them 1-on-1.
                        </p>

                        <div class="pt-2">
                            <a href="#inquiry" 
                               class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200">
                                Join as Mentor
                            </a>
                        </div>

                    </div>
                </div>

            </div>

            <!-- SLIDE 3: Education & Scholarships -->
            <div x-show="activeSlide === 3"
                 x-transition:enter="transition-opacity duration-700 ease-out"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity duration-300 ease-in"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="w-full h-full absolute inset-0 flex items-center">
                
                <!-- Right Photography with Left Fade Mask -->
                <div class="absolute inset-y-0 right-0 w-full sm:w-3/5 lg:w-3/5 h-full overflow-hidden pointer-events-none">
                    <img src="{{ asset('images/education.jpg') }}" 
                         alt="Jawahar Navodaya Vidyalaya students" 
                         class="w-full h-full object-cover object-center"
                         style="-webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%); mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%);" />
                    <div class="absolute inset-0 bg-white/85 sm:hidden pointer-events-none"></div>
                </div>

                <!-- Left Content -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20 py-12 sm:py-16">
                    <div class="w-full sm:max-w-xl lg:max-w-lg space-y-4">
                        
                        <div>
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-semibold tracking-wider text-red-600 border border-red-200 bg-red-50/50 uppercase">
                                EDUCATION & FELLOWSHIPS
                            </span>
                        </div>

                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-950 tracking-tight leading-[1.14] font-heading">
                            Nurturing India's <br />
                            Brightest Grassroots <br />
                            Innovators.
                        </h1>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-md">
                            Ensuring no student from our 660+ Jawahar Navodaya Vidyalayas is held back by financial constraints. Higher-education fellowships, digital literacy, and leadership coaching.
                        </p>

                        <div class="pt-2">
                            <a href="#programs" 
                               class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200">
                                Discover Fellowships
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <!-- Stable Bottom-Left Pagination Indicator (matching reference image: dot - active red bar - dot) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative pb-8 z-30 pointer-events-none">
            <div class="flex items-center gap-2 pointer-events-auto">
                <button type="button" 
                        @click="goTo(0)" 
                        class="transition-all duration-300 focus:outline-none" 
                        :class="activeSlide === 0 ? 'w-6 h-2 bg-red-600 rounded-full' : 'w-2 h-2 bg-slate-300 hover:bg-slate-400 rounded-full'" 
                        aria-label="Slide 1"></button>
                <button type="button" 
                        @click="goTo(1)" 
                        class="transition-all duration-300 focus:outline-none" 
                        :class="activeSlide === 1 ? 'w-6 h-2 bg-red-600 rounded-full' : 'w-2 h-2 bg-slate-300 hover:bg-slate-400 rounded-full'" 
                        aria-label="Slide 2"></button>
                <button type="button" 
                        @click="goTo(2)" 
                        class="transition-all duration-300 focus:outline-none" 
                        :class="activeSlide === 2 ? 'w-6 h-2 bg-red-600 rounded-full' : 'w-2 h-2 bg-slate-300 hover:bg-slate-400 rounded-full'" 
                        aria-label="Slide 3"></button>
                <button type="button" 
                        @click="goTo(3)" 
                        class="transition-all duration-300 focus:outline-none" 
                        :class="activeSlide === 3 ? 'w-6 h-2 bg-red-600 rounded-full' : 'w-2 h-2 bg-slate-300 hover:bg-slate-400 rounded-full'" 
                        aria-label="Slide 4"></button>
            </div>
        </div>

    </section>

    <!-- Impact Counter Strip (Wadhwani Scorecard Style) -->
    <section id="impact" class="bg-white py-10 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 divide-y md:divide-y-0 md:divide-x divide-slate-100">
                
                <div class="text-center pt-4 md:pt-0">
                    <p class="text-3xl sm:text-4xl font-extrabold text-navy-900 tracking-tight font-heading">660+</p>
                    <p class="text-sm font-semibold text-slate-800 mt-1">Jawahar Navodaya Vidyalayas</p>
                    <p class="text-xs text-slate-500 mt-0.5">Covering nearly every rural district in India</p>
                </div>

                <div class="text-center pt-4 md:pt-0 md:pl-6">
                    <p class="text-3xl sm:text-4xl font-extrabold text-emerald-700 tracking-tight font-heading">15,000+</p>
                    <p class="text-sm font-semibold text-slate-800 mt-1">Youth & Students Skilled</p>
                    <p class="text-xs text-slate-500 mt-0.5">Vocational, digital & managerial training</p>
                </div>

                <div class="text-center pt-4 md:pt-0 md:pl-6">
                    <p class="text-3xl sm:text-4xl font-extrabold text-amber-600 tracking-tight font-heading">350+</p>
                    <p class="text-sm font-semibold text-slate-800 mt-1">Enterprises Incubated</p>
                    <p class="text-xs text-slate-500 mt-0.5">Commercial laundry & allied service units</p>
                </div>

                <div class="text-center pt-4 md:pt-0 md:pl-6">
                    <p class="text-3xl sm:text-4xl font-extrabold text-navy-800 tracking-tight font-heading">1,200+</p>
                    <p class="text-sm font-semibold text-slate-800 mt-1">Active Alumni Mentors</p>
                    <p class="text-xs text-slate-500 mt-0.5">Founders, CXOs & senior civil servants</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Who We Are / Navodaya Ethos (Acumen & Smile Foundation Narrative) -->
    <section id="mission" class="py-16 lg:py-20 bg-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Visual: Plain Clean Image (No overlays, no frame design) -->
                <div class="lg:col-span-5">
                    <img src="{{ asset('images/education.jpg') }}" 
                         alt="Jawahar Navodaya Vidyalaya students and community" 
                         class="w-full h-80 sm:h-96 lg:h-[480px] object-cover rounded-md shadow-sm border border-slate-200" />
                </div>

                <!-- Right Narrative (7 cols) -->
                <div class="lg:col-span-7 space-y-5">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                        OUR ETHOS & ORIGIN
                    </span>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-navy-950 tracking-tight leading-snug font-heading">
                        Born from the Spirit of Navodaya: <br />
                        <span class="text-navy-700">Empowering Grassroots Talent from Potential to Prosperity.</span>
                    </h2>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        The Jawahar Navodaya Vidyalaya (JNV) system was founded with a singular, noble mission: to identify brilliant minds in rural India and provide them with top-tier education irrespective of socio-economic background.
                    </p>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Yet, upon completing their schooling or graduation, many exceptionally gifted young Navodayans face limited opportunities in their home districts. <strong>NAVUDYAM Foundation</strong> was established by proud Navodaya alumni to close this bridge. We channel the collective strength of alumni worldwide to transition youth <em>"From Skills to Enterprise"</em> — creating dignified job creators rather than job seekers.
                    </p>

                    <!-- 3 Core Principles (Clean, rounded-md) -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                        <div class="p-4 rounded-md bg-white border border-slate-200 shadow-sm">
                            <div class="w-8 h-8 rounded-md bg-navy-100 text-navy-900 flex items-center justify-center font-bold text-xs mb-2">
                                01
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm">Dignity in Enterprise</h3>
                            <p class="text-xs text-slate-500 mt-1">Transforming service trades into respected, tech-enabled businesses.</p>
                        </div>

                        <div class="p-4 rounded-md bg-white border border-slate-200 shadow-sm">
                            <div class="w-8 h-8 rounded-md bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xs mb-2">
                                02
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm">Alumni Giving Back</h3>
                            <p class="text-xs text-slate-500 mt-1">Leveraging 3 decades of Navodayan alumni success to uplift the next generation.</p>
                        </div>

                        <div class="p-4 rounded-md bg-white border border-slate-200 shadow-sm">
                            <div class="w-8 h-8 rounded-md bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-xs mb-2">
                                03
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm">Sustainable Ecosystem</h3>
                            <p class="text-xs text-slate-500 mt-1">Reinvesting profits and mentorship locally to build resilient rural economies.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- The 4 Core Focus Pillars (Clean, rounded-md, no pill badges) -->
    <section id="pillars" class="py-16 lg:py-20 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-14 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                    OUR CORE PILLARS
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-950 tracking-tight font-heading">
                    An Integrated Ecosystem for Holistic Youth Empowerment
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Designed with the structured rigor of Wadhwani Foundation and the purpose-driven depth of Acumen Academy, our four pillars ensure no talent is left behind.
                </p>
            </div>

            <!-- Pillars Grid (4 Cards, rounded-md) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Pillar 1: Education -->
                <div class="bg-slate-50 hover:bg-white rounded-md p-6 border border-slate-200 hover:border-navy-900 hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div class="space-y-3">
                        <div class="w-11 h-11 rounded-md bg-navy-100 text-navy-900 flex items-center justify-center font-bold group-hover:bg-navy-900 group-hover:text-amber-400 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 group-hover:text-navy-700 transition-colors">
                            Education & Skilling
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Equipping rural students and alumni with 21st-century digital competencies, financial accounting, operational management, and leadership skills.
                        </p>
                        <ul class="text-xs text-slate-500 space-y-1 pt-1">
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Higher Education Scholarships</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Vocational Certification Programs</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Tech & Digital Readiness Bootcamps</li>
                        </ul>
                    </div>
                    <div class="pt-5 border-t border-slate-200 mt-5">
                        <a href="#programs" class="text-xs font-bold uppercase tracking-wider text-navy-900 group-hover:text-amber-600 inline-flex items-center gap-1 transition-colors">
                            Explore Education Track →
                        </a>
                    </div>
                </div>

                <!-- Pillar 2: Entrepreneurship (From Skills to Enterprise) -->
                <div class="bg-slate-50 hover:bg-white rounded-md p-6 border border-slate-200 hover:border-emerald-600 hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div class="space-y-3">
                        <div class="w-11 h-11 rounded-md bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold group-hover:bg-emerald-700 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 group-hover:text-emerald-700 transition-colors">
                            Enterprise Incubation
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Turning vocational skills into thriving commercial enterprises. Specializing in laundry, garment care, and allied service sectors with equipment access and supply chains.
                        </p>
                        <ul class="text-xs text-slate-500 space-y-1 pt-1">
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Laundry & Allied Service Hubs</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Micro-Capital & Mudra Linkages</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Standard Operating Procedure Training</li>
                        </ul>
                    </div>
                    <div class="pt-5 border-t border-slate-200 mt-5">
                        <a href="#programs" class="text-xs font-bold uppercase tracking-wider text-emerald-700 group-hover:text-emerald-900 inline-flex items-center gap-1 transition-colors">
                            Explore Incubation Track →
                        </a>
                    </div>
                </div>

                <!-- Pillar 3: Mentorship Network -->
                <div class="bg-slate-50 hover:bg-white rounded-md p-6 border border-slate-200 hover:border-amber-500 hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div class="space-y-3">
                        <div class="w-11 h-11 rounded-md bg-amber-100 text-amber-800 flex items-center justify-center font-bold group-hover:bg-amber-500 group-hover:text-navy-950 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 group-hover:text-amber-600 transition-colors">
                            Alumni Mentorship
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Connecting aspiring young entrepreneurs with seasoned Navodayan alumni who are now successful founders, senior corporate leaders, and civil servants.
                        </p>
                        <ul class="text-xs text-slate-500 space-y-1 pt-1">
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> 1-on-1 Founder Mentorship</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Monthly Masterclasses & Clinics</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Technical & Financial Advisory</li>
                        </ul>
                    </div>
                    <div class="pt-5 border-t border-slate-200 mt-5">
                        <a href="#inquiry" class="text-xs font-bold uppercase tracking-wider text-amber-700 group-hover:text-navy-950 inline-flex items-center gap-1 transition-colors">
                            Join as Mentor →
                        </a>
                    </div>
                </div>

                <!-- Pillar 4: Navodayan Community -->
                <div class="bg-slate-50 hover:bg-white rounded-md p-6 border border-slate-200 hover:border-sky-500 hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div class="space-y-3">
                        <div class="w-11 h-11 rounded-md bg-sky-100 text-sky-800 flex items-center justify-center font-bold group-hover:bg-sky-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 group-hover:text-sky-700 transition-colors">
                            Navodayan Network
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            The unique bond of 7 years in residential schools creates an unbreakable family. We organize regional chapters, peer mutual assistance, and campus outreach.
                        </p>
                        <ul class="text-xs text-slate-500 space-y-1 pt-1">
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> 50+ City & District Chapters</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> JNV Campus Outreach & Guidance</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Navodaya Social Welfare Fund</li>
                        </ul>
                    </div>
                    <div class="pt-5 border-t border-slate-200 mt-5">
                        <a href="#community" class="text-xs font-bold uppercase tracking-wider text-sky-700 group-hover:text-navy-950 inline-flex items-center gap-1 transition-colors">
                            Explore Community →
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- The Navudyam Model: How We Create Change (Acumen Academy Inspired) -->
    <section id="model" class="py-16 lg:py-20 bg-navy-950 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-14 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">
                    THE NAVUDYAM PATHWAY
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight font-heading">
                    How We Catalyze Sustainable Grassroots Enterprises
                </h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    A tested four-stage model that bridges raw talent, technical training, institutional support, and market sustainability.
                </p>
            </div>

            <!-- 4-Stage Pathway Timeline (rounded-md cards) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                
                <!-- Stage 1 -->
                <div class="bg-navy-900/90 rounded-md p-6 border border-navy-800 relative hover:border-amber-400/50 transition-all duration-200">
                    <div class="text-amber-400 font-extrabold text-2xl mb-2 font-heading">01</div>
                    <span class="text-[11px] uppercase tracking-wider font-bold text-amber-300 block mb-1">STAGE 1</span>
                    <h3 class="text-base font-bold text-white mb-2">Discover & Mobilize</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        Through JNV school outreach and alumni registries, we identify ambitious young minds eager to pursue vocational mastery and independent enterprise.
                    </p>
                </div>

                <!-- Stage 2 -->
                <div class="bg-navy-900/90 rounded-md p-6 border border-navy-800 relative hover:border-emerald-400/50 transition-all duration-200">
                    <div class="text-emerald-400 font-extrabold text-2xl mb-2 font-heading">02</div>
                    <span class="text-[11px] uppercase tracking-wider font-bold text-emerald-300 block mb-1">STAGE 2</span>
                    <h3 class="text-base font-bold text-white mb-2">Skill & Certify</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        Intensive hands-on bootcamps in modern commercial laundry machinery, chemical safety, fabric hygiene, digital invoicing, and client relationship management.
                    </p>
                </div>

                <!-- Stage 3 -->
                <div class="bg-navy-900/90 rounded-md p-6 border border-navy-800 relative hover:border-sky-400/50 transition-all duration-200">
                    <div class="text-sky-400 font-extrabold text-2xl mb-2 font-heading">03</div>
                    <span class="text-[11px] uppercase tracking-wider font-bold text-sky-300 block mb-1">STAGE 3</span>
                    <h3 class="text-base font-bold text-white mb-2">Incubate & Equip</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        Providing turnkey business templates, vendor discounts on commercial machinery, credit linkage via government schemes, and initial working capital advisory.
                    </p>
                </div>

                <!-- Stage 4 -->
                <div class="bg-navy-900/90 rounded-md p-6 border border-navy-800 relative hover:border-amber-400/50 transition-all duration-200">
                    <div class="text-amber-400 font-extrabold text-2xl mb-2 font-heading">04</div>
                    <span class="text-[11px] uppercase tracking-wider font-bold text-amber-300 block mb-1">STAGE 4</span>
                    <h3 class="text-base font-bold text-white mb-2">Mentor & Scale</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        Pairing each entrepreneur with a dedicated Navodaya Alumni Mentor for 24 months of operational troubleshooting, expansion planning, and hiring local youth.
                    </p>
                </div>

            </div>

            <!-- Callout Bar (Clean, rounded-md) -->
            <div class="mt-12 bg-navy-900/70 rounded-md p-6 border border-navy-800 flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="space-y-1 text-center md:text-left">
                    <h3 class="text-lg font-bold text-white">Want to incubate an enterprise in your district?</h3>
                    <p class="text-slate-400 text-xs sm:text-sm">We provide end-to-end blueprint, vendor access, training, and mentor support.</p>
                </div>
                <a href="#inquiry" class="px-5 py-2.5 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-500 rounded-md transition-all shadow whitespace-nowrap">
                    Apply for Incubation Support
                </a>
            </div>

        </div>
    </section>

    <!-- Flagship Programs (Wadhwani Presentation Structure) -->
    <section id="programs" class="py-16 lg:py-20 bg-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 block">
                        FLAGSHIP INITIATIVES
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-950 tracking-tight font-heading mt-1">
                        High-Impact Programs Built for Scale
                    </h2>
                </div>

                <!-- Program Filter Tabs (Livewire Driven, rounded-md) -->
                <div class="flex flex-wrap gap-2">
                    <button wire:click="setProgramFilter('all')" 
                            class="px-3.5 py-1.5 text-xs font-bold rounded-md transition-colors {{ $activeProgramFilter === 'all' ? 'bg-navy-950 text-white' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200' }}">
                        All Programs
                    </button>
                    <button wire:click="setProgramFilter('enterprise')" 
                            class="px-3.5 py-1.5 text-xs font-bold rounded-md transition-colors {{ $activeProgramFilter === 'enterprise' ? 'bg-navy-950 text-white' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200' }}">
                        Enterprise Incubation
                    </button>
                    <button wire:click="setProgramFilter('mentorship')" 
                            class="px-3.5 py-1.5 text-xs font-bold rounded-md transition-colors {{ $activeProgramFilter === 'mentorship' ? 'bg-navy-950 text-white' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200' }}">
                        Mentorship
                    </button>
                    <button wire:click="setProgramFilter('education')" 
                            class="px-3.5 py-1.5 text-xs font-bold rounded-md transition-colors {{ $activeProgramFilter === 'education' ? 'bg-navy-950 text-white' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200' }}">
                        Education & Skilling
                    </button>
                </div>
            </div>

            <!-- Program Cards Grid (rounded-md) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                @if($activeProgramFilter === 'all' || $activeProgramFilter === 'enterprise')
                <!-- Program 1 -->
                <div class="bg-white rounded-md overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div class="p-6 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-bold uppercase tracking-wider text-amber-700">Commercial Enterprise</span>
                            <span class="text-slate-400">Pan-India</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 group-hover:text-amber-600 transition-colors">
                            Navudyam Laundry & Allied Enterprise Hub
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            A comprehensive incubation initiative helping rural youths set up modern commercial laundry, wet-cleaning, and garment finishing facilities. From machinery sourcing to digital billing systems.
                        </p>
                        <div class="bg-slate-50 p-3 rounded-md border border-slate-100 space-y-1 text-xs text-slate-600">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Incubation Cycle:</span>
                                <span class="font-bold text-slate-800">6M Intensive + 18M Support</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Average Unit Revenue:</span>
                                <span class="font-bold text-emerald-700">₹1.8L - ₹3.5L / mo</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="#inquiry" class="w-full inline-flex items-center justify-center py-2 px-4 rounded-md text-xs font-bold uppercase tracking-wider text-navy-900 bg-slate-100 hover:bg-navy-950 hover:text-white transition-all">
                            Apply for Incubation →
                        </a>
                    </div>
                </div>
                @endif

                @if($activeProgramFilter === 'all' || $activeProgramFilter === 'mentorship')
                <!-- Program 2 -->
                <div class="bg-white rounded-md overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div class="p-6 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-bold uppercase tracking-wider text-emerald-800">Mentorship & Guidance</span>
                            <span class="text-slate-400">Alumni Driven</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 group-hover:text-emerald-700 transition-colors">
                            Margdarshan Mentorship Circle
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            A nationwide cohort program that matches emerging first-generation entrepreneurs with seasoned Navodaya alumni for structured, one-on-one strategic direction and operational problem solving.
                        </p>
                        <div class="bg-slate-50 p-3 rounded-md border border-slate-100 space-y-1 text-xs text-slate-600">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Mentor Commitment:</span>
                                <span class="font-bold text-slate-800">2 Hours / Month</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Network Reach:</span>
                                <span class="font-bold text-emerald-700">1,200+ Mentors in 14 Countries</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="#inquiry" class="w-full inline-flex items-center justify-center py-2 px-4 rounded-md text-xs font-bold uppercase tracking-wider text-navy-900 bg-slate-100 hover:bg-navy-950 hover:text-white transition-all">
                            Register as Mentor →
                        </a>
                    </div>
                </div>
                @endif

                @if($activeProgramFilter === 'all' || $activeProgramFilter === 'education')
                <!-- Program 3 -->
                <div class="bg-white rounded-md overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div class="p-6 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-bold uppercase tracking-wider text-sky-800">Education & Scholarships</span>
                            <span class="text-slate-400">Higher Education</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 group-hover:text-sky-700 transition-colors">
                            NavoShiksha Leadership Fellowship
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Financial aid, entrance exam guidance, and leadership grants for underprivileged JNV students pursuing vocational degrees, engineering, management, and technical certifications.
                        </p>
                        <div class="bg-slate-50 p-3 rounded-md border border-slate-100 space-y-1 text-xs text-slate-600">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Annual Scholarships:</span>
                                <span class="font-bold text-slate-800">500+ Deserving Students</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">In-depth Coaching:</span>
                                <span class="font-bold text-emerald-700">Digital & Residential</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="#inquiry" class="w-full inline-flex items-center justify-center py-2 px-4 rounded-md text-xs font-bold uppercase tracking-wider text-navy-900 bg-slate-100 hover:bg-navy-950 hover:text-white transition-all">
                            Inquire for Grants →
                        </a>
                    </div>
                </div>
                @endif

                @if($activeProgramFilter === 'all' || $activeProgramFilter === 'enterprise')
                <!-- Program 4 -->
                <div class="bg-white rounded-md overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div class="p-6 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-bold uppercase tracking-wider text-amber-700">Rural Clusters</span>
                            <span class="text-slate-400">District Level</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 group-hover:text-amber-600 transition-colors">
                            Gram Udyam Enterprise Clusters
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Creating collaborative micro-enterprises in tier-2 and tier-3 rural areas, enabling collective buying power for machinery and centralized logistics for service delivery.
                        </p>
                        <div class="bg-slate-50 p-3 rounded-md border border-slate-100 space-y-1 text-xs text-slate-600">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Operational Clusters:</span>
                                <span class="font-bold text-slate-800">24 Districts</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Jobs Created:</span>
                                <span class="font-bold text-emerald-700">3,200+ Local Livelihoods</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="#inquiry" class="w-full inline-flex items-center justify-center py-2 px-4 rounded-md text-xs font-bold uppercase tracking-wider text-navy-900 bg-slate-100 hover:bg-navy-950 hover:text-white transition-all">
                            Partner on Clusters →
                        </a>
                    </div>
                </div>
                @endif

            </div>

        </div>
    </section>

    <!-- Grassroots Transformation Stories (Smile Foundation Storytelling) -->
    <section id="stories" class="py-16 lg:py-20 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-14 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 block">
                    VOICES OF TRANSFORMATION
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-950 tracking-tight font-heading">
                    Real People. Real Enterprises. Grassroots Impact.
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Following Smile Foundation’s compassionate human-first storytelling, meet the Navodayans who converted skills into life-changing enterprises and the mentors walking beside them.
                </p>
            </div>

            <!-- Story Cards (3 Rich Impact Stories, rounded-md) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <!-- Story 1: Rajesh Sharma (Entrepreneur) -->
                <div class="bg-slate-50 rounded-md overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col group">
                    <div class="relative h-60 overflow-hidden">
                        <img src="{{ asset('images/entrepreneur.jpg') }}" 
                             alt="Rajesh Sharma, founder of Sparkle Laundry Co." 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        <div class="absolute top-3 left-3 bg-navy-900/90 text-amber-300 text-[10px] font-bold px-2 py-0.5 rounded-xs">
                            ENTERPRISE FOUNDER • JNV WARDHA
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col justify-between space-y-3">
                        <div class="space-y-2.5">
                            <blockquote class="italic text-slate-700 text-xs sm:text-sm leading-relaxed border-l-2 border-amber-500 pl-3">
                                "NAVUDYAM didn’t just teach me how to operate commercial machines; they gave me the blueprint, financial confidence, and a mentor who believed in me."
                            </blockquote>
                            <h3 class="text-base font-bold text-navy-950">Rajesh Sharma</h3>
                            <p class="text-xs text-slate-500">Founder, Sparkle Laundry Co. • Wardha, Maharashtra</p>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Today, Rajesh operates a premier commercial laundry unit serving hospitals and hotels, generating sustainable employment for 14 rural youths.
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-200 flex items-center justify-between text-xs text-slate-500">
                            <span class="font-semibold text-emerald-700">14 Jobs Created</span>
                            <span>Incubated in 2023</span>
                        </div>
                    </div>
                </div>

                <!-- Story 2: Dr. Rameshwar Rao (Mentor) -->
                <div class="bg-slate-50 rounded-md overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col group">
                    <div class="relative h-60 overflow-hidden">
                        <img src="{{ asset('images/mentorship.jpg') }}" 
                             alt="Dr. Ananya Sen mentoring young leaders" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        <div class="absolute top-3 left-3 bg-navy-900/90 text-emerald-300 text-[10px] font-bold px-2 py-0.5 rounded-xs">
                            SENIOR ALUMNI MENTOR • JNV ALWAR
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col justify-between space-y-3">
                        <div class="space-y-2.5">
                            <blockquote class="italic text-slate-700 text-xs sm:text-sm leading-relaxed border-l-2 border-emerald-500 pl-3">
                                "The education we received at Navodaya cost our families almost nothing, yet gave us global careers. Giving back through NAVUDYAM is our collective joy."
                            </blockquote>
                            <h3 class="text-base font-bold text-navy-950">Dr. Ananya Sen & Mentorship Board</h3>
                            <p class="text-xs text-slate-500">Senior Director & JNV Alumni Mentor • New Delhi</p>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Mentoring over 40 aspiring enterprise leaders yearly, providing monthly governance sessions, tech advisory, and industry networking.
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-200 flex items-center justify-between text-xs text-slate-500">
                            <span class="font-semibold text-navy-900">40+ Mentees Guided</span>
                            <span>Mentor since 2022</span>
                        </div>
                    </div>
                </div>

                <!-- Story 3: JNV Students (Education & Hope) -->
                <div class="bg-slate-50 rounded-md overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col group">
                    <div class="relative h-60 overflow-hidden">
                        <img src="{{ asset('images/education.jpg') }}" 
                             alt="JNV Students smiling" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        <div class="absolute top-3 left-3 bg-navy-900/90 text-sky-300 text-[10px] font-bold px-2 py-0.5 rounded-xs">
                            STUDENT SCHOLARS • JNV PAURI
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col justify-between space-y-3">
                        <div class="space-y-2.5">
                            <blockquote class="italic text-slate-700 text-xs sm:text-sm leading-relaxed border-l-2 border-sky-500 pl-3">
                                "Knowing that senior Navodayans across the country are standing behind us gave our batch the courage to dream into building our own ventures."
                            </blockquote>
                            <h3 class="text-base font-bold text-navy-950">Pooja & Batchmates</h3>
                            <p class="text-xs text-slate-500">NavoShiksha Fellows • Uttarakhand</p>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Recipients of digital skilling scholarships and higher-education grants, preparing for degrees in agricultural technology and enterprise management.
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-200 flex items-center justify-between text-xs text-slate-500">
                            <span class="font-semibold text-sky-700">100% College Retention</span>
                            <span>Cohort 2024</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Navodayan Community Banner (The Soul & Brotherhood of Navodaya) -->
    <section id="community" class="py-14 bg-navy-950 text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-3 text-center lg:text-left">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">
                        NAVDARSHAN • THE ALUMNI PLEDGE
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white font-heading">
                        Are You a Navodayan? <br class="hidden sm:inline" />
                        Bring Your Expertise Back to the Family.
                    </h2>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed max-w-2xl">
                        No matter which Jawahar Navodaya Vidyalaya you graduated from, or which corner of the world you lead in — your insights, time, and mentorship can turn an aspiring student into tomorrow's enterprise founder.
                    </p>
                </div>
                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-2.5 justify-center">
                    <a href="#inquiry" class="text-center px-5 py-2.5 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-500 rounded-md transition-all shadow">
                        Register as Navodaya Mentor
                    </a>
                    <a href="#inquiry" class="text-center px-5 py-2.5 text-xs font-bold uppercase tracking-wider text-white bg-navy-800 hover:bg-navy-700 border border-navy-700 rounded-md transition-all">
                        Connect with Local Chapter
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Engagement & Inquiry Section (Livewire Powered, rounded-md) -->
    <section id="inquiry" class="py-16 lg:py-20 bg-slate-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-white rounded-lg p-7 sm:p-10 border border-slate-200 shadow-sm space-y-6">
                
                <div class="text-center space-y-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-navy-800 block">
                        GET IN TOUCH
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-navy-950 font-heading">
                        Join Hands with NAVUDYAM Foundation
                    </h2>
                    <p class="text-slate-600 text-xs sm:text-sm max-w-lg mx-auto">
                        Whether you want to mentor, start an enterprise unit, or partner with us through CSR, we welcome your initiative.
                    </p>
                </div>

                @if($inquirySubmitted)
                    <div class="p-6 rounded-md bg-emerald-50 border border-emerald-200 text-center space-y-3">
                        <div class="w-10 h-10 bg-emerald-100 text-emerald-700 rounded-md flex items-center justify-center mx-auto text-lg font-bold">
                            ✓
                        </div>
                        <h3 class="text-lg font-bold text-emerald-900">Thank You for Connecting!</h3>
                        <p class="text-xs sm:text-sm text-emerald-800 max-w-md mx-auto">
                            We have received your details. A member of the NAVUDYAM Foundation team or alumni chapter will reach out to you within 48 hours.
                        </p>
                        <button wire:click="resetInquiry" class="px-4 py-2 text-xs font-bold uppercase tracking-wider bg-emerald-700 hover:bg-emerald-800 text-white rounded-md transition-colors">
                            Submit Another Request
                        </button>
                    </div>
                @else
                    <form wire:submit="submitInquiry" class="space-y-5">
                        
                        <!-- Role / Interest Selector (rounded-md) -->
                        <div class="space-y-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700">
                                How would you like to participate?
                            </label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">
                                <label class="flex items-center gap-2 p-2.5 rounded-md border cursor-pointer transition-all {{ $inquiryType === 'mentor' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-slate-50 text-slate-600' }}">
                                    <input type="radio" wire:model.live="inquiryType" value="mentor" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Join as Mentor (Alumni)</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-md border cursor-pointer transition-all {{ $inquiryType === 'entrepreneur' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-slate-50 text-slate-600' }}">
                                    <input type="radio" wire:model.live="inquiryType" value="entrepreneur" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Apply for Incubation</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-md border cursor-pointer transition-all {{ $inquiryType === 'partner' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-slate-50 text-slate-600' }}">
                                    <input type="radio" wire:model.live="inquiryType" value="partner" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Corporate / CSR Partner</span>
                                </label>
                            </div>
                        </div>

                        <!-- Form Inputs (rounded-md) -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Full Name *</label>
                                <input type="text" wire:model="inquiryName" placeholder="e.g. Ramesh Kumar" 
                                       class="w-full bg-slate-50 border border-slate-300 rounded-md px-3 py-2 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                                @error('inquiryName') <span class="text-xs text-rose-600 font-medium">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Email Address *</label>
                                <input type="email" wire:model="inquiryEmail" placeholder="e.g. ramesh@example.com" 
                                       class="w-full bg-slate-50 border border-slate-300 rounded-md px-3 py-2 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                                @error('inquiryEmail') <span class="text-xs text-rose-600 font-medium">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Phone / WhatsApp Number *</label>
                                <input type="text" wire:model="inquiryPhone" placeholder="e.g. +91 9876543210" 
                                       class="w-full bg-slate-50 border border-slate-300 rounded-md px-3 py-2 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                                @error('inquiryPhone') <span class="text-xs text-rose-600 font-medium">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">JNV School / District / Organization</label>
                                <input type="text" wire:model="inquiryJnvSchool" placeholder="e.g. JNV Wardha, Maharashtra" 
                                       class="w-full bg-slate-50 border border-slate-300 rounded-md px-3 py-2 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Brief Message / Goals</label>
                            <textarea wire:model="inquiryMessage" rows="3" placeholder="Tell us how you'd like to get involved or what you'd like to learn..." 
                                      class="w-full bg-slate-50 border border-slate-300 rounded-md px-3 py-2 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500"></textarea>
                        </div>

                        <div class="text-center pt-2">
                            <button type="submit" 
                                    class="w-full sm:w-auto px-7 py-2.5 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-500 rounded-md shadow-sm transition-all">
                                <span wire:loading.remove>Submit Inquiry</span>
                                <span wire:loading>Processing...</span>
                            </button>
                            <p class="text-[11px] text-slate-400 mt-2">
                                We respect your privacy. No spam. You will be contacted directly by our program coordinators.
                            </p>
                        </div>

                    </form>
                @endif

            </div>

        </div>
    </section>
</div>