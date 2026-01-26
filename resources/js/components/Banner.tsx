type BannerProps = {
  image: string;
  title?: string;
  subtitle?: string;
  height?: string;
  children?: React.ReactNode;
};

export default function Banner({
  image,
  title,
  subtitle,
  height = '60vh',
  children,
}: BannerProps) {
  return (
    <section
      className="banner"
      style={{
        backgroundImage: `url(${image})`,
        height,
      }}
    >
      <div className="banner-overlay">
        {title && <h1>{title}</h1>}
        {subtitle && <p>{subtitle}</p>}
        {children}
      </div>
    </section>
  );
}
