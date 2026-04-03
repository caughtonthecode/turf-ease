{{-- ===== Modern Footer ===== --}}
{{-- Styles moved to main.css --}}

<footer class="site-footer">
    <div class="footer-top">
        <div class="custom-container mx-auto px-4">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">

                {{-- Brand Column --}}
                <div class="col-span-2 lg:col-span-1">
                    <a href="{{ url('/') }}" class="footer-brand-logo">
                        <img src="{{ asset('assets/img/turfease-logo.png') }}" alt="TurfEase">
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
