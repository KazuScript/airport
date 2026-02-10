import { useEffect, useState } from "react";
import axios from "axios";

export interface Flight {
  id: number;
  flight_number: string;
  departure_time: string;
  arrival_time: string;
  status: string;
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

export function useFlights(filters: any) {
  const [flights, setFlights] = useState<any[]>([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    // 🔥 NO buscar si no hay filtros
    if (!filters || Object.keys(filters).length === 0) return;

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
