{{-- <!DOCTYPE html>
<html lang="en">

<head>
    @include('turfAdmin.css')
    <title>Turf Admin Panel - TurfEase</title>
</head>

<body>

    <div class="flex h-screen bg-cover">
        <!-- Sidebar -->
        <div class="w-80 bg-[#00b737] shadow-md relative">
            <div class="flex flex-row items-center justify-center h-24 pr-16">
                <a href="{{ url('/') }}">
                    <img src="img/favicon.png" class="w-11" alt="">
                </a>
                <a href="{{ url('/') }}" class="text-xl pl-1  text-white uppercase">TurfEase</a>
            </div>
            <ul class="mt-7 flex flex-col items-center space-y-4">
                <li
                    class="py-2.5 flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
                    <a href="{{ url('dashboard') }}" class=" flex items-center w-full px-14">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 6a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V6zm-1 7a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-1 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM5 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-1 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Dashboard
                    </a>
                </li>

                <li
                    class="py-2.5 flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
                    <a href="{{ url('myProfile') }}" class=" flex items-center w-full px-14">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4zm1-2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M7 8a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2H7zm0 4a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2H7zm0 4a1 1 0 1 1 0-2h4a1 1 0 1 1 0 2H7z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Profile
                    </a>
                </li>

                <li
                    class="py-2.5 flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
                    <a href="{{ url('bookings') }}" class=" flex items-center w-full px-14">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 6a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V6zm-1 7a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-1 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM5 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-1 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Booking
                    </a>
                </li>

                <li
                    class="py-2.5 flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
                    <a href="{{ url('view-turf') }}" class=" flex items-center w-full px-14">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4zm1-2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M7 8a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2H7zm0 4a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2H7zm0 4a1 1 0 1 1 0-2h4a1 1 0 1 1 0 2H7z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        My Turf
                    </a>
                </li>

                <li
                    class="py-2.5 flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
                    <a href="{{ url('myWallet') }}" class=" flex items-center w-full px-14">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-4.586a1 1 0 0 0-.707.293L9 14.414l-2.707-2.707a1 1 0 0 0-.707-.293H3V2zm1 2v9h4.586L9 12.586l2.707 2.707A1 1 0 0 0 12.414 16H15V4H4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Wallet
                    </a>
                </li>
            </ul>

            <!-- Footer Area -->
            <div class="absolute mx-auto bottom-0 w-full text-center pb-3">
                <p class="text-[#4BF27E] text-sm w-full">TurfEase © 2024. All rights reserved.</p>
            </div>
        </div>

        <div class="flex-grow pt-8 pl-10 p-6 bg-gray-100">
            <h1 class="text-xl text-black inline-block">Today,
                <span class="text-sm">
                    {{ date('j F, Y') }}
                </span>
            </h1>
        </div>
    </div>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <!-- Hamburger Menu (visible on small screens) -->
    <div class="md:hidden">
        <button class="hamburger-menu p-4 focus:outline-none">
            <svg class="w-6 h-6 text-gray-500" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="#4A5568" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Sidebar -->
    <aside class="bg-gray-800 text-gray-300 w-64 min-h-screen flex-shrink-0 hidden md:block">
        <div class="p-4">
            <h1 class="text-lg font-bold mb-4">Sidebar</h1>
            <!-- Sidebar Links -->
            <ul>
                <li class="mb-2">
                    <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-700">Dashboard</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-700">Projects</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-700">Team</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-700">Settings</a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="flex flex-col w-full min-h-screen">
        <!-- Main Content Area -->
        <div class="flex-grow p-4">
            <!-- Page content goes here -->
            <h1 class="text-2xl font-bold mb-4">Main Content</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit faucibus dolor, nec bibendum quam
                rutrum in.</p>
        </div>
    </main>

    <script>
        // Toggle sidebar visibility on hamburger menu click
        const hamburgerMenu = document.querySelector('.hamburger-menu');
        const sidebar = document.querySelector('aside');

        hamburgerMenu.addEventListener('click', function() {
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>

</html>
