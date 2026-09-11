@props(['name', 'price', 'description', 'features', 'featured' => false])

<article @class(['relative rounded-3xl border p-7', 'border-ink bg-ink text-cream shadow-lift' => $featured, 'border-ink/10 bg-white text-ink shadow-card' => ! $featured])>
    @if ($featured)<span class="absolute -top-3 left-6 rounded-full bg-coral px-3 py-1 text-xs font-bold text-white">Most loved</span>@endif
    <p @class(['text-sm font-bold uppercase tracking-[0.18em]', 'text-peach' => $featured, 'text-coral' => ! $featured])>{{ $name }}</p>
    <p class="mt-4 font-display text-4xl font-bold">₱{{ number_format((float) $price, 0) }}<span class="font-sans text-sm font-medium opacity-60"> / visit</span></p>
    <p @class(['mt-3 min-h-12 text-sm leading-6', 'text-cream/65' => $featured, 'text-ink/60' => ! $featured])>{{ $description }}</p>
    <ul class="mt-6 space-y-3 text-sm">
        @foreach ($features as $feature)<li class="flex gap-3"><span class="text-coral">✦</span><span>{{ $feature }}</span></li>@endforeach
    </ul>
    <x-button href="{{ route('reservations.create') }}" :variant="$featured ? 'coral' : 'secondary'" class="mt-7 w-full">Choose this pass</x-button>
</article>
