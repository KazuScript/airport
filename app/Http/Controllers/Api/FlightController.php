<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FlightSearchRequest;
use App\Http\Resources\FlightResource;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Listar vuelos
     */
    public function index()
    {
        $flights = Flight::with([
            'airline',
            'originAirport',
            'destinationAirport',
        ])->paginate(10);

        return FlightResource::collection($flights);
    }

    /**
     * Mostrar un vuelo específico
     */
    public function show(Flight $flight)
    {
        $flight->load([
            'airline',
            'originAirport',
            'destinationAirport',
        ]);

        return new FlightResource($flight);
    }

    /**
     * Buscar vuelos con filtros
     */

    public function search(FlightSearchRequest $request)
    {
        $flights = Flight::with([
            'airline',
            'originAirport',
            'destinationAirport',
        ])
            ->whereBetween('departure_time', [
                now()->subHours(3),
                now()->addHours(12),
            ])
            ->orderBy('departure_time')
            ->paginate(10);

        return FlightResource::collection($flights);
    }
}
