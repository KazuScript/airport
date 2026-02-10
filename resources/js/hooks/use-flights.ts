import { useEffect, useState } from "react";
import axios from "axios";

export interface Flight {
  id: number;
  flight_number: string;

  airline: {
    id: number;
    name: string;
    code: string;
  };

  origin: {
    code: string;
    name: string;
    city: string;
  };

  destination: {
    code: string;
    name: string;
    city: string;
  };

  departure_time: string;
  arrival_time: string;

  status: string;
  gate?: string | null;
}

export function useFlights(filters: any) {
  const [flights, setFlights] = useState<Flight[]>([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    setLoading(true);
    setError(null);

    axios
      .get("/api/flights/search", { params: filters })
      .then((res) => {
        setFlights(res.data?.data ?? []);
      })
      .catch(() => {
        setError("Error al cargar vuelos");
      })
      .finally(() => setLoading(false));
  }, [filters]);

  return { flights, loading, error };
}

