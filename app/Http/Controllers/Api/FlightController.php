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
        $query = Flight::with([
            'airline',
            'originAirport',
            'destinationAirport',
        ]);

        // 🔍 Número de vuelo
        if ($request->filled('flight_number')) {
            $query->where('flight_number', 'like', '%' . $request->flight_number . '%');
        }

        // 🌍 Aeropuerto de origen (por código)
        if ($request->filled('origin')) {
            $query->whereHas('originAirport', function ($q) use ($request) {
                $q->where('code', $request->origin);
            });
        }

        // 🌎 Aeropuerto de destino (por código)
        if ($request->filled('destination')) {
            $query->whereHas('destinationAirport', function ($q) use ($request) {
                $q->where('code', $request->destination);
            });
        }

        // 📅 Fecha de salida
        if ($request->filled('date')) {
            $query->whereDate('departure_time', $request->date);
        }

        $flights = $query->paginate(10);

        return FlightResource::collection($flights);
    }
}
