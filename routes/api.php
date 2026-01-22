<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FlightController;

Route::prefix('flights')->group(function () {
    Route::get('/', [FlightController::class, 'index']);
    Route::get('/search', [FlightController::class, 'search']);
    Route::get('/{flight}', [FlightController::class, 'show']);
});
