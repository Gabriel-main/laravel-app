<x-app-layout>
    <section class="px-12 sm:px-34 py-6 bg-gray-50 min-h-full">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Historial de Gastos</h1>
                <p class="text-sm text-gray-500">Revisa y gestiona tus salidas de dinero</p>
            </div>

            <div class="mt-4 md:mt-0 flex space-x-3">
                <div class="mt-4 md:mt-0 relative">
                    <input type="text" placeholder="Buscar gasto..."
                        class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full md:w-80 shadow-sm">
                    <span class="absolute left-3 top-2.5 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                </div>
                <div
                    class="fixed bottom-8 right-8 bg-indigo-600 hover:bg-indigo-700 text-white w-14 h-14 rounded-full shadow-2xl flex items-center justify-center transition-all hover:scale-110 active:scale-95 z-50 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>

                    <span
                        class="absolute right-16 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">
                        Nuevo Gasto
                    </span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

            {{-- @foreach ($gastos as $gasto) --}}

            <div
                class="block sm:hidden border-b border-gray-50 last:border-0 p-4 group hover:bg-blue-50/30 transition-all duration-200">
                <div class="flex justify-between items-start">

                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center text-gray-500 group-hover:bg-white transition-colors shadow-sm shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-800 leading-tight mb-1">Suscripción Netflix</h4>
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-semibold text-gray-500">02 Abr</span>
                                <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                                <span
                                    class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] font-bold bg-purple-50 text-purple-600 border border-purple-100">
                                    Entretenimiento
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="text-right shrink-0 ml-2">
                        <span class="text-sm font-black text-red-500">-$15.99</span>
                    </div>
                </div>

                <div class="flex justify-end items-center mt-3 pt-3 border-t border-gray-50 border-dashed gap-2">
                    <livewire:gastos.detalle-gasto />
                    <button
                        class="p-1.5 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors flex items-center gap-1"
                        title="Eliminar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        <span class="text-xs font-bold sm:hidden">Borrar</span>
                    </button>
                </div>
            </div>

            <div class="hidden sm:block overflow-x-auto">
                <table class="w-full text-left border-separate border-spacing-0">
                    <thead>
                        <tr class="bg-gray-50/50">
                            <th
                                class="px-6 py-4 text-[11px] font-bold text-gray-500 uppercase tracking-widest border-b border-gray-100">
                                Fecha</th>
                            <th
                                class="px-6 py-4 text-[11px] font-bold text-gray-500 uppercase tracking-widest border-b border-gray-100">
                                Descripción</th>
                            <th
                                class="px-6 py-4 text-[11px] font-bold text-gray-500 uppercase tracking-widest border-b border-gray-100">
                                Categoría</th>
                            <th
                                class="px-6 py-4 text-[11px] font-bold text-gray-500 uppercase tracking-widest border-b border-gray-100">
                                Monto</th>
                            <th
                                class="px-6 py-4 text-[11px] font-bold text-gray-500 uppercase tracking-widest border-b border-gray-100 text-right">
                                Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr class="group hover:bg-blue-50/30 transition-all duration-200">
                            <td class="px-6 py-5">
                                <div class="flex flex-col">
                                    <span class="text-sm font-semibold text-gray-700">02 Abr</span>
                                    <span class="text-xs text-gray-400">2026</span>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <div class="flex items-center">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-gray-100 flex items-center justify-center mr-3 group-hover:bg-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                        </svg>
                                    </div>
                                    <span class="text-sm font-medium text-gray-800 tracking-tight">Suscripción
                                        Netflix</span>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-medium bg-purple-50 text-purple-600 border border-purple-100">
                                    <span class="w-1.5 h-1.5 rounded-full bg-purple-500 mr-2"></span>
                                    Entretenimiento
                                </span>
                            </td>
                            <td class="px-6 py-5">
                                <span class="text-sm font-bold text-red-500">-$15.99</span>
                            </td>
                            <td class="px-6 py-5 text-right">
                                <div class="flex justify-end items-center space-x-2">
                                    <livewire:gastos.detalle-gasto />
                                    <button
                                        class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors"
                                        title="Eliminar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- @endforeach --}}

        </div>

        <div class="px-6 py-5 bg-white border-t border-gray-100 flex items-center justify-between">
            <div class="flex flex-col sm:flex-row sm:items-center">
                <p class="text-sm text-gray-500 font-medium">
                    Mostrando <span class="text-gray-800">1</span> a <span class="text-gray-800">10</span> de <span
                        class="text-gray-800">45</span> gastos
                </p>
            </div>

            <div class="flex items-center space-x-2">
                <button
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 hover:text-indigo-600 hover:border-blue-200 transition-all duration-200 disabled:opacity-40 disabled:hover:bg-white disabled:hover:text-gray-500"
                    disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span class="hidden sm:inline">Anterior</span>
                </button>

                <div class="hidden md:flex space-x-1">
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-xl bg-indigo-600 text-white text-sm font-bold shadow-sm shadow-indigo-200">1</button>
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-xl bg-white text-gray-600 text-sm font-medium border border-transparent hover:border-gray-200 hover:bg-gray-50 transition-all">2</button>
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-xl bg-white text-gray-600 text-sm font-medium border border-transparent hover:border-gray-200 hover:bg-gray-50 transition-all">3</button>
                </div>

                <button
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 hover:text-indigo-600 hover:border-blue-200 transition-all duration-200 shadow-sm">
                    <span class="hidden sm:inline">Siguiente</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

    </section>
</x-app-layout>
