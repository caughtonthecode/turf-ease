@extends('turfAdmin.dashboard')

@section('sidebar-content')
    {{-- Sidebar Big Screen --}}
    <div class="collapsed">
        <ul class="mt-7 flex flex-col items-center space-y-4">
            <li
                class="flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out shadow-one sidebar-icon">
                <a href="{{ url('dashboard') }}"
                    class="py-2.5 flex max-xl:justify-center  justify-start items-center w-full px-14 side-middle text-base">
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
                class="flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-colors duration-300 ease-in-out  sidebar-icon">
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

    </div>
@section('content-section')
    <div class="flex-grow pt-8 pl-10 max-xl:px-8 p-6 bg-gray-100 overflow-y-scroll">
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
                                        class="flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out shadow-one sidebar-icon">
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
                                        class="flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-colors duration-300 ease-in-out  sidebar-icon">
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

        <div class="flex max-xl:flex-col mt-10 max-xl:mt-[135px]">
            <!-- First Column Starts Here -->
            <div class="space-y-5 max-xl:space-y-8 w-1/3 max-xl:w-full">
                <div class="max-xl:grid max-xl:grid-cols-2 lg:space-y-5 max-xl:space-x-6">
                    <!-- Online Booking Start-->
                    <div
                        class="p-6 max-xl:p-10 flex justify-between bg-white rounded-xl max-xl:rounded-3xl transition-all ease-in-out hover:shadow max-xl:shadow-md max-xl:hover:shadow-lg">
                        <div>
                            <p class="text-[#00b737] text-2xl max-xl:text-5xl lg:text-3xl font-semibold">10</p>
                            <p class="pt-4 text-gray-700 max-xl:text-4xl">Online Booking</p>
                        </div>
                        <div class="">
                            <svg width="80px" height="auto" viewBox="0 0 24 24" fill="none"
                                class="-mr-5 lg:-mr-3 lg:w-12 lg:h-auto" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 18H13M9.2 21H14.8C15.9201 21 16.4802 21 16.908 20.782C17.2843 20.5903 17.5903 20.2843 17.782 19.908C18 19.4802 18 18.9201 18 17.8V6.2C18 5.0799 18 4.51984 17.782 4.09202C17.5903 3.71569 17.2843 3.40973 16.908 3.21799C16.4802 3 15.9201 3 14.8 3H9.2C8.0799 3 7.51984 3 7.09202 3.21799C6.71569 3.40973 6.40973 3.71569 6.21799 4.09202C6 4.51984 6 5.07989 6 6.2V17.8C6 18.9201 6 19.4802 6.21799 19.908C6.40973 20.2843 6.71569 20.5903 7.09202 20.782C7.51984 21 8.07989 21 9.2 21Z"
                                    stroke="rgb(219 219 219)" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <!-- Online Booking End-->

                    <!-- Manual Booking -->
                    <div
                        class="p-6 max-xl:p-10 flex justify-between bg-white rounded-xl max-xl:rounded-3xl transition-all ease-in-out hover:shadow max-xl:shadow-md max-xl:hover:shadow-lg">
                        <div>
                            <p class="text-[#00b737] text-2xl lg:text-3xl max-xl:text-5xl font-semibold">5</p>
                            <p class="pt-4 text-gray-700 max-xl:text-4xl">Manual Booking</p>
                        </div>
                        <div class="">
                            <svg width="80px" height="auto" viewBox="0 0 24 24" fill="none"
                                class="-mr-5 lg:-mr-2 lg:w-[43px] lg:h-auto" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.859 16.4999L12.3975 14.0385L11.6459 14.7902C10.8764 15.5597 10.4916 15.9444 10.0781 15.8536C9.66452 15.7628 9.47641 15.2522 9.10019 14.231L7.84544 10.8253C7.09492 8.78816 6.71966 7.7696 7.24463 7.24463C7.7696 6.71966 8.78816 7.09492 10.8253 7.84544L14.231 9.10019C15.2522 9.47641 15.7628 9.66451 15.8536 10.0781C15.9444 10.4916 15.5597 10.8764 14.7902 11.6459L14.0385 12.3975L16.4999 14.859C16.7548 15.1138 16.8822 15.2413 16.9411 15.3834C17.0196 15.573 17.0196 15.7859 16.9411 15.9755C16.8822 16.1176 16.7548 16.2451 16.4999 16.4999C16.2451 16.7548 16.1176 16.8822 15.9755 16.9411C15.7859 17.0196 15.573 17.0196 15.3834 16.9411C15.2413 16.8822 15.1138 16.7548 14.859 16.4999Z"
                                    stroke="rgb(219 219 219)" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path opacity="0.5"
                                    d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                    stroke="rgb(219 219 219)" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                    <!-- Manual Booking End -->
                </div>

                <!-- Account Overview Starts Here -->
                <div
                    class="bg-white rounded-xl max-xl:rounded-3xl p-6 max-xl:p-12 max-xl:shadow-md max-xl:hover:shadow-lg">
                    <span class="flex justify-between">
                        <p class="text-xl lg:text-3xl text-gray-800 font-semibold max-xl:text-5xl font-sans">Account
                            Overview</p>
                        <svg width="80px" height="auto" viewBox="0 0 24 24" version="1.1"
                            class="-mr-5 lg:-mr-3 lg:w-12 lg:h-auto" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Overview</title>
                            <g id="Overview" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="Container" x="0" y="0" width="24" height="24">

                                </rect>
                                <path
                                    d="M19,10.5714286 L19,18 C19,19.1045695 18.1045695,20 17,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,7 C4,5.8954305 4.8954305,5 6,5 L13.4285714,5 L13.4285714,5"
                                    id="shape-1" stroke="rgb(219 219 219)" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-dasharray="0,0">

                                </path>
                                <path
                                    d="M18,7 C18.5522847,7 19,6.55228475 19,6 C19,5.44771525 18.5522847,5 18,5 C17.4477153,5 17,5.44771525 17,6 C17,6.55228475 17.4477153,7 18,7 Z"
                                    id="shape-2" stroke="rgb(219 219 219)" stroke-width="2" stroke-linecap="round"
                                    stroke-dasharray="0,0">

                                </path>
                                <path d="M8,15 L11,11 L13.000781,13 L16,9" id="shape-3" stroke="rgb(219 219 219)"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-dasharray="0,0">

                                </path>
                            </g>
                        </svg>
                    </span>
                    <p class="text-gray-400 pb-4 max-xl:text-4xl max-xl:mb-10 max-xl:-mt-10">dropdown</p>
                    <div class="flex justify-between items-center">
                        <div class="">
                            <h2 class="text-xl text-gray-800 font-semibold max-xl:text-4xl max-xl:mb-3">224500</h2>
                            <p class="pb-4 text-[#00b737] max-xl:text-4xl max-xl:mb-4">Incoming</p>
                            <h2 class="text-xl text-gray-800 font-semibold max-xl:text-4xl max-xl:mb-3">22500</h2>
                            <p class="text-orange-600 max-xl:text-4xl">Outgoing</p>
                        </div>
                        <div class="rounded-full w-28 max-xl:w-72">
                            <img src="icons/chart-icon.svg" alt="">
                        </div>
                    </div>

                </div>
                <!-- Account Overview End Here -->

                <!-- Receiveable Ammount Starts Here -->
                <div
                    class="p-6 max-xl:p-10 bg-white rounded-xl max-xl:rounded-3xl max-xl:shadow-md max-xl:hover:shadow-lg">
                    <div class="flex justify-between">
                        <div class="">
                            <p class="text-xl text-gray-700 font-semibold max-xl:text-4xl">24500 BDT</p>
                            <p class="pt-2 text-gray-700 max-xl:text-4xl max-xl:mb-4">Receivable Wallet Amount</p>
                            <p class="pt-4 text-[#00b737] max-xl:text-4xl">Last Withdraw <span> 14/03/2024 </span></p>
                        </div>
                        <span class="">
                            <svg width="70px" height="auto" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.5008 14.1502H16.5098M19 4.00098H6.2C5.0799 4.00098 4.51984 4.00098 4.09202 4.21896C3.71569 4.41071 3.40973 4.71667 3.21799 5.093C3 5.52082 3 6.08087 3 7.20098V16.801C3 17.9211 3 18.4811 3.21799 18.909C3.40973 19.2853 3.71569 19.5912 4.09202 19.783C4.51984 20.001 5.07989 20.001 6.2 20.001H17.8C18.9201 20.001 19.4802 20.001 19.908 19.783C20.2843 19.5912 20.5903 19.2853 20.782 18.909C21 18.4811 21 17.9211 21 16.801V11.201C21 10.0809 21 9.52082 20.782 9.093C20.5903 8.71667 20.2843 8.41071 19.908 8.21896C19.4802 8.00098 18.9201 8.00098 17.8 8.00098H7M16.9508 14.1502C16.9508 14.3987 16.7493 14.6002 16.5008 14.6002C16.2523 14.6002 16.0508 14.3987 16.0508 14.1502C16.0508 13.9017 16.2523 13.7002 16.5008 13.7002C16.7493 13.7002 16.9508 13.9017 16.9508 14.1502Z"
                                    stroke="rgb(219 219 219)" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </div>
                <!-- Receiveable Ammount End Here -->
            </div>
            <!-- First Column End Here -->

            <!-- Second Column Starts Here -->
            <!-- Booking Overview Section -->
            <div
                class="bg-white p-10 ml-10 w-2/3 max-xl:w-full max-xl:ml-0 max-xl:mt-10 rounded-xl max-xl:rounded-3xl h-[80vh] max-xl:shadow-md max-xl:hover:shadow-lg">
                <div class="h-[18%] max-xl:h-auto max-xl:mb-8">
                    <div class="flex max-xl:flex-col justify-between">
                        <div class="flex max-xl:flex-col max-xl:space-y-5 items-center">
                            <p class="text-gray-700 text-lg font-semibold mr-4 max-xl:text-5xl">Booking Overview</p>
                            <div class="relative inline-block">
                                <select
                                    class="bg-yellow-300 text-gray-700 border-0 rounded-full px-4 py-0.5 pr-8 focus:outline-none focus:ring-0 hover:ring-0 cursor-pointer max-xl:text-4xl max-xl:px-8 max-xl:py-3">
                                    <option class="max-xl:text-sm p-0" value="">This Month</option>
                                    <option class="max-xl:text-sm p-0" value="">Last Month</option>
                                    <option class="max-xl:text-sm p-0" value="">This Quarter</option>
                                    <option class="max-xl:text-sm p-0" value="">Last Quarter</option>
                                    <option class="max-xl:text-sm p-0" value="">This Year</option>
                                    <option class="max-xl:text-sm p-0" value="">Last Year</option>
                                </select>
                            </div>

                        </div>
                        <div class="flex items-center max-xl:hidden">
                            <a href="{{ url('view-turf') }}"
                                class="border-[1px] border-[#00b737] text-[#00b737] px-4 py-0.5 hover:bg-[#00b737] hover:text-white transition-colors rounded-full mr-4 flex items-center max-xl:text-3xl max-xl:px-6">Add
                                New
                            </a>
                        </div>
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <div
                            class="mt-6 max-xl:bg-white shadow-md max-xl:py-2 lg:py-1 lg:px-2 rounded-full lg:shadow-none max-xl:mt-8 border-[1px] border-[#a3a2a257] max-xl:w-[91%]">
                            <nav class="flex max-xl:justify-center space-x-8">
                                <a href="#day"
                                    class="text-sm max-xl:text-4xl text-gray-600 hover:text-green-600 font-semibold max-xl:font-normal py-2 px-4 max-xl:px-16 max-xl:py-5 rounded-full bg-gray-100">Day</a>
                                <a href="#evening"
                                    class="text-sm max-xl:text-4xl text-gray-600 hover:text-green-600 font-semibold max-xl:font-normal py-2 px-4 max-xl:px-16 max-xl:py-5 rounded-full">Evening</a>
                                <a href="#night"
                                    class="text-sm max-xl:text-4xl text-gray-600 hover:text-green-600 font-semibold max-xl:font-normal py-2 px-4 max-xl:px-16 max-xl:py-5 rounded-full">Night</a>
                            </nav>
                        </div>
                    </div>
                </div>

                <div
                    class="overflow-y-scroll hide-scrollbar scroll-container transition: max-height 0.5s ease h-[84%] max-xl:h-[80%]">
                    <div class="">
                        <section class="space-y-4 max-xl:space-y-8">
                            <div id="day" class="tab-content space-y-6 lg:space-y-4">
                                @foreach ($bookings->where('shift', 'day') as $booking)
                                    <div
                                        class="flex flex-col py-4 space-y-4 bg-white border-t-[1px] border-b-[1px] border-gray-300 overflow-hidden">
                                        <div class="flex justify-between px-6 text-white">
                                            <h2
                                                class="text-5xl lg:text-base xl:font-semibold text-gray-800  max-xl:font-semibold font-sans mb-4 lg:mb-0">
                                                {{ $booking->turf_name }}
                                            </h2>
                                            @if ($booking->payment_status == 'pending')
                                                <p
                                                    class="bg-orange-100 text-orange-800 text-[20px] lg:text-xs font-medium px-2.5 py-0 lg:py-1 rounded-full">
                                                    {{ $booking->payment_status }}
                                                </p>
                                            @elseif ($booking->payment_status == 'confirmed')
                                                <p
                                                    class="bg-green-100 text-green-800 text-[20px] lg:text-xs font-medium px-2.5 py-0 rounded-full">
                                                    {{ $booking->payment_status }}
                                                </p>
                                            @endif

                                        </div>
                                        <div class="flex justify-between px-6">
                                            <div
                                                class="flex flex-col lg:flex-row lg:items-center lg:space-x-8 space-y-3 lg:space-y-0">
                                                <div class="flex items-center">
                                                    {{-- 00B737 --}}
                                                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg width="17px" height="auto" viewBox="0 0 24 24"
                                                        class="w-8 lg:w-auto" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 21V3.90002C5 3.90002 5.875 3 8.5 3C11.125 3 12.875 4.8 15.5 4.8C18.125 4.8 19 3.9 19 3.9V14.7C19 14.7 18.125 15.6 15.5 15.6C12.875 15.6 11.125 13.8 8.5 13.8C5.875 13.8 5 14.7 5 14.7"
                                                            stroke="#00B737" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                    <p class="text-gray-600 text-[30px] lg:text-base font-sans">
                                                        <span class="ml-1">#{{ $booking->booking_id }}</span>
                                                    </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img src="icons/sports-icon.svg" class="w-6 lg:w-4 lg:h-4"
                                                        alt="">
                                                    <p
                                                        class="text-gray-600 text-[15px] lg:text-base font-sans max-xl:text-4xl capitalize">
                                                        <span class="ml-1">{{ $booking->category }}</span>
                                                    </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-white rounded-full lg:rounded-md px-2 py-1 bg-[#00B737] text-[30px] lg:text-[15px] lg:text-sm font-sans">
                                                        <span class="ml-1">{{ $booking->booked_slot }}</span>
                                                    </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-gray-600 text-[30px] lg:text-base font-semibold font-sans">
                                                        <span class="ml-1">{{ $booking->user_name }}</span>
                                                    </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                        fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11 18H13M9.2 21H14.8C15.9201 21 16.4802 21 16.908 20.782C17.2843 20.5903 17.5903 20.2843 17.782 19.908C18 19.4802 18 18.9201 18 17.8V6.2C18 5.0799 18 4.51984 17.782 4.09202C17.5903 3.71569 17.2843 3.40973 16.908 3.21799C16.4802 3 15.9201 3 14.8 3H9.2C8.0799 3 7.51984 3 7.09202 3.21799C6.71569 3.40973 6.40973 3.71569 6.21799 4.09202C6 4.51984 6 5.07989 6 6.2V17.8C6 18.9201 6 19.4802 6.21799 19.908C6.40973 20.2843 6.71569 20.5903 7.09202 20.782C7.51984 21 8.07989 21 9.2 21Z"
                                                            stroke="rgb(219 219 219)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <p class="text-gray-600 text-[30px] lg:text-base font-sans">
                                                        <span class="ml-1">{{ $booking->phone }}</span>
                                                    </p>
                                                </div>

                                                <p
                                                    class="max-xl:text-3xl text-[30px] lg:text-base font-sans bg-white text-green-600 rounded-full px-3">
                                                    {{ $booking->payment_amount }} BDT
                                                </p>

                                            </div>
                                            <div class="">
                                                <button
                                                    class="text-sm bg-slate-400/20 text-gray-600 font-sans rounded-full px-3 py-0.5">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id="evening" class="tab-content space-y-6 lg:space-y-4">
                                @foreach ($bookings->where('shift', 'evening') as $booking)
                                    <div
                                        class="flex flex-col py-4 space-y-4 bg-white border-t-[1px] border-b-[1px] border-gray-300 overflow-hidden">
                                        <div class="flex justify-between px-6 text-white">
                                            <h2
                                                class="text-5xl lg:text-base xl:font-semibold text-gray-800  max-xl:font-semibold font-sans mb-4 lg:mb-0">
                                                {{ $booking->turf_name }}
                                            </h2>
                                            @if ($booking->payment_status == 'pending')
                                                <p
                                                    class="bg-orange-100 text-orange-800 text-[20px] lg:text-xs font-medium px-2.5 py-0 lg:py-1 rounded-full">
                                                    {{ $booking->payment_status }}
                                                </p>
                                            @elseif ($booking->payment_status == 'confirmed')
                                                <p
                                                    class="bg-green-100 text-green-800 text-[20px] lg:text-xs font-medium px-2.5 py-0 rounded-full">
                                                    {{ $booking->payment_status }}
                                                </p>
                                            @endif

                                        </div>
                                        <div class="flex justify-between px-6">
                                            <div
                                                class="flex flex-col lg:flex-row lg:items-center lg:space-x-8 space-y-3 lg:space-y-0">
                                                <div class="flex items-center">
                                                    {{-- 00B737 --}}
                                                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg width="17px" height="auto" viewBox="0 0 24 24"
                                                        class="w-8 lg:w-auto" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 21V3.90002C5 3.90002 5.875 3 8.5 3C11.125 3 12.875 4.8 15.5 4.8C18.125 4.8 19 3.9 19 3.9V14.7C19 14.7 18.125 15.6 15.5 15.6C12.875 15.6 11.125 13.8 8.5 13.8C5.875 13.8 5 14.7 5 14.7"
                                                            stroke="#00B737" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                    <p class="text-gray-600 text-[30px] lg:text-base font-sans">
                                                        <span class="ml-1">#{{ $booking->booking_id }}</span>
                                                    </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img src="icons/sports-icon.svg" class="w-6 lg:w-4 lg:h-4"
                                                        alt="">
                                                    <p
                                                        class="text-gray-600 text-[15px] lg:text-base font-sans max-xl:text-4xl capitalize">
                                                        <span class="ml-1">{{ $booking->category }}</span>
                                                    </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-white rounded-full lg:rounded-md px-2 py-1 bg-[#00B737] text-[30px] lg:text-[15px] lg:text-sm font-sans">
                                                        <span class="ml-1">{{ $booking->booked_slot }}</span>
                                                    </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-gray-600 text-[30px] lg:text-base font-semibold font-sans">
                                                        <span class="ml-1">{{ $booking->user_name }}</span>
                                                    </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                        fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11 18H13M9.2 21H14.8C15.9201 21 16.4802 21 16.908 20.782C17.2843 20.5903 17.5903 20.2843 17.782 19.908C18 19.4802 18 18.9201 18 17.8V6.2C18 5.0799 18 4.51984 17.782 4.09202C17.5903 3.71569 17.2843 3.40973 16.908 3.21799C16.4802 3 15.9201 3 14.8 3H9.2C8.0799 3 7.51984 3 7.09202 3.21799C6.71569 3.40973 6.40973 3.71569 6.21799 4.09202C6 4.51984 6 5.07989 6 6.2V17.8C6 18.9201 6 19.4802 6.21799 19.908C6.40973 20.2843 6.71569 20.5903 7.09202 20.782C7.51984 21 8.07989 21 9.2 21Z"
                                                            stroke="rgb(219 219 219)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <p class="text-gray-600 text-[30px] lg:text-base font-sans">
                                                        <span class="ml-1">{{ $booking->phone }}</span>
                                                    </p>
                                                </div>

                                                <p
                                                    class="max-xl:text-3xl text-[30px] lg:text-base font-sans bg-white text-green-600 rounded-full px-3">
                                                    {{ $booking->payment_amount }} BDT
                                                </p>

                                            </div>
                                            <div class="">
                                                <button
                                                    class="text-sm bg-slate-400/20 text-gray-600 font-sans rounded-full px-3 py-0.5">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id="night" class="tab-content space-y-6 lg:space-y-4">
                                @foreach ($bookings->where('shift', 'night') as $booking)
                                    <div
                                        class="flex flex-col py-4 space-y-4 bg-white border-t-[1px] border-b-[1px] border-gray-300 overflow-hidden">
                                        <div class="flex justify-between px-6 text-white">
                                            <h2
                                                class="text-5xl lg:text-base xl:font-semibold text-gray-800  max-xl:font-semibold font-sans mb-4 lg:mb-0">
                                                {{ $booking->turf_name }}
                                            </h2>
                                            @if ($booking->payment_status == 'pending')
                                                <p
                                                    class="bg-orange-100 text-orange-800 text-[20px] lg:text-xs font-medium px-2.5 py-0 lg:py-1 rounded-full">
                                                    {{ $booking->payment_status }}
                                                </p>
                                            @elseif ($booking->payment_status == 'confirmed')
                                                <p
                                                    class="bg-green-100 text-green-800 text-[20px] lg:text-xs font-medium px-2.5 py-0 rounded-full">
                                                    {{ $booking->payment_status }}
                                                </p>
                                            @endif

                                        </div>
                                        <div class="flex justify-between px-6">
                                            <div
                                                class="flex flex-col lg:flex-row lg:items-center lg:space-x-8 space-y-3 lg:space-y-0">
                                                <div class="flex items-center">
                                                    {{-- 00B737 --}}
                                                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg width="17px" height="auto" viewBox="0 0 24 24"
                                                        class="w-8 lg:w-auto" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 21V3.90002C5 3.90002 5.875 3 8.5 3C11.125 3 12.875 4.8 15.5 4.8C18.125 4.8 19 3.9 19 3.9V14.7C19 14.7 18.125 15.6 15.5 15.6C12.875 15.6 11.125 13.8 8.5 13.8C5.875 13.8 5 14.7 5 14.7"
                                                            stroke="#00B737" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                    <p class="text-gray-600 text-[30px] lg:text-base font-sans">
                                                        <span class="ml-1">#{{ $booking->booking_id }}</span>
                                                    </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img src="icons/sports-icon.svg" class="w-6 lg:w-4 lg:h-4"
                                                        alt="">
                                                    <p
                                                        class="text-gray-600 text-[15px] lg:text-base font-sans max-xl:text-4xl capitalize">
                                                        <span class="ml-1">{{ $booking->category }}</span>
                                                    </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-white rounded-full lg:rounded-md px-2 py-1 bg-[#00B737] text-[30px] lg:text-[15px] lg:text-sm font-sans">
                                                        <span class="ml-1">{{ $booking->booked_slot }}</span>
                                                    </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-gray-600 text-[30px] lg:text-base font-semibold font-sans">
                                                        <span class="ml-1">{{ $booking->user_name }}</span>
                                                    </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                        fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11 18H13M9.2 21H14.8C15.9201 21 16.4802 21 16.908 20.782C17.2843 20.5903 17.5903 20.2843 17.782 19.908C18 19.4802 18 18.9201 18 17.8V6.2C18 5.0799 18 4.51984 17.782 4.09202C17.5903 3.71569 17.2843 3.40973 16.908 3.21799C16.4802 3 15.9201 3 14.8 3H9.2C8.0799 3 7.51984 3 7.09202 3.21799C6.71569 3.40973 6.40973 3.71569 6.21799 4.09202C6 4.51984 6 5.07989 6 6.2V17.8C6 18.9201 6 19.4802 6.21799 19.908C6.40973 20.2843 6.71569 20.5903 7.09202 20.782C7.51984 21 8.07989 21 9.2 21Z"
                                                            stroke="rgb(219 219 219)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <p class="text-gray-600 text-[30px] lg:text-base font-sans">
                                                        <span class="ml-1">{{ $booking->phone }}</span>
                                                    </p>
                                                </div>

                                                <p
                                                    class="max-xl:text-3xl text-[30px] lg:text-base font-sans bg-white text-green-600 rounded-full px-3">
                                                    {{ $booking->payment_amount }} BDT
                                                </p>

                                            </div>
                                            <div class="">
                                                <button
                                                    class="text-sm bg-slate-400/20 text-gray-600 font-sans rounded-full px-3 py-0.5">Details</button>
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
            <!-- Second Column End Here -->
            {{-- Scripts  --}}

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="js/turfAdmin.js"></script>
        </div>
    </div>
    </div>
@endsection
@endsection
