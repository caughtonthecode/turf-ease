@php
    $userFname = $userAll->f_name;
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
                <p class="p-1 mt-2 text-gray-500 font-semibold">{{ $userFname }}</p>
            </div>

            <!-- Sidebar -->
            <div class="mt-10 px-3 py-10 bg-white w-5/6 rounded-lg">
                <ul class="space-y-4 flex flex-col items-center">

                    <li class="w-11/12 transition-all ease-in-out bg-slate-900 bg-opacity-10  rounded-full">
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
                <p class="text-3xl text-gray-700 font-semibold pb-6">Personal Information</p>

                @if (session('message'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4"
                        role="alert">
                        <strong>Success!</strong> {{ session('message') }}
                    </div>
                @endif

                <form action="{{ route('profile-update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col space-y-3">
                        <span class="shadow flex items-center rounded-xl px-8 bg-slate-100 py-3 space-x-6">
                            <label for="" class="text-gray-700 w-16">Name</label>
                            <input name="f_name"
                                class="rounded-full bg-slate-200 text-gray-600 py-3 border-0 px-4 focus:ring-colo"
                                value="{{ $userFname }}">
                            <span class="text-red-400 text-sm">
                                @error('f_name')
                                    {{ $message = 'Please fill the field' }}
                                @enderror
                            </span>
                        </span>

                        <span class="shadow flex items-center rounded-xl px-8 bg-slate-100 py-3 space-x-6">
                            <label for="" class="text-gray-700 w-16">Email</label>
                            <input name="email" class="rounded-full bg-slate-200 text-gray-600 py-3 border-0 px-4"
                                value="{{ $userEmail }}">
                            <span class="text-red-400 text-sm">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </span>
                        <span class="shadow flex items-center rounded-xl px-8 bg-slate-100 py-3 space-x-6">
                            <label for="" class="text-gray-700 w-16">Phone</label>
                            <input name="phone" class="rounded-full bg-slate-200 text-gray-600 py-3 border-0 px-4"
                                value="{{ $userPhone }}">
                            <span class="text-red-400 text-sm">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </span>
                        <span class="shadow flex items-center rounded-xl px-8 bg-slate-100 py-3 space-x-6">
                            <label for="" class="text-gray-700 w-16">Address</label>
                            <input name="address" class="rounded-full bg-slate-200 text-gray-600 py-3 border-0 px-4"
                                value="{{ $userAddress }}">
                        </span>
                        <span class="shadow flex items-center rounded-xl px-8 bg-slate-100 py-3 space-x-6">
                            <label for="fileInput" class="text-gray-700 w-1/6">Upload Photo</label>
                            <input name="pro_pic" type="file" id="fileInput" class="">
                        </span>
                    </div>
                    <div class="mt-10 pb-6">
                        <button type="submit"
                            class="text-gray-600 text-sm rounded-full p-3 py-1.5 border-[1px] border-green-400 hover:bg-green-400 hover:text-white transition-all ease-in-out mr-1">
                            Update Now
                        </button>
                        <a href="{{ url('userProfile') }}"
                            class="text-gray-600 text-sm rounded-full p-3 py-1.5 border-[1px] border-red-400 hover:bg-red-400 hover:text-white transition-all ease-in-out">
                            Cancel
                        </a>

                    </div>

                </form>


            </div>
        </div>
    </div>

</div>

@include('home.footer')


<script>
    // Check if there's a message in the URL and show modal if present
    @if (Session::has('message'))
        showModal('{{ Session::get('message') }}');
    @endif

    function showModal(message) {
        var modal = document.getElementById('myModal');
        var modalMessage = document.getElementById('modalMessage');

        modalMessage.innerText = message;
        modal.classList.remove('hidden');

        // Hide the modal after 3 seconds
        setTimeout(function() {
            modal.classList.add('hidden');
        }, 3000);
    }
</script>
