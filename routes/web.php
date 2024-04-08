<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TurfAdminController;
use App\Http\Controllers\UserController;
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

// User
Route::middleware('auth')->group(function () {
    Route::get('userProfile', [UserController::class, 'index'])->name('index');
    Route::get('booking-history', [UserController::class, 'bookingHistory'])->name('bookingHistory');
    Route::get('tournament', [UserController::class, 'tournament'])->name('tournament');
    Route::get('profile-update', [UserController::class, 'profileUpdateView'])->name('profile-update');
    Route::post('profile-update', [UserController::class, 'profileUpdate']);
    Route::get('change-password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('changePassword');
    Route::post ('change-password', [ChangePasswordController::class, 'changePassword'])->name('changePassword');
});


// Route::get('login', [UserController::class,'login']);

// Route::get('register', [UserController::class,'register']);

// Admin panel
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [TurfAdminController::class, 'dashboardView']);
    Route::get('myProfile', [TurfAdminController::class, 'myProfile']);
    Route::get('bookings', [TurfAdminController::class, 'booking']);
    Route::get('view-turf', [TurfAdminController::class, 'viewTurf'])->name('add-turf');
    Route::post('view-turf', [TurfAdminController::class, 'addTurf'])->name('add-turf');
    Route::get('myWallet', [TurfAdminController::class, 'myWallet']);
});

Route::get('add-turf', [TurfAdminController::class, 'storeTurf']);

Route::get('ok', [TurfAdminController::class, 'ok']);

Route::get('add-turf/{id}', [TurfAdminController::class, 'turfView']);

require __DIR__.'/auth.php';
