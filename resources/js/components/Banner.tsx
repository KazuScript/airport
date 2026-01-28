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
      style={{
        backgroundImage: `url(${image})`,
        height,
      }}
    >
      <div>
        {title && <h1>{title}</h1>}
        {subtitle && <p>{subtitle}</p>}
        {children}
      </div>
    </section>
  );
}
