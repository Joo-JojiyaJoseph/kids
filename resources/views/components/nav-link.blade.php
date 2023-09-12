@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-medium block bg-gray-200 rounded-lg px-4 py-3'
            : 'font-medium block px-4 py-3';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
