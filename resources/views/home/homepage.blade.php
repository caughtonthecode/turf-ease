{{-- @php
    $proPic = $userAll->pro_pic;
    $userFname = $userAll->f_name;
@endphp --}}

<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.homecss')
    <title>TurfEase - Book Sports Playground Online</title>
</head>

<body>
    @include('home.header')
    @include('home.search')
    @include('home.slider')
    @include('home.explore')
    @include('home.tournament')
    @include('home.turfbycategory')
    @include('home.turfregistration')
    @include('home.footer')
</body>

</html>
