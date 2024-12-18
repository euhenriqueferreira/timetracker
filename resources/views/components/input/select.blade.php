@props([
    'name'=> null,
    'label'=> null,
])

<div {{ $attributes }}>
    
    <label class="text-lg text-neutral-200 font-normal" for="{{ $name }}">{{ $label }}</label>

    <div class="relative w-full {{ $label ? 'mt-2' : ''}}">
        <select name="{{ $name }}" id="{{ $name }}" class="w-full bg-neutral-800 rounded-lg text-base pl-2.5 pr-8 py-[5px] text-neutral-200 appearance-none">
            {{ $slot }}
        </select>
        <span class="absolute right-2 top-2/4 -translate-y-1/2 pointer-events-none">
            <x-svg model="chevron-down" w="5" h="5" />
        </span>
    </div>

</div>