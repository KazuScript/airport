import { Flight } from "@/hooks/use-flights";
import dayjs from "dayjs";
import { FLIGHT_STATUS } from "@/lib/flightStatus";


interface Props {
  flights: Flight[];
  loading: boolean;
  type?: "departures" | "arrivals";
}

export default function FlightTable({ flights, loading, type = "departures" }: Props) {
  if (loading) {
    return (
      <div className="flex justify-center p-10">
        <div className="animate-spin rounded-full h-10 w-10 border-b-2 border-[#052F4A]"></div>
      </div>
    );
  }

  if (!flights.length) {
    return (
      <div className="text-center p-10 bg-gray-50 rounded-xl border-2 border-dashed">
        <p className="text-gray-500 font-medium">No hay vuelos programados para mostrar</p>
      </div>
    );
  }

  return (
    <div className="overflow-hidden rounded-xl border border-gray-200 shadow-sm">
      <table className="w-full text-left border-collapse bg-white">
        <thead>
          <tr className="bg-[#052F4A] text-white">
            <th className="px-6 py-4 text-sm font-semibold uppercase tracking-wider">Hora</th>
            <th className="px-6 py-4 text-sm font-semibold uppercase tracking-wider">
              {type === "arrivals" ? "Origen" : "Destino"}
            </th>
            <th className="px-6 py-4 text-sm font-semibold uppercase tracking-wider">Aerolínea</th>
            <th className="px-6 py-4 text-sm font-semibold uppercase tracking-wider text-center">Vuelo</th>
            <th className="px-6 py-4 text-sm font-semibold uppercase tracking-wider">Estado</th>
            <th className="px-6 py-4 text-sm font-semibold uppercase tracking-wider text-center">Puerta</th>
          </tr>
        </thead>

        <tbody className="divide-y divide-gray-100">
          {flights.map((f) => {
            const status = FLIGHT_STATUS[f.status] ?? { label: f.status, color: "gray" };

            return (
              <tr key={f.id} className="hover:bg-blue-50/50 transition-colors group">
                {/* Hora con fuente tipo mono para mejor lectura */}
                <td className="px-6 py-4 font-mono font-bold text-[#052F4A] text-lg">
                  {dayjs(type === "arrivals" ? f.arrival_time : f.departure_time).format("HH:mm")}
                </td>

                {/* Ciudad en Negrita */}
                <td className="px-6 py-4">
                  <span className="text-gray-900 font-bold uppercase text-base">
                    {type === "arrivals" ? f.origin.city : f.destination.city}
                  </span>
                </td>

                {/* Aerolínea con logo simulado o código */}
                <td className="px-6 py-4">
                  <div className="flex items-center gap-3">
                    <span className="flex h-8 w-8 items-center justify-center rounded bg-gray-100 text-xs font-bold text-[#052F4A] group-hover:bg-white transition-colors border">
                      {f.airline.code ?? f.flight_number.slice(0, 2)}
                    </span>
                    <span className="text-gray-600 text-sm">{f.airline.name}</span>
                  </div>
                </td>

                {/* Número de Vuelo */}
                <td className="px-6 py-4 text-center font-medium text-gray-700">
                  {f.flight_number}
                </td>

                {/* Badge de Estado Dinámico */}
                <td className="px-6 py-4">
                  <span 
                    className={`inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide border
                      ${status.color === 'green' ? 'bg-green-50 text-green-700 border-green-200' : 
                        status.color === 'red' ? 'bg-red-50 text-red-700 border-red-200' : 
                        status.color === 'yellow' ? 'bg-yellow-50 text-yellow-700 border-yellow-200' : 
                        'bg-gray-50 text-gray-600 border-gray-200'}`}
                  >
                    <span className={`mr-1.5 h-2 w-2 rounded-full animate-pulse
                      ${status.color === 'green' ? 'bg-green-500' : 
                        status.color === 'red' ? 'bg-red-500' : 
                        status.color === 'yellow' ? 'bg-yellow-500' : 
                        'bg-gray-400'}`} 
                    />
                    {status.label}
                  </span>
                </td>

                {/* Puerta con estilo de pantalla de aeropuerto */}
                <td className="px-6 py-4 text-center">
                  <span className="inline-block bg-gray-900 text-yellow-400 font-mono px-2 py-1 rounded text-sm border-b-2 border-yellow-600">
                    {f.gate ?? "--"}
                  </span>
                </td>
              </tr>
            );
          })}
        </tbody>
      </table>
    </div>
  );
}