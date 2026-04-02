{{-- ===== Tournament / CTA Banner Section ===== --}}
<style>
    .tournament-section {
        background: #0a0f0a;
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .tournament-section::before {
        content: '';
        position: absolute;
        top: -120px;
        right: -120px;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(6,178,78,0.15) 0%, transparent 70%);
        pointer-events: none;
    }

    .tournament-section::after {
        content: '';
        position: absolute;
        bottom: -80px;
        left: -80px;
        width: 350px;
        height: 350px;
        background: radial-gradient(circle, rgba(126,198,32,0.1) 0%, transparent 70%);
        pointer-events: none;
    }

    .tournament-inner {
        position: relative;
        z-index: 2;
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 28px;
        padding: 56px 48px;
        background: linear-gradient(135deg, rgba(255,255,255,0.03) 0%, rgba(6,178,78,0.04) 100%);
        backdrop-filter: blur(10px);
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    @media (min-width: 1024px) {
        .tournament-inner {
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }
    }

    .tournament-tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(6,178,78,0.15);
        border: 1px solid rgba(6,178,78,0.3);
        color: #06B24E;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 5px 14px;
        border-radius: 50px;
        font-family: 'Be Vietnam Pro', sans-serif;
        margin-bottom: 14px;
    }

    .tournament-title {
        font-size: clamp(1.8rem, 4vw, 3rem);
        font-weight: 900;
        color: #fff;
        font-family: 'Be Vietnam Pro', sans-serif;
        line-height: 1.15;
        margin-bottom: 12px;
    }

    .tournament-title span { color: #06B24E; }

    .tournament-desc {
        font-size: 0.9rem;
        color: rgba(255,255,255,0.55);
        font-family: 'Be Vietnam Pro', sans-serif;
        line-height: 1.7;
        max-width: 480px;
    }

    .tournament-actions {
        display: flex;
        flex-direction: column;
        gap: 12px;
        flex-shrink: 0;
    }

    @media (min-width: 640px) {
        .tournament-actions { flex-direction: row; }
    }

    .btn-primary-green {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(135deg, #06B24E, #057534);
        color: #fff;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        padding: 13px 28px;
        border-radius: 12px;
        text-decoration: none;
        transition: all 0.3s;
        white-space: nowrap;
    }

    .btn-primary-green:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(6,178,78,0.4);
        background: linear-gradient(135deg, #07c557, #06B24E);
    }

    .btn-outline-white {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: transparent;
        color: rgba(255,255,255,0.8);
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 600;
        font-size: 0.9rem;
        padding: 13px 28px;
        border-radius: 12px;
        text-decoration: none;
        border: 1.5px solid rgba(255,255,255,0.2);
        transition: all 0.3s;
        white-space: nowrap;
    }

    .btn-outline-white:hover {
        background: rgba(255,255,255,0.07);
        border-color: rgba(255,255,255,0.4);
        color: #fff;
    }

    .tournament-stats {
        display: flex;
        gap: 24px;
        margin-top: 24px;
        flex-wrap: wrap;
    }

    .t-stat {
        text-align: left;
    }

    .t-stat-num {
        font-size: 1.6rem;
        font-weight: 800;
        color: #06B24E;
        font-family: 'Be Vietnam Pro', sans-serif;
    }

    .t-stat-lbl {
        font-size: 0.72rem;
        color: rgba(255,255,255,0.4);
        text-transform: uppercase;
        letter-spacing: 0.06em;
        font-family: 'Be Vietnam Pro', sans-serif;
    }
</style>

<div class="tournament-section">
    <div class="custom-container mx-auto px-4 lg:px-0">
        <div class="tournament-inner">
            <div>
                <div class="tournament-tag">
                    <i class="fa-solid fa-trophy text-xs"></i> Tournaments
                </div>
                <h2 class="tournament-title">
                    Host or Join a <span>Tournament?</span>
                </h2>
                <p class="tournament-desc">
                    Organize exciting tournaments at your preferred turfs or join thrilling competitions by fellow sports enthusiasts. Take your game to the next level.
                </p>

                <div class="tournament-stats">
                    <div class="t-stat">
                        <div class="t-stat-num">120+</div>
                        <div class="t-stat-lbl">Tournaments Held</div>
                    </div>
                    <div style="width:1px;background:rgba(255,255,255,0.08);"></div>
                    <div class="t-stat">
                        <div class="t-stat-num">8K+</div>
                        <div class="t-stat-lbl">Participants</div>
                    </div>
                    <div style="width:1px;background:rgba(255,255,255,0.08);"></div>
                    <div class="t-stat">
                        <div class="t-stat-num">Free</div>
                        <div class="t-stat-lbl">To Register</div>
                    </div>
                </div>
            </div>

            <div class="tournament-actions">
                <a href="#" class="btn-primary-green">
                    <i class="fa-solid fa-plus"></i> Host a Tournament
                </a>
                <a href="#" class="btn-outline-white">
                    <i class="fa-solid fa-eye"></i> View All
                </a>
            </div>
        </div>
    </div>
</div>
