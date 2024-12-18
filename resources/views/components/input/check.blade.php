@props([
    'name',
    'svgs' => []
])

<div>
    <label for="{{ $name }}" class="bg-neutral-800 border border-neutral-800 rounded-lg h-8 flex items-center gap-[5px] px-2.5 hover:border-neutral-200 hover:cursor-pointer transition">
        @foreach ($svgs as $svg)
            <x-svg model="{{ $svg }}" w="5" h="5" />
        @endforeach
        {{-- <x-svg.calendar w="5" h="5" />
        <x-svg.arrow-up w="5" h="5" /> --}}
    </label>
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" class="hidden">
</div>