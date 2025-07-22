@extends('turfAdmin.dashboard')

@section('sidebar-content')

    <div class="collapsed">
        <ul class="mt-7 flex flex-col items-center space-y-4">
            <li
                class="flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out sidebar-icon">
                <a href="{{ url('dashboard') }}"
                    class="py-2.5 flex max-xl:justify-center justify-start items-center w-full px-14 side-middle text-base">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                            <path fill="#fff"
                                d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h240v-560H200v560Zm320 0h240v-280H520v280Zm0-360h240v-200H520v200Z" />
                        </svg>
                    </span>
                    <span class="sidebar-title ml-2">
                        Dashboard
                    </span>
                </a>
            </li>

            <li
                class="flex justify-center items-center text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-colors duration-300 ease-in-out sidebar-icon">
                <a href="{{ url('myProfile') }}"
                    class="py-2.5 flex items-center max-xl:justify-center justify-start w-full px-14 side-middle rounded-full text-base">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="23" viewBox="0 -960 960 960" width="23">
                            <path fill="#fff"
                                d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                        </svg>
                    </span>
                    <span class="sidebar-title ml-2">
                        Profile
                    </span>
                </a>
            </li>

            <li
                class="flex justify-start text-white text-lg hover:bg-[#008728] hover:shadow-one rounded-full w-11/12 transition-colors duration-300 ease-in-out sidebar-icon">
                <a href="{{ url('bookings') }}"
                    class="py-2.5 flex items-center w-full px-14 side-middle text-base max-xl:justify-center justify-start">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="23" viewBox="0 -960 960 960" width="23">
                            <path fill="#ffffff"
                                d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                        </svg>

                    </span>
                    <span class="sidebar-title ml-2">
                        Booking
                    </span>
                </a>
            </li>

            <li
                class="flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-colors duration-300 ease-in-out  sidebar-icon bg-[#008728] shadow-one">
                <a href="{{ url('view-turf') }}"
                    class="py-2.5 flex items-center w-full px-14 side-middle text-base max-xl:justify-center justify-start">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="23" viewBox="0 -960 960 960" width="23">
                            <path fill="#ffffff"
                                d="M240-120v-680h390q14 0 26 6.5t20 17.5l124 176-124 176q-8 11-20 17.5t-26 6.5H320v280h-80Zm80-360h300l80-120-80-120H320v240Zm0 0v-240 240Z" />
                        </svg>
                    </span>
                    <span class="sidebar-title ml-2">
                        My Turf
                    </span>
                </a>
            </li>

            <li
                class="flex justify-start text-white text-lg hover:bg-[#008728] hover:shadow-one rounded-full w-11/12 transition-colors duration-300 ease-in-out  sidebar-icon">
                <a href="{{ url('myWallet') }}"
                    class="py-2.5 flex items-center w-full px-14 side-middle text-base max-xl:justify-center justify-start">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="22" viewBox="0 -960 960 960" width="22">
                            <path fill="#fff"
                                d="M200-200v-560 560Zm0 80q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v100h-80v-100H200v560h560v-100h80v100q0 33-23.5 56.5T760-120H200Zm320-160q-33 0-56.5-23.5T440-360v-240q0-33 23.5-56.5T520-680h280q33 0 56.5 23.5T880-600v240q0 33-23.5 56.5T800-280H520Zm280-80v-240H520v240h280Zm-160-60q25 0 42.5-17.5T700-480q0-25-17.5-42.5T640-540q-25 0-42.5 17.5T580-480q0 25 17.5 42.5T640-420Z" />
                        </svg>
                    </span>
                    <span class="sidebar-title ml-2">
                        Wallet
                    </span>
                </a>
            </li>
        </ul>

        <!-- Footer Area -->
        <div class="absolute mx-auto bottom-0 w-full text-center pb-3">
            <p class="text-[#4BF27E] text-sm w-full">TurfEase © 2024. All rights reserved.</p>
        </div>
    </div>

    <!-- Footer Area -->
    <div class="absolute mx-auto bottom-0 w-full text-center pb-3">
        <p class="text-[#4BF27E] text-sm w-full">TurfEase © 2024. All rights reserved.</p>
    </div>
    </div>

