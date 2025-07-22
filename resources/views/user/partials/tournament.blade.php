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
    <title>User Profile - TurfEase</title>
</head>

@include('home.header')

<div class="bg-[#ecf0f1] px-4 py-10 pt-32">
    <div class="custom-container mx-auto flex">
        <!-- User -->
        <div class="w-1/4">
            <div class="bg-white p-6 w-5/6 flex flex-col items-center rounded-xl">
                <img src="img/{{ $proPic }}" class="w-20 h-20 rounded-full" alt="">
                <p class="p-1 mt-2 text-gray-500 font-semibold">{{ $userFname }} {{ $userLname }}</p>
            </div>

            <!-- Sidebar -->
            <div class="mt-10 px-3 py-10 bg-white w-5/6 rounded-lg">
                <ul class="space-y-4 flex flex-col items-center">
                    <li
                        class="w-11/12 transition-all hover:ease-in-out hover:bg-slate-900 hover:bg-opacity-10  rounded-full">
                        <a href="{{ url('userProfile') }}" id="profile-info-link"
                            class="px-6 py-3 block transition-all ease-in-out text-gray-600 cursor-pointer">
                            Personal Information</a>
                    </li>

                    <li class="w-11/12 transition-all ease-in-out hover:bg-slate-900 hover:bg-opacity-10  rounded-full">
                        <a href="{{ url('booking-history') }}" id="booking-history-link"
                            class="px-6 py-3 block transition-all ease-in-out text-gray-600 cursor-pointer">Booking
                            History</a>
                    </li>

                    <li class="w-11/12 transition-all ease-in-out bg-slate-900 bg-opacity-10  rounded-full">
                        <a href="{{ url('tournament') }}" id="tournament-link"
                            class="px-6 py-3 block transition-all ease-in-out text-gray-600 cursor-pointer">Tournament</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Content -->
        <div class="w-2/3 bg-white rounded-lg">
            <div class="px-8 py-6">
                {{-- <p class="text-xl text-gray-700 pb-6">Personal Information</p>
                <div class="flex flex-col space-y-3">
                    <label for="" class="text-gray-700">Name</label>
                    <input type="text" name=""
                        class="rounded-full text-gray-600 bg-gray-100 border-0 py-3 px-6" readonly
                        value="{{ $userFname }} {{ $userLname }}" id="">
                    <label for="" class="text-gray-700">Email</label>
                    <input type="text" name=""
                        class="rounded-full text-gray-600 bg-gray-100 border-0 py-3 px-6" readonly
                        value="{{ $userEmail }}" id="">
                    <label for="" class="text-gray-700">Phone</label>
                    <input type="text" name=""
                        class="rounded-full text-gray-600 bg-gray-100 border-0 py-3 px-6" readonly
                        value="{{ $userPhone }}" id="">
                    <label for="" class="text-gray-700">Address</label>
                    <input type="text" name=""
                        class="rounded-full text-gray-600 bg-gray-100 border-0 py-3 px-6" readonly
                        value="{{ $userAddress }}" id="">
                </div>
                <div class="mt-10 pb-6">
                    <a href=""
                        class="text-gray-600 text-sm rounded-l-full p-3 py-1.5 border-[1px] border-green-400 hover:bg-green-400 hover:text-white transition-all ease-in-out">
                        Update Profile
                    </a>
                    <a href=""
                        class="text-gray-600 text-sm rounded-r-full p-3 py-1.5 border-[1px] border-l-0 border-green-400 hover:bg-green-400 hover:text-white transition-all ease-in-out">
                        Change Password
                    </a>
                </div> --}}

                <p class="text-center text-3xl">Coming Soon...</p>
            </div>
        </div>
    </div>

</div>

@include('home.footer')
