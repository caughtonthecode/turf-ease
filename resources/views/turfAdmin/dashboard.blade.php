<!DOCTYPE html>
<html lang="en">

<head>
    @include('turfAdmin.css')
    <title>Turf Admin Panel - TurfEase</title>
</head>

<body>

    @include('turfAdmin.header')
    @yield('sidebar-content')
    @yield('content-section')

</body>

</html>
