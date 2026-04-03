<div class="custom-container mx-auto pb-20 font-vietnampro mt-24 lg:mt-24">

    <div class="turf-list-container">
        <!-- Your existing turf list code here -->
        <div class="rounded-lg bg-white p-3 my-3 hidden lg:block">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="flex items-center bg-gray-200 rounded-md px-2 mr-2 mb-2 lg:mb-0">
                    <div class="w-10 text-center">
                        <i class="fa fa-magnifying-glass pt-1 text-gray-500"></i>
                    </div>
                    <div class="w-90">
                        <input id="searchInput" type="text" name="turf_name"
                            class="bg-gray-200 w-full border-0 focus:ring-0" placeholder="Search Turf Name . . ."
                            value="">
                    </div>
                </div>
                <div class="flex items-center bg-gray-200 rounded-md px-2 mx-2 mb-2 lg:mb-0">
                    <div class="w-10 text-center">
                        <i class="fa-solid fa-location-dot pt-1 text-gray-500"></i>
                    </div>
                    <div class="w-90">
                        <input id="locationInput" type="text" name="location"
                            class="bg-gray-200 w-full border-0 focus:ring-0" placeholder="Search Location . . ."
                            value="">
                    </div>
                </div>
                <div class="flex items-center bg-gray-200 rounded-md px-2 mx-2 mb-2 lg:mb-0">
                    <div class="w-10 text-center">
                        <i class="fa-solid fa-medal pt-1 text-gray-500"></i>
                    </div>
                    <div class="w-90">
                        <select id="categorySelect" name="sport"
                            class="bg-gray-200 text-gray-500 text-sm px-8 pl-0 py-2.5 border-0 w-full focus:ring-0">
                            <option value="" class="text-base">Choose Sports</option>
                            <option value="football" class="text-base capitalize">football</option>
                            <option value="cricket" class="text-base capitalize">cricket</option>
                            <option value="basketball" class="text-base capitalize">basketball</option>
                            <option value="badminton" class="text-base capitalize">badminton</option>
                            <option value="paintball" class="text-base capitalize">paintball</option>
                            <option value="swimming" class="text-base capitalize">swimming</option>
                            <option value="pool" class="text-base capitalize">pool</option>
                            <option value="e-sports" class="text-base capitalize">e-sports</option>
                        </select>
                    </div>
                </div>
                <div class="px-0 pt-3 lg:pt-0">
                    <button id="searchButton"
                        class="rounded-md py-2 ml-2 px-2 text-sm w-full bg-[#06B24E] text-white border border-gray-300">
                        <i class="fa-solid fa-magnifying-glass pr-2 text-white"></i>Search
                    </button>
                </div>
            </div>
        </div>

    </div>


    {{-- Cards --}}

    <div class="col-lg-12 p-3 mt-6">
        <div class="flex items-center mb-6 lg:mb-6">
            <p class="text-lg lg:text-xl font-semibold mr-3">Turf Lists</p>
            <p class="m-0 px-3 py-1 pointer bg-gray-700 text-white rounded-full text-sm">
                <i class="fa-solid fa-fire mr-1 text-green-500"></i>Featured
            </p>
            <p class="m-0 mx-2 px-3 py-1 pointer bg-gray-700 text-white rounded-full text-sm">
                <i class="fa-solid fa-percent mr-1 text-green-500"></i>Discount
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @forelse ($turfs as $turf)
                <div class="mb-4">
                    <div class="p-3 shadow rounded-lg">
                        <a href="{{ url('turf') . '/' . $turf->id }}" class="pointer text-black text-decoration-none">
                            <div class="relative mb-1">
                                <img src="turfAdmin/images/{{ $turf->f_image }}" class="w-full h-28 lg:h-48">
                            </div>
                            <div class="border-0 text-sm mt-3 font-medium">{{ $turf->turf_name }}</div>
                            <div class="flex justify-between text-gray-400 text-xs mt-1">
                                <div class="w-80">
                                    <span class="text-black capitalize"><i
                                            class="fa-solid fa-location-dot text-red-500 mr-1"></i>{{ $turf->address . ', ' . $turf->district . ', ' . $turf->division }}</span>
                                </div>
                                <div class="w-20 px-0">
                                    <span class="text-black">4.4(5)</span> <i
                                        class="fa-regular fa-star text-green-500 mx-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <p>No turfs found.</p>
            @endforelse
        </div>
    </div>
</div>

<script>
    const searchInput = document.getElementById('searchInput');
    const locationInput = document.querySelector('input[name="location"]');
    const categorySelect = document.querySelector('select[name="sport"]');
    const searchButton = document.getElementById('searchButton');

    searchButton.addEventListener('click', () => {
        const turfName = searchInput.value.trim();
        const location = locationInput.value.trim();
        const category = categorySelect.value;

        const params = new URLSearchParams();

        if (turfName) {
            params.append('turf_name', turfName);
        }
        if (location) {
            params.append('location', location);
        }
        if (category) {
            params.append('sport', category);
        }

        const queryString = params.toString();
        if (queryString) {
            window.location.href = `turf-list?${queryString}`;
        }
    });
</script>
