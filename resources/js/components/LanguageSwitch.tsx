import { useLanguage } from "@/hooks/use-language";

export default function LanguageSwitch() {
  const { language, changeLanguage } = useLanguage();

  return (
    <div className="flex items-center gap-2 text-sm text-white bg-gray-900 p-2">
      <button
        onClick={() => changeLanguage("es")}
        className={language === "es" ? "font-bold underline" : "opacity-70"}
      >
        ES
      </button>

      <span className="opacity-50">|</span>

      <button
        onClick={() => changeLanguage("en")}
        className={language === "en" ? "font-bold underline" : "opacity-70"}
      >
        EN
      </button>
    </div>
  );
}
