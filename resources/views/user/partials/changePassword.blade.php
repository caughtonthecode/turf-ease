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
    <div class="custom-container mx-auto flex">
        <!-- User -->
        <div class="w-1/4">
            <div class="bg-white p-6 w-5/6 flex flex-col items-center rounded-xl">
                <img src="img/{{ $proPic }}" class="w-24 h-24 rounded-full" alt="">
                <p class="p-1 mt-2 text-gray-500 font-semibold">{{ $userFname }} {{ $userLname }}</p>
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
                <div class="max-w-md w-full bg-white p-8 rounded shadow-md">
                    <h2 class="text-3xl font-extrabold text-gray-800 mb-6">Change Password</h2>
                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4"
                            role="alert">
                            <strong>Error!</strong> {{ session('error') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4"
                            role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                        </div>
                    @endif

                    <form class="space-y-4" action="{{ route('changePassword') }}" method="POST">
                        @csrf

                        <div>
                            <label for="current_password" class="block text-sm font-medium text-gray-700">Current
                                Password</label>
                            <input id="current_password" name="current_password" type="password"
                                autocomplete="current-password" required
                                class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div>
                            <label for="new_password" class="block text-sm font-medium text-gray-700">New
                                Password</label>
                            <input id="new_password" name="new_password" type="password" autocomplete="new-password"
                                required
                                class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div>
                            <label for="new_password_confirmation"
                                class="block text-sm font-medium text-gray-700">Confirm
                                New Password</label>
                            <input id="new_password_confirmation" name="new_password_confirmation" type="password"
                                autocomplete="new-password" required
                                class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>

                        <div>
                            <button type="submit"
                                class="w-full px-4 py-2 bg-green-500 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Change
                                Password</button>

                            <a href="{{ url('userProfile') }}"
                                class="w-full block text-center mt-3 px-4 py-2 bg-gray-600 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Go
                                Back
                            </a>
                        </div>
                    </form>
                </div>
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
