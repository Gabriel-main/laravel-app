<div>
    <button wire:click="abrir" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
        </svg>
    </button>

    <div x-data="{ show: @entangle('showModal') }" 
         x-show="show" 
         class="fixed inset-0 z-[100] flex items-center justify-center px-10 py-14 bg-slate-900/60 backdrop-blur-sm"
         x-cloak>
        
        <div x-show="show" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="absolute inset-0 bg-slate-900/40" 
             wire:click="cerrar"></div>

        <div x-show="show"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-90 translate-y-4"
             x-transition:enter-end="opacity-100 transform scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 transform scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 transform scale-90 translate-y-4"
             class="bg-white w-full max-w-md rounded-2xl shadow-2xl overflow-hidden relative z-10 shadow-blue-900/20">

            <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                <h3 class="text-lg font-bold text-gray-800">Detalles del Gasto</h3>
                <button wire:click="cerrar" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="p-6 space-y-4">
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 font-medium">Monto:</span>
                    <span class="text-xl font-black text-red-600">-$45.00</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 font-medium">Categoría:</span>
                    <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-lg text-[10px] font-black uppercase tracking-widest">Servicios</span>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed bg-gray-50 p-4 rounded-xl italic">
                    "Pago de suscripción mensual de servicios en la nube."
                </p>
            </div>

            <div class="px-6 py-4 bg-gray-50/50 text-right border-t border-gray-100">
                <button wire:click="cerrar"
                    class="w-full sm:w-auto px-6 py-2.5 bg-gray-900 text-white rounded-xl text-sm font-bold hover:bg-gray-800 transition-all active:scale-95 shadow-lg shadow-gray-200">
                    Cerrar Detalles
                </button>
            </div>
        </div>
    </div>
</div>