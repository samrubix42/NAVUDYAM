<div x-data="{
        toasts: [],
        init() {
            @if(session()->has('success'))
                this.add({ message: @js(session('success')), type: 'success', title: 'Success' });
            @endif
            @if(session()->has('error'))
                this.add({ message: @js(session('error')), type: 'error', title: 'Error' });
            @endif
            @if(session()->has('status'))
                this.add({ message: @js(session('status')), type: 'info', title: 'Notice' });
            @endif
        },
        add(detail) {
            const data = Array.isArray(detail) ? (detail[0] || {}) : (detail?.[0] ? detail[0] : (detail || {}));
            const id = Date.now() + Math.random().toString(36).substring(2, 9);
            const message = typeof data === 'string' ? data : (data.message || '');
            const title = typeof data === 'object' ? (data.title || '') : '';
            const type = typeof data === 'object' ? (data.type || 'success') : 'success';
            const duration = (typeof data === 'object' && data.duration) ? data.duration : 4000;

            const toast = { id, message, title, type, visible: true };
            this.toasts.push(toast);

            setTimeout(() => {
                this.remove(id);
            }, duration);
        },
        remove(id) {
            const index = this.toasts.findIndex(t => t.id === id);
            if (index !== -1) {
                this.toasts[index].visible = false;
                setTimeout(() => {
                    this.toasts = this.toasts.filter(t => t.id !== id);
                }, 250);
            }
        }
     }"
     @toast.window="add($event.detail)"
     class="fixed bottom-5 right-5 z-[9999] flex flex-col gap-2.5 max-w-sm w-full pointer-events-none px-4 sm:px-0"
     aria-live="polite">

    <template x-for="toast in toasts" :key="toast.id">
        <div x-show="toast.visible"
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 translate-y-3 scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 translate-y-3 scale-95"
             class="pointer-events-auto w-full bg-white rounded-2xl shadow-xl border p-4 flex items-start gap-3 transition-all"
             :class="{
                 'border-emerald-200/90 shadow-emerald-500/5': toast.type === 'success',
                 'border-red-200/90 shadow-red-500/5': toast.type === 'error',
                 'border-amber-200/90 shadow-amber-500/5': toast.type === 'warning',
                 'border-blue-200/90 shadow-blue-500/5': toast.type === 'info'
             }">

            <!-- Type Icon -->
            <div class="shrink-0 mt-0.5">
                <template x-if="toast.type === 'success'">
                    <div class="w-7 h-7 rounded-full bg-emerald-100/80 text-emerald-600 flex items-center justify-center">
                        <i class="ri-checkbox-circle-fill text-lg"></i>
                    </div>
                </template>
                <template x-if="toast.type === 'error'">
                    <div class="w-7 h-7 rounded-full bg-red-100/80 text-red-600 flex items-center justify-center">
                        <i class="ri-error-warning-fill text-lg"></i>
                    </div>
                </template>
                <template x-if="toast.type === 'warning'">
                    <div class="w-7 h-7 rounded-full bg-amber-100/80 text-amber-600 flex items-center justify-center">
                        <i class="ri-alert-fill text-lg"></i>
                    </div>
                </template>
                <template x-if="toast.type === 'info' || !toast.type">
                    <div class="w-7 h-7 rounded-full bg-blue-100/80 text-blue-600 flex items-center justify-center">
                        <i class="ri-information-fill text-lg"></i>
                    </div>
                </template>
            </div>

            <!-- Toast Body -->
            <div class="flex-1 min-w-0 pr-1">
                <p x-show="toast.title" 
                   class="text-xs font-bold text-slate-900 tracking-tight font-heading mb-0.5" 
                   x-text="toast.title"></p>
                <p class="text-xs text-slate-600 leading-relaxed break-words" 
                   x-text="toast.message"></p>
            </div>

            <!-- Dismiss Button -->
            <button @click="remove(toast.id)" 
                    type="button" 
                    class="shrink-0 text-slate-400 hover:text-slate-600 p-1 rounded-lg hover:bg-slate-100 transition-colors cursor-pointer"
                    aria-label="Dismiss notification">
                <i class="ri-close-line text-base"></i>
            </button>
        </div>
    </template>

</div>

