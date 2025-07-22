<style>
    .scroll-container::-webkit-scrollbar {
        display: none;
    }
</style>

<div class="custom-container mx-auto pt-10 lg:pt-16 pb-8 lg:pb-8">
    <div class="flex justify-between items-baseline px-4 font-vietnampro text-[#2c3e50]">
        <h1 class="text-xl lg:text-3xl font-bold pb-1 lg:pb-10">Explore The Popular Turf</h1>
        <a href="{{ url('turf-list') }}" class="text-sm font-semibold lg:text-lg">See More <span><i
                    class="fa-solid fa-angle-right"></i></span></a>
    </div>

    <!-- Cards -->
    {{-- <div class="grid grid-cols-4 grid-rows-1 overflow-x-scroll overflow-hidden gap-10 space-x-6">
        @foreach ($turfs->take(8) as $turf)
            <div class="item w-80 h-60 transition duration-200 hover:scale-105">
                <a href="#"><img src="turfAdmin/images/{{ $turf->f_image }}" alt=""
                        class="rounded-2xl h-60 shadow-lg"></a>
                <span class="flex justify-between font-vietnampro text-[12px] text-[#2c3e50]">
                    <span class="capitalize"><i
                            class="fa-solid fa-location-dot m-3 text-red-500"></i>{{ $turf->division }}</span>
                    <span class="m-2 flex"><i class="fa-regular fa-star mt-0.5 mr-1"></i>
                        <p>4.4(5)</p>
                    </span>
                </span>
            </div>
        @endforeach
    </div> --}}

    <div class="relative w-full overflow-x-hidden">
        <div class="flex overflow-x-auto overflow-y-hidden gap-4 space-x-2 lg:space-x-4 p-4 scroll-container">
            @foreach ($turfs->take(8) as $turf)
                <div
                    class="item flex-none w-60 h-auto lg:w-80 lg:h-[285px] rounded-lg shadow-lg transition duration-200 hover:scale-105">
                    <a href="{{ url('turf') . '/' . $turf->id }}">
                        <img src="turfAdmin/images/{{ $turf->f_image }}" alt=""
                            class="rounded-[12px] lg:rounded-[20px] w-full h-[160px] lg:w-full lg:h-56 object-cover p-2">
                    </a>
                    <div class="p-2 pt-0 lg:pt-1">
                        <p class="font-vietnampro text-base text-gray-700 font-semibold lg:mb-1">{{ $turf->turf_name }}
                        </p>
                        <span class="flex justify-between font-vietnampro text-sm text-gray-700">
                            <span class="capitalize flex items-center">
                                <i class="fa-solid fa-location-dot mr-1 text-red-500"></i>{{ $turf->division }}
                            </span>
                            <span class="flex items-center">
                                <i class="fa-regular fa-star mt-0.5 mr-1"></i>
                                <p>4.4(5)</p>
                            </span>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
        <button
            class="absolute -left-2 w-10 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md prev-btn">
            <i class="fa-solid fa-chevron-left text-gray-500"></i>
        </button>
        <button
            class="absolute -right-2 w-10 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md next-btn">
            <i class="fa-solid fa-chevron-right text-gray-500"></i>
        </button>
    </div>


</div>

<script>
    const scrollContainer = document.querySelector('.scroll-container');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let scrollAmount = 0;
    const slideSize = document.querySelector('.item').offsetWidth +
        24; // Adjust the value (24) based on the gap between cards

    prevBtn.addEventListener('click', () => {
        scrollAmount -= slideSize;
        scrollContainer.scrollTo({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });

    nextBtn.addEventListener('click', () => {
        scrollAmount += slideSize;
        scrollContainer.scrollTo({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });
</script>
