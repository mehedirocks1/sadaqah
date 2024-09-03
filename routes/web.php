<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;


// UserController Routes
Route::get('register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [UserController::class, 'register']);

Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('profile', [UserController::class, 'showProfile'])->name('profile');
    Route::post('profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::post('profile/delete', [UserController::class, 'deleteAccount'])->name('profile.delete');
});

// Logout Route
Route::post('logout', [UserController::class, 'logout'])->name('logout');

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/donate', [FrontendController::class, 'donate'])->name('donate');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

// Dashboard Route


Route::middleware(['role:Admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.home');
    Route::get('/users', [DashboardController::class, 'users'])->name('admin.users');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('admin.settings');
});
require __DIR__.'/auth.php';
