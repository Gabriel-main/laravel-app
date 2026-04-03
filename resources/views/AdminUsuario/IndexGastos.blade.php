<x-app-layout>
    <section class="pt-12 pb-12 px-8 lg:px-8 bg-slate-50 min-h-screen">
    <div class="max-w-5xl mx-auto">
        
        <div class="bg-indigo-600 rounded-3xl p-6 sm:p-0 text-white shadow-xl shadow-indigo-100 mb-8 relative overflow-hidden">
            <div class="relative z-10">
                <p class="text-indigo-100 text-sm font-medium mb-1">Balance Total</p>
                <h2 class="text-4xl sm:text-5xl font-black tracking-tight mb-6">$12,450.80</h2>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20">
                        <p class="text-xs text-indigo-100 mb-1 flex items-center gap-1">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"/></svg>
                            Ingresos
                        </p>
                        <span class="text-lg font-bold">+$3,200</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20">
                        <p class="text-xs text-indigo-100 mb-1 flex items-center gap-1">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"/></svg>
                            Gastos
                        </p>
                        <span class="text-lg font-bold">-$1,150</span>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
        </div>

        <div class="flex gap-4 mb-8">
            <button class="flex-1 bg-white border border-slate-200 p-4 rounded-2xl flex flex-col items-center gap-2 hover:bg-slate-50 transition shadow-sm active:scale-95">
                <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </div>
                <span class="text-xs font-bold text-slate-700">Gasto</span>
            </button>
            <button class="flex-1 bg-white border border-slate-200 p-4 rounded-2xl flex flex-col items-center gap-2 hover:bg-slate-50 transition shadow-sm active:scale-95">
                <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <span class="text-xs font-bold text-slate-700">Reporte</span>
            </button>
            <button class="flex-1 bg-white border border-slate-200 p-4 rounded-2xl flex flex-col items-center gap-2 hover:bg-slate-50 transition shadow-sm active:scale-95">
                <div class="w-10 h-10 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <span class="text-xs font-bold text-slate-700">Presupuesto</span>
            </button>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                <h3 class="font-bold text-slate-900">Movimientos Recientes</h3>
                <a href="#" class="text-xs font-bold text-indigo-600">Ver todo</a>
            </div>
            
            <div class="divide-y divide-slate-50">
                <div class="p-4 sm:p-6 flex items-center justify-between hover:bg-slate-50 transition">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-sm sm:text-base">Supermercado Central</p>
                            <p class="text-xs text-slate-400 font-medium">Hoy, 2:30 PM • Comida</p>
                        </div>
                    </div>
                    <span class="font-bold text-slate-900">-$85.20</span>
                </div>

                <div class="p-4 sm:p-6 flex items-center justify-between hover:bg-slate-50 transition">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-sm sm:text-base">Pago de Nómina</p>
                            <p class="text-xs text-slate-400 font-medium">Ayer • Trabajo</p>
                        </div>
                    </div>
                    <span class="font-bold text-emerald-600">+$1,500.00</span>
                </div>
            </div>
        </div>
    </div>
</section>
</x-app-layout>
