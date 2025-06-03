<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('auth.register');
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/cv-upload', function () {
        return view('cv.upload');
    })->name('cv.upload');

    Route::post('/cv-upload', [\App\Http\Controllers\CVUploadController::class, 'store'])->name('cv.upload.store');
});