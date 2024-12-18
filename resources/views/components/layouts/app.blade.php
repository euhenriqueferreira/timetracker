<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ config('app.name') }}</title>
</head>
<body class="bg-neutral-900 min-h-screen flex">
    <x-sidebar 
    title="{{ config('app.name') }}"
    :navs="[
        [__('Dashboard'), 'svg_name' => 'list', 'route' => 'dashboard'], 
        [__('History'), 'svg_name' => 'clock', 'route' => 'history'], 
        [__('Profile'), 'svg_name' => 'user', 'route' => 'dashboard'],
    ]" />

    <div class="p-8 h-screen flex-1">
        <x-taskbar />
        {{ $slot }}
    </div>

  
</body>
</html>