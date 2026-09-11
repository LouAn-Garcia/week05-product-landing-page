<footer class="mt-20 border-t border-ink/10 bg-ink text-cream">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-14 sm:grid-cols-2 lg:grid-cols-4 lg:px-8">
        <div><a href="{{ route('home') }}"><x-neon-logo light /></a><p class="mt-3 max-w-xs text-sm leading-6 text-cream/60">A cozy cat cafe for slow mornings, friendly paws, and neighborhood connection.</p></div>
        <div><p class="footer-label">Explore</p><a class="footer-link" href="{{ route('menu') }}">Menu</a><a class="footer-link" href="{{ route('cats') }}">Cat profiles</a><a class="footer-link" href="{{ route('reservations.create') }}">Reservations</a></div>
        <div><p class="footer-label">Visit</p><p class="mt-3 text-sm text-cream/70">Los Baños, Laguna<br>Philippines</p><p class="mt-3 text-sm text-cream/70">Daily · 9 AM–8 PM</p></div>
        <div><p class="footer-label">Stay in the loop</p><p class="mt-3 text-sm leading-6 text-cream/60">Follow the sleepy updates and new menu notes.</p><div class="mt-4 flex gap-2"><span class="social-dot">ig</span><span class="social-dot">fb</span><span class="social-dot">tk</span></div></div>
    </div>
    <div class="mx-auto flex max-w-7xl flex-col gap-3 border-t border-white/10 px-5 py-5 text-xs text-cream/45 sm:flex-row sm:justify-between lg:px-8"><span>© {{ now()->year }} Neko Wave Cafe. Made with care.</span><span>Kind to cats. Kind to people.</span></div>
</footer>
