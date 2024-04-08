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

        <li class="flex justify-start text-white text-lg bg-[#008728] rounded-full w-11/12 transition-all ease-in-out">
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
        <h1 class="text-xl text-black inline-block">Today,
            <span class="text-sm">
                {{ date('j F, Y') }}
            </span>
        </h1>
        <div class="mt-10">
            <div class="bg-gray-100 min-h-screen">

                <!-- Main Content -->
                <main class="container mx-auto py-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <section>
                        <!-- Turf Lists -->
                        <section class="mb-8">
                            <div class="bg-white rounded-lg p-6">
                                <h2 class="text-2xl font-semibold mb-6">Turf Lists</h2>
                                <div class="overflow-x-auto">
                                    <table class="w-full">
                                        <thead>
                                            <tr class="bg-gray-200">
                                                <th class="py-4 px-6 text-left">Turf Name</th>
                                                <th class="py-4 px-6 text-left">Location</th>
                                                <th class="py-4 px-6 text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Turf List rows will go here -->
                                            <!-- Example Row -->
                                            <tr>
                                                <td class="py-4 px-6">Turf A</td>
                                                <td class="py-4 px-6">Location A</td>
                                                <td class="py-4 px-6 text-center">
                                                    <button
                                                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Edit</button>
                                                    <button
                                                        class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-300">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>


                        <!-- Create Coupon -->
                        <section>
                            <div class="bg-white rounded-lg p-6">
                                <h2 class="text-2xl font-semibold mb-6">Create Coupon</h2>
                                <form>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="couponCode">Coupon
                                            Code</label>
                                        <input
                                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="couponCode" type="text" placeholder="Enter coupon code">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="discount">Discount
                                            (%)</label>
                                        <input
                                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="discount" type="text" placeholder="Enter discount percentage">
                                    </div>
                                    <button
                                        class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300"
                                        type="submit">Create Coupon</button>
                                </form>
                            </div>
                        </section>
                    </section>

                    <!-- Add Turf Form -->
                    <section>
                        @php
                            print_r($errors);
                        @endphp
                        <div class="bg-white rounded-xl py-9 px-8">
                            <div class="glassy-bg p-6">
                                <h2 class="text-2xl font-semibold mb-6">Add Turf</h2>
                                <form action="{{ route('add-turf') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="turfName">Turf Name</label>
                                        <input
                                            class="appearance-none border-gray-200 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="turfName" name="turf_name" type="text" placeholder="Enter Turf name"
                                            value="{{ old('turf_name') }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2"
                                            for="turfName">Description</label>
                                        <textarea
                                            class="appearance-none border-gray-200 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-24"
                                            id="turfName" type="text" name="description" placeholder="Write short description about your turf"
                                            value="{{ old('description') }}"></textarea>
                                    </div>
                                    <div class="">
                                        <p class="block text-gray-700 font-bold mb-2">Select Location</p>
                                        <div class="mb-4">
                                            <label for="division-menu" class="block mb-2"></label>
                                            <select id="division-menu" name="division"
                                                class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300"
                                                value="{{ old('division') }}">
                                                <option value="" disabled selected>Please select a division</option>
                                                <option value="barisal">Barisal</option>
                                                <option value="chittagong">Chittagong</option>
                                                <option value="dhaka">Dhaka</option>
                                                <option value="khulna">Khulna</option>
                                                <option value="mymensingh">Mymensingh</option>
                                                <option value="rajshahi">Rajshahi</option>
                                                <option value="rangpur">Rangpur</option>
                                                <option value="sylhet">Sylhet</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="district-menu" class="block mb-2"></label>
                                            <select id="district-menu" name="district"
                                                class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300"
                                                disabled value="{{ old('district') }}">
                                                <option value="" disabled selected>Please select a division first
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-gray-700 font-bold mb-2"
                                                for="turfName">Address</label>
                                            <input
                                                class="appearance-none border-gray-200 border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline px-3"
                                                id="address" name="address" type="text" placeholder="Enter address"
                                                value="{{ old('address') }}">
                                        </div>
                                        <div class="mb-4">
                                            <label for="shift-menu" class="block mb-2">Shift</label>
                                            <select id="shift-menu" name="shift"
                                                class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300"
                                                value="{{ old('shift') }}">
                                                <option value="" disabled selected>Please select a shift</option>
                                                <option value="day">Day</option>
                                                <option value="evening">Evening</option>
                                                <option value="night">Night</option>
                                            </select>
                                        </div>
                                        <!-- Schedule Timer -->
                                        <div class="mb-4">
                                            <label for="" class="block mb-4">Schedule</label>
                                            <div class="flex items-center space-x-4">
                                                <!-- Start Time -->
                                                <div class="flex items-center space-x-2">
                                                    <span>From</span>
                                                    <input type="time" name="open_time"
                                                        class="block w-32 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                                        value="{{ old('open_time') }}">
                                                </div>
                                                <!-- End Time -->
                                                <div class="flex items-center space-x-2">
                                                    <span>To</span>
                                                    <input type="time" name="close_time"
                                                        class="block w-32 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                                        value="{{ old('close_time') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <label for="price"
                                                class="block text-sm font-medium text-gray-700 pb-3">Price</label>
                                            <div class="relative">
                                                <input type="text" id="price" name="price" inputmode="numeric"
                                                    pattern="[0-9]*"
                                                    class="block w-full pr-10 py-2 px-4 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                                    placeholder="0"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                    value="{{ old('price') }}">
                                                <span
                                                    class="absolute inset-y-0 right-0 flex items-center pr-3 px-4 text-gray-400">BDT</span>
                                            </div>
                                        </div>


                                        <!-- Select Featured Image -->
                                        <div class="mb-6 relative">
                                            <label for="featured_image"
                                                class="block text-sm font-medium text-gray-700 mb-2">Select Featured
                                                Image</label>
                                            <label for="featured_image"
                                                class="w-[300px] h-[150px] bg-gray-200 border-2 border-dashed border-gray-400 rounded-md cursor-pointer hover:bg-gray-300 relative flex items-center justify-center">
                                                <input type="file" id="featured_image" name="f_image"
                                                    value="{{ old('f_image') }}" accept="image/*"
                                                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                                <img src="#" alt="Featured Image Preview"
                                                    class="absolute inset-0 w-full h-full object-cover rounded-md hidden"
                                                    id="featured_image_preview">
                                                <div class="absolute inset-0 flex items-center justify-center">
                                                    <svg class="w-8 h-8 text-gray-500" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M21 15v4a2 2 0 01-2 2H5a2 2 01-2-2v-4" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17 21v-6a2 2 0 00-2-2h-4a2 2 0 00-2 2v6" />
                                                    </svg>
                                                    <span class="ml-2 text-sm text-gray-500">Select a file</span>
                                                </div>
                                                <button type="button"
                                                    class="absolute top-2 right-2 px-2 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 hidden"
                                                    id="remove_featured_image">Remove</button>
                                            </label>
                                        </div>


                                        <!-- Image Gallery -->
                                        <div class="mb-6">
                                            <label for="image_gallery"
                                                class="block text-sm font-medium text-gray-700 mb-2">Image Gallery</label>
                                            <div class="flex flex-wrap -mx-2" id="gallery_container">
                                                <!-- Image Upload Input -->
                                                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 px-2 mb-4">
                                                    <div class="image-container relative">
                                                        <input type="file" id="image_gallery" name="image_gallery[]"
                                                            accept="image/*" class="hidden">
                                                        <label for="image_gallery"
                                                            class="block bg-gray-200 border-2 border-dashed border-gray-400 rounded-md cursor-pointer hover:bg-gray-300 flex items-center justify-center">
                                                            <svg class="w-8 h-8 text-gray-500" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M12 4v16m8-8H4"></path>
                                                            </svg>
                                                        </label>
                                                        <span class="file-label hidden">Selected</span>
                                                        <span
                                                            class="close-icon hidden absolute top-0 right-0 cursor-pointer bg-gray-200 px-1">
                                                            &times;</span>
                                                    </div>
                                                </div>
                                                <!-- Add more input boxes as needed for additional images -->
                                            </div>
                                        </div>


                                        <button
                                            class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300 mt-4"
                                            type="submit">Publish</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </main>
            </div>


        </div>
    </div>
    </div>
    <script>
        const districts = {
            barisal: ["Barguna", "Barisal", "Bhola", "Jhalokati", "Patuakhali", "Pirojpur"],
            chittagong: ["Bandarban", "Brahmanbaria", "Chandpur", "Chittagong", "Comilla", "Cox's Bazar", "Feni",
                "Khagrachhari", "Lakshmipur", "Noakhali", "Rangamati"
            ],
            dhaka: ["Dhaka", "Faridpur", "Gazipur", "Gopalganj", "Kishoreganj", "Madaripur", "Manikganj", "Munshiganj",
                "Narayanganj", "Narsingdi", "Rajbari", "Shariatpur", "Tangail"
            ],
            khulna: ["Bagerhat", "Chuadanga", "Jessore", "Jhenaidah", "Khulna", "Kushtia", "Magura", "Meherpur",
                "Narail", "Satkhira"
            ],
            mymensingh: ["Jamalpur", "Mymensingh", "Netrokona", "Sherpur"],
            rajshahi: ["Bogra", "Joypurhat", "Naogaon", "Natore", "Nawabganj", "Pabna", "Rajshahi", "Sirajganj"],
            rangpur: ["Dinajpur", "Gaibandha", "Kurigram", "Lalmonirhat", "Nilphamari", "Panchagarh", "Rangpur",
                "Thakurgaon"
            ],
            sylhet: ["Habiganj", "Maulvibazar", "Sunamganj", "Sylhet"]
        };

        const divisionMenu = document.getElementById("division-menu");
        const districtMenu = document.getElementById("district-menu");

        function populateDistrictMenu() {
            const selectedDivision = divisionMenu.value;
            districtMenu.innerHTML = "";

            if (selectedDivision === "") {
                // Disable district menu if no division is selected
                districtMenu.disabled = true;
                // Add a default "Please select a division first" option
                const optionElement = document.createElement("option");
                optionElement.value = "";
                optionElement.textContent = "Please select a division first";
                districtMenu.appendChild(optionElement);
            } else {
                // Enable district menu if a division is selected
                districtMenu.disabled = false;
                districts[selectedDivision].forEach(district => {
                    const optionElement = document.createElement("option");
                    optionElement.value = district;
                    optionElement.textContent = district;
                    districtMenu.appendChild(optionElement);
                });
            }
            // Trigger a reflow to ensure transition effect takes place
            void districtMenu.offsetWidth;
            districtMenu.classList.remove('opacity-0');
        }

        populateDistrictMenu();
        divisionMenu.addEventListener("change", function() {
            districtMenu.classList.add('opacity-0');
            populateDistrictMenu();
        });
        // Handle file input change event for featured image
        document.getElementById('featured_image').addEventListener('change', function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('featured_image_preview').src = e.target.result;
                document.getElementById('featured_image_preview').classList.remove('hidden');
                document.getElementById('remove_featured_image').classList.remove('hidden');
            }

            reader.readAsDataURL(file);
        });

        // Handle file input change event for featured image
        document.getElementById('featured_image').addEventListener('change', function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('featured_image_preview').src = e.target.result;
                document.getElementById('featured_image_preview').classList.remove('hidden');
                document.getElementById('remove_featured_image').classList.remove('hidden');
            }

            reader.readAsDataURL(file);
        });

        // Handle remove featured image button click event
        document.getElementById('remove_featured_image').addEventListener('click', function() {
            document.getElementById('featured_image').value = '';
            document.getElementById('featured_image_preview').src = '';
            document.getElementById('featured_image_preview').classList.add('hidden');
            document.getElementById('remove_featured_image').classList.add('hidden');
        });

        // Handle file input change event for image gallery
        document.getElementById('image_gallery').addEventListener('change', function() {
            const files = this.files;
            const galleryContainer = document.getElementById('gallery_container');
            galleryContainer.innerHTML = '';

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'preview-image m-2 w-20 h-20';
                    galleryContainer.appendChild(img);
                }

                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
@endsection
