@props([
    'tagName' => 'GER',
    'tagColor' => '#a3a3a3',
])

<div class="w-[90px] h-7 flex items-center justify-center rounded-md px-2" style="background-color: {{ $tagColor }}">
    <span class="text-neutral-800 uppercase text-xs font-bold whitespace-nowrap text-ellipsis overflow-hidden" title="{{ $tagName }}">{{ $tagName }}</span>
</div>