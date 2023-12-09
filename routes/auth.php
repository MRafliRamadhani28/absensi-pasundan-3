<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Cms\Auth\AuthenticatedSessionController;

Route::middleware('guest:web')->group(function () {
    Route::get('/cms/login', [AuthenticatedSessionController::class, 'showLogin']);
    Route::post('/cms/login', [AuthenticatedSessionController::class, 'login'])->name('login');
});

Route::middleware('guest:user')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'showLoginUser']);
    Route::post('/login', [AuthenticatedSessionController::class, 'loginUser'])->name('loginUser');
});

Route::middleware('auth:web')->group(function () {
    Route::post('/cms/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');
});

Route::middleware('auth:user')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'logoutUser'])->name('logoutUser');
});