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

<div class="bg-[#ecf0f1] px-4 py-14">
    <div class="custom-container mx-auto flex mt-20">
        <!-- User -->
        <div class="w-1/4">
            <div class="bg-white p-6 w-5/6 flex flex-col items-center rounded-xl">
                <img src="img/{{ $proPic }}" class="w-24 h-24 rounded-full" alt="">
                <p class="p-1 mt-2 text-gray-500 font-semibold">{{ $userFname }} {{ $userLname }}</p>
            </div>

            <!-- Sidebar -->
            <div class="mt-10 px-3 py-10 bg-white w-5/6 rounded-lg">
                <ul class="space-y-4 flex flex-col items-center">

                    <li class="w-11/12 transition-all ease-in-out bg-slate-900 bg-opacity-10 rounded-full">
                        <a href="{{ url('userProfile') }}" id="profile-info-link"
                            class="px-6 py-3 block transition-all ease-in-out text-gray-800">
                            Personal Information
                        </a>
                    </li>

                    <li class="w-11/12 transition-all ease-in-out hover:bg-slate-900 hover:bg-opacity-10  rounded-full">
                        <a href="{{ url('booking-history') }}" id="booking-history-link"
                            class="px-6 py-3 block transition-all ease-in-out text-gray-800">
                            Booking History
                        </a>
                    </li>

                    <li class="w-11/12 transition-all ease-in-out hover:bg-slate-900 hover:bg-opacity-10  rounded-full">
                        <a href="{{ url('tournament') }}" id="tournament-link"
                            class="px-6 py-3  block transition-all ease-in-out text-gray-800">
                            Tournament
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Content -->
        <div class="w-2/3 bg-white rounded-lg">
            <div class="px-12 py-6">
                <p class="text-3xl text-gray-700 pb-8 pt-2 font-semibold">Personal Information</p>
                <div class="flex flex-col space-y-3">
                    <span class="shadow flex items-center rounded-xl px-8 bg-slate-100 py-3 space-x-6">
                        <p for="" class="text-gray-700 w-16">Name</p>
                        <p class="rounded-full text-gray-600 py-3"> {{ $userFname }}
                            {{ $userLname }} </p>
                    </span>
                    <span class="shadow flex items-center rounded-xl px-8 bg-slate-100 py-3 space-x-6">
                        <p for="" class="text-gray-700 w-16">Email</p>
                        <p class="rounded-full text-gray-600 py-3"> {{ $userEmail }} </p>
                    </span>
                    <span class="shadow flex items-center rounded-xl px-8 bg-slate-100 py-3 space-x-6">
                        <p for="" class="text-gray-700 w-16">Phone</p>
                        <p class="rounded-full text-gray-600 py-3"> {{ $userPhone }} </p>
                    </span>
                    <span class="shadow flex items-center rounded-xl px-8 bg-slate-100 py-3 space-x-6">
                        <p for="" class="text-gray-700 w-16">Address</p>
                        <p class="rounded-full text-gray-600 py-3"> {{ $userAddress }}
                        </p>
                    </span>
                </div>
                <div class="mt-10 pb-6">
                    <a href="{{ url('profile-update') }}"
                        class="text-gray-600 text-sm rounded-l-full p-3 py-1.5 border-[1px] border-green-400 hover:bg-green-400 hover:text-white transition-all ease-in-out">
                        Update Profile
                    </a>
                    <a href="{{ url('change-password') }}"
                        class="text-gray-600 text-sm rounded-r-full p-3 py-1.5 border-[1px] border-l-0 border-green-400 hover:bg-green-400 hover:text-white transition-all ease-in-out">
                        Change Password
                    </a>
                </div>


            </div>
        </div>
    </div>

</div>

@include('home.footer')
