<div class="space-y-6">

    <!-- Page Header (shadcn style) -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-4 border-b border-zinc-200">
        <div>
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-1.5 text-xs text-zinc-500 mb-1" aria-label="Breadcrumb">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-zinc-900 transition-colors">Admin</a>
                <i class="ri-arrow-right-s-line text-zinc-400"></i>
                <span class="text-zinc-900 font-medium">Settings</span>
            </nav>
            <h1 class="text-2xl font-bold tracking-tight text-zinc-900 font-heading">
                System Settings
            </h1>
            <p class="text-xs text-zinc-500 mt-0.5">
                Configure project branding, contact information, and social media handles.
            </p>
        </div>

        <div class="flex items-center gap-2.5">
            <a href="{{ route('home') }}" 
               target="_blank"
               class="inline-flex items-center justify-center gap-1.5 h-9 px-3 rounded-md text-xs font-medium text-zinc-700 bg-white border border-zinc-200 shadow-2xs hover:bg-zinc-50 hover:text-zinc-900 transition-colors">
                <i class="ri-external-link-line text-xs text-zinc-500"></i>
                <span>View Public Site</span>
            </a>
            <button type="button" 
                    wire:click="save"
                    wire:loading.attr="disabled"
                    class="inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-md text-xs font-semibold text-white bg-zinc-900 shadow-2xs hover:bg-zinc-800 transition-colors cursor-pointer disabled:opacity-60">
                <span wire:loading.remove wire:target="save" class="inline-flex items-center gap-1.5">
                    <i class="ri-save-line text-xs"></i>
                    <span>Save Changes</span>
                </span>
                <span wire:loading wire:target="save" class="inline-flex items-center gap-1.5">
                    <i class="ri-loader-4-line animate-spin text-xs"></i>
                    <span>Saving...</span>
                </span>
            </button>
        </div>
    </div>

    <!-- Main Settings Form -->
    <form wire:submit="save" class="space-y-6 max-w-4xl">

        <!-- Card 1: Project Information & Contact Details -->
        <div class="bg-white border border-zinc-200 rounded-xl shadow-2xs overflow-hidden">
            <div class="p-5 border-b border-zinc-200 bg-zinc-50/50">
                <div class="flex items-center gap-2">
                    <div class="w-7 h-7 rounded-lg bg-zinc-100 text-zinc-700 flex items-center justify-center">
                        <i class="ri-information-line text-sm"></i>
                    </div>
                    <div>
                        <h2 class="text-sm font-semibold text-zinc-900 font-heading">
                            Project & Contact Information
                        </h2>
                        <p class="text-[11px] text-zinc-500">
                            Organization name, office address, and primary contact methods.
                        </p>
                    </div>
                </div>
            </div>

            <div class="p-6 space-y-4">
                <!-- Project Name -->
                <div>
                    <label class="block text-xs font-semibold text-zinc-800 mb-1">
                        Project / Organization Name <span class="text-rose-500">*</span>
                    </label>
                    <input type="text" 
                           wire:model="project_name" 
                           placeholder="Project Name" 
                           class="h-9 w-full rounded-md border {{ $errors->has('project_name') ? 'border-rose-400 focus:border-rose-500' : 'border-zinc-300 focus:border-zinc-900' }} bg-white px-3 text-xs text-zinc-900 shadow-2xs focus:outline-none focus:ring-1 focus:ring-zinc-900 transition-colors" />
                    @error('project_name')
                        <p class="text-[11px] text-rose-500 font-medium mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Office Address -->
                <div>
                    <label class="block text-xs font-semibold text-zinc-800 mb-1">
                        Office / Foundation Address
                    </label>
                    <textarea wire:model="address" 
                              rows="2" 
                              placeholder="Address details" 
                              class="w-full rounded-md border border-zinc-300 bg-white p-2.5 text-xs text-zinc-900 shadow-2xs focus:border-zinc-900 focus:outline-none focus:ring-1 focus:ring-zinc-900 transition-colors resize-none"></textarea>
                    @error('address')
                        <p class="text-[11px] text-rose-500 font-medium mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Phone, WhatsApp, and Email Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-zinc-800 mb-1">
                            Phone Number
                        </label>
                        <div class="relative">
                            <i class="ri-phone-line absolute left-3 top-1/2 -translate-y-1/2 text-zinc-400 text-xs pointer-events-none"></i>
                            <input type="tel" 
                                   wire:model="phone" 
                                   placeholder="Phone number" 
                                   class="h-9 w-full rounded-md border border-zinc-300 bg-white pl-8 pr-3 text-xs text-zinc-900 shadow-2xs focus:border-zinc-900 focus:outline-none focus:ring-1 focus:ring-zinc-900 transition-colors" />
                        </div>
                        @error('phone')
                            <p class="text-[11px] text-rose-500 font-medium mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-zinc-800 mb-1">
                            WhatsApp Number
                        </label>
                        <div class="relative">
                            <i class="ri-whatsapp-line absolute left-3 top-1/2 -translate-y-1/2 text-emerald-600 text-xs pointer-events-none"></i>
                            <input type="tel" 
                                   wire:model="whatsapp" 
                                   placeholder="WhatsApp number" 
                                   class="h-9 w-full rounded-md border border-zinc-300 bg-white pl-8 pr-3 text-xs text-zinc-900 shadow-2xs focus:border-zinc-900 focus:outline-none focus:ring-1 focus:ring-zinc-900 transition-colors" />
                        </div>
                        @error('whatsapp')
                            <p class="text-[11px] text-rose-500 font-medium mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-zinc-800 mb-1">
                            Contact Email Address
                        </label>
                        <div class="relative">
                            <i class="ri-mail-line absolute left-3 top-1/2 -translate-y-1/2 text-zinc-400 text-xs pointer-events-none"></i>
                            <input type="email" 
                                   wire:model="email" 
                                   placeholder="Email address" 
                                   class="h-9 w-full rounded-md border {{ $errors->has('email') ? 'border-rose-400' : 'border-zinc-300' }} bg-white pl-8 pr-3 text-xs text-zinc-900 shadow-2xs focus:border-zinc-900 focus:outline-none focus:ring-1 focus:ring-zinc-900 transition-colors" />
                        </div>
                        @error('email')
                            <p class="text-[11px] text-rose-500 font-medium mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2: Social Media Handles -->
        <div class="bg-white border border-zinc-200 rounded-xl shadow-2xs overflow-hidden">
            <div class="p-5 border-b border-zinc-200 bg-zinc-50/50">
                <div class="flex items-center gap-2">
                    <div class="w-7 h-7 rounded-lg bg-zinc-100 text-zinc-700 flex items-center justify-center">
                        <i class="ri-share-forward-line text-sm"></i>
                    </div>
                    <div>
                        <h2 class="text-sm font-semibold text-zinc-900 font-heading">
                            Social Media Profiles
                        </h2>
                        <p class="text-[11px] text-zinc-500">
                            Public links displayed in the website header and footer.
                        </p>
                    </div>
                </div>
            </div>

            <div class="p-6 space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <!-- Facebook -->
                    <div>
                        <label class="block text-xs font-semibold text-zinc-800 mb-1">
                            Facebook
                        </label>
                        <div class="relative">
                            <i class="ri-facebook-circle-fill absolute left-3 top-1/2 -translate-y-1/2 text-blue-600 text-sm pointer-events-none"></i>
                            <input type="text" 
                                   wire:model="facebook" 
                                   placeholder="https://facebook.com/..." 
                                   class="h-9 w-full rounded-md border border-zinc-300 bg-white pl-8 pr-3 text-xs text-zinc-900 shadow-2xs focus:border-zinc-900 focus:outline-none focus:ring-1 focus:ring-zinc-900 transition-colors" />
                        </div>
                        @error('facebook')
                            <p class="text-[11px] text-rose-500 font-medium mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Instagram -->
                    <div>
                        <label class="block text-xs font-semibold text-zinc-800 mb-1">
                            Instagram
                        </label>
                        <div class="relative">
                            <i class="ri-instagram-fill absolute left-3 top-1/2 -translate-y-1/2 text-pink-600 text-sm pointer-events-none"></i>
                            <input type="text" 
                                   wire:model="instagram" 
                                   placeholder="https://instagram.com/..." 
                                   class="h-9 w-full rounded-md border border-zinc-300 bg-white pl-8 pr-3 text-xs text-zinc-900 shadow-2xs focus:border-zinc-900 focus:outline-none focus:ring-1 focus:ring-zinc-900 transition-colors" />
                        </div>
                        @error('instagram')
                            <p class="text-[11px] text-rose-500 font-medium mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- LinkedIn -->
                    <div>
                        <label class="block text-xs font-semibold text-zinc-800 mb-1">
                            LinkedIn
                        </label>
                        <div class="relative">
                            <i class="ri-linkedin-box-fill absolute left-3 top-1/2 -translate-y-1/2 text-blue-700 text-sm pointer-events-none"></i>
                            <input type="text" 
                                   wire:model="linkedin" 
                                   placeholder="https://linkedin.com/in/..." 
                                   class="h-9 w-full rounded-md border border-zinc-300 bg-white pl-8 pr-3 text-xs text-zinc-900 shadow-2xs focus:border-zinc-900 focus:outline-none focus:ring-1 focus:ring-zinc-900 transition-colors" />
                        </div>
                        @error('linkedin')
                            <p class="text-[11px] text-rose-500 font-medium mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3: Brand Assets (Logo & Favicon) -->
        <div class="bg-white border border-zinc-200 rounded-xl shadow-2xs overflow-hidden">
            <div class="p-5 border-b border-zinc-200 bg-zinc-50/50">
                <div class="flex items-center gap-2">
                    <div class="w-7 h-7 rounded-lg bg-zinc-100 text-zinc-700 flex items-center justify-center">
                        <i class="ri-image-line text-sm"></i>
                    </div>
                    <div>
                        <h2 class="text-sm font-semibold text-zinc-900 font-heading">
                            Branding Assets
                        </h2>
                        <p class="text-[11px] text-zinc-500">
                            Upload site logo and favicon (stored via Laravel Storage public disk).
                        </p>
                    </div>
                </div>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    
                    <!-- Site Logo -->
                    <div class="space-y-3">
                        <label class="block text-xs font-semibold text-zinc-800">
                            Website Logo
                        </label>

                        <!-- Preview Area -->
                        <div class="p-4 rounded-lg border border-dashed border-zinc-200 bg-zinc-50 flex items-center justify-center min-h-[110px]">
                            @if($logo)
                                <div class="text-center space-y-1.5">
                                    <img src="{{ $logo->temporaryUrl() }}" alt="New Logo Preview" class="h-12 w-auto mx-auto object-contain" />
                                    <span class="text-[10px] font-medium text-emerald-600 block">Ready to upload</span>
                                </div>
                            @elseif($current_logo)
                                @php
                                    $logoUrl = str_starts_with($current_logo, 'http')
                                        ? $current_logo
                                        : (str_starts_with($current_logo, 'images/') || $current_logo === 'logo.webp'
                                            ? asset($current_logo)
                                            : asset('storage/'.$current_logo));
                                @endphp
                                <div class="text-center space-y-1.5">
                                    <img src="{{ $logoUrl }}" alt="Current Logo" class="h-12 w-auto mx-auto object-contain" />
                                    <span class="text-[10px] text-zinc-400 block font-mono">Current logo</span>
                                </div>
                            @else
                                <span class="text-xs text-zinc-400">No logo uploaded</span>
                            @endif
                        </div>

                        <!-- Upload Input -->
                        <div>
                            <input type="file" 
                                   wire:model="logo" 
                                   accept="image/*" 
                                   id="logo-input" 
                                   class="block w-full text-xs text-zinc-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-zinc-100 file:text-zinc-700 hover:file:bg-zinc-200 file:cursor-pointer cursor-pointer" />
                            @error('logo')
                                <p class="text-[11px] text-rose-500 font-medium mt-1">{{ $message }}</p>
                            @enderror
                            <div wire:loading wire:target="logo" class="text-[11px] text-amber-600 font-medium mt-1 flex items-center gap-1">
                                <i class="ri-loader-4-line animate-spin"></i>
                                <span>Uploading image preview...</span>
                            </div>
                        </div>
                    </div>

                    <!-- Favicon -->
                    <div class="space-y-3">
                        <label class="block text-xs font-semibold text-zinc-800">
                            Browser Favicon
                        </label>

                        <!-- Preview Area -->
                        <div class="p-4 rounded-lg border border-dashed border-zinc-200 bg-zinc-50 flex items-center justify-center min-h-[110px]">
                            @if($favicon)
                                <div class="text-center space-y-1.5">
                                    <img src="{{ $favicon->temporaryUrl() }}" alt="New Favicon Preview" class="w-8 h-8 mx-auto object-contain rounded" />
                                    <span class="text-[10px] font-medium text-emerald-600 block">Ready to upload</span>
                                </div>
                            @elseif($current_favicon)
                                @php
                                    $faviconUrl = str_starts_with($current_favicon, 'http')
                                        ? $current_favicon
                                        : (str_starts_with($current_favicon, 'images/') || $current_favicon === 'logo.webp'
                                            ? asset($current_favicon)
                                            : asset('storage/'.$current_favicon));
                                @endphp
                                <div class="text-center space-y-1.5">
                                    <img src="{{ $faviconUrl }}" alt="Current Favicon" class="w-8 h-8 mx-auto object-contain rounded" />
                                    <span class="text-[10px] text-zinc-400 block font-mono">Current favicon</span>
                                </div>
                            @else
                                <span class="text-xs text-zinc-400">No favicon uploaded</span>
                            @endif
                        </div>

                        <!-- Upload Input -->
                        <div>
                            <input type="file" 
                                   wire:model="favicon" 
                                   accept="image/*" 
                                   id="favicon-input" 
                                   class="block w-full text-xs text-zinc-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-zinc-100 file:text-zinc-700 hover:file:bg-zinc-200 file:cursor-pointer cursor-pointer" />
                            @error('favicon')
                                <p class="text-[11px] text-rose-500 font-medium mt-1">{{ $message }}</p>
                            @enderror
                            <div wire:loading wire:target="favicon" class="text-[11px] text-amber-600 font-medium mt-1 flex items-center gap-1">
                                <i class="ri-loader-4-line animate-spin"></i>
                                <span>Uploading favicon preview...</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Bottom Save Button Bar -->
        <div class="flex items-center justify-end gap-3 pt-2">
            <button type="submit" 
                    wire:loading.attr="disabled"
                    class="inline-flex items-center justify-center gap-1.5 h-10 px-6 rounded-md text-xs font-semibold text-white bg-zinc-900 shadow-2xs hover:bg-zinc-800 transition-colors cursor-pointer disabled:opacity-60">
                <span wire:loading.remove wire:target="save" class="inline-flex items-center gap-1.5">
                    <i class="ri-save-line text-sm"></i>
                    <span>Save Settings</span>
                </span>
                <span wire:loading wire:target="save" class="inline-flex items-center gap-1.5">
                    <i class="ri-loader-4-line animate-spin text-sm"></i>
                    <span>Saving...</span>
                </span>
            </button>
        </div>

    </form>

</div>

