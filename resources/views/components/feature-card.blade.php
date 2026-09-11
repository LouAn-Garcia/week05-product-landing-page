@props(['icon', 'title', 'description'])

@php($tone = ['peach' => 'bg-peach', 'rose' => 'bg-rose', 'sky' => 'bg-sky', 'amber' => 'bg-amber', 'moss' => 'bg-moss/20', 'violet' => 'bg-violet'][$icon['tone'] ?? 'peach'])
<article class="group rounded-3xl border border-ink/8 bg-white p-6 shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-lift">
    <div class="grid size-12 place-items-center rounded-2xl {{ $tone }} text-xl text-ink">{{ $icon['symbol'] }}</div>
    <h3 class="mt-5 font-display text-xl font-bold">{{ $title }}</h3>
    <p class="mt-2 text-sm leading-6 text-ink/65">{{ $description }}</p>
</article>
