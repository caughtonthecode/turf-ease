@extends('turfAdmin.dashboard')
@include('admin.css')

<body>
    <style>
        #overlay.visible {
            opacity: 1;
        }

        #popup.visible {
            opacity: 1;
        }
    </style>
</body>
@section('sidebar-content')
    {{-- Sidebar Big Screen --}}
    <div class="collapsed">
        <ul class="mt-7 flex flex-col items-center space-y-4">
            <li
                class="flex justify-center items-center text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-colors duration-300 ease-in-out sidebar-icon">
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
                class="flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out shadow-one sidebar-icon">
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
                class="flex justify-start text-white text-lg hover:bg-[#008728] hover:shadow-one rounded-full w-11/12 transition-colors duration-300 ease-in-out sidebar-icon">
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
                                        class="flex justify-center items-center text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-colors duration-300 ease-in-out sidebar-icon">
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
                                        class="flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out shadow-one sidebar-icon">
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
                                        class="flex justify-start text-white text-lg hover:bg-[#008728] hover:shadow-one rounded-full w-11/12 transition-colors duration-300 ease-in-out sidebar-icon">
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
            <!-- resources/views/users/index.blade.php -->
            <div class="container mx-auto px-4 py-8">
                <h1 class="text-3xl font-bold mb-4">Users</h1>
                <div class="mb-4">
                    <label for="filterSelect" class="mr-2">Filter:</label>
                    <select id="filterSelect" name="filter" class="border border-gray-300 rounded py-1 px-2">
                        <option value="all" {{ request('filter') === 'all' ? 'selected' : '' }}>All</option>
                        <option value="user" {{ request('filter') === 'user' ? 'selected' : '' }}>User</option>
                        <option value="turf_manager" {{ request('filter') === 'turf_manager' ? 'selected' : '' }}>Turf
                            Manager</option>
                    </select>
                </div>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">User Id</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Role</th>
                            <th class="px-4 py-2">Action</th>
                            {{-- @if (Auth::user()->isAdmin())
                                <th class="px-4 py-2">Actions</th>
                            @endif --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users->whereIn('usertype', ['tmanager', 'user']) as $user)
                            @if (request('filter') === 'user' || $user->role === request('filter'))
                                <tr>
                                    <td class="border px-4 py-2 text-center">{{ $user->id }}
                                    <td class="border px-4 py-2 text-center">{{ $user->f_name . ' ' . $user->l_name }}
                                    </td>
                                    <td class="border px-4 py-2 text-center">{{ $user->email }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $user->usertype }}</td>
                                    @if (Auth::user()->usertype == 'admin')
                                        <td
                                            class="flex items-center justify-center space-x-6 border px-4 py-2 text-center">
                                            <!-- Button to open the popup -->
                                            <button class="openPopupButton flex items-center"
                                                data-userid="{{ $user->id }}">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z"
                                                        stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13"
                                                        stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                </svg>
                                            </button>

                                            <!-- Popup form -->
                                            <div class="popup hidden fixed -inset-10 flex items-center justify-center bg-gray-900 bg-opacity-50 transition-opacity duration-300"
                                                id="popup-{{ $user->id }}">
                                                <div class="bg-white p-8 rounded-lg w-full max-w-md">
                                                    <h2 class="text-xl font-semibold mb-4">Popup Form</h2>
                                                    <form class="space-y-4" action="{{ route('editUserAdmin') }}"
                                                        method="post">
                                                        @csrf
                                                        <div>
                                                            <label for="name"
                                                                class="block text-sm font-medium text-gray-700">Name</label>
                                                            <input type="text" id="name-{{ $user->id }}"
                                                                name="name"
                                                                value="{{ $user->f_name . ' ' . $user->l_name }}"
                                                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        </div>
                                                        <div>
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">Email</label>
                                                            <input id="email-{{ $user->id }}" name="email"
                                                                type="email" value="{{ $user->email }}"
                                                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        </div>
                                                        <div>
                                                            <label for="role"
                                                                class="block text-sm font-medium text-gray-700">Role</label>
                                                            <select name="role" id="role-{{ $user->id }}"
                                                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                <option value="user"
                                                                    {{ $user->usertype === 'user' ? 'selected' : '' }}>User
                                                                </option>
                                                                <option value="tmanager"
                                                                    {{ $user->usertype === 'tmanager' ? 'selected' : '' }}>
                                                                    Turf Manager</option>
                                                            </select>
                                                        </div>
                                                        <input type="hidden" name="user_id" id=""
                                                            value="{{ $user->id }}">
                                                        <div class="flex justify-center">
                                                            <button type="submit"
                                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Update</button>

                                                        </div>
                                                    </form>
                                                    <button
                                                        class="closePopupButton ml-2 inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                        data-userid="{{ $user->id }}">Close</button>
                                                </div>
                                            </div>

                                            <!-- Delete form -->
                                            <form action="{{ route('user.delete', $user->id) }}" method="POST"
                                                class="inline-block" onsubmit="return confirmDelete()">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-500 hover:text-red-700 font-Poppins text-sm">Delete</button>
                                            </form>

                                        </td>
                                    @endif
                                </tr>
                            @endif
                        @endforeach


                    </tbody>
                </table>
            </div>
            {{-- Scripts  --}}

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="js/turfAdmin.js"></script>
            <script>
                document.querySelectorAll('.openPopupButton').forEach(button => {
                    button.addEventListener('click', function() {
                        const userId = this.getAttribute('data-userid');
                        const popup = document.getElementById('popup-' + userId);
                        popup.classList.remove('hidden');
                    });
                });

                document.querySelectorAll('.closePopupButton').forEach(button => {
                    button.addEventListener('click', function() {
                        const userId = this.getAttribute('data-userid');
                        const popup = document.getElementById('popup-' + userId);
                        popup.classList.add('opacity-0');
                        setTimeout(() => {
                            popup.classList.add('hidden');
                            popup.classList.remove('opacity-0');
                        }, 300); // Transition duration
                    });
                });

                function confirmDelete() {
                    return confirm('Are you sure you want to delete this user?');
                }
            </script>

        </div>
    </div>
    </div>
@endsection
@endsection
