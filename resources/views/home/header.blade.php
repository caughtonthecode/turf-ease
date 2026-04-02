<style>
    /* ============ NAVBAR ============ */
    #navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 999;
        transition: background 0.35s ease, box-shadow 0.35s ease, backdrop-filter 0.35s ease;
    }

    /* Transparent at top (over hero) — subtle dark gradient ensures white text is always readable */
    #navbar.is-top {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.45) 0%, rgba(0, 0, 0, 0.15) 60%, transparent 100%);
        box-shadow: none;
    }

    /* Frosted glass after scroll */
    #navbar.is-scrolled {
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.06), 0 4px 20px rgba(0, 0, 0, 0.06);
    }

    .nav-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 80px;
        padding: 0 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Logo */
    .nav-logo img {
        height: 26px;
        width: auto;
        display: block;
    }

    /* Nav links */
    .nav-links {
        display: flex;
        align-items: center;
        gap: 2px;
    }

    .nav-link {
        position: relative;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.88rem;
        font-weight: 600;
        color: #fff;
        text-decoration: none;
        padding: 6px 14px;
        border-radius: 8px;
        transition: color 0.2s, background 0.2s;
        letter-spacing: 0.01em;
    }

    #navbar.is-scrolled .nav-link {
        color: #1a1a1a;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 2px;
        left: 50%;
        transform: translateX(-50%) scaleX(0);
        width: calc(100% - 24px);
        height: 2px;
        background: #06B24E;
        border-radius: 2px;
        transition: transform 0.25s ease;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        transform: translateX(-50%) scaleX(1);
    }

    .nav-link:hover {
        color: #06B24E;
        background: rgba(6, 178, 78, 0.07);
    }

    #navbar.is-scrolled .nav-link:hover {
        color: #06B24E;
    }

    /* "List Your Turf" pill link */
    .nav-link-pill {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.85rem;
        font-weight: 700;
        color: #06B24E;
        text-decoration: none;
        padding: 7px 16px;
        border-radius: 50px;
        border: 1.5px solid rgba(6, 178, 78, 0.5);
        transition: all 0.25s;
        white-space: nowrap;
        letter-spacing: 0.01em;
    }

    .nav-link-pill:hover {
        background: #06B24E;
        color: #fff;
        border-color: #06B24E;
    }

    #navbar.is-top .nav-link-pill {
        border-color: rgba(255, 255, 255, 0.5);
        color: #fff;
    }

    #navbar.is-top .nav-link-pill:hover {
        background: #06B24E;
        border-color: #06B24E;
        color: #fff;
    }

    /* Auth buttons */
    .btn-login {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.88rem;
        font-weight: 600;
        color: #fff;
        text-decoration: none;
        padding: 7px 18px;
        border-radius: 8px;
        transition: all 0.25s;
        border: 1.5px solid rgba(255, 255, 255, 0.4);
    }

    .btn-login:hover {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.7);
    }

    #navbar.is-scrolled .btn-login {
        color: #1a1a1a;
        border-color: rgba(0, 0, 0, 0.15);
    }

    #navbar.is-scrolled .btn-login:hover {
        background: rgba(0, 0, 0, 0.05);
        border-color: rgba(0, 0, 0, 0.3);
    }

    .btn-register {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.88rem;
        font-weight: 700;
        color: #fff;
        text-decoration: none;
        padding: 8px 20px;
        border-radius: 10px;
        background: linear-gradient(135deg, #06B24E, #057534);
        transition: all 0.25s;
        box-shadow: 0 3px 12px rgba(6, 178, 78, 0.3);
        white-space: nowrap;
    }

    .btn-register:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 20px rgba(6, 178, 78, 0.45);
        background: linear-gradient(135deg, #07c55a, #06B24E);
    }

    /* User avatar & dropdown */
    .user-menu {
        position: relative;
    }

    .user-avatar-btn {
        display: flex;
        align-items: center;
        gap: 9px;
        cursor: pointer;
        padding: 4px;
        border-radius: 50px;
        transition: background 0.2s;
        background: transparent;
        border: none;
    }

    .user-avatar-btn:hover {
        background: rgba(6, 178, 78, 0.08);
    }

    .user-avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #06B24E;
    }

    .user-name {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.85rem;
        font-weight: 600;
        color: #fff;
        max-width: 100px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    #navbar.is-scrolled .user-name {
        color: #1a1a1a;
    }

    .user-chevron {
        font-size: 0.65rem;
        color: rgba(255, 255, 255, 0.6);
        transition: transform 0.25s;
    }

    #navbar.is-scrolled .user-chevron {
        color: #666;
    }

    .user-menu.open .user-chevron {
        transform: rotate(180deg);
    }

    /* Dropdown panel */
    .user-dropdown {
        position: absolute;
        top: calc(100% + 12px);
        right: 0;
        width: 210px;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.14), 0 2px 8px rgba(0, 0, 0, 0.06);
        border: 1px solid rgba(0, 0, 0, 0.06);
        overflow: hidden;
        opacity: 0;
        transform: translateY(-8px) scale(0.97);
        pointer-events: none;
        transition: opacity 0.2s ease, transform 0.2s ease;
    }

    .user-menu.open .user-dropdown {
        opacity: 1;
        transform: translateY(0) scale(1);
        pointer-events: all;
    }

    .dropdown-header {
        padding: 14px 16px 10px;
        border-bottom: 1px solid #f3f4f6;
    }

    .dropdown-user-name {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.88rem;
        font-weight: 700;
        color: #111;
    }

    .dropdown-user-label {
        font-size: 0.72rem;
        color: #9ca3af;
        font-family: 'Be Vietnam Pro', sans-serif;
        margin-top: 1px;
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 11px 16px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.85rem;
        font-weight: 500;
        color: #374151;
        text-decoration: none;
        transition: background 0.15s, color 0.15s;
    }

    .dropdown-item i {
        width: 16px;
        font-size: 0.82rem;
        color: #9ca3af;
        transition: color 0.15s;
    }

    .dropdown-item:hover {
        background: #f8fdf9;
        color: #06B24E;
    }

    .dropdown-item:hover i {
        color: #06B24E;
    }

    .dropdown-divider {
        height: 1px;
        background: #f3f4f6;
        margin: 4px 0;
    }

    .dropdown-item.danger {
        color: #ef4444;
    }

    .dropdown-item.danger i {
        color: #ef4444;
    }

    .dropdown-item.danger:hover {
        background: #fff5f5;
        color: #dc2626;
    }

    /* Hamburger / Mobile */
    .hamburger {
        display: flex;
        flex-direction: column;
        gap: 5px;
        cursor: pointer;
        padding: 6px;
        border-radius: 8px;
        transition: background 0.2s;
        background: transparent;
        border: none;
    }

    .hamburger:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    #navbar.is-scrolled .hamburger:hover {
        background: rgba(0, 0, 0, 0.05);
    }

    .ham-line {
        display: block;
        width: 22px;
        height: 2px;
        border-radius: 2px;
        background: #fff;
        transition: transform 0.3s, opacity 0.3s, width 0.3s;
    }

    #navbar.is-scrolled .ham-line {
        background: #1a1a1a;
    }

    .hamburger.open .ham-line:nth-child(1) {
        transform: translateY(7px) rotate(45deg);
    }

    .hamburger.open .ham-line:nth-child(2) {
        opacity: 0;
        width: 0;
    }

    .hamburger.open .ham-line:nth-child(3) {
        transform: translateY(-7px) rotate(-45deg);
    }

    /* Mobile Drawer */
    .mobile-drawer-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 998;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s;
        backdrop-filter: blur(4px);
    }

    .mobile-drawer-overlay.open {
        opacity: 1;
        pointer-events: all;
    }

    .mobile-drawer {
        position: fixed;
        top: 0;
        right: 0;
        height: 100vh;
        width: 280px;
        background: #fff;
        z-index: 999;
        box-shadow: -8px 0 40px rgba(0, 0, 0, 0.15);
        transform: translateX(100%);
        transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
    }

    .mobile-drawer.open {
        transform: translateX(0);
    }

    .drawer-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 18px 20px;
        border-bottom: 1px solid #f0f0f0;
    }

    .drawer-close {
        width: 34px;
        height: 34px;
        border-radius: 8px;
        background: #f5f5f5;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: none;
        color: #555;
        font-size: 0.9rem;
        transition: background 0.2s;
    }

    .drawer-close:hover {
        background: #ffe5e5;
        color: #ef4444;
    }

    .drawer-nav {
        flex: 1;
        overflow-y: auto;
        padding: 12px 12px;
    }

    .drawer-link {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 14px;
        border-radius: 12px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.92rem;
        font-weight: 600;
        color: #1a1a1a;
        text-decoration: none;
        transition: all 0.2s;
        margin-bottom: 3px;
    }

    .drawer-link i {
        width: 18px;
        font-size: 0.85rem;
        color: #9ca3af;
    }

    .drawer-link:hover {
        background: #f0faf4;
        color: #06B24E;
    }

    .drawer-link:hover i {
        color: #06B24E;
    }

    .drawer-link.highlight {
        background: linear-gradient(135deg, rgba(6, 178, 78, 0.1), rgba(126, 198, 32, 0.08));
        color: #06B24E;
        border: 1.5px solid rgba(6, 178, 78, 0.2);
    }

    .drawer-link.highlight i {
        color: #06B24E;
    }

    .drawer-footer {
        padding: 16px 12px;
        border-top: 1px solid #f0f0f0;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .drawer-btn-login {
        display: block;
        text-align: center;
        padding: 11px;
        border-radius: 10px;
        border: 1.5px solid #e5e7eb;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.9rem;
        font-weight: 600;
        color: #374151;
        text-decoration: none;
        transition: all 0.2s;
    }

    .drawer-btn-login:hover {
        border-color: #06B24E;
        color: #06B24E;
    }

    .drawer-btn-register {
        display: block;
        text-align: center;
        padding: 11px;
        border-radius: 10px;
        background: linear-gradient(135deg, #06B24E, #057534);
        color: #fff;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.9rem;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.25s;
    }

    .drawer-btn-register:hover {
        box-shadow: 0 4px 16px rgba(6, 178, 78, 0.4);
    }

    /* Notification dot */
    .nav-dot {
        position: absolute;
        top: -2px;
        right: -2px;
        width: 7px;
        height: 7px;
        background: #06B24E;
        border-radius: 50%;
        border: 1.5px solid #fff;
    }

    @media (min-width: 768px) {
        .mobile-only {
            display: none !important;
        }
    }

    @media (max-width: 767px) {
        .desktop-only {
            display: none !important;
        }
    }
</style>

{{-- ============ NAVBAR ============ --}}
<nav id="navbar" class="is-top">
    <div class="nav-inner">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="nav-logo" style="flex-shrink:0;">
            <img src="/img/turfease-logo.png" alt="TurfEase">
        </a>

        {{-- Desktop Nav Links --}}
        <div class="nav-links desktop-only" style="flex:1; justify-content:center;">
            <a href="#" class="nav-link">
                <i class="fa-regular fa-newspaper" style="margin-right:5px; font-size:0.8rem;"></i> Feed
            </a>
            <a href="{{ url('turf-list') }}" class="nav-link">
                <i class="fa-solid fa-futbol" style="margin-right:5px; font-size:0.8rem;"></i> Turf
            </a>
            <a href="#" class="nav-link">
                <i class="fa-solid fa-trophy" style="margin-right:5px; font-size:0.8rem;"></i> Tournaments
            </a>
        </div>

        {{-- Desktop Right Side --}}
        <div class="desktop-only" style="display:flex; align-items:center; gap:10px; flex-shrink:0;">
            <a href="{{ url('manager-request') }}" class="nav-link-pill">
                <i class="fa-solid fa-plus" style="margin-right:4px; font-size:0.75rem;"></i> List Your Turf
            </a>

            @if (Route::has('login'))
                @auth
                    {{-- User Dropdown --}}
                    <div class="user-menu" id="userMenu">
                        <button class="user-avatar-btn" onclick="toggleUserMenu(event)">
                            <img src="/img/{{ $userAll->pro_pic }}" class="user-avatar" alt="{{ $userAll->f_name }}">
                            <span class="user-name">{{ $userAll->f_name }}</span>
                            <i class="fa-solid fa-chevron-down user-chevron"></i>
                        </button>

                        <div class="user-dropdown" id="userDropdown">
                            <div class="dropdown-header">
                                <div class="dropdown-user-name">{{ $userAll->f_name }}</div>
                                <div class="dropdown-user-label">Registered Member</div>
                            </div>
                            <a href="{{ url('userProfile') }}" class="dropdown-item">
                                <i class="fa-regular fa-user"></i> My Profile
                            </a>
                            <a href="{{ url('bookings') ?? '#' }}" class="dropdown-item">
                                <i class="fa-regular fa-calendar-check"></i> My Bookings
                            </a>
                            <a href="{{ url('termsPolicy') }}" class="dropdown-item">
                                <i class="fa-regular fa-file-lines"></i> Terms & Policy
                            </a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item danger"
                                    style="width:100%; text-align:left; background:none; border:none; cursor:pointer;">
                                    <i class="fa-solid fa-right-from-bracket"></i> Sign Out
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ url('login') }}" class="btn-login">Login</a>
                    <a href="{{ url('register') }}" class="btn-register">
                        Get Started <i class="fa-solid fa-arrow-right" style="font-size:0.75rem; margin-left:4px;"></i>
                    </a>
                @endauth
            @endif
        </div>

        {{-- Mobile Hamburger --}}
        <button class="hamburger mobile-only" id="hamburgerBtn" onclick="toggleDrawer()" aria-label="Menu">
            <span class="ham-line"></span>
            <span class="ham-line"></span>
            <span class="ham-line"></span>
        </button>

    </div>
