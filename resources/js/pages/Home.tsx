import "../../css/app.css";
import MainLayout from "@/layouts/MainLayout";
import { Plane, Car, PawPrint } from "lucide-react";
import ServiceGrid from "@/components/Home/ServiceGrid";
import { useState } from "react";
import { useFlights } from "@/hooks/use-flights";
import FlightTable from "@/components/flights/FlightTable";
import FlightSearchForm from "@/components/flights/FlightSearchForm";

const passengerServices = [
  {
    name: "Vuelos y Aerolíneas",
    description: "Consulta vuelos y aerolíneas",
    icon: <Plane size={32} />,
  },
  {
    name: "Estacionamiento",
    description: "Tarifas y disponibilidad",
    icon: <Car size={32} />,
  },
  {
    name: "Traslado de mascotas",
    description: "Requisitos y asistencia",
    icon: <PawPrint size={32} />,
  },
];

const Home = () => {

  const [filters, setFilters] = useState({});
  const { flights, loading } = useFlights(filters);

  return (
    <section>
      <section className="search-section">
        <FlightSearchForm onSearch={setFilters} />
        <FlightTable
          flights={flights}
          loading={loading}
          type="departures"
        />
      </section>
      <section>
        <ServiceGrid
          title="Servicios para pasajeros"
          services={passengerServices}
        />
      </section>

    </section>
  );
}

Home.layout = (page: React.ReactNode) => <MainLayout children={page} />;
export default Home;