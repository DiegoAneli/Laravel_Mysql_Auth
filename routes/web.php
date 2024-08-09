<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);

//Auth::routes();



use App\Http\Controllers\DashboardController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'overview'])->name('dashboard.overview');
    Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
    Route::get('/dashboard/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');
    Route::get('/dashboard/support', [DashboardController::class, 'support'])->name('dashboard.support');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');


Route::get('/', function () {
    return view('landing');
})->name('landing');


Route::get('/private', function () {
    return view('private');
})->middleware('auth')->name('private');
