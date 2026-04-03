{{-- Styles moved to main.css --}}

<div id="site-preloader">
    <div class="preloader-brand">
        <div class="preloader-icon">
            <i class="fa-solid fa-futbol"></i>
        </div>
        <img src="{{ asset('assets/img/turfease-logo.png') }}" alt="TurfEase" class="preloader-logo">
    </div>
    <div class="preloader-bar-wrap">
        <div class="preloader-bar"></div>
    </div>
</div>

<script>
    // Add loading class to body instantly to stop scrolling
    document.body.classList.add('loading');

    // Wait for everything (images, css, iframes) to finish loading
    window.addEventListener('load', function () {
        const preloader = document.getElementById('site-preloader');
        
        // Add a tiny delay to ensure minimum presentation time (so it doesn't just flash if cached)
        setTimeout(function() {
            preloader.classList.add('finished');
            document.body.classList.remove('loading');
            
            // Remove from DOM entirely after CSS transition completes
            setTimeout(function() {
                if (preloader.parentNode) {
                    preloader.parentNode.removeChild(preloader);
                }
            }, 600); // 600ms matches the CSS transition opacity duration
        }, 300);
    });
</script>
