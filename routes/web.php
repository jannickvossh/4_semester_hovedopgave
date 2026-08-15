<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\{
    RegisteredUserController,
    SessionsController,
    HomeController,
    RoutesController,
    RouteGroupsController
};

Route::get('/', [HomeController::class, 'home'])->name('home');

/*
 * Not logged in
 */
Route::middleware(['guest'])->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');

    Route::get('login', [SessionsController::class, 'create'])->name('login');
    Route::post('login', [SessionsController::class, 'store'])->name('sessions.store');
});

/*
 * Logged in
 */
Route::middleware(['auth'])->group(function () {
    Route::delete('logout', [SessionsController::class, 'destroy'])->name('sessions.destroy');

    Route::prefix('routes')->group(function () {
        Route::get('/', [RoutesController::class, 'index'])->name('routes');
    });

    Route::prefix('route-groups')->group(function () {
        Route::get('/', [RouteGroupsController::class, 'index'])->name('route-groups');
    });
});
