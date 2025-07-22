<body>
    <style>
        /* Mobile menu animations */
        .animate-slide-down {
            animation: slideDown 0.3s ease-in-out forwards;
        }

        .animate-slide-up {
            animation: slideUp 0.3s ease-in-out forwards;
        }

        @keyframes slideDown {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideUp {
            0% {
                transform: translateY(0);
                opacity: 1;
            }

            100% {
                transform: translateY(-100%);
                opacity: 0;
            }
        }

        /* Dropdown animations */
        .animate-fade-in {
            animation: fadeIn 0.3s ease-in-out forwards;
        }

        .animate-fade-out {
            animation: fadeOut 0.3s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        #navbar {
            position: fixed;
            /* Adjust this value as needed */
            width: 100%;
            transition: top 0.3s all;
            /* Transition for the top property */
        }

        .stt {
            background: #ffffff36;
            backdrop-filter: blur(20px);
        }
    </style>
</body>

<div class="fixed z-50 top-0 mx-auto w-full bg-white shadow" id="navbar">
    <div class="custom-container mx-auto">
        <!-- Hedaer Area-->
        <div class="flex items-center py-4 hidden md:flex">
            <div class="w-1/5">
                <a href="{{ url('/') }}"><img src="../../img/turfease-logo.png" class="w-36 h-6"></a>
            </div>
            <div class="w-3/4 justify-start hidden sm:flex sm:items-center">
                <a href="#"
                    class="text-black text-base font-semibold transi duration-200 hover:border-b-2 active:border-b-2 hover:text-[#06B24E] mr-6 font-vietnampro">Feed</a>
                <a href="{{ url('turf-list') }}"
                    class="text-black text-base font-semibold transi duration-200 hover:border-b-2 active:border-b-2 hover:text-[#06B24E] mr-6 font-vietnampro">Turf</a>
                <a href="#"
                    class="text-black text-base font-semibold transi duration-200 hover:border-b-2 active:border-b-2 hover:text-[#06B24E] mr-6 font-vietnampro">Tournament</a>
                <a href="{{ url('manager-request') }}"
                    class="text-black text-base font-semibold transi duration-200 hover:border-b-2 active:border-b-2 hover:text-[#06B24E] mr-4 font-vietnampro">List
                    Your Turf</a>
            </div>

            <div class="w-1/4 justify-end hidden sm:flex sm:items-center">
                @if (Route::has('login'))
                    @auth
                        <p class="mr-2 text-base font-vietnampro font-medium text-[#06B24E]">{{ $userAll->f_name }}</p>
                        <div class="relative" id="dropDownButton">
                            <img src="../../img/{{ $userAll->pro_pic }}"
                                class="w-9 h-9 cursor-pointer p-[1.5px] rounded-full border-2 border-[#06B24E]"
                                onclick="toggleDropDown(event)" alt="">

                            <div class="absolute hidden overflow-hidden top-12 right-0 shadow w-52 rounded" id="dropdown">
                                <a href="{{ url('userProfile') }}"
                                    class="block bg-white text-black px-5 py-3 hover:bg-slate-800 hover:text-white">Profile</a>
                                <a href="{{ url('termsPolicy') }}"
                                    class="block bg-white text-black px-5 py-3 hover:bg-slate-800 hover:text-white">Terms
                                    and Policy</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-start bg-white text-black px-5 py-3 hover:bg-slate-800 hover:text-white">Logout</button>
                                </form>
                            </div>
                        </div>
                        {{-- <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form> --}}
                    @else
                        <a href="{{ url('login') }}"
                            class="text-black text-base transition-all duration-300 border-red-400 hover:text-white hover:bg-[#06B24E] rounded-lg px-3 py-2 font-semibold mr-4 font-vietnampro">Login</a>
                        <a href="{{ url('register') }}"
                            class="text-white text-base font-semibold font-vietnampro bg-[#06B24E] transition duration-300 hover:bg-[#057534] px-3 py-2 rounded-lg">Register</a>
                    @endif
                @endauth
            </div>

            <div class="sm:hidden cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-600" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12.9499909,17 C12.7183558,18.1411202 11.709479,19 10.5,19 C9.29052104,19 8.28164422,18.1411202 8.05000906,17 L3.5,17 C3.22385763,17 3,16.7761424 3,16.5 C3,16.2238576 3.22385763,16 3.5,16 L8.05000906,16 C8.28164422,14.8588798 9.29052104,14 10.5,14 C11.709479,14 12.7183558,14.8588798 12.9499909,16 L20.5,16 C20.7761424,16 21,16.2238576 21,16.5 C21,16.7761424 20.7761424,17 20.5,17 L12.9499909,17 Z M18.9499909,12 C18.7183558,13.1411202 17.709479,14 16.5,14 C15.290521,14 14.2816442,13.1411202 14.0500091,12 L3.5,12 C3.22385763,12 3,11.7761424 3,11.5 C3,11.2238576 3.22385763,11 3.5,11 L14.0500091,11 C14.2816442,9.85887984 15.290521,9 16.5,9 C17.709479,9 18.7183558,9.85887984 18.9499909,11 L20.5,11 C20.7761424,11 21,11.2238576 21,11.5 C21,11.7761424 20.7761424,12 20.5,12 L18.9499909,12 Z M9.94999094,7 C9.71835578,8.14112016 8.70947896,9 7.5,9 C6.29052104,9 5.28164422,8.14112016 5.05000906,7 L3.5,7 C3.22385763,7 3,6.77614237 3,6.5 C3,6.22385763 3.22385763,6 3.5,6 L5.05000906,6 C5.28164422,4.85887984 6.29052104,4 7.5,4 C8.70947896,4 9.71835578,4.85887984 9.94999094,6 L20.5,6 C20.7761424,6 21,6.22385763 21,6.5 C21,6.77614237 20.7761424,7 20.5,7 L9.94999094,7 Z M7.5,8 C8.32842712,8 9,7.32842712 9,6.5 C9,5.67157288 8.32842712,5 7.5,5 C6.67157288,5 6,5.67157288 6,6.5 C6,7.32842712 6.67157288,8 7.5,8 Z M16.5,13 C17.3284271,13 18,12.3284271 18,11.5 C18,10.6715729 17.3284271,10 16.5,10 C15.6715729,10 15,10.6715729 15,11.5 C15,12.3284271 15.6715729,13 16.5,13 Z M10.5,18 C11.3284271,18 12,17.3284271 12,16.5 C12,15.6715729 11.3284271,15 10.5,15 C9.67157288,15 9,15.6715729 9,16.5 C9,17.3284271 9.67157288,18 10.5,18 Z" />
                </svg>
            </div>
        </div>

        <div class="block sm:hidden bg-white border-t-2 py-2 px-4 overflow-x-hidden">
            <div class="flex justify-center items-center py-2">
                <div class="w-1/3 sm:w-auto">
                    <a href="{{ url('/') }}"><img src="../../img/turfease-logo.png" class="w-auto h-6"></a>
                </div>
                <div class="sm:hidden ml-auto">
                    <button type="button" class="text-green-600 focus:outline-none" onclick="toggleMobileMenu()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12.9499909,17 C12.7183558,18.1411202 11.709479,19 10.5,19 C9.29052104,19 8.28164422,18.1411202 8.05000906,17 L3.5,17 C3.22385763,17 3,16.7761424 3,16.5 C3,16.2238576 3.22385763,16 3.5,16 L8.05000906,16 C8.28164422,14.8588798 9.29052104,14 10.5,14 C11.709479,14 12.7183558,14.8588798 12.9499909,16 L20.5,16 C20.7761424,16 21,16.2238576 21,16.5 C21,16.7761424 20.7761424,17 20.5,17 L12.9499909,17 Z M18.9499909,12 C18.7183558,13.1411202 17.709479,14 16.5,14 C15.290521,14 14.2816442,13.1411202 14.0500091,12 L3.5,12 C3.22385763,12 3,11.7761424 3,11.5 C3,11.2238576 3.22385763,11 3.5,11 L14.0500091,11 C14.2816442,9.85887984 15.290521,9 16.5,9 C17.709479,9 18.7183558,9.85887984 18.9499909,11 L20.5,11 C20.7761424,11 21,11.2238576 21,11.5 C21,11.7761424 20.7761424,12 20.5,12 L18.9499909,12 Z M9.94999094,7 C9.71835578,8.14112016 8.70947896,9 7.5,9 C6.29052104,9 5.28164422,8.14112016 5.05000906,7 L3.5,7 C3.22385763,7 3,6.77614237 3,6.5 C3,6.22385763 3.22385763,6 3.5,6 L5.05000906,6 C5.28164422,4.85887984 6.29052104,4 7.5,4 C8.70947896,4 9.71835578,4.85887984 9.94999094,6 L20.5,6 C20.7761424,6 21,6.22385763 21,6.5 C21,6.77614237 20.7761424,7 20.5,7 L9.94999094,7 Z M7.5,8 C8.32842712,8 9,7.32842712 9,6.5 C9,5.67157288 8.32842712,5 7.5,5 C6.67157288,5 6,5.67157288 6,6.5 C6,7.32842712 6.67157288,8 7.5,8 Z M16.5,13 C17.3284271,13 18,12.3284271 18,11.5 C18,10.6715729 17.3284271,10 16.5,10 C15.6715729,10 15,10.6715729 15,11.5 C15,12.3284271 15.6715729,13 16.5,13 Z M10.5,18 C11.3284271,18 12,17.3284271 12,16.5 C12,15.6715729 11.3284271,15 10.5,15 C9.67157288,15 9,15.6715729 9,16.5 C9,17.3284271 9.67157288,18 10.5,18 Z" />
                        </svg>
                    </button>
                </div>
                <div class="hidden sm:flex sm:w-3/4 sm:justify-start sm:items-center">
                    <a href="#"
                        class="text-black text-base font-semibold transi duration-200 hover:border-b-2 active:border-b-2 hover:text-[#06B24E] mr-6 font-vietnampro">Feed</a>
                    <a href="turf-lists.html"
                        class="text-black text-base font-semibold transi duration-200 hover:border-b-2 active:border-b-2 hover:text-[#06B24E] mr-6 font-vietnampro">Turf</a>
                    <a href="#"
                        class="text-black text-base font-semibold transi duration-200 hover:border-b-2 active:border-b-2 hover:text-[#06B24E] mr-6 font-vietnampro">Tournament</a>
                    <a href="#"
                        class="text-black text-base font-semibold transi duration-200 hover:border-b-2 active:border-b-2 hover:text-[#06B24E] mr-4 font-vietnampro">List
                        Your Turf</a>
                </div>
                <div class="hidden sm:flex sm:w-1/4 sm:justify-end sm:items-center">
                    @if (Route::has('login'))
                        @auth
                            <p class="mr-2 text-base font-vietnampro font-medium text-[#06B24E]">{{ $userAll->f_name }}</p>
                            <div class="relative" id="dropDownButton">
                                <img src="../img/{{ $userAll->pro_pic }}"
                                    class="w-9 h-9 cursor-pointer p-[1.5px] rounded-full border-2 border-[#06B24E]"
                                    onclick="toggleDropDown(event)" alt="">
                                <div class="absolute hidden overflow-hidden top-12 right-0 shadow w-52 rounded"
                                    id="dropdown">
                                    <a href="{{ url('userProfile') }}"
                                        class="block bg-white text-black px-5 py-3 hover:bg-slate-800 hover:text-white">Profile</a>
                                    <a href="{{ url('termsPolicy') }}"
                                        class="block bg-white text-black px-5 py-3 hover:bg-slate-800 hover:text-white">Terms
                                        and Policy</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="block w-full text-start bg-white text-black px-5 py-3 hover:bg-slate-800 hover:text-white">Logout</button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <a href="{{ url('login') }}"
                                class="text-black text-base transition-all duration-300 border-red-400 hover:text-white hover:bg-[#06B24E] rounded-lg px-3 py-2 font-semibold mr-4 font-vietnampro">Login</a>
                            <a href="{{ url('register') }}"
                                class="text-white text-base font-semibold font-vietnampro bg-[#06B24E] transition duration-300 hover:bg-[#057534] px-3 py-2 rounded-lg">Register</a>
                        @endauth
                    @endif
                </div>
            </div>
            <!-- Mobile Menu -->
            <div class="fixed inset-0 z-10 overflow-y-auto bg-white/80 lg:hidden hidden" id="mobile-menu">
                <div class="min-h-screen flex flex-col items-center justify-center">
                    <button type="button" class="mb-4 text-purple-600 focus:outline-none" onclick="toggleMobileMenu()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <a href="#"
                        class="text-black text-base font-semibold transi duration-200 hover:border-b-2 active:border-b-2 hover:text-[#06B24E] mb-4 font-vietnampro">Feed</a>
                    <a href="turf-lists.html"
                        class="text-black text-base font-semibold transi duration-200 hover:border-b-2 active:border-b-2 hover:text-[#06B24E] mb-4 font-vietnampro">Turf</a>
                    <a href="#"
                        class="text-black text-base font-semibold transi duration-200 hover:border-b-2 active:border-b-2 hover:text-[#06B24E] mb-4 font-vietnampro">Tournament</a>
                    <a href="#"
                        class="text-black text-base font-semibold transi duration-200 hover:border-b-2 active:border-b-2 hover:text-[#06B24E] mb-4 font-vietnampro">List
                        Your Turf</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        const body = document.body;

        if (mobileMenu.classList.contains('hidden')) {
            // Open mobile menu
            body.style.overflow = 'hidden'; // Disable scroll on the body
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('animate-slide-down');
        } else {
            // Close mobile menu
            body.style.overflow = 'auto'; // Enable scroll on the body
            mobileMenu.classList.add('animate-slide-up');
            setTimeout(() => {
                mobileMenu.classList.remove('animate-slide-up', 'animate-slide-down');
                mobileMenu.classList.add('hidden');
            }, 300); // Adjust the duration to match the animation duration
        }
    }

    function toggleDropDown(event) {
        const dropDownButton = event.currentTarget.parentNode;
        const dropdown = dropDownButton.querySelector('#dropdown');

        if (dropdown.classList.contains('hidden')) {
            // Open dropdown
            dropdown.classList.remove('hidden');
            dropdown.classList.add('animate-fade-in');
        } else {
            // Close dropdown
            dropdown.classList.add('animate-fade-out');
            setTimeout(() => {
                dropdown.classList.remove('animate-fade-in', 'animate-fade-out');
                dropdown.classList.add('hidden');
            }, 300); // Adjust the duration to match the animation duration
        }
    }
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
            document.getElementById("navbar").classList.add("stt");
        } else {
            document.getElementById("navbar").style.top = "-73px";
        }
        prevScrollpos = currentScrollPos;
    }
</script>
