<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\TurfAdminController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('/');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//General User
Route::get('/turf-list', [HomeController::class, 'turfList']);
Route::get('/turf/{id}', [HomeController::class, 'turfViewPage']);
Route::post('/turf/{id}/confirm-booking', [HomeController::class, 'confirmBooking'])->name('confirmBooking');
Route::get('manager-request', [HomeController::class, 'managerRequestView']);
Route::post('manager-request', [HomeController::class, 'managerRequestStore'])->name('managerRequest');
Route::get('/category/football', [HomeController::class, 'football']);
Route::get('/category/cricket', [HomeController::class, 'cricket']);
Route::get('/category/badminton', [HomeController::class, 'badminton']);
Route::get('/category/basketball', [HomeController::class, 'basketball']);
Route::get('/category/swimming', [HomeController::class, 'swimming']);
Route::get('/category/pool', [HomeController::class, 'pool']);
Route::get('/category/paintball', [HomeController::class, 'paintball']);
Route::get('/category/e-sports', [HomeController::class, 'eSports']);

// Logged User
Route::middleware(['auth'])->group(function () {
    Route::get('userProfile', [UserController::class, 'index'])->name('index');
    Route::get('booking-history', [UserController::class, 'bookingHistory'])->name('bookingHistory');
    Route::get('tournament', [UserController::class, 'tournament'])->name('tournament');
    Route::get('profile-update', [UserController::class, 'profileUpdateView'])->name('profile-update');
    Route::post('profile-update', [UserController::class, 'profileUpdate']);
    Route::get('change-password', [ChangePasswordController::class, 'showChangePasswordForm']);
    Route::post('change-password', [ChangePasswordController::class, 'changePassword'])->name('changePassword');
});

// Route::get('login', [UserController::class,'login']);

// Route::get('register', [UserController::class,'register']);

//Turf Manager panel
Route::middleware(['auth', 'tmanager'])->group(function () {
    Route::get('dashboard', [TurfAdminController::class, 'dashboardView']);
    Route::get('myProfile', [TurfAdminController::class, 'myProfile']);
    Route::get('myProfile.edit', [UserController::class, 'editProfileView']);
    Route::post('myProfile.edit', [UserController::class, 'profileUpdate'])->name('myProfile.edit');
    Route::get('bookings', [TurfAdminController::class, 'booking']);
    Route::get('view-turf', [TurfAdminController::class, 'viewTurf']);
    Route::post('view-turf', [TurfAdminController::class, 'addTurf'])->name('add-turf');
    Route::post('view-turf/{id}', [TurfAdminController::class, 'updateTurf'])->name('update-turf');
    Route::delete('view-turf/{id}', [TurfAdminController::class, 'deleteTurf'])->name('deleteTurf');
    Route::get('myWallet', [TurfAdminController::class, 'myWallet']);
});

//Admin panel
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', [AdminController::class, 'adminView']);
    Route::get('users', [AdminController::class, 'userView']);
    Route::post('admin/confirm', [AdminController::class, 'managerRequest'])->name('acceptRequest');
    Route::post('admin/reject', [AdminController::class, 'managerRequest'])->name('rejectRequest');
    Route::get('earnings', [AdminController::class, 'earningView']);
    Route::post('admin/edit-user', [AdminController::class, 'editUserAdmin'])->name('editUserAdmin');

    Route::delete('/users/{userId}', [AdminController::class, 'deleteUser'])->name('user.delete');
    Route::post('confirmBook/{bookingId}', [AdminController::class, 'confirmBook'])->name('confirmBook');
    Route::post('rejectBook/{bookingId}', [AdminController::class, 'rejectBook'])->name('rejectBook');
});

Route::get('add-turf', [TurfAdminController::class, 'storeTurf']);

Route::get('ok', [TurfAdminController::class, 'ok']);

Route::get('add-turf/{id}', [TurfAdminController::class, 'turfView']);

require __DIR__ . '/auth.php';

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
