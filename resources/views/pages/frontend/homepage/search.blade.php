@push('styles')
<style>
    .hero-section {
        position: relative;
        height: 100vh;
        min-height: 600px;
        background-image: url('{{ asset('assets/img/search-bg2.jpg') }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        overflow: hidden;
        margin-top: 0;
    }

    /* Simple, clean overlay for better text readability and image pop */
    .hero-overlay {
        position: absolute;
        inset: 0;
        z-index: 1;
        background: rgba(0, 0, 0, 0.55);
    }

    .hero-content {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        padding: 0 1rem;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(6, 178, 78, 0.15);
        border: 1px solid rgba(6, 178, 78, 0.4);
        backdrop-filter: blur(10px);
        color: #06B24E;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 6px 16px;
        border-radius: 50px;
        margin-bottom: 1.5rem;
        animation: fadeInDown 0.8s ease both;
    }

    .hero-badge .dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #06B24E;
        animation: pulse-dot 1.5s infinite;
    }

    @keyframes pulse-dot {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.5); opacity: 0.6; }
    }

    .hero-title {
        font-size: clamp(2.8rem, 7vw, 5.5rem);
        font-weight: 900;
        line-height: 1.1;
        text-align: center;
        color: #fff;
        font-family: 'Be Vietnam Pro', sans-serif;
        animation: fadeInUp 0.9s ease 0.1s both;
        letter-spacing: -0.02em;
    }

    .hero-title .highlight {
        background: linear-gradient(90deg, #06B24E 0%, #7ec620 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-subtitle {
        color: rgba(255,255,255,0.72);
        text-align: center;
        max-width: 560px;
        font-size: 1rem;
        line-height: 1.7;
        margin: 1.2rem auto 2rem;
        font-family: 'Be Vietnam Pro', sans-serif;
        animation: fadeInUp 0.9s ease 0.2s both;
    }

    .hero-search-bar {
        width: 100%;
        max-width: 620px;
        display: flex;
        align-items: center;
        background: rgba(255,255,255,0.96);
        border-radius: 14px;
        padding: 6px 6px 6px 18px;
        box-shadow: 0 8px 40px rgba(6,178,78,0.22), 0 2px 12px rgba(0,0,0,0.18);
        animation: fadeInUp 0.9s ease 0.3s both;
        border: 2px solid rgba(6,178,78,0.15);
        transition: box-shadow 0.3s, border-color 0.3s;
    }

    .hero-search-bar:focus-within {
        box-shadow: 0 8px 40px rgba(6,178,78,0.38), 0 2px 12px rgba(0,0,0,0.18);
        border-color: rgba(6,178,78,0.5);
    }

    .hero-search-bar input {
        flex: 1;
        background: transparent;
        border: none;
        outline: none;
        box-shadow: none;
        -webkit-appearance: none;
        font-size: 0.95rem;
        color: #222;
        font-family: 'Be Vietnam Pro', sans-serif;
        padding: 6px 0;
    }

    .hero-search-bar input:focus {
        outline: none;
        box-shadow: none;
    }

    .hero-search-bar input::placeholder {
        color: #aaa;
    }

    .hero-search-bar .search-icon {
        color: #ccc;
        margin-right: 10px;
        flex-shrink: 0;
    }

    .hero-search-btn {
        background: linear-gradient(135deg, #06B24E, #057534);
        color: #fff;
        border: none;
        border-radius: 10px;
        padding: 12px 28px;
        font-weight: 700;
        font-size: 0.95rem;
        font-family: 'Be Vietnam Pro', sans-serif;
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
        letter-spacing: 0.02em;
    }

    .hero-search-btn:hover {
        background: linear-gradient(135deg, #05a044, #046228);
        transform: translateY(-1px);
        box-shadow: 0 6px 20px rgba(6,178,78,0.4);
    }

    .hero-stats {
        display: flex;
        gap: 2.5rem;
        margin-top: 2.5rem;
        animation: fadeInUp 0.9s ease 0.4s both;
    }

    .hero-stat-item {
        text-align: center;
    }

    .hero-stat-number {
        font-size: 1.7rem;
        font-weight: 800;
        color: #06B24E;
        font-family: 'Be Vietnam Pro', sans-serif;
        line-height: 1;
    }

    .hero-stat-label {
        font-size: 0.75rem;
        color: rgba(255,255,255,0.55);
        font-family: 'Be Vietnam Pro', sans-serif;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        margin-top: 4px;
    }

    .hero-divider {
        width: 1px;
        background: rgba(255,255,255,0.15);
        height: 40px;
        align-self: center;
    }

    /* Floating orbs */
    .orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(70px);
        opacity: 0.3;
        pointer-events: none;
        z-index: 1;
    }

    .orb-1 {
        width: 400px;
        height: 400px;
        background: #06B24E;
        top: -100px;
        right: -80px;
        animation: float-orb 8s ease-in-out infinite alternate;
    }

    .orb-2 {
        width: 300px;
        height: 300px;
        background: #7ec620;
        bottom: -60px;
        left: -60px;
        animation: float-orb 10s ease-in-out infinite alternate-reverse;
    }

    @keyframes float-orb {
        0% { transform: translate(0, 0) scale(1); }
        100% { transform: translate(30px, 30px) scale(1.1); }
    }

    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(25px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .scroll-indicator {
        position: absolute;
        bottom: 28px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 3;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        animation: fadeInUp 1s ease 0.8s both;
    }

    .scroll-indicator span {
        font-size: 0.7rem;
        color: rgba(255,255,255,0.4);
        letter-spacing: 0.08em;
        text-transform: uppercase;
        font-family: 'Be Vietnam Pro', sans-serif;
    }

    .scroll-mouse {
        width: 22px;
        height: 36px;
        border: 2px solid rgba(255,255,255,0.3);
        border-radius: 14px;
        display: flex;
        justify-content: center;
        padding-top: 6px;
    }

    .scroll-mouse::before {
        content: '';
        width: 4px;
        height: 8px;
        background: rgba(255,255,255,0.5);
        border-radius: 2px;
        animation: scroll-wheel 1.6s ease-in-out infinite;
    }

    @keyframes scroll-wheel {
        0% { transform: translateY(0); opacity: 1; }
        100% { transform: translateY(8px); opacity: 0; }
    }
</style>
@endpush

<div class="hero-section">
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-badge">
            <span class="dot"></span>
            Bangladesh's #1 Turf Booking Platform
        </div>

        <h1 class="hero-title">
            Find & Book the<br>
            <span class="highlight">Best Turf Nearby</span>
        </h1>

        <p class="hero-subtitle">
            Elevate your game on top-notch surfaces. Discover premium sports turfs in your vicinity and book in seconds — no hassle, just play.
        </p>

        <div class="hero-search-bar">
            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input id="searchInput" type="text" placeholder="Search by turf name or location..." />
            <button id="searchButton" class="hero-search-btn">
                <i class="fa-solid fa-magnifying-glass mr-1"></i> Search
            </button>
        </div>

        <div class="hero-stats">
            <div class="hero-stat-item">
                <div class="hero-stat-number">500+</div>
                <div class="hero-stat-label">Turfs Listed</div>
            </div>
            <div class="hero-divider"></div>
            <div class="hero-stat-item">
                <div class="hero-stat-number">50K+</div>
                <div class="hero-stat-label">Happy Players</div>
            </div>
            <div class="hero-divider"></div>
            <div class="hero-stat-item">
                <div class="hero-stat-number">64+</div>
                <div class="hero-stat-label">Districts</div>
            </div>
        </div>
    </div>

    <div class="scroll-indicator">
        <div class="scroll-mouse"></div>
        <span>Scroll Down</span>
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

    searchInput.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') searchButton.click();
    });
</script>
