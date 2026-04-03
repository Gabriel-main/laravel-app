<div>
    <div class="flex lg:hidden">
            <button type="button" wire:click="openMenu"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-slate-700 hover:text-indigo-600 transition">
                <span class="sr-only">Abrir menú</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    @if($isOpen)
        <dialog id="menu-mobile" open
            class="m-0 h-full max-h-none w-full max-w-none bg-transparent p-0 backdrop:bg-slate-900/40 {{ $isClosing ? 'closing' : '' }}">
            
            <div class="fixed inset-y-auto top-0 left-0 z-100 w-full overflow-y-auto bg-white p-8 sm:max-w-sm shadow-2xl rounded-b-4xl">
                
                <div class="flex items-center justify-between">
                    <a href="{{ route('ventor.pagina-index') }}" class="-m-1.5 p-1.5 flex items-center gap-3">
                        <x-application-logo/>
                        <span class="text-xl font-bold tracking-tight text-slate-900">Ventor</span>
                    </a>
                    
                    <button type="button" wire:click="closeMenu" class="-m-2.5 rounded-md p-2.5 text-slate-700">
                        <span class="sr-only">Cerrar menú</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="mt-8 flow-root">
                    <div class="-my-6 divide-y divide-slate-100">
                        <div class="space-y-3 py-6 text-center">
                            <a href="{{ route('ventor.pagina-index') }}" wire:navigate wire:click="closeMenu"
                                class="-mx-3 block rounded-xl px-4 py-3 text-base font-semibold text-slate-900 hover:bg-slate-50 transition">
                                Inicio
                            </a>
                            <a href="{{ route('ventor.pagina-descripcion') }}" wire:navigate wire:click="closeMenu"
                                class="-mx-3 block rounded-xl px-4 py-3 text-base font-semibold text-slate-900 hover:bg-slate-50 transition">
                                Que es
                            </a>
                            <a href="{{ route('ventor.pagina-destalles') }}" wire:navigate wire:click="closeMenu"
                                class="-mx-3 block rounded-xl px-4 py-3 text-base font-semibold text-slate-900 hover:bg-slate-50 transition">
                                Características
                            </a>
                        </div>
                        <div class="py-6 px-6 space-y-4">
                            <a href="{{ route('login') }}" class="block text-center rounded-xl bg-slate-900 px-4 py-4 text-base font-semibold text-olive-50 shadow-lg">Inicia sesion</a>
                            <a href="{{ route('register') }}" class="block text-center rounded-xl bg-indigo-600 px-4 py-4 text-base font-bold text-white shadow-lg">Registrarse</a>
                        </div>
                    </div>
                </div>

            </div>
        </dialog>
    @endif
</div>

<script>
    document.addEventListener('livewire:initialized', () => {
        Livewire.on('close-mobile-menu', () => {
            setTimeout(() => {
                Livewire.dispatch('finish-closing-menu');
            }, 300); // 300ms coincide con la duración de tu animación en CSS
        });
    });
</script>