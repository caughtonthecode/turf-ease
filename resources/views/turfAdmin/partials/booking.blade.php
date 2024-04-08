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

        <li
            class="flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
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

        <li class="flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
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
        <div class="flex">
            <div class="">
                <h1 class="text-xl text-black inline-block">Today,
                    <span class="text-sm">
                        {{ date('j F, Y') }}
                    </span>
                </h1>
            </div>
        </div>
        <div class="p-6 mt-10 rounded-xl">
            <section class="mb-12">
                <h2 class="text-2xl font-semibold mb-6">Today's Bookings</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <!-- Booking Cards will go here -->
                    <!-- Example Card -->
                    <div class="bg-white p-6 rounded-lg">
                        <h3 class="text-xl font-semibold mb-2">John Doe</h3>
                        <p class="text-gray-600">Booking Time: 10:00 AM</p>
                        <p class="text-gray-600">Service: Massage</p>
                    </div>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-semibold mb-6">Booking History</h2>
                <div class="overflow-x-auto">
                    <table class="w-full bg-white rounded-lg shadow-md">
                        <thead>
                            <tr class="bg-gray-200 text-gray-800">
                                <th class="py-4 px-6">Customer Name</th>
                                <th class="py-4 px-6">Booking Time</th>
                                <th class="py-4 px-6">Service</th>
                                <th class="py-4 px-6">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Booking History rows will go here -->
                            <!-- Example Row -->
                            <tr>
                                <td class="py-4 px-6">Jane Smith</td>
                                <td class="py-4 px-6">2024-03-14 09:30 AM</td>
                                <td class="py-4 px-6">Haircut</td>
                                <td class="py-4 px-6">Completed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Additional Statistics -->
            <section>
                <h2 class="text-2xl font-semibold mb-6">Statistics</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-xl">
                        <h3 class="text-xl font-semibold mb-2">Total Bookings Today</h3>
                        <p class="text-gray-600">10</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl">
                        <h3 class="text-xl font-semibold mb-2">Total Bookings This Month</h3>
                        <p class="text-gray-600">150</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl">
                        <h3 class="text-xl font-semibold mb-2">Average Booking Time</h3>
                        <p class="text-gray-600">45 minutes</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>
@endsection
@endsection
