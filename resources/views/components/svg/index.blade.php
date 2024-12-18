@props([
    'model',
    'color' => 'text-neutral-200',
    'w' => '5',
    'h' => '5'
])

<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{ $color }} w-{{ $w }} h-{{ $h }}">
    @include('/components/svg/' . $model)
</svg>