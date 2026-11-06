<div>

    <!-- Contact & Get Involved Hero Banner -->
    <section class="bg-navy-950 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.07] pointer-events-none"
             style="background-image: radial-gradient(circle at 20% 30%, #febd06 0, transparent 40%), radial-gradient(circle at 80% 70%, #3b82f6 0, transparent 40%);"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 sm:py-20 lg:py-24">
            <div class="max-w-3xl space-y-4">
                <div class="flex items-center gap-2 flex-wrap">
                    <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wider text-navy-950 bg-logo-yellow uppercase shadow-xs">
                        GET INVOLVED
                    </span>
                    <span class="text-xs text-slate-300 font-medium">Rooted in Navodaya. Open to Everyone.</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-[1.15] font-heading">
                    Join Hands with NAVUDYAM.
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl">
                    Whether you are a student seeking direction, a professional willing to mentor, an entrepreneur exploring possibilities or someone who wants to contribute, there is a place for you at NAVUDYAM. You do not have to be a Navodayan to join us. What matters is the willingness to learn, connect, contribute and grow.
                </p>
            </div>
        </div>
    </section>

    <!-- Verified Contact Info Cards -->
    <section class="bg-[#FAF8F5] py-12 border-b border-amber-100/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Phone -->
                <a href="tel:+917122550192"
                   class="group bg-white rounded-3xl p-6 border border-amber-100/60 shadow-xs text-center hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center mx-auto mb-4">
                        <i class="ri-phone-line text-2xl text-amber-800"></i>
                    </div>
                    <h3 class="font-bold text-navy-950 text-sm mb-1 font-heading">Call Us</h3>
                    <p class="text-xs text-slate-500">+91 712 255 0192</p>
                </a>

                <!-- Email -->
                <a href="mailto:contact@navudyam.org"
                   class="group bg-white rounded-3xl p-6 border border-emerald-100/60 shadow-xs text-center hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center mx-auto mb-4">
                        <i class="ri-mail-line text-2xl text-emerald-800"></i>
                    </div>
                    <h3 class="font-bold text-navy-950 text-sm mb-1 font-heading">Email Us</h3>
                    <p class="text-xs text-slate-500">contact@navudyam.org</p>
                </a>

                <!-- Location -->
                <div class="bg-white rounded-3xl p-6 border border-sky-100/60 shadow-xs text-center hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-sky-100 text-sky-800 flex items-center justify-center mx-auto mb-4">
                        <i class="ri-map-pin-2-line text-2xl text-sky-800"></i>
                    </div>
                    <h3 class="font-bold text-navy-950 text-sm mb-1 font-heading">Headquarters</h3>
                    <p class="text-xs text-slate-500">Wardha, Maharashtra, India</p>
                </div>

                <!-- Office Hours -->
                <div class="bg-white rounded-3xl p-6 border border-indigo-100/60 shadow-xs text-center hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-800 flex items-center justify-center mx-auto mb-4">
                        <i class="ri-time-line text-2xl text-indigo-800"></i>
                    </div>
                    <h3 class="font-bold text-navy-950 text-sm mb-1 font-heading">Office Hours</h3>
                    <p class="text-xs text-slate-500">Mon – Sat, 9:00 AM – 6:00 PM IST</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="write-to-us" class="scroll-mt-24 py-16 lg:py-20 bg-white border-b border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <!-- Form (7 cols) -->
                <div class="lg:col-span-7">
                    <div class="space-y-2 mb-8">
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                            CONTACT & INQUIRIES
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-bold text-navy-950 tracking-tight font-heading">
                            Send Us a Message
                        </h2>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                            Fill in your details below and a member of our team will reach out directly.
                        </p>
                    </div>

                    @if($submitted)
                        <div class="p-8 rounded-3xl bg-emerald-50 border border-emerald-200 text-center space-y-4">
                            <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center mx-auto text-xl font-bold">
                                <i class="ri-checkbox-circle-fill text-3xl text-emerald-600"></i>
                            </div>
                            <h4 class="text-xl font-bold text-emerald-900 font-heading">Thank You for Connecting!</h4>
                            <p class="text-xs sm:text-sm text-emerald-800 max-w-md mx-auto leading-relaxed">
                                We have received your inquiry. A member of our team will connect with you directly.
                            </p>
                            <button wire:click="resetContact"
                                    class="mt-2 px-6 py-2.5 text-xs font-bold uppercase tracking-wider bg-emerald-700 hover:bg-emerald-800 text-white rounded-full transition-colors shadow-sm cursor-pointer">
                                Submit Another Inquiry
                            </button>
                        </div>
                    @else
                        <form wire:submit="submitContact" class="bg-[#FCFAF7] rounded-3xl p-6 sm:p-8 border border-amber-100/70 space-y-4">

                            <!-- Inputs: Name, Email, Phone, Subject -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <!-- Full Name (Optional) -->
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">
                                        Full Name <span class="text-slate-400 font-normal">(Optional)</span>
                                    </label>
                                    <input type="text" wire:model="name" placeholder="Full name"
                                           class="w-full bg-white border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500 @error('name') border-rose-500 @enderror" />
                                    @error('name') <span class="text-xs text-rose-600 font-medium">{{ $message }}</span> @enderror
                                </div>

                                <!-- Email Address (Optional) -->
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">
                                        Email Address <span class="text-slate-400 font-normal">(Optional)</span>
                                    </label>
                                    <input type="email" wire:model="email" placeholder="Email address"
                                           class="w-full bg-white border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500 @error('email') border-rose-500 @enderror" />
                                    @error('email') <span class="text-xs text-rose-600 font-medium">{{ $message }}</span> @enderror
                                </div>

                                <!-- Phone / WhatsApp (Required) -->
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">
                                        Phone / WhatsApp <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="tel" wire:model="phone" required placeholder="Phone number"
                                           class="w-full bg-white border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500 @error('phone') border-rose-500 @enderror" />
                                    @error('phone') <span class="text-xs text-rose-600 font-medium">{{ $message }}</span> @enderror
                                </div>

                                <!-- Subject (Required) -->
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">
                                        Subject <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="text" wire:model="subject" required placeholder="Subject"
                                           class="w-full bg-white border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500 @error('subject') border-rose-500 @enderror" />
                                    @error('subject') <span class="text-xs text-rose-600 font-medium">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <!-- Message (Required) -->
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">
                                    Your Message <span class="text-rose-500">*</span>
                                </label>
                                <textarea wire:model="message" required rows="5" placeholder="Your message..."
                                          class="w-full bg-white border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500 @error('message') border-rose-500 @enderror"></textarea>
                                @error('message') <span class="text-xs text-rose-600 font-medium">{{ $message }}</span> @enderror
                            </div>

                            <div class="pt-2">
                                <button type="submit"
                                        class="w-full sm:w-auto px-8 py-3 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full shadow-md hover:shadow-lg transition-all cursor-pointer">
                                    <span wire:loading.remove>Send Message</span>
                                    <span wire:loading>Sending...</span>
                                </button>
                            </div>

                        </form>
                    @endif
                </div>

                <!-- Sidebar Details (5 cols) -->
                <div class="lg:col-span-5 space-y-6">

                    <div class="bg-navy-950 text-white rounded-3xl p-7 sm:p-8 space-y-5">
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">
                            REACH US DIRECTLY
                        </span>
                        <h3 class="text-xl font-bold font-heading tracking-tight">Direct Information</h3>
                        
                        <ul class="space-y-4 text-sm">
                            <li class="flex items-start gap-3">
                                <i class="ri-phone-line text-logo-yellow text-lg shrink-0 mt-0.5"></i>
                                <div>
                                    <p class="font-semibold text-white text-sm">Phone</p>
                                    <a href="tel:+917122550192" class="text-slate-300 text-xs hover:text-amber-400 transition-colors">+91 712 255 0192</a>
                                </div>
                            </li>

                            <li class="flex items-start gap-3">
                                <i class="ri-mail-line text-logo-yellow text-lg shrink-0 mt-0.5"></i>
                                <div>
                                    <p class="font-semibold text-white text-sm">Email Inquiries</p>
                                    <a href="mailto:contact@navudyam.org" class="text-slate-300 text-xs hover:text-amber-400 transition-colors">contact@navudyam.org</a>
                                    <br />
                                    <a href="mailto:connect@navudyam.org" class="text-slate-300 text-xs hover:text-amber-400 transition-colors">connect@navudyam.org</a>
                                </div>
                            </li>

                            <li class="flex items-start gap-3">
                                <i class="ri-map-pin-2-line text-logo-yellow text-lg shrink-0 mt-0.5"></i>
                                <div>
                                    <p class="font-semibold text-white text-sm">Location</p>
                                    <p class="text-slate-300 text-xs leading-relaxed">Wardha, Maharashtra, India</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-[#FCFAF7] rounded-3xl p-7 border border-amber-100/70 space-y-3">
                        <h4 class="font-bold text-navy-950 text-base font-heading">Our Core Positioning</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            <strong>Founded by Navodayans. Inspired by Navodaya. Open to Everyone.</strong> We believe that knowledge, effort and connections can create fresh opportunities for people from every walk of life.
                        </p>
                        <div class="pt-2">
                            <a href="{{ route('about') }}"
                               class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-amber-700 hover:text-amber-800 transition-colors">
                                <span>Read Our Story</span>
                                <i class="ri-arrow-right-line text-xs"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Map Base Section -->
    <section id="map" class="scroll-mt-24 py-16 lg:py-20 bg-[#FCFAF7] border-b border-amber-100/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-12 space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700 block">
                    LOCATION & PRESENCE
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-950 tracking-tight font-heading">
                    Rooted in Wardha, Connected Nationwide
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Operating from Wardha, Maharashtra — with active volunteers, mentors, and community members collaborating across India.
                </p>
            </div>

            <div class="rounded-3xl overflow-hidden border border-amber-100/60 shadow-sm bg-white">
                <iframe src="https://maps.google.com/maps?q=Wardha%2C%20Maharashtra%2C%20India&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="100%"
                        height="420"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="NAVUDYAM Foundation location — Wardha, Maharashtra">
                </iframe>
            </div>

        </div>
    </section>

</div>
