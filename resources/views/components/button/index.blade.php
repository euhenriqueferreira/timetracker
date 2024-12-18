@props([
    'primary' => null
])


<button {{ $attributes }} @class([
    "bg-neutral-800 border-2 border-neutral-800 flex items-center gap-[10px] px-2 h-10 text-base font-normal text-neutral-200 rounded-lg hover:bg-[#333] hover:border-[#333] transition" => $primary
    ])>
    
    {{ $slot }}
</button>