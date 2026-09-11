<x-layout title="Neko Wave Cafe | Coffee, cats, and calm">
    <x-hero />

    <section id="features" class="bg-white px-5 py-20 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <x-section-heading eyebrow="why visit" title="Everything you need for a gentle reset." copy="Thoughtful details make it easy to settle in, sip slowly, and enjoy the cats at their own pace." />
            <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <x-feature-card :icon="['symbol' => '◷', 'tone' => 'peach']" title="Easy reservations" description="Choose your time, your group size, and leave the rest to our welcoming hosts." />
                <x-feature-card :icon="['symbol' => '⌁', 'tone' => 'rose']" title="Cat-first care" description="Our resident cats set the pace, with calm zones and plenty of little retreats." />
                <x-feature-card :icon="['symbol' => '◒', 'tone' => 'sky']" title="Specialty sips" description="Seasonal espresso, bright teas, and comfort drinks made with care." />
                <x-feature-card :icon="['symbol' => '◌', 'tone' => 'amber']" title="Quiet corners" description="Cozy seats for reading, catching up, or simply watching the afternoon unfold." />
                <x-feature-card :icon="['symbol' => '✦', 'tone' => 'moss']" title="Community moments" description="Gentle workshops, book clubs, and tiny celebrations for our neighbors." />
                <x-feature-card :icon="['symbol' => '♡', 'tone' => 'violet']" title="Friendly guidance" description="Our team can help you find the right table, drink, and cat etiquette tips." />
            </div>
        </div>
    </section>

    <section class="px-5 py-20 lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-[.85fr_1.15fr] lg:items-center">
            <div><x-section-heading eyebrow="a little preview" title="Our menu is made for lingering." copy="Comforting coffee, easy brunch, and small treats to share between conversations." /><x-button href="{{ route('menu') }}" variant="secondary" class="mt-7">View all menu items <span>→</span></x-button></div>
            <div class="grid gap-4 sm:grid-cols-3">
                @forelse ($featuredMenuItems as $item)
                    <article class="rounded-3xl border border-ink/8 bg-white p-5 shadow-card"><span class="text-coral">✦</span><p class="mt-8 text-xs font-bold uppercase tracking-wider text-ink/40">{{ $item->category }}</p><h3 class="mt-2 font-display text-xl font-bold">{{ $item->name }}</h3><p class="mt-2 text-sm leading-6 text-ink/60">{{ $item->description }}</p><div class="mt-5 flex items-center justify-between"><span class="font-display text-lg font-bold">₱{{ number_format((float) $item->price, 0) }}</span>@if ($item->dietary_label)<span class="rounded-full bg-moss/10 px-2 py-1 text-[10px] font-bold text-moss">{{ $item->dietary_label }}</span>@endif</div></article>
                @empty
                    <p class="text-sm text-ink/60">Menu highlights will appear after the database is seeded.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section class="bg-ink px-5 py-20 text-cream lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-[1fr_.9fr] lg:items-center">
            <div><p class="eyebrow text-peach">the neko wave rhythm</p><h2 class="mt-3 max-w-xl font-display text-4xl font-bold tracking-tight sm:text-5xl">A cafe designed around comfort, not hurry.</h2><p class="mt-5 max-w-xl text-base leading-7 text-cream/65">Our digital welcome board reflects the real experience: clear timing, gentle reminders, and room for every visitor to settle in.</p><div class="mt-8 grid grid-cols-2 gap-5"><div><p class="font-display text-3xl font-bold text-peach">50 min</p><p class="mt-1 text-sm text-cream/55">typical cat lounge visit</p></div><div><p class="font-display text-3xl font-bold text-peach">3</p><p class="mt-1 text-sm text-cream/55">calm zones to choose from</p></div></div></div>
            <div class="rounded-[2rem] bg-cream p-4 text-ink shadow-lift sm:p-6"><div class="rounded-[1.5rem] bg-white p-5"><div class="flex items-center justify-between"><div><p class="text-xs font-bold uppercase tracking-widest text-ink/40">Welcome board</p><p class="mt-1 font-display text-2xl font-bold">Good afternoon, friend.</p></div><span class="grid size-10 place-items-center rounded-full bg-peach text-lg">⌁</span></div><div class="mt-6 grid gap-3 sm:grid-cols-2"><div class="rounded-2xl bg-sky/45 p-4"><p class="text-xs font-bold text-ink/45">NEXT OPENING</p><p class="mt-2 font-display text-xl font-bold">3:30 PM</p><p class="mt-1 text-xs text-ink/60">Window nook · 2 seats</p></div><div class="rounded-2xl bg-rose/45 p-4"><p class="text-xs font-bold text-ink/45">CAT MOOD</p><p class="mt-2 font-display text-xl font-bold">Nap mode</p><p class="mt-1 text-xs text-ink/60">Please use indoor voices</p></div></div><div class="mt-4 rounded-2xl border border-ink/8 p-4"><div class="flex items-center justify-between"><span class="text-sm font-bold">Today's gentle reminder</span><span class="text-coral">✦</span></div><p class="mt-2 text-sm text-ink/60">Let a cat approach you first. Slow blinks are always welcome.</p></div></div></div>
        </div>
    </section>

    <section id="cats" class="px-5 py-20 lg:px-8"><div class="mx-auto max-w-7xl"><div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end"><x-section-heading eyebrow="our soft-hearted team" title="Meet the resident cats." copy="Each has a favorite nap spot, snack, and very distinct approach to friendship." /><x-button href="{{ route('cats') }}" variant="secondary">All cat profiles</x-button></div><div class="mt-10 grid gap-5 md:grid-cols-3">@forelse($cats as $cat)<x-cat-card :cat="$cat" />@empty<p class="text-sm text-ink/60">Cat profiles will appear after the database is seeded.</p>@endforelse</div></div></section>

    <section id="plans" class="bg-warm px-5 py-20 lg:px-8"><div class="mx-auto max-w-7xl"><x-section-heading eyebrow="visit your way" title="Simple passes, zero pressure." copy="Choose the pace that fits your afternoon. Every visit supports our cats' happy, healthy home." align="center" /><div class="mt-10 grid gap-5 lg:grid-cols-3"><x-pricing-card name="Window Visit" price="150" description="A sweet, simple first hello." :features="['50-minute cafe seat', 'Cat lounge access', 'One drink credit']" /><x-pricing-card name="Purrfect Pair" price="280" description="Bring a favorite person or take an extra slow afternoon." :features="['Two 50-minute cafe seats', 'Cat lounge access', 'Two drink credits', 'Priority time selection']" featured /><x-pricing-card name="Moonlight Club" price="520" description="For repeat cozy moments and familiar faces." :features="['Four flexible visits', 'One seasonal drink upgrade', 'Early event invitations']" /></div></div></section>

    <section id="testimonials" class="px-5 py-20 lg:px-8"><div class="mx-auto max-w-7xl"><x-section-heading eyebrow="kind words" title="A favorite little corner of Los Baños." align="center" /><div class="mt-10 grid gap-5 lg:grid-cols-3"><x-testimonial-card name="Mara Santos" role="Neighborhood regular" initials="MS" quote="The kind of place where an hour feels like a reset button. Motchi is a wonderful host." tone="rose" /><x-testimonial-card name="Jamie Cruz" role="First-time visitor" initials="JC" quote="The reservation process was simple, the latte was lovely, and every cat had so much personality." tone="sky" /><x-testimonial-card name="Ari Flores" role="Book club member" initials="AF" quote="Warm, thoughtful, and genuinely calm. It has become our group's favorite meeting spot." tone="amber" /></div></div></section>

    <section class="mx-5 mb-0 overflow-hidden rounded-t-[2.5rem] bg-coral px-6 py-16 text-white lg:mx-8"><div class="mx-auto flex max-w-6xl flex-col gap-7 text-center sm:items-center"><p class="text-xs font-bold uppercase tracking-[0.2em] text-white/70">Your table is waiting</p><h2 class="max-w-2xl font-display text-4xl font-bold tracking-tight sm:text-5xl">Come for the coffee. Stay for the quiet purrs.</h2><p class="max-w-xl text-white/80">Reserve your calm corner and we will make your first visit feel easy.</p><x-button href="{{ route('reservations.create') }}" variant="secondary" class="border-white/30 bg-white text-ink">Reserve a table <span>→</span></x-button></div></section>
</x-layout>
