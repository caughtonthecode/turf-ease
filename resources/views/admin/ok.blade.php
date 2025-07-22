{{-- <!DOCTYPE html>
<html lang="en">

<head>
    @include('turfAdmin.css')
    <title>Turf Admin Panel - TurfEase</title>
</head>

<body>

    <div class="flex h-screen bg-cover">
        <!-- Sidebar -->
        <div class="w-80 bg-[#00b737] shadow-md relative">
            <div class="flex flex-row items-center justify-center h-24 pr-16">
                <a href="{{ url('/') }}">
                    <img src="img/favicon.png" class="w-11" alt="">
                </a>
                <a href="{{ url('/') }}" class="text-xl pl-1  text-white uppercase">TurfEase</a>
            </div>
            <ul class="mt-7 flex flex-col items-center space-y-4">
                <li
                    class="py-2.5 flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
                    <a href="{{ url('dashboard') }}" class=" flex items-center w-full px-14">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 6a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V6zm-1 7a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-1 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM5 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-1 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Dashboard
                    </a>
                </li>

                <li
                    class="py-2.5 flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
                    <a href="{{ url('myProfile') }}" class=" flex items-center w-full px-14">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
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
                    class="py-2.5 flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
                    <a href="{{ url('bookings') }}" class=" flex items-center w-full px-14">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 6a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V6zm-1 7a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-1 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM5 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-1 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Booking
                    </a>
                </li>

                <li
                    class="py-2.5 flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
                    <a href="{{ url('view-turf') }}" class=" flex items-center w-full px-14">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
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
                    class="py-2.5 flex justify-start text-white text-lg hover:bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
                    <a href="{{ url('myWallet') }}" class=" flex items-center w-full px-14">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
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

        <div class="flex-grow pt-8 pl-10 p-6 bg-gray-100">
            <h1 class="text-xl text-black inline-block">Today,
                <span class="text-sm">
                    {{ date('j F, Y') }}
                </span>
            </h1>
        </div>
    </div>
</body>

</html> --}}


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex justify-center mt-8">
        <button id="notificationButton"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Show
            Notification</button>
    </div>

    <script>
        document.getElementById("notificationButton").addEventListener("click", function() {
            // Show notification
            var notification = document.createElement("div");
            notification.className =
                "notification-toast bg-white shadow-lg rounded-lg w-80 mx-auto mt-4 relative transform opacity-0 transition-all duration-300";
            notification.innerHTML =
                `
            <div class="flex items-center justify-between px-5 py-3">
              <div class="flex items-center">
                <div class="rounded-full bg-green-500 p-0.5">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div class="ml-4">
                  <p class="text-lg font-semibold text-gray-800">Success!</p>
                  <p class="text-gray-600">Turf added successfully</p>
                </div>
              </div>
              <button id="closeButton" class="text-gray-500 hover:text-gray-800">
                <svg class="w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
            <div id="progress" class="progress bg-gradient-to-l from-green-500 to-blue-500 h-1 mt-1"></div>`;

            document.body.appendChild(notification);

            // Trigger reflow to apply initial transform and opacity
            notification.offsetHeight;

            // Fade in notification
            notification.classList.remove('opacity-0', 'translate-x-2');
            notification.classList.add('opacity-100', 'translate-x-full');

            // Set progress bar width
            var progress = 0;
            var progressBar = notification.querySelector("#progress");
            var progressInterval;
            var closeButton = notification.querySelector("#closeButton");
            var hoverTime = 0;
            var remainingTime = 3000;

            function startProgress() {
                progressInterval = setInterval(function() {
                    progress += 1;
                    progressBar.style.width = progress + "%";
                    remainingTime -= 30;
                    if (progress >= 100) {
                        clearInterval(progressInterval);
                        closeNotification();
                    }
                }, 30);
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
        });
    </script>


</body>

</html> --}}

