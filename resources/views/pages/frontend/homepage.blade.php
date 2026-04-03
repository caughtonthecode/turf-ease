{{-- @php
    $proPic = $userAll->pro_pic;
    $userFname = $userAll->f_name;
@endphp --}}

<x-main-layout>
    @include('pages.admin.home.search')
    @include('pages.admin.home.explore')
    @include('pages.admin.home.dhakaturf')
    @include('pages.admin.home.slider')
    @include('pages.admin.home.turfbycategory')
    @include('pages.admin.home.tournament')
    @include('pages.admin.home.turfregistration')
</x-main-layout>
