@props([
    'name'
])

<div class="w-[240px] bg-neutral-800 rounded-lg flex items-center justify-between gap-2.5 px-2.5 py-[5px]">
    <input type="text" name="{{ $name }}" class="flex-1 bg-transparent focus:outline-none text-base text-neutral-200">
    <div class="bg-transparent">
        <x-svg model="search" w="5" h="5" />          
    </div>
</div>