import { useState } from "react";

interface FlightSearchFormProps {
  onSearch: (filters: {
    flight_number?: string;
    origin?: string;
    destination?: string;
    date?: string;
  }) => void;
}

export default function FlightSearchForm({ onSearch }: FlightSearchFormProps) {
  const [filters, setFilters] = useState({
    flight_number: "",
    origin: "",
    destination: "",
    date: "",
  });

  function handleChange(e: React.ChangeEvent<HTMLInputElement>) {
    setFilters({
      ...filters,
      [e.target.name]: e.target.value,
    });
  }

  function submit(e: React.FormEvent) {
    e.preventDefault();
    onSearch(filters);
  }

  return (
    <form onSubmit={submit}>
      <input name="flight_number" onChange={handleChange} />
      <input name="origin" onChange={handleChange} />
      <input name="destination" onChange={handleChange} />
      <input type="date" name="date" onChange={handleChange} />
      <button type="submit">Buscar</button>
    </form>
  );
}
