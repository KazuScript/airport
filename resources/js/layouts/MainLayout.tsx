import Footer from '@/components/Footer';
import Loader from '@/components/Loader';
import Navbar from '@/components/Navbar';
import { useLanguage } from '@/hooks/use-language';
import { PropsWithChildren } from 'react';

export default function MainLayout({ children }: PropsWithChildren) {
  /* const { t } = useLanguage(); */

  return (
    <>
      <div className="app-layout">
        <Navbar />

        <main className="app-content">
          {children}
        </main>

        <Footer />
      </div>
    </>
  );
}
