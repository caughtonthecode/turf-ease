{{-- ===== Inside Dhaka City Section ===== --}}
<div class="py-16 lg:py-20" style="background: #f8fdf9;">
    <div class="custom-container mx-auto px-4">

        <div class="flex justify-between items-end mb-8 lg:mb-10">
            <div>
                <p class="section-label"><i class="fa-solid fa-city mr-1"></i> Location</p>
                <h2 class="section-title">Inside Dhaka City</h2>
            </div>
            <a href="{{ url('turf-list') }}" class="see-all-btn">
                See All <i class="fa-solid fa-arrow-right text-sm"></i>
            </a>
        </div>

        <div class="relative w-full">
            <div class="flex overflow-x-auto overflow-y-hidden gap-5 pb-3 turf-scroll-container" id="dhakaScroll">
                @foreach ($turfs->where('district', 'Dhaka')->take(10) as $turf)
                    <div class="turf-card">
                        <div class="turf-card-img-wrap">
                            <img src="{{ asset('assets/turfAdmin/images/' . $turf->f_image) }}" onerror="this.src='{{ asset('assets/img/bg-2.jpg') }}';" alt="{{ $turf->turf_name }}">
                            <div class="turf-card-badge">Dhaka</div>
                        </div>
                        <div class="turf-card-body">
                            <a href="{{ url('turf') . '/' . $turf->id }}">
                                <p class="turf-card-name">{{ $turf->turf_name }}</p>
                            </a>
                            <div class="turf-card-meta">
                                <span class="turf-card-location">
                                    <i class="fa-solid fa-location-dot text-red-500"></i>
                                    {{ $turf->division }}
                                </span>
                                <span class="turf-card-rating">
                                    <i class="fa-solid fa-star"></i> 4.4
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="scroll-nav-btn -left-3 lg:-left-5" style="position:absolute;" id="dhakaPrev">
                <i class="fa-solid fa-chevron-left text-sm"></i>
            </button>
            <button class="scroll-nav-btn -right-3 lg:-right-5" style="position:absolute;" id="dhakaNext">
                <i class="fa-solid fa-chevron-right text-sm"></i>
            </button>
        </div>

    </div>
</div>

<script>
    (function() {
        const container = document.getElementById('dhakaScroll');
        const prev = document.getElementById('dhakaPrev');
        const next = document.getElementById('dhakaNext');
        const cardWidth = 280 + 20;

        prev.addEventListener('click', () => container.scrollBy({ left: -cardWidth, behavior: 'smooth' }));
        next.addEventListener('click', () => container.scrollBy({ left: cardWidth, behavior: 'smooth' }));
    })();
</script>
