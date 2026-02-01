interface ServiceCardProps {
  name: string;
  description?: string;
  icon?: React.ReactNode;
  onClick?: () => void;
}

export default function ServiceCard({
  name,
  description,
  icon,
  onClick,
}: ServiceCardProps) {
  return (
    <button
      className="service-card"
      onClick={onClick}
      type="button"
    >
      {icon && <div className="service-icon">{icon}</div>}

      <div className="service-content">
        <h3>{name}</h3>
        {description && <p>{description}</p>}
      </div>
    </button>
  );
}
