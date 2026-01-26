
import Banner from "@/components/Banner";
import FlightSearchForm from "@/components/FlightSearchForm";
import { useLanguage } from "@/hooks/use-language";
import MainLayout from "@/layouts/MainLayout";
import Loader from "@/components/Loader";
import { useEffect, useState } from "react";

export default function Home() {
  const { t } = useLanguage();
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const timeout = setTimeout(() => {
      setLoading(false);
    }, 1500);

    return () => clearTimeout(timeout);
  }, []);

  if (loading) {
    return <Loader />;
  }


  return (
    <MainLayout>
      <section>
        <Banner
          image="/images/home-banner02.jpg"
          title="Busca tu próximo vuelo"
          subtitle="Explora destinos"
        >
          <section className="search-section">
            <FlightSearchForm />
            <h3>panel de estado del vuelo</h3>
          </section>
        </Banner>
      </section>
      <section>
        <h3>estacionamientos</h3>
      </section>
      <section>
        transporte Oficiales
      </section>
      <section>
        tiendas y restaurantes
      </section>
      <section>
        servicios
      </section>


    </MainLayout>
  );
}
