<body>
    <style>
        .search-bg {
            position: relative;
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        /* .search-bg::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.55);
            background: linear-gradient(0deg, rgba(13, 13, 13, 1) 0%, rgba(24, 24, 24, .8) 100%);
        } */

        .search-section {
            height: calc(80vh - 106px);
            background-color: rgba(0, 0, 0, 0.55);
            background: linear-gradient(0deg, rgba(13, 13, 13, 1) 0%, rgba(24, 24, 24, .6) 100%);
        }

        .text-gradient {
            background: linear-gradient(to right, #14c26e 0%, #7ec620 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</body>
<div class="bg-[url('../../../public/img/search-bg2.jpg')] h-[calc(80vh - 106px)] search-bg mt-[72px]">
    <div class="search-section flex justify-center items-center">
        <div class="custom-container slider-bg mx-auto px-4">
            <div class="-mt-14">
                <h1 class="hero_title text-6xl text-white lg:text-7xl lg:leading-snug text-center mb-6">
                    Find
                    Best
                    Turf<br>
                    <span class="text-gradient text-6xl lg:text-7xl block">Nearby</span>
                </h1>
                <p class="text-center text-white w-full lg:w-1/2 mx-auto font-vietnampro pb-10">Elevate your game
                    on
                    top-notch
                    surfaces that offer performance and resilience.
                    Locate the ideal sports turf in your vicinity and step into a world of superior playing fields.</p>

                <div
                    class="w-[55%] lg:w-[55%] mx-auto flex items-center p-1.5 lg:p-0 bg-white rounded-md shadow-md hover:shadow-xl transform hover:scale-105 transition duration-500 mb-0 border-[2px] border-[#ecf0f1]">
                    <div class="flex bg-gray-100 p-0 lg:p-1 w-full space-x-4 rounded-lg mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-auto ml-3 w-6 lg:w-5 opacity-30" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input id="searchInput"
                            class="bg-gray-100 text-gray-600 outline-none focus:ring-0 border-none w-full"
                            type="text" placeholder="Enter Name or Location..." />
                    </div>
                    <button id="searchButton"
                        class="bg-[#06B24E] hover:bg-[#057534] px-6 py-1.5 lg:py-[9px] lg:px-[25px] text-white rounded-md hover:shadow-lg transition duration-3000 cursor-pointer font-vietnampro mr-1">
                        <span>Search</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');

    searchButton.addEventListener('click', () => {
        const searchQuery = searchInput.value.trim();
        if (searchQuery) {
            window.location.href = `turf-list?q=${encodeURIComponent(searchQuery)}`;
        }
    });
</script>
