<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\NoticeController;

// Public Admin Login Routes
Route::get('/admin-login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin-login', [AuthController::class, 'login']);

// Root Redirect
Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

// Protected Admin Routes
Route::middleware(['auth'])->prefix('admin')->as('admin.')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('students', StudentController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('notices', NoticeController::class);
    Route::resource('galleries', \App\Http\Controllers\GalleryController::class);
    Route::delete('galleries/images/{image}', [\App\Http\Controllers\GalleryController::class, 'deleteImage'])->name('galleries.images.destroy');
});
