<div x-data="{ 
        activeStory: null,
        selectedCategory: 'all'
     }"
     x-effect="document.body.style.overflow = activeStory ? 'hidden' : ''"
     @keydown.escape.window="activeStory = null">

    <!-- Stories Hero Banner -->
    <section class="bg-navy-950 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.07] pointer-events-none"
             style="background-image: radial-gradient(circle at 20% 30%, #febd06 0, transparent 40%), radial-gradient(circle at 80% 70%, #3b82f6 0, transparent 40%);"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 sm:py-20 lg:py-24">
            <div class="max-w-3xl space-y-4">
                <div class="flex items-center gap-2 flex-wrap">
                    <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wider text-navy-950 bg-logo-yellow uppercase shadow-xs">
                        STORIES, IDEAS & INSPIRATION
                    </span>
                    <span class="text-xs text-slate-300 font-medium">Rooted in Navodaya. Open to Everyone.</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-[1.15] font-heading">
                    Every Journey Has a Story <br class="hidden sm:inline" />
                    Worth Sharing.
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl">
                    Authentic journeys from Navodayans and friends beyond the network, highlighting lessons and resilience as much as achievements. Explore field learnings, leadership insights, and trade narratives.
                </p>
                <div class="pt-2">
                    <a href="#share-story" class="inline-flex items-center gap-2 px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-colors shadow-xs">
                        <span>Share Your Story</span>
                        <i class="ri-arrow-down-line text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Filter Bar -->
    <section class="py-6 bg-white border-b border-slate-200/80 sticky top-20 z-40 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 overflow-x-auto pb-1 text-xs no-scrollbar">
                <button type="button" 
                        @click="selectedCategory = 'all'"
                        class="px-4 py-2 rounded-full font-bold whitespace-nowrap transition-colors cursor-pointer"
                        :class="selectedCategory === 'all' ? 'bg-navy-950 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                    All Stories
                </button>
                <button type="button" 
                        @click="selectedCategory = 'Journeys That Inspire'"
                        class="px-4 py-2 rounded-full font-bold whitespace-nowrap transition-colors cursor-pointer"
                        :class="selectedCategory === 'Journeys That Inspire' ? 'bg-navy-950 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                    Journeys That Inspire
                </button>
                <button type="button" 
                        @click="selectedCategory = 'The Entrepreneur’s Corner'"
                        class="px-4 py-2 rounded-full font-bold whitespace-nowrap transition-colors cursor-pointer"
                        :class="selectedCategory === 'The Entrepreneur’s Corner' ? 'bg-navy-950 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                    The Entrepreneur’s Corner
                </button>
                <button type="button" 
                        @click="selectedCategory = 'Career & Leadership'"
                        class="px-4 py-2 rounded-full font-bold whitespace-nowrap transition-colors cursor-pointer"
                        :class="selectedCategory === 'Career & Leadership' ? 'bg-navy-950 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                    Career & Leadership
                </button>
                <button type="button" 
                        @click="selectedCategory = 'Skills for Tomorrow'"
                        class="px-4 py-2 rounded-full font-bold whitespace-nowrap transition-colors cursor-pointer"
                        :class="selectedCategory === 'Skills for Tomorrow' ? 'bg-navy-950 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                    Skills for Tomorrow
                </button>
                <button type="button" 
                        @click="selectedCategory = 'Between Steam & Dreams®'"
                        class="px-4 py-2 rounded-full font-bold whitespace-nowrap transition-colors cursor-pointer"
                        :class="selectedCategory === 'Between Steam & Dreams®' ? 'bg-navy-950 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                    Between Steam & Dreams®
                </button>
            </div>
        </div>
    </section>

    <!-- Stories Grid -->
    <section class="py-16 lg:py-20 bg-[#FAF9F5]/70 border-b border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                @foreach($stories as $story)
                    <article x-show="selectedCategory === 'all' || selectedCategory === '{{ $story['category'] }}'"
                             x-transition
                             @click="activeStory = @js($story)"
                             class="group bg-white rounded-3xl p-5 border border-slate-200/80 hover:border-amber-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between cursor-pointer">

                        <div>
                            <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100 mb-5">
                                <img src="{{ asset($story['image']) }}"
                                     alt="{{ $story['alt'] }}"
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                            </div>

                            <div class="flex items-center justify-between text-xs font-medium mb-2.5">
                                <span class="uppercase tracking-wider font-bold text-amber-700">{{ $story['category'] }}</span>
                                <span class="text-slate-400">{{ $story['read'] }}</span>
                            </div>

                            <h3 class="text-lg sm:text-xl font-bold text-navy-950 group-hover:text-amber-600 transition-colors font-heading leading-snug mb-3 line-clamp-2">
                                {{ $story['title'] }}
                            </h3>

                            <p class="text-xs sm:text-sm text-slate-500 leading-relaxed line-clamp-3">
                                {{ $story['excerpt'] }}
                            </p>
                        </div>

                        <div class="pt-5 flex items-center text-xs sm:text-sm font-semibold text-navy-950 group-hover:text-amber-600 transition-colors">
                            <span class="inline-flex items-center gap-1.5">
                                <span>Read Full Story</span>
                                <i class="ri-arrow-right-line text-sm transition-transform group-hover:translate-x-1"></i>
                            </span>
                        </div>
                    </article>
                @endforeach

            </div>

        </div>
    </section>

    <!-- Story Popup Modal -->
    <div x-show="activeStory"
         x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto bg-navy-950/85 backdrop-blur-md p-4 sm:p-6">

        <div @click.outside="activeStory = null"
             class="relative w-full max-w-2xl bg-white rounded-3xl overflow-hidden shadow-2xl my-6 sm:my-10 mx-auto">

            <!-- Close Button -->
            <button @click="activeStory = null"
                    type="button"
                    class="absolute top-3 right-3 z-20 w-10 h-10 rounded-full bg-black/50 hover:bg-black text-white flex items-center justify-center transition-all hover:scale-105 focus:outline-none"
                    aria-label="Close story">
                <i class="ri-close-line text-2xl text-white"></i>
            </button>

            <!-- Cover Image -->
            <div class="aspect-[16/9] bg-slate-100">
                <img :src="activeStory?.image" :alt="activeStory?.alt"
                     class="w-full h-full object-cover" />
            </div>

            <!-- Story Content -->
            <div class="p-6 sm:p-8 space-y-4">
                <div class="flex items-center justify-between text-xs font-medium">
                    <span class="uppercase tracking-wider text-amber-700 font-bold" x-text="activeStory?.category"></span>
                    <span class="text-slate-400" x-text="activeStory?.read"></span>
                </div>

                <h3 class="text-xl sm:text-2xl font-extrabold text-navy-950 font-heading tracking-tight leading-snug"
                    x-text="activeStory?.title"></h3>

                <div class="w-12 h-1 bg-logo-yellow rounded-full"></div>

                <div class="space-y-3.5">
                    <template x-for="(paragraph, index) in (activeStory?.body || [])" :key="index">
                        <p class="text-slate-600 text-sm leading-relaxed" x-text="paragraph"></p>
                    </template>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                    <a href="#share-story" @click="activeStory = null"
                       class="inline-flex items-center justify-center px-6 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm transition-all duration-200">
                        Share Your Story
                    </a>
                    <button @click="activeStory = null" class="text-xs text-slate-400 hover:text-navy-950 transition-colors cursor-pointer">
                        Close (Esc)
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Share Your Story Section (With Review & Consent Assurance) -->
    <section id="share-story" class="scroll-mt-24 py-16 lg:py-20 bg-white border-b border-slate-200/70">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-[#FCFAF7] rounded-3xl p-8 sm:p-12 border border-amber-100 shadow-xs space-y-6 text-center">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                    CONTRIBUTE CONTENT
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-navy-950 font-heading">
                    Share Your Story with NAVUDYAM
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                    Have you navigated an entrepreneurial challenge, learned a hard lesson in your career, mentored a younger peer, or mastered a specialized trade? Your experience can guide someone walking the path behind you.
                </p>

                <!-- Consent & Review Notice -->
                <div class="p-4 rounded-2xl bg-amber-50/80 border border-amber-200/80 text-xs text-slate-700 max-w-xl mx-auto text-left flex items-start gap-3">
                    <i class="ri-shield-check-line text-amber-800 text-xl shrink-0 mt-0.5"></i>
                    <p class="leading-relaxed">
                        <strong>Editorial Integrity & Consent:</strong> Every story submitted goes through collaborative review. We work closely with you to finalize drafts, and nothing is published without your written consent.
                    </p>
                </div>

                <div class="pt-2 flex flex-wrap items-center justify-center gap-4">
                    <a href="{{ route('contact') }}"
                       class="px-8 py-3 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-all shadow-md hover:shadow-lg">
                        Submit a Story Proposal
                    </a>
                    <button @click="$dispatch('open-inquiry-modal')" 
                            type="button"
                            class="px-8 py-3 text-xs font-bold uppercase tracking-wider text-slate-700 bg-white hover:bg-slate-50 border border-slate-200 rounded-full transition-all cursor-pointer">
                        Connect with Editors
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Closing Invitation -->
    <section class="py-16 bg-navy-950 text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-3 text-center lg:text-left">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">
                        AN OPEN INVITATION
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white font-heading">
                        Be Part of Something Meaningful.
                    </h2>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed max-w-2xl">
                        Whether you are a student seeking direction, a professional willing to mentor, an entrepreneur exploring possibilities or someone who wants to contribute, there is a place for you at NAVUDYAM.
                    </p>
                </div>
                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3 justify-center">
                    <button @click="$dispatch('open-inquiry-modal')"
                            type="button"
                            class="text-center px-7 py-3 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-all shadow-md hover:shadow-lg cursor-pointer">
                        Join NAVUDYAM
                    </button>
                    <a href="{{ route('home') }}"
                       class="text-center px-7 py-3 text-xs font-bold uppercase tracking-wider text-white bg-navy-900 hover:bg-navy-800 border border-navy-800 rounded-full transition-all shadow-sm">
                        Back to Homepage
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
