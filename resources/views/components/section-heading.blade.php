@props(['eyebrow', 'title', 'copy' => null, 'align' => 'left'])

<div @class(['max-w-2xl', 'mx-auto text-center' => $align === 'center'])>
    <p class="eyebrow">{{ $eyebrow }}</p>
    <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-ink sm:text-4xl">{{ $title }}</h2>
    @if ($copy)<p class="mt-4 text-base leading-7 text-ink/65">{{ $copy }}</p>@endif
</div>
