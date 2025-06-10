<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


Route::get('/homenon', function () {return view('homenon');});

Route::get('/about', function () {return view('about');});

Route::get('/contact', function () {return view('contact');});

