<body>
    {{-- <style>
        .slider-bg {
            background-image: url('img/sliderbg4.jpg');
            background-size: 100% 100%;
            mar
        }
    </style> --}}
</body>

{{-- <div class="w-full bg-gradient-to-r from-gray-300/10 to-gray-300/30 hero_title pt-16 pb-10">
    <div class="h-52 lg:h-[700px] px-2 lg:px-0 swiper mySwiper custom-container mx-auto rounded-lg overflow-x-hidden">
        <div class="text-center">
            <!-- Element to display the typed text -->
            <p id="typedText" class="text-4xl font-bold mb-8 gradient-text pb-10">S<span class="hidden">t</span><span
                    class="hidden">r</span><span class="hidden">e</span><span class="hidden">n</span><span
                    class="hidden">g</span><span class="hidden">t</span><span class="hidden">h</span><span
                    class="text-[#f1554d]"> !</span> <span class="hidden">s</span><span class="hidden">k</span><span
                    class="hidden">i</span><span class="hidden">l</span><span class="hidden">l</span><span
                    class="text-[#f1554d]"> ! </span><span class="hidden">a</span><span class="hidden">n</span><span
                    class="hidden">d</span> <span class="hidden">s</span><span class="hidden">p</span><span
                    class="hidden">i</span><span class="hidden">r</span><span class="hidden">i</span><span
                    class="hidden">t</span><span class="text-[#f1554d]"> !</span></p>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/football.jpg" class="rounded-lg" alt=""></div>
            <div class="swiper-slide"><img src="img/badminton-2.webp" class="rounded-lg" alt=""></div>
            <div class="swiper-slide"><img src="img/cricket.png" class="rounded-lg" alt=""></div>
        </div>
        <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        <div class="swiper-pagination"></div>
    </div>

</div> --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the typed text element
        var typedText = document.getElementById('typedText');
        // Get all the hidden spans inside the typed text
        var hiddenSpans = typedText.querySelectorAll('.hidden');
        // Delay in milliseconds between each character reveal
        var revealDelay = 100;

        // Function to reveal each character gradually
        function revealCharacters(index) {
            if (index < hiddenSpans.length) {
                hiddenSpans[index].classList.remove('hidden');
                setTimeout(function() {
                    revealCharacters(index + 1);
                }, revealDelay);
            }
        }

        // Call the revealCharacters function to start revealing characters
        revealCharacters(0);
    });
</script>
