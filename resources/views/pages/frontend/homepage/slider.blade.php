{{-- ===== How It Works Section (replaces slider) ===== --}}
@push('styles')
<style>
    .how-it-works {
        background: #f8fdf9;
        padding: 80px 0;
    }

    .step-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 36px 24px;
        background: #fff;
        border-radius: 20px;
        border: 1.5px solid #edf2ed;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .step-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        background: linear-gradient(90deg, #06B24E, #7ec620);
        transform: scaleX(0);
        transition: transform 0.35s ease;
        transform-origin: left;
    }

    .step-card:hover::before { transform: scaleX(1); }

    .step-card:hover {
        box-shadow: 0 20px 50px rgba(6,178,78,0.12);
        border-color: rgba(6,178,78,0.25);
        transform: translateY(-5px);
    }

    .step-icon-wrap {
        width: 72px;
        height: 72px;
        border-radius: 20px;
        background: linear-gradient(135deg, rgba(6,178,78,0.12), rgba(126,198,32,0.1));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: #06B24E;
        margin-bottom: 18px;
        transition: all 0.3s;
    }

    .step-card:hover .step-icon-wrap {
        background: linear-gradient(135deg, #06B24E, #7ec620);
        color: #fff;
    }

    .step-number {
        position: absolute;
        top: 14px;
        right: 16px;
        font-size: 3.5rem;
        font-weight: 900;
        color: rgba(6,178,78,0.06);
        font-family: 'Be Vietnam Pro', sans-serif;
        line-height: 1;
        pointer-events: none;
    }

    .step-title {
        font-size: 1.05rem;
        font-weight: 700;
        color: #111;
        margin-bottom: 8px;
        font-family: 'Be Vietnam Pro', sans-serif;
    }

    .step-desc {
        font-size: 0.87rem;
        color: #6b7280;
        line-height: 1.6;
        font-family: 'Be Vietnam Pro', sans-serif;
    }

    .step-connector {
        display: none;
    }

    @media (min-width: 1024px) {
        .step-connector {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d1fae5;
            font-size: 1.4rem;
        }
    }
</style>
@endpush


<div class="how-it-works">
    <div class="custom-container mx-auto px-4">
        <div class="text-center mb-12">
            <p class="section-label"><i class="fa-solid fa-route mr-1"></i> Simple Steps</p>
            <h2 class="section-title">How TurfEase Works</h2>
            <p style="font-family:'Be Vietnam Pro',sans-serif; color:#6b7280; font-size:0.92rem; max-width:480px; margin:10px auto 0; line-height:1.7;">
                Book your favorite sports turf in just a few clicks — quick, easy, and transparent.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="step-card">
                <span class="step-number">01</span>
                <div class="step-icon-wrap">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <h3 class="step-title">Search Turf</h3>
                <p class="step-desc">Browse hundreds of verified turfs across Bangladesh by name, sport, or location.</p>
            </div>

            <div class="step-card">
                <span class="step-number">02</span>
                <div class="step-icon-wrap">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>
                <h3 class="step-title">Pick Date & Slot</h3>
                <p class="step-desc">Choose your preferred date and available time slots in real-time — no conflicts.</p>
            </div>

            <div class="step-card">
                <span class="step-number">03</span>
                <div class="step-icon-wrap">
                    <i class="fa-solid fa-credit-card"></i>
                </div>
                <h3 class="step-title">Confirm & Pay</h3>
                <p class="step-desc">Pay securely online or on-site. Multiple payment methods supported.</p>
            </div>

            <div class="step-card">
                <span class="step-number">04</span>
                <div class="step-icon-wrap">
                    <i class="fa-solid fa-futbol"></i>
                </div>
                <h3 class="step-title">Play & Enjoy</h3>
                <p class="step-desc">Show up and play! Your booking confirmation is your entry pass. Simple as that.</p>
            </div>
        </div>
    </div>
</div>
