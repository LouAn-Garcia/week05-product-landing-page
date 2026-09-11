<section class="relative overflow-hidden px-5 pb-16 pt-14 sm:pb-24 sm:pt-20 lg:px-8 lg:pt-28">
    <div class="absolute -left-24 top-10 size-72 rounded-full bg-peach/60 blur-3xl"></div>
    <div class="absolute right-0 top-36 size-80 rounded-full bg-sky/35 blur-3xl"></div>
    <div class="relative mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-[1.05fr_.95fr] lg:gap-16">
        <div>
            <p class="eyebrow"><span class="mr-2 text-base">✦</span> warm cups, soft paws</p>
            <h1 class="mt-5 max-w-xl font-display text-5xl font-bold leading-[0.95] tracking-tight text-ink sm:text-6xl lg:text-7xl">A slower kind of <em class="font-normal text-coral">coffee break.</em></h1>
            <p class="mt-6 max-w-lg text-base leading-7 text-ink/70 sm:text-lg">Neko Wave is a cozy Los Baños cafe for comfort food, specialty drinks, and resident cats who make every visit a little brighter.</p>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <x-button href="{{ route('reservations.create') }}">Book your visit <span aria-hidden="true">→</span></x-button>
                <x-button href="{{ route('menu') }}" variant="secondary">Explore the menu</x-button>
            </div>
            <dl class="mt-10 grid max-w-md grid-cols-3 gap-5 border-t border-ink/10 pt-6">
                <div><dt class="font-display text-2xl font-bold">6</dt><dd class="mt-1 text-xs font-semibold uppercase tracking-wide text-ink/50">resident cats</dd></div>
                <div><dt class="font-display text-2xl font-bold">100%</dt><dd class="mt-1 text-xs font-semibold uppercase tracking-wide text-ink/50">cozy energy</dd></div>
                <div><dt class="font-display text-2xl font-bold">9–8</dt><dd class="mt-1 text-xs font-semibold uppercase tracking-wide text-ink/50">daily hours</dd></div>
            </dl>
        </div>

        <div class="relative mx-auto w-full max-w-lg">
            <div class="absolute -inset-4 rotate-3 rounded-[2.5rem] bg-ink/5"></div>
            <div class="relative overflow-hidden rounded-[2.25rem] border border-white/80 bg-warm p-5 shadow-lift sm:p-7">
                <div class="flex items-center justify-between"><span class="rounded-full bg-white/80 px-3 py-1 text-xs font-bold text-ink">Today at Neko Wave</span><span class="text-sm tracking-[0.25em] text-coral">NEKO</span></div>
                <div class="relative mt-5 grid min-h-80 place-items-center overflow-hidden rounded-[1.75rem] bg-gradient-to-br from-rose-100 via-peach to-amber-100">
                    <div class="absolute inset-x-10 bottom-9 h-16 rounded-[50%] bg-ink/10 blur-xl"></div>
                    <div class="relative text-center"><div class="cat-mark mx-auto">⌁</div><p class="mt-4 font-display text-2xl font-bold text-ink">Motchi saved you a seat.</p><p class="mt-1 text-sm text-ink/60">and possibly a purr.</p></div>
                    <span class="absolute left-7 top-8 text-2xl text-coral/70">✦</span><span class="absolute bottom-10 right-8 text-3xl text-moss/55">✦</span>
                </div>
                <div class="mt-5 flex items-center justify-between rounded-2xl bg-white/75 p-4"><div><p class="text-xs font-bold uppercase tracking-wider text-ink/45">House note</p><p class="mt-1 font-display text-lg font-bold">Quiet hour · 2–3 PM</p></div><span class="grid size-10 place-items-center rounded-full bg-sky text-lg">☾</span></div>
            </div>
        </div>
    </div>
</section>
