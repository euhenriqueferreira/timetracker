@props([
    'name',
    'value' => null,
    'placeholder' => null,
    'label' => null,
    'password' => null,
    'formInput' => null,
    'transparent' => null,
    'disabled' => null,
])

<div @class([
        'flex flex-col items-start' => $label
    ])>

    @if($label)
    <label class="text-lg text-neutral-200 font-normal" for="{{ $name }}">{{ $label }}</label>
    @endif

    <input  type="{{ $password ? 'password' : 'text' }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}"
            @class([
                "bg-transparent w-full text-xl font-normal text-neutral-200 focus:outline-none placeholder:text-neutral-200/50" => $transparent,
                "w-28 bg-transparent text-2xl text-center font-normal text-neutral-200/50 tracking-widest pointer-events-none" => $disabled,
                'w-full bg-transparent text-base font-normal text-neutral-200 placeholder:text-neutral-200/50 border-b-2 border-neutral-200/50 p-2 focus:outline-none' => $formInput
            ])>
</div>
