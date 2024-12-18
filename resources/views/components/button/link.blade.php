@props([
    'href' => null,
    'nav_link' => null,
    'active_route' => null
])

<a href="{{ $href }}" @class([
                        "block bg-neutral-600 h-9 rounded-md text-base text-neutral-200 text-ellipsis {{ request()->routeIs('$active_route') ? 'font-bold' : 'font-normal' }} flex items-center justify-between px-2.5 hover:bg-neutral-500 transition" => $nav_link,
                    ])>
    {{ $slot }}
</a>