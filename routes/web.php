<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home',
        [DashboardController::class, 'index']
    )->name('home');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
