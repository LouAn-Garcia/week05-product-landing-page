@props(['compact' => false, 'light' => false])

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-3']) }} aria-label="Neko Wave Cafe">
    <span class="neon-logo" aria-hidden="true">
        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 28V10l12 10a17 17 0 0 1 8 0l12-10v18c3 15-8 25-16 25S13 43 16 28Z" />
            <path d="M23 34c2-3 5-3 7 0M34 34c2-3 5-3 7 0M32 37l-3 3 3 3 3-3-3-3ZM16 38l10 2M48 38l-10 2M17 10H8a7 7 0 0 0-7 7v38a7 7 0 0 0 7 7h12M47 10h9a7 7 0 0 1 7 7v38a7 7 0 0 1-7 7H44" class="neon-logo__cat" />
        </svg>
    </span>
    @unless ($compact)
        <span class="leading-none"><span @class(['block font-display text-lg font-bold tracking-tight', 'text-cream' => $light, 'text-ink' => ! $light])>Neko Wave</span><span class="mt-1 block text-[10px] font-bold uppercase tracking-[0.2em] text-coral">Cafe · Los Baños</span></span>
    @endunless
</span>
