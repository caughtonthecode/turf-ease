<!DOCTYPE html>
<html lang="en">

<head>
    @include('pages.admin.home.homecss')
    <title>{{ $title ?? 'TurfEase - Book Sports Playground Online' }}</title>
    <meta name="description"
        content="{{ $description ?? 'TurfEase — Book the best sports turfs across Bangladesh. Football, cricket, badminton and more. Fast, easy, and affordable.' }}">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{ $title ?? 'TurfEase - Book Sports Playground Online' }}">
    <meta property="og:description" content="Bangladesh\'s #1 turf booking platform. Find & book sports turfs near you.">
    <meta property="og:type" content="website">
    @stack('styles')
</head>

<body>
    @include('pages.admin.home.preloader')
    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />
    @stack('scripts')
</body>

</html>
