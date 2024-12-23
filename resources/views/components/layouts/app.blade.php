<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ config('app.name') }}</title>
</head>
<body class="bg-neutral-900 min-h-screen flex">
    <x-sidebar 
    title="{{ config('app.name') }}"
    :navs="[
        [__('Dashboard'), 'svg_name' => 'list', 'route' => 'dashboard'], 
        [__('History'), 'svg_name' => 'clock', 'route' => 'history'], 
        [auth()->user()->name, 'svg_name' => 'user', 'route' => 'profile'],
    ]" />

    <div class="p-8 h-screen flex-1">
        {{ $slot }}
    </div>

  
</body>
</html>