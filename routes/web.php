<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

// PERBAIKAN: Sintaks yang benar untuk route
Route::get('/', [ProductController::class, 'homenon'])->name('home');
Route::get('/homenon', [ProductController::class, 'homenon'])->name('homenon');

// Routes untuk halaman lain
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

// Auth routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// Admin routes untuk products management
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);