{{-- ===== Browse by Category Section ===== --}}
<style>
    .category-card {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        background: #fff;
        border: 1.5px solid #edf2ed;
        border-radius: 18px;
        padding: 22px 20px;
        transition: all 0.3s ease;
        text-decoration: none;
        position: relative;
        overflow: hidden;
    }

    .category-card::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(6,178,78,0.05), rgba(126,198,32,0.04));
        opacity: 0;
        transition: opacity 0.3s;
    }

    .category-card:hover::after { opacity: 1; }

    .category-card:hover {
        border-color: rgba(6,178,78,0.4);
        box-shadow: 0 12px 36px rgba(6,178,78,0.14);
        transform: translateY(-4px);
    }

    .category-icon-wrap {
        width: 56px;
        height: 56px;
        background: rgba(6,178,78,0.08);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 14px;
        transition: all 0.3s;
    }

    .category-card:hover .category-icon-wrap {
        background: linear-gradient(135deg, #06B24E, #7ec620);
    }

    .category-icon-wrap img {
        width: 32px;
        height: 32px;
        object-fit: contain;
        transition: filter 0.3s;
    }

    .category-card:hover .category-icon-wrap img {
        filter: brightness(0) invert(1);
    }

    .category-name {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.95rem;
        font-weight: 700;
        color: #1a1a1a;
        flex: 1;
    }

    .category-arrow {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: rgba(6,178,78,0.08);
        color: #06B24E;
        font-size: 0.7rem;
        transition: all 0.3s;
        margin-top: auto;
        align-self: flex-end;
    }

    .category-card:hover .category-arrow {
        background: #06B24E;
        color: #fff;
        transform: translate(2px, -2px);
    }
</style>

<div style="background: #f2f7f4;" class="py-16 lg:py-20">
    <div class="custom-container mx-auto px-4 lg:px-0">

        <div class="flex justify-between items-end mb-8 lg:mb-12">
            <div>
                <p class="section-label"><i class="fa-solid fa-layer-group mr-1"></i> Browse</p>
                <h2 class="section-title">Turf by Category</h2>
            </div>
            <a href="{{ url('turf-list') }}" class="see-all-btn">
                See All <i class="fa-solid fa-arrow-right text-sm"></i>
            </a>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">

            <a href="{{ url('category/football') }}" class="category-card">
                <div class="category-icon-wrap">
                    <img src="/img/football_icon.png" alt="Football">
                </div>
                <p class="category-name">Football</p>
                <div class="category-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </a>

            <a href="{{ url('category/swimming') }}" class="category-card">
                <div class="category-icon-wrap">
                    <img src="/img/swiming_icon.png" alt="Swimming">
                </div>
                <p class="category-name">Swimming</p>
                <div class="category-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </a>

            <a href="{{ url('category/cricket') }}" class="category-card">
                <div class="category-icon-wrap">
                    <img src="/img/cricket_icon.png" alt="Cricket">
                </div>
                <p class="category-name">Cricket</p>
                <div class="category-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </a>

            <a href="{{ url('category/pool') }}" class="category-card">
                <div class="category-icon-wrap">
                    <img src="/img/pool_icon.png" alt="Pool">
                </div>
                <p class="category-name">Pool</p>
                <div class="category-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </a>

            <a href="{{ url('category/badminton') }}" class="category-card">
                <div class="category-icon-wrap">
                    <img src="/img/badminton_icon.png" alt="Badminton">
                </div>
                <p class="category-name">Badminton</p>
                <div class="category-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </a>

            <a href="{{ url('category/paintball') }}" class="category-card">
                <div class="category-icon-wrap">
                    <img src="/img/paintball_icon.png" alt="Paintball">
                </div>
                <p class="category-name">Paintball</p>
                <div class="category-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </a>

            <a href="{{ url('category/basketball') }}" class="category-card">
                <div class="category-icon-wrap">
                    <img src="/img/basketball_icon.png" alt="Basketball">
                </div>
                <p class="category-name">Basketball</p>
                <div class="category-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </a>

            <a href="{{ url('category/e-sports') }}" class="category-card">
                <div class="category-icon-wrap">
                    <img src="/img/esports_icon.png" alt="E-Sports">
                </div>
                <p class="category-name">E-Sports</p>
                <div class="category-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </a>

        </div>
    </div>
</div>