{{-- sidebar --}}

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collapsible Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional CSS for smooth transitions */
        #sidebar {
            transition: width 0.5s ease;
        }

        .sidebar-icon {
            display: none;
        }

        #sidebar.collapsed {
            width: 64px;
        }

        #sidebar.collapsed .sidebar-icon {
            display: block;
        }

        #sidebar.collapsed .sidebar-title {
            display: none;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            #sidebar {
                width: 64px;
            }

            #sidebar.collapsed {
                width: 64px;
            }

            #sidebar.collapsed .sidebar-title {
                display: none;
            }

            #sidebar.collapsed .sidebar-icon {
                display: block;
            }
        }
    </style>
</head>

<body>

    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-gray-800 w-64 px-8 py-4">
            <!-- Your sidebar content goes here -->
            <h1 class="text-white text-2xl font-semibold sidebar-title">Sidebar</h1>
            <div class="sidebar-icon">
                <!-- Sidebar icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-grow p-8">
            <!-- Content goes here -->
            <h1>Main Content</h1>
            <button id="toggleSidebar" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Toggle Sidebar</button>
        </div>
        <div class="w-20 h-20 xsm:bg-red-400 md:bg-green-500 xl:bg-black">

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Toggle sidebar visibility
            $("#toggleSidebar").click(function() {
                $("#sidebar").toggleClass("collapsed");
            });
        });
    </script>

</body>

</html> --}}

<!-- Include Tailwind CSS via CDN -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

{{-- <div class="max-w-2xl mx-auto">
    <div class="border-b border-gray-200">
        <!-- Tab buttons -->
        <div class="flex">
            <button id="tab1Button" class="py-2 px-4 bg-gray-200 hover:bg-gray-300 focus:outline-none">Tab 1</button>
            <button id="tab2Button" class="py-2 px-4 bg-gray-200 hover:bg-gray-300 focus:outline-none">Tab 2</button>
            <button id="tab3Button" class="py-2 px-4 bg-gray-200 hover:bg-gray-300 focus:outline-none">Tab 3</button>
        </div>
    </div>

    <!-- Tab contents -->
    <div class="mt-4" id="tab1Content">
        <p>Content of Tab 1</p>
    </div>
    <div class="hidden mt-4" id="tab2Content">
        <p>Content of Tab 2</p>
    </div>
    <div class="hidden mt-4" id="tab3Content">
        <p>Content of Tab 3</p>
    </div>
</div>

<!-- Include JavaScript -->
<script>
    // Get tab buttons and tab contents
    const tab1Button = document.getElementById('tab1Button');
    const tab2Button = document.getElementById('tab2Button');
    const tab3Button = document.getElementById('tab3Button');
    const tab1Content = document.getElementById('tab1Content');
    const tab2Content = document.getElementById('tab2Content');
    const tab3Content = document.getElementById('tab3Content');

    // Event listeners for tab buttons
    tab1Button.addEventListener('click', () => {
        // Show tab 1 content and hide others
        tab1Content.classList.remove('hidden');
        tab2Content.classList.add('hidden');
        tab3Content.classList.add('hidden');
    });

    tab2Button.addEventListener('click', () => {
        // Show tab 2 content and hide others
        tab1Content.classList.add('hidden');
        tab2Content.classList.remove('hidden');
        tab3Content.classList.add('hidden');
    });

    tab3Button.addEventListener('click', () => {
        // Show tab 3 content and hide others
        tab1Content.classList.add('hidden');
        tab2Content.classList.add('hidden');
        tab3Content.classList.remove('hidden');
    });
</script>
  --}}

