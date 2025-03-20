<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [HomeController::class, 'index']);


Route::get('redirect', [HomeController::class, 'redirect']);
Route::get('logout', [HomeController::class, 'logout']);
