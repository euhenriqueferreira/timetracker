@props([
    'name',
    'value' => null,
    'placeholder' => null,
    'label' => null,
    'type' => null,
    'search' => null,
    'transparent' => null,
    'disabled' => null,
])


@if($search)
    <div class="w-[240px] bg-neutral-800 border border-neutral-800 rounded-lg flex items-center justify-between gap-2.5 px-2.5 py-[5px] hover:border-neutral-200 focus:border-neutral-200 transition">
        <input type="text" name="{{ $name }}" class="flex-1 bg-transparent focus:outline-none text-base text-neutral-200">
        <div class="bg-transparent">
            <x-svg model="search" w="5" h="5" />          
        </div>
    </div>
@else
    <div @class(['flex flex-col items-start' => $label])>

        @if($label)
            <label class="text-lg text-neutral-200 font-normal" for="{{ $name }}">{{ $label }}</label>
        @endif

        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}" {{ $attributes }} 
            @class([
                'bg-transparent w-full text-xl font-normal text-neutral-200 focus:outline-none placeholder:text-neutral-200/50' => $transparent,
                'w-28 bg-transparent text-2xl text-center font-normal text-neutral-200/50 tracking-widest pointer-events-none' => $disabled,
                'w-full bg-transparent text-base font-normal text-neutral-200 placeholder:text-neutral-200/50 border-b-2 border-neutral-200/50 p-2 focus:outline-none' => $type == 'text' || $type == 'password',
                'w-full h-[40px] bg-neutral-800 rounded-lg text-base px-2.5 py-[5px] text-neutral-200 mt-2' => $type == 'datetime-local',
                'w-full bg-neutral-800 p-1.5 h-10 rounded-lg mt-2' => $type == 'color',
            ])/>
        @error("$name")
            <span class="text-red-400 text-sm font-normal">{{ $message }}</span>
        @enderror
    </div>
@endif
