type Service = {
  name: string;
  icon?: string;
  href?: string;
};

interface Props {
  title: string;
  services: Service[];
}

export default function ServiceGrid({ title, services }: Props) {
  return (
    <section className="service-grid">
      <h2>{title}</h2>

      <div className="grid">
        {services.map((service) => (
          <div key={service.name} className="service-card">
            <span>{service.name}</span>
          </div>
        ))}
      </div>
    </section>
  );
}
