import { useEffect, useState } from "react";
import { translations, Language } from "@/i18n";

const getBrowserLanguage = (): Language => {
  if (typeof navigator === "undefined") return "es";
  return navigator.language.startsWith("es") ? "es" : "en";
};

export function useLanguage() {
  const [language, setLanguage] = useState<Language>("es");

  useEffect(() => {
    const stored = localStorage.getItem("language") as Language | null;
    setLanguage(stored ?? getBrowserLanguage());
  }, []);

  const changeLanguage = (lang: Language) => {
    setLanguage(lang);
    localStorage.setItem("language", lang);
  };

  const t = (path: string) => {
    return path
      .split(".")
      .reduce<any>((obj, key) => obj?.[key], translations[language]) ?? path;
  };

  return { language, changeLanguage, t };
}
