@props([
    'action' => null,
    'post' => null,
    'put' => null,
    'delete' => null,
])

@php
    $method = $post || $put || $delete ? 'POST' : 'GET';
@endphp

<form action="{{ $action }}" method="{{ $method }}" {{ $attributes }}>
    @if($method !== 'GET')
        @csrf
    @endif

    @if($put)
        @method('put')
        @endif
        
    @if($delete)
        @method('delete')
    @endif
    
    {{ $slot }}
</form>