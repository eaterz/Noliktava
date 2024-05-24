<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DataController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['role:admin'])->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('data', DataController::class);
    });
});
