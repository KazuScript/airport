import Footer from '@/components/Footer';
import { useLanguage } from '@/hooks/use-language';
import { PropsWithChildren } from 'react';
import "../../css/app.css";
import NavigationBar from '@/components/NavigationBar';
import LanguageSwitch from '@/components/LanguageSwitch';

export default function MainLayout({ children }: PropsWithChildren) {
  /* const { t } = useLanguage(); */

  return (
    <>
      <LanguageSwitch />
      <div className="app-layout">
        
        <main className="app-content">
          <NavigationBar />

          {children}
        </main>

        <Footer />
      </div>
    </>
  );
}
