@props(['href' => null, 'variant' => 'primary', 'type' => 'button'])

@php
    $styles = [
        'primary' => 'bg-ink text-cream hover:-translate-y-0.5 hover:bg-ink/90',
        'secondary' => 'border border-ink/15 bg-white text-ink hover:-translate-y-0.5 hover:border-ink/35',
        'coral' => 'bg-coral text-white hover:-translate-y-0.5 hover:bg-coral/90',
    ][$variant];
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => "inline-flex items-center justify-center gap-2 rounded-xl px-5 py-3 text-sm font-bold transition duration-200 {$styles}"]) }}>{{ $slot }}</a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => "inline-flex items-center justify-center gap-2 rounded-xl px-5 py-3 text-sm font-bold transition duration-200 {$styles}"]) }}>{{ $slot }}</button>
@endif
