@extends('turfAdmin.dashboard')

@section('sidebar-content')
    {{-- Sidebar Big Screen --}}
    <div class="collapsed">
        <ul class="mt-7 flex flex-col items-center space-y-4">
            <li
                class="flex justify-start text-white text-lg hover:bg-[#008728] hover:shadow-one rounded-full w-11/12 transition-colors duration-300 ease-in-out sidebar-icon">
                <a href="{{ url('admin') }}"
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
                <a href="{{ url('users') }}"
                    class="py-2.5 flex items-center max-xl:justify-center justify-start w-full px-14 side-middle rounded-full text-base">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="23" viewBox="0 -960 960 960" width="23">
                            <path fill="#fff"
                                d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                        </svg>
                    </span>
                    <span class="sidebar-title ml-2">
                        Users
                    </span>
                </a>
            </li>

            <li
                class="flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out shadow-one sidebar-icon">
                <a href="{{ url('earnings') }}"
                    class="py-2.5 flex items-center w-full px-14 side-middle text-base max-xl:justify-center justify-start">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="23" viewBox="0 -960 960 960" width="23">
                            <path fill="#ffffff"
                                d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                        </svg>

                    </span>
                    <span class="sidebar-title ml-2">
                        Earnings
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
                                        class="flex justify-start text-white text-lg hover:bg-[#008728] hover:shadow-one rounded-full w-11/12 transition-colors duration-300 ease-in-out sidebar-icon">
                                        <a href="{{ url('admin') }}"
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
                                        <a href="{{ url('users') }}"
                                            class="py-4 lg:py-2.5 flex items-center  justify-start w-full px-14 side-middle rounded-full  text-4xl lg:text-base">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="23"
                                                    viewBox="0 -960 960 960" width="23" class="w-9 h-9">
                                                    <path fill="#fff"
                                                        d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                                                </svg>
                                            </span>
                                            <span class="sidebar-title ml-2">
                                                Users
                                            </span>
                                        </a>
                                    </li>

                                    <li
                                        class="flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out shadow-one sidebar-icon">
                                        <a href="{{ url('earnings') }}"
                                            class="py-4 lg:py-2.5 flex items-center w-full px-14 side-middle  text-4xl lg:text-base  justify-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="23"
                                                    viewBox="0 -960 960 960" width="23" class="w-9 h-9">
                                                    <path fill="#ffffff"
                                                        d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                                </svg>

                                            </span>
                                            <span class="sidebar-title ml-2">
                                                Earnings
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
                        <a href="{{ url('#') }}"
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
            <!-- resources/views/earnings/index.blade.php -->


            <div class="container mx-auto px-4 py-8">
                <h1 class="text-3xl font-bold mb-4">Earnings</h1>
                <div class="flex justify-between mb-4">
                    <div>
                        <label for="dateRange" class="mr-2">Date Range:</label>
                        <input type="text" id="dateRange" name="dateRange"
                            class="border border-gray-300 rounded py-1 px-2" placeholder="Select a date range">
                    </div>
                    <div>
                        <label for="filterCategory" class="mr-2">Filter Category:</label>
                        <select id="filterCategory" name="filterCategory"
                            class="border border-gray-300 rounded py-1 px-2">
                            <option value="all">All</option>
                            <option value="category1">Category 1</option>
                            <option value="category2">Category 2</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">Date</th>
                            <th class="px-4 py-2">Category</th>
                            <th class="px-4 py-2">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($earnings as $earning)
                            <tr>
                                <td class="border px-4 py-2">{{ $earning->date }}</td>
                                <td class="border px-4 py-2">{{ $earning->category }}</td>
                                <td class="border px-4 py-2">{{ $earning->amount }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
            {{-- Scripts  --}}

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="js/turfAdmin.js"></script>
        </div>
    </div>
    </div>
@endsection
@endsection
