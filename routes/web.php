<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Middleware\CheckRole;




Route::middleware(['auth'])->group(function () {
    Route::get('user/profile', [UserController::class, 'showProfile'])->name('profile');
    Route::post('user/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::post('user/profile/delete', [UserController::class, 'deleteAccount'])->name('profile.delete');
    Route::get('user/dashboard', [UserController::class, 'showDashboard'])->name('user.dashboard');

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
    // Dashboard and Settings Routes
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.home');
    Route::get('admin/users', [DashboardController::class, 'users'])->name('admin.users');
    Route::get('admin/settings', [DashboardController::class, 'settings'])->name('admin.settings');

    // Profile Routes
    Route::get('admin/profile/edit', [DashboardController::class, 'editProfile'])->name('admin.profile.edit');
    Route::post('admin/profile/update', [DashboardController::class, 'updateProfileInformation'])->name('admin.profile.update');
    Route::post('admin/profile/update-password', [DashboardController::class, 'updatePassword'])->name('admin.profile.update-password');
    Route::post('admin/profile/delete', [DashboardController::class, 'deleteUser'])->name('admin.profile.delete');
});

require __DIR__.'/auth.php';
