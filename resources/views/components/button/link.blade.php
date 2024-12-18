@props([
    'href' => null,
    'outline' => null,
    'nav' => null,
    'withIcon' => null,
    'onlyIcon' => null,
])

<a href="{{ $href }}"
    @class([
        'flex items-center gap-[10px] text-base transition',
        'border-2 border-neutral-200/50 px-2 h-10 font-normal text-neutral-200/50 rounded-lg hover:border-neutral-200' => $outline,
        'block bg-neutral-600 h-9 rounded-md text-neutral-200 text-ellipsis justify-between px-2.5 hover:bg-neutral-500' => $nav,
        'font-normal text-neutral-200 px-2 h-10 text-ellipsis rounded-lg hover:border-neutral-200' => $withIcon,
        'p-[5px] border border-white/10 rounded-md hover:border-white/40' => $onlyIcon,
    ])>
    {{ $slot }}
</a>
