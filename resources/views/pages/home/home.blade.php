<div>
    <!-- Hero Slider Section (Clean, Professional, Left-Side Content with Soft Fade to Photography on Right) -->
    <section id="home" x-data="{
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
                    <img src="{{ asset('images/hero.webp') }}" 
                         alt="Navudyam Foundation skilling and innovation" 
                         class="w-full h-full object-cover object-center"
                         style="-webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%); mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%);" />
                    <div class="absolute inset-0 bg-white/85 sm:hidden pointer-events-none"></div>
                </div>

                <!-- Left Content -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20 py-12 sm:py-16">
                    <div class="w-full sm:max-w-xl lg:max-w-lg space-y-4">
                        
                        <!-- Clean Bordered Badge -->
                        <div>
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wider text-navy-950 bg-logo-yellow uppercase shadow-xs">
                                NAVUDYAM FOUNDATION
                            </span>
                        </div>

                        <!-- Clean Bold Heading (Simple & Clear) -->
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-950 tracking-tight leading-[1.14] font-heading">
                            Helping Navodayans. <br />
                            Starting Real Businesses. <br />
                            Creating Local Jobs.
                        </h1>

                        <!-- Simple Concise Description -->
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-md">
                            We help Navodaya students and alumni learn practical skills, start their own small businesses, and earn a dignified livelihood.
                        </p>

                        <!-- Clean Pill CTA Button -->
                        <div class="pt-2">
                            <a href="#programs" 
                               class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200">
                                Explore What We Do
                            </a>
                        </div>

                    </div>
                </div>

            </div>

            <!-- SLIDE 1: Business Incubation -->
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
                    <img src="{{ asset('images/entrepreneur.webp') }}" 
                         alt="Navudyam commercial laundry and service entrepreneur" 
                         class="w-full h-full object-cover object-center"
                         style="-webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%); mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%);" />
                    <div class="absolute inset-0 bg-white/85 sm:hidden pointer-events-none"></div>
                </div>

                <!-- Left Content -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20 py-12 sm:py-16">
                    <div class="w-full sm:max-w-xl lg:max-w-lg space-y-4">
                        
                        <div>
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wider text-navy-950 bg-logo-yellow uppercase shadow-xs">
                                BUSINESS INCUBATION
                            </span>
                        </div>

                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-950 tracking-tight leading-[1.14] font-heading">
                            Turning Everyday Skills <br />
                            Into Profitable <br />
                            Local Centers.
                        </h1>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-md">
                            We provide modern machines, practical training, and step-by-step guidance so you can start and run a profitable commercial service center.
                        </p>

                        <div class="pt-2">
                            <a href="#inquiry" 
                               class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200">
                                Start a Business
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
                    <img src="{{ asset('images/mentorship.webp') }}" 
                         alt="Navodaya alumni mentorship circle" 
                         class="w-full h-full object-cover object-center"
                         style="-webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%); mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%);" />
                    <div class="absolute inset-0 bg-white/85 sm:hidden pointer-events-none"></div>
                </div>

                <!-- Left Content -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20 py-12 sm:py-16">
                    <div class="w-full sm:max-w-xl lg:max-w-lg space-y-4">
                        
                        <div>
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wider text-navy-950 bg-logo-yellow uppercase shadow-xs">
                                ALUMNI MENTORSHIP
                            </span>
                        </div>

                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-950 tracking-tight leading-[1.14] font-heading">
                            Senior Navodayans <br />
                            Guiding the Next <br />
                            Generation.
                        </h1>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-md">
                            Connect one-on-one with experienced Navodaya alumni who are now successful founders, corporate leaders, and officers, ready to help you succeed.
                        </p>

                        <div class="pt-2">
                            <a href="#inquiry" 
                               class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200">
                                Find a Mentor
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
                    <img src="{{ asset('images/education.webp') }}" 
                         alt="Jawahar Navodaya Vidyalaya students" 
                         class="w-full h-full object-cover object-center"
                         style="-webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%); mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%);" />
                    <div class="absolute inset-0 bg-white/85 sm:hidden pointer-events-none"></div>
                </div>

                <!-- Left Content -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20 py-12 sm:py-16">
                    <div class="w-full sm:max-w-xl lg:max-w-lg space-y-4">
                        
                        <div>
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wider text-navy-950 bg-logo-yellow uppercase shadow-xs">
                                SCHOLARSHIPS & EDUCATION
                            </span>
                        </div>

                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-950 tracking-tight leading-[1.14] font-heading">
                            Supporting Every <br />
                            Talented Student <br />
                            To Keep Learning.
                        </h1>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-md">
                            Offering college fee grants, exam guidance, and computer skills so money never stops a hardworking student from moving forward.
                        </p>

                        <div class="pt-2">
                            <a href="#programs" 
                               class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200">
                                View Scholarships
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <!-- Stable Bottom-Left Pagination Indicator (matching reference image: dot - active bar - dot) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative pb-8 z-30 pointer-events-none">
            <div class="flex items-center gap-2 pointer-events-auto">
                <button type="button" 
                        @click="goTo(0)" 
                        class="transition-all duration-300 focus:outline-none" 
                        :class="activeSlide === 0 ? 'w-6 h-2 bg-logo-yellow rounded-full' : 'w-2 h-2 bg-slate-300 hover:bg-slate-400 rounded-full'" 
                        aria-label="Slide 1"></button>
                <button type="button" 
                        @click="goTo(1)" 
                        class="transition-all duration-300 focus:outline-none" 
                        :class="activeSlide === 1 ? 'w-6 h-2 bg-logo-yellow rounded-full' : 'w-2 h-2 bg-slate-300 hover:bg-slate-400 rounded-full'" 
                        aria-label="Slide 2"></button>
                <button type="button" 
                        @click="goTo(2)" 
                        class="transition-all duration-300 focus:outline-none" 
                        :class="activeSlide === 2 ? 'w-6 h-2 bg-logo-yellow rounded-full' : 'w-2 h-2 bg-slate-300 hover:bg-slate-400 rounded-full'" 
                        aria-label="Slide 3"></button>
                <button type="button" 
                        @click="goTo(3)" 
                        class="transition-all duration-300 focus:outline-none" 
                        :class="activeSlide === 3 ? 'w-6 h-2 bg-logo-yellow rounded-full' : 'w-2 h-2 bg-slate-300 hover:bg-slate-400 rounded-full'" 
                        aria-label="Slide 4"></button>
            </div>
        </div>

    </section>

    <!-- Clean & Modern Infinite Marquee Strip (Just below Hero Slider) -->
    <section class="relative overflow-hidden py-3.5 sm:py-4 bg-white border-b border-slate-200/80 select-none group">
        <!-- Edge Gradient Fade Masks -->
        <div class="absolute inset-y-0 left-0 w-16 sm:w-28 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-16 sm:w-28 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>

        <!-- Scrolling Marquee Track -->
        <div class="flex animate-marquee group-hover:[animation-play-state:paused] whitespace-nowrap">
            <!-- Set 1 -->
            <div class="flex items-center gap-8 sm:gap-10 px-4 sm:px-6 text-xs sm:text-sm whitespace-nowrap">
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">660+ JNV Schools</strong>
                    <span class="text-slate-500 font-normal">— Connecting alumni & student talent across 28 states</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">Cohort 2026 Admissions Open</strong>
                    <span class="text-slate-500 font-normal">— Fully funded enterprise incubation & skills training</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">1,200+ Senior Mentors</strong>
                    <span class="text-slate-500 font-normal">— 1-on-1 guidance from founders & global leaders</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">Commercial Laundry Hubs</strong>
                    <span class="text-slate-500 font-normal">— Launching modern service enterprises in small towns</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">Zero-Collateral Seed Support</strong>
                    <span class="text-slate-500 font-normal">— Direct machinery connects & working capital access</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">Women Micro-Enterprises</strong>
                    <span class="text-slate-500 font-normal">— Scaling self-help groups into sustainable village ventures</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">NavoShiksha Digital Labs</strong>
                    <span class="text-slate-500 font-normal">— Practical market skills & hands-on equipment training</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">10,000+ Rural Job Creators</strong>
                    <span class="text-slate-500 font-normal">— Creating economic independence at the grassroots</span>
                </span>
            </div>

            <!-- Set 2 (Identical duplicate for seamless infinite loop) -->
            <div class="flex items-center gap-8 sm:gap-10 px-4 sm:px-6 text-xs sm:text-sm whitespace-nowrap" aria-hidden="true">
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">660+ JNV Schools</strong>
                    <span class="text-slate-500 font-normal">— Connecting alumni & student talent across 28 states</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">Cohort 2026 Admissions Open</strong>
                    <span class="text-slate-500 font-normal">— Fully funded enterprise incubation & skills training</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">1,200+ Senior Mentors</strong>
                    <span class="text-slate-500 font-normal">— 1-on-1 guidance from founders & global leaders</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">Commercial Laundry Hubs</strong>
                    <span class="text-slate-500 font-normal">— Launching modern service enterprises in small towns</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">Zero-Collateral Seed Support</strong>
                    <span class="text-slate-500 font-normal">— Direct machinery connects & working capital access</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">Women Micro-Enterprises</strong>
                    <span class="text-slate-500 font-normal">— Scaling self-help groups into sustainable village ventures</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">NavoShiksha Digital Labs</strong>
                    <span class="text-slate-500 font-normal">— Practical market skills & hands-on equipment training</span>
                </span>
                <span class="inline-flex items-center gap-2.5">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950 font-heading">10,000+ Rural Job Creators</strong>
                    <span class="text-slate-500 font-normal">— Creating economic independence at the grassroots</span>
                </span>
            </div>
        </div>
    </section>

    <!-- Impact Counter Strip (Wadhwani Scorecard Style with Warm Welcoming Shades) -->
    <section id="impact" class="bg-[#FAF8F5] py-12 border-b border-amber-100/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                
                <div class="bg-white rounded-2xl p-5 border border-amber-100/60 shadow-xs text-center hover:shadow-md transition-shadow">
                    <p class="text-3xl sm:text-4xl font-extrabold text-navy-950 tracking-tight font-heading">660+</p>
                    <p class="text-sm font-semibold text-slate-800 mt-1.5">Navodaya Schools</p>
                    <p class="text-xs text-slate-500 mt-0.5">Across rural districts in India</p>
                </div>

                <div class="bg-white rounded-2xl p-5 border border-emerald-100/60 shadow-xs text-center hover:shadow-md transition-shadow">
                    <p class="text-3xl sm:text-4xl font-extrabold text-emerald-700 tracking-tight font-heading">15,000+</p>
                    <p class="text-sm font-semibold text-slate-800 mt-1.5">Students Guided</p>
                    <p class="text-xs text-slate-500 mt-0.5">Practical, digital & career skills</p>
                </div>

                <div class="bg-white rounded-2xl p-5 border border-amber-100/60 shadow-xs text-center hover:shadow-md transition-shadow">
                    <p class="text-3xl sm:text-4xl font-extrabold text-amber-600 tracking-tight font-heading">350+</p>
                    <p class="text-sm font-semibold text-slate-800 mt-1.5">Small Businesses</p>
                    <p class="text-xs text-slate-500 mt-0.5">Started and running in rural towns</p>
                </div>

                <div class="bg-white rounded-2xl p-5 border border-sky-100/60 shadow-xs text-center hover:shadow-md transition-shadow">
                    <p class="text-3xl sm:text-4xl font-extrabold text-navy-800 tracking-tight font-heading">1,200+</p>
                    <p class="text-sm font-semibold text-slate-800 mt-1.5">Alumni Guides</p>
                    <p class="text-xs text-slate-500 mt-0.5">Seniors ready to help students</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Who We Are / Navodaya Ethos (Simple, Warm, Human Narrative) -->
    <section id="about-us" class="scroll-mt-24 py-16 lg:py-20 bg-[#FCFAF7] border-b border-amber-100/70">
        <div id="mission" class="scroll-mt-24"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Visual: Plain Clean Image (No overlays, no frame design) -->
                <div class="lg:col-span-5">
                    <img src="{{ asset('images/education.webp') }}" 
                         alt="Jawahar Navodaya Vidyalaya students and community" 
                         class="w-full h-80 sm:h-96 lg:h-[480px] object-cover rounded-2xl shadow-sm border border-amber-100/60" />
                </div>

                <!-- Right Narrative (7 cols) -->
                <div class="lg:col-span-7 space-y-5">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                        OUR STORY & PURPOSE
                    </span>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-navy-950 tracking-tight leading-snug font-heading">
                        Born from the Navodaya Family: <br />
                        <span class="text-navy-700">Turning Rural Talent into Proud Business Owners.</span>
                    </h2>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Jawahar Navodaya Vidyalayas gather bright children from rural families and give them quality schooling. But after school, many hardworking Navodayans struggle to find good opportunities near their hometowns.
                    </p>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        <strong>NAVUDYAM Foundation</strong> was started by proud alumni to change that. We bring together our worldwide alumni family to help younger generations start real businesses, earn good incomes, and create jobs for others in their communities.
                    </p>

                    <!-- 3 Core Principles (Clean, rounded-2xl, welcoming) -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                        <div class="p-5 rounded-2xl bg-white border border-slate-200/70 shadow-xs hover:shadow-md transition-all">
                            <div class="w-9 h-9 rounded-full bg-navy-100 text-navy-900 flex items-center justify-center font-bold text-xs mb-2.5">
                                01
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm">Dignified Work</h3>
                            <p class="text-xs text-slate-500 mt-1">Helping youth run modern, clean, and profitable service businesses.</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200/70 shadow-xs hover:shadow-md transition-all">
                            <div class="w-9 h-9 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xs mb-2.5">
                                02
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm">Alumni Giving Back</h3>
                            <p class="text-xs text-slate-500 mt-1">Senior Navodayans sharing their experience and time with younger batches.</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200/70 shadow-xs hover:shadow-md transition-all">
                            <div class="w-9 h-9 rounded-full bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-xs mb-2.5">
                                03
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm">Growing Together</h3>
                            <p class="text-xs text-slate-500 mt-1">Keeping talent in local towns and helping rural families prosper.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- The 4 Core Focus Pillars (Clean, rounded-2xl, lighter welcoming shades) -->
    <section id="initiatives" class="scroll-mt-24 py-16 lg:py-20 bg-white border-b border-slate-200/70">
        <div id="pillars" class="scroll-mt-24"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-14 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                    OUR CORE FOCUS
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-950 tracking-tight font-heading">
                    Four Ways We Help You Succeed
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    From school classrooms to running your own business, here is how we support you every step of the way.
                </p>
            </div>

            <!-- Pillars Grid (4 Cards with gentle pastel tints and rounded-2xl) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Pillar 1: Education -->
                <div class="bg-gradient-to-b from-sky-50/60 to-white hover:from-white hover:to-white rounded-2xl p-6 border border-sky-100/90 hover:border-sky-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3.5">
                        <div class="w-12 h-12 rounded-full bg-sky-100 text-sky-800 flex items-center justify-center font-bold group-hover:bg-navy-950 group-hover:text-amber-400 transition-colors shadow-xs">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 group-hover:text-navy-700 transition-colors">
                            Education & Scholarships
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            College fee support, exam coaching, and practical computer courses so you can learn without financial worries.
                        </p>
                        <ul class="text-xs text-slate-500 space-y-1.5 pt-1">
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> College Fee Scholarships</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Career & Job Certification</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Computer & Tech Skills</li>
                        </ul>
                    </div>
                    <div class="pt-5 border-t border-slate-100 mt-5">
                        <a href="#programs" class="text-xs font-bold uppercase tracking-wider text-navy-900 group-hover:text-amber-600 inline-flex items-center gap-1 transition-colors">
                            Explore Education Track →
                        </a>
                    </div>
                </div>

                <!-- Pillar 2: Entrepreneurship (From Skills to Enterprise) -->
                <div class="bg-gradient-to-b from-emerald-50/60 to-white hover:from-white hover:to-white rounded-2xl p-6 border border-emerald-100/90 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3.5">
                        <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold group-hover:bg-emerald-700 group-hover:text-white transition-colors shadow-xs">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 group-hover:text-emerald-700 transition-colors">
                            Business Incubation
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Everything you need to start a modern laundry or service business: machinery, practical training, and easy bank loans.
                        </p>
                        <ul class="text-xs text-slate-500 space-y-1.5 pt-1">
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Modern Machine Access</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Easy Bank Loan Support</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Step-by-Step Business Guide</li>
                        </ul>
                    </div>
                    <div class="pt-5 border-t border-slate-100 mt-5">
                        <a href="#programs" class="text-xs font-bold uppercase tracking-wider text-emerald-700 group-hover:text-emerald-900 inline-flex items-center gap-1 transition-colors">
                            Explore Incubation Track →
                        </a>
                    </div>
                </div>

                <!-- Pillar 3: Mentorship Network -->
                <div class="bg-gradient-to-b from-amber-50/60 to-white hover:from-white hover:to-white rounded-2xl p-6 border border-amber-100/90 hover:border-amber-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3.5">
                        <div class="w-12 h-12 rounded-full bg-amber-100 text-amber-800 flex items-center justify-center font-bold group-hover:bg-amber-500 group-hover:text-navy-950 transition-colors shadow-xs">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 group-hover:text-amber-600 transition-colors">
                            Senior Alumni Mentorship
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Personal advice from experienced senior Navodayans who have built great careers and want to help you succeed.
                        </p>
                        <ul class="text-xs text-slate-500 space-y-1.5 pt-1">
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> 1-on-1 Senior Guidance</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Monthly Advice Sessions</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Career & Business Advice</li>
                        </ul>
                    </div>
                    <div class="pt-5 border-t border-slate-100 mt-5">
                        <a href="#programs" class="text-xs font-bold uppercase tracking-wider text-amber-700 group-hover:text-navy-950 inline-flex items-center gap-1 transition-colors">
                            Explore Mentorship Track →
                        </a>
                    </div>
                </div>

                <!-- Pillar 4: Navodayan Community -->
                <div class="bg-gradient-to-b from-indigo-50/60 to-white hover:from-white hover:to-white rounded-2xl p-6 border border-indigo-100/90 hover:border-indigo-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3.5">
                        <div class="w-12 h-12 rounded-full bg-indigo-100 text-indigo-800 flex items-center justify-center font-bold group-hover:bg-indigo-600 group-hover:text-white transition-colors shadow-xs">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 group-hover:text-indigo-700 transition-colors">
                            Navodaya Alumni Family
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            A supportive network of alumni across India standing together to help each other like family, online and in person.
                        </p>
                        <ul class="text-xs text-slate-500 space-y-1.5 pt-1">
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> City & District Chapters</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> School Guidance Visits</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-600 font-bold">✓</span> Mutual Student Support Fund</li>
                        </ul>
                    </div>
                    <div class="pt-5 border-t border-slate-100 mt-5">
                        <a href="#community" class="text-xs font-bold uppercase tracking-wider text-indigo-700 group-hover:text-navy-950 inline-flex items-center gap-1 transition-colors">
                            Explore Community →
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- The Navudyam Pathway: How We Help (Clear, simple 4 steps) -->
    <section id="model" class="py-16 lg:py-20 bg-navy-950 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-14 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">
                    HOW IT WORKS
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight font-heading">
                    Your Path to Running a Successful Business
                </h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Four simple steps that help you move from learning practical skills to owning a profitable local enterprise.
                </p>
            </div>

            <!-- 4-Stage Pathway Timeline (rounded-2xl cards) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                
                <!-- Stage 1 -->
                <div class="bg-navy-900/90 rounded-2xl p-6 border border-navy-800 relative hover:border-amber-400/50 transition-all duration-200">
                    <div class="text-amber-400 font-extrabold text-2xl mb-2 font-heading">01</div>
                    <span class="text-[11px] uppercase tracking-wider font-bold text-amber-300 block mb-1">STEP 1</span>
                    <h3 class="text-base font-bold text-white mb-2">Meet & Choose</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        We understand your interests, skills, and local town needs to help you choose the best business idea for your area.
                    </p>
                </div>

                <!-- Stage 2 -->
                <div class="bg-navy-900/90 rounded-2xl p-6 border border-navy-800 relative hover:border-emerald-400/50 transition-all duration-200">
                    <div class="text-emerald-400 font-extrabold text-2xl mb-2 font-heading">02</div>
                    <span class="text-[11px] uppercase tracking-wider font-bold text-emerald-300 block mb-1">STEP 2</span>
                    <h3 class="text-base font-bold text-white mb-2">Hands-on Training</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        Practical training in modern machine handling, quality fabric cleaning, basic accounts, and UPI phone payments.
                    </p>
                </div>

                <!-- Stage 3 -->
                <div class="bg-navy-900/90 rounded-2xl p-6 border border-navy-800 relative hover:border-sky-400/50 transition-all duration-200">
                    <div class="text-sky-400 font-extrabold text-2xl mb-2 font-heading">03</div>
                    <span class="text-[11px] uppercase tracking-wider font-bold text-sky-300 block mb-1">STEP 3</span>
                    <h3 class="text-base font-bold text-white mb-2">Setup & Launch</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        We help you get quality machines with discount pricing, connect with government loan schemes, and set up your shop.
                    </p>
                </div>

                <!-- Stage 4 -->
                <div class="bg-navy-900/90 rounded-2xl p-6 border border-navy-800 relative hover:border-amber-400/50 transition-all duration-200">
                    <div class="text-amber-400 font-extrabold text-2xl mb-2 font-heading">04</div>
                    <span class="text-[11px] uppercase tracking-wider font-bold text-amber-300 block mb-1">STEP 4</span>
                    <h3 class="text-base font-bold text-white mb-2">Mentor & Grow</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        A senior alumnus stays in touch with you as a personal mentor to help solve daily challenges and grow your monthly profits.
                    </p>
                </div>

            </div>



        </div>
    </section>

    <!-- Stories in Motion (YouTube Video Slider matching reference) -->
    <section id="videos" class="scroll-mt-24 py-16 lg:py-24 bg-white border-b border-slate-100" 
             x-data="{
                 currentIndex: 0,
                 activeVideo: null,
                 visibleCards: 3,
                 videos: [
                     {
                         id: 'van',
                         title: 'Outreach Across Himalayan Hills',
                         thumbnail: '{{ asset('images/video_van.webp') }}',
                         youtubeUrl: 'https://www.youtube.com/watch?v=ScMzIvxBSi4'
                     },
                     {
                         id: 'craft',
                         title: 'Rural Craft & Vocational Skilling',
                         thumbnail: '{{ asset('images/video_craft.webp') }}',
                         youtubeUrl: 'https://www.youtube.com/watch?v=kJQP7kiw5Fk'
                     },
                     {
                         id: 'woman',
                         title: 'Women Enterprise in Village Markets',
                         thumbnail: '{{ asset('images/video_woman.webp') }}',
                         youtubeUrl: 'https://www.youtube.com/watch?v=L_LUpnjgPso'
                     },
                     {
                         id: 'laundry',
                         title: 'Starting a Small Town Laundry Enterprise',
                         thumbnail: '{{ asset('images/video_laundry.webp') }}',
                         youtubeUrl: 'https://www.youtube.com/watch?v=ScMzIvxBSi4'
                     }
                 ],
                 init() {
                     this.updateVisibleCards();
                     window.addEventListener('resize', () => this.updateVisibleCards());
                 },
                 updateVisibleCards() {
                     if (window.innerWidth >= 1024) {
                         this.visibleCards = 3;
                     } else if (window.innerWidth >= 640) {
                         this.visibleCards = 2;
                     } else {
                         this.visibleCards = 1;
                     }
                     if (this.currentIndex > this.maxIndex()) {
                         this.currentIndex = this.maxIndex();
                     }
                 },
                 maxIndex() {
                     return Math.max(0, this.videos.length - this.visibleCards);
                 },
                 next() {
                     if (this.currentIndex < this.maxIndex()) {
                         this.currentIndex++;
                     } else {
                         this.currentIndex = 0;
                     }
                 },
                 prev() {
                     if (this.currentIndex > 0) {
                         this.currentIndex--;
                     } else {
                         this.currentIndex = this.maxIndex();
                     }
                 },
                 getEmbedUrl(url) {
                     if (!url) return '';
                     let match = url.match(/(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))([\w-]{11})/);
                     let videoId = match ? match[1] : url;
                     return 'https://www.youtube-nocookie.com/embed/' + videoId + '?autoplay=1&rel=0&modestbranding=1';
                 },
                 openModal(video) {
                     this.activeVideo = video;
                 },
                 closeModal() {
                     this.activeVideo = null;
                 }
             }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header: Centered, Slim & Clean matching reference image -->
            <div class="text-center mb-8 sm:mb-12">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-navy-950 tracking-wider uppercase font-heading">
                    STORIES IN MOTION
                </h2>
            </div>

            <!-- Slider Container with Left / Right Navigation Chevrons -->
            <div class="relative px-1 sm:px-3">
                
                <!-- Cards Track Container -->
                <div class="overflow-hidden rounded-2xl">
                    <div class="flex transition-transform duration-500 ease-out"
                         :style="'transform: translateX(-' + (currentIndex * (100 / visibleCards)) + '%)'">
                        
                        <template x-for="(video, index) in videos" :key="video.id">
                            <div class="flex-shrink-0 px-2 sm:px-2.5"
                                 :style="'width: ' + (100 / visibleCards) + '%'">
                                
                                <!-- Video Card (Clean, rounded-2xl, exactly matching reference image) -->
                                <div @click="openModal(video)" 
                                     class="group relative aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer bg-slate-900 shadow-md hover:shadow-xl transition-all duration-300">
                                    
                                    <!-- Photographic Thumbnail Image -->
                                    <img :src="video.thumbnail" 
                                         :alt="video.title" 
                                         class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
                                    
                                    <!-- Subtle Vignette Overlay -->
                                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/35 transition-colors"></div>

                                    <!-- Centered Circular Play Button (White translucent ring with white play triangle) -->
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border-2 border-white/95 bg-black/30 backdrop-blur-[2px] flex items-center justify-center text-white transition-all duration-300 group-hover:scale-110 group-hover:bg-black/50 group-hover:border-white shadow-2xl">
                                            <svg class="w-6 h-6 sm:w-8 sm:h-8 fill-current translate-x-0.5" viewBox="0 0 24 24">
                                                <path d="M8 5v14l11-7z"/>
                                            </svg>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </template>

                    </div>
                </div>

                <!-- Left Chevron Arrow (< in reference image) -->
                <button @click="prev()" 
                        type="button"
                        class="absolute left-3 sm:left-5 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-black/40 hover:bg-black/70 backdrop-blur-xs text-white shadow-lg flex items-center justify-center transition-all duration-200 border border-white/30 hover:scale-105 focus:outline-none"
                        aria-label="Previous video">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <!-- Right Chevron Arrow (> in reference image) -->
                <button @click="next()" 
                        type="button"
                        class="absolute right-3 sm:right-5 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-black/40 hover:bg-black/70 backdrop-blur-xs text-white shadow-lg flex items-center justify-center transition-all duration-200 border border-white/30 hover:scale-105 focus:outline-none"
                        aria-label="Next video">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

            </div>

            <!-- Indicator Dots -->
            <div class="flex items-center justify-center gap-2 mt-7">
                <template x-for="(dot, dotIndex) in (videos.length - visibleCards + 1)" :key="dotIndex">
                    <button @click="currentIndex = dotIndex" 
                            type="button"
                            class="transition-all duration-300 rounded-full"
                            :class="currentIndex === dotIndex ? 'w-8 h-2 bg-navy-950' : 'w-2 h-2 bg-slate-300 hover:bg-slate-400'"
                            :aria-label="'Go to video slide ' + (dotIndex + 1)">
                    </button>
                </template>
            </div>

        </div>

        <!-- YouTube Video Lightbox Modal (Autoplay, Esc/Outside click to dismiss) -->
        <div x-show="activeVideo" 
             x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @keydown.escape.window="closeModal()"
             class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-navy-950/85 backdrop-blur-md">
            
            <div @click.outside="closeModal()" 
                 class="relative w-full max-w-4xl bg-black rounded-3xl overflow-hidden shadow-2xl border border-white/10">
                
                <!-- Close Button -->
                <button @click="closeModal()" 
                        type="button"
                        class="absolute top-3 right-3 z-20 w-10 h-10 rounded-full bg-black/70 hover:bg-black text-white flex items-center justify-center transition-all hover:scale-105 focus:outline-none"
                        aria-label="Close video player">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <!-- 16:9 YouTube Video Embed -->
                <div class="relative aspect-video w-full bg-black">
                    <template x-if="activeVideo">
                        <iframe :src="getEmbedUrl(activeVideo.youtubeUrl)"
                                title="YouTube video player"
                                class="w-full h-full border-0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </template>
                </div>

                <!-- Video Title & Close Footer -->
                <div class="p-4 bg-navy-950 flex items-center justify-between text-white border-t border-navy-900">
                    <h3 class="text-sm sm:text-base font-bold" x-text="activeVideo?.title"></h3>
                    <button @click="closeModal()" class="text-xs text-slate-400 hover:text-white transition-colors">
                        Close (Esc)
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- Events & Sessions Section (Clean, Modern, Uncluttered) -->
    <section id="events" class="scroll-mt-24 py-16 lg:py-20 bg-white border-b border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16 space-y-2">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-navy-950 tracking-tight font-heading">
                    Upcoming Events & Sessions
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed max-w-md mx-auto">
                    Join our live workshops, orientation webinars, and alumni meetups.
                </p>
            </div>

            <!-- Events Grid (3 Clean Cards) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                
                <!-- Event 1 -->
                <div class="bg-[#FAF9F5] rounded-3xl p-6 border border-slate-200/80 hover:border-amber-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Online Webinar</span>
                            <span class="text-xs text-slate-400 font-medium">Nov 15, 2026</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 font-heading leading-snug group-hover:text-amber-600 transition-colors">
                            Navudyam Cohort 2026: Application Orientation & AMA
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Live walkthrough of the application process, selection criteria, seed funding details, and mentorship support.
                        </p>
                    </div>
                    <div class="pt-6 flex items-center justify-between border-t border-slate-200/60 mt-6">
                        <span class="text-xs text-slate-500 font-medium">6:00 PM – 7:30 PM IST</span>
                        <button @click="$dispatch('open-inquiry-modal')" type="button" class="text-xs font-bold uppercase tracking-wider text-navy-950 hover:text-amber-600 inline-flex items-center gap-1 transition-colors cursor-pointer">
                            Register Free →
                        </button>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="bg-[#FAF9F5] rounded-3xl p-6 border border-slate-200/80 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Virtual Meetup</span>
                            <span class="text-xs text-slate-400 font-medium">Nov 28, 2026</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 font-heading leading-snug group-hover:text-emerald-700 transition-colors">
                            Alumni Mentorship Circle: From College to First Venture
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Senior Navodaya alumni founders share their journey of launching commercial enterprises right after graduation.
                        </p>
                    </div>
                    <div class="pt-6 flex items-center justify-between border-t border-slate-200/60 mt-6">
                        <span class="text-xs text-slate-500 font-medium">5:30 PM – 7:00 PM IST</span>
                        <button @click="$dispatch('open-inquiry-modal')" type="button" class="text-xs font-bold uppercase tracking-wider text-navy-950 hover:text-emerald-700 inline-flex items-center gap-1 transition-colors cursor-pointer">
                            Register Free →
                        </button>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="bg-[#FAF9F5] rounded-3xl p-6 border border-slate-200/80 hover:border-sky-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-sky-700">In-Person Workshop</span>
                            <span class="text-xs text-slate-400 font-medium">Dec 10, 2026</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 font-heading leading-snug group-hover:text-sky-700 transition-colors">
                            Grassroots Service Hub Setup: Machines, Vendors & Contracts
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Practical, hands-on workshop in Wardha for aspiring entrepreneurs looking to set up commercial laundry hubs.
                        </p>
                    </div>
                    <div class="pt-6 flex items-center justify-between border-t border-slate-200/60 mt-6">
                        <span class="text-xs text-slate-500 font-medium">Wardha, Maharashtra</span>
                        <button @click="$dispatch('open-inquiry-modal')" type="button" class="text-xs font-bold uppercase tracking-wider text-navy-950 hover:text-sky-700 inline-flex items-center gap-1 transition-colors cursor-pointer">
                            RSVP Spot →
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Navodayan Community Banner (The Soul & Brotherhood of Navodaya) -->
    <section id="contact" class="scroll-mt-24 py-16 bg-navy-950 text-white relative">
        <div id="community" class="scroll-mt-24"></div>
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
                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3 justify-center">
                    <button @click="$dispatch('open-inquiry-modal')" 
                            type="button"
                            class="text-center px-7 py-3 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-all shadow-md hover:shadow-lg cursor-pointer">
                        Connect with Alumni Network
                    </button>
                    <button @click="$dispatch('open-inquiry-modal')" 
                            type="button"
                            class="text-center px-7 py-3 text-xs font-bold uppercase tracking-wider text-white bg-navy-800 hover:bg-navy-700 border border-navy-700 rounded-full transition-all shadow-sm cursor-pointer">
                        Explore Local Chapters
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stories & Resources Section (Clean, Uncluttered, No Badges) -->
    <section id="resources" class="scroll-mt-24 py-16 lg:py-24 bg-[#FAF9F5]/70 border-b border-slate-200/70">
        <div id="blog" class="scroll-mt-24"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header: Clean, Simple, No Badges -->
            <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16 space-y-2">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-navy-950 tracking-tight font-heading">
                    Stories & Resources
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed max-w-lg mx-auto">
                    Field learnings, enterprise case studies, and practical guides from across the Navodaya community.
                </p>
            </div>

            <!-- Blog Cards Grid (Ultra-Clean, Modern, Badge-Free) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                
                <!-- Blog Card 1 -->
                <article @click="$dispatch('open-inquiry-modal')" 
                         class="group bg-white rounded-3xl p-5 border border-slate-200/80 hover:border-amber-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between cursor-pointer">
                    <div>
                        <!-- Framed Photo with Clean Rounded Corners -->
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100 mb-5">
                            <img src="{{ asset('images/entrepreneur.webp') }}" 
                                 alt="Navodaya Entrepreneurship at Grassroots" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        </div>

                        <!-- Clean Metadata (Zero Badges) -->
                        <div class="text-xs text-slate-400 font-medium mb-2.5">
                            Oct 12, 2026 • 5 min read
                        </div>

                        <!-- Clean Heading -->
                        <h3 class="text-lg sm:text-xl font-bold text-navy-950 group-hover:text-amber-600 transition-colors font-heading leading-snug mb-3 line-clamp-2">
                            How Small-Town Navodayans Are Launching Modern Commercial Hubs
                        </h3>

                        <!-- Clean Excerpt -->
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed line-clamp-3">
                            A practical breakdown of how rural youth set up energy-efficient service centers, secure local contracts, and build profitable community ventures.
                        </p>
                    </div>

                    <!-- Clean Action Link (No dividing lines) -->
                    <div class="pt-5 flex items-center text-xs sm:text-sm font-semibold text-navy-950 group-hover:text-amber-600 transition-colors">
                        <span class="inline-flex items-center gap-1.5">
                            Read Full Story
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </article>

                <!-- Blog Card 2 -->
                <article @click="$dispatch('open-inquiry-modal')" 
                         class="group bg-white rounded-3xl p-5 border border-slate-200/80 hover:border-emerald-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between cursor-pointer">
                    <div>
                        <!-- Framed Photo with Clean Rounded Corners -->
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100 mb-5">
                            <img src="{{ asset('images/mentorship.webp') }}" 
                                 alt="Alumni Mentorship Network" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        </div>

                        <!-- Clean Metadata (Zero Badges) -->
                        <div class="text-xs text-slate-400 font-medium mb-2.5">
                            Oct 05, 2026 • 4 min read
                        </div>

                        <!-- Clean Heading -->
                        <h3 class="text-lg sm:text-xl font-bold text-navy-950 group-hover:text-emerald-700 transition-colors font-heading leading-snug mb-3 line-clamp-2">
                            The Brotherhood That Mentors: Why 1,200+ Alumni Are Giving Back
                        </h3>

                        <!-- Clean Excerpt -->
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed line-clamp-3">
                            Senior Navodayans across 14 countries share why giving just two hours a month creates lasting economic opportunities for young graduates.
                        </p>
                    </div>

                    <!-- Clean Action Link (No dividing lines) -->
                    <div class="pt-5 flex items-center text-xs sm:text-sm font-semibold text-navy-950 group-hover:text-emerald-700 transition-colors">
                        <span class="inline-flex items-center gap-1.5">
                            Read Full Story
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </article>

                <!-- Blog Card 3 -->
                <article @click="$dispatch('open-inquiry-modal')" 
                         class="group bg-white rounded-3xl p-5 border border-slate-200/80 hover:border-sky-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between cursor-pointer">
                    <div>
                        <!-- Framed Photo with Clean Rounded Corners -->
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100 mb-5">
                            <img src="{{ asset('images/education.webp') }}" 
                                 alt="Vocational and Technical Skilling in Rural India" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        </div>

                        <!-- Clean Metadata (Zero Badges) -->
                        <div class="text-xs text-slate-400 font-medium mb-2.5">
                            Sep 28, 2026 • 6 min read
                        </div>

                        <!-- Clean Heading -->
                        <h3 class="text-lg sm:text-xl font-bold text-navy-950 group-hover:text-sky-700 transition-colors font-heading leading-snug mb-3 line-clamp-2">
                            From Classroom Knowledge to Market Skills: The NavoShiksha Model
                        </h3>

                        <!-- Clean Excerpt -->
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed line-clamp-3">
                            Combining education with practical equipment training and digital tools helps students graduate as confident enterprise builders.
                        </p>
                    </div>

                    <!-- Clean Action Link (No dividing lines) -->
                    <div class="pt-5 flex items-center text-xs sm:text-sm font-semibold text-navy-950 group-hover:text-sky-700 transition-colors">
                        <span class="inline-flex items-center gap-1.5">
                            Read Full Story
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </span>
                    </div>
                </article>

            </div>

        </div>
    </section>

 

    <!-- Get Involved Modal (Triggered on click of header 'Get Involved', footer, or page CTAs) -->
    <div x-data="{ inquiryModalOpen: false }"
         @open-inquiry-modal.window="inquiryModalOpen = true"
         @close-inquiry-modal.window="inquiryModalOpen = false"
         @keydown.escape.window="inquiryModalOpen = false">
        
        <div x-show="inquiryModalOpen" 
             x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-navy-950/80 backdrop-blur-md overflow-y-auto">
            
            <div @click.outside="inquiryModalOpen = false"
                 class="relative w-full max-w-2xl bg-white rounded-3xl p-6 sm:p-10 shadow-2xl border border-slate-100 my-8 max-h-[90vh] overflow-y-auto">
                
                <!-- Close Button -->
                <button @click="inquiryModalOpen = false" 
                        type="button"
                        class="absolute top-4 right-4 sm:top-6 sm:right-6 w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center transition-all focus:outline-none"
                        aria-label="Close modal">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <!-- Modal Header -->
                <div class="text-center space-y-2 mb-6 sm:mb-8 pr-6 pl-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-800 block">
                        GET INVOLVED
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-navy-950 font-heading">
                        Join Hands with NAVUDYAM
                    </h3>
                    <p class="text-slate-600 text-xs sm:text-sm max-w-md mx-auto">
                        Whether you are an alumnus, an aspiring entrepreneur, or a partner organization, let's create something meaningful together.
                    </p>
                </div>

                <!-- Form / Feedback inside Modal -->
                @if($inquirySubmitted)
                    <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-center space-y-3">
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center mx-auto text-xl font-bold">
                            ✓
                        </div>
                        <h4 class="text-lg font-bold text-emerald-900">Thank You for Connecting!</h4>
                        <p class="text-xs sm:text-sm text-emerald-800 max-w-md mx-auto">
                            We have received your details. A member of our team will reach out to you within 48 hours.
                        </p>
                        <div class="flex items-center justify-center gap-3 pt-2">
                            <button wire:click="resetInquiry" class="px-5 py-2.5 text-xs font-bold uppercase tracking-wider bg-emerald-700 hover:bg-emerald-800 text-white rounded-full transition-colors shadow-sm cursor-pointer">
                                Submit Another Request
                            </button>
                            <button @click="inquiryModalOpen = false" class="px-5 py-2.5 text-xs font-bold uppercase tracking-wider bg-slate-200 hover:bg-slate-300 text-slate-700 rounded-full transition-colors cursor-pointer">
                                Close
                            </button>
                        </div>
                    </div>
                @else
                    <form wire:submit="submitInquiry" class="space-y-4 sm:space-y-5">
                        
                        <!-- Role / Interest Selector -->
                        <div class="space-y-1.5">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700">
                                How would you like to participate?
                            </label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $inquiryType === 'mentor' ? 'border-navy-900 bg-navy-50/70 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="inquiryType" value="mentor" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Alumni Guidance</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $inquiryType === 'entrepreneur' ? 'border-navy-900 bg-navy-50/70 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="inquiryType" value="entrepreneur" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Start a Business</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $inquiryType === 'partner' ? 'border-navy-900 bg-navy-50/70 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="inquiryType" value="partner" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Corporate / CSR</span>
                                </label>
                            </div>
                        </div>

                        <!-- Form Inputs -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Full Name *</label>
                                <input type="text" wire:model="inquiryName" placeholder="e.g. Ramesh Kumar" 
                                       class="w-full bg-[#FAF8F5] border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                                @error('inquiryName') <span class="text-xs text-rose-600 font-medium">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Email Address *</label>
                                <input type="email" wire:model="inquiryEmail" placeholder="e.g. ramesh@example.com" 
                                       class="w-full bg-[#FAF8F5] border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                                @error('inquiryEmail') <span class="text-xs text-rose-600 font-medium">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Phone / WhatsApp Number *</label>
                                <input type="text" wire:model="inquiryPhone" placeholder="e.g. +91 9876543210" 
                                       class="w-full bg-[#FAF8F5] border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                                @error('inquiryPhone') <span class="text-xs text-rose-600 font-medium">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">JNV School / District / Org</label>
                                <input type="text" wire:model="inquiryJnvSchool" placeholder="e.g. JNV Wardha" 
                                       class="w-full bg-[#FAF8F5] border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Brief Message / Goals</label>
                            <textarea wire:model="inquiryMessage" rows="2" placeholder="Tell us how you'd like to get involved..." 
                                      class="w-full bg-[#FAF8F5] border border-slate-300 rounded-xl px-3.5 py-2 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500"></textarea>
                        </div>

                        <div class="text-center pt-2">
                            <button type="submit" 
                                    class="w-full sm:w-auto px-8 py-3 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full shadow-md hover:shadow-lg transition-all cursor-pointer">
                                <span wire:loading.remove>Submit Inquiry</span>
                                <span wire:loading>Processing...</span>
                            </button>
                            <p class="text-[11px] text-slate-400 mt-2">
                                We respect your privacy. No spam. You will be contacted directly by our team.
                            </p>
                        </div>

                    </form>
                @endif

            </div>
        </div>
    </div>
</div>