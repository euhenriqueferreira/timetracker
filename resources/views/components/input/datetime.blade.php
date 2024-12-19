@props([
    'name' => null,
    'label' => null,
    'value' => null
])


<div>
    @if($label)
        <label class="text-lg text-neutral-200 font-normal" for="{{ $name }}">{{ $label }}</label>
    @endif
    <input type="datetime-local" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}" class="w-full h-[40px] bg-neutral-800 rounded-lg text-base px-2.5 py-[5px] text-neutral-200 mt-2">
    @error("$name")
        <span class="text-red-400 text-sm font-normal">{{ $message }}</span>
    @enderror
</div>