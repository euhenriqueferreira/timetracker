@props([
    'href' => null,
    'outline' => null,
    'nav' => null,
    'withIcon' => null,
    'onlyIcon' => null,
    'delete' => null,
    'logo' => null,
    'isActiveInRoute' => null,
])

@php
    $matchCurrentRoute = request()->routeIs($isActiveInRoute);
@endphp

<a {{ $attributes }} href="{{ $href }}"
    @class([
        'flex items-center gap-[10px] text-base transition' => ! $logo,
        'border-2 border-neutral-200/50 px-2 h-10 font-normal text-neutral-200/50 rounded-lg hover:border-neutral-200' => $outline,
        'block bg-neutral-600 h-9 rounded-md text-neutral-200 text-ellipsis justify-between px-2.5 hover:bg-neutral-500' => $nav,
        'font-bold' => $matchCurrentRoute,
        'bg-neutral-800 border-2 border-neutral-800 flex items-center gap-[10px] px-2 h-10 text-base font-normal text-neutral-200 rounded-lg hover:bg-[#333] hover:border-[#333]' => $withIcon,
        'p-[5px] border border-white/10 rounded-md hover:border-white/40 justify-center' => $onlyIcon,
        'text-red-400' => $delete,
    ])>
    {{ $slot }}
</a>
