import ServiceCard from "./ServiceCard";

type Service = {
  name: string;
  description?: string;
  icon?: React.ReactNode;
  onClick?: () => void;
};

interface Props {
  title: string;
  services: Service[];
}

export default function ServiceGrid({ title, services }: Props) {
  return (
    <section className="service-grid">
      <h2>{title}</h2>

      <div className="service-grid-content">
        {services.map((service) => (
          <ServiceCard
            key={service.name}
            name={service.name}
            description={service.description}
            icon={service.icon}
            onClick={service.onClick}
          />
        ))}
      </div>
    </section>
  );
}
