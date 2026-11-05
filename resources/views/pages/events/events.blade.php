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
                    Learning circles, mentorship dialogues, industry roundtables and community meetups.
                </p>
            </div>
        </div>
    </section>

    <!-- Events Grid: Only Title and Image Nothing Else -->
    <section class="py-16 lg:py-20 bg-[#FAF9F5]/70 border-b border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach($events as $event)
                    <div class="bg-white rounded-3xl overflow-hidden border border-slate-200/80 hover:border-amber-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col">
                        <div class="aspect-[16/10] overflow-hidden bg-slate-100">
                            <img src="{{ asset($event['image']) }}"
                                 alt="{{ $event['title'] }}"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        </div>
                        <div class="p-6 flex-1 flex items-center">
                            <h3 class="text-base sm:text-lg font-bold text-navy-950 font-heading leading-snug group-hover:text-amber-600 transition-colors">
                                {{ $event['title'] }}
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
