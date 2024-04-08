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

        <li class="flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
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

        <!-- Content Section -->
        <div class="bg-gray-100 min-h-screen mt-10">
            <!-- Header -->
            <header class="bg-gradient-to-r from-green-400 to-blue-500 py-6 text-white text-center">
                <h1 class="text-3xl font-bold">Wallet</h1>
            </header>

            <!-- Main Content -->
            <main class="container mx-auto py-8 px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Earnings Section -->
                <section class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Earnings</h2>
                        <!-- Dropdown for time period -->
                        <div class="mb-4">
                            <label for="timePeriod" class="block text-gray-700 font-bold mb-2">Select Time
                                Period</label>
                            <select id="timePeriod"
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option>This Month</option>
                                <option>Previous Month</option>
                                <!-- Additional time periods can be added here -->
                            </select>
                        </div>
                        <!-- Display earnings for the selected time period -->
                        <div class="flex justify-between items-center border-b border-gray-200 py-4">
                            <p class="text-gray-600"><span class="font-semibold">Total Earnings:</span> $1000</p>
                            <span class="text-green-500 font-semibold text-sm">+10% this month</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-gray-200 py-4">
                            <p class="text-gray-600"><span class="font-semibold">Withdrawn:</span> $200</p>
                            <span class="text-red-500 font-semibold text-sm">-20% previous month</span>
                        </div>
                        <div class="flex justify-between items-center py-4">
                            <p class="text-gray-600"><span class="font-semibold">Available Balance:</span> $800</p>
                            <button
                                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Withdraw</button>
                        </div>
                        <!-- Transaction History -->
                        <div class="mt-6">
                            <h3 class="text-lg font-semibold mb-2">Transaction History</h3>
                            <ul>
                                <li class="text-gray-600"><span class="font-semibold">March 10, 2024:</span> Withdrawn
                                    $100</li>
                                <li class="text-gray-600"><span class="font-semibold">March 5, 2024:</span> Withdrawn
                                    $100</li>
                                <li class="text-gray-600"><span class="font-semibold">March 2, 2024:</span> Withdrawn
                                    $100</li>
                                <!-- Additional transaction history can be added dynamically -->
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Withdraw Section -->
                <section class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Withdraw</h2>
                        <form id="withdrawForm">
                            <div class="mb-4">
                                <label for="amount" class="block text-gray-700 font-bold mb-2">Amount to
                                    Withdraw</label>
                                <input id="amount" name="amount" type="number" step="0.01" min="0"
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <button id="withdrawBtn"
                                class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300"
                                type="button">Withdraw</button>
                        </form>
                    </div>
                </section>
            </main>

            <!-- Confirmation Modal -->
            <div id="confirmationModal"
                class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-gray-800 bg-opacity-75 z-50 hidden transition-all tranop">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-4">Confirm Withdrawal</h2>
                    <p class="text-gray-700 mb-4">Are you sure you want to withdraw <span id="confirmAmount"></span>?
                    </p>
                    <div class="flex justify-end transition-all ease-in-out">
                        <button id="cancelBtn"
                            class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md mr-4 hover:bg-gray-400 transition duration-300"
                            type="button">Cancel</button>
                        <button id="confirmBtn"
                            class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-300"
                            type="button">Confirm</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const withdrawForm = document.getElementById('withdrawForm');
            const withdrawBtn = document.getElementById('withdrawBtn');
            const confirmationModal = document.getElementById('confirmationModal');
            const confirmAmount = document.getElementById('confirmAmount');
            const cancelBtn = document.getElementById('cancelBtn');
            const confirmBtn = document.getElementById('confirmBtn');

            withdrawBtn.addEventListener('click', () => {
                const amount = withdrawForm.elements.amount.value;
                confirmAmount.textContent = `$${amount}`;
                confirmationModal.classList.remove('hidden');
            });

            cancelBtn.addEventListener('click', () => {
                confirmationModal.classList.add('hidden');
            });

            confirmBtn.addEventListener('click', () => {
                // Add logic here to process withdrawal
                // For demonstration purpose, just hide the modal
                confirmationModal.classList.add('hidden');
                withdrawForm.reset();
            });
        </script>
    </div>
    </div>
@endsection
@endsection
