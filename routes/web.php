<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontpage');
})->name('frontpage');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');
