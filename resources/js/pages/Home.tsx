
import FlightSearchForm from "@/components/FlightSearchForm";
import "../../css/app.css";
import MainLayout from "@/layouts/MainLayout";
import { Plane, Car, PawPrint } from "lucide-react";
import ServiceGrid from "@/components/Home/ServiceGrid";

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

  return (
    <section>
      <section className="search-section">
        <FlightSearchForm />
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