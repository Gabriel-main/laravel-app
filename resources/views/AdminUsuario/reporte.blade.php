<x-app-layout>
    <section class="pt-8 pb-12 px-4 sm:px-8 bg-slate-50 min-h-screen">
        <div class="max-w-6xl mx-auto">

            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">Análisis de Gastos</h1>
                    <p class="text-sm text-slate-500 font-medium mt-1">Descubre en qué se va tu dinero</p>
                </div>

                <div class="w-full sm:w-auto">
                    <select class="block w-full sm:w-48 rounded-xl border-gray-300 bg-white border focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2.5 font-bold text-slate-700 shadow-sm cursor-pointer transition-all">
                        <option value="este_mes">Este Mes (Abril)</option>
                        <option value="mes_pasado">Mes Pasado (Marzo)</option>
                        <option value="este_anio">Este Año (2026)</option>
                        <option value="historico">Histórico Total</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">

                <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm relative overflow-hidden group hover:shadow-md transition-all">
                    <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-red-500/5 rounded-full blur-2xl group-hover:bg-red-500/10 transition-colors"></div>
                    <p class="text-sm font-bold text-slate-500 mb-1">Gasto Total</p>
                    <h3 class="text-3xl font-black text-slate-900">$850.00</h3>
                    <div class="mt-3 flex items-center gap-1 text-xs font-bold text-red-500 bg-red-50 w-max px-2 py-1 rounded-md">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        <span>+12% vs mes pasado</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm relative overflow-hidden group hover:shadow-md transition-all">
                    <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-indigo-500/5 rounded-full blur-2xl group-hover:bg-indigo-500/10 transition-colors"></div>
                    <p class="text-sm font-bold text-slate-500 mb-1">Promedio Diario</p>
                    <h3 class="text-3xl font-black text-slate-900">$28.33</h3>
                    <div class="mt-3 flex items-center gap-1 text-xs font-bold text-emerald-500 bg-emerald-50 w-max px-2 py-1 rounded-md">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"></path></svg>
                        <span>Estable</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm relative overflow-hidden group hover:shadow-md transition-all">
                    <p class="text-sm font-bold text-slate-500 mb-1">Gasto Principal</p>
                    <h3 class="text-2xl font-black text-slate-900 truncate">Comida</h3>
                    <div class="mt-3 text-xs font-bold text-slate-500">
                        Representa el <span class="text-orange-500">35%</span> de tus gastos
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm relative overflow-hidden group hover:shadow-md transition-all">
                    <p class="text-sm font-bold text-slate-500 mb-1">Transacciones</p>
                    <h3 class="text-3xl font-black text-slate-900">42</h3>
                    <div class="mt-3 text-xs font-bold text-slate-500">
                        <span class="text-indigo-600">6</span> registradas esta semana
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">

                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm lg:col-span-2">
                    <div class="flex justify-between items-center mb-8">
                        <h3 class="text-lg font-bold text-slate-800">Evolución de Gastos (Últimos 7 días)</h3>
                        <div class="p-2 bg-slate-50 rounded-lg text-slate-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        </div>
                    </div>

                    <div class="h-64 flex items-end justify-between gap-2 sm:gap-4 border-b border-slate-100 pb-2 relative">
                        <div class="absolute inset-0 flex flex-col justify-between pb-8 pointer-events-none">
                            <div class="w-full border-t border-dashed border-slate-200"></div>
                            <div class="w-full border-t border-dashed border-slate-200"></div>
                            <div class="w-full border-t border-dashed border-slate-200"></div>
                            <div class="w-full border-t border-dashed border-slate-200"></div>
                        </div>

                        <div class="relative w-full flex flex-col justify-end items-center group cursor-pointer z-10" style="height: 30%">
                            <div class="absolute -top-10 bg-slate-800 text-white text-xs font-bold px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">$45.00</div>
                            <div class="w-full max-w-[3rem] bg-indigo-100 group-hover:bg-indigo-200 rounded-t-lg h-full transition-colors"></div>
                            <span class="text-xs font-bold text-slate-400 mt-3">Lun</span>
                        </div>
                        <div class="relative w-full flex flex-col justify-end items-center group cursor-pointer z-10" style="height: 85%">
                            <div class="absolute -top-10 bg-slate-800 text-white text-xs font-bold px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">$120.00</div>
                            <div class="w-full max-w-[3rem] bg-indigo-500 rounded-t-lg h-full shadow-[0_0_15px_rgba(99,102,241,0.4)]"></div>
                            <span class="text-xs font-bold text-slate-800 mt-3">Mar</span>
                        </div>
                        <div class="relative w-full flex flex-col justify-end items-center group cursor-pointer z-10" style="height: 45%">
                            <div class="absolute -top-10 bg-slate-800 text-white text-xs font-bold px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">$65.00</div>
                            <div class="w-full max-w-[3rem] bg-indigo-100 group-hover:bg-indigo-200 rounded-t-lg h-full transition-colors"></div>
                            <span class="text-xs font-bold text-slate-400 mt-3">Mié</span>
                        </div>
                        <div class="relative w-full flex flex-col justify-end items-center group cursor-pointer z-10" style="height: 20%">
                            <div class="absolute -top-10 bg-slate-800 text-white text-xs font-bold px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">$25.00</div>
                            <div class="w-full max-w-[3rem] bg-indigo-100 group-hover:bg-indigo-200 rounded-t-lg h-full transition-colors"></div>
                            <span class="text-xs font-bold text-slate-400 mt-3">Jue</span>
                        </div>
                        <div class="relative w-full flex flex-col justify-end items-center group cursor-pointer z-10" style="height: 60%">
                            <div class="absolute -top-10 bg-slate-800 text-white text-xs font-bold px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">$90.00</div>
                            <div class="w-full max-w-[3rem] bg-indigo-100 group-hover:bg-indigo-200 rounded-t-lg h-full transition-colors"></div>
                            <span class="text-xs font-bold text-slate-400 mt-3">Vie</span>
                        </div>
                        <div class="relative w-full flex flex-col justify-end items-center group cursor-pointer z-10" style="height: 10%">
                            <div class="absolute -top-10 bg-slate-800 text-white text-xs font-bold px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">$15.00</div>
                            <div class="w-full max-w-[3rem] bg-indigo-100 group-hover:bg-indigo-200 rounded-t-lg h-full transition-colors"></div>
                            <span class="text-xs font-bold text-slate-400 mt-3">Sáb</span>
                        </div>
                        <div class="relative w-full flex flex-col justify-end items-center group cursor-pointer z-10" style="height: 0%">
                            <div class="w-full max-w-[3rem] bg-slate-100 rounded-t-lg h-1"></div>
                            <span class="text-xs font-bold text-slate-400 mt-3">Hoy</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
                    <h3 class="text-lg font-bold text-slate-800 mb-6">Distribución</h3>

                    <div class="space-y-6">
                        <div>
                            <div class="flex justify-between items-end mb-2">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-orange-500"></div>
                                    <span class="text-sm font-bold text-slate-700">Comida</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-sm font-bold text-slate-900">$297.50</span>
                                    <span class="text-xs text-slate-400 ml-1">(35%)</span>
                                </div>
                            </div>
                            <div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
                                <div class="h-full bg-orange-500 rounded-full" style="width: 35%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-end mb-2">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-blue-500"></div>
                                    <span class="text-sm font-bold text-slate-700">Servicios</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-sm font-bold text-slate-900">$212.50</span>
                                    <span class="text-xs text-slate-400 ml-1">(25%)</span>
                                </div>
                            </div>
                            <div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
                                <div class="h-full bg-blue-500 rounded-full" style="width: 25%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-end mb-2">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                                    <span class="text-sm font-bold text-slate-700">Transporte</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-sm font-bold text-slate-900">$170.00</span>
                                    <span class="text-xs text-slate-400 ml-1">(20%)</span>
                                </div>
                            </div>
                            <div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
                                <div class="h-full bg-emerald-500 rounded-full" style="width: 20%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-end mb-2">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-slate-400"></div>
                                    <span class="text-sm font-bold text-slate-700">Otros</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-sm font-bold text-slate-900">$170.00</span>
                                    <span class="text-xs text-slate-400 ml-1">(20%)</span>
                                </div>
                            </div>
                            <div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
                                <div class="h-full bg-slate-400 rounded-full" style="width: 20%"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