{{-- <div class="relative">
    <!-- Sidebar Toggle Button -->
    <button id="sidebarToggleBtn"
        class="fixed z-50 bottom-4 right-4 bg-blue-500 text-white rounded-full p-3 shadow-md focus:outline-none">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Sidebar -->
    <div id="sidebar"
        class="fixed inset-0 z-40 bg-black bg-opacity-50 hidden transition-opacity duration-300 opacity-0">
        <div
            class="absolute inset-y-0 left-0 w-96 bg-white shadow-lg transition-transform duration-300 transform -translate-x-full">
            <div class="flex justify-between items-center bg-blue-500 text-white py-4 px-6">
                <h3 class="text-lg font-semibold">Menu</h3>
                <button id="sidebarCloseBtn" class="focus:outline-none">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <nav class="mt-6">
                <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100">
                    <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="ml-3 text-gray-700">Home</span>
                </a>
                <!-- Add more menu items here -->
            </nav>
        </div>
    </div>
</div>

<script>
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
    const sidebar = document.getElementById('sidebar');
    const sidebarCloseBtn = document.getElementById('sidebarCloseBtn');
    let sidebarOpen = false;

    function toggleSidebar() {
        if (sidebarOpen) {
            closeSidebar();
        } else {
            openSidebar();
        }
    }

    function openSidebar() {
        sidebar.classList.remove('hidden');
        sidebar.classList.add('flex');
        setTimeout(() => {
            sidebar.classList.remove('opacity-0');
            sidebar.firstElementChild.classList.remove('-translate-x-full');
            sidebarOpen = true;
        }, 100);
    }

    function closeSidebar() {
        sidebar.classList.add('opacity-0');
        sidebar.firstElementChild.classList.add('-translate-x-full');
        setTimeout(() => {
            sidebar.classList.remove('flex');
            sidebar.classList.add('hidden');
            sidebarOpen = false;
        }, 300);
    }

    sidebarToggleBtn.addEventListener('click', toggleSidebar);
    sidebarCloseBtn.addEventListener('click', closeSidebar);
    sidebar.addEventListener('click', (event) => {
        if (event.target === sidebar) {
            closeSidebar();
        }
    });
</script> --}}

{{--
<div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
    <div class="fixed flex flex-col top-0 left-0 w-64 bg-white h-full border-r">
        <div class="flex items-center justify-center h-14 border-b">
            <div>Sidebar Navigation By iAmine</div>
        </div>
        <div class="overflow-y-auto overflow-x-hidden flex-grow">
            <ul class="flex flex-col py-4 space-y-1">
                <li class="px-5">
                    <div class="flex flex-row items-center h-8">
                        <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
                    </div>
                </li>
                <li>
                    <a href="#"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                </path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Inbox</span>
                        <span
                            class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-indigo-500 bg-indigo-50 rounded-full">New</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                </path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
                        <span
                            class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>
                    </a>
                </li>
                <li class="px-5">
                    <div class="flex flex-row items-center h-8">
                        <div class="text-sm font-light tracking-wide text-gray-500">Tasks</div>
                    </div>
                </li>
                <li>
                    <a href="#"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Available Tasks</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Clients</span>
                        <span
                            class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-green-500 bg-green-50 rounded-full">15</span>
                    </a>
                </li>
                <li class="px-5">
                    <div class="flex flex-row items-center h-8">
                        <div class="text-sm font-light tracking-wide text-gray-500">Settings</div>
                    </div>
                </li>
                <li>
                    <a href="#"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div> --}}

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turf Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Turf Categories</h1>
        <div class="flex justify-between mb-4">
            <div x-data="{ search: '' }">
                <input x-model="search" type="text" placeholder="Search categories..."
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Filters
                </button>
                <div x-show="open" @click.away="open = false"
                    class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-lg z-10">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Category 1</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Category 2</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Category 3</a>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Category Cards -->
            <a href="#" class="block bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition duration-300">
                <img src="img/football_icon.png" alt="Football" class="w-12 h-12 mb-2 mx-auto">
                <h3 class="text-center text-lg font-semibold">Football</h3>
            </a>
            <!-- Add more category cards here -->
        </div>
    </div>
</body>

</html> --}}

