@php
    $userFname = $userAll->f_name;
    $userLname = $userAll->l_name;
    $userEmail = $userAll->email;
    $userPhone = $userAll->phone;
    $userAddress = $userAll->address;
    $proPic = $userAll->pro_pic;
    $user = $userAll;
@endphp

<head>
    @include('home.homecss')
    <title>Booking History - TurfEase</title>
</head>

@include('home.header')

<div class="bg-[#ecf0f1] px-4 py-10">
    <div class="custom-container mx-auto flex mt-20">
        <!-- User -->
        <div class="w-1/4">
            <div class="bg-white p-6 w-5/6 flex flex-col items-center rounded-xl">
                <img src="img/{{ $proPic }}" class="w-20 h-20 rounded-full" alt="">
                <p class="p-1 mt-2 text-gray-500 font-semibold">{{ $userFname }} {{ $userLname }}</p>
            </div>

            <!-- Sidebar -->
            <div class="mt-10 px-3 py-10 bg-white w-5/6 rounded-lg">
                <ul class="space-y-4 flex flex-col items-center">
                    <li class="w-11/12 transition-all ease-in-out hover:bg-slate-900 hover:bg-opacity-10  rounded-full">
                        <a href="{{ url('userProfile') }}" id="profile-info-link"
                            class="px-6 py-3 block transition-all ease-in-out text-gray-600">
                            Personal Information</a>
                    </li>

                    <li class="w-11/12 transition-all ease-in-out bg-slate-900 bg-opacity-10  rounded-full">
                        <a href="{{ url('booking-history') }}" id="booking-history-link"
                            class="px-6 py-3 block transition-all ease-in-out text-gray-600">Booking
                            History</a>
                    </li>

                    <li class="w-11/12 transition-all ease-in-out hover:bg-slate-900 hover:bg-opacity-10  rounded-full">
                        <a href="{{ url('tournament') }}" id="tournament-link"
                            class="px-6 py-3 block transition-all ease-in-out text-gray-600">Tournament</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Content -->
        <div class="w-2/3 bg-white rounded-lg h-[600px] overflow-hidden">
            <div class="px-8 py-6">
                <p class="text-xl text-black font-semibold pb-6">Bookings History</p>
                <div class="h-[83%] overflow-y-scroll"
                    style="scrollbar-width: none; /* Firefox */ -ms-overflow-style: none; /* Internet Explorer 10+ */">
                    <div class="flex flex-col space-y-3">
                        @if (!$bookings || $bookings->where('user_id', Auth::id())->isEmpty())
                            <p class="text-lg text-gray-400">No booking founds!</p>
                            <a href="{{ url('turf-list') }}" class="text-green-600 hover:underline inline-block ">Add
                                Booking</a>
                        @else
                            <!-- Display bookings for the current user -->
                            @foreach ($bookings as $booking)
                                @if ($booking->user_id == Auth::id())
                                    <div class="bg-[#bada55]/15 rounded-lg shadow-md p-4 flex flex-col">
                                        <div class="flex items-center justify-between mb-2">
                                            <h2 class="text-lg font-semibold text-gray-800">{{ $booking->turf_name }}
                                            </h2>
                                            @if ($booking->payment_status == 'pending')
                                                <span
                                                    class="bg-gray-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">{{ $booking->payment_status }}</span>
                                            @elseif ($booking->payment_status == 'confirmed')
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">{{ $booking->payment_status }}</span>
                                            @endif

                                        </div>
                                        <div class="">
                                            <p class="text-900 mb-1 flex items-center bg-[#bada55]/20 w-fit">
                                                <span class="font-semibold w-5 h5">
                                                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg width="17px" height="17px" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 21V3.90002C5 3.90002 5.875 3 8.5 3C11.125 3 12.875 4.8 15.5 4.8C18.125 4.8 19 3.9 19 3.9V14.7C19 14.7 18.125 15.6 15.5 15.6C12.875 15.6 11.125 13.8 8.5 13.8C5.875 13.8 5 14.7 5 14.7"
                                                            stroke="green" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                {{ $booking->user_name }}
                                            </p>
                                            <p class="text-gray-600 mb-1 flex items-center"><span class="font-semibold">
                                                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11 18H13M9.2 21H14.8C15.9201 21 16.4802 21 16.908 20.782C17.2843 20.5903 17.5903 20.2843 17.782 19.908C18 19.4802 18 18.9201 18 17.8V6.2C18 5.0799 18 4.51984 17.782 4.09202C17.5903 3.71569 17.2843 3.40973 16.908 3.21799C16.4802 3 15.9201 3 14.8 3H9.2C8.0799 3 7.51984 3 7.09202 3.21799C6.71569 3.40973 6.40973 3.71569 6.21799 4.09202C6 4.51984 6 5.07989 6 6.2V17.8C6 18.9201 6 19.4802 6.21799 19.908C6.40973 20.2843 6.71569 20.5903 7.09202 20.782C7.51984 21 8.07989 21 9.2 21Z"
                                                            stroke="green" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                {{ $booking->phone }}</p>
                                            <div class="flex space-x-6 items-center">
                                                <p class="text-gray-600 mb-1 flex items-center capitalize"><span
                                                        class="font-semibold mr-1">
                                                        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                        <svg width="17px" height="17px" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M23 12C23 12.3545 22.9832 12.7051 22.9504 13.051C22.3838 12.4841 21.7204 12.014 20.9871 11.6675C20.8122 6.85477 16.8555 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12C3.00683 16.8555 6.85477 20.8122 11.6675 20.9871C12.014 21.7204 12.4841 22.3838 13.051 22.9504C12.7051 22.9832 12.3545 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z"
                                                                fill="green" />
                                                            <path
                                                                d="M13 11.8812L13.8426 12.3677C13.2847 12.7802 12.7902 13.2737 12.3766 13.8307L11.5174 13.3346C11.3437 13.2343 11.2115 13.0898 11.1267 12.9235C11 12.7274 11 12.4667 11 12.4667V6C11 5.44771 11.4477 5 12 5C12.5523 5 13 5.44772 13 6V11.8812Z"
                                                                fill="green" />
                                                            <path
                                                                d="M15.2929 17.7071C15.6834 17.3166 16.3166 17.3166 16.7071 17.7071L17.3482 18.3482L19.2473 16.4491C19.6379 16.0586 20.271 16.0586 20.6615 16.4491C21.0521 16.8397 21.0521 17.4728 20.6615 17.8634L18.1213 20.4036C18.0349 20.49 17.9367 20.5573 17.8318 20.6054C17.4488 20.8294 16.9487 20.7772 16.6203 20.4487L15.2929 19.1213C14.9024 18.7308 14.9024 18.0976 15.2929 17.7071Z"
                                                                fill="green" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M18 24C21.3137 24 24 21.3137 24 18C24 14.6863 21.3137 12 18 12C14.6863 12 12 14.6863 12 18C12 21.3137 14.6863 24 18 24ZM18 22.0181C15.7809 22.0181 13.9819 20.2191 13.9819 18C13.9819 15.7809 15.7809 13.9819 18 13.9819C20.2191 13.9819 22.0181 15.7809 22.0181 18C22.0181 20.2191 20.2191 22.0181 18 22.0181Z"
                                                                fill="green" />
                                                        </svg>
                                                    </span>
                                                    {{ $booking->booked_slot }}</p>
                                                <p class="text-gray-600 mb-1 flex items-center"><span
                                                        class="font-semibold mr-1">
                                                        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                        <svg width="17px" height="17px" viewBox="-0.5 0 15 15"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill="green" fill-rule="evenodd"
                                                                d="M107,154.006845 C107,153.45078 107.449949,153 108.006845,153 L119.993155,153 C120.54922,153 121,153.449949 121,154.006845 L121,165.993155 C121,166.54922 120.550051,167 119.993155,167 L108.006845,167 C107.45078,167 107,166.550051 107,165.993155 L107,154.006845 Z M108,157 L120,157 L120,166 L108,166 L108,157 Z M116.5,163.5 L116.5,159.5 L115.757485,159.5 L114.5,160.765367 L114.98503,161.275112 L115.649701,160.597451 L115.649701,163.5 L116.5,163.5 Z M112.5,163.5 C113.412548,163.5 114,163.029753 114,162.362119 C114,161.781567 113.498099,161.473875 113.110266,161.433237 C113.532319,161.357765 113.942966,161.038462 113.942966,160.550798 C113.942966,159.906386 113.395437,159.5 112.505703,159.5 C111.838403,159.5 111.359316,159.761248 111.051331,160.115385 L111.456274,160.632075 C111.724335,160.370827 112.055133,160.231495 112.425856,160.231495 C112.819392,160.231495 113.13308,160.382438 113.13308,160.690131 C113.13308,160.974601 112.847909,161.102322 112.425856,161.102322 C112.28327,161.102322 112.020913,161.102322 111.952471,161.096517 L111.952471,161.839623 C112.009506,161.833817 112.26616,161.828012 112.425856,161.828012 C112.956274,161.828012 113.190114,161.967344 113.190114,162.275036 C113.190114,162.565312 112.93346,162.768505 112.471483,162.768505 C112.10076,162.768505 111.684411,162.605951 111.427757,162.327286 L111,162.87881 C111.279468,163.227141 111.804183,163.5 112.5,163.5 Z M110,152.5 C110,152.223858 110.214035,152 110.504684,152 L111.495316,152 C111.774045,152 112,152.231934 112,152.5 L112,153 L110,153 L110,152.5 Z M116,152.5 C116,152.223858 116.214035,152 116.504684,152 L117.495316,152 C117.774045,152 118,152.231934 118,152.5 L118,153 L116,153 L116,152.5 Z"
                                                                transform="translate(-107 -152)" />
                                                        </svg>
                                                    </span>
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $booking->booking_time)->format('Y-m-d') }}
                                                </p>
                                                <p class="text-gray-600 mb-2 flex items-center"><span
                                                        class="font-semibold mr-1">
                                                        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14 14H17M14 10H17M9 9.5V8.5M9 9.5H11.0001M9 9.5C7.20116 9.49996 7.00185 9.93222 7.0001 10.8325C6.99834 11.7328 7.00009 12 9.00009 12C11.0001 12 11.0001 12.2055 11.0001 13.1667C11.0001 13.889 11.0001 14.5 9.00009 14.5M9.00009 14.5L9 15.5M9.00009 14.5H7.0001M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z"
                                                                stroke="green" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    {{ $booking->payment_amount }} BDT</p>
                                            </div>
                                        </div>
                                        {{-- <a href="#"
                                            class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-auto">View
                                            Details</a> --}}
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('home.footer')
