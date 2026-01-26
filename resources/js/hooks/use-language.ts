import { useState, useEffect } from 'react';
import { es } from '@/i18n/es';
import { en } from '@/i18n/en';

const languages = {
  es,
  en,
};

type Language = 'es' | 'en';

export function useLanguage() {
  const [lang, setLang] = useState<Language>('es');

  useEffect(() => {
    const browserLang = navigator.language.startsWith('en') ? 'en' : 'es';
    setLang(browserLang);
  }, []);

  const t = languages[lang];

  return {
    lang,
    setLang,
    t,
  };
}
