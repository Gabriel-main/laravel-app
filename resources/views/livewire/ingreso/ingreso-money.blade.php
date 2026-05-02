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

        <span class="text-xs font-bold text-slate-700 pointer-events-none">Ingreso</span>

    </div>



    <div x-data="{ show: @entangle('showModal') }" x-show="show"
        class="fixed inset-0 z-100 flex items-center justify-center px-4 sm:px-0 py-10 sm:py-0 bg-slate-900/60 backdrop-blur-sm cursor-default"
        x-cloak>



        <div x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="absolute inset-0 bg-slate-900/40" @click="show = false; $wire.cerrar()"></div>



        <div x-show="show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90 translate-y-4"
            x-transition:enter-end="opacity-100 transform scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 transform scale-90 translate-y-4"
            class="bg-white w-full max-w-sm sm:max-w-2xl md:max-w-3xl lg:max-w-4xl rounded-2xl shadow-2xl overflow-hidden relative z-10 mx-4 sm:mx-0" @click.stop role="dialog" aria-label="Registrar Nuevo Gasto">



            <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">

                <h3 class="text-lg font-bold text-gray-800">Registrar Nuevo Ingreso</h3>

                <button type="button" @click="show = false; $wire.cerrar()"
                    class="text-gray-400 hover:text-red-500 transition-colors">

                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />

                    </svg>

                </button>

            </div>



            <form wire:submit.prevent="guardar">

                <div class="p-6 space-y-5">



                    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">

                        <div class="sm:col-span-2">

                            <label for="fecha" class="block text-sm font-bold text-gray-700 mb-1">Fecha</label>

                            <input type="date" id="fecha" wire:model="fecha" required
                                class="block w-full rounded-xl border-gray-300 bg-gray-50 border focus:bg-white focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2.5 transition-colors">

                            @error('fecha')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="sm:col-span-1">

                            <label for="moneda" class="block text-sm font-bold text-gray-700 mb-1">Moneda</label>

                            <select id="moneda" wire:model="moneda" required
                                class="block w-full rounded-xl border-gray-300 bg-gray-50 border focus:bg-white focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2.5 transition-colors">

                                <option value="USD">USD</option>

                                <option value="VES">VES</option>

                                <option value="EUR">EUR</option>

                            </select>

                            @error('moneda')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="sm:col-span-1">

                            <label for="monto" class="block text-sm font-bold text-gray-700 mb-1">Monto</label>

                            <input type="number" id="monto" wire:model="monto" step="0.01" required
                                class="block w-full rounded-xl border-gray-300 bg-gray-50 border focus:bg-white focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2.5 px-3 transition-colors"
                                placeholder="0.00">

                            @error('monto')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror

                        </div>

                    </div>



                    <div>

                        <label for="descripcion" class="block text-sm font-bold text-gray-700 mb-1">Descripción</label>

                        <input type="text" id="descripcion" wire:model="descripcion" required
                            class="block w-full rounded-xl border-gray-300 bg-gray-50 border focus:bg-white focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2.5 transition-colors"
                            placeholder="Ej. Compra de supermercado">

                        @error('descripcion')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror

                    </div>



                    <div class="bg-slate-50 border border-slate-200 p-4 rounded-2xl">

                        <div class="flex items-center justify-between mb-3">

                            <label class="block text-sm font-bold text-slate-800">Categoría</label>



                            <div class="flex bg-slate-200/70 p-1 rounded-lg" x-data>

                                <button type="button" @click="$wire.set('creandoNuevaCategoria', false)"
                                    class="px-3 py-1 text-xs font-bold rounded-md transition-all {{ !$creandoNuevaCategoria ? 'bg-white text-emerald-700 shadow-sm' : 'text-slate-500 hover:text-slate-700' }}">

                                    Elegir

                                </button>

                                <button type="button" @click="$wire.set('creandoNuevaCategoria', true)"
                                    class="px-3 py-1 text-xs font-bold rounded-md transition-all {{ $creandoNuevaCategoria ? 'bg-emerald-500 text-white shadow-sm' : 'text-slate-500 hover:text-slate-700' }}">

                                    + Crear Nueva

                                </button>

                            </div>

                        </div>



                        <div class="relative min-h-[45px]" x-data="{ creando: @entangle('creandoNuevaCategoria') }">



                            <div x-show="!creando" x-transition:enter="transition ease-out duration-300 delay-100"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-200 absolute w-full top-0"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">



                                <select id="categoria" wire:model="categoria_id"
                                    class="block w-full rounded-xl border-slate-300 bg-white border focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2.5 shadow-sm">

                                    <option value="">Selecciona una categoría...</option>

                                    @foreach ($categorias as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->nombre ?? $cat->name }}</option>
                                    @endforeach

                                </select>

                            </div>



                            <div x-show="creando" x-transition:enter="transition ease-out duration-300 delay-100"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-200 absolute w-full top-0"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                class="flex items-end gap-2">
                                <div class="relative flex-1">
                                    <x-ui-label value="Nombre de la nueva categoría" />

                                    <x-ui-input wire:model="categoriaForm.name" placeholder="Ej. Trabajo, Bonos..."
                                        :error="$errors->has('categoriaForm.name')" />

                                </div>

                                <button type="button" wire:click="guardarCategoria"
                                    class="h-[46px] px-6 bg-emerald-100 text-emerald-700 font-bold rounded-2xl active:scale-95 transition-all hover:bg-emerald-200 flex items-center justify-center {{ $errors->has('categoriaForm.name') ? 'mb-5' : '' }}">
                                    Crear
                                </button>
                            </div>

                        </div>

                    </div>



                </div>



                <div class="px-6 py-4 bg-gray-50 text-right border-t border-gray-100 flex justify-end gap-3">

                    <button type="button" @click="show = false; $wire.cerrar()"
                        class="px-5 py-2.5 bg-white border border-gray-300 text-gray-700 rounded-xl text-sm font-bold hover:bg-gray-50 transition-all active:scale-95">

                        Cancelar

                    </button>

                    <button type="submit" wire:loading.attr="disabled"
                        class="px-5 py-2.5 bg-emerald-600 text-white rounded-xl text-sm font-bold hover:bg-emerald-700 transition-all active:scale-95 shadow-sm shadow-emerald-200 flex items-center gap-2">

                        <span wire:loading.remove>Guardar</span>

                        <span wire:loading>Procesando...</span>

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>
