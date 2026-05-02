<div>
    <div class="flex lg:hidden">
        <button type="button" wire:click="openMenu"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-slate-700">
            <span class="sr-only">Abrir menú</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    @if ($isOpen)
        <div x-data="{ show: false }"
             x-init="setTimeout(() => show = true, 10)"
             @close-mobile-menu.window="show = false"
             x-show="show"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto bg-slate-900/40"
             wire:click.self="closeMenu">
            <div x-data="{ panel: false }"
                 x-init="setTimeout(() => panel = true, 50)"
                 @close-mobile-menu.window="panel = false"
                 x-show="panel"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="transform -translate-y-full opacity-0"
                 x-transition:enter-end="transform translate-y-0 opacity-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="transform translate-y-0 opacity-100"
                 x-transition:leave-end="transform -translate-y-full opacity-0"
                 class="relative z-50 w-full bg-white shadow-2xl rounded-b-3xl">

                <div class="flex items-center justify-between p-6 border-b border-gray-100">
                    <a href="{{ route('inicio') }}" wire:navigate wire:click="closeMenu" class="flex items-center gap-3 -m-1.5 p-1.5">
                        <x-application-logo class="w-8 h-8" />
                        <span class="text-xl font-bold tracking-tight text-slate-900">Ventor</span>
                    </a>

                    <button type="button" wire:click="closeMenu" class="-m-2.5 rounded-md p-2.5 text-slate-700">
                        <span class="sr-only">Cerrar menú</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="px-4 py-6 space-y-1">
                    <x-responsive-nav-link :href="route('inicio')" :active="request()->routeIs('inicio')" wire:navigate
                        wire:click="closeMenu">
                        {{ __('Inicio') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('gastos')" :active="request()->routeIs('gastos')" wire:navigate
                        wire:click="closeMenu">
                        {{ __('Mis gastos') }}
                    </x-responsive-nav-link>
                    <!--<x-responsive-nav-link :href="route('presupuestos')" :active="request()->routeIs('presupuestos')" wire:navigate
                        wire:click="closeMenu">
                        {{ __('Mis presupuestos') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('reportes')" :active="request()->routeIs('reportes')" wire:navigate
                        wire:click="closeMenu">
                        {{ __('Reportes') }}
                    </x-responsive-nav-link>-->

                    <div class="pt-4 mt-4 border-t border-gray-100">
                        <div class="px-4 py-2">
                            <div class="font-medium text-base text-gray-800">{{ auth()->user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
                        </div>
                        <!--<x-responsive-nav-link :href="route('profile')" wire:navigate wire:click="closeMenu">
                            {{ __('Perfil') }}
                        </x-responsive-nav-link>-->
                        <button wire:click="logout" class="w-full text-start">
                            <x-responsive-nav-link>
                                {{ __('Cerrar sesión') }}
                            </x-responsive-nav-link>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
