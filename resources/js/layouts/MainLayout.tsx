import Footer from '@/components/Footer';
import { PropsWithChildren, useEffect, useState } from 'react';
import "../../css/app.css";
import NavigationBar from '@/components/NavigationBar';
import LanguageSwitch from '@/components/LanguageSwitch';
import Loader from '@/components/Loader';

export default function MainLayout({ children }: PropsWithChildren) {
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
    <>
      <LanguageSwitch />
      <div className="app-layout">
        <header className="relative z-[100]">
          <NavigationBar />
        </header>
        <main className="app-content">
          {children}
        </main>
        <Footer />
      </div>
    </>
  );
}
