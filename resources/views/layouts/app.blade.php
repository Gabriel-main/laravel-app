<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/animaciones.css'])


</head>

<body class="font-sans antialiased flex flex-col min-h-screen">

    <livewire:layout.navigation />
    <main class="animate-view flex-1" wire:key="{{ Request::url() }}">
        {{ $slot }}
    </main>




</body>

<div x-data="{
    show: false,
    message: '',
    type: 'success',
    colors: {
        success: 'bg-emerald-500/20 text-emerald-400 border-emerald-500/50',
        error: 'bg-red-500/20 text-red-400 border-red-500/50',
        info: 'bg-blue-500/20 text-blue-400 border-blue-500/50'
    },
    showNotice(data) {
        const payload = Array.isArray(data) ? data[0] : data;

        if (typeof payload === 'string') {
            this.message = payload;
            this.type = 'success';
        } else if (payload && typeof payload === 'object') {
            this.message = payload.message || 'Proceso finalizado';
            this.type = payload.type || 'success';
        }

        this.show = true;

        // Lógica de auto-ocultado: 3 segundos es el estándar de oro para mensajes cortos
        setTimeout(() => {
            this.show = false;
        }, 3000);
    }
}" x-on:notify.window="showNotice($event.detail)" x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:enter-end="opacity-100 transform translate-y-0 sm:scale-100"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed z-[200] w-full p-4 bottom-0 left-0 flex justify-center sm:bottom-5 sm:right-5 sm:left-auto sm:w-auto sm:block"
    x-cloak>

    <div class="bg-gray-900/95 text-white rounded-2xl shadow-2xl p-4 flex items-center gap-3 border backdrop-blur-md transition-colors duration-500 max-w-sm w-full"
        :class="colors[type]">

        <div class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center bg-white/10">
            <template x-if="type === 'success'">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </template>
            <template x-if="type === 'error'">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </template>
        </div>

        <div class="flex-1">
            <p class="text-sm font-bold text-white leading-tight" x-text="message"></p>
        </div>

        <button @click="show = false" class="opacity-50 hover:opacity-100 transition-opacity p-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>

</html>
