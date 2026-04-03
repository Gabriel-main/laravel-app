<header class="fixed inset-x-0 top-0 w-full bg-white border-b border-gray-100 transition-all duration-500 ${isScrolled ? 'bg-white shadow-md' : 'bg-transparent'} z-50 shadow-2xs">
    <nav class="mx-auto flex max-w-7xl items-center  justify-between px-9 py-6 md:px-5 md:py-5 lg:px-8" aria-label="Global">

        <div class="flex lg:flex-1">
            <a href="{{ route('ventor.pagina-index') }}" class="-m-1.5 p-1.5 flex items-center gap-3">
                <x-application-logo/>
                <span class="text-xl font-bold tracking-tight text-slate-900">Ventor</span>
            </a>
        </div>

        <livewire:menu-mobile />
        

        <div class="hidden lg:flex lg:gap-x-10">
            <a href="{{ route('ventor.pagina-descripcion') }}"
                class="text-sm font-semibold text-slate-600 hover:text-indigo-600 transition-colors">Que es</a>
            <a href="{{ route('ventor.pagina-destalles') }}"
                class="text-sm font-semibold text-slate-600 hover:text-indigo-600 transition-colors">Características</a>
        </div>

        <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:items-center lg:gap-x-8">
            <a href="{{ route('login') }}"
                class="text-sm font-semibold text-slate-900 hover:text-indigo-600 transition-colors">Inicia sesion</a>
            <a href="{{ route('register') }}"
                class="rounded-xl bg-slate-900 px-8 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-slate-800 transition transform hover:-translate-y-0.5">
                Registrarse
            </a>
        </div>

    </nav>

    
</header>
