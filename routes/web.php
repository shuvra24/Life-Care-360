<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

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

// Public Pages
Route::view('/', 'welcome')->name('welcome');
Route::view('/about', 'about')->name('about');
Route::view('/physician', 'physician')->name('physician');
Route::view('/blood', 'blood')->name('blood');
Route::view('/test', 'test')->name('test');

// User Authentication Routes
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

// Email Verification Routes
Route::controller(VerificationController::class)->group(function() {
    Route::get('/email/verify', 'notice')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'verify')->name('verification.verify');
    Route::post('/email/resend', 'resend')->name('verification.resend');
});

// Authenticated User Routes
Route::middleware(['auth'])->group(function () {
    // Redirect authenticated users to home
    Route::get('/home', function () {
        return redirect()->route('dashboard');
    });

    // User Profile
    // Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

    Route::middleware(['auth'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update'); // Keep POST support
        Route::put('/profile/update', [ProfileController::class, 'update']); // Add PUT method support
    });
    

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Appointments
    Route::prefix('appointments')->name('appointments.')->group(function () {
        Route::get('/', [AppointmentController::class, 'index'])->name('index');
        Route::get('/create', [AppointmentController::class, 'create'])->name('create');
        Route::post('/', [AppointmentController::class, 'store'])->name('store');
        Route::delete('/{id}', [AppointmentController::class, 'destroy'])->name('destroy');
    });

    // Prescriptions (Uncomment if needed)
    // Route::prefix('prescriptions')->name('prescriptions.')->group(function () {
    //     Route::get('/', [PrescriptionController::class, 'index'])->name('index');
    //     Route::get('/create', [PrescriptionController::class, 'create'])->name('create');
    //     Route::post('/', [PrescriptionController::class, 'store'])->name('store');
    // });
});

// Password Reset Routes
Route::controller(ForgotPasswordController::class)->group(function () {
    Route::get('forgot-password', 'showLinkRequestForm')->name('password.request');
    Route::post('forgot-password', 'sendResetLinkEmail')->name('password.email');
});

Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('reset-password/{token}', 'showResetForm')->name('password.reset');
    Route::post('reset-password', 'reset')->name('password.update');
});

use App\Http\Controllers\MedicalRecordController;

Route::middleware('auth')->group(function () {
    Route::get('/medical-record', [MedicalRecordController::class, 'index'])->name('medical.record');
});

use App\Http\Controllers\AnnouncementController;

Route::middleware('auth')->group(function () {
    Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement');
});

// use App\Http\Controllers\ProfileController;

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
//     Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update'); // Use profile_picture
});
