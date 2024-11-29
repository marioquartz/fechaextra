<?php

namespace systembasic\Fecha;

class DateTimeExtra extends \DateTime
{
    public function getYear(): int
    {
        return (int)$this->format("Y");
    }

    public function getMonthNumber(): int
    {
        return (int)$this->format("n");
    }

    public function getMonthName(string $l = "es"): string
    {
        switch ($l) {
            case "en":
                return $this->format("F");
            case "es":
                switch ($this->getMonthNumber()) {
                    case 1:
                        return "Enero";
                    case 2:
                        return "Febrero";
                    case 3:
                        return "Marzo";
                    case 4:
                        return "Abril";
                    case 5:
                        return "Mayo";
                    case 6:
                        return "Junio";
                    case 7:
                        return "Julio";
                    case 8:
                        return "Agosto";
                    case 9:
                        return "Septiembre";
                    case 10:
                        return "Octubre";
                    case 11:
                        return "Noviembre";
                    case 12:
                        return "Diciembre";
                }
        }
        return "";
    }

    public function getMonthDays(): int
    {
        return (int)$this->format("t");
    }

    public function getDayNumber(): int
    {
        return (int)$this->format("j");
    }

    public function getDayOfTheYear(): int
    {
        return (int)$this->format("z");
    }

    public function getDayOfTheWeekNumber(string $l = "es"): int
    {
        switch ($l) {
            case "es":
                switch ((int)$this->format("w")) {
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                        return (int)$this->format("w")+1;
                    case 0:
                        return 7;
                }
                break;
            default:
                return (int)$this->format("w");
        }
        return 0;
    }

    public function getDayOfTheWeekName($l = "es"): string
    {
        switch ($l) {
            case "es":
                switch ($this->getDayOfTheWeekNumber()) {
                    case 1:
                        return "Lunes";
                    case 2:
                        return "Martes";
                    case 3:
                        return "Miercoles";
                    case 4:
                        return "Jueves";
                    case 5:
                        return "Viernes";
                    case 6:
                        return "Sábado";
                    case 7:
                        return "Domingo";
                }
                break;
            case "en":
                return $this->format("l");
        }
        return "";
    }

    public function getHour(): int
    {
        return (int)$this->format("G");
    }

    public function getMinutes(): int
    {
        return (int)$this->format("i");
    }
}