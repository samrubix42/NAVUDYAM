<div>
    <!-- Hero Slider Section (Clean, Professional, Welcoming Tone) -->
    <section id="home" x-data="{
        activeSlide: 0,
        totalSlides: 4,
        timer: null,
        intervalMs: 6000,
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
        <div class="relative w-full min-h-[500px] sm:min-h-[520px] lg:min-h-[560px] flex items-center">

            <!-- SLIDE 0: Primary Brand Positioning -->
            <div x-show="activeSlide === 0"
                 x-transition:enter="transition-opacity duration-700 ease-out"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity duration-300 ease-in"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="w-full h-full absolute inset-0 flex items-center">
                
                <!-- Right Photography with Soft Fade Mask -->
                <div class="absolute inset-y-0 right-0 w-full sm:w-3/5 lg:w-3/5 h-full overflow-hidden pointer-events-none">
                    <img src="{{ asset('images/Picture7.jpg') }}" 
                         alt="NAVUDYAM Foundation community, learning and collaboration" 
                         class="w-full h-full object-cover object-center"
                         style="-webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%); mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%);" />
                    <div class="absolute inset-0 bg-white/85 sm:hidden pointer-events-none"></div>
                </div>

                <!-- Left Content -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20 py-12 sm:py-16">
                    <div class="w-full sm:max-w-xl lg:max-w-xl space-y-4">
                        
                        <!-- Badge & Positioning -->
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wider text-navy-950 bg-logo-yellow uppercase shadow-xs">
                                NAVUDYAM FOUNDATION
                            </span>
                            <span class="text-xs font-semibold text-slate-500 hidden sm:inline">
                                Rooted in Navodaya. Open to Everyone.
                            </span>
                        </div>

                        <!-- Primary Headline -->
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-950 tracking-tight leading-[1.15] font-heading">
                            Where New Ideas <br />
                            Find New Beginnings.
                        </h1>

                        <!-- Suggested Introductory Copy -->
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-lg">
                            NAVUDYAM Foundation is a community-driven initiative focused on education, skill development, mentorship, entrepreneurship and meaningful collaboration. Founded by Navodayans and guided by the values we grew up with, we aim to create opportunities for people from every background to learn, contribute and grow.
                        </p>

                        <!-- Action Buttons -->
                        <div class="pt-2 flex flex-wrap items-center gap-3">
                            <a href="#about-us" 
                               class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-slate-800 bg-slate-100 hover:bg-slate-200 border border-slate-200 transition-all duration-200">
                                Explore Our Mission
                            </a>
                            <button @click="$dispatch('open-inquiry-modal')" 
                                    type="button"
                                    class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200 cursor-pointer">
                                Join NAVUDYAM
                            </button>
                        </div>

                    </div>
                </div>

            </div>

            <!-- SLIDE 1: Entrepreneurship -->
            <div x-show="activeSlide === 1"
                 x-transition:enter="transition-opacity duration-700 ease-out"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity duration-300 ease-in"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="w-full h-full absolute inset-0 flex items-center">
                
                <div class="absolute inset-y-0 right-0 w-full sm:w-3/5 lg:w-3/5 h-full overflow-hidden pointer-events-none">
                    <img src="{{ asset('images/Picture8.webp') }}" 
                         alt="Entrepreneurship and industry skills at grassroots" 
                         class="w-full h-full object-cover object-center"
                         style="-webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%); mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%);" />
                    <div class="absolute inset-0 bg-white/85 sm:hidden pointer-events-none"></div>
                </div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20 py-12 sm:py-16">
                    <div class="w-full sm:max-w-xl lg:max-w-xl space-y-4">
                        
                        <div>
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wider text-navy-950 bg-logo-yellow uppercase shadow-xs">
                                ENTREPRENEURSHIP & INNOVATION
                            </span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-950 tracking-tight leading-[1.15] font-heading">
                            Transforming Ideas <br />
                            Into Opportunities.
                        </h2>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-lg">
                            Encouraging initiative, innovation, self-employment and enterprise development through practical knowledge sharing, hands-on guidance and collaborative support.
                        </p>

                        <div class="pt-2">
                            <a href="#initiatives" 
                               class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200">
                                Explore Focus Areas
                            </a>
                        </div>

                    </div>
                </div>

            </div>

            <!-- SLIDE 2: Mentorship -->
            <div x-show="activeSlide === 2"
                 x-transition:enter="transition-opacity duration-700 ease-out"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity duration-300 ease-in"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="w-full h-full absolute inset-0 flex items-center">
                
                <div class="absolute inset-y-0 right-0 w-full sm:w-3/5 lg:w-3/5 h-full overflow-hidden pointer-events-none">
                    <img src="{{ asset('images/Picture6.jpg') }}" 
                         alt="Mentorship circle and experience sharing" 
                         class="w-full h-full object-cover object-center"
                         style="-webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%); mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%);" />
                    <div class="absolute inset-0 bg-white/85 sm:hidden pointer-events-none"></div>
                </div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20 py-12 sm:py-16">
                    <div class="w-full sm:max-w-xl lg:max-w-xl space-y-4">
                        
                        <div>
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wider text-navy-950 bg-logo-yellow uppercase shadow-xs">
                                MENTORSHIP & CAREER DEVELOPMENT
                            </span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-950 tracking-tight leading-[1.15] font-heading">
                            Experience Shared. <br />
                            Futures Shaped.
                        </h2>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-lg">
                            Connecting experienced professionals, educators and industry leaders with individuals seeking career direction, leadership growth and practical entrepreneurial insight.
                        </p>

                        <div class="pt-2">
                            <button @click="$dispatch('open-inquiry-modal')" 
                                    type="button"
                                    class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200 cursor-pointer">
                                Connect with Mentors
                            </button>
                        </div>

                    </div>
                </div>

            </div>

            <!-- SLIDE 3: Education & Skills -->
            <div x-show="activeSlide === 3"
                 x-transition:enter="transition-opacity duration-700 ease-out"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity duration-300 ease-in"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="w-full h-full absolute inset-0 flex items-center">
                
                <div class="absolute inset-y-0 right-0 w-full sm:w-3/5 lg:w-3/5 h-full overflow-hidden pointer-events-none">
                    <img src="{{ asset('images/Picture5.jpg') }}" 
                         alt="Education, practical skills and student encouragement" 
                         class="w-full h-full object-cover object-top"
                         style="-webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%); mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 20%, rgba(0,0,0,0.85) 45%, black 70%);" />
                    <div class="absolute inset-0 bg-white/85 sm:hidden pointer-events-none"></div>
                </div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20 py-12 sm:py-16">
                    <div class="w-full sm:max-w-xl lg:max-w-xl space-y-4">
                        
                        <div>
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wider text-navy-950 bg-logo-yellow uppercase shadow-xs">
                                EDUCATION & SKILLS
                            </span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-950 tracking-tight leading-[1.15] font-heading">
                            Empowering Minds. <br />
                            Building Futures.
                        </h2>

                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-lg">
                            Encouraging practical learning, digital literacy, career awareness and lifelong skill development that empowers minds and opens doors to fresh possibilities.
                        </p>

                        <div class="pt-2">
                            <a href="#initiatives" 
                               class="inline-flex items-center justify-center px-6 py-2.5 sm:py-3 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200">
                                Explore What We Do
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <!-- Pagination Indicators -->
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

    <!-- What the Name Means (Prominent Block Just Below Homepage Introduction) -->
    <section class="py-12 bg-gradient-to-b from-amber-50/70 via-white to-white border-b border-amber-100/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl p-6 sm:p-10 border border-amber-100/80 shadow-xs">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    
                    <div class="lg:col-span-4 space-y-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold tracking-wider text-amber-800 bg-amber-100 uppercase">
                            OUR IDENTITY
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-navy-950 font-heading tracking-tight">
                            What the Name Means
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                            The essence of our foundation captured in two powerful words.
                        </p>
                    </div>

                    <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- NAV Box -->
                        <div class="p-5 sm:p-6 rounded-2xl bg-[#FCFAF7] border border-amber-100/70 space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-black text-navy-950 font-heading tracking-wider">NAV</span>
                                <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-0.5 rounded bg-amber-200/60 text-navy-950">New Beginnings</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Represents new ideas, fresh beginnings, forward-looking thinking and limitless possibilities.
                            </p>
                        </div>

                        <!-- UDYAM Box -->
                        <div class="p-5 sm:p-6 rounded-2xl bg-[#FCFAF7] border border-amber-100/70 space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-black text-navy-950 font-heading tracking-wider">UDYAM</span>
                                <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-0.5 rounded bg-emerald-100 text-emerald-900">Purposeful Action</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Represents enterprise, initiative, entrepreneurship, diligent effort and purposeful action.
                            </p>
                        </div>

                        <!-- Combined Meaning Statement -->
                        <div class="md:col-span-2 p-4 sm:p-5 rounded-2xl bg-navy-950 text-white flex flex-col sm:flex-row items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-amber-400 text-navy-950 font-bold flex items-center justify-center shrink-0">
                                <i class="ri-lightbulb-flash-line text-lg text-navy-950"></i>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-200 leading-relaxed text-center sm:text-left">
                                <strong>Together, NAVUDYAM</strong> reflects our core conviction that knowledge, effort and connections can create fresh opportunities for everyone.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Clean Marquee Strip (Truthful, Positive, Purpose-Driven) -->
    <section class="relative overflow-hidden py-3 sm:py-3.5 bg-white border-b border-slate-200 select-none group">
        <div class="absolute inset-y-0 left-0 w-16 sm:w-24 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-16 sm:w-24 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>

        <div class="flex animate-marquee group-hover:[animation-play-state:paused] whitespace-nowrap">
            <!-- Set 1 -->
            <div class="flex items-center gap-8 sm:gap-10 px-4 sm:px-6 text-xs sm:text-sm whitespace-nowrap">
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950">Where New Ideas Find New Beginnings</strong>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <span class="text-slate-600">Rooted in Navodaya • Open to Everyone</span>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950">Learn. Connect. Grow.</strong>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <span class="text-slate-600">Education & Skill Development</span>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950">Mentorship & Career Insights</strong>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <span class="text-slate-600">Entrepreneurship & Innovation</span>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950">Specialist Allied Industry Know-How</strong>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <span class="text-slate-600">Community Development & Social Impact</span>
                </span>
            </div>

            <!-- Set 2 (Seamless loop duplicate) -->
            <div class="flex items-center gap-8 sm:gap-10 px-4 sm:px-6 text-xs sm:text-sm whitespace-nowrap" aria-hidden="true">
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950">Where New Ideas Find New Beginnings</strong>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <span class="text-slate-600">Rooted in Navodaya • Open to Everyone</span>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950">Learn. Connect. Grow.</strong>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <span class="text-slate-600">Education & Skill Development</span>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950">Mentorship & Career Insights</strong>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <span class="text-slate-600">Entrepreneurship & Innovation</span>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <strong class="font-bold text-navy-950">Specialist Allied Industry Know-How</strong>
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-logo-yellow shadow-xs shrink-0"></span>
                    <span class="text-slate-600">Community Development & Social Impact</span>
                </span>
            </div>
        </div>
    </section>

    <!-- Core Philosophy Overview (Accurate, Grounded & Inclusive) -->
    <section class="bg-[#FAF8F5] py-12 border-b border-amber-100/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <div class="bg-white rounded-2xl p-6 border border-amber-100/60 shadow-xs hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-900 flex items-center justify-center font-bold text-sm mb-3">
                        01
                    </div>
                    <h3 class="text-base font-bold text-navy-950 font-heading">Learn with Purpose</h3>
                    <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">
                        Practical knowledge, modern skills, and continuous learning that equip individuals to thrive.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-emerald-100/60 shadow-xs hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-900 flex items-center justify-center font-bold text-sm mb-3">
                        02
                    </div>
                    <h3 class="text-base font-bold text-navy-950 font-heading">Connect with Compassion</h3>
                    <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">
                        Meaningful relationships across generations, professions, and communities built on trust.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-sky-100/60 shadow-xs hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-xl bg-sky-100 text-sky-900 flex items-center justify-center font-bold text-sm mb-3">
                        03
                    </div>
                    <h3 class="text-base font-bold text-navy-950 font-heading">Grow Together</h3>
                    <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">
                        Collective progress, self-reliance, and shared success that benefits wider communities.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-indigo-100/60 shadow-xs hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-900 flex items-center justify-center font-bold text-sm mb-3">
                        04
                    </div>
                    <h3 class="text-base font-bold text-navy-950 font-heading">Open to Everyone</h3>
                    <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">
                        An inclusive platform where learners, mentors, entrepreneurs, and volunteers are equally valued.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Our Story: The Human Side of NAVUDYAM -->
    <section id="about-us" class="scroll-mt-24 py-16 lg:py-20 bg-[#FCFAF7] border-b border-amber-100/70">
        <div id="story" class="scroll-mt-24"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Visual -->
                <div class="lg:col-span-5">
                    <img src="{{ asset('images/Picture3.jpg') }}" 
                         alt="Friendships, learning and community at Jawahar Navodaya Vidyalaya Gyanpur" 
                         class="w-full h-80 sm:h-96 lg:h-[480px] object-cover rounded-3xl shadow-sm border border-amber-100/60" />
                </div>

                <!-- Right Narrative -->
                <div class="lg:col-span-7 space-y-5">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                        OUR STORY — ROOTED IN FRIENDSHIP. DRIVEN BY PURPOSE.
                    </span>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-navy-950 tracking-tight leading-snug font-heading">
                        A Shared Beginning. <br />
                        <span class="text-navy-700">A New Purpose.</span>
                    </h2>

                    <div class="space-y-4 text-slate-600 text-sm sm:text-base leading-relaxed">
                        <p class="font-medium text-navy-950">
                            Some friendships last a lifetime. Some grow into something greater.
                        </p>
                        <p>
                            NAVUDYAM grew from friendships formed at Jawahar Navodaya Vidyalaya, Gyanpur, Bhadohi, during 1991–1998. Over the years, those friendships continued as we pursued different careers and gained experiences across professions and industries.
                        </p>
                        <p>
                            We eventually came together around a simple idea: what we have learned and the networks we have built should help others move forward.
                        </p>
                        <p>
                            That shared belief is the starting point of NAVUDYAM Foundation. While our roots are in Navodaya, our purpose reaches beyond it. We welcome anyone who believes in learning, sharing and creating opportunities together.
                        </p>
                    </div>

                    <div class="p-4 rounded-2xl bg-amber-50/80 border border-amber-200/60 text-navy-950 font-semibold text-xs sm:text-sm">
                        Our journey began with friendship. Our purpose extends to everyone.
                    </div>

                    <div class="pt-2 flex flex-wrap items-center gap-3">
                        <a href="{{ route('about') }}" 
                           class="inline-flex items-center gap-1.5 px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-colors shadow-xs">
                            <span>Read Full Story</span>
                            <i class="ri-arrow-right-line text-sm"></i>
                        </a>
                        <button @click="$dispatch('open-inquiry-modal')" 
                                type="button"
                                class="inline-flex items-center px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-slate-700 hover:text-navy-950 bg-white hover:bg-slate-50 border border-slate-200 rounded-full transition-colors cursor-pointer">
                            Connect with Us
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- What We Do: Five Focus Areas -->
    <section id="initiatives" class="scroll-mt-24 py-16 lg:py-20 bg-white border-b border-slate-200/70">
        <div id="pillars" class="scroll-mt-24"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-14 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                    WHAT WE DO
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-950 tracking-tight font-heading">
                    Five Areas of Focus
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Connecting knowledge with opportunity and experience with aspiration across five vital areas.
                </p>
            </div>

            <!-- Pillars Grid (5 Cards) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Pillar 1: Education & Skill Development -->
                <div class="bg-gradient-to-b from-sky-50/60 to-white rounded-3xl p-6 sm:p-7 border border-sky-100 hover:border-sky-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3.5">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-sky-800 tracking-wider">01</span>
                            <span class="text-[11px] font-semibold text-slate-400">Pillar One</span>
                        </div>
                        <h3 class="text-xl font-bold text-navy-950 font-heading group-hover:text-sky-700 transition-colors">
                            Education & Skill Development
                        </h3>
                        <p class="text-xs font-bold uppercase tracking-wider text-sky-700">
                            Skills That Open Doors.
                        </p>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Encouraging practical learning, digital literacy, career awareness, technical education and lifelong skill development.
                        </p>
                    </div>
                    <div class="pt-5 border-t border-slate-100 mt-5">
                        <a href="{{ route('initiatives') }}#education" class="text-xs font-bold uppercase tracking-wider text-navy-900 group-hover:text-sky-700 inline-flex items-center gap-1.5 transition-colors">
                            <span>Explore Education Pillar</span>
                            <i class="ri-arrow-right-line text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Pillar 2: Mentorship & Career Development -->
                <div class="bg-gradient-to-b from-amber-50/60 to-white rounded-3xl p-6 sm:p-7 border border-amber-100 hover:border-amber-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3.5">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-amber-800 tracking-wider">02</span>
                            <span class="text-[11px] font-semibold text-slate-400">Pillar Two</span>
                        </div>
                        <h3 class="text-xl font-bold text-navy-950 font-heading group-hover:text-amber-700 transition-colors">
                            Mentorship & Career Development
                        </h3>
                        <p class="text-xs font-bold uppercase tracking-wider text-amber-700">
                            Experience Shared. Possibilities Expanded.
                        </p>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Connecting experienced professionals with people seeking career guidance, leadership development and entrepreneurial insight.
                        </p>
                    </div>
                    <div class="pt-5 border-t border-slate-100 mt-5">
                        <a href="{{ route('initiatives') }}#mentorship" class="text-xs font-bold uppercase tracking-wider text-navy-900 group-hover:text-amber-700 inline-flex items-center gap-1.5 transition-colors">
                            <span>Explore Mentorship Pillar</span>
                            <i class="ri-arrow-right-line text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Pillar 3: Entrepreneurship & Innovation -->
                <div class="bg-gradient-to-b from-emerald-50/60 to-white rounded-3xl p-6 sm:p-7 border border-emerald-100 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3.5">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-emerald-800 tracking-wider">03</span>
                            <span class="text-[11px] font-semibold text-slate-400">Pillar Three</span>
                        </div>
                        <h3 class="text-xl font-bold text-navy-950 font-heading group-hover:text-emerald-700 transition-colors">
                            Entrepreneurship & Innovation
                        </h3>
                        <p class="text-xs font-bold uppercase tracking-wider text-emerald-700">
                            From Ideas to Enterprise.
                        </p>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Encouraging initiative, innovation, self-employment and enterprise development through knowledge sharing and collaboration.
                        </p>
                    </div>
                    <div class="pt-5 border-t border-slate-100 mt-5">
                        <a href="{{ route('initiatives') }}#entrepreneurship" class="text-xs font-bold uppercase tracking-wider text-navy-900 group-hover:text-emerald-700 inline-flex items-center gap-1.5 transition-colors">
                            <span>Explore Entrepreneurship Pillar</span>
                            <i class="ri-arrow-right-line text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Pillar 4: Laundry & Allied Industry Development -->
                <div class="bg-gradient-to-b from-indigo-50/60 to-white rounded-3xl p-6 sm:p-7 border border-indigo-100 hover:border-indigo-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3.5">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-indigo-800 tracking-wider">04</span>
                            <span class="text-[11px] font-semibold text-slate-400">Specialist Domain</span>
                        </div>
                        <h3 class="text-xl font-bold text-navy-950 font-heading group-hover:text-indigo-700 transition-colors">
                            Laundry & Allied Industry Development
                        </h3>
                        <p class="text-xs font-bold uppercase tracking-wider text-indigo-700">
                            Building Skills. Elevating an Industry.
                        </p>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Promoting technical knowledge, professional awareness and entrepreneurial opportunities in commercial laundry, textile care, hospitality and allied sectors.
                        </p>
                    </div>
                    <div class="pt-5 border-t border-slate-100 mt-5">
                        <a href="{{ route('initiatives') }}#allied-industry" class="text-xs font-bold uppercase tracking-wider text-navy-900 group-hover:text-indigo-700 inline-flex items-center gap-1.5 transition-colors">
                            <span>Explore Industry Pillar</span>
                            <i class="ri-arrow-right-line text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Pillar 5: Community Development & Social Impact -->
                <div class="bg-gradient-to-b from-rose-50/60 to-white rounded-3xl p-6 sm:p-7 border border-rose-100 hover:border-rose-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group lg:col-span-2">
                    <div class="space-y-3.5">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-rose-800 tracking-wider">05</span>
                            <span class="text-[11px] font-semibold text-slate-400">Pillar Five</span>
                        </div>
                        <h3 class="text-xl font-bold text-navy-950 font-heading group-hover:text-rose-700 transition-colors">
                            Community Development & Social Impact
                        </h3>
                        <p class="text-xs font-bold uppercase tracking-wider text-rose-700">
                            Stronger Connections. Stronger Communities.
                        </p>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed max-w-2xl">
                            Bringing people together for volunteering, outreach, professional networking and initiatives that create positive, lasting change across regions and communities.
                        </p>
                    </div>
                    <div class="pt-5 border-t border-slate-100 mt-5">
                        <a href="{{ route('initiatives') }}#community" class="text-xs font-bold uppercase tracking-wider text-navy-900 group-hover:text-rose-700 inline-flex items-center gap-1.5 transition-colors">
                            <span>Explore Community Pillar</span>
                            <i class="ri-arrow-right-line text-sm"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- How to Connect: Your Journey Starts Here (Replacing Old Business Setup) -->
    <section id="model" class="py-16 lg:py-20 bg-navy-950 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-14 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">
                    HOW TO CONNECT
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight font-heading">
                    Your Journey with NAVUDYAM Starts Here
                </h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    A simple and welcoming path designed for learners, professionals, mentors and partners from any background.
                </p>
            </div>

            <!-- 4-Stage Pathway Timeline -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                
                <!-- Stage 1 -->
                <div class="bg-navy-900/90 rounded-3xl p-6 border border-navy-800 relative hover:border-amber-400/50 transition-all duration-200">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-amber-400 font-extrabold text-2xl font-heading">01</span>
                        <div class="w-10 h-10 rounded-xl bg-amber-400/10 text-amber-400 flex items-center justify-center">
                            <i class="ri-compass-3-line text-xl"></i>
                        </div>
                    </div>
                    <span class="text-[11px] uppercase tracking-wider font-bold text-amber-300 block mb-1">STAGE 1</span>
                    <h3 class="text-lg font-bold text-white mb-2">Discover</h3>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                        Understand our purpose, explore focus areas, and identify where your interests and aspirations align.
                    </p>
                </div>

                <!-- Stage 2 -->
                <div class="bg-navy-900/90 rounded-3xl p-6 border border-navy-800 relative hover:border-emerald-400/50 transition-all duration-200">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-emerald-400 font-extrabold text-2xl font-heading">02</span>
                        <div class="w-10 h-10 rounded-xl bg-emerald-400/10 text-emerald-400 flex items-center justify-center">
                            <i class="ri-team-line text-xl"></i>
                        </div>
                    </div>
                    <span class="text-[11px] uppercase tracking-wider font-bold text-emerald-300 block mb-1">STAGE 2</span>
                    <h3 class="text-lg font-bold text-white mb-2">Connect</h3>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                        Introduce yourself through our Get Involved form and meet community members who share your goals.
                    </p>
                </div>

                <!-- Stage 3 -->
                <div class="bg-navy-900/90 rounded-3xl p-6 border border-navy-800 relative hover:border-sky-400/50 transition-all duration-200">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-sky-400 font-extrabold text-2xl font-heading">03</span>
                        <div class="w-10 h-10 rounded-xl bg-sky-400/10 text-sky-400 flex items-center justify-center">
                            <i class="ri-hand-coin-line text-xl"></i>
                        </div>
                    </div>
                    <span class="text-[11px] uppercase tracking-wider font-bold text-sky-300 block mb-1">STAGE 3</span>
                    <h3 class="text-lg font-bold text-white mb-2">Contribute</h3>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                        Offer your time, expertise, ideas, or institutional support—or participate actively as an eager learner.
                    </p>
                </div>

                <!-- Stage 4 -->
                <div class="bg-navy-900/90 rounded-3xl p-6 border border-navy-800 relative hover:border-amber-400/50 transition-all duration-200">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-amber-400 font-extrabold text-2xl font-heading">04</span>
                        <div class="w-10 h-10 rounded-xl bg-amber-400/10 text-amber-400 flex items-center justify-center">
                            <i class="ri-plant-line text-xl"></i>
                        </div>
                    </div>
                    <span class="text-[11px] uppercase tracking-wider font-bold text-amber-300 block mb-1">STAGE 4</span>
                    <h3 class="text-lg font-bold text-white mb-2">Grow Together</h3>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                        Build valuable skills, enduring relationships and meaningful opportunities that benefit you and wider society.
                    </p>
                </div>

            </div>

            <div class="mt-10 text-center">
                <button @click="$dispatch('open-inquiry-modal')" 
                        type="button"
                        class="inline-flex items-center justify-center px-8 py-3 rounded-full text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 shadow-md hover:shadow-lg transition-all cursor-pointer">
                    Start Your Connection
                </button>
            </div>

        </div>
    </section>

    <!-- Engagement & Learning Highlights (Section 7 Initiatives) -->
    <section class="py-16 lg:py-20 bg-[#FCFAF7] border-b border-amber-100/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-2xl mx-auto mb-12 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                    LEARN & CONTRIBUTE
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-950 tracking-tight font-heading">
                    Content & Community Initiatives
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                    Collaborative spaces designed to share knowledge, showcase journeys, and spark fresh ideas.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Initiative 1 -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="w-10 h-10 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center text-lg">
                            <i class="ri-discuss-line text-xl text-amber-800"></i>
                        </div>
                        <h3 class="font-bold text-navy-950 text-base font-heading">NAVUDYAM Learning Circle</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            A proposed series of open conversations covering career pathways, entrepreneurship, modern technology, and financial literacy.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 mt-4">
                        <span class="text-[11px] font-bold text-amber-700 uppercase">Upcoming Series</span>
                    </div>
                </div>

                <!-- Initiative 2 -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="w-10 h-10 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center text-lg">
                            <i class="ri-time-line text-xl text-emerald-800"></i>
                        </div>
                        <h3 class="font-bold text-navy-950 text-base font-heading">Give One Hour</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            An accessible invitation for experienced professionals to volunteer just one hour for mentoring, mock reviews, or knowledge sharing.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 mt-4">
                        <button @click="$dispatch('open-inquiry-modal')" class="text-[11px] font-bold text-emerald-700 uppercase hover:underline inline-flex items-center gap-1 cursor-pointer">
                            <span>Volunteer Time</span>
                            <i class="ri-arrow-right-line text-xs"></i>
                        </button>
                    </div>
                </div>

                <!-- Initiative 3 -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="w-10 h-10 rounded-2xl bg-sky-100 text-sky-800 flex items-center justify-center text-lg">
                            <i class="ri-lightbulb-line text-xl text-sky-800"></i>
                        </div>
                        <h3 class="font-bold text-navy-950 text-base font-heading">The Udyam Idea Wall</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            A moderated community bulletin to share grassroots ideas, local enterprise challenges, and collaborative solution proposals.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 mt-4">
                        <span class="text-[11px] font-bold text-sky-700 uppercase">Community Space</span>
                    </div>
                </div>

                <!-- Initiative 4 -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="w-10 h-10 rounded-2xl bg-indigo-100 text-indigo-800 flex items-center justify-center text-lg">
                            <i class="ri-book-open-line text-xl text-indigo-800"></i>
                        </div>
                        <h3 class="font-bold text-navy-950 text-base font-heading">Between Steam & Dreams®</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            A dedicated storytelling initiative highlighting real journeys, craftsmanship, ambition, setbacks, and trade learnings.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 mt-4">
                        <a href="{{ route('stories') }}" class="text-[11px] font-bold text-indigo-700 uppercase hover:underline inline-flex items-center gap-1">
                            <span>Read Features</span>
                            <i class="ri-arrow-right-line text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Events Section: Great Connections Begin with Conversations -->
    <section id="events" class="scroll-mt-24 py-16 lg:py-20 bg-white border-b border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                    EVENTS & EXPERIENCES
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-navy-950 tracking-tight font-heading">
                    Great Connections Begin with Conversations.
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed max-w-md mx-auto">
                    Planned workshops, mentoring conversations, industry dialogues and community meetups.
                </p>
            </div>

            <!-- Events Grid (Prospective Planned Sessions) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                
                <!-- Event 1 -->
                <div class="bg-[#FAF9F5] rounded-3xl p-6 border border-slate-200/80 hover:border-amber-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/Picture5.jpg') }}"
                                 alt="Planned Learning Circle Conversation"
                                 class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" />
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Learning Circle</span>
                            <span class="text-xs text-slate-400 font-medium">Virtual Dialogue</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 font-heading leading-snug group-hover:text-amber-600 transition-colors">
                            NAVUDYAM Learning Circle: Career & Practical Skills in a Changing Market
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            An open discussion with professionals on adapting to evolving industries, digital tools, and building practical skills.
                        </p>
                    </div>
                    <div class="pt-6 flex items-center justify-between border-t border-slate-200/60 mt-6">
                        <span class="text-xs text-slate-500 font-medium">Planned Program</span>
                        <button @click="$dispatch('open-inquiry-modal')" type="button" class="text-xs font-bold uppercase tracking-wider text-navy-950 hover:text-amber-600 inline-flex items-center gap-1.5 transition-colors cursor-pointer">
                            <span>Receive Updates</span>
                            <i class="ri-arrow-right-line text-xs"></i>
                        </button>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="bg-[#FAF9F5] rounded-3xl p-6 border border-slate-200/80 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/Picture6.jpg') }}"
                                 alt="Mentorship and Experience Sharing Dialogue"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Mentorship Dialogue</span>
                            <span class="text-xs text-slate-400 font-medium">Interactive Session</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 font-heading leading-snug group-hover:text-emerald-700 transition-colors">
                            Experience Shared: Navigating Early Career & First Steps
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Experienced mentors share personal insights on career transitions, handling uncertainty, and finding trusted guidance.
                        </p>
                    </div>
                    <div class="pt-6 flex items-center justify-between border-t border-slate-200/60 mt-6">
                        <span class="text-xs text-slate-500 font-medium">Open to All</span>
                        <button @click="$dispatch('open-inquiry-modal')" type="button" class="text-xs font-bold uppercase tracking-wider text-navy-950 hover:text-emerald-700 inline-flex items-center gap-1.5 transition-colors cursor-pointer">
                            <span>Receive Updates</span>
                            <i class="ri-arrow-right-line text-xs"></i>
                        </button>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="bg-[#FAF9F5] rounded-3xl p-6 border border-slate-200/80 hover:border-sky-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/Picture2.jpg') }}"
                                 alt="Entrepreneurship and Innovation Roundtable"
                                 class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" />
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-sky-700">Industry Roundtable</span>
                            <span class="text-xs text-slate-400 font-medium">Focus Discussion</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 font-heading leading-snug group-hover:text-sky-700 transition-colors">
                            From Ideas to Enterprise: Grassroots Opportunities & Best Practices
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Exploring small enterprise opportunities, modern operational practices, and community partnerships in service sectors.
                        </p>
                    </div>
                    <div class="pt-6 flex items-center justify-between border-t border-slate-200/60 mt-6">
                        <span class="text-xs text-slate-500 font-medium">Planned Discussion</span>
                        <a href="{{ route('events') }}" class="text-xs font-bold uppercase tracking-wider text-navy-950 hover:text-sky-700 inline-flex items-center gap-1.5 transition-colors">
                            <span>Propose an Event</span>
                            <i class="ri-arrow-right-line text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Stories, Ideas & Inspiration Section -->
    <section id="resources" class="scroll-mt-24 py-16 lg:py-24 bg-[#FAF9F5]/70 border-b border-slate-200/70">
        <div id="blog" class="scroll-mt-24"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                    STORIES, IDEAS & INSPIRATION
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-navy-950 tracking-tight font-heading">
                    Every Journey Has a Story Worth Sharing.
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed max-w-lg mx-auto">
                    Authentic journeys from Navodayans and friends beyond the network, highlighting lessons and resilience alongside achievements.
                </p>
            </div>

            <!-- Stories Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                
                <!-- Story Card 1 -->
                <article class="group bg-white rounded-3xl p-5 border border-slate-200/80 hover:border-amber-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100 mb-5">
                            <img src="{{ asset('images/Picture8.webp') }}" 
                                 alt="Journeys that inspire enterprise" 
                                 class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-105" />
                        </div>

                        <div class="text-xs text-slate-400 font-medium mb-2.5 flex items-center justify-between">
                            <span class="uppercase tracking-wider font-bold text-amber-700">The Entrepreneur’s Corner</span>
                            <span>Community Feature</span>
                        </div>

                        <h3 class="text-lg sm:text-xl font-bold text-navy-950 group-hover:text-amber-600 transition-colors font-heading leading-snug mb-3 line-clamp-2">
                            Transforming Everyday Effort into a Resilient Local Venture
                        </h3>

                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed line-clamp-3">
                            A candid look at navigating initial hurdles, understanding local customer needs, and building trust when establishing a small service enterprise.
                        </p>
                    </div>

                    <div class="pt-5 flex items-center text-xs sm:text-sm font-semibold text-navy-950 group-hover:text-amber-600 transition-colors">
                        <a href="{{ route('stories') }}" class="inline-flex items-center gap-1.5">
                            <span>Read Full Story</span>
                            <i class="ri-arrow-right-line text-sm transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </article>

                <!-- Story Card 2 -->
                <article class="group bg-white rounded-3xl p-5 border border-slate-200/80 hover:border-emerald-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100 mb-5">
                            <img src="{{ asset('images/Picture4.jpg') }}" 
                                 alt="Mentorship and career insights" 
                                 class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" />
                        </div>

                        <div class="text-xs text-slate-400 font-medium mb-2.5 flex items-center justify-between">
                            <span class="uppercase tracking-wider font-bold text-emerald-700">Career & Leadership</span>
                            <span>Mentorship Voice</span>
                        </div>

                        <h3 class="text-lg sm:text-xl font-bold text-navy-950 group-hover:text-emerald-700 transition-colors font-heading leading-snug mb-3 line-clamp-2">
                            The Value of Giving Back: Why Mentorship Matters at Every Stage
                        </h3>

                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed line-clamp-3">
                            Experienced professionals share why taking time to mentor others creates lasting ripple effects across communities and careers.
                        </p>
                    </div>

                    <div class="pt-5 flex items-center text-xs sm:text-sm font-semibold text-navy-950 group-hover:text-emerald-700 transition-colors">
                        <a href="{{ route('stories') }}" class="inline-flex items-center gap-1.5">
                            <span>Read Full Story</span>
                            <i class="ri-arrow-right-line text-sm transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </article>

                <!-- Story Card 3 -->
                <article class="group bg-white rounded-3xl p-5 border border-slate-200/80 hover:border-indigo-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100 mb-5">
                            <img src="{{ asset('images/Picture1.jpg') }}" 
                                 alt="Between Steam and Dreams story feature" 
                                 class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" />
                        </div>

                        <div class="text-xs text-slate-400 font-medium mb-2.5 flex items-center justify-between">
                            <span class="uppercase tracking-wider font-bold text-indigo-700">Between Steam & Dreams®</span>
                            <span>Trade Narrative</span>
                        </div>

                        <h3 class="text-lg sm:text-xl font-bold text-navy-950 group-hover:text-indigo-700 transition-colors font-heading leading-snug mb-3 line-clamp-2">
                            The Craft Behind the Trade: Ambition, Mastery and Perseverance
                        </h3>

                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed line-clamp-3">
                            A storytelling feature exploring the real pride of building technical skills in commercial services and elevating industry benchmarks.
                        </p>
                    </div>

                    <div class="pt-5 flex items-center text-xs sm:text-sm font-semibold text-navy-950 group-hover:text-indigo-700 transition-colors">
                        <a href="{{ route('stories') }}" class="inline-flex items-center gap-1.5">
                            <span>Read Full Story</span>
                            <i class="ri-arrow-right-line text-sm transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </article>

            </div>

            <!-- Share Your Story Callout -->
            <div class="mt-12 p-6 rounded-3xl bg-white border border-amber-200/80 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="space-y-1 text-center sm:text-left">
                    <h4 class="font-bold text-navy-950 text-base font-heading">Have a Journey or Lesson Worth Sharing?</h4>
                    <p class="text-xs text-slate-500">Every story undergoes careful review and participant consent before publication.</p>
                </div>
                <a href="{{ route('stories') }}" class="shrink-0 px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-colors shadow-xs">
                    Share Your Story
                </a>
            </div>

        </div>
    </section>

    <!-- Closing Invitation: Be Part of Something Meaningful -->
    <section class="py-16 lg:py-20 bg-navy-950 text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4 text-center lg:text-left">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">
                        AN OPEN INVITATION
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white font-heading leading-tight">
                        Be Part of Something Meaningful.
                    </h2>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed max-w-2xl">
                        Whether you are a student seeking direction, a professional willing to mentor, an entrepreneur exploring possibilities or someone who wants to contribute, there is a place for you at NAVUDYAM. You do not have to be a Navodayan to join us. What matters is the willingness to learn, connect, contribute and grow.
                    </p>
                </div>
                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3 justify-center">
                    <button @click="$dispatch('open-inquiry-modal')" 
                            type="button"
                            class="text-center px-8 py-3.5 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-all shadow-md hover:shadow-lg cursor-pointer">
                        Join NAVUDYAM
                    </button>
                    <a href="{{ route('about') }}" 
                       class="text-center px-8 py-3.5 text-xs font-bold uppercase tracking-wider text-white bg-navy-900 hover:bg-navy-800 border border-navy-800 rounded-full transition-all shadow-sm">
                        Learn Our Story
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Get Involved Modal (Section 6 Requirements) -->
    <div x-data="{ inquiryModalOpen: false }"
         x-effect="document.body.style.overflow = inquiryModalOpen ? 'hidden' : ''"
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
             class="fixed inset-0 z-50 overflow-y-auto bg-navy-950/85 backdrop-blur-md p-4 sm:p-6">
            
            <div @click.outside="inquiryModalOpen = false"
                 class="relative w-full max-w-2xl bg-white rounded-3xl p-6 sm:p-10 shadow-2xl border border-slate-100 my-6 sm:my-10 mx-auto">
                
                <!-- Close Button -->
                <button @click="inquiryModalOpen = false" 
                        type="button"
                        class="absolute top-4 right-4 sm:top-6 sm:right-6 w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center transition-all focus:outline-none"
                        aria-label="Close modal">
                    <i class="ri-close-line text-2xl text-slate-700"></i>
                </button>

                <!-- Modal Header -->
                <div class="text-center space-y-2 mb-6 sm:mb-8 pr-6 pl-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-800 block">
                        GET INVOLVED
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-navy-950 font-heading">
                        Join Hands with NAVUDYAM
                    </h3>
                    <p class="text-slate-600 text-xs sm:text-sm max-w-lg mx-auto">
                        Whether you are a student, mentor, entrepreneur, volunteer or institutional partner, there is a place for you. Rooted in Navodaya, open to everyone.
                    </p>
                </div>

                <!-- Form / Feedback inside Modal -->
                @if($inquirySubmitted)
                    <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-center space-y-3">
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center mx-auto text-xl font-bold">
                            <i class="ri-checkbox-circle-fill text-3xl text-emerald-600"></i>
                        </div>
                        <h4 class="text-lg font-bold text-emerald-900 font-heading">Thank You for Connecting!</h4>
                        <p class="text-xs sm:text-sm text-emerald-800 max-w-md mx-auto">
                            We have received your details. A member of our team will reach out to you directly to welcome you and share next steps.
                        </p>
                        <div class="flex items-center justify-center gap-3 pt-2">
                            <button wire:click="resetInquiry" class="px-5 py-2.5 text-xs font-bold uppercase tracking-wider bg-emerald-700 hover:bg-emerald-800 text-white rounded-full transition-colors shadow-sm cursor-pointer">
                                Submit Another Inquiry
                            </button>
                            <button @click="inquiryModalOpen = false" class="px-5 py-2.5 text-xs font-bold uppercase tracking-wider bg-slate-200 hover:bg-slate-300 text-slate-700 rounded-full transition-colors cursor-pointer">
                                Close
                            </button>
                        </div>
                    </div>
                @else
                    <form wire:submit="submitInquiry" class="space-y-4 sm:space-y-5">
                        
                        <!-- Role / Interest Selector (Section 6 Choices) -->
                        <div class="space-y-1.5">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700">
                                How would you like to participate? *
                            </label>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $inquiryType === 'student' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="inquiryType" value="student" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Student / Learner</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $inquiryType === 'mentor' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="inquiryType" value="mentor" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Mentor / Professional</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $inquiryType === 'entrepreneur' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="inquiryType" value="entrepreneur" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Entrepreneur</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $inquiryType === 'volunteer' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="inquiryType" value="volunteer" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Volunteer</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $inquiryType === 'partner' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="inquiryType" value="partner" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Corporate / CSR</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $inquiryType === 'general' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="inquiryType" value="general" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">General Enquiry</span>
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
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Phone / WhatsApp (Optional)</label>
                                <input type="text" wire:model="inquiryPhone" placeholder="e.g. +91 9876543210" 
                                       class="w-full bg-[#FAF8F5] border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                                @error('inquiryPhone') <span class="text-xs text-rose-600 font-medium">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">City / Location</label>
                                <input type="text" wire:model="inquiryCity" placeholder="e.g. Wardha, Pune, Delhi" 
                                       class="w-full bg-[#FAF8F5] border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                            </div>
                        </div>

                        <!-- Optional Navodaya Affiliation (Important: Explicitly Optional, Not Required) -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 p-3.5 rounded-2xl bg-slate-50 border border-slate-200/80">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">
                                    Navodaya Affiliation (Optional)
                                </label>
                                <select wire:model.live="inquiryAffiliation" 
                                        class="w-full bg-white border border-slate-300 rounded-xl px-3 py-2 text-xs text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500">
                                    <option value="none">No / Not a Navodayan</option>
                                    <option value="alumnus">Navodaya Alumnus</option>
                                    <option value="student">Current Navodaya Student</option>
                                    <option value="supporter">Friend & Supporter</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">
                                    JNV School / Batch / Org (If applicable)
                                </label>
                                <input type="text" wire:model="inquiryAffiliationDetail" placeholder="e.g. JNV Gyanpur (Optional)" 
                                       class="w-full bg-white border border-slate-300 rounded-xl px-3 py-2 text-xs text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Area of Interest & Message</label>
                            <textarea wire:model="inquiryMessage" rows="2" placeholder="Tell us how you'd like to collaborate, learn, or get involved..." 
                                      class="w-full bg-[#FAF8F5] border border-slate-300 rounded-xl px-3.5 py-2 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500"></textarea>
                        </div>

                        <div class="text-center pt-2">
                            <button type="submit" 
                                    class="w-full sm:w-auto px-8 py-3 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full shadow-md hover:shadow-lg transition-all cursor-pointer">
                                <span wire:loading.remove>Join NAVUDYAM</span>
                                <span wire:loading>Processing...</span>
                            </button>
                            <p class="text-[11px] text-slate-500 mt-2">
                                NAVUDYAM is open to everyone. We respect your privacy and will never share your contact details.
                            </p>
                        </div>

                    </form>
                @endif

            </div>
        </div>
    </div>
</div>
