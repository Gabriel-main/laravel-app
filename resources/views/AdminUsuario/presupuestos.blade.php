<x-app-layout>
    <section class="pt-8 pb-12 px-4 sm:px-8 bg-slate-50 min-h-screen">
        <div class="max-w-5xl mx-auto">

            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">Mis Presupuestos</h1>
                    <p class="text-sm text-slate-500 font-medium mt-1">Control de gastos para Abril 2026</p>
                </div>

                <button class="w-full sm:w-auto px-5 py-2.5 bg-indigo-600 text-white rounded-xl text-sm font-bold hover:bg-indigo-700 transition-all active:scale-95 shadow-sm shadow-indigo-200 flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    Nuevo Presupuesto
                </button>
            </div>

            <div class="bg-slate-900 rounded-3xl p-6 sm:p-8 text-white shadow-xl shadow-slate-200 mb-8 relative overflow-hidden">
                <div class="relative z-10 flex flex-col md:flex-row justify-between md:items-end gap-6">
                    <div>
                        <p class="text-slate-400 text-sm font-medium mb-1">Presupuesto Global Usado</p>
                        <div class="flex items-baseline gap-2">
                            <h2 class="text-4xl sm:text-5xl font-black tracking-tight">$850.00</h2>
                            <span class="text-lg text-slate-500 font-bold">/ $1,200.00</span>
                        </div>
                    </div>
                    <div class="text-left md:text-right">
                        <p class="text-emerald-400 font-bold text-lg mb-1">Quedan $350.00</p>
                        <p class="text-slate-400 text-xs">70% consumido este mes</p>
                    </div>
                </div>

                <div class="relative z-10 mt-6 h-3 w-full bg-slate-800 rounded-full overflow-hidden">
                    <div class="h-full bg-indigo-500 rounded-full" style="width: 70%"></div>
                </div>

                <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-indigo-500/10 rounded-full blur-3xl"></div>
            </div>

            <h3 class="text-lg font-bold text-slate-800 mb-4">Desglose por Categoría</h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">

                <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Comida</h4>
                                <p class="text-xs text-slate-400 font-medium">12 transacciones</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-2 flex justify-between text-sm font-bold">
                        <span class="text-slate-800">$250.00</span>
                        <span class="text-slate-400">de $400.00</span>
                    </div>
                    <div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-orange-500 rounded-full" style="width: 62.5%"></div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Servicios</h4>
                                <p class="text-xs text-slate-400 font-medium">4 transacciones</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-2 flex justify-between text-sm font-bold">
                        <span class="text-slate-800">$180.00</span>
                        <span class="text-slate-400">de $200.00</span>
                    </div>
                    <div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-amber-500 rounded-full" style="width: 90%"></div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-5 border border-red-200 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden">
                    <div class="absolute top-0 right-0 mt-3 mr-3 w-2 h-2 rounded-full bg-red-500 animate-pulse"></div>
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-rose-100 text-rose-600 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Ocio</h4>
                                <p class="text-xs text-slate-400 font-medium">8 transacciones</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-2 flex justify-between text-sm font-bold">
                        <span class="text-red-600">$150.00</span>
                        <span class="text-slate-400">de $100.00</span>
                    </div>
                    <div class="h-2 w-full bg-red-100 rounded-full overflow-hidden">
                        <div class="h-full bg-red-500 rounded-full" style="width: 100%"></div>
                    </div>
                    <p class="text-xs text-red-500 font-bold mt-2">¡Te pasaste por $50.00!</p>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
