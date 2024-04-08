@extends('turfAdmin.dashboard')

@section('sidebar-content')
    <ul class="mt-7 flex flex-col items-center space-y-4">
        <li class="flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
            <a href="{{ url('dashboard') }}" class="py-2.5 flex items-center w-full px-14">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8 6a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V6zm-1 7a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-1 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM5 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-1 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                Dashboard
            </a>
        </li>

        <li class="flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
            <a href="{{ url('myProfile') }}" class="py-2.5 flex items-center w-full px-14">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
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
            class="flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
            <a href="{{ url('bookings') }}" class="py-2.5 flex items-center w-full px-14">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8 6a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V6zm-1 7a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-1 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM5 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-1 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                Booking
            </a>
        </li>

        <li
            class="flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
            <a href="{{ url('view-turf') }}" class="py-2.5 flex items-center w-full px-14">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
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
            class="flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
            <a href="{{ url('myWallet') }}" class="py-2.5 flex items-center w-full px-14">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
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

@section('content-section')
    <div class="flex-grow pt-8 pl-10 p-6 bg-gray-100 overflow-y-scroll">
        <h1 class="text-xl text-black inline-block">Today,
            <span class="text-sm">
                {{ date('j F, Y') }}
            </span>
        </h1>
        <div class="flex space-x-4">
            <div class=" p-6 mt-10 rounded-xl w-2/3 flex flex-col justify-center items-center">

                <div class="bg-gray-100 min-h-screen">
                    <!-- Header -->
                    <header class="bg-gradient-to-r from-green-400 to-blue-500 py-6 text-white text-center rounded-lg">
                        <h1 class="text-3xl font-bold">Profile</h1>
                    </header>

                    <!-- Main Content -->
                    <main class="container mx-auto py-8 px-4">
                        <!-- Profile Card -->
                        <div class="bg-white rounded-lg p-6">
                            <div class="flex items-center mb-4">
                                <img class="h-16 w-16 rounded-full mr-4" src="https://via.placeholder.com/150"
                                    alt="Profile Picture">
                                <div>
                                    <h2 class="text-2xl font-semibold">John Doe</h2>
                                    <p class="text-gray-600">johndoe@example.com</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Personal Information</h3>
                                    <p class="text-gray-600"><span class="font-semibold">Age:</span> 30</p>
                                    <p class="text-gray-600"><span class="font-semibold">Location:</span> New York City</p>
                                    <p class="text-gray-600"><span class="font-semibold">Phone:</span> +1 123-456-7890</p>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Social Media</h3>
                                    <p class="text-gray-600"><span class="font-semibold">Twitter:</span> @johndoe</p>
                                    <p class="text-gray-600"><span class="font-semibold">LinkedIn:</span>
                                        linkedin.com/in/johndoe</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <h3 class="text-lg font-semibold mb-2">Bio</h3>
                                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget
                                    magna ut ex vestibulum tristique. Nullam tincidunt, libero a gravida pellentesque.</p>
                            </div>
                            <div class="mt-6">
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Edit
                                    Profile</button>
                            </div>
                        </div>
                    </main>
                </div>

                <div class="bg-white p-6 mt-10 rounded-xl w-1/2">

                </div>
            </div>
        </div>

    </div>
@endsection
@endsection
