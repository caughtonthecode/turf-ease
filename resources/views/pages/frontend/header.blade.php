{{-- ============ NAVBAR ============ --}}
<nav id="navbar" class="is-top">
    <div class="nav-inner">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="nav-logo" style="flex-shrink:0;">
            <img src="{{ asset('assets/img/turfease-logo.png') }}" alt="TurfEase">
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
                            <img src="{{ asset('assets/img/' . $userAll->pro_pic) }}" class="user-avatar" alt="{{ $userAll->f_name }}">
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
            <img src="{{ asset('assets/img/turfease-logo.png') }}" alt="TurfEase" style="height:22px;">
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
                    <img src="{{ asset('assets/img/' . $userAll->pro_pic) }}"
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
