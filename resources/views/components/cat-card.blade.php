@props(['cat'])

@php($tones = [
    'rose' => ['bg' => 'from-rose-100 to-cream', 'text' => 'text-rose-500'],
    'amber' => ['bg' => 'from-amber-100 to-cream', 'text' => 'text-amber-500'],
    'sky' => ['bg' => 'from-sky-100 to-cream', 'text' => 'text-sky-500'],
    'violet' => ['bg' => 'from-violet-100 to-cream', 'text' => 'text-violet-500'],
])
@php($tone = $tones[$cat->accent_color] ?? $tones['rose'])
<article class="overflow-hidden rounded-3xl border border-ink/8 bg-white shadow-card transition hover:-translate-y-1 hover:shadow-lift">
    <div class="grid min-h-44 place-items-center bg-gradient-to-br {{ $tone['bg'] }} p-5"><div class="cat-mark {{ $tone['text'] }}">⌁</div></div>
    <div class="p-6"><div class="flex items-start justify-between gap-4"><div><h3 class="font-display text-2xl font-bold">{{ $cat->name }}</h3><p class="mt-1 text-xs font-bold uppercase tracking-wider text-coral">Neko Wave resident</p></div><span class="text-lg text-ink/35">✦</span></div><p class="mt-4 text-sm leading-6 text-ink/65">{{ $cat->bio }}</p><dl class="mt-5 grid grid-cols-2 gap-3 border-t border-ink/8 pt-4 text-xs"><div><dt class="font-bold uppercase tracking-wider text-ink/40">Vibe</dt><dd class="mt-1 font-semibold">{{ $cat->personality }}</dd></div><div><dt class="font-bold uppercase tracking-wider text-ink/40">Cafe note</dt><dd class="mt-1 font-semibold">{{ $cat->favorite_treat }}</dd></div></dl></div>
</article>
