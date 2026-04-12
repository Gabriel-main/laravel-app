<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} ">

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

<body class="font-sans text-slate-900 antialiased bg-slate-50">
    <div class="min-h-screen flex flex-col justify-center items-center px-4 sm:px-6 pt-10 sm:pt-0">

        <div>
            <a href="/" class="flex items-center justify-center gap-3 transition-transform hover:scale-105 group">

                <x-application-logo class="w-43 h-43 fill-current text-indigo-600 drop-shadow-sm" />

                <h1
                    class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900 group-hover:text-indigo-600 transition-colors">
                    Ventor
                </h1>

            </a>
        </div>


        <div
            class="w-full sm:max-w-md mt-8 px-8 py-10 bg-white shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden sm:rounded-3xl relative z-10 animate-view">
            {{ $slot }}
        </div>

    </div>
</body>

</html>
