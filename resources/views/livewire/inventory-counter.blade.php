<div class="justify-center p-6 bg-white border-b border-gray-200">
    <h3 class="flex text-lg font-medium text-gray-900 mb-4">Gestor de Stock</h3>
    
    <div class="items-center space-x-4">
        {{-- Llamamos al método decrement al hacer click --}}
        <x-secondary-button wire:click="decrement">
            -
        </x-secondary-button>

        <span class="text-2xl font-bold w-12 text-center">{{ $stock }}</span>

        {{-- Llamamos al método increment al hacer click --}}
        <x-primary-button wire:click="increment">
            +
        </x-primary-button>
    </div>

    <p class="mt-4 text-sm text-gray-600">
        El stock actual es: <strong>{{ $stock }}</strong> unidades.
    </p>
</div>