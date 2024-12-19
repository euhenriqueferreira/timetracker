@props([
    'value' => null,
])

<div class="flex items-center justify-between gap-[10px]">
    <p class="text-lg font-normal text-neutral-200/70">{{ $value }}</p>
    <div class="h-[1px] flex-1 bg-neutral-200/70 mt-1"></div>
</div>