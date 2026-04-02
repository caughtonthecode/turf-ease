<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\TurfAdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==========================================
// PUBLIC ROUTES
// ==========================================
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('/');

    // Turf Exploration
    Route::get('/turf-list', 'turfList');
    Route::get('/turf/{id}', 'turfViewPage');

    // Booking
    Route::post('/turf/{id}/confirm-booking', 'confirmBooking')->name('confirmBooking');

    // Manager Requests
    Route::get('manager-request', 'managerRequestView');
    Route::post('manager-request', 'managerRequestStore')->name('managerRequest');

    // Categories
    Route::prefix('category')->group(function () {
        Route::get('football', 'football');
        Route::get('cricket', 'cricket');
        Route::get('badminton', 'badminton');
        Route::get('basketball', 'basketball');
        Route::get('swimming', 'swimming');
        Route::get('pool', 'pool');
        Route::get('paintball', 'paintball');
        Route::get('e-sports', 'eSports');
    });
});

// ==========================================
// LOGGED IN USER ROUTES
// ==========================================
Route::middleware('auth')->group(function () {
    // Breeze Profile
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    // General User Features
    Route::controller(UserController::class)->group(function () {
        Route::get('userProfile', 'index')->name('index');
        Route::get('booking-history', 'bookingHistory')->name('bookingHistory');
        Route::get('tournament', 'tournament')->name('tournament');

        Route::get('profile-update', 'profileUpdateView')->name('profile-update');
        Route::post('profile-update', 'profileUpdate');
    });

    Route::controller(ChangePasswordController::class)->group(function () {
        Route::get('change-password', 'showChangePasswordForm');
        Route::post('change-password', 'changePassword')->name('changePassword');
    });
});

// ==========================================
// TURF MANAGER PANEL
// ==========================================
Route::middleware(['auth', 'tmanager'])->group(function () {
    Route::controller(TurfAdminController::class)->group(function () {
        Route::get('dashboard', 'dashboardView');
        Route::get('myProfile', 'myProfile');
        Route::get('bookings', 'booking');
        Route::get('myWallet', 'myWallet');

        // Turf Management
        Route::get('view-turf', 'viewTurf');
        Route::post('view-turf', 'addTurf')->name('add-turf');
        Route::post('view-turf/{id}', 'updateTurf')->name('update-turf');
        Route::delete('view-turf/{id}', 'deleteTurf')->name('deleteTurf');

        // Add Turf Pages (previously rogue outside middleware)
        Route::get('add-turf', 'storeTurf');
        Route::get('add-turf/{id}', 'turfView');
        Route::get('ok', 'ok');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('myProfile.edit', 'editProfileView');
        Route::post('myProfile.edit', 'profileUpdate')->name('myProfile.edit');
    });
});

// ==========================================
// SUPER ADMIN PANEL
// ==========================================
Route::middleware(['auth', 'admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        // Admin Dashboard & Views
        Route::get('admin', 'adminView');
        Route::get('users', 'userView');
        Route::get('earnings', 'earningView');

        // Actions
        Route::post('admin/confirm', 'managerRequest')->name('acceptRequest');
        Route::post('admin/reject', 'managerRequest')->name('rejectRequest');
        Route::post('admin/edit-user', 'editUserAdmin')->name('editUserAdmin');
        Route::delete('/users/{userId}', 'deleteUser')->name('user.delete');

        // Booking Operations
        Route::post('confirmBook/{bookingId}', 'confirmBook')->name('confirmBook');
        Route::post('rejectBook/{bookingId}', 'rejectBook')->name('rejectBook');
    });
});

// ==========================================
// AUTHENTICATION ROUTES (Breeze)
// ==========================================
require __DIR__ . '/auth.php';

// ==========================================
// SSLCOMMERZ INTEGRATION
// ==========================================
Route::controller(SslCommerzPaymentController::class)->group(function () {
    Route::get('/example1', 'exampleEasyCheckout');
    Route::get('/example2', 'exampleHostedCheckout');
    Route::post('/pay', 'index');
    Route::post('/pay-via-ajax', 'payViaAjax');
    Route::post('/success', 'success');
    Route::post('/fail', 'fail');
    Route::post('/cancel', 'cancel');
    Route::post('/ipn', 'ipn');
});
