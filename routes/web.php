<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('homenon');});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

