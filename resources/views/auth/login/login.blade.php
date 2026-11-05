<div class="w-full max-w-sm mx-auto px-4 sm:px-0">
    
    <!-- Auth Card (shadcn minimal style) -->
    <div class="bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-8 shadow-xs">
        
        <!-- Header -->
        <div class="text-center mb-6">
            <a href="{{ route('home') }}" class="inline-flex items-center justify-center">
                <img src="{{ asset('logo.webp') }}" alt="Navudyam Foundation" class="h-10 w-auto" />
            </a>
            <h1 class="text-xl font-bold text-slate-900 tracking-tight font-heading mt-4">
                Welcome back
            </h1>
            <p class="text-xs text-slate-500 mt-1">
                Enter your credentials to access the admin portal
            </p>
        </div>

        <!-- Pre-filled Credentials Info Box -->
        <div class="mb-5 p-3 rounded-xl bg-amber-50/70 border border-amber-200/60 text-xs text-slate-700 flex items-center justify-between">
            <div class="space-y-0.5">
                <div class="flex items-center gap-1.5">
                    <span class="inline-block w-2 h-2 rounded-full bg-emerald-500"></span>
                    <span class="font-bold text-navy-950 text-xs">Pre-filled Admin Login</span>
                </div>
                <p class="text-[11px] text-slate-500 font-mono">admin@navudyam.org &bull; password</p>
            </div>
            <button type="button" 
                    wire:click="$set('email', 'admin@navudyam.org'); $set('password', 'password')"
                    class="px-2.5 py-1 text-[11px] font-semibold rounded-md bg-white hover:bg-slate-50 text-slate-700 border border-slate-200 shadow-2xs transition-colors cursor-pointer">
                Re-fill
            </button>
        </div>

        <!-- Validation Errors Callout -->
        @if ($errors->any())
            <div class="mb-5 p-3 rounded-lg bg-red-50 border border-red-200/70 text-red-700 text-xs flex items-start gap-2">
                <i class="ri-error-warning-line text-red-500 text-sm shrink-0 mt-0.5"></i>
                <div class="space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Login Form -->
        <form wire:submit="login" class="space-y-4">
            
            <!-- Email Field -->
            <div>
                <label for="email" class="block text-xs font-medium text-slate-700 mb-1.5">
                    Email address
                </label>
                <input wire:model="email" 
                       type="email" 
                       id="email" 
                       required 
                       autofocus
                       placeholder="admin@navudyam.org" 
                       class="w-full px-3 py-2 text-sm bg-white border border-slate-200 rounded-lg text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-slate-900 focus:ring-1 focus:ring-slate-900 transition-all shadow-2xs @error('email') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror" />
            </div>

            <!-- Password Field -->
            <div x-data="{ show: false }">
                <div class="flex items-center justify-between mb-1.5">
                    <label for="password" class="block text-xs font-medium text-slate-700">
                        Password
                    </label>
                    <span class="text-[11px] text-slate-400">
                        Required
                    </span>
                </div>
                <div class="relative">
                    <input wire:model="password" 
                           :type="show ? 'text' : 'password'" 
                           id="password" 
                           required 
                           placeholder="••••••••" 
                           class="w-full px-3 py-2 pr-10 text-sm bg-white border border-slate-200 rounded-lg text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-slate-900 focus:ring-1 focus:ring-slate-900 transition-all shadow-2xs @error('password') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror" />
                    <button type="button" 
                            @click="show = !show" 
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none"
                            tabindex="-1">
                        <i x-show="!show" class="ri-eye-line text-sm"></i>
                        <i x-show="show" x-cloak class="ri-eye-off-line text-sm"></i>
                    </button>
                </div>
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <label class="flex items-center gap-2 cursor-pointer select-none">
                    <input wire:model="remember" 
                           type="checkbox" 
                           class="w-3.5 h-3.5 rounded border-slate-300 text-slate-900 focus:ring-slate-900 focus:ring-offset-0" />
                    <span class="text-xs text-slate-600">Remember this device</span>
                </label>
            </div>

            <!-- Submit Button (shadcn primary button) -->
            <div class="pt-2">
                <button type="submit" 
                        wire:loading.attr="disabled"
                        class="w-full h-10 px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white text-xs font-semibold rounded-lg shadow-xs transition-colors flex items-center justify-center gap-2 cursor-pointer disabled:opacity-70">
                    <svg wire:loading class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span wire:loading.remove>Sign in</span>
                    <span wire:loading>Authenticating...</span>
                </button>
            </div>

        </form>

    </div>

    <!-- Return to Website Link -->
    <div class="text-center mt-6">
        <a href="{{ route('home') }}" class="text-xs text-slate-500 hover:text-slate-900 inline-flex items-center gap-1.5 transition-colors">
            <i class="ri-arrow-left-line text-xs"></i>
            <span>Back to main website</span>
        </a>
    </div>

</div>