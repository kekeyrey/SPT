<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {return view('homenon');});
Route::get('/homenon', function () {return view('homenon');});

Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/login', function () {return view('auth.login');});
Route::get('/dashboard', function () {return view('admin.dashboard');});

