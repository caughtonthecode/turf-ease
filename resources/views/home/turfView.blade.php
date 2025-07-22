@php
    // Decode the JSON string into an array
    $facilities = json_decode($turfs->facilities, true);
@endphp

<head>
    <title>{{ $turfs->turf_name }} - TurfEase</title>
    @include('home.homecss')
</head>
@include('home.header')

<div class="bg-gray-100 py-6 mt-16">
    <div class="flex relative z-50">
        <div id="toast-section" class="fixed -top-24 right-0 left-0 mx-auto">

        </div>
    </div>
    <div class="w-full lg:w-[60%] mx-auto px-4">
        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="relative">
                <img src="../turfAdmin/images/{{ $turfs->f_image }}" alt="Turf Image"
                    class="w-full h-52 lg:h-80 object-cover">
                {{-- <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-700 opacity-75"></div> --}}
            </div>
            @if (Auth::id())
                <div id="bookingSidebar"
                    class="fixed top-0 right-0 h-full lg:w-1/2 bg-white shadow-lg transform transition-transform duration-300 translate-x-full z-50 overflow-y-scroll">
                    <div class="flex justify-end p-4">
                        <button id="closeSidebarBtn" class="text-gray-600 hover:text-gray-800">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <form action="{{ route('confirmBooking', ['id' => $turfs->id]) }}" method="post">
                            @csrf
                            <div class="px-lg-3 px-0">
                                <div class="row mt-2">
                                    <div class="mb-3">
                                        <div class="p-3 rounded-md">
                                            <p class="text-gray-800 text-3xl font-bold mb-1">{{ $turfs->turf_name }}</p>
                                            <p class="text-gray-800 text-sm capitalize"><i
                                                    class="fas fa-location-dot text-danger text-red-600"></i>
                                                {{ $turfs->address . ', ' . $turfs->district . ', ' . $turfs->division }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4 bg-[#4ca714]/15 p-3 py-3.5 rounded-xl">
                                        <div class="mb-3">
                                            <div class="text-gray-800">
                                                <label for="name" class="block mb-2 text-sm font-semibold">Your
                                                    Name</label>
                                                <input type="text" id="name" name="user_name"
                                                    value="{{ $userAll->f_name }}"
                                                    class="bg-white border-0 text-gray-900 font-Poppins py-2 px-3 rounded-md w-full"
                                                    placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="text-gray-800">
                                                <label for="mobile"
                                                    class="block mb-2 text-sm font-semibold">Mobile</label>
                                                <input type="text" id="mobile" name="phone"
                                                    value="{{ $userAll->phone }}"
                                                    class="bg-white border-0 text-gray-900 font-Poppins py-2 px-3 rounded-md w-full"
                                                    placeholder="Enter your mobile number">
                                            </div>
                                        </div>
                                        <div class="w-1/2 pr-2 col-span-2">
                                            <label class="block mb-2 text-sm font-semibold text-gray-800">Select
                                                Date</label>
                                            <input min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" type="date"
                                                name="booking_time"
                                                class="text-gray-900 bg-white border-0 font-Poppins py-2 px-3 rounded-md w-full"
                                                placeholder="" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                                        </div>
                                        <div class="mb-3 col-span-2">
                                            <label class="block mb-2 text-sm font-semibold text-gray-800">
                                                Shift</label>
                                            <p
                                                class="text-gray-900 bg-white border-0 font-Poppins text-[15px] rounded-lg px-3 py-2 shadow w-24 capitalize">
                                                {{ $turfs->shift }} </p>
                                        </div>

                                        <div class="mb-3">
                                            <label class="block mb-2 text-sm font-semibold text-gray-800">Time
                                                Slot</label>
                                            <p
                                                class="inline-block text-white font-OpenSans text-[15px] rounded-lg px-2 py-2 bg-green-600">
                                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $turfs->open_time)->format('h:i A') }}
                                                -
                                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $turfs->close_time)->format('h:i A') }}
                                            </p>
                                            <p class="text-sm font-semibold text-gray-800 mt-6">Payment Method</p>
                                            <div class="flex items-center mt-2">
                                                <div>
                                                    <input type="radio" id="hand-cash" name="paymentMethod"
                                                        value="hand-cash" class="mr-2">
                                                    <label for="hand-cash"
                                                        class="mr-6 font-sans text-sm font-semibold text-gray-800">Hand
                                                        Cash</label>

                                                    <input type="radio" id="online-payment" name="paymentMethod"
                                                        value="online-payment" class="mr-2">
                                                    <label for="online-payment"
                                                        class="font-sans text-sm font-semibold text-gray-800">Online
                                                        Payment</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-lg-12">
                                        <div
                                            class="rounded-md bg-[#4ca714]/15 p-4 mt-4 flex justify-between items-center">
                                            <div class="flex items-center">
                                                <img src="../img/logo.png" class="w-6 h-6 mr-2" alt="Payment Icon">
                                                <p class="text-gray-900 text-lg font-semibold">Payable Amount</p>
                                            </div>
                                            <p class="text-gray-800 text-lg font-semibold">Sub Total: <span
                                                    class="text-green-600">{{ $turfs->price }}
                                                    BDT</span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center my-4">
                                        <div class="flex justify-end">
                                            <button type="submit"
                                                class="bg-green-500 text-white px-4 py-2 rounded-md cursor-pointer flex items-center">
                                                Pay Now <i class="fas fa-arrow-right ml-2"></i>
                                            </button>

                                            {{-- <button id="sslczPayBtn" token="if you have any token validation"
                                                postdata=""
                                                order="If you already have the transaction generated for current order"
                                                endpoint="/pay-via-ajax"> Pay Now
                                            </button> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endif

            <div class="p-8">
                <!-- Other content -->
                <div class="bg-white rounded-lg flex justify-between items-center">
                    <div class="flex items-center">
                        <img src="../img/{{ $userProPic }}" alt="Owner Image"
                            class="w-14 h-14 lg:w-32 lg:h-32 rounded-full mr-6">
                        <div>
                            <h3 class="text-lg font-bold mb-0 lg:mb-2 text-gray-900">{{ $turfs->turf_name }}</h3>

                            <p class="text-sm text-gray-700 mb-2 capitalize">
                                {{ $turfs->address . ', ' . $turfs->district . ', ' . $turfs->division }}
                            </p>
                            <a href="#"
                                class="text-gray-800 border-[1px] border-green-600 hover:bg-green-600 hover:text-white transition-colors px-3 py-0.5 lg:py-1 rounded-full text-sm lg:text-base">Get
                                Direction</a>

                        </div>
                    </div>
                    {{-- @if --}}
                    <button id="bookNowBtn"
                        class="bg-green-600 text-white w-[35%] lg:w-auto py-1 lg:py-2 lg:px-6 rounded-full shadow-md hover:bg-green-700 transition-colors duration-300">
                        Book Now
                    </button>
                </div>
                <div class="mt-10">
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="bg-[#4ca714]/15 shadow-md rounded-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-800">
                                Available Slots</h3>
                            <p
                                class="inline-block text-white font-OpenSans font-semibold text-[15px] rounded-full px-3 py-0.5 bg-green-400/100 shadow mt-2">
                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $turfs->open_time)->format('h:i A') }}
                                -
                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $turfs->close_time)->format('h:i A') }}
                            </p>
                        </div>
                        <div class="bg-[#4ca714] bg-opacity-15 shadow-md rounded-lg p-6">
                            <h3 class="text-lg font-semibold mb-2 text-gray-800">Price</h3>
                            <p
                                class="inline-block text-gray-800 font-OpenSans text-[15px] rounded-full px-3 py-0.5 font-semibold bg-white shadow">
                                BDT
                                {{ $turfs->price }}</p>
                        </div>
                        <div class="bg-[#4ca714] bg-opacity-15 shadow-md rounded-lg p-6">
                            <h3 class="mb-2 text-gray-800 text-lg font-semibold">
                                Shift</h3>
                            <p
                                class="inline-block text-gray-800 font-OpenSans font-semibold text-[15px] rounded-full px-3 py-0.5 bg-white capitalize">
                                {{ $turfs->shift }}</p>
                        </div>
                    </div>
                    <div>
                        <div class="bg-[#4ca714] bg-opacity-15 shadow-md rounded-lg p-6">
                            <h3
                                class="mb-2 text-gray-800 text-lg font-semibold bg-clip-text text-transparent bg-gradient-to-r from-black to-white">
                                Facilities</h3>
                            @if ($facilities)
                                <ul>
                                    @foreach ($facilities as $facility)
                                        <p
                                            class="inline-block text-gray-800 font-semibold rounded-full px-3 py-0.5 bg-white capitalize mr-1 mb-2 lg:mb-0">
                                            {{ $facility }}</p>
                                    @endforeach
                                </ul>
                            @else
                                <p>No facilities available</p>
                            @endif
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            {{-- @foreach ($turfs->facilities as $facility)
                                <div class="bg-indigo-100 rounded-lg p-4 text-center">
                                    <i class="{{ $facility->icon }} text-indigo-600 mb-2"></i>
                                    <p class="text-gray-700">{{ $facility->name }}</p>
                                </div>
                            @endforeach --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="bg-white rounded-lg overflow-hidden shadow-lg mt-6 p-6">
            <div class="tabs">
                <div class="grid grid-cols-3 lg:flex">
                    <button
                        class="tab-header py-2 px-4 text-gray-700 hover:text-gray-900 focus:outline-none bg-white font-semibold border-b-2 border-indigo-600 text-sm lg:text-base lg:w-1/5">Turf
                        Gallary</button>
                    <button
                        class="tab-header py-2 px-4 text-gray-700 hover:text-gray-900 focus:outline-none text-sm lg:text-base bg-white lg:w-1/5">About
                        Turf</button>
                    <button
                        class="tab-header py-2 px-4 text-gray-700 hover:text-gray-900 focus:outline-none bg-white text-sm lg:text-base lg:w-1/5">Review</button>
                </div>
                <div class="mt-4">
                    <div class="tab-content block">Turf Gallary</div>
                    <div class="tab-content hidden">{{ $turfs->description }}</div>
                    <div class="tab-content hidden">Review Section</div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('home.footer')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script>
    // No Logged User Toast for login
    @if (!Auth::id())
        const toastBtn = document.getElementById('bookNowBtn');
        toastBtn.addEventListener('click', showToast);

        function showToast() {
            // Show notification
            var toastSection = document.getElementById('toast-section');
            var notification = document.createElement("div");
            notification.className =
                "notification-toast bg-white shadow-lg rounded-lg w-96 mx-auto relative transform opacity-0 transition-all duration-300";
            notification.innerHTML =
                `
                <div class="flex items-center justify-between px-5 py-3 bg-[#FFF0F0] relative rounded-md mt-2">
    <div class="flex items-center">
        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
        <svg fill="#E50000" width="18px" height="18px" viewBox="-1.7 0 20.4 20.4" xmlns="http://www.w3.org/2000/svg"
            class="cf-icon-svg">
            <path
                d="M16.406 10.283a7.917 7.917 0 1 1-7.917-7.917 7.916 7.916 0 0 1 7.917 7.917zM9.48 14.367a1.003 1.003 0 1 0-1.004 1.003 1.003 1.003 0 0 0 1.004-1.003zM7.697 11.53a.792.792 0 0 0 1.583 0V5.262a.792.792 0 0 0-1.583 0z" />
        </svg>
        <div class="ml-1">
            <p class="text-sm font-semibold font-sans text-[#e60000]">Please login to continue</p>
        </div>
    </div>
    <button id="closeButton"
        class="bg-[#FFF0F0] hover:text-gray-800 absolute -top-2 -left-2 p-0.5 rounded-full text-[#E60000]">
        <svg class="w-3 h-3" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            viewBox="0 0 24 24" stroke="currentColor">
            <path d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>`;

            toastSection.appendChild(notification);

            // Trigger reflow to apply initial transform and opacity
            notification.offsetHeight;

            // Fade in notification
            notification.classList.remove('opacity-0', 'translate-y-0');
            notification.classList.add('opacity-100', 'translate-y-full');

            // Set progress bar width
            var progress = 100;
            var progressBar = notification.querySelector("#progress");
            var progressInterval;
            var closeButton = notification.querySelector("#closeButton");
            var hoverTime = 0;
            var remainingTime = 5000;

            function startProgress() {
                progressInterval = setInterval(function() {
                    progress -= 1;
                    progressBar.style.width = progress + "%";
                    remainingTime -= 50;
                    if (progress >= 100) {
                        clearInterval(progressInterval);
                        closeNotification();
                    }
                }, 50);
            }

            startProgress();

            // Pause progress on hover
            notification.addEventListener("mouseenter", function() {
                hoverTime = new Date().getTime();
                clearInterval(progressInterval);
            });

            // Resume progress on hover out
            notification.addEventListener("mouseleave", function() {
                var currentTime = new Date().getTime();
                remainingTime -= (currentTime - hoverTime);
                startProgress();
            });

            // Close notification on button click
            closeButton.addEventListener("click", function() {
                closeNotification();
            });

            // Close notification after 3 seconds if not hovered
            setTimeout(function() {
                if (hoverTime === 0) {
                    closeNotification();
                }
            }, remainingTime);

            // Function to close notification
            function closeNotification() {
                // Fade out notification
                notification.classList.remove('opacity-100', 'translate-y-0');
                notification.classList.add('opacity-0', 'translate-y-full');

                // Remove notification after transition
                setTimeout(function() {
                    notification.remove();
                    clearInterval(progressInterval);
                }, 300); // Duration of the transition effect
            }
        }
    @endif
    const sidebar = document.getElementById('bookingSidebar');
    const bookNowBtn = document.getElementById('bookNowBtn');
    const closeSidebarBtn = document.getElementById('closeSidebarBtn');

    bookNowBtn.addEventListener('click', () => {
        sidebar.classList.remove('translate-x-full');
        sidebar.classList.add('translate-x-0');
    });

    closeSidebarBtn.addEventListener('click', () => {
        sidebar.classList.remove('translate-x-0');
        sidebar.classList.add('translate-x-full');
    });


    const tabHeaders = document.querySelectorAll('.tab-header');
    const tabContents = document.querySelectorAll('.tab-content');

    tabHeaders.forEach((header, index) => {
        header.addEventListener('click', () => {
            // Remove active classes from all tab headers and hide all tab contents
            tabHeaders.forEach(header => header.classList.remove('bg-white', 'font-semibold',
                'border-b-2', 'border-indigo-600', 'text-indigo-600'));
            tabContents.forEach(content => content.classList.add('hidden'));

            // Add active class to the clicked tab header and show corresponding content
            header.classList.add('bg-white', 'font-semibold', 'border-b-2', 'border-indigo-600',
                'text-indigo-600');
            tabContents[index].classList.remove('hidden');
            tabContents[index].classList.add('block');
        });
    });

    // payment ssl

    var obj = {};
    obj.cus_name = $('#customer_name').val();
    obj.cus_phone = $('#mobile').val();
    obj.cus_email = $('#email').val();
    obj.cus_addr1 = $('#address').val();
    obj.amount = $('#total_amount').val();

    $('#sslczPayBtn').prop('postdata', obj);


    (function(window, document) {
        var loader = function() {
            var script = document.createElement("script"),
                tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
            loader);
    })(window, document);
</script>
