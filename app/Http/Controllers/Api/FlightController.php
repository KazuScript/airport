<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FlightSearchRequest;
use App\Http\Resources\FlightResource;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        return Flight::with(['airline', 'origin', 'destination'])->get();
    }

    public function show(Flight $flight)
    {
        return $flight->load(['airline', 'origin', 'destination']);
    }

    public function search(FlightSearchRequest $request)
    {
        $query = Flight::with(['airline', 'origin', 'destination']);

        if ($request->filled('origin')) {
            $query->whereHas('origin', function ($q) use ($request) {
                $q->where('code', $request->origin);
            });
        }

        if ($request->filled('destination')) {
            $query->whereHas('destination', function ($q) use ($request) {
                $q->where('code', $request->destination);
            });
        }

        if ($request->filled('date')) {
            $query->whereDate('departure_time', $request->date);
        }

        return FlightResource::collection(
            $query->get()
        );

        $flights = $query->paginate(10);

        return FlightResource::collection($flights);
    }
}
