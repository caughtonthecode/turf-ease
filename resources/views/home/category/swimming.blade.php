<body>
    <title>Swimming Category - TurfEase</title>
</body>
@include('home.homecss')
@include('home.header')

<div class="custom-container mx-auto col-lg-12 p-3 mt-6">
    <div class="flex items-center mb-6 lg:mb-6">
        <p class="text-lg lg:text-xl font-semibold mr-3">Category: Swimming</p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
        @forelse ($turfs as $turf)
            <div class="mb-4">
                <div class="p-3 shadow rounded-lg">
                    <a href="{{ url('turf') . '/' . $turf->id }}" class="pointer text-black text-decoration-none">
                        <div class="relative mb-1">
                            <img src="../turfAdmin/images/{{ $turf->f_image }}" class="w-full h-28 lg:h-48">
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

@include('home.footer')
