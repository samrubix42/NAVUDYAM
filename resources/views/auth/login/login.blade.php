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

        <!-- Validation Errors Callout -->
        @if ($errors->any())
            <div class="mb-5 p-3 rounded-lg bg-red-50 border border-red-200/70 text-red-700 text-xs flex items-start gap-2">
                <svg class="w-4 h-4 text-red-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
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
                        <svg x-show="!show" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        <svg x-show="show" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/>
                        </svg>
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
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            <span>Back to main website</span>
        </a>
    </div>

</div>