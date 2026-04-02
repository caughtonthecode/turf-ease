<style>
    /* ============ PRELOADER ============ */
    #site-preloader {
        position: fixed;
        inset: 0;
        z-index: 99999;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: opacity 0.6s cubic-bezier(0.8, 0, 0.2, 1), transform 0.6s cubic-bezier(0.8, 0, 0.2, 1);
    }
    
    body.loading {
        overflow: hidden !important;
    }

    #site-preloader.finished {
        opacity: 0;
        pointer-events: none;
        transform: scale(1.03);
    }

    .preloader-brand {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 24px;
    }

    .preloader-icon {
        font-size: 2.2rem;
        color: #06B24E;
        /* Custom bouncing and spinning animation for a sports feel */
        animation: sportBounce 1.4s cubic-bezier(0.28, 0.84, 0.42, 1) infinite;
        transform-origin: bottom center;
    }

    .preloader-logo {
        height: 38px; /* Adjust height based on actual logo proportion */
        width: auto;
        animation: pulseLogo 1.6s ease-in-out infinite alternate;
    }

    /* Loading bar wrapper */
    .preloader-bar-wrap {
        width: 140px;
        height: 4px;
        background: #edf2ed;
        border-radius: 4px;
        overflow: hidden;
        position: relative;
    }

    /* Inner loading bar line that sweeps across */
    .preloader-bar {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: linear-gradient(90deg, #06B24E, #057534);
        border-radius: 4px;
        transform-origin: left;
        animation: loadingBar 1.2s cubic-bezier(0.4, 0, 0.2, 1) infinite alternate;
    }

    @keyframes sportBounce {
        0%, 100% {
            transform: translateY(0) scaleY(1) rotate(0deg);
        }
        30% {
            transform: translateY(-24px) scaleY(1.05) rotate(90deg);
        }
        70% {
            transform: translateY(0) scaleY(0.9) rotate(180deg);
        }
    }

    @keyframes loadingBar {
        0% { transform: scaleX(0.1); transform-origin: left; }
        49% { transform: scaleX(1); transform-origin: left; }
        51% { transform: scaleX(1); transform-origin: right; }
        100% { transform: scaleX(0.1); transform-origin: right; }
    }

    @keyframes pulseLogo {
        0% { transform: scale(0.96); opacity: 0.85; }
        100% { transform: scale(1.04); opacity: 1; }
    }
</style>

<div id="site-preloader">
    <div class="preloader-brand">
        <div class="preloader-icon">
            <i class="fa-solid fa-futbol"></i>
        </div>
        <img src="/img/turfease-logo.png" alt="TurfEase" class="preloader-logo">
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
