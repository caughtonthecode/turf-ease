{{-- @php
    $proPic = $userAll->pro_pic;
    $userFname = $userAll->f_name;
@endphp --}}

<x-main-layout>
    @include('home.search')
    @include('home.explore')
    @include('home.dhakaturf')
    @include('home.slider')
    @include('home.turfbycategory')
    @include('home.tournament')
    @include('home.turfregistration')
</x-main-layout>
