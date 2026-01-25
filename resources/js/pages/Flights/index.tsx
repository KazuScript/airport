import { useEffect, useState } from "react";
import axios from "axios";

interface Flight {
  id: number;
  flight_number: string;
  status: string;
  departure_time: string;
  arrival_time: string;
  airline: {
    name: string;
    code: string;
  };
  origin: {
    code: string;
    city: string;
  };
  destination: {
    code: string;
    city: string;
  };
}

export default function FlightsIndex() {
  const [flights, setFlights] = useState<Flight[]>([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    axios.get("/api/flights")
      .then(response => {
        setFlights(response.data.data ?? response.data);
      })
      .catch(error => {
        console.error("Error loading flights", error);
      })
      .finally(() => {
        setLoading(false);
      });
  }, []);

  if (loading) {
    return <div>Cargando vuelos...</div>;
  }

  return (
    <div>
      <h1>Vuelos disponibles</h1>

      {flights.length === 0 && (
        <p>No hay vuelos disponibles</p>
      )}

      <ul>
        {flights.map(flight => (
          <li key={flight.id}>
            <strong>{flight.flight_number}</strong> – {flight.airline.name}<br />
            {flight.origin.code} ({flight.origin.city}) →
            {flight.destination.code} ({flight.destination.city})<br />
            Salida: {flight.departure_time}<br />
            Estado: {flight.status}
          </li>
        ))}
      </ul>
    </div>
  );
}
