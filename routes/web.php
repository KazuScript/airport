<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

Route::get('/flights', function () {
    return Inertia::render('Flights/Index');
});

Route::get('/booking/{code}', function ($code) {
    return Inertia::render('Booking/Show', [
        'code' => $code,
    ]);
});

require __DIR__.'/settings.php';
