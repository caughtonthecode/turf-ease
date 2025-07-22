<div class=" bg-white hidden sm:block">
    <div class="custom-container mx-auto pt-20 font-vietnampro text-sm flex justify-evenly pb-10">
        <div class="flex flex-col leading-5">
            <h1 class="text-lg pb-5">About Us</h1>
            <a href="#">About us</a>
            <a href="#">Career</a>
            <a href="#">Partners</a>
        </div>
        <span class="border-r-[1px] border-r-[#bdc3c7]"></span>
        <div class="flex flex-col ">
            <h1 class="text-lg pb-5">Help & Support</h1>
            <a href="#">FAQ</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Pricing & Refunds</a>
        </div>
        <span class="border-r-[1px] border-r-[#bdc3c7]"></span>
        <div class="">
            <h1 class="text-lg pb-5">Follow Us On</h1>
            <span class="space-x-2">
                <a href="#"><i class="fa-brands fa-facebook text-lg"></i></a>
                <a href="#"><i class="fa-brands fa-instagram text-lg"></i></a>
                <a href="#"><i class="fa-brands fa-youtube text-lg"></i></a>
            </span>
        </div>
        <span class="border-r-[1px] border-r-[#bdc3c7]"></span>
        <div class="flex flex-col">
            <h1 class="text-lg pb-5">Contact Us</h1>
            <p><span><i class="fa-solid fa-location-dot mr-2"></i></span>Dhaka, Bangladesh</p>
            <p><span><i class="fa-solid fa-envelope mr-2"></i></span>contact@turfease.com</p>
        </div>
    </div>
    <p class="text-sm text-center pt-10 pb-2">© 2024 TurfEase. All Rights Reserved.</p>

</div>
<!-- Footer Area End Here -->

{{-- Mobile Footer --}}
<div class="bg-white block sm:hidden overflow-x-hidden">
    <div class="custom-container ml-8 mt-6">
        <div class="flex flex-col md:border-r-[1px] md:border-r-[#bdc3c7] md:pr-4">
            <h1 class="text-md font-semibold pb-2 md:pb-5">About Us</h1>
            <a href="#" class="mb-0.5 text-sm">About us</a>
            <a href="#" class="mb-0.5 text-sm">Career</a>
            <a href="#" class="mb-0.5 text-sm">Partners</a>
        </div>
        <div class="flex flex-col md:pr-4 pt-3">
            <h1 class="text-md font-semibold pb-2 md:pb-5 ">Help & Support</h1>
            <a href="#" class="mb-0.5 text-sm">FAQ</a>
            <a href="#" class="mb-0.5 text-sm">Privacy Policy</a>
            <a href="#" class="mb-0.5 text-sm">Terms & Conditions</a>
            <a href="#" class="mb-0.5 text-sm">Pricing & Refunds</a>
        </div>
        <div class="flex flex-col md:border-r-[1px] md:border-r-[#bdc3c7] md:pl-4 md:py-0">
            <h1 class="text-md font-semibold pb-1 md:pb-5 pt-3">Follow Us On</h1>
            <div class="flex space-x-2">
                <a href="#"><i class="fab fa-facebook text-lg"></i></a>
                <a href="#"><i class="fab fa-instagram text-lg"></i></a>
                <a href="#"><i class="fab fa-youtube text-lg"></i></a>
            </div>
        </div>
        <div class="flex flex-col md:pl-4 md:py-0 pt-3">
            <h1 class="text-md font-semibold pb-2 md:pb-5">Contact Us</h1>
            <p class="mb-0.5 text-sm"><span><i class="fas fa-map-marker-alt mr-2"></i></span>Dhaka, Bangladesh</p>
            <p class="mb-0.5 text-sm"><span><i class="fas fa-envelope mr-2"></i></span>contact@turfease.com</p>
        </div>
    </div>
    <p class="text-xs text-center px-4 pt-6 pb-2">© 2024 TurfEase. All Rights Reserved.</p>
</div>


</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script>
    function toggleDropDown(event) {
        event.stopPropagation(); // Stop the event from bubbling up

        let dropdown = document.querySelector('#dropDownButton #dropdown');
        dropdown.classList.toggle("hidden");
    }

    // Add event listener to close dropdown when clicked outside
    document.addEventListener('click', function(event) {
        let dropdown = document.querySelector('#dropDownButton #dropdown');
        let targetElement = event.target;

        // Close dropdown if the clicked target is outside the dropdown
        if (!dropdown.contains(targetElement)) {
            dropdown.classList.add('hidden');
        }
    });
</script>
