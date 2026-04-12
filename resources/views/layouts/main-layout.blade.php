<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' | TurfEase' : 'TurfEase - Book Sports Playground Online' }}</title>
    <meta name="description"
        content="{{ $description ?? 'TurfEase — Book the best sports turfs across Bangladesh. Football, cricket, badminton and more. Fast, easy, and affordable.' }}">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{ $title ?? 'TurfEase - Book Sports Playground Online' }}">
    <meta property="og:description"
        content="Bangladesh\'s #1 turf booking platform. Find & book sports turfs near you.">
    <meta property="og:type" content="website">
    <x-frontend.styles />

    <!-- Custom CSS-->
    @stack('styles')
</head>

<body>
    <x-preeloader />
    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    <!-- Custom Scripts -->
    @stack('scripts')
</body>

</html>
