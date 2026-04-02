{{-- ===== Modern Footer ===== --}}
<style>
    .site-footer {
        background: #080f08;
        color: rgba(255,255,255,0.7);
        font-family: 'Be Vietnam Pro', sans-serif;
    }

    .footer-top {
        border-bottom: 1px solid rgba(255,255,255,0.07);
        padding: 64px 0 48px;
    }

    .footer-brand-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 16px;
        text-decoration: none;
    }

    .footer-brand-logo img { height: 28px; }

    .footer-tagline {
        font-size: 0.85rem;
        line-height: 1.7;
        color: rgba(255,255,255,0.45);
        max-width: 240px;
        margin-bottom: 22px;
    }

    .footer-social-links {
        display: flex;
        gap: 10px;
    }

    .footer-social-link {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgba(255,255,255,0.5);
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.25s;
    }

    .footer-social-link:hover {
        background: rgba(6,178,78,0.2);
        border-color: #06B24E;
        color: #06B24E;
        transform: translateY(-2px);
    }

    .footer-col-title {
        font-size: 0.82rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: rgba(255,255,255,0.9);
        margin-bottom: 18px;
    }

    .footer-links {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .footer-link {
        font-size: 0.85rem;
        color: rgba(255,255,255,0.45);
        text-decoration: none;
        transition: color 0.2s;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .footer-link:hover {
        color: #06B24E;
    }

    .footer-link::before {
        content: '';
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: rgba(6,178,78,0.4);
        flex-shrink: 0;
    }

    .footer-contact-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.45);
        margin-bottom: 10px;
    }

    .footer-contact-item i {
        color: #06B24E;
        margin-top: 2px;
        flex-shrink: 0;
        width: 14px;
    }

    .footer-bottom {
        padding: 18px 0;
        display: flex;
        flex-direction: column;
        gap: 8px;
        align-items: center;
        text-align: center;
    }

    @media (min-width: 640px) {
        .footer-bottom {
            flex-direction: row;
            justify-content: space-between;
        }
    }

    .footer-copyright {
        font-size: 0.78rem;
        color: rgba(255,255,255,0.3);
    }

    .footer-made-with {
        font-size: 0.78rem;
        color: rgba(255,255,255,0.25);
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .footer-made-with i { color: #ef4444; }
</style>

<footer class="site-footer">
    <div class="footer-top">
        <div class="custom-container mx-auto px-4">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">

                {{-- Brand Column --}}
                <div class="col-span-2 lg:col-span-1">
                    <a href="{{ url('/') }}" class="footer-brand-logo">
                        <img src="../../img/turfease-logo.png" alt="TurfEase">
                    </a>
                    <p class="footer-tagline">Bangladesh's leading online turf booking platform. Play more, worry less.</p>
                    <div class="footer-social-links">
                        <a href="#" class="footer-social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="footer-social-link"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="footer-social-link"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#" class="footer-social-link"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>

                {{-- About Links --}}
                <div>
                    <h4 class="footer-col-title">Company</h4>
                    <div class="footer-links">
                        <a href="#" class="footer-link">About Us</a>
                        <a href="#" class="footer-link">Careers</a>
                        <a href="#" class="footer-link">Partners</a>
                        <a href="#" class="footer-link">Blog</a>
                    </div>
                </div>

                {{-- Support Links --}}
                <div>
                    <h4 class="footer-col-title">Help & Support</h4>
                    <div class="footer-links">
                        <a href="#" class="footer-link">FAQ</a>
                        <a href="#" class="footer-link">Privacy Policy</a>
                        <a href="#" class="footer-link">Terms & Conditions</a>
                        <a href="#" class="footer-link">Pricing & Refunds</a>
                    </div>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 class="footer-col-title">Contact</h4>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Dhaka, Bangladesh</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-envelope"></i>
                        <span>contact@turfease.com</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-phone"></i>
                        <span>+880 1XXX-XXXXXX</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="custom-container mx-auto px-4">
        <div class="footer-bottom">
            <p class="footer-copyright">© {{ date('Y') }} TurfEase. All Rights Reserved.</p>
            <p class="footer-made-with">Made with <i class="fa-solid fa-heart text-xs"></i> in Bangladesh</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    function toggleDropDown(event) {
        event.stopPropagation();
        let dropdown = document.querySelector('#dropDownButton #dropdown');
        if (dropdown) dropdown.classList.toggle("hidden");
    }
    document.addEventListener('click', function(event) {
        let dropdown = document.querySelector('#dropDownButton #dropdown');
        if (dropdown && !dropdown.closest('#dropDownButton').contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });
</script>
