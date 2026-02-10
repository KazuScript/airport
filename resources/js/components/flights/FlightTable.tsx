import { Flight } from "@/hooks/use-flights";

interface Props {
  flights: Flight[];
  loading: boolean;
}

export default function FlightTable({ flights, loading }: Props) {
  if (loading) return <p>Cargando vuelos...</p>;
  if (!flights.length) return <p>No se encontraron vuelos</p>;

  return (
    <table className="flight-table">
      <thead>
        <tr>
          <th>Vuelo</th>
          <th>Aerolínea</th>
          <th>Origen</th>
          <th>Destino</th>
          <th>Salida</th>
          <th>Estado</th>
        </tr>
      </thead>

      <tbody>
        {flights.map((f) => (
          <tr key={f.id}>
            <td>{f.flight_number}</td>
            <td>{f.airline.name}</td>
            <td>{f.origin.city}</td>
            <td>{f.destination.city}</td>
            <td>{f.departure_time}</td>
            <td>{f.status}</td>
          </tr>
        ))}
      </tbody>
    </table>
  );
}
