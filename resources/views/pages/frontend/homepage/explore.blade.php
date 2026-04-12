@push('styles')
<style>
    .section-label {
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: #06B24E;
        font-family: 'Be Vietnam Pro', sans-serif;
        margin-bottom: 0.4rem;
    }

    .section-title {
        font-size: clamp(1.5rem, 3.5vw, 2.2rem);
        font-weight: 800;
        color: #111;
        font-family: 'Be Vietnam Pro', sans-serif;
        line-height: 1.2;
    }

    .turf-scroll-container::-webkit-scrollbar {
        display: none;
    }

    .turf-card {
        flex: none;
        width: 280px;
        border-radius: 18px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 2px 16px rgba(0,0,0,0.07);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #f0f0f0;
        position: relative;
    }

    .turf-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.14);
    }

    .turf-card-img-wrap {
        position: relative;
        overflow: hidden;
        height: 175px;
    }

    .turf-card-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .turf-card:hover .turf-card-img-wrap img {
        transform: scale(1.07);
    }

    .turf-card-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: rgba(6,178,78,0.92);
        color: #fff;
        font-size: 0.68rem;
        font-weight: 700;
        padding: 3px 10px;
        border-radius: 50px;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        font-family: 'Be Vietnam Pro', sans-serif;
    }

    .turf-card-body {
        padding: 14px 16px 16px;
    }

    .turf-card-name {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.98rem;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 6px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .turf-card-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.8rem;
        color: #6b7280;
        font-family: 'Be Vietnam Pro', sans-serif;
    }

    .turf-card-location {
        display: flex;
        align-items: center;
        gap: 4px;
        text-transform: capitalize;
    }

    .turf-card-rating {
        display: flex;
        align-items: center;
        gap: 4px;
        background: #fefce8;
        color: #92400e;
        padding: 2px 8px;
        border-radius: 50px;
        font-weight: 600;
    }

    .turf-card-rating i { color: #f59e0b; }

    .scroll-nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: #fff;
        border: 1px solid #eee;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 14px rgba(0,0,0,0.1);
        transition: all 0.2s;
        z-index: 10;
        color: #333;
    }

    .scroll-nav-btn:hover {
        background: #06B24E;
        color: #fff;
        border-color: #06B24E;
        transform: translateY(-50%) scale(1.08);
    }

    .see-all-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.88rem;
        font-weight: 600;
        color: #06B24E;
        border: 1.5px solid rgba(6,178,78,0.3);
        padding: 7px 18px;
        border-radius: 50px;
        transition: all 0.25s;
        text-decoration: none;
    }

    .see-all-btn:hover {
        background: #06B24E;
        color: #fff;
        border-color: #06B24E;
    }
</style>
@endpush

{{-- ===== Explore Popular Turf Section ===== --}}
<div class="py-16 lg:py-20" style="background: #f2f7f4;">
    <div class="custom-container mx-auto px-4">

        <div class="flex justify-between items-end mb-8 lg:mb-10">
            <div>
                <p class="section-label"><i class="fa-solid fa-fire mr-1"></i> Popular</p>
                <h2 class="section-title">Explore Top Turfs</h2>
            </div>
            <a href="{{ url('turf-list') }}" class="see-all-btn">
                See All <i class="fa-solid fa-arrow-right text-sm"></i>
            </a>
        </div>

        <div class="relative w-full">
            <div class="flex overflow-x-auto overflow-y-hidden gap-5 pb-3 turf-scroll-container" id="exploreScroll">
                @foreach ($turfs->take(10) as $turf)
                    <div class="turf-card">
                        <div class="turf-card-img-wrap">
                            <img src="{{ asset('assets/turfAdmin/images/' . $turf->f_image) }}" onerror="this.src='{{ asset('assets/img/bg-2.jpg') }}';" alt="{{ $turf->turf_name }}">
                            <div class="turf-card-badge">Available</div>
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

            <button class="scroll-nav-btn -left-3 lg:-left-5" style="position:absolute;" id="explorePrev">
                <i class="fa-solid fa-chevron-left text-sm"></i>
            </button>
            <button class="scroll-nav-btn -right-3 lg:-right-5" style="position:absolute;" id="exploreNext">
                <i class="fa-solid fa-chevron-right text-sm"></i>
            </button>
        </div>

    </div>
</div>

<script>
    (function() {
        const container = document.getElementById('exploreScroll');
        const prev = document.getElementById('explorePrev');
        const next = document.getElementById('exploreNext');
        const cardWidth = 280 + 20;

        prev.addEventListener('click', () => container.scrollBy({ left: -cardWidth, behavior: 'smooth' }));
        next.addEventListener('click', () => container.scrollBy({ left: cardWidth, behavior: 'smooth' }));
    })();
</script>
