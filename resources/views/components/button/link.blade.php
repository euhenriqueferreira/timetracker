@props([
    'href' => null,
    'nav_link' => null, // Tipo de botão da navegação na sidebar
    'active_route' => null, // Deixa como 'active' o botão correspondente a rota, se for um nav_link
    'secondary' => null,// Define se o botão deve ter opacidade
])
<a href="{{ $href }}" @class([
                        "block bg-neutral-600 h-9 rounded-md text-base text-neutral-200 text-ellipsis {{ request()->routeIs('$active_route') ? 'font-bold' : 'font-normal'}} flex items-center justify-between px-2.5 hover:bg-neutral-500 transition" => $nav_link,
                        "border-2 border-neutral-200/50 flex items-center gap-[10px] px-2 h-10 text-base font-normal text-neutral-200/50 rounded-lg hover:border-neutral-200 transition" => $secondary,
                    ])>
    {{ $slot }}
</a>