<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/animaciones.css'])
</head>

<body class="bg-slate-50 text-slate-900 font-sans">
    
    <x-web.navbar/>

    <main class="animate-view" wire:key="{{ Request::url() }}">
        {{ $slot }} 
    </main>

    <x-web.footer/>
    
</body>
</html>