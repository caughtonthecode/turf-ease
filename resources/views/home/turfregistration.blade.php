{{-- ===== Own a Turf? CTA Section ===== --}}
<style>
    .register-section {
        position: relative;
        padding: 100px 0;
        background-image: url('../../../public/img/bg-2.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        overflow: hidden;
    }

    .register-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(6,178,78,0.88) 0%, rgba(5,117,52,0.92) 100%);
    }

    .register-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .register-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(255,255,255,0.15);
        border: 1px solid rgba(255,255,255,0.25);
        color: #fff;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        padding: 5px 16px;
        border-radius: 50px;
        font-family: 'Be Vietnam Pro', sans-serif;
        margin-bottom: 20px;
    }

    .register-title {
        font-size: clamp(2rem, 5vw, 3.4rem);
        font-weight: 900;
        color: #fff;
        font-family: 'Be Vietnam Pro', sans-serif;
        line-height: 1.15;
        margin-bottom: 14px;
    }

    .register-desc {
        font-size: 0.95rem;
        color: rgba(255,255,255,0.8);
        font-family: 'Be Vietnam Pro', sans-serif;
        max-width: 520px;
        margin: 0 auto 32px;
        line-height: 1.7;
    }

    .btn-register-white {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #fff;
        color: #06B24E;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 800;
        font-size: 0.95rem;
        padding: 14px 36px;
        border-radius: 12px;
        text-decoration: none;
        transition: all 0.3s;
        box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    }

    .btn-register-white:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.2);
        color: #057534;
    }

    .register-features {
        display: flex;
        justify-content: center;
        gap: 28px;
        flex-wrap: wrap;
        margin-top: 36px;
    }

    .reg-feature {
        display: flex;
        align-items: center;
        gap: 8px;
        color: rgba(255,255,255,0.85);
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .reg-feature i {
        color: rgba(255,255,255,0.9);
        background: rgba(255,255,255,0.15);
        width: 26px;
        height: 26px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.7rem;
    }
</style>

<div class="register-section">
    <div class="register-overlay"></div>
    <div class="custom-container mx-auto px-4">
        <div class="register-content">
            <div class="register-eyebrow">
                <i class="fa-solid fa-star text-xs"></i> For Turf Owners
            </div>
            <h2 class="register-title">Own a Turf?<br>Get Registered Today</h2>
            <p class="register-desc">
                Join hundreds of turf owners on TurfEase and reach thousands of players across Bangladesh. Manage bookings, track revenue, and grow your business effortlessly.
            </p>
            <a href="{{ url('manager-request') }}" class="btn-register-white">
                <i class="fa-solid fa-plus-circle"></i> Add Your Turf — It's Free
            </a>

            <div class="register-features">
                <div class="reg-feature">
                    <i class="fa-solid fa-check"></i> Free Listing
                </div>
                <div class="reg-feature">
                    <i class="fa-solid fa-check"></i> Dashboard & Analytics
                </div>
                <div class="reg-feature">
                    <i class="fa-solid fa-check"></i> Online Payments
                </div>
                <div class="reg-feature">
                    <i class="fa-solid fa-check"></i> 24/7 Support
                </div>
            </div>
        </div>
    </div>
</div>
