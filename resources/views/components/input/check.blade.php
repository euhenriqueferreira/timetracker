@props([
    'name',
    'svgs' => [],
    'active' => null,
])

<div>
    <label for="{{ $name }}" @class([
                            "bg-neutral-800 border border-neutral-800 rounded-lg h-8 flex items-center gap-[5px] px-2.5 hover:border-neutral-200 hover:cursor-pointer transition",
                            "bg-neutral-200" => $active
                        ])>
        @foreach ($svgs as $svg)
            <x-svg model="{{ $svg }}" w="5" h="5" color="{{ $active ? 'text-neutral-800' : 'text-neutral-200' }}"/>
        @endforeach
        {{-- <x-svg.calendar w="5" h="5" />
        <x-svg.arrow-up w="5" h="5" /> --}}
    </label>
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" class="hidden" {{ $attributes }}>
</div>