<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
// Route untuk halaman daftar produk
Route::get('/index', [ProductController::class, 'index'])->name('produk.index');

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

Route::get('/', function () {return view('homenon');});
Route::get('/homenon', function () {return view('homenon');});

Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/login', function () {return view('auth.login');});
Route::get('/dashboard', function () {return view('admin.dashboard');});
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