{{-- <div class="px-lg-3 px-0">
    <div class="row mt-2">
        <div class="col-lg-12 mb-3">
            <div class="p-3 bg-gray-800 rounded">
                <p class="text-xl mb-1 font-bold text-white">Demo- 2 Sports Arena</p>
                <p class="text-sm m-0 pb-1 text-gray-400">
                    <i class="fas fa-location-dot text-red-500 mr-1"></i>
                    <span class="text-white">Near Parade Ground, Chakbazar, Chattogram, Chattogram</span>
                </p>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="text-left text-white">
                <label class="mb-2 text-sm font-medium">Your Name</label>
                <input type="text" class="form-control bg-gray-700 text-white py-2 text-sm"
                    placeholder="Enter your name" value="Samin Sadat" />
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="text-left text-white">
                <label class="mb-2 text-sm font-medium">Mobile Number</label>
                <input type="number" class="form-control bg-gray-700 text-white py-2 text-sm"
                    placeholder="Enter your mobile number" value="01744558735" />
            </div>
        </div>
        <div class="col-lg-12 mb-2 hidden">
            <p class="text-white">asd</p>
        </div>
        <div class="col-lg-12 mb-2">
            <label class="mb-2 text-sm font-medium text-white">Select Sports &amp; Ground</label>
            <div class="flex my-1">
                <div class="pr-2">
                    <span class="cursor-pointer border-0 text-white rounded-md px-3 text-xs py-2 bg-gray-800">
                        <span class="capitalize">Unit-1: 7 vs 7 (football)</span>
                    </span>
                </div>
            </div>
            <small class="text-xs text-green-500">
                <span class="text-green-400">*</span>Tap sports ground to select for booking.
            </small>
        </div>
        <div class="col-lg-6 mb-3">
            <label class="mb-2 text-sm font-medium text-white">Select Slot Period</label>
            <div class="flex">
                <div class="flex px-3 mr-2 py-2 text-xs items-center text-white rounded-md bg-gray-800 cursor-pointer">
                    <img src="/night.png" class="slot_icon pr-2" />
                    Mid Night
                </div>
                <div class="flex px-3 mr-2 py-2 text-xs items-center text-white rounded-md bg-gray-700 cursor-pointer">
                    <img src="/sun.png" class="slot_icon pr-2" />
                    Day
                </div>
                <div class="flex px-3 mr-2 py-2 text-xs items-center text-white rounded-md bg-gray-700 cursor-pointer">
                    <img src="/full-moon.png" class="slot_icon pr-2" />
                    Night
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <label class="mb-2 text-sm font-medium text-white">Select Date</label>
            <input min="2024-05-04" type="date" class="form-control bg-gray-700 text-white py-2 text-sm"
                placeholder="" value="2024-05-04" />
        </div>
        <div class="col-lg-12 mb-3 pt-2">
            <label class="mb-2 text-sm font-medium text-white">Choose Your Slot</label>
            <div class="bg-gray-800 rounded-lg p-3 pb-2">
                <p class="text-xs mb-2 text-white">
                    <span class="text-yellow-500 text-xs">
                        <i class="fas fa-triangle-exclamation mr-1"></i>
                    </span>
                    You should select minimum 2 slot for confirm your booking.
                </p>
                <p class="text-xs mb-2 text-white">
                    <span class="text-yellow-500 text-xs">
                        <i class="fas fa-triangle-exclamation mr-1"></i>
                    </span>
                    50BDT discount available for more than 2 slot booking.
                </p>
                <div class="row px-1">
                    <div class="col-lg-3 px-lg-2 p-0 mb-2 col-6">
                        <p class="bg-green-500 rounded px-2 p-1 text-sm ms-2 cursor-pointer">
                            <span class="text-gray-800">
                                <i class="far fa-flag mr-1"></i>
                                12:00 AM
                            </span>
                            -
                            <span class="text-gray-800">12:30 AM</span>
                        </p>
                    </div>
                    <div class="col-lg-3 px-lg-2 p-0 mb-2 col-6">
                        <p class="bg-gray-700 rounded px-2 p-1 text-sm ms-2 cursor-pointer">
                            <span class="text-gray-400">
                                <i class="far fa-flag mr-1"></i>
                                12:30 AM
                            </span>
                            -
                            <span class="text-gray-400">01:00 AM</span>
                        </p>
                    </div>
                    <!-- Add more slot divs as needed -->
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="rounded-lg bg-gray-800">
                <div class="flex items-center justify-between p-3">
                    <div class="flex items-center">
                        <img src="/3d-wallet.png" class="payment-icon mr-2" />
                        <p class="m-0 text-base text-white">Payable Amount</p>
                    </div>
                    <p class="text-green-500 text-lg font-bold m-0">Sub Total: 600 BDT</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center my-3">
            <div class="flex justify-end">
                <div class="w-auto bg-green-500 text-base text-white p-2 rounded-lg cursor-pointer">
                    Checkout <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Sidebar -->


{{-- <div id="sidebar" class="fixed inset-y-0 right-0 w-80 bg-gray-800 shadow-lg overflow-y-auto">
    <div class="px-4 py-3">
        <div class="mb-3">
            <p class="text-white text-xl font-bold mb-1">Demo- 2 Sports Arena</p>
            <p class="text-gray-300 text-sm">Near Parade Ground, Chakbazar, Chattogram, Chattogram</p>
        </div>

        <div class="mb-3">
            <label for="name" class="block text-sm font-medium text-gray-300">Your Name</label>
            <input type="text" id="name" class="mt-1 block w-full bg-gray-700 text-white py-2 px-3 rounded-md"
                placeholder="Enter your name" value="Samin Sadat">
        </div>

        <div class="mb-3">
            <label for="mobile" class="block text-sm font-medium text-gray-300">Mobile Number</label>
            <input type="number" id="mobile" class="mt-1 block w-full bg-gray-700 text-white py-2 px-3 rounded-md"
                placeholder="Enter your mobile number" value="01744558735">
        </div>

        <div class="mb-3">
            <label class="block text-sm font-medium text-gray-300">Select Sports & Ground</label>
            <!-- Add your sports and ground selection options here -->
        </div>

        <div class="mb-3">
            <label class="block text-sm font-medium text-gray-300">Select Slot Period</label>
            <!-- Add your slot period selection options here -->
        </div>

        <div class="mb-3">
            <label class="block text-sm font-medium text-gray-300">Select Date</label>
            <input type="date" class="mt-1 block w-full bg-gray-700 text-white py-2 px-3 rounded-md" min="2024-05-05"
                value="2024-05-05">
        </div>

        <div class="mb-3">
            <label class="block text-sm font-medium text-gray-300">Choose Your Slot</label>
            <!-- Add your slot selection options here -->
        </div>

        <div class="mb-3">
            <div class="bg-gray-700 rounded-md p-3">
                <!-- Add your slot options here -->
            </div>
        </div>

        <div class="mb-3">
            <div class="bg-gray-900 rounded-md p-3 flex justify-between items-center">
                <div class="flex items-center">
                    <img src="/3d-wallet.png" alt="Payment Icon" class="w-6 h-6 mr-2">
                    <p class="text-white text-lg font-bold">Payable Amount</p>
                </div>
                <p class="text-green-500 text-lg font-bold">Sub Total: 0 BDT</p>
            </div>
        </div>

        <div class="text-center">
            <button id="checkoutBtn" class="bg-green-500 text-white py-2 px-4 rounded-md cursor-pointer">Checkout <i
                    class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>
</div> --}}

@include('home.header')
@include('home.homecss')
<div class="flex items-center justify-between px-5 py-3 bg-[#FFF0F0] relative rounded-md">
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
        class="bg-[#FFF0F0] hover:text-gray-800 absolute -top-3 -left-3 p-1 rounded-full text-[#E60000]">
        <svg class="w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            viewBox="0 0 24 24" stroke="currentColor">
            <path d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>