@section('content-section')
    <div class="flex-grow pt-8 pl-10 p-6 bg-gray-100 overflow-auto lg:overflow-hidden">
        <div
            class="flex justify-between max-xl:items-center max-xl:bg-white max-xl:shadow-lg max-xl:absolute max-xl:top-0 max-xl:left-0 max-xl:right-0 max-xl:px-10 max-xl:py-6 max-xl:w-full max-xl:rounded-xl">
            <div class="flex items-center justify-center max-xl:justify-start max-xl:w-1/3">

                {{-- Sidebar Toggle Button Big Screen  --}}
                <div class="sidebar-icon hover:shadow max-xl:hidden">
                    <button id="toggleButton" class="flex items-center justify-center">
                        <svg width="60px" height="45px" class="rounded-lg p-1.5 max-xl:w-[80px] max-xl:h-[80px]"
                            viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H14M4 18H9" stroke="rgb(127 127 127)" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <!-- Mobile Sidebar Section -->
                <div class="relative hidden max-xl:block">
                    <!-- Sidebar Toggle Button -->
                    <button id="mobileSidebarToggleBtn" class="">
                        <svg width="60px" height="45px" class="rounded-lg p-1.5 max-xl:w-[80px] max-xl:h-[80px]"
                            viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H14M4 18H9" stroke="rgb(127 127 127)" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <!-- Sidebar -->
                    <div id="mobile-sidebar"
                        class="fixed inset-0 z-40 bg-black bg-opacity-50 hidden transition-opacity duration-300 opacity-0">
                        <div
                            class="absolute inset-y-0 left-0 w-1/2 bg-[#00b737] shadow-lg transition-transform duration-300 transform -translate-x-full">
                            <div class="flex justify-between items-center text-white py-8 px-6">
                                <a href="{{ route('/') }}" class="flex items-center">
                                    <img src="img/favicon.png" class="w-20 h-20" alt=""> <span
                                        class="text-5xl uppercase font-Audiowide">Turfease</span>
                                </a>
                                <button id="sidebarCloseBtn" class="focus:outline-none">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <section class="mt-6">

                                <!-- Add more menu items here -->
                                <ul class="mt-7 flex flex-col items-center space-y-4">
                                    <li
                                        class="flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-colors duration-300 ease-in-out  sidebar-icon">
                                        <a href="{{ url('dashboard') }}"
                                            class="py-4 lg:py-2.5 flex  justify-start items-center w-full px-14 side-middle text-4xl lg:text-base">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                    viewBox="0 -960 960 960" width="20" class="w-9 h-9">
                                                    <path fill="#fff"
                                                        d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h240v-560H200v560Zm320 0h240v-280H520v280Zm0-360h240v-200H520v200Z" />
                                                </svg>
                                            </span>
                                            <span class="sidebar-title ml-2">
                                                Dashboard
                                            </span>
                                        </a>
                                    </li>

                                    <li
                                        class="flex justify-center items-center text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-colors duration-300 ease-in-out sidebar-icon">
                                        <a href="{{ url('myProfile') }}"
                                            class="py-4 lg:py-2.5 flex items-center  justify-start w-full px-14 side-middle rounded-full  text-4xl lg:text-base">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="23"
                                                    viewBox="0 -960 960 960" width="23" class="w-9 h-9">
                                                    <path fill="#fff"
                                                        d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                                                </svg>
                                            </span>
                                            <span class="sidebar-title ml-2">
                                                Profile
                                            </span>
                                        </a>
                                    </li>

                                    <li
                                        class="flex justify-start text-white text-lg hover:bg-[#008728] hover:shadow-one rounded-full w-11/12 transition-colors duration-300 ease-in-out sidebar-icon">
                                        <a href="{{ url('bookings') }}"
                                            class="py-4 lg:py-2.5 flex items-center w-full px-14 side-middle  text-4xl lg:text-base  justify-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="23"
                                                    viewBox="0 -960 960 960" width="23" class="w-9 h-9">
                                                    <path fill="#ffffff"
                                                        d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                                </svg>

                                            </span>
                                            <span class="sidebar-title ml-2">
                                                Booking
                                            </span>
                                        </a>
                                    </li>

                                    <li
                                        class="flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out shadow-one sidebar-icon">
                                        <a href="{{ url('view-turf') }}"
                                            class="py-4 lg:py-2.5 flex items-center w-full px-14 side-middle text-4xl lg:text-base  justify-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="23"
                                                    viewBox="0 -960 960 960" width="23" class="w-9 h-9">
                                                    <path fill="#ffffff"
                                                        d="M240-120v-680h390q14 0 26 6.5t20 17.5l124 176-124 176q-8 11-20 17.5t-26 6.5H320v280h-80Zm80-360h300l80-120-80-120H320v240Zm0 0v-240 240Z" />
                                                </svg>
                                            </span>
                                            <span class="sidebar-title ml-2">
                                                My Turf
                                            </span>
                                        </a>
                                    </li>

                                    <li
                                        class="flex justify-start text-white text-lg hover:bg-[#008728] hover:shadow-one rounded-full w-11/12 transition-colors duration-300 ease-in-out  sidebar-icon">
                                        <a href="{{ url('myWallet') }}"
                                            class="py-4 lg:py-2.5 flex items-center w-full px-14 side-middle text-4xl lg:text-base  justify-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="22"
                                                    viewBox="0 -960 960 960" width="22" class="w-9 h-9">
                                                    <path fill="#fff"
                                                        d="M200-200v-560 560Zm0 80q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v100h-80v-100H200v560h560v-100h80v100q0 33-23.5 56.5T760-120H200Zm320-160q-33 0-56.5-23.5T440-360v-240q0-33 23.5-56.5T520-680h280q33 0 56.5 23.5T880-600v240q0 33-23.5 56.5T800-280H520Zm280-80v-240H520v240h280Zm-160-60q25 0 42.5-17.5T700-480q0-25-17.5-42.5T640-540q-25 0-42.5 17.5T580-480q0 25 17.5 42.5T640-420Z" />
                                                </svg>
                                            </span>
                                            <span class="sidebar-title ml-2">
                                                Wallet
                                            </span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Footer Area -->
                                <div class="absolute mx-auto bottom-0 w-full text-center pb-3">
                                    <p class="text-[#4BF27E] text-2xl lg:text-sm w-full">TurfEase © 2024. All rights
                                        reserved.</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <h1 class="text-xl max-xl:text-4xl text-black inline-block ml-6 font-semibold max-xl:hidden">Today,
                    <span class="text-sm max-xl:text-3xl">
                        {{ date('j F, Y') }}
                    </span>
                </h1>
            </div>

            {{-- logo --}}
            <div class="hidden max-xl:flex max-xl:w-1/3 max-xl:justify-center">
                <a href="{{ route('/') }}">
                    <img src="img/logo.png" class="max-xl:w-[210px]" alt="">
                </a>
            </div>

            <!-- User Profile Section -->
            <div
                class="mr-10 max-xl:mr-4 bg-white max-xl:bg-white pr-6 pl-10 rounded-full max-xl:flex max-xl:items-center max-xl:justify-end max-xl:w-1/3 max-xl:pr-0">
                <div class="relative inline-block">
                    <button id="profileDropdownBtn" class="flex items-center">
                        <div
                            class="pr-2 text-sm max-xl:text-4xl text-gray-600 max-xl:text-white max-xl:mr-2 font-semibold">
                            <span class="max-xl:hidden">{{ $userAll->f_name }}</span> <span
                                class="max-xl:hidden">{{ $userAll->l_name }}</span>
                        </div>
                        <img src="img/{{ $userAll->pro_pic }}"
                            class="w-10 h-10 max-xl:w-[80px] max-xl:h-[80px] rounded-full" alt="profileDropdownbtn">
                    </button>
                    <div id="profileDropdown"
                        class="absolute hidden -right-5 mt-2 w-48 max-xl:w-[320px] max-xl:px-6 max-xl:space-y-2 max-xl:py-4 bg-white rounded-md shadow-lg z-10">
                        <p
                            class="px-4 py-2 max-xl:px-0 text-gray-800 hover:bg-gray-200 max-xl:text-4xl hidden max-xl:block max-xl:mb-6 text-center border-b-[1px] border-b-gray-900">
                            Hello,
                            <span class="font-semibold">{{ $userAll->f_name }}</span>
                        </p>
                        <a href="{{ url('myProfile') }}"
                            class="block px-4 py-2 max-xl:px-2 text-gray-800 hover:bg-gray-200 max-xl:text-4xl">Profile</a>
                        <a href="{{ url('') }}"
                            class="block px-4 py-2 max-xl:px-2 text-gray-800 hover:bg-gray-200 max-xl:text-4xl">Terms &
                            Policy</a>
                        <form action="{{ url('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="block px-4 py-2 max-xl:px-2 text-gray-800 hover:bg-gray-200 w-full text-start max-xl:text-4xl">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-20 lg:mt-2">
            <div class="bg-gray-100 min-h-screen">

                <!-- Main Content -->
                <main class="lg:container mx-auto py-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <section>
                        <!-- Turf Lists -->
                        <section class="mb-8">
                            <div
                                class="bg-white p-10 max-xl:w-full max-xl:ml-0 max-xl:mt-10 rounded-xl max-xl:rounded-3xl h-[60vh] lg:h-[80vh] max-xl:hover:shadow-lg">
                                <div class="h-[18%] max-xl:mb-4">
                                    <div class="flex max-xl:flex-col justify-between">
                                        <div class="flex justify-between max-xl:space-y-5 items-center mb-6 lg:mb-0">
                                            <p class="text-gray-700 text-lg font-semibold mr-4 max-xl:text-5xl">Turf Lists
                                            </p>
                                            <a href="#addTurf"
                                                class="text-white text-3xl font-semibold bg-gray-600 px-4 py-1 rounded-full lg:hidden">Add
                                                Turf</a>
                                        </div>
                                    </div>
                                    <div class="border-b border-gray-200 mt-6 max-xl:mt-6">
                                        <nav class="flex space-x-8">
                                            <a href="#day"
                                                class="text-[30px] lg:text-sm text-gray-600 hover:text-green-600 font-semibold py-2 px-4 rounded-t-lg bg-gray-100 active">Day</a>
                                            <a href="#evening"
                                                class="text-[30px] lg:text-sm text-gray-600 hover:text-green-600 font-semibold py-2 px-4 rounded-t-lg">Evening</a>
                                            <a href="#night"
                                                class="text-[30px] lg:text-sm text-gray-600 hover:text-green-600 font-semibold py-2 px-4 rounded-t-lg">Night</a>
                                        </nav>
                                    </div>
                                </div>

                                <div
                                    class="overflow-y-scroll hide-scrollbar scroll-container transition: max-height 0.5s ease h-[84%] max-xl:h-[80%] max-xl:shadow-lg">
                                    <div class="">
                                        <section class="space-y-4 max-xl:space-y-8">
                                            <div id="day" class="tab-content space-y-6 lg:space-y-4">
                                                @foreach ($turfs->where('shift', 'day') as $turf)
                                                    <div
                                                        class="flex flex-col py-4 space-y-4 bg-white border-t-[1px] border-b-[1px] border-gray-300 overflow-hidden">
                                                        <div class="flex justify-between px-6 text-white">
                                                            <h2
                                                                class="text-5xl lg:text-base xl:font-semibold text-gray-800  max-xl:font-semibold font-sans mb-4 lg:mb-0">
                                                                {{ $turf->turf_name }}
                                                            </h2>
                                                        </div>
                                                        <div class="flex justify-between px-6">
                                                            <div
                                                                class="flex flex-col lg:flex-row lg:items-center lg:space-x-8 space-y-3 lg:space-y-0">
                                                                <div class="flex items-center">
                                                                    {{-- 00B737 --}}
                                                                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                                    <svg width="17px" height="auto"
                                                                        viewBox="0 0 24 24" class="w-8 lg:w-auto"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5 21V3.90002C5 3.90002 5.875 3 8.5 3C11.125 3 12.875 4.8 15.5 4.8C18.125 4.8 19 3.9 19 3.9V14.7C19 14.7 18.125 15.6 15.5 15.6C12.875 15.6 11.125 13.8 8.5 13.8C5.875 13.8 5 14.7 5 14.7"
                                                                            stroke="#00B737" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                    <p
                                                                        class="text-gray-600 text-[30px] lg:text-base font-sans">
                                                                        <span class="ml-1">#{{ $turf->id }}</span>
                                                                    </p>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <img src="icons/sports-icon.svg"
                                                                        class="w-6 lg:w-4 lg:h-4" alt="">
                                                                    <p
                                                                        class="text-gray-600 text-[15px] lg:text-base font-sans max-xl:text-4xl capitalize">
                                                                        <span class="ml-1">{{ $turf->category }}</span>
                                                                    </p>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <p
                                                                        class="text-white rounded-full lg:rounded-md px-2 py-1 bg-[#00B737] text-[30px] lg:text-[15px] lg:text-sm font-sans">
                                                                        <span
                                                                            class="ml-1">{{ \Carbon\Carbon::createFromFormat('H:i:s', $turf->open_time)->format('h:i A') . ' - ' . \Carbon\Carbon::createFromFormat('H:i:s', $turf->close_time)->format('h:i A') }}
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <p
                                                                    class="max-xl:text-3xl text-[30px] lg:text-base font-sans bg-white text-green-600 rounded-full px-3">
                                                                    {{ $turf->price }} BDT
                                                                </p>

                                                            </div>
                                                            <div class="flex items-center space-x-2">
                                                                <!-- Delete form -->
                                                                <form action="{{ route('deleteTurf', $turf->id) }}"
                                                                    method="POST" class="inline-block"
                                                                    onsubmit="return confirmDelete()">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="text-sm bg-red-600 text-white font-sans rounded-full px-3 py-0.5">Delete</button>
                                                                </form>
                                                                <button
                                                                    class="text-sm bg-indigo-500 hover:bg-indigo-600 text-white rounded-full px-3 py-0.5 transition duration-300"
                                                                    data-modal-target="modal-{{ $turf->id }}">Update</button>

                                                                <a href="{{ url('turf') . '/' . $turf->id }}"
                                                                    class="text-sm bg-slate-400/20 text-gray-600 font-sans rounded-full px-3 py-0.5">Details</a>
                                                            </div>

                                                            <!-- Modal Overlay -->
                                                            <div class="fixed z-10 inset-0 overflow-y-auto hidden"
                                                                id="modal-{{ $turf->id }}"
                                                                aria-labelledby="modal-title-{{ $turf->id }}"
                                                                role="dialog" aria-modal="true">
                                                                <div
                                                                    class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                                        aria-hidden="true"></div>
                                                                    <span
                                                                        class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                                        aria-hidden="true">&#8203;</span>
                                                                    <div
                                                                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                                        <div
                                                                            class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                            <div class="sm:flex sm:items-start">
                                                                                <div
                                                                                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                                    <svg class="h-6 w-6 text-indigo-600"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" viewBox="0 0 24 24"
                                                                                        stroke="currentColor"
                                                                                        aria-hidden="true">
                                                                                        <path stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="2"
                                                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                                    </svg>
                                                                                </div>
                                                                                <div
                                                                                    class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                                    <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                                        id="modal-title-{{ $turf->id }}">
                                                                                        Edit Turf
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="flex relative">
                                                                                    <div id="updateToast"
                                                                                        class="absolute top-0 -left-20">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mt-4">
                                                                                <form id="updateTurfForm"
                                                                                    data-turf-id="{{ $turf->id }}"
                                                                                    enctype="multipart/form-data">
                                                                                    <div class="mb-4">
                                                                                        <label for="turfName"
                                                                                            class="block text-gray-700 font-semibold mb-2">Turf
                                                                                            Name</label>
                                                                                        <input type="text"
                                                                                            id="turfName"
                                                                                            name="turf_name"
                                                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                            placeholder="Enter turf name"
                                                                                            value="{{ $turf->turf_name }}">
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="turfDescription"
                                                                                            class="block text-gray-700 font-semibold mb-2">Description</label>
                                                                                        <textarea id="turfDescription" name="description"
                                                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                            rows="3" placeholder="Write short description about your turf">{{ $turf->description }}</textarea>
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="sportsCategory"
                                                                                            class="block text-gray-700 font-semibold mb-2">Sports
                                                                                            Category</label>
                                                                                        <select id="sportsCategory"
                                                                                            name="category"
                                                                                            class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300 text-3xl lg:text-base py-6 lg:py-2">
                                                                                            <option value=""
                                                                                                disabled>Please select a
                                                                                                category</option>
                                                                                            <option value="football"
                                                                                                {{ old('category') == 'football' ? 'selected' : '' }}>
                                                                                                Football</option>
                                                                                            <option value="cricket"
                                                                                                {{ old('category') == 'cricket' ? 'selected' : '' }}>
                                                                                                Cricket</option>
                                                                                            <option value="badminton"
                                                                                                {{ old('category') == 'badminton' ? 'selected' : '' }}>
                                                                                                Badminton</option>
                                                                                            <option value="basketball"
                                                                                                {{ old('category') == 'basketball' ? 'selected' : '' }}>
                                                                                                Basketball</option>
                                                                                            <option value="swimming"
                                                                                                {{ old('category') == 'swimming' ? 'selected' : '' }}>
                                                                                                Swimming</option>
                                                                                            <option value="pool"
                                                                                                {{ old('category') == 'pool' ? 'selected' : '' }}>
                                                                                                Pool</option>
                                                                                            <option value="paintball"
                                                                                                {{ old('category') == 'paintball' ? 'selected' : '' }}>
                                                                                                Paintball</option>
                                                                                            <option value="esports"
                                                                                                {{ old('category') == 'esports' ? 'selected' : '' }}>
                                                                                                E-Sports</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="address"
                                                                                            class="block text-gray-700 font-semibold mb-2">Address</label>
                                                                                        <input type="text"
                                                                                            id="address" name="address"
                                                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                            placeholder="Enter address"
                                                                                            value="{{ $turf->address }}">
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="shift"
                                                                                            class="block text-gray-700 font-semibold mb-2">Shift</label>
                                                                                        <select id="shift-menu"
                                                                                            name="shift"
                                                                                            class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300 text-3xl lg:text-base py-6 lg:py-2">
                                                                                            <option value=""
                                                                                                disabled>Please select a
                                                                                                shift</option>
                                                                                            <option value="day"
                                                                                                {{ old('shift') == 'day' ? 'selected' : '' }}>
                                                                                                Day</option>
                                                                                            <option value="evening"
                                                                                                {{ old('shift') == 'evening' ? 'selected' : '' }}>
                                                                                                Evening</option>
                                                                                            <option value="night"
                                                                                                {{ old('shift') == 'night' ? 'selected' : '' }}>
                                                                                                Night</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label
                                                                                            class="block text-gray-700 font-semibold mb-2">Set
                                                                                            Slot</label>
                                                                                        <div class="flex">
                                                                                            <div>
                                                                                                <label for="startTime"
                                                                                                    class="">From</label>
                                                                                                <input type="time"
                                                                                                    id="startTime"
                                                                                                    name="open_time"
                                                                                                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                                    placeholder="--:-- --"
                                                                                                    value="{{ $turf->open_time }}">
                                                                                            </div>
                                                                                            <span class="mx-2"></span>
                                                                                            <div>
                                                                                                <label for="endTime"
                                                                                                    class="">To</label>
                                                                                                <input type="time"
                                                                                                    id="endTime"
                                                                                                    name="close_time"
                                                                                                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                                    placeholder="--:-- --"
                                                                                                    value="{{ $turf->close_time }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="price"
                                                                                            class="block text-gray-700 font-semibold mb-2">Price
                                                                                            (BDT)
                                                                                        </label>
                                                                                        <input type="text"
                                                                                            id="price" name="price"
                                                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                            placeholder="Enter price"
                                                                                            value="{{ $turf->price }}">
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="turfImage"
                                                                                            class="block text-gray-700 font-semibold mb-2">Select
                                                                                            Turf Image</label>
                                                                                        <input type="file"
                                                                                            id="turfImage" name="f_image"
                                                                                            class="hidden">
                                                                                        <label for="turfImage"
                                                                                            class="cursor-pointer border border-gray-300 px-3 py-2 rounded-md">Select
                                                                                            a Image</label>
                                                                                    </div>
                                                                                    <!-- Add more form fields as needed -->
                                                                                    <div
                                                                                        class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                                        <button type="submit"
                                                                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                            Save
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm modal-close"
                                                                                            data-modal-id="modal-{{ $turf->id }}">
                                                                                            Cancel
                                                                                        </button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div id="evening" class="tab-content space-y-6 lg:space-y-4">
                                                @foreach ($turfs->where('shift', 'evening') as $turf)
                                                    <div
                                                        class="flex flex-col py-4 space-y-4 bg-white border-t-[1px] border-b-[1px] border-gray-300 overflow-hidden">
                                                        <div class="flex justify-between px-6 text-white">
                                                            <h2
                                                                class="text-5xl lg:text-base xl:font-semibold text-gray-800  max-xl:font-semibold font-sans mb-4 lg:mb-0">
                                                                {{ $turf->turf_name }}
                                                            </h2>
                                                        </div>
                                                        <div class="flex justify-between px-6">
                                                            <div
                                                                class="flex flex-col lg:flex-row lg:items-center lg:space-x-8 space-y-3 lg:space-y-0">
                                                                <div class="flex items-center">
                                                                    {{-- 00B737 --}}
                                                                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                                    <svg width="17px" height="auto"
                                                                        viewBox="0 0 24 24" class="w-8 lg:w-auto"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5 21V3.90002C5 3.90002 5.875 3 8.5 3C11.125 3 12.875 4.8 15.5 4.8C18.125 4.8 19 3.9 19 3.9V14.7C19 14.7 18.125 15.6 15.5 15.6C12.875 15.6 11.125 13.8 8.5 13.8C5.875 13.8 5 14.7 5 14.7"
                                                                            stroke="#00B737" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                    <p
                                                                        class="text-gray-600 text-[30px] lg:text-base font-sans">
                                                                        <span class="ml-1">#{{ $turf->id }}</span>
                                                                    </p>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <img src="icons/sports-icon.svg"
                                                                        class="w-6 lg:w-4 lg:h-4" alt="">
                                                                    <p
                                                                        class="text-gray-600 text-[15px] lg:text-base font-sans max-xl:text-4xl capitalize">
                                                                        <span class="ml-1">{{ $turf->category }}</span>
                                                                    </p>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <p
                                                                        class="text-white rounded-full lg:rounded-md px-2 py-1 bg-[#00B737] text-[30px] lg:text-[15px] lg:text-sm font-sans">
                                                                        <span
                                                                            class="ml-1">{{ \Carbon\Carbon::createFromFormat('H:i:s', $turf->open_time)->format('h:i A') . ' - ' . \Carbon\Carbon::createFromFormat('H:i:s', $turf->close_time)->format('h:i A') }}
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <p
                                                                    class="max-xl:text-3xl text-[30px] lg:text-base font-sans bg-white text-green-600 rounded-full px-3">
                                                                    {{ $turf->price }} BDT
                                                                </p>

                                                            </div>
                                                            <div class="flex items-center space-x-2">
                                                                <!-- Delete form -->
                                                                <form action="{{ route('deleteTurf', $turf->id) }}"
                                                                    method="POST" class="inline-block"
                                                                    onsubmit="return confirmDelete()">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="text-sm bg-red-600 text-white font-sans rounded-full px-3 py-0.5">Delete</button>
                                                                </form>
                                                                <button
                                                                    class="text-sm bg-indigo-500 hover:bg-indigo-600 text-white rounded-full px-3 py-0.5 transition duration-300"
                                                                    data-modal-target="modal-{{ $turf->id }}">Update</button>

                                                                <a href="{{ url('turf') . '/' . $turf->id }}"
                                                                    class="text-sm bg-slate-400/20 text-gray-600 font-sans rounded-full px-3 py-0.5">Details</a>
                                                            </div>

                                                            <!-- Modal Overlay -->
                                                            <div class="fixed z-10 inset-0 overflow-y-auto hidden"
                                                                id="modal-{{ $turf->id }}"
                                                                aria-labelledby="modal-title-{{ $turf->id }}"
                                                                role="dialog" aria-modal="true">
                                                                <div
                                                                    class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                                        aria-hidden="true"></div>
                                                                    <span
                                                                        class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                                        aria-hidden="true">&#8203;</span>
                                                                    <div
                                                                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                                        <div
                                                                            class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                            <div class="sm:flex sm:items-start">
                                                                                <div
                                                                                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                                    <svg class="h-6 w-6 text-indigo-600"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" viewBox="0 0 24 24"
                                                                                        stroke="currentColor"
                                                                                        aria-hidden="true">
                                                                                        <path stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="2"
                                                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                                    </svg>
                                                                                </div>
                                                                                <div
                                                                                    class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                                    <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                                        id="modal-title-{{ $turf->id }}">
                                                                                        Edit Turf
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="flex relative">
                                                                                    <div id="updateToast"
                                                                                        class="absolute top-0 -left-20">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mt-4">
                                                                                <form id="updateTurfForm"
                                                                                    enctype="multipart/form-data">
                                                                                    <div class="mb-4">
                                                                                        <label for="turfName"
                                                                                            class="block text-gray-700 font-semibold mb-2">Turf
                                                                                            Name</label>
                                                                                        <input type="text"
                                                                                            id="turfName"
                                                                                            name="turf_name"
                                                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                            placeholder="Enter turf name"
                                                                                            value="{{ $turf->turf_name }}">
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="turfDescription"
                                                                                            class="block text-gray-700 font-semibold mb-2">Description</label>
                                                                                        <textarea id="turfDescription" name="description"
                                                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                            rows="3" placeholder="Write short description about your turf">{{ $turf->description }}</textarea>
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="sportsCategory"
                                                                                            class="block text-gray-700 font-semibold mb-2">Sports
                                                                                            Category</label>
                                                                                        <select id="sportsCategory"
                                                                                            name="category"
                                                                                            class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300 text-3xl lg:text-base py-6 lg:py-2">
                                                                                            <option value=""
                                                                                                disabled>Please select a
                                                                                                category</option>
                                                                                            <option value="football"
                                                                                                {{ old('category') == 'football' ? 'selected' : '' }}>
                                                                                                Football</option>
                                                                                            <option value="cricket"
                                                                                                {{ old('category') == 'cricket' ? 'selected' : '' }}>
                                                                                                Cricket</option>
                                                                                            <option value="badminton"
                                                                                                {{ old('category') == 'badminton' ? 'selected' : '' }}>
                                                                                                Badminton</option>
                                                                                            <option value="basketball"
                                                                                                {{ old('category') == 'basketball' ? 'selected' : '' }}>
                                                                                                Basketball</option>
                                                                                            <option value="swimming"
                                                                                                {{ old('category') == 'swimming' ? 'selected' : '' }}>
                                                                                                Swimming</option>
                                                                                            <option value="pool"
                                                                                                {{ old('category') == 'pool' ? 'selected' : '' }}>
                                                                                                Pool</option>
                                                                                            <option value="paintball"
                                                                                                {{ old('category') == 'paintball' ? 'selected' : '' }}>
                                                                                                Paintball</option>
                                                                                            <option value="esports"
                                                                                                {{ old('category') == 'esports' ? 'selected' : '' }}>
                                                                                                E-Sports</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="address"
                                                                                            class="block text-gray-700 font-semibold mb-2">Address</label>
                                                                                        <input type="text"
                                                                                            id="address" name="address"
                                                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                            placeholder="Enter address"
                                                                                            value="{{ $turf->address }}">
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="shift"
                                                                                            class="block text-gray-700 font-semibold mb-2">Shift</label>
                                                                                        <select id="shift-menu"
                                                                                            name="shift"
                                                                                            class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300 text-3xl lg:text-base py-6 lg:py-2">
                                                                                            <option value=""
                                                                                                disabled>Please select a
                                                                                                shift</option>
                                                                                            <option value="day"
                                                                                                {{ old('shift') == 'day' ? 'selected' : '' }}>
                                                                                                Day</option>
                                                                                            <option value="evening"
                                                                                                {{ old('shift') == 'evening' ? 'selected' : '' }}>
                                                                                                Evening</option>
                                                                                            <option value="night"
                                                                                                {{ old('shift') == 'night' ? 'selected' : '' }}>
                                                                                                Night</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label
                                                                                            class="block text-gray-700 font-semibold mb-2">Set
                                                                                            Slot</label>
                                                                                        <div class="flex">
                                                                                            <div>
                                                                                                <label for="startTime"
                                                                                                    class="">From</label>
                                                                                                <input type="time"
                                                                                                    id="startTime"
                                                                                                    name="open_time"
                                                                                                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                                    placeholder="--:-- --"
                                                                                                    value="{{ $turf->open_time }}">
                                                                                            </div>
                                                                                            <span class="mx-2"></span>
                                                                                            <div>
                                                                                                <label for="endTime"
                                                                                                    class="">To</label>
                                                                                                <input type="time"
                                                                                                    id="endTime"
                                                                                                    name="close_time"
                                                                                                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                                    placeholder="--:-- --"
                                                                                                    value="{{ $turf->close_time }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="price"
                                                                                            class="block text-gray-700 font-semibold mb-2">Price
                                                                                            (BDT)
                                                                                        </label>
                                                                                        <input type="text"
                                                                                            id="price" name="price"
                                                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                            placeholder="Enter price"
                                                                                            value="{{ $turf->price }}">
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="turfImage"
                                                                                            class="block text-gray-700 font-semibold mb-2">Select
                                                                                            Turf Image</label>
                                                                                        <input type="file"
                                                                                            id="turfImage" name="f_image"
                                                                                            class="hidden">
                                                                                        <label for="turfImage"
                                                                                            class="cursor-pointer border border-gray-300 px-3 py-2 rounded-md">Select
                                                                                            a Image</label>
                                                                                    </div>
                                                                                    <!-- Add more form fields as needed -->
                                                                                    <div
                                                                                        class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                                        <button type="submit"
                                                                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                            Save
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm modal-close"
                                                                                            data-modal-id="modal-{{ $turf->id }}">
                                                                                            Cancel
                                                                                        </button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div id="night" class="tab-content space-y-6 lg:space-y-4">
                                                @foreach ($turfs->where('shift', 'night') as $turf)
                                                    <div
                                                        class="flex flex-col py-4 space-y-4 bg-white border-t-[1px] border-b-[1px] border-gray-300 overflow-hidden">
                                                        <div class="flex justify-between px-6 text-white">
                                                            <h2
                                                                class="text-5xl lg:text-base xl:font-semibold text-gray-800  max-xl:font-semibold font-sans mb-4 lg:mb-0">
                                                                {{ $turf->turf_name }}
                                                            </h2>
                                                        </div>
                                                        <div class="flex justify-between px-6">
                                                            <div
                                                                class="flex flex-col lg:flex-row lg:items-center lg:space-x-8 space-y-3 lg:space-y-0">
                                                                <div class="flex items-center">
                                                                    {{-- 00B737 --}}
                                                                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                                    <svg width="17px" height="auto"
                                                                        viewBox="0 0 24 24" class="w-8 lg:w-auto"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5 21V3.90002C5 3.90002 5.875 3 8.5 3C11.125 3 12.875 4.8 15.5 4.8C18.125 4.8 19 3.9 19 3.9V14.7C19 14.7 18.125 15.6 15.5 15.6C12.875 15.6 11.125 13.8 8.5 13.8C5.875 13.8 5 14.7 5 14.7"
                                                                            stroke="#00B737" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                    <p
                                                                        class="text-gray-600 text-[30px] lg:text-base font-sans">
                                                                        <span class="ml-1">#{{ $turf->id }}</span>
                                                                    </p>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <img src="icons/sports-icon.svg"
                                                                        class="w-6 lg:w-4 lg:h-4" alt="">
                                                                    <p
                                                                        class="text-gray-600 text-[15px] lg:text-base font-sans max-xl:text-4xl capitalize">
                                                                        <span class="ml-1">{{ $turf->category }}</span>
                                                                    </p>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <p
                                                                        class="text-white rounded-full lg:rounded-md px-2 py-1 bg-[#00B737] text-[30px] lg:text-[15px] lg:text-sm font-sans">
                                                                        <span
                                                                            class="ml-1">{{ \Carbon\Carbon::createFromFormat('H:i:s', $turf->open_time)->format('h:i A') . ' - ' . \Carbon\Carbon::createFromFormat('H:i:s', $turf->close_time)->format('h:i A') }}
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <p
                                                                    class="max-xl:text-3xl text-[30px] lg:text-base font-sans bg-white text-green-600 rounded-full px-3">
                                                                    {{ $turf->price }} BDT
                                                                </p>

                                                            </div>
                                                            <div class="flex items-center space-x-2">
                                                                <!-- Delete form -->
                                                                <form action="{{ route('deleteTurf', $turf->id) }}"
                                                                    method="POST" class="inline-block"
                                                                    onsubmit="return confirmDelete()">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="text-sm bg-red-600 text-white font-sans rounded-full px-3 py-0.5">Delete</button>
                                                                </form>
                                                                <button
                                                                    class="text-sm bg-indigo-500 hover:bg-indigo-600 text-white rounded-full px-3 py-0.5 transition duration-300"
                                                                    data-modal-target="modal-{{ $turf->id }}">Update</button>

                                                                <a href="{{ url('turf') . '/' . $turf->id }}"
                                                                    class="text-sm bg-slate-400/20 text-gray-600 font-sans rounded-full px-3 py-0.5">Details</a>
                                                            </div>

                                                            <!-- Modal Overlay -->
                                                            <div class="fixed z-10 inset-0 overflow-y-auto hidden"
                                                                id="modal-{{ $turf->id }}"
                                                                aria-labelledby="modal-title-{{ $turf->id }}"
                                                                role="dialog" aria-modal="true">
                                                                <div
                                                                    class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                                        aria-hidden="true"></div>
                                                                    <span
                                                                        class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                                        aria-hidden="true">&#8203;</span>
                                                                    <div
                                                                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                                        <div
                                                                            class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                            <div class="sm:flex sm:items-start">
                                                                                <div
                                                                                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                                    <svg class="h-6 w-6 text-indigo-600"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" viewBox="0 0 24 24"
                                                                                        stroke="currentColor"
                                                                                        aria-hidden="true">
                                                                                        <path stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="2"
                                                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                                    </svg>
                                                                                </div>
                                                                                <div
                                                                                    class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                                    <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                                        id="modal-title-{{ $turf->id }}">
                                                                                        Edit Turf
                                                                                    </h3>
                                                                                </div>
                                                                                <div class="flex relative">
                                                                                    <div id="updateToast"
                                                                                        class="absolute top-0 -left-20">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mt-4">
                                                                                <form id="updateTurfForm"
                                                                                    enctype="multipart/form-data">
                                                                                    <div class="mb-4">
                                                                                        <label for="turfName"
                                                                                            class="block text-gray-700 font-semibold mb-2">Turf
                                                                                            Name</label>
                                                                                        <input type="text"
                                                                                            id="turfName"
                                                                                            name="turf_name"
                                                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                            placeholder="Enter turf name"
                                                                                            value="{{ $turf->turf_name }}">
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="turfDescription"
                                                                                            class="block text-gray-700 font-semibold mb-2">Description</label>
                                                                                        <textarea id="turfDescription" name="description"
                                                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                            rows="3" placeholder="Write short description about your turf">{{ $turf->description }}</textarea>
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="sportsCategory"
                                                                                            class="block text-gray-700 font-semibold mb-2">Sports
                                                                                            Category</label>
                                                                                        <select id="sportsCategory"
                                                                                            name="category"
                                                                                            class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300 text-3xl lg:text-base py-6 lg:py-2">
                                                                                            <option value=""
                                                                                                disabled>Please select a
                                                                                                category</option>
                                                                                            <option value="football"
                                                                                                {{ old('category') == 'football' ? 'selected' : '' }}>
                                                                                                Football</option>
                                                                                            <option value="cricket"
                                                                                                {{ old('category') == 'cricket' ? 'selected' : '' }}>
                                                                                                Cricket</option>
                                                                                            <option value="badminton"
                                                                                                {{ old('category') == 'badminton' ? 'selected' : '' }}>
                                                                                                Badminton</option>
                                                                                            <option value="basketball"
                                                                                                {{ old('category') == 'basketball' ? 'selected' : '' }}>
                                                                                                Basketball</option>
                                                                                            <option value="swimming"
                                                                                                {{ old('category') == 'swimming' ? 'selected' : '' }}>
                                                                                                Swimming</option>
                                                                                            <option value="pool"
                                                                                                {{ old('category') == 'pool' ? 'selected' : '' }}>
                                                                                                Pool</option>
                                                                                            <option value="paintball"
                                                                                                {{ old('category') == 'paintball' ? 'selected' : '' }}>
                                                                                                Paintball</option>
                                                                                            <option value="esports"
                                                                                                {{ old('category') == 'esports' ? 'selected' : '' }}>
                                                                                                E-Sports</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="address"
                                                                                            class="block text-gray-700 font-semibold mb-2">Address</label>
                                                                                        <input type="text"
                                                                                            id="address" name="address"
                                                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                            placeholder="Enter address"
                                                                                            value="{{ $turf->address }}">
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="shift"
                                                                                            class="block text-gray-700 font-semibold mb-2">Shift</label>
                                                                                        <select id="shift-menu"
                                                                                            name="shift"
                                                                                            class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300 text-3xl lg:text-base py-6 lg:py-2">
                                                                                            <option value=""
                                                                                                disabled>Please select a
                                                                                                shift</option>
                                                                                            <option value="day"
                                                                                                {{ old('shift') == 'day' ? 'selected' : '' }}>
                                                                                                Day</option>
                                                                                            <option value="evening"
                                                                                                {{ old('shift') == 'evening' ? 'selected' : '' }}>
                                                                                                Evening</option>
                                                                                            <option value="night"
                                                                                                {{ old('shift') == 'night' ? 'selected' : '' }}>
                                                                                                Night</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label
                                                                                            class="block text-gray-700 font-semibold mb-2">Set
                                                                                            Slot</label>
                                                                                        <div class="flex">
                                                                                            <div>
                                                                                                <label for="startTime"
                                                                                                    class="">From</label>
                                                                                                <input type="time"
                                                                                                    id="startTime"
                                                                                                    name="open_time"
                                                                                                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                                    placeholder="--:-- --"
                                                                                                    value="{{ $turf->open_time }}">
                                                                                            </div>
                                                                                            <span class="mx-2"></span>
                                                                                            <div>
                                                                                                <label for="endTime"
                                                                                                    class="">To</label>
                                                                                                <input type="time"
                                                                                                    id="endTime"
                                                                                                    name="close_time"
                                                                                                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                                    placeholder="--:-- --"
                                                                                                    value="{{ $turf->close_time }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="price"
                                                                                            class="block text-gray-700 font-semibold mb-2">Price
                                                                                            (BDT)
                                                                                        </label>
                                                                                        <input type="text"
                                                                                            id="price" name="price"
                                                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                                                                            placeholder="Enter price"
                                                                                            value="{{ $turf->price }}">
                                                                                    </div>
                                                                                    <div class="mb-4">
                                                                                        <label for="turfImage"
                                                                                            class="block text-gray-700 font-semibold mb-2">Select
                                                                                            Turf Image</label>
                                                                                        <input type="file"
                                                                                            id="turfImage" name="f_image"
                                                                                            class="hidden">
                                                                                        <label for="turfImage"
                                                                                            class="cursor-pointer border border-gray-300 px-3 py-2 rounded-md">Select
                                                                                            a Image</label>
                                                                                    </div>
                                                                                    <!-- Add more form fields as needed -->
                                                                                    <div
                                                                                        class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                                        <button type="submit"
                                                                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                            Save
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm modal-close"
                                                                                            data-modal-id="modal-{{ $turf->id }}">
                                                                                            Cancel
                                                                                        </button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </section>
                                        <section class="space-y-4 max-xl:space-y-8">

                                        </section>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                    <!-- Add Turf Form -->
                    <section>

                        <div class="flex relative">
                            <div id="toast-section" class="absolute -top-44 right-0">

                            </div>
                        </div>

                        <div class="bg-white rounded-xl py-9 px-8 h-[80vh] overflow-y-scroll font-sans">
                            <div class="">
                                <h2 id="addTurf"
                                    class="text-5xl lg:text-lg text-gray-700 lg:bg-gray-900/10 lg:py-2 lg:rounded-full font-semibold mb-6 text-center">
                                    Add Turf
                                </h2>
                                <form id="addTurfForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label
                                            class="block text-3xl lg:text-base text-gray-700 font-bold lg:font-semibold mb-2"
                                            for="turfName">Turf
                                            Name</label>
                                        <input
                                            class="appearance-none border-gray-200 border rounded w-full lg:py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-3xl lg:text-base py-6"
                                            id="turfName" name="turf_name" type="text" placeholder="Enter Turf name"
                                            value="{{ old('turf_name') }}">
                                        <span class="text-3xl lg:text-sm text-red-600 mt-1 error-message"
                                            id="error-turf_name"></span>
                                    </div>
                                    <div class="mb-4">
                                        <label
                                            class="block text-3xl lg:text-base text-gray-700 font-bold lg:font-semibold mb-2"
                                            for="turfName">Description</label>
                                        <textarea
                                            class="appearance-none border-gray-200 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-24 text-3xl lg:text-base"
                                            id="turfName" type="text" name="description" placeholder="Write short description about your turf"
                                            value="{{ old('description') }}"></textarea>
                                        <span class="text-3xl lg:text-sm text-red-600 mt-1 error-message"
                                            id="error-description"></span>
                                    </div>
                                    <div class="mb-4">
                                        <label
                                            class="block text-3xl lg:text-base text-gray-700 font-bold lg:font-semibold mb-2">Sports
                                            Category</label>
                                        <select id="" name="category"
                                            class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300 text-3xl lg:text-base py-6 lg:py-2"
                                            value="{{ old('category') }}">
                                            <option value="" disabled selected>Please select a category
                                            </option>
                                            <option value="football">Football</option>
                                            <option value="cricket">Cricket</option>
                                            <option value="badminton">Badminton</option>
                                            <option value="basketball">Basketball</option>
                                            <option value="swimming">Swiming</option>
                                            <option value="pool">Pool</option>
                                            <option value="paintball">Paintball</option>
                                            <option value="esports">E-Sports</option>
                                        </select>
                                        <span class="text-3xl lg:text-sm text-red-600 mt-1 error-message"
                                            id="error-category"></span>
                                    </div>
                                    <div class=" space-y-10 lg:space-y-0">
                                        <p
                                            class="block text-3xl lg:text-base text-gray-700 font-bold lg:font-semibold mb-2 lg:mb-0">
                                            Select
                                            Location</p>
                                        <div class="grid grid-cols-2 gap-6">
                                            <div class="mb-4">
                                                <label for="division-menu" class="block mb-2"></label>
                                                <select id="division-menu" name="division"
                                                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300 text-3xl lg:text-base py-6 lg:py-2"
                                                    value="{{ old('division') }}">
                                                    <option value="" disabled selected>Please select a division
                                                    </option>
                                                    <option value="barisal">Barisal</option>
                                                    <option value="chittagong">Chittagong</option>
                                                    <option value="dhaka">Dhaka</option>
                                                    <option value="khulna">Khulna</option>
                                                    <option value="mymensingh">Mymensingh</option>
                                                    <option value="rajshahi">Rajshahi</option>
                                                    <option value="rangpur">Rangpur</option>
                                                    <option value="sylhet">Sylhet</option>
                                                </select>
                                                <span class="text-3xl lg:text-sm text-red-600 mt-1 error-message"
                                                    id="error-division"></span>
                                            </div>
                                            <div class="mb-4">
                                                <label for="district-menu" class="block mb-2"></label>
                                                <select id="district-menu" name="district"
                                                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300 text-3xl lg:text-base py-6 lg:py-2"
                                                    disabled value="{{ old('district') }}">
                                                    <option value="" disabled selected>Please select a division first
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pb-4">
                                            <label
                                                class="block text-3xl lg:text-base text-gray-700 font-bold lg:font-semibold mb-2"
                                                for="turfName">Address</label>
                                            <input
                                                class="appearance-none border-gray-200 border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline px-3 text-3xl lg:text-base lg:py-2"
                                                id="address" name="address" type="text" placeholder="Enter address"
                                                value="{{ old('address') }}">
                                        </div>
                                        <div class="pb-4">
                                            <label for="shift-menu"
                                                class="block mb-2 text-3xl lg:text-base text-gray-700 font-bold lg:font-semibold">Shift</label>
                                            <select id="shift-menu" name="shift"
                                                class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300 text-3xl lg:text-base py-6 lg:py-2"
                                                value="{{ old('shift') }}">
                                                <option value="" disabled selected>Please select a shift</option>
                                                <option value="day">Day</option>
                                                <option value="evening">Evening</option>
                                                <option value="night">Night</option>
                                            </select>
                                            <span class="text-3xl lg:text-sm text-red-600 mt-1 error-message"
                                                id="error-shift"></span>
                                        </div>
                                        <!-- Schedule Timer -->
                                        <div class="pb-4">
                                            <label for=""
                                                class="block mb-4 text-3xl lg:text-base text-gray-700 font-bold lg:font-semibold">Set
                                                Slot</label>
                                            <div class="flex items-center space-x-4">
                                                <!-- Start Time -->
                                                <div class="flex items-center space-x-2">
                                                    <span
                                                        class=" text-3xl lg:text-base text-gray-700 font-bold lg:font-semibold">From</span>
                                                    <input type="time" name="open_time"
                                                        class="block w-32 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-3xl lg:text-base py-6 lg:py-2"
                                                        value="{{ old('open_time') }}">
                                                    <span class="text-3xl lg:text-sm text-red-600 mt-1 error-message"
                                                        id="error-open_time"></span>
                                                </div>
                                                <!-- End Time -->
                                                <div class="flex items-center space-x-2">
                                                    <span
                                                        class=" text-3xl lg:text-base text-gray-700 font-bold lg:font-semibold">To</span>
                                                    <input type="time" name="close_time"
                                                        class="block w-32 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-3xl lg:text-base py-6 lg:py-2"
                                                        value="{{ old('close_time') }}">
                                                    <span class="text-3xl lg:text-sm text-red-600 mt-1 error-message"
                                                        id="error-close_time"></span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="pb-6">
                                            <label for="price"
                                                class="block bold text-gray-700 mb-2 text-3xl lg:text-base lg:font-semibold">Price</label>
                                            <div class="relative">
                                                <input type="text" id="price" name="price" inputmode="numeric"
                                                    pattern="[0-9]*"
                                                    class="block w-full pr-10 lg:py-2 px-4 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-3xl lg:text-base py-6"
                                                    placeholder="Enter price"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                    value="{{ old('price') }}">
                                                <span
                                                    class="absolute inset-y-0 right-0 flex items-center pr-3 px-4 text-gray-400">BDT</span>
                                            </div>
                                            <span class="text-3xl lg:text-sm text-red-600 mt-1 error-message"
                                                id="error-price"></span>
                                        </div>

                                        <div class="bg-gray-100 rounded-lg p-6">
                                            <h3 class=" font-bold text-gray-800 mb-4 text-3xl lg:text-base ">
                                                Facilities</h3>
                                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                                <div class="">
                                                    <input type="checkbox" id="cctv" name="facilities[]"
                                                        value="cctv" class="hidden" onclick="toggleOption(this)">
                                                    <label for="cctv"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span class="text-gray-800 text-2xl lg:text-base font-semibold">CC
                                                            TV</span>
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="checkbox" id="wifi" name="facilities[]"
                                                        value="wifi" class="hidden" onclick="toggleOption(this)">
                                                    <label for="wifi"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span
                                                            class="text-gray-800 text-2xl lg:text-base font-semibold">Free
                                                            Wi-Fi</span>
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="checkbox" id="drinking-water" name="facilities[]"
                                                        value="drinking-water" class="hidden"
                                                        onclick="toggleOption(this)">
                                                    <label for="drinking-water"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span
                                                            class="text-gray-800 text-2xl lg:text-base font-semibold">Drinking
                                                            Water</span>
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="checkbox" id="restrooms" name="facilities[]"
                                                        value="restrooms" class="hidden" onclick="toggleOption(this)">
                                                    <label for="restrooms"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span
                                                            class="text-gray-800 text-2xl lg:text-base font-semibold">Restrooms</span>
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="checkbox" id="locker-rooms" name="facilities[]"
                                                        value="locker-rooms" class="hidden" onclick="toggleOption(this)">
                                                    <label for="locker-rooms"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span
                                                            class="text-gray-800 text-2xl lg:text-base font-semibold">Locker
                                                            Rooms</span>
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="checkbox" id="first-aid" name="facilities[]"
                                                        value="first-aid" class="hidden" onclick="toggleOption(this)">
                                                    <label for="first-aid"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span
                                                            class="text-gray-800 text-2xl lg:text-base font-semibold">First
                                                            Aid Equipment</span>
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="checkbox" id="renta-fields" name="facilities[]"
                                                        value="renta-fields" class="hidden" onclick="toggleOption(this)">
                                                    <label for="renta-fields"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span class="text-gray-800 text-2xl lg:text-base font-semibold">
                                                            Outdoor Fields</span>
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="checkbox" id="spectator-seating" name="facilities[]"
                                                        value="spectator-seating" class="hidden"
                                                        onclick="toggleOption(this)">
                                                    <label for="spectator-seating"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span
                                                            class="text-gray-800 text-2xl lg:text-base font-semibold">Spectator
                                                            Seating</span>
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="checkbox" id="parking" name="facilities[]"
                                                        value="parking" class="hidden" onclick="toggleOption(this)">
                                                    <label for="parking"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span
                                                            class="text-gray-800 text-2xl lg:text-base font-semibold">Parking</span>
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="checkbox" id="cafeteria" name="facilities[]"
                                                        value="cafeteria" class="hidden" onclick="toggleOption(this)">
                                                    <label for="cafeteria"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span
                                                            class="text-gray-800 text-2xl lg:text-base font-semibold">Cafeteria</span>
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="checkbox" id="training-facilities" name="facilities[]"
                                                        value="training-facilities" class="hidden"
                                                        onclick="toggleOption(this)">
                                                    <label for="training-facilities"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span
                                                            class="text-gray-800 text-2xl lg:text-base font-semibold">Training
                                                            Facilities</span>
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="checkbox" id="meeting-rooms" name="facilities[]"
                                                        value="meeting-rooms" class="hidden"
                                                        onclick="toggleOption(this)">
                                                    <label for="meeting-rooms"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span
                                                            class="text-gray-800 text-2xl lg:text-base font-semibold">Meeting
                                                            Rooms</span>
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <input type="checkbox" id="accessibility-features"
                                                        name="facilities[]" value="accessibility-features" class="hidden"
                                                        onclick="toggleOption(this)">
                                                    <label for="accessibility-features"
                                                        class="flex items-center cursor-pointer rounded-full lg:px-4 lg:py-1 bg-white">
                                                        <span class="mr-2 text-gray-500 text-xl">+</span>
                                                        <span
                                                            class="text-gray-800 text-2xl lg:text-base font-semibold">Accessibility
                                                            Features</span>
                                                    </label>
                                                </div>
                                            </div>



                                        </div>

                                        <!-- Select Featured Image -->
                                        <div class="pb-6 pt-4 relative">
                                            <label for="featured_image"
                                                class="block font-bold text-gray-700 mb-2 text-3xl lg:text-base">Select
                                                Turf
                                                Image</label>
                                            <label for="featured_image"
                                                class="w-[300px] h-[150px] bg-gray-200 border-2 border-dashed border-gray-400 rounded-md cursor-pointer hover:bg-gray-300 relative flex items-center justify-center">
                                                <input type="file" id="featured_image" name="f_image"
                                                    value="{{ old('f_image') }}" accept="image/*"
                                                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                                <img src="#" alt="Featured Image Preview"
                                                    class="absolute inset-0 w-full h-full object-cover rounded-md hidden"
                                                    id="featured_image_preview">
                                                <div class="absolute inset-0 flex items-center justify-center">
                                                    <svg class="w-8 h-8 text-gray-500" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M21 15v4a2 2 0 01-2 2H5a2 2 01-2-2v-4" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17 21v-6a2 2 0 00-2-2h-4a2 2 0 00-2 2v6" />
                                                    </svg>
                                                    <span class="ml-2 text-sm text-gray-500">Select a Image</span>
                                                </div>
                                                <button type="button"
                                                    class="absolute top-2 right-2 px-2 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 hidden"
                                                    id="remove_featured_image">Remove</button>
                                            </label>
                                            <span class="text-3xl lg:text-sm text-red-600 mt-1 error-message"
                                                id="error-f_image"></span>
                                        </div>


                                        <!-- Image Gallery -->
                                        {{-- <div class="mb-6">
                                            <label for="image_gallery"
                                                class="block text-sm font-medium text-gray-700 mb-2">Image Gallery</label>
                                            <div class="flex flex-wrap -mx-2" id="gallery_container">
                                                <!-- Image Upload Input -->
                                                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 px-2 mb-4">
                                                    <div class="image-container relative">
                                                        <input type="file" id="image_gallery" name="image_gallery[]"
                                                            accept="image/*" class="hidden">
                                                        <label for="image_gallery"
                                                            class="block bg-gray-200 border-2 border-dashed border-gray-400 rounded-md cursor-pointer hover:bg-gray-300 flex items-center justify-center">
                                                            <svg class="w-8 h-8 text-gray-500" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M12 4v16m8-8H4"></path>
                                                            </svg>
                                                        </label>
                                                        <span class="file-label hidden">Selected</span>
                                                        <span
                                                            class="close-icon hidden absolute top-0 right-0 cursor-pointer bg-gray-200 px-1">
                                                            &times;</span>
                                                    </div>
                                                </div>
                                                <!-- Add more input boxes as needed for additional images -->
                                            </div>
                                        </div> --}}


                                        <button
                                            class="bg-green-500 text-white text-3xl lg:text-base px-4 py-2 rounded-md hover:bg-green-600 transition duration-300 mt-4"
                                            type="submit">Publish</button>
                                </form>
                                {{-- <div id="message"></div> --}}
                            </div>
                        </div>
                    </section>

                </main>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/turfAdmin.js"></script>
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete the Turf?');
        }

        document.querySelectorAll('[data-modal-target]').forEach(function(element) {
            element.addEventListener('click', function() {
                const modalId = this.getAttribute('data-modal-target');
                const modal = document.getElementById(modalId);
                modal.classList.remove('hidden');
            });
        });

        document.querySelectorAll('.modal-close').forEach(function(element) {
            element.addEventListener('click', function() {
                const modalId = this.getAttribute('data-modal-id');
                const modal = document.getElementById(modalId);
                modal.classList.add('hidden');
            });
        });

        document.querySelectorAll('[id^="modal-"]').forEach(function(element) {
            element.addEventListener('click', function(event) {
                if (event.target === this) {
                    this.classList.add('hidden');
                }
            });
        });

        // Ajax turf add
        $(document).ready(function() {
            $('#addTurfForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var formData = new FormData(this);
                formData.append('_token', '{{ csrf_token() }}'); // Add CSRF token

                $.ajax({
                    type: 'POST',
                    url: '{{ route('add-turf') }}', // Use the route helper to get the correct URL
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Show notification
                        var toastSection = document.getElementById('toast-section');
                        var notification = document.createElement("div");
                        notification.className =
                            "notification-toast bg-white shadow-lg rounded-lg w-96 mx-auto relative transform opacity-0 transition-all duration-300";
                        notification.innerHTML =
                            `
                <div class="flex items-center justify-between px-5 py-3">
                  <div class="flex items-center">
                    <div class="rounded-full bg-green-500 p-0.5">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                      <p class="text-lg font-semibold text-gray-800">Success!</p>
                      <p class="text-gray-600">Turf added successfully</p>
                    </div>
                  </div>
                  <button id="closeButton" class="text-gray-500 hover:text-gray-800">
                    <svg class="w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                  </button>
                </div>
                <div id="progress" class="progress bg-gradient-to-r from-green-500 to-blue-500 h-1 mt-1"></div>`;

                        toastSection.appendChild(notification);

                        // Trigger reflow to apply initial transform and opacity
                        notification.offsetHeight;

                        // Fade in notification
                        notification.classList.remove('opacity-0', 'translate-y-0');
                        notification.classList.add('opacity-100', 'translate-y-full');

                        // Set progress bar width
                        var progress = 100;
                        var progressBar = notification.querySelector("#progress");
                        var progressInterval;
                        var closeButton = notification.querySelector("#closeButton");
                        var hoverTime = 0;
                        var remainingTime = 5000;

                        function startProgress() {
                            progressInterval = setInterval(function() {
                                progress -= 1;
                                progressBar.style.width = progress + "%";
                                remainingTime -= 50;
                                if (progress >= 100) {
                                    clearInterval(progressInterval);
                                    closeNotification();
                                }
                            }, 50);
                        }

                        startProgress();

                        // Pause progress on hover
                        notification.addEventListener("mouseenter", function() {
                            hoverTime = new Date().getTime();
                            clearInterval(progressInterval);
                        });

                        // Resume progress on hover out
                        notification.addEventListener("mouseleave", function() {
                            var currentTime = new Date().getTime();
                            remainingTime -= (currentTime - hoverTime);
                            startProgress();
                        });

                        // Close notification on button click
                        closeButton.addEventListener("click", function() {
                            closeNotification();
                        });

                        // Close notification after 3 seconds if not hovered
                        setTimeout(function() {
                            if (hoverTime === 0) {
                                closeNotification();
                            }
                        }, remainingTime);

                        // Function to close notification
                        function closeNotification() {
                            // Fade out notification
                            notification.classList.remove('opacity-100', 'translate-y-0');
                            notification.classList.add('opacity-0', 'translate-y-full');

                            // Remove notification after transition
                            setTimeout(function() {
                                notification.remove();
                                clearInterval(progressInterval);
                            }, 300); // Duration of the transition effect
                        }
                        // Reset the form
                        $('#addTurfForm')[0].reset();
                    },

                    error: function(xhr, status, error) {
                        // Clear any previous error messages
                        $('.error-message').html('');

                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $('#error-' + key).html(value[0]);
                        });

                        $('#message').html(
                            '<div class="text-red-600">Please correct the errors and try again.</div>'
                        );
                    }
                });
            });
        });

        $(document).ready(function() {
            $('#updateTurfForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var formData = new FormData(this);
                formData.append('_token', '{{ csrf_token() }}'); // Add CSRF token

                $.ajax({
                    type: 'POST',
                    url: '{{ route('update-turf', ['id' => ':turfId']) }}'.replace(':turfId',
                        turfId), // Use the route helper to get the correct URL
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Show notification
                        var toastSection = document.getElementById('updateToast');
                        var notification = document.createElement("div");
                        notification.className =
                            "notification-toast bg-white shadow-lg rounded-lg w-96 mx-auto relative transform opacity-0 transition-all duration-300";
                        notification.innerHTML =
                            `
                <div class="flex items-center justify-between px-5 py-3">
                  <div class="flex items-center">
                    <div class="rounded-full bg-green-500 p-0.5">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                      <p class="text-lg font-semibold text-gray-800">Success!</p>
                      <p class="text-gray-600">Turf updated successfully</p>
                    </div>
                  </div>
                  <button id="closeButton" class="text-gray-500 hover:text-gray-800">
                    <svg class="w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                  </button>
                </div>
                <div id="progress" class="progress bg-gradient-to-r from-green-500 to-blue-500 h-1 mt-1"></div>`;

                        toastSection.appendChild(notification);

                        // Trigger reflow to apply initial transform and opacity
                        notification.offsetHeight;

                        // Fade in notification
                        notification.classList.remove('opacity-0', 'translate-y-0');
                        notification.classList.add('opacity-100', 'translate-y-full');

                        // Set progress bar width
                        var progress = 100;
                        var progressBar = notification.querySelector("#progress");
                        var progressInterval;
                        var closeButton = notification.querySelector("#closeButton");
                        var hoverTime = 0;
                        var remainingTime = 5000;

                        function startProgress() {
                            progressInterval = setInterval(function() {
                                progress -= 1;
                                progressBar.style.width = progress + "%";
                                remainingTime -= 50;
                                if (progress >= 100) {
                                    clearInterval(progressInterval);
                                    closeNotification();
                                }
                            }, 50);
                        }

                        startProgress();

                        // Pause progress on hover
                        notification.addEventListener("mouseenter", function() {
                            hoverTime = new Date().getTime();
                            clearInterval(progressInterval);
                        });

                        // Resume progress on hover out
                        notification.addEventListener("mouseleave", function() {
                            var currentTime = new Date().getTime();
                            remainingTime -= (currentTime - hoverTime);
                            startProgress();
                        });

                        // Close notification on button click
                        closeButton.addEventListener("click", function() {
                            closeNotification();
                        });

                        // Close notification after 3 seconds if not hovered
                        setTimeout(function() {
                            if (hoverTime === 0) {
                                closeNotification();
                            }
                        }, remainingTime);

                        // Function to close notification
                        function closeNotification() {
                            // Fade out notification
                            notification.classList.remove('opacity-100', 'translate-y-0');
                            notification.classList.add('opacity-0', 'translate-y-full');

                            // Remove notification after transition
                            setTimeout(function() {
                                notification.remove();
                                clearInterval(progressInterval);
                            }, 300); // Duration of the transition effect
                        }
                        // Reset the form
                        $('#addTurfForm')[0].reset();
                    },

                    error: function(xhr, status, error) {
                        // Clear any previous error messages
                        $('.error-message').html('');

                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $('#error-' + key).html(value[0]);
                        });

                        $('#message').html(
                            '<div class="text-red-600">Please correct the errors and try again.</div>'
                        );
                    }
                });
            });
        });

        // Location Selection
        const districts = {
            barisal: ["Barguna", "Barisal", "Bhola", "Jhalokati", "Patuakhali", "Pirojpur"],
            chittagong: ["Bandarban", "Brahmanbaria", "Chandpur", "Chittagong", "Comilla", "Cox's Bazar", "Feni",
                "Khagrachhari", "Lakshmipur", "Noakhali", "Rangamati"
            ],
            dhaka: ["Dhaka", "Faridpur", "Gazipur", "Gopalganj", "Kishoreganj", "Madaripur", "Manikganj", "Munshiganj",
                "Narayanganj", "Narsingdi", "Rajbari", "Shariatpur", "Tangail"
            ],
            khulna: ["Bagerhat", "Chuadanga", "Jessore", "Jhenaidah", "Khulna", "Kushtia", "Magura", "Meherpur",
                "Narail", "Satkhira"
            ],
            mymensingh: ["Jamalpur", "Mymensingh", "Netrokona", "Sherpur"],
            rajshahi: ["Bogra", "Joypurhat", "Naogaon", "Natore", "Nawabganj", "Pabna", "Rajshahi", "Sirajganj"],
            rangpur: ["Dinajpur", "Gaibandha", "Kurigram", "Lalmonirhat", "Nilphamari", "Panchagarh", "Rangpur",
                "Thakurgaon"
            ],
            sylhet: ["Habiganj", "Maulvibazar", "Sunamganj", "Sylhet"]
        };

        const divisionMenu = document.getElementById("division-menu");
        const districtMenu = document.getElementById("district-menu");

        function populateDistrictMenu() {
            const selectedDivision = divisionMenu.value;
            districtMenu.innerHTML = "";

            if (selectedDivision === "") {
                // Disable district menu if no division is selected
                districtMenu.disabled = true;
                // Add a default "Please select a division first" option
                const optionElement = document.createElement("option");
                optionElement.value = "";
                optionElement.textContent = "Please select a division first";
                districtMenu.appendChild(optionElement);
            } else {
                // Enable district menu if a division is selected
                districtMenu.disabled = false;
                districts[selectedDivision].forEach(district => {
                    const optionElement = document.createElement("option");
                    optionElement.value = district;
                    optionElement.textContent = district;
                    districtMenu.appendChild(optionElement);
                });
            }
            // Trigger a reflow to ensure transition effect takes place
            void districtMenu.offsetWidth;
            districtMenu.classList.remove('opacity-0');
        }

        populateDistrictMenu();
        divisionMenu.addEventListener("change", function() {
            districtMenu.classList.add('opacity-0');
            populateDistrictMenu();
        });
        // Handle file input change event for featured image
        document.getElementById('featured_image').addEventListener('change', function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('featured_image_preview').src = e.target.result;
                document.getElementById('featured_image_preview').classList.remove('hidden');
                document.getElementById('remove_featured_image').classList.remove('hidden');
            }

            reader.readAsDataURL(file);
        });

        // Handle file input change event for featured image
        document.getElementById('featured_image').addEventListener('change', function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('featured_image_preview').src = e.target.result;
                document.getElementById('featured_image_preview').classList.remove('hidden');
                document.getElementById('remove_featured_image').classList.remove('hidden');
            }

            reader.readAsDataURL(file);
        });

        // Handle remove featured image button click event
        document.getElementById('remove_featured_image').addEventListener('click', function() {
            document.getElementById('featured_image').value = '';
            document.getElementById('featured_image_preview').src = '';
            document.getElementById('featured_image_preview').classList.add('hidden');
            document.getElementById('remove_featured_image').classList.add('hidden');
        });

        // Handle file input change event for image gallery
        document.getElementById('image_gallery').addEventListener('change', function() {
            const files = this.files;
            const galleryContainer = document.getElementById('gallery_container');
            galleryContainer.innerHTML = '';

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'preview-image m-2 w-20 h-20';
                    galleryContainer.appendChild(img);
                }

                reader.readAsDataURL(file);
            }
        });


        // Toast Notification

        // @if (session('message'))
        //     // Show notification
        //     var toastSection = document.getElementById('toast-section');
        //     var notification = document.createElement("div");
        //     notification.className =
        //         "notification-toast bg-white shadow-lg rounded-lg w-96 mx-auto relative transform opacity-0 transition-all duration-300";
        //     notification.innerHTML =
        //         `
    //     <div class="flex items-center justify-between px-5 py-3">
    //       <div class="flex items-center">
    //         <div class="rounded-full bg-green-500 p-0.5">
    //             <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    //             <path d="M5 13l4 4L19 7"></path>
    //             </svg>
    //         </div>
    //         <div class="ml-4">
    //           <p class="text-lg font-semibold text-gray-800">Success!</p>
    //           <p class="text-gray-600">Turf added successfully</p>
    //         </div>
    //       </div>
    //       <button id="closeButton" class="text-gray-500 hover:text-gray-800">
    //         <svg class="w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
    //           <path d="M6 18L18 6M6 6l12 12"></path>
    //         </svg>
    //       </button>
    //     </div>
    //     <div id="progress" class="progress bg-gradient-to-r from-green-500 to-blue-500 h-1 mt-1"></div>`;

        //     toastSection.appendChild(notification);

        //     // Trigger reflow to apply initial transform and opacity
        //     notification.offsetHeight;

        //     // Fade in notification
        //     notification.classList.remove('opacity-0', 'translate-y-0');
        //     notification.classList.add('opacity-100', 'translate-y-full');

        //     // Set progress bar width
        //     var progress = 100;
        //     var progressBar = notification.querySelector("#progress");
        //     var progressInterval;
        //     var closeButton = notification.querySelector("#closeButton");
        //     var hoverTime = 0;
        //     var remainingTime = 5000;

        //     function startProgress() {
        //         progressInterval = setInterval(function() {
        //             progress -= 1;
        //             progressBar.style.width = progress + "%";
        //             remainingTime -= 50;
        //             if (progress >= 100) {
        //                 clearInterval(progressInterval);
        //                 closeNotification();
        //             }
        //         }, 50);
        //     }

        //     startProgress();

        //     // Pause progress on hover
        //     notification.addEventListener("mouseenter", function() {
        //         hoverTime = new Date().getTime();
        //         clearInterval(progressInterval);
        //     });

        //     // Resume progress on hover out
        //     notification.addEventListener("mouseleave", function() {
        //         var currentTime = new Date().getTime();
        //         remainingTime -= (currentTime - hoverTime);
        //         startProgress();
        //     });

        //     // Close notification on button click
        //     closeButton.addEventListener("click", function() {
        //         closeNotification();
        //     });

        //     // Close notification after 3 seconds if not hovered
        //     setTimeout(function() {
        //         if (hoverTime === 0) {
        //             closeNotification();
        //         }
        //     }, remainingTime);

        //     // Function to close notification
        //     function closeNotification() {
        //         // Fade out notification
        //         notification.classList.remove('opacity-100', 'translate-y-0');
        //         notification.classList.add('opacity-0', 'translate-y-full');

        //         // Remove notification after transition
        //         setTimeout(function() {
        //             notification.remove();
        //             clearInterval(progressInterval);
        //         }, 300); // Duration of the transition effect
        //     }
        // @endif

        // Modal
        // const updateModal = document.getElementById('updateModal');
        // const overlay = document.getElementById('overlay');
        // const updateButton = document.getElementById('updateButton');
        // const closeModal = document.getElementById('closeModal');
        // const modalContent = updateModal.querySelector('.bg-white');

        // // Open the modal and show the overlay when the "Update" button is clicked
        // updateButton.addEventListener('click', () => {
        //     updateModal.classList.remove('hidden');
        //     overlay.classList.remove('hidden');
        //     setTimeout(() => {
        //         modalContent.classList.remove('scale-0');
        //         overlay.classList.remove('opacity-0');
        //     }, 50);
        // });

        // // Close the modal and hide the overlay when the close icon is clicked or when clicking outside of the modal
        // closeModal.addEventListener('click', () => {
        //     modalContent.classList.add('scale-0');
        //     overlay.classList.add('opacity-0');
        //     setTimeout(() => {
        //         updateModal.classList.add('hidden');
        //         overlay.classList.add('hidden');
        //     }, 300);
        // });

        // window.addEventListener('click', (event) => {
        //     if (event.target === overlay) {
        //         modalContent.classList.add('scale-0');
        //         overlay.classList.add('opacity-0');
        //         setTimeout(() => {
        //             updateModal.classList.add('hidden');
        //             overlay.classList.add('hidden');
        //         }, 300);
        //     }
        // });

        //checkbox
        function toggleOption(checkbox) {
            const icon = checkbox.nextElementSibling.querySelector('span:first-child');
            const text = checkbox.nextElementSibling.querySelector('span:last-child');
            const label = checkbox.nextElementSibling;

            if (checkbox.checked) {
                icon.classList.add('text-white');
                icon.classList.remove('text-gray-500');
                text.classList.add('text-white');
                text.classList.remove('text-gray-800');
                label.classList.add('bg-gray-800');
                label.classList.remove('bg-white');
                icon.textContent = '✕';
            } else {
                icon.classList.remove('text-white');
                icon.classList.add('text-gray-500');
                text.classList.remove('text-white');
                text.classList.add('text-gray-800');
                label.classList.remove('bg-gray-800');
                label.classList.add('bg-white');
                icon.textContent = '+';
            }
        }
    </script>
@endsection
@endsection
