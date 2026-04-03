<div>
    <div wire:click="abrir"
        class="flex-1 bg-white border border-slate-200 p-4 rounded-2xl flex flex-col items-center gap-2 hover:bg-slate-50 transition shadow-sm active:scale-95 cursor-pointer">
        <div
            class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center pointer-events-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
        </div>
        <span class="text-xs font-bold text-slate-700 pointer-events-none">Gasto</span>
    </div>

    <div x-data="{ show: @entangle('showModal') }" x-show="show"
        class="fixed inset-0 z-[100] flex items-center justify-center px-4 sm:px-10 py-14 bg-slate-900/60 backdrop-blur-sm cursor-default"
        x-cloak>

        <div x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="absolute inset-0 bg-slate-900/40" wire:click="cerrar"></div>

        <div x-show="show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90 translate-y-4"
            x-transition:enter-end="opacity-100 transform scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 transform scale-90 translate-y-4"
            class="bg-white w-full max-w-md rounded-2xl shadow-2xl overflow-hidden relative z-10">

            <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                <h3 class="text-lg font-bold text-gray-800">Registrar Nuevo Gasto</h3>
                <button type="button" wire:click="cerrar" class="text-gray-400 hover:text-red-500 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <form wire:submit.prevent="guardar">
                <div class="grid grid-cols-3 gap-4 px-12 py-6">

                    <div class="col-span-1">
                        <label for="moneda" class="block text-sm font-bold text-gray-700 mb-1">Moneda</label>
                        <select id="moneda" wire:model="moneda" required
                            class="block w-full rounded-xl border-gray-300 bg-gray-50 border focus:bg-white focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2.5 transition-colors">
                            <option value="USD">USD ($)</option>
                            <option value="VES">Bs (VES)</option>
                            <option value="EUR">EUR (€)</option>
                        </select>
                        @error('moneda')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <label for="monto" class="block text-sm font-bold text-gray-700 mb-1">Monto</label>
                        <input type="number" id="monto" wire:model="monto" step="0.01" required
                            class="block w-full rounded-xl border-gray-300 bg-gray-50 border focus:bg-white focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2.5 px-4 transition-colors"
                            placeholder="0.00">
                        @error('monto')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <label for="descripcion" class="block text-sm font-bold text-gray-700 mb-1">Descripción</label>
                        <input type="text" id="descripcion" wire:model="descripcion" required
                            class="block w-full rounded-xl border-gray-300 bg-gray-50 border focus:bg-white focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2.5 transition-colors"
                            placeholder="Ej. Compra de supermercado">
                        @error('descripcion')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-3">
                        <div>
                            <label for="categoria" class="block text-sm font-bold text-gray-700 mb-1">Categoría</label>
                            <select id="categoria" wire:model="categoria" required
                                class="block w-full rounded-xl border-gray-300 bg-gray-50 border focus:bg-white focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2.5 transition-colors">
                                <option value="">Selecciona...</option>
                                <option value="comida">Comida</option>
                                <option value="servicios">Servicios</option>
                                <option value="transporte">Transporte</option>
                                <option value="entretenimiento">Entretenimiento</option>
                                <option value="otros">Otros</option>
                            </select>
                            @error('categoria')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-span-4">
                            <label for="fecha" class="block text-sm font-bold text-gray-700 mb-1">Fecha</label>
                            <input type="date" id="fecha" wire:model="fecha" required
                                class="block w-full rounded-xl border-gray-300 bg-gray-50 border focus:bg-white focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2.5 transition-colors">
                            @error('fecha')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="px-6 py-4 bg-gray-50 text-right border-t border-gray-100 flex justify-end gap-3">
                    <button type="button" wire:click="cerrar"
                        class="px-5 py-2.5 bg-white border border-gray-300 text-gray-700 rounded-xl text-sm font-bold hover:bg-gray-50 transition-all active:scale-95">
                        Cancelar
                    </button>
                    <button type="submit"
                        class="px-5 py-2.5 bg-emerald-600 text-white rounded-xl text-sm font-bold hover:bg-emerald-700 transition-all active:scale-95 shadow-sm shadow-emerald-200 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
