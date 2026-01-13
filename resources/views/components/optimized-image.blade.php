@props([
    'src',
    'alt' => '',
    'width' => null,
    'height' => null,
    'loading' => 'lazy',
    'class' => '',
    'eager' => false,
])

@php
    $loading = $eager ? 'eager' : 'lazy';
    $decoding = $eager ? 'sync' : 'async';
@endphp

<img 
    src="{{ $src }}" 
    alt="{{ $alt }}"
    @if($width) width="{{ $width }}" @endif
    @if($height) height="{{ $height }}" @endif
    loading="{{ $loading }}"
    decoding="{{ $decoding }}"
    class="{{ $class }}"
    {{ $attributes }}
>
