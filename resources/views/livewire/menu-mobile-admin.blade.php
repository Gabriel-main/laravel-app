<div>
    <div class="flex lg:hidden">
        <button type="button" wire:click="openMenu"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-slate-700 hover:text-indigo-600 transition">
            <span class="sr-only">Abrir menú</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    @if ($isOpen)
        <dialog id="menu-mobile-admin" open
            class="m-0 h-full max-h-none w-full max-w-none bg-transparent p-0 backdrop:bg-slate-900/40 {{ $isClosing ? 'closing' : '' }}">

            <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 10)" x-show="show && !$wire.isClosing"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="transform -translate-y-full opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="transform translate-y-0 opacity-100"
                x-transition:leave-end="transform -translate-y-full opacity-0"
                class="fixed inset-y-auto top-0 left-0 z-100 w-full overflow-y-auto bg-white p-8 sm:max-w-sm shadow-2xl rounded-b-4xl">

                <div class="flex items-center justify-between">
                    <a class="-m-1.5 p-1.5 flex items-center gap-3">
                        <x-application-logo />
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
                        <div class="pt-2 pb-3 space-y-1">
                            <x-responsive-nav-link :href="route('inicio')" :active="request()->routeIs('inicio')" wire:navigate
                                wire:click="closeMenu">
                                {{ __('Inicio') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link :href="route('gastos')" :active="request()->routeIs('gastos')" wire:navigate
                                wire:click="closeMenu">
                                {{ __('Mis gastos') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link :href="route('presupuestos')" :active="request()->routeIs('presupuestos')" wire:navigate
                                wire:click="closeMenu">
                                {{ __('Mis presupuestos') }}
                            </x-responsive-nav-link>
                        </div>
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                                x-on:profile-updated.window="name = $event.detail.name"></div>
                            <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <x-responsive-nav-link :href="route('profile')" wire:navigate>
                                {{ __('Perfil') }}
                            </x-responsive-nav-link>

                            <!-- Authentication -->
                            <button wire:click="logout" class="w-full text-start">
                                <x-responsive-nav-link>
                                    {{ __('Cerrar sesion') }}
                                </x-responsive-nav-link>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </dialog>
    @endif
</div>

<script>
    document.addEventListener('livewire:initialized', () => {
        // Escuchamos el evento que viene desde closeMenu()
        Livewire.on('close-mobile-menu', () => {
            setTimeout(() => {
                // Una vez terminada la animación, le pedimos al servidor que oculte el componente
                Livewire.dispatch('finish-closing-menu');
            }, 100); // Asegúrate de que tu CSS tenga transition: 100ms
        });
    });
</script>
