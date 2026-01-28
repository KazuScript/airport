
import FlightSearchForm from "@/components/FlightSearchForm";
import { useLanguage } from "@/hooks/use-language";
import Loader from "@/components/Loader";
import { useEffect, useState } from "react";
import "../../css/app.css";
import MainLayout from "@/layouts/MainLayout";

const Home = () => {

  return (
      <section>
        <section className="search-section">
          <FlightSearchForm />
          <h3>panel de estado del vuelo</h3>
        </section>
      </section>
  );
}

Home.layout = (page: React.ReactNode) => <MainLayout children={page} />;
export default Home;