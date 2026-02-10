import { Flight } from "@/hooks/use-flights";
import dayjs from "dayjs";
import { FLIGHT_STATUS } from "@/lib/flightStatus";


interface Props {
  flights: Flight[];
  loading: boolean;
  type?: "departures" | "arrivals";
}

export default function FlightTable({
  flights,
  loading,
  type = "departures",
}: Props) {
  if (loading) {
    return <p className="table-loading">Cargando vuelos...</p>;
  }

  if (!flights.length) {
    return <p className="table-empty">No hay vuelos para mostrar</p>;
  }

  return (
    <table className="flight-table">
      <thead>
        <tr>
          <th>Hora</th>
          <th>Destino</th>
          <th>Aerolínea</th>
          <th>Vuelo</th>
          <th>Estado</th>
          <th>Puerta</th>
        </tr>
      </thead>

      <tbody>
        {flights.map((f) => {
          const status = FLIGHT_STATUS[f.status] ?? {
            label: f.status,
            color: "gray",
          };

          return (
            <tr key={f.id}>
              <td>
                {dayjs(
                  type === "arrivals" ? f.arrival_time : f.departure_time
                ).format("HH:mm")}
              </td>

              <td>
                {type === "arrivals"
                  ? f.origin.city
                  : f.destination.city}
              </td>

              <td className="airline">
                <strong>
                  {f.airline.code ?? f.flight_number.slice(0, 2)}
                </strong>
                <span>{f.airline.name}</span>
              </td>

              <td>{f.flight_number}</td>

              <td className={`status status-${status.color}`}>
                {status.label}
              </td>

              <td>{f.gate ?? "--"}</td>
            </tr>
          );
        })}
      </tbody>
    </table>
  );
}
