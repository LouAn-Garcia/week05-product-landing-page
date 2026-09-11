@props(['name', 'role', 'initials', 'quote', 'tone' => 'peach'])

@php($avatarTone = ['peach' => 'bg-peach', 'rose' => 'bg-rose', 'sky' => 'bg-sky', 'amber' => 'bg-amber', 'moss' => 'bg-moss/20', 'violet' => 'bg-violet'][$tone])
<figure class="rounded-3xl border border-ink/8 bg-white p-6 shadow-card">
    <blockquote class="font-display text-xl font-bold leading-7 text-ink">“{{ $quote }}”</blockquote>
    <figcaption class="mt-6 flex items-center gap-3"><span class="grid size-11 place-items-center rounded-2xl {{ $avatarTone }} text-sm font-bold text-ink">{{ $initials }}</span><span><span class="block text-sm font-bold">{{ $name }}</span><span class="block text-xs text-ink/55">{{ $role }}</span></span></figcaption>
</figure>
