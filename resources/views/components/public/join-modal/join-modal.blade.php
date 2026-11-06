<div>
    <!-- Join NAVUDYAM Modal (Design Pattern Consistent with Platform) -->
    <div x-data="{ inquiryModalOpen: false }"
         x-effect="document.body.style.overflow = $wire.isOpen ? 'hidden' : ''"
         @open-inquiry-modal.window="$wire.openModal()"
         @open-join-modal.window="$wire.openModal()"
         @close-inquiry-modal.window="$wire.closeModal()"
         @keydown.escape.window="$wire.closeModal()">
        
        <div x-show="$wire.isOpen" 
             x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto bg-navy-950/85 backdrop-blur-md p-4 sm:p-6 flex items-center justify-center">
            
            <div @click.outside="$wire.closeModal()"
                 class="relative w-full max-w-2xl bg-white rounded-3xl p-6 sm:p-10 shadow-2xl border border-slate-100 my-6 sm:my-10 mx-auto">
                
                <!-- Close Button -->
                <button wire:click="closeModal" 
                        type="button"
                        class="absolute top-4 right-4 sm:top-6 sm:right-6 w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center transition-all focus:outline-none cursor-pointer"
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
                @if($submitted)
                    <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-center space-y-3">
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center mx-auto text-xl font-bold">
                            <i class="ri-checkbox-circle-fill text-3xl text-emerald-600"></i>
                        </div>
                        <h4 class="text-lg font-bold text-emerald-900 font-heading">Thank You for Connecting!</h4>
                        <p class="text-xs sm:text-sm text-emerald-800 max-w-md mx-auto">
                            We have received your details. A member of our team will reach out to you directly to welcome you and share next steps.
                        </p>
                        <div class="flex items-center justify-center gap-3 pt-2">
                            <button type="button" 
                                    wire:click="resetForm" 
                                    class="px-5 py-2.5 text-xs font-bold uppercase tracking-wider bg-emerald-700 hover:bg-emerald-800 text-white rounded-full transition-colors shadow-sm cursor-pointer">
                                Submit Another Response
                            </button>
                            <button type="button" 
                                    wire:click="closeModal" 
                                    class="px-5 py-2.5 text-xs font-bold uppercase tracking-wider bg-slate-200 hover:bg-slate-300 text-slate-700 rounded-full transition-colors cursor-pointer">
                                Close
                            </button>
                        </div>
                    </div>
                @else
                    <form wire:submit="submit" class="space-y-4 sm:space-y-5">
                        
                        <!-- Role / Interest Selector -->
                        <div class="space-y-1.5">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700">
                                How would you like to participate?
                            </label>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $participation_type === 'student' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="participation_type" value="student" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Student / Learner</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $participation_type === 'mentor' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="participation_type" value="mentor" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Mentor / Professional</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $participation_type === 'entrepreneur' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="participation_type" value="entrepreneur" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Entrepreneur</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $participation_type === 'volunteer' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="participation_type" value="volunteer" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Volunteer</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $participation_type === 'partner' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="participation_type" value="partner" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">Corporate / CSR</span>
                                </label>
                                <label class="flex items-center gap-2 p-2.5 rounded-xl border cursor-pointer transition-all {{ $participation_type === 'general' ? 'border-navy-900 bg-navy-50 text-navy-900 font-bold' : 'border-slate-200 bg-[#FAF8F5] text-slate-600' }}">
                                    <input type="radio" wire:model.live="participation_type" value="general" class="text-navy-900 focus:ring-navy-900" />
                                    <span class="text-xs">General Enquiry</span>
                                </label>
                            </div>
                        </div>

                        <!-- Form Inputs -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">
                                    Phone / WhatsApp <span class="text-rose-500">*</span>
                                </label>
                                <input type="tel" 
                                       wire:model="phone" 
                                       placeholder="Phone or WhatsApp number" 
                                       class="w-full bg-[#FAF8F5] border {{ $errors->has('phone') ? 'border-rose-400 ring-1 ring-rose-400' : 'border-slate-300' }} rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                                @error('phone') 
                                    <span class="text-xs text-rose-600 font-medium block mt-1">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">
                                    Full Name <span class="text-slate-400 font-normal text-[11px]">(Optional)</span>
                                </label>
                                <input type="text" 
                                       wire:model="name" 
                                       placeholder="Full name" 
                                       class="w-full bg-[#FAF8F5] border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                                @error('name') 
                                    <span class="text-xs text-rose-600 font-medium block mt-1">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">
                                    Email Address <span class="text-slate-400 font-normal text-[11px]">(Optional)</span>
                                </label>
                                <input type="email" 
                                       wire:model="email" 
                                       placeholder="Email address" 
                                       class="w-full bg-[#FAF8F5] border {{ $errors->has('email') ? 'border-rose-400 ring-1 ring-rose-400' : 'border-slate-300' }} rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                                @error('email') 
                                    <span class="text-xs text-rose-600 font-medium block mt-1">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">
                                    City / Location <span class="text-slate-400 font-normal text-[11px]">(Optional)</span>
                                </label>
                                <input type="text" 
                                       wire:model="city" 
                                       placeholder="City or location" 
                                       class="w-full bg-[#FAF8F5] border border-slate-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                            </div>
                        </div>

                        <!-- Optional Navodaya Affiliation -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 p-3.5 rounded-2xl bg-slate-50 border border-slate-200/80">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">
                                    Navodaya Affiliation <span class="text-slate-400 font-normal text-[11px]">(Optional)</span>
                                </label>
                                <select wire:model.live="affiliation" 
                                        class="w-full bg-white border border-slate-300 rounded-xl px-3 py-2 text-xs text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500">
                                    <option value="none">No / Not a Navodayan</option>
                                    <option value="alumnus">Navodaya Alumnus</option>
                                    <option value="student">Current Navodaya Student</option>
                                    <option value="supporter">Friend & Supporter</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">
                                    JNV School / Batch / Org <span class="text-slate-400 font-normal text-[11px]">(Optional)</span>
                                </label>
                                <input type="text" 
                                       wire:model="affiliation_detail" 
                                       placeholder="School, batch, or organization" 
                                       class="w-full bg-white border border-slate-300 rounded-xl px-3 py-2 text-xs text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500" />
                            </div>
                        </div>

                        <!-- Area of Interest & Message -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">
                                Area of Interest & Message <span class="text-slate-400 font-normal text-[11px]">(Optional)</span>
                            </label>
                            <textarea wire:model="message" 
                                      rows="2" 
                                      placeholder="Tell us how you'd like to collaborate, learn, or get involved..." 
                                      class="w-full bg-[#FAF8F5] border border-slate-300 rounded-xl px-3.5 py-2 text-xs sm:text-sm text-slate-900 focus:outline-none focus:ring-1 focus:ring-amber-500 resize-none"></textarea>
                        </div>

                        <!-- Submit Button with Loading State -->
                        <div class="text-center pt-2">
                            <button type="submit" 
                                    wire:loading.attr="disabled"
                                    class="w-full sm:w-auto px-8 py-3 text-xs font-bold uppercase tracking-wider text-navy-950 bg-amber-400 hover:bg-amber-300 rounded-full shadow-md hover:shadow-lg transition-all cursor-pointer disabled:opacity-60 disabled:cursor-not-allowed">
                                <span wire:loading.remove>Join NAVUDYAM</span>
                                <span wire:loading class="inline-flex items-center gap-2">
                                    <i class="ri-loader-4-line animate-spin text-sm"></i>
                                    <span>Processing...</span>
                                </span>
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
