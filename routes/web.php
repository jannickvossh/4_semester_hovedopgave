<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', function () {
    return view('frontpage');
})->name('frontpage');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::prefix('register')->group(function () {
    Route::get('/', [RegisteredUserController::class, 'create'])->name('register.create');
    Route::post('/', [RegisteredUserController::class, 'store'])->name('register.store');
});

Route::get('dashboard', function() {
    return view('dashboard');
})->name('dashboard');
