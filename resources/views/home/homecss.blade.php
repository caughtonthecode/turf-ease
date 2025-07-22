<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="resources/css/app.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="icon" type="image/x-icon" href="/img/favicon.png">
<style>
    .swiper {
        width: 100%;
        height: 500px;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Tab Headers */
    .tab-header.active {
        @apply text-indigo-600 border-b-2 border-indigo-600 font-semibold;
    }

    /* Style the calendar icon */
    /* input[type="date"]::-webkit-calendar-picker-indicator {
        filter: invert(1);
    } */

    /* Define the gradient colors for the scrollbar */
    ::-webkit-scrollbar {
        width: 12px;
        /* Width of the scrollbar */
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: linear-gradient(to bottom, #ffffff, #f0f0f0);
        /* Gradient for the scrollbar track */
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #4caf50, #009688);
        /* Gradient for the scrollbar thumb */
        border-radius: 6px;
        /* Roundness of the scrollbar thumb */
    }
</style>
@vite('resources/css/app.css')
