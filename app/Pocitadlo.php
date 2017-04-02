<?php

namespace Poutnik;

/**
 * Class Pocitadlo
 */

class Pocitadlo
{

    public $date;

    /**
     * Pocitadlo constructor.
     * @param $datumPoutnika string Datum např. ve tvaru Y-m-d
     */
    public function __construct ($datumPoutnika)
    {
        $this->date = $datumPoutnika;
    }

    /**
     * @return string Slovní výstup počítadla
     */
    public function get()
    {
        // Výpočet rozdílu mezi časy
        $now = strtotime(date("Y-m-d"));
        $poutnik = strtotime($this->date);

        $datediff = $poutnik - $now;
        $pocet_dni = floor($datediff / (60 * 60 * 24));

        if ($pocet_dni > 4) {
            $dny_do_poutnika = "31. března 2017 - 18:00 (<b>za $pocet_dni dní</b>)";
        }
        elseif ($pocet_dni > 1) {
            $dny_do_poutnika = '31. března 2017 - 18:00 (<b>za ' . $pocet_dni . ' dny</b>)';
        }
        elseif ($pocet_dni == 1) {
            $dny_do_poutnika = '<b>zítra od 18:00</b>';
        }
        elseif ($pocet_dni == 0) {
            $dny_do_poutnika = '<b>dnes od 18:00</b>';
        }
        else {
            $dny_do_poutnika = '<b>postní doba 2018</b>';
        }

        return $dny_do_poutnika;
    }

}