</nav>

{{-- Mobile Drawer Overlay --}}
<div class="mobile-drawer-overlay" id="drawerOverlay" onclick="toggleDrawer()"></div>

{{-- Mobile Drawer --}}
<div class="mobile-drawer" id="mobileDrawer">
    <div class="drawer-header">
        <a href="{{ url('/') }}">
            <img src="/img/turfease-logo.png" alt="TurfEase" style="height:22px;">
        </a>
        <button class="drawer-close" onclick="toggleDrawer()">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <div class="drawer-nav">
        <a href="#" class="drawer-link">
            <i class="fa-regular fa-newspaper"></i> Feed
        </a>
        <a href="{{ url('turf-list') }}" class="drawer-link">
            <i class="fa-solid fa-futbol"></i> Turf
        </a>
        <a href="#" class="drawer-link">
            <i class="fa-solid fa-trophy"></i> Tournaments
        </a>
        <a href="{{ url('manager-request') }}" class="drawer-link highlight" style="margin-top:8px;">
            <i class="fa-solid fa-plus-circle"></i> List Your Turf
        </a>

        @auth
            <div style="margin-top:16px; padding:12px; background:#f8fdf9; border-radius:12px; border:1px solid #e8f5ec;">
                <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                    <img src="/img/{{ $userAll->pro_pic }}"
                        style="width:40px; height:40px; border-radius:50%; border:2px solid #06B24E; object-fit:cover;"
                        alt="">
                    <div>
                        <div
                            style="font-family:'Be Vietnam Pro',sans-serif; font-size:0.88rem; font-weight:700; color:#111;">
                            {{ $userAll->f_name }}</div>
                        <div style="font-size:0.72rem; color:#9ca3af; font-family:'Be Vietnam Pro',sans-serif;">Member
                        </div>
                    </div>
                </div>
                <a href="{{ url('userProfile') }}" class="drawer-link" style="padding:9px 10px; margin-bottom:2px;">
                    <i class="fa-regular fa-user"></i> My Profile
                </a>
                <a href="{{ url('termsPolicy') }}" class="drawer-link" style="padding:9px 10px; margin-bottom:8px;">
                    <i class="fa-regular fa-file-lines"></i> Terms & Policy
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="drawer-link"
                        style="width:100%; text-align:left; background:none; border:none; cursor:pointer; color:#ef4444;">
                        <i class="fa-solid fa-right-from-bracket" style="color:#ef4444;"></i> Sign Out
                    </button>
                </form>
            </div>
        @endauth
    </div>

    @guest
        <div class="drawer-footer">
            <a href="{{ url('login') }}" class="drawer-btn-login">Login</a>
            <a href="{{ url('register') }}" class="drawer-btn-register">Create Account</a>
        </div>
    @endguest
</div>

<script>
    // ── Scroll behaviour: transparent → frosted glass ──
    const navbar = document.getElementById('navbar');

    function updateNavbar() {
        if (window.scrollY > 40) {
            navbar.classList.remove('is-top');
            navbar.classList.add('is-scrolled');
        } else {
            navbar.classList.remove('is-scrolled');
            navbar.classList.add('is-top');
        }
    }

    updateNavbar();
    window.addEventListener('scroll', updateNavbar, {
        passive: true
    });

    // ── Mobile Drawer ──
    const drawer = document.getElementById('mobileDrawer');
    const overlay = document.getElementById('drawerOverlay');
    const hamburgerBtn = document.getElementById('hamburgerBtn');

    function toggleDrawer() {
        const isOpen = drawer.classList.contains('open');
        drawer.classList.toggle('open', !isOpen);
        overlay.classList.toggle('open', !isOpen);
        hamburgerBtn.classList.toggle('open', !isOpen);
        document.body.style.overflow = isOpen ? '' : 'hidden';
    }

    // ── User Dropdown ──
    const userMenu = document.getElementById('userMenu');

    function toggleUserMenu(event) {
        event.stopPropagation();
        if (userMenu) userMenu.classList.toggle('open');
    }

    document.addEventListener('click', function(e) {
        if (userMenu && !userMenu.contains(e.target)) {
            userMenu.classList.remove('open');
        }
    });

    // ── Active link highlight ──
    const currentPath = window.location.pathname;
    document.querySelectorAll('.nav-link, .drawer-link').forEach(link => {
        if (link.getAttribute('href') && currentPath.startsWith(link.getAttribute('href')) && link.getAttribute(
                'href') !== '#') {
            link.classList.add('active');
        }
    });
</script>
