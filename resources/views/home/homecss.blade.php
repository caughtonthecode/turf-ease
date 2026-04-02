<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="icon" type="image/x-icon" href="/img/favicon.png">

<style>
    *, *::before, *::after { box-sizing: border-box; }

    body {
        font-family: 'Be Vietnam Pro', sans-serif;
        background: #fff;
        color: #1a1a1a;
        -webkit-font-smoothing: antialiased;
        scroll-behavior: smooth;
    }

    .custom-container {
        max-width: 1200px;
        width: 100%;
    }

    /* Scrollbar */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: #f0f0f0; }
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #06B24E, #057534);
        border-radius: 6px;
    }

    /* Shared Utility */
    .section-label {
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: #06B24E;
        font-family: 'Be Vietnam Pro', sans-serif;
        margin-bottom: 4px;
        display: block;
    }

    .section-title {
        font-size: clamp(1.5rem, 3.5vw, 2.1rem);
        font-weight: 800;
        color: #111;
        font-family: 'Be Vietnam Pro', sans-serif;
        line-height: 1.2;
    }

    .see-all-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 0.85rem;
        font-weight: 600;
        color: #06B24E;
        border: 1.5px solid rgba(6,178,78,0.3);
        padding: 7px 18px;
        border-radius: 50px;
        transition: all 0.25s;
        text-decoration: none;
    }

    .see-all-btn:hover {
        background: #06B24E;
        color: #fff;
        border-color: #06B24E;
    }

    /* Turf card styles (shared by explore + dhaka sections) */
    .turf-card {
        flex: none;
        width: 280px;
        border-radius: 18px;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0 4px 20px rgba(0,0,0,0.10), 0 1px 4px rgba(0,0,0,0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        border: 1.5px solid #e8f5ec;
        position: relative;
    }

    .turf-card::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        background: linear-gradient(90deg, #06B24E, #7ec620);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .turf-card:hover::after { opacity: 1; }

    .turf-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 20px 50px rgba(6,178,78,0.15), 0 4px 16px rgba(0,0,0,0.1);
        border-color: rgba(6,178,78,0.3);
    }

    .turf-card-img-wrap { position: relative; overflow: hidden; height: 175px; }
    .turf-card-img-wrap img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
    .turf-card:hover .turf-card-img-wrap img { transform: scale(1.07); }

    .turf-card-badge {
        position: absolute; top: 10px; left: 10px;
        background: rgba(6,178,78,0.92); color: #fff;
        font-size: 0.65rem; font-weight: 700; padding: 3px 10px;
        border-radius: 50px; letter-spacing: 0.05em; text-transform: uppercase;
    }

    .turf-card-body { padding: 14px 16px 16px; }
    .turf-card-name { font-size: 0.97rem; font-weight: 700; color: #1a1a1a; margin-bottom: 6px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
    .turf-card-meta { display: flex; justify-content: space-between; align-items: center; font-size: 0.8rem; color: #6b7280; }
    .turf-card-location { display: flex; align-items: center; gap: 4px; text-transform: capitalize; }
    .turf-card-rating { display: flex; align-items: center; gap: 4px; background: #fefce8; color: #92400e; padding: 2px 8px; border-radius: 50px; font-weight: 600; }
    .turf-card-rating i { color: #f59e0b; }

    .turf-scroll-container::-webkit-scrollbar { display: none; }

    .scroll-nav-btn {
        background: #fff; border: 1px solid #eee; border-radius: 50%;
        width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;
        cursor: pointer; box-shadow: 0 4px 14px rgba(0,0,0,0.1); transition: all 0.2s; z-index: 10; color: #333;
    }
    .scroll-nav-btn:hover { background: #06B24E; color: #fff; border-color: #06B24E; }

    /* Category card */
    .category-card {
        display: flex; flex-direction: column; align-items: flex-start;
        background: #ffffff;
        border: 1.5px solid #e8f5ec;
        border-radius: 18px;
        padding: 22px 20px;
        transition: all 0.3s ease;
        text-decoration: none;
        position: relative;
        overflow: hidden;
        box-shadow: 0 3px 14px rgba(0,0,0,0.08), 0 1px 3px rgba(0,0,0,0.04);
    }
    .category-card:hover {
        border-color: rgba(6,178,78,0.45);
        box-shadow: 0 14px 40px rgba(6,178,78,0.16), 0 3px 10px rgba(0,0,0,0.06);
        transform: translateY(-5px);
    }

    .category-icon-wrap {
        width: 52px; height: 52px; background: rgba(6,178,78,0.08);
        border-radius: 12px; display: flex; align-items: center; justify-content: center;
        margin-bottom: 14px; transition: all 0.3s;
    }
    .category-card:hover .category-icon-wrap { background: linear-gradient(135deg, #06B24E, #7ec620); }
    .category-icon-wrap img { width: 28px; height: 28px; object-fit: contain; transition: filter 0.3s; }
    .category-card:hover .category-icon-wrap img { filter: brightness(0) invert(1); }

    .category-name { font-size: 0.92rem; font-weight: 700; color: #1a1a1a; flex: 1; }

    .category-arrow {
        display: flex; align-items: center; justify-content: center;
        width: 26px; height: 26px; border-radius: 50%;
        background: rgba(6,178,78,0.08); color: #06B24E; font-size: 0.65rem;
        transition: all 0.3s; margin-top: auto; align-self: flex-end;
    }
    .category-card:hover .category-arrow { background: #06B24E; color: #fff; transform: translate(2px,-2px); }

    /* Step cards */
    .step-card {
        display: flex; flex-direction: column; align-items: center; text-align: center;
        padding: 36px 24px;
        background: #ffffff;
        border-radius: 20px;
        border: 1.5px solid #e8f5ec;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 18px rgba(0,0,0,0.08), 0 1px 4px rgba(0,0,0,0.04);
    }
    .step-card::before {
        content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px;
        background: linear-gradient(90deg, #06B24E, #7ec620);
        transform: scaleX(0); transition: transform 0.35s ease; transform-origin: left;
    }
    .step-card:hover::before { transform: scaleX(1); }
    .step-card:hover { box-shadow: 0 20px 50px rgba(6,178,78,0.12); border-color: rgba(6,178,78,0.25); transform: translateY(-5px); }

    .step-icon-wrap {
        width: 68px; height: 68px; border-radius: 18px;
        background: linear-gradient(135deg, rgba(6,178,78,0.1), rgba(126,198,32,0.08));
        display: flex; align-items: center; justify-content: center;
        font-size: 1.7rem; color: #06B24E; margin-bottom: 18px; transition: all 0.3s;
    }
    .step-card:hover .step-icon-wrap { background: linear-gradient(135deg, #06B24E, #7ec620); color: #fff; }

    .step-number {
        position: absolute; top: 14px; right: 16px;
        font-size: 3.5rem; font-weight: 900;
        color: rgba(6,178,78,0.06); line-height: 1; pointer-events: none;
    }

    .step-title { font-size: 1rem; font-weight: 700; color: #111; margin-bottom: 8px; }    .step-desc { font-size: 0.85rem; color: #6b7280; line-height: 1.6; }
</style>
@vite('resources/css/app.css')
