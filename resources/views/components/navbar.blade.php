<header class="sticky top-0 z-40 border-b border-ink/5 bg-cream/90 backdrop-blur">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8" aria-label="Main navigation">
        <a href="{{ route('home') }}" class="group flex items-center gap-3" aria-label="Neko Wave Cafe home">
            <x-neon-logo class="transition group-hover:scale-[1.03]" />
        </a>

        <div class="hidden items-center gap-7 text-sm font-semibold text-ink/70 md:flex">
            <a class="nav-link" href="{{ route('home') }}#features">Our space</a>
            <a class="nav-link" href="{{ route('menu') }}">Menu</a>
            <a class="nav-link" href="{{ route('cats') }}">Meet the cats</a>
            <a class="nav-link" href="{{ route('home') }}#plans">Passes</a>
            <a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
        </div>

        <div class="hidden items-center gap-3 md:flex">
            <a href="{{ route('contact.create') }}" class="text-sm font-bold text-ink transition hover:text-coral">Say hello</a>
            <x-button href="{{ route('reservations.create') }}" class="px-4 py-2 text-sm">Reserve a table</x-button>
        </div>

        <details class="relative md:hidden">
            <summary class="grid size-10 cursor-pointer place-items-center rounded-xl border border-ink/10 text-ink marker:content-none" aria-label="Open navigation">☰</summary>
            <div class="absolute right-0 mt-3 w-60 rounded-2xl border border-ink/10 bg-white p-3 shadow-soft">
                <a class="mobile-link" href="{{ route('home') }}#features">Our space</a>
                <a class="mobile-link" href="{{ route('menu') }}">Menu</a>
                <a class="mobile-link" href="{{ route('cats') }}">Meet the cats</a>
                <a class="mobile-link" href="{{ route('home') }}#plans">Passes</a>
                <a class="mobile-link" href="{{ route('contact.create') }}">Contact</a>
                <x-button href="{{ route('reservations.create') }}" class="mt-2 w-full">Reserve a table</x-button>
            </div>
        </details>
    </nav>
</header>
