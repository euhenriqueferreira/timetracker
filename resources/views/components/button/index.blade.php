@props([
    'withIcon' => null,
    'onlyIcon' => null,
    'delete' => null
])

<button {{ $attributes }} 
    @class([
        'transition',
        "bg-neutral-800 border-2 border-neutral-800 flex items-center gap-[10px] px-2 h-10 text-base font-normal text-neutral-200 rounded-lg hover:bg-[#333] hover:border-[#333]" => $withIcon,
        'p-[5px] bg-white/10 border border-white/10 rounded-md hover:border-white/40' => $onlyIcon,
        'text-red-400' => $delete,
    ])>

    {{ $slot }}
</button>