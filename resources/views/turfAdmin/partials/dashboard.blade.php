@extends('turfAdmin.dashboard')

@section('sidebar-content')
    <ul class="mt-7 flex flex-col items-center space-y-4">
        <li class="flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
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
        <div class="flex justify-between">
            <div class="">
                <h1 class="text-xl text-black inline-block">Today,
                    <span class="text-sm">
                        {{ date('j F, Y') }}
                    </span>
                </h1>
            </div>

            <!-- User Menu -->
            <div class="mr-10 bg-white pr-6 pl-10 rounded-full">
                <div class="relative inline-block">
                    <button id="profileDropdownBtn" class="flex items-center">
                        <div class="pr-2 text-sm text-gray-600 font-semibold">Samin Sadat</div>
                        <img src="img/profile-user.png" class="w-10 h-10" alt="profileDropdownbtn">
                    </button>
                    <div id="profileDropdown" class="absolute hidden -right-5 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                        <a href="{{ url('myProfile') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
                        <a href="{{ url('') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Terms &
                            Policy</a>
                        <form action="{{ url('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200 w-full text-start">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-between mt-10">
            <!-- First Column -->
            <div class="space-y-5 w-1/4">
                <!-- Online Booking -->
                <div class="p-6 flex justify-between bg-white rounded-xl transition-all ease-in-out hover:shadow ">
                    <div>
                        <p class="text-[#00b737] text-2xl font-semibold">10</p>
                        <p class="pt-4 text-gray-700">Online Booking</p>
                    </div>
                    <div class="">
                        <img src="img/profile-user.png" class="opacity-75" alt="">
                    </div>
                </div>

                <!-- Manual Booking -->
                <div class="p-6 flex justify-between bg-white rounded-xl transition-all ease-in-out hover:shadow">
                    <div>
                        <p class="text-[#00b737] text-2xl font-semibold">5</p>
                        <p class="pt-4 text-gray-700">Manual Booking</p>
                    </div>
                    <div class="">
                        <img src="img/profile-user.png" class="opacity-75" alt="">
                    </div>
                </div>

                <!-- Account Overview -->
                <div class="bg-white rounded-xl p-6">
                    <span class="flex justify-between">
                        <p class="text-xl text-gray-700 font-semibold">Account Overview</p>
                        <img src="img/profile-user.png" class="w-8" alt="">
                    </span>
                    <p class="text-gray-400 pb-4">dropdown</p>
                    <div class="flex justify-between items-center">
                        <div class="">
                            <h2 class="text-xl text-gray-700 font-semibold">224500</h2>
                            <p class="pb-4 text-[#00b737]">Incoming</p>
                            <h2 class="text-xl text-gray-700 font-semibold">22500</h2>
                            <p class="text-orange-600">Outgoing</p>
                        </div>
                        <div class="rounded-full w-28">
                            <img src="img/logo.png" alt="">
                        </div>
                    </div>

                </div>
                <!-- Receiveable Ammount -->
                <div class="p-6 bg-white rounded-xl relative">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-xl text-gray-700  font-semibold">24500 BDT</p>
                            <p class="pt-2 text-gray-700 ">Receivable Wallet Amount</p>
                            <p class="pt-4 text-[#00b737]">Last Withdraw <span> 14/03/2024 </span></p>
                        </div>
                        <span class="absolute top-3 right-3 w-8">
                            <img src="img/profile-user.png" alt="">
                        </span>
                    </div>
                </div>
            </div>

            <!-- Second Column -->
            <div class="bg-white p-10 ml-10 w-3/4 h-[80svh] rounded-xl overflow-hidden">
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <p class="text-gray-700 text-lg font-semibold mr-4">Booking Overview</p>
                        <div class="relative inline-block">
                            <select
                                class="appearance-none bg-yellow-300 text-gray-700 border-0 rounded-full px-4 py-1.5 pr-8 focus:outline-none focus:ring-0 hover:ring-0">
                                <option value="">This Month</option>
                                <option value="">Last Month</option>
                                <option value="">This Quarter</option>
                                <option value="">Last Quarter</option>
                                <option value="">This Year</option>
                                <option value="">Last Year</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 text-white flex items-center px-2 pointer-events-none">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <title>7-Arrow Up</title>
                                    <g id="_7-Arrow_Up" data-name="7-Arrow Up">
                                        <path d="M3.41,2H16V0H1A1,1,0,0,0,0,1V17H2V3.41L30.29,31.71l1.41-1.41Z" />
                                    </g>
                                </svg>
                            </div>
                        </div>

                    </div>
                    <div class="flex items-center">
                        <p class="bg-[#00b737] text-white px-4 py-1.5 rounded-full mr-4">Add New</p>
                        <p class="bg-white border-[1px] border-black rounded-full w-6 h-6 text-center -rotate-45">-></p>
                    </div>
                </div>
                <ul class="flex space-x-8 pt-6 mb-6">
                    <li class="border-b-2 border-b-green-600 pb-1"><a href="#">Day</a></li>
                    <li class="hover:border-b-2 border-b-green-600"><a href="#">Evening</a></li>
                    <li class="hover:border-b-2 border-b-green-600"><a href="#">Night</a></li>
                </ul>

                <div class="overflow-x-auto h-[110vh] hide-scrollbar scroll-container transition: max-height 0.5s ease">
                    <div class="">
                        <section class="w-2/3 space-y-4">
                            @foreach ($turfs as $turf)
                                <section class="flex space-x-4 border-[1px] border-green-300 shadow rounded-xl p-6">
                                    <img src="turfADmin/images/{{ $turf->f_image }}" class="w-36 md:w-36 h-15 rounded"
                                        alt="">
                                    <span class="flex">
                                        <svg width="15px" height="15px" viewBox="0 0 24 24" fill="currentColor"
                                            class="mt-1.5 mr-1" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5 1C4.44772 1 4 1.44772 4 2V22C4 22.5523 4.44772 23 5 23C5.55228 23 6 22.5523 6 22V15.693L18.8542 10.8727C20.5846 10.2238 20.5846 7.77627 18.8542 7.12739L6 2.30705V2C6 1.44772 5.55228 1 5 1ZM6 4.44305V13.557L17.6526 9.18732C17.8256 9.12243 17.8256 8.87767 17.6526 8.81278L6 4.44305Z"
                                                fill="#22C55E" />
                                        </svg>
                                        <p class="text-gray-500">
                                            #{{ $turf->id }}
                                        </p>
                                    </span>
                                    <span class="">
                                        <p>{{ $turf->turf_name }}</p>
                                        <p class="bg-yellow-300 rounded-full text-center mt-2 px-2 text-sm">
                                            {{ $turf->price }}
                                            BDT</p>
                                    </span>
                                    <span
                                        class="flex flex-col items-center justify-center flex-wrap space-y-1 text-sm w-40">
                                        <p class="bg-green-500 rounded-full px-2 py-0.5 text-white inline-block">
                                            {{ $turf->open_time }}-{{ $turf->close_time }}
                                        </p>
                                    </span>
                                    <section class="flex items-center space-x-2">
                                        <span>
                                            <p
                                                class="flex shadow px-2 py-1.5 text-gray-600 text-sm rounded-md hover:bg-slate-100  justify-center">
                                                Details</p>
                                        </span>
                                        <span>
                                            <p
                                                class="shadow hover:bg-slate-100 px-2 py-1.5 text-gray-600 text-sm rounded-md">
                                                Update
                                            </p>
                                        </span>
                                    </section>
                                </section>
                            @endforeach
                        </section>
                    </div>
                </div>
            </div>

            <script>
                // JavaScript to handle dropdown toggle
                document.getElementById('profileDropdownBtn').addEventListener('click', function(event) {
                    var dropdown = document.getElementById('profileDropdown');
                    dropdown.classList.toggle('hidden');
                    event.stopPropagation();
                });

                // Close dropdown when clicking outside of it
                document.addEventListener('click', function(event) {
                    var dropdown = document.getElementById('profileDropdown');
                    if (!dropdown.contains(event.target)) {
                        dropdown.classList.add('hidden');
                    }
                });
            </script>

        </div>
    </div>
    </div>
@endsection
@endsection
