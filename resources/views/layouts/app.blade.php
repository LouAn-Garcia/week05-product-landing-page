<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Neko Wave Cafe is a cozy cat cafe for slow sips, gentle company, and warm community.">
    <title>{{ $title ?? 'Neko Wave Cafe' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cream text-ink antialiased">
    <x-navbar />

    @if (session('success'))
        <div class="fixed inset-x-0 top-24 z-50 mx-auto max-w-xl px-5" role="status">
            <div class="rounded-2xl border border-moss/20 bg-white p-4 text-center text-sm font-semibold text-moss shadow-soft">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <main>{{ $slot }}</main>
    <x-footer />
</body>
</html>
