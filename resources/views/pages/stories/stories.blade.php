<div x-data="{ activeStory: null }"
     x-effect="document.body.style.overflow = activeStory ? 'hidden' : ''"
     @keydown.escape.window="activeStory = null">

    <!-- Stories Hero Banner (matching site hero pattern) -->
    <section class="bg-navy-950 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.07] pointer-events-none"
             style="background-image: radial-gradient(circle at 20% 30%, #febd06 0, transparent 40%), radial-gradient(circle at 80% 70%, #3b82f6 0, transparent 40%);"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 sm:py-20 lg:py-24">
            <div class="max-w-2xl space-y-4">
                <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wider text-navy-950 bg-logo-yellow uppercase shadow-xs">
                    STORIES & RESOURCES
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-[1.14] font-heading">
                    Real Stories From <br class="hidden sm:inline" />
                    the Navodaya Community.
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-xl">
                    Field learnings, enterprise case studies, and practical guides from students, mentors, and alumni across India.
                </p>
            </div>
        </div>
    </section>

    <!-- Stories Grid (clickable cards, matching home blog card pattern) -->
    <section class="py-16 lg:py-24 bg-[#FAF9F5]/70 border-b border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                    FROM THE FIELD
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-950 tracking-tight font-heading">
                    Browse All Stories
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed max-w-lg mx-auto">
                    Click any card to read the full story in a popup — no page reloads, just scroll and read.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                @foreach($stories as $story)
                    <article @click="activeStory = @js($story)"
                             class="group bg-white rounded-3xl p-5 border border-slate-200/80 hover:border-amber-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between cursor-pointer">

                        <div>
                            <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100 mb-5">
                                <img src="{{ asset($story['image']) }}"
                                     alt="{{ $story['alt'] }}"
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                            </div>

                            <div class="flex items-center justify-between text-xs font-medium mb-2.5">
                                <span class="uppercase tracking-wider text-amber-700">{{ $story['category'] }}</span>
                                <span class="text-slate-400">{{ $story['date'] }} • {{ $story['read'] }}</span>
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
                                Read Full Story
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </span>
                        </div>
                    </article>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Story Popup Modal (matching video lightbox pattern) -->
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
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
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
                    <span class="text-slate-400"><span x-text="activeStory?.date"></span> • <span x-text="activeStory?.read"></span></span>
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
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center px-6 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-navy-950 hover:bg-navy-900 shadow-sm hover:shadow transition-all duration-200">
                        Share Your Story
                    </a>
                    <button @click="activeStory = null" class="text-xs text-slate-400 hover:text-navy-950 transition-colors cursor-pointer">
                        Close (Esc)
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Community CTA Banner (matching site CTA pattern) -->
    <section class="py-16 bg-navy-950 text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-3 text-center lg:text-left">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">
                        YOUR STORY MATTERS
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white font-heading">
                        Started Something of Your Own? <br class="hidden sm:inline" />
                        We Want to Hear It.
                    </h2>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed max-w-2xl">
                        Every enterprise, every milestone, every lesson learned in a small town inspires the next Navodayan to begin. Share your journey with the community.
                    </p>
                </div>
                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3 justify-center">
                    <a href="{{ route('contact') }}"
                       class="text-center px-7 py-3 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-all shadow-md hover:shadow-lg">
                        Submit Your Story
                    </a>
                    <a href="{{ route('events') }}"
                       class="text-center px-7 py-3 text-xs font-bold uppercase tracking-wider text-white bg-navy-800 hover:bg-navy-700 border border-navy-700 rounded-full transition-all shadow-sm">
                        Join Upcoming Events
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
