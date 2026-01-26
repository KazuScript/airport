export default function FlightSearchForm() {
  return (
    <form className="flight-search">
      <input type="text" placeholder="Origen" />
      <input type="text" placeholder="Destino" />
      <input type="date" />
      <button type="submit">Buscar vuelos</button>
    </form>
  );
}
