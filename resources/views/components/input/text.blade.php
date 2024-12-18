@props([
    'name',
    'value' => null,
    'placeholder' => null,
    'transparent' => null,
    'disabled' => null
])

<input type="text" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}" 
        @class([
            "bg-transparent w-full text-xl font-normal text-neutral-200 focus:outline-none placeholder:text-neutral-200/50" => $transparent,
            "w-28 bg-transparent text-2xl text-center font-normal text-neutral-200/50 tracking-widest pointer-events-none" => $disabled,
        ])>
