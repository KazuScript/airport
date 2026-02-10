export const FLIGHT_STATUS: Record<
  string,
  { label: string; color: string }
> = {
  scheduled: {
    label: "Programado",
    color: "blue",
  },
  boarding: {
    label: "Embarcando",
    color: "orange",
  },
  departed: {
    label: "Despegó",
    color: "green",
  },
  delayed: {
    label: "Retrasado",
    color: "red",
  },
  cancelled: {
    label: "Cancelado",
    color: "gray",
  },
};
