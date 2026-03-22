<header class="absolute inset-x-0 top-0 z-50">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5 flex items-center gap-3">
                <div class="w-9 h-9 bg-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-200">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <span class="text-xl font-bold tracking-tight text-slate-900">SalesAdmin</span>
            </a>
        </div>

        <div class="flex lg:hidden">
            <button type="button" onclick="document.getElementById('mobile-menu').showModal()" 
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-slate-700 hover:text-indigo-600 transition">
                <span class="sr-only">Abrir menú</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <div class="hidden lg:flex lg:gap-x-10">
            <a href="#features" class="text-sm font-semibold text-slate-600 hover:text-indigo-600 transition-colors">Producto</a>
            <a href="#features" class="text-sm font-semibold text-slate-600 hover:text-indigo-600 transition-colors">Características</a>
            <a href="#marketplace" class="text-sm font-semibold text-slate-600 hover:text-indigo-600 transition-colors">Marketplace</a>
            <a href="#company" class="text-sm font-semibold text-slate-600 hover:text-indigo-600 transition-colors">Empresa</a>
        </div>

        <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:items-center lg:gap-x-8">
            <a href="#" class="text-sm font-semibold text-slate-900 hover:text-indigo-600 transition-colors">Log in</a>
            <a href="#" class="rounded-xl bg-slate-900 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-slate-800 transition transform hover:-translate-y-0.5">
                Empezar Gratis
            </a>
        </div>
    </nav>

    <dialog id="mobile-menu" class="m-0 h-full max-h-none w-full max-w-none bg-transparent p-0 backdrop:bg-slate-900/40">
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5 flex items-center gap-3">
                    <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <span class="text-lg font-bold text-slate-900">SalesAdmin</span>
                </a>
                <button type="button" onclick="this.closest('dialog').close()" class="-m-2.5 rounded-md p-2.5 text-slate-700">
                    <span class="sr-only">Cerrar menú</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-8 flow-root">
                <div class="-my-6 divide-y divide-slate-100">
                    <div class="space-y-3 py-6">
                        <a href="#" class="-mx-3 block rounded-xl px-4 py-3 text-base font-semibold text-slate-900 hover:bg-slate-50 transition">Producto</a>
                        <a href="#" class="-mx-3 block rounded-xl px-4 py-3 text-base font-semibold text-slate-900 hover:bg-slate-50 transition">Características</a>
                        <a href="#" class="-mx-3 block rounded-xl px-4 py-3 text-base font-semibold text-slate-900 hover:bg-slate-50 transition">Marketplace</a>
                        <a href="#" class="-mx-3 block rounded-xl px-4 py-3 text-base font-semibold text-slate-900 hover:bg-slate-50 transition">Empresa</a>
                    </div>
                    <div class="py-6 space-y-4">
                        <a href="#" class="block text-center font-semibold text-slate-900">Log in</a>
                        <a href="#" class="block text-center rounded-xl bg-indigo-600 px-4 py-4 text-base font-bold text-white shadow-lg">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
    </dialog>
</header>