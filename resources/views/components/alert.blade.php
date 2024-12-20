@props([
    'value',
    'svg',
    'success' => null,
    'info' => null,
    'alert' => null,
    'danger' => null,
])

@php
    if($success){$svgColor = 'green';}
    if($info){$svgColor = 'blue';}
    if($alert){$svgColor = 'amber';}
    if($danger){$svgColor = 'red';}
@endphp

<div @class([
        "w-full px-5 py-3  rounded-md border  font-semibold flex items-center justify-start gap-4 my-3",
        'bg-green-600/20 border-green-500 text-green-400' => $success,
        'bg-blue-600/20 border-blue-500 text-blue-400' => $info,
        'bg-amber-600/20 border-amber-500 text-amber-400' => $alert,
        'bg-red-600/20 border-red-500 text-red-400' => $danger
    ])>
    <div>
        <x-svg :model="$svg" w="7" h="7" color="text-{{ $svgColor }}-400" />
    </div>
    {{ $value }}
</div>
