<div>

    <!-- Events Hero Banner -->
    <section class="bg-navy-950 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.07] pointer-events-none"
             style="background-image: radial-gradient(circle at 20% 30%, #febd06 0, transparent 40%), radial-gradient(circle at 80% 70%, #3b82f6 0, transparent 40%);"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 sm:py-20 lg:py-24">
            <div class="max-w-3xl space-y-4">
                <div class="flex items-center gap-2 flex-wrap">
                    <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wider text-navy-950 bg-logo-yellow uppercase shadow-xs">
                        EVENTS & EXPERIENCES
                    </span>
                    <span class="text-xs text-slate-300 font-medium">Rooted in Navodaya. Open to Everyone.</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-[1.15] font-heading">
                    Great Connections Begin <br class="hidden sm:inline" />
                    with Conversations.
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl">
                    Join our planned learning circles, mentoring conversations, industry roundtables and community meetups — designed for open knowledge sharing, genuine support and collaborative growth.
                </p>
                <div class="pt-2 flex flex-wrap items-center gap-3">
                    <button @click="$dispatch('open-inquiry-modal')" 
                            type="button"
                            class="px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-colors shadow-xs cursor-pointer">
                        Receive Event Updates
                    </button>
                    <a href="{{ route('contact') }}" 
                       class="px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-white bg-navy-900 hover:bg-navy-800 border border-navy-800 rounded-full transition-colors">
                        Propose an Event
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Planned Events & Opportunities -->
    <section id="upcoming" class="scroll-mt-24 py-16 lg:py-20 bg-white border-b border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                    PLANNED OPPORTUNITIES
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-950 tracking-tight font-heading">
                    Prospective Sessions & Dialogues
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed max-w-md mx-auto">
                    We organize sessions based on community interest and confirmed speaker availability. Individual dates and registration links are published once confirmed.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">

                <!-- Planned Session 1 -->
                <div class="bg-[#FAF9F5] rounded-3xl p-6 border border-slate-200/80 hover:border-amber-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/Picture6.jpg') }}"
                                 alt="NAVUDYAM Learning Circle"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Learning Circle</span>
                            <span class="text-xs text-slate-400 font-medium">Virtual Dialogue</span>
                        </div>
                        <h3 class="text-lg font-bold text-navy-950 font-heading leading-snug group-hover:text-amber-600 transition-colors">
                            NAVUDYAM Learning Circle: Career & Practical Skills in a Changing Market
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            An open discussion with industry professionals on understanding market demands, adopting modern tools, and pursuing continuous skill development.
                        </p>
                    </div>
                    <div class="pt-6 flex items-center justify-between border-t border-slate-200/60 mt-6">
                        <span class="text-xs text-slate-500 font-medium">Planned Opportunity</span>
                        <button @click="$dispatch('open-inquiry-modal')" type="button" class="text-xs font-bold uppercase tracking-wider text-navy-950 hover:text-amber-600 inline-flex items-center gap-1 transition-colors cursor-pointer">
                            Receive Updates &rarr;
                        </button>
                    </div>
                </div>

                <!-- Planned Session 2 -->
                <div class="bg-[#FAF9F5] rounded-3xl p-6 border border-slate-200/80 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/Picture5.jpg') }}"
                                 alt="Mentorship and Career Pathways"
                                 class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" />
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Mentorship Dialogue</span>
                            <span class="text-xs text-slate-400 font-medium">Interactive Panel</span>
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
                        <button @click="$dispatch('open-inquiry-modal')" type="button" class="text-xs font-bold uppercase tracking-wider text-navy-950 hover:text-emerald-700 inline-flex items-center gap-1 transition-colors cursor-pointer">
                            Receive Updates &rarr;
                        </button>
                    </div>
                </div>

                <!-- Planned Session 3 -->
                <div class="bg-[#FAF9F5] rounded-3xl p-6 border border-slate-200/80 hover:border-sky-300 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/Picture2.jpg') }}"
                                 alt="Industry and Allied Sector Development"
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
                        <span class="text-xs text-slate-500 font-medium">Sector Workshop</span>
                        <button @click="$dispatch('open-inquiry-modal')" type="button" class="text-xs font-bold uppercase tracking-wider text-navy-950 hover:text-sky-700 inline-flex items-center gap-1 transition-colors cursor-pointer">
                            Receive Updates &rarr;
                        </button>
                    </div>
                </div>

            </div>

            <!-- Propose an Event Banner -->
            <div class="mt-12 p-8 rounded-3xl bg-[#FCFAF7] border border-amber-200/80 flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="space-y-1 text-center sm:text-left">
                    <h3 class="text-xl font-bold text-navy-950 font-heading">Have an Event Idea or Discussion Topic?</h3>
                    <p class="text-xs sm:text-sm text-slate-500 max-w-xl leading-relaxed">
                        We actively collaborate with professionals, alumni chapters, colleges, and civic organizations to co-host webinars, mentoring circles, and skill workshops.
                    </p>
                </div>
                <div class="shrink-0 flex items-center gap-3">
                    <a href="{{ route('contact') }}" class="px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-colors shadow-xs">
                        Propose an Event
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- What to Expect at Our Sessions -->
    <section id="expect" class="scroll-mt-24 py-16 lg:py-20 bg-[#FCFAF7] border-b border-amber-100/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                    SESSION PHILOSOPHY
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-950 tracking-tight font-heading">
                    What to Expect at Our Events
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Every conversation is grounded in practical value, mutual respect, and genuine inclusivity.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Expectation 1 -->
                <div class="group bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all duration-300">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-sm mb-4">
                        💡
                    </div>
                    <h3 class="font-bold text-navy-950 text-sm mb-1.5 font-heading">Practical Focus</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Honest insights into operations, challenges, career transitions, and real problem-solving.</p>
                </div>

                <!-- Expectation 2 -->
                <div class="group bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all duration-300">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm mb-4">
                        🤝
                    </div>
                    <h3 class="font-bold text-navy-950 text-sm mb-1.5 font-heading">Authentic Connections</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Meet students, professionals, and mentors who believe in mutual growth and giving back.</p>
                </div>

                <!-- Expectation 3 -->
                <div class="group bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all duration-300">
                    <div class="w-10 h-10 rounded-xl bg-sky-100 text-sky-800 flex items-center justify-center font-bold text-sm mb-4">
                        💬
                    </div>
                    <h3 class="font-bold text-navy-950 text-sm mb-1.5 font-heading">Open Q&A</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Dedicated time for questions, interactive discussion, and direct dialogue with mentors.</p>
                </div>

                <!-- Expectation 4 -->
                <div class="group bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all duration-300">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-800 flex items-center justify-center font-bold text-sm mb-4">
                        🌍
                    </div>
                    <h3 class="font-bold text-navy-950 text-sm mb-1.5 font-heading">Open to Everyone</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">No prior credentials or Navodaya background required. All curious minds are welcome.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Community CTA Banner -->
    <section class="py-16 bg-navy-950 text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-3 text-center lg:text-left">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">
                        STAY CONNECTED
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white font-heading">
                        Never Miss a Community Conversation.
                    </h2>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed max-w-2xl">
                        Register your interest to receive invitations for upcoming learning circles, mentorship dialogues, and partner workshops.
                    </p>
                </div>
                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3 justify-center">
                    <button @click="$dispatch('open-inquiry-modal')"
                            type="button"
                            class="text-center px-7 py-3 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full transition-all shadow-md hover:shadow-lg cursor-pointer">
                        Receive Event Updates
                    </button>
                    <a href="{{ route('contact') }}"
                       class="text-center px-7 py-3 text-xs font-bold uppercase tracking-wider text-white bg-navy-900 hover:bg-navy-800 border border-navy-800 rounded-full transition-all shadow-sm">
                        Propose an Event
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
