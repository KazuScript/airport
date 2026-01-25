<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Home público (cliente)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return Inertia::render('Flights/Home');
})->name('home');

/*
|--------------------------------------------------------------------------
| Rutas públicas cliente
|--------------------------------------------------------------------------
*/
Route::get('/booking/{code}', function ($code) {
    return Inertia::render('Booking/Show', [
        'code' => $code,
    ]);
});

/*
|--------------------------------------------------------------------------
| Área privada - Administración
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return Inertia::render('dashboard');
    });

    Route::get('/flights', function () {
        return Inertia::render('Admin/Flights');
    });

    Route::get('/bookings', function () {
        return Inertia::render('Admin/Bookings');
    });
});

require __DIR__.'/settings.php';
