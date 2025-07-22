<head>
    <title>Booking Confirmation - TurfEase</title>
    <style>
        .card {
            background: linear-gradient(to bottom right, #667eea, #764ba2);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        }
    </style>
</head>
@include('home.homecss')
@include('home.header')

<div class="container mx-auto px-4 py-8 flex justify-center items-center mt-24">
    <div class="card rounded-lg p-8 w-3/4 mx-auto text-white">
        <div class="flex items-center justify-center mb-8">
            <svg class="w-12 h-12 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <h1 class="text-3xl font-bold">Booking Confirmed!</h1>
        </div>
        <div class="mb-8">
            <p class="font-medium"><span class="font-semibold">Name:</span> {{ $bookings->user_name }}</p>
            <p class="font-medium"><span class="font-semibold">Turf:</span> {{ $bookings->turf_name }}</p>
            <p class="font-medium"><span class="font-semibold">Phone:</span> {{ $bookings->phone }}</p>
            <p class="font-medium"><span class="font-semibold">Booked Slot:</span> {{ $bookings->booked_slot }}</p>
            <p class="font-medium"><span class="font-semibold">Booking Time:</span> {{ $bookings->booking_time }}
            </p>
            <p class="font-medium"><span class="font-semibold">Payment Amount:</span>
                {{ $bookings->payment_amount }}</p>
        </div>
        <a href="{{ url('booking-history') }}"
            class="inline-block bg-white text-purple-600 px-6 py-3 rounded-md shadow-md hover:bg-purple-100 transition-colors duration-300 font-medium">View
            Booking History</a>
    </div>
</div>
@include('home.footer')
