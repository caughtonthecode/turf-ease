@php
    $user = Auth::user();
@endphp

@extends('turfAdmin.dashboard')

@section('sidebar-content')
    <div class="collapsed">
        <ul class="mt-7 flex flex-col items-center space-y-4">
            <li
                class="flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out sidebar-icon">
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
                class="flex justify-center items-center text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-colors duration-300 ease-in-out sidebar-icon bg-[#008728] shadow-one">
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

    <!-- Footer Area -->
    <div class="absolute mx-auto bottom-0 w-full text-center pb-3">
        <p class="text-[#4BF27E] text-sm w-full">TurfEase © 2024. All rights reserved.</p>
    </div>
    </div>

@section('content-section')
    <div class="flex-grow pt-8 p-6 bg-gray-100 overflow-y-scroll">
        <div class="flex justify-between">
            <div class="flex items-center justify-center">
                <div class="sidebar-icon hover:shadow">
                    <button id="toggleButton" class="flex items-center justify-center">
                        <svg width="60px" height="45px"
                            class="rounded-lg p-1.5 shadow-sm bg-white max-xl:w-24 max-xl:h-24" viewBox="0 0 24 24"
                            fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H14M4 18H9" stroke="rgb(127 127 127)" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <h1 class="text-xl max-xl:text-4xl text-black inline-block ml-6 font-semibold">Today,
                    <span class="text-sm max-xl:text-3xl">
                        {{ date('j F, Y') }}
                    </span>
                </h1>
            </div>

            <!-- User Menu -->
            <div class="mr-10 max-xl:mr-0 bg-white pr-6 pl-10 rounded-full max-xl:shadow-md">
                <div class="relative inline-block">
                    <button id="profileDropdownBtn" class="flex items-center">
                        <div class="pr-2 text-sm max-xl:text-4xl text-gray-600 font-semibold">Samin Sadat</div>
                        <img src="img/profile-user.png" class="w-10 h-10 max-xl:w-20 max-xl:h-20" alt="profileDropdownbtn">
                    </button>
                    <div id="profileDropdown"
                        class="absolute hidden -right-5 mt-2 w-48 max-xl:w-full max-xl:px-6 max-xl:space-y-2 bg-white rounded-md shadow-lg z-10">
                        <a href="{{ url('myProfile') }}"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-200 max-xl:text-4xl">Profile</a>
                        <a href="{{ url('') }}"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-200 max-xl:text-4xl">Terms &
                            Policy</a>
                        <form action="{{ url('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200 w-full text-start max-xl:text-4xl">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-x-4">
            <div class="p-6 mt-10 rounded-xl max-xl:w-full flex justify-center">
                <div class="bg-gray-100 max-xl:w-full lg:w-2/3">
                    <!-- Header -->
                    <header
                        class="bg-gradient-to-r from-green-400 to-blue-500 py-6 lg:py-3 text-white text-center rounded-2xl lg:rounded-lg">
                        <h1 class="text-3xl max-xl:text-5xl lg:text-lg font-bold font-Poppins">Update Profile</h1>
                    </header>
                    <div class="flex relative">
                        <div id="toast-section" class="absolute -top-44 right-0">
                        </div>
                    </div>
                    <!-- Main Content -->
                    <main class="py-8">
                        <!-- Profile Card -->
                        <form method="POST" action="{{ route('myProfile.edit') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="bg-white rounded-lg p-6 max-xl:p-8 font-Poppins">
                                <div class="flex flex-col items-center mb-4">
                                    <div class="relative inline-block">
                                        <input type="file" name="pro_pic"
                                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                            accept="image/*" onchange="previewImage(this)">
                                        <img id="profile-pic"
                                            class="h-16 w-16 lg:w-28 lg:h-28 max-xl:h-52 max-xl:w-52 rounded-full mr-4 max-xl:mb-4 bg-red-50 p-3"
                                            src="img/{{ $user->pro_pic }}" alt="Profile Picture">
                                        <div class="absolute top-0 right-0">
                                            <label for="profile-pic" class="cursor-pointer">
                                                <img src="icons/edit-icon.svg" class="lg:w-5 lg:h-5" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-center space-y-2 lg:space-y-0 lg:mt-2">
                                        <h2 class="text-2xl text-gray-600 max-xl:text-5xl font-semibold lg:text-base">
                                            {{ $user->f_name }} {{ $user->l_name }}</h2>
                                        <p class="text-gray-600 max-xl:text-4xl lg:text-sm">{{ $user->email }}</p>
                                    </div>
                                    <div
                                        class="max-xl:flex lg:flex max-xl:justify-center max-xl:items-center max-xl:mt-6 max-xl:space-x-6 glassy-bg rounded-full px-6 py-3 lg:space-x-2 lg:px-2 lg:py-1 lg:mt-2">
                                        {{-- facebook --}}
                                        <a href="{{ json_decode($user->social_links, true)['facebook'] ?? '#' }}"><img
                                                src="icons/facebook-icon.svg" class="lg:w-10 lg:h-10" alt=""></a>
                                        {{-- instagram --}}
                                        <a href="{{ json_decode($user->social_links, true)['instagram'] ?? '' }}"><img
                                                src="icons/instagram-icon.svg" class="lg:w-10 lg:h-10"
                                                alt=""></a>
                                        {{-- twitter --}}
                                        <a href="{{ json_decode($user->social_links, true)['twitter'] ?? '' }}"><img
                                                src="icons/twitter-icon.svg" class="lg:w-10 lg:h-10" alt=""></a>
                                        {{-- linkedin --}}
                                        <a href="{{ json_decode($user->social_links, true)['linkedin'] ?? '' }}"><img
                                                src="icons/linkedin-icon.svg" class="lg:w-10 lg:h-10" alt=""></a>
                                    </div>
                                </div>
                                <div class="max-xl:mt-16">
                                    <div class="space-y-3 lg:flex lg:flex-col items-center">
                                        <h3
                                            class="text-lg font-bold mb-2 max-xl:text-5xl max-xl:text-center max-xl:bg-gray-900/10 max-xl:text-white lg:text-white max-xl:py-6 lg:py-2 lg:px-4 max-xl:rounded-2xl lg:rounded-lg max-xl:mb-10 bg-gradient-to-r from-green-400 to-blue-500 lg:w-2/3">
                                            Personal
                                            Information</h3>

                                        {{-- First Name --}}
                                        <div
                                            class="max-xl:flex max-xl:items-center max-xl:space-x-4 max-xl:mb-6 shadow flex items-center rounded-2xl px-10 bg-slate-100 py-5 lg:py-1 lg:w-2/3 lg:rounded-lg space-x-6">
                                            <label class="text-gray-600 max-xl:text-[40px]">
                                                First Name:
                                            </label>
                                            <input type="text"
                                                class="rounded-lg text-4xl border-[1px] border-green-500 text-gray-600 px-4 lg:text-base"
                                                value="{{ $user->f_name }}" name="f_name">

                                        </div>

                                        {{-- Last Name --}}
                                        <div
                                            class="max-xl:flex max-xl:items-center max-xl:space-x-4 max-xl:mb-6 shadow flex items-center rounded-2xl px-10 bg-slate-100 py-5 lg:py-1 lg:w-2/3 lg:rounded-lg space-x-6">
                                            <label class="text-gray-600 max-xl:text-[40px]">
                                                Last Name:
                                            </label>
                                            <input type="text"
                                                class="rounded-lg text-4xl border-[1px] border-green-500 text-gray-600 px-4 lg:text-base"
                                                value="{{ $user->l_name }}" name="l_name">

                                        </div>
                                        {{-- Email --}}
                                        <div
                                            class="max-xl:flex max-xl:items-center max-xl:space-x-4 max-xl:mb-6 shadow flex items-center rounded-2xl px-10 bg-slate-100 py-5 lg:py-1 lg:w-2/3 lg:rounded-lg space-x-6">
                                            <label class="text-gray-600 max-xl:text-[40px]">
                                                Email:
                                            </label>
                                            <input type="text"
                                                class="rounded-lg text-4xl border-[1px] border-green-500 text-gray-600 px-4 lg:text-base"
                                                value="{{ $user->email }}" name="email">

                                        </div>
                                        {{-- Phone --}}
                                        <div
                                            class="max-xl:flex max-xl:items-center max-xl:space-x-4 max-xl:mb-6 shadow flex items-center rounded-2xl px-10 bg-slate-100 py-5 lg:py-1 lg:w-2/3 lg:rounded-lg space-x-6">
                                            <label class="text-gray-600 max-xl:text-[40px]">
                                                Phone:
                                            </label>
                                            <input type="text"
                                                class="rounded-lg text-4xl border-[1px] border-green-500 text-gray-600 px-4 lg:text-base"
                                                value="{{ $user->phone }}" name="phone">

                                        </div>
                                        {{-- Location --}}
                                        <div
                                            class="max-xl:flex max-xl:items-center max-xl:space-x-4 max-xl:mb-6 shadow flex items-center rounded-2xl px-10 bg-slate-100 py-5 lg:py-1 lg:w-2/3 lg:rounded-lg space-x-6">
                                            <label class="text-gray-600 max-xl:text-[40px]">
                                                Location:
                                            </label>
                                            <input type="text"
                                                class="rounded-lg w-1/2 text-4xl border-[1px] border-green-500 text-gray-600 px-4 lg:text-base"
                                                value="{{ $user->address }}" name="address">

                                        </div>
                                        {{-- Facebook --}}
                                        <div
                                            class="max-xl:flex max-xl:items-center max-xl:space-x-4 max-xl:mb-6 shadow flex items-center rounded-2xl px-10 bg-slate-100 py-5 lg:py-1 lg:w-2/3 lg:rounded-lg space-x-6">
                                            <label class="text-gray-600 max-xl:text-[40px]">
                                                Facebook
                                            </label>
                                            <input type="text" name="social_links[facebook]"
                                                class="rounded-lg w-1/2 text-4xl border-[1px] border-green-500 text-gray-600 px-4 lg:text-base"
                                                value="{{ json_decode($user->social_links, true)['facebook'] ?? '' }}">
                                        </div>
                                        {{-- Instagram --}}
                                        <div
                                            class="max-xl:flex max-xl:items-center max-xl:space-x-4 max-xl:mb-6 shadow flex items-center rounded-2xl px-10 bg-slate-100 py-5 lg:py-1 lg:w-2/3 lg:rounded-lg space-x-6">
                                            <label class="text-gray-600 max-xl:text-[40px]">
                                                Instagram
                                            </label>
                                            <input type="text" name="social_links[instagram]"
                                                class="rounded-lg w-1/2 text-4xl border-[1px] border-green-500 text-gray-600 px-4 lg:text-base"
                                                value="{{ json_decode($user->social_links, true)['instagram'] ?? '' }}">
                                        </div>
                                        {{-- Twitter --}}
                                        <div
                                            class="max-xl:flex max-xl:items-center max-xl:space-x-4 max-xl:mb-6 shadow flex items-center rounded-2xl px-10 bg-slate-100 py-5 lg:py-1 lg:w-2/3 lg:rounded-lg space-x-6">
                                            <label class="text-gray-600 max-xl:text-[40px]">
                                                Twitter
                                            </label>
                                            <input type="text" name="social_links[twitter]"
                                                class="rounded-lg w-1/2 text-4xl border-[1px] border-green-500 text-gray-600 px-4 lg:text-base"
                                                value="{{ json_decode($user->social_links, true)['twitter'] ?? '' }}">
                                        </div>
                                        {{-- Linkedin --}}
                                        <div
                                            class="max-xl:flex max-xl:items-center max-xl:space-x-4 max-xl:mb-6 shadow flex items-center rounded-2xl px-10 bg-slate-100 py-5 lg:py-1 lg:w-2/3 lg:rounded-lg space-x-6">
                                            <label class="text-gray-600 max-xl:text-[40px]">
                                                Linkedin
                                            </label>
                                            <input type="text" name="social_links[linkedin]"
                                                class="rounded-lg w-1/2 text-4xl border-[1px] border-green-500 text-gray-600 px-4 lg:text-base"
                                                value="{{ json_decode($user->social_links, true)['linkedin'] ?? '' }}">
                                        </div>
                                        {{-- Bio --}}
                                        <div
                                            class="mt-6 max-xl:flex max-xl:flex-col max-xl:mb-6 shadow flex items-center rounded-2xl bg-slate-100 py-6 px-10 space-x-6 lg:w-2/3">
                                            <textarea
                                                class="text-gray-600 max-xl:text-[40px] border-[1px] border-green-600 w-full rounded-xl px-4 h-48 lg:h-32 leading-tight lg:text-base"
                                                name="bio">{{ $user->bio }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-8 text-center">
                                    <button type="submit"
                                        class="border-2 border-green-500 text-gray-600 px-6 py-1 rounded-full transition duration-300 max-xl:text-[40px] hover:bg-green-500 hover:text-white">Save</button>
                                </div>
                            </div>
                        </form>
                    </main>
                </div>

            </div>
        </div>

        {{-- Scripts  --}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/turfAdmin.js"></script>
        <script>
            @if (session('message'))
                // Show notification
                var toastSection = document.getElementById('toast-section');
                var notification = document.createElement("div");
                notification.className =
                    "notification-toast bg-white shadow-lg rounded-lg w-full mx-auto relative transform opacity-0 transition-all duration-300 z-10";
                notification.innerHTML =
                    `
            <div class="flex items-center justify-between px-8 py-4">
              <div class="flex items-center">
                <div class="rounded-full bg-green-500 p-0.5">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div class="ml-4">
                  <p class="text-4xl font-semibold text-gray-800 mb-2">Success!</p>
                  <p class="text-3xl text-gray-600">Turf added successfully</p>
                </div>
              </div>
              <button id="closeButton" class="text-gray-500 hover:text-gray-800">
                <svg class="w-10 h-10" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
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
            @endif
        </script>
    </div>
@endsection
@endsection
