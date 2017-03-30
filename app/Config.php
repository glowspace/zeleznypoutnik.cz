<?php

namespace Poutnik;

/**
 * Třída pro práci s INI konfiguračním souborem,
 * umístění konfigurace je uvedeno v constructoru.
 *
 * @author Michael Dojčár
 * @version 0.10
 */

class Config
{

    /**
     * @var array Pole pro data z configu
     */
    public $configArray;

    /**
     * Config constructor.
     *
     * 1) určuje cestu do configu
     * 2) načte config do pole $this->config
     *
     * @param $config_path string Cesta k souboru
     *
     */
    public function __construct($config_path)
    {
        $this->configArray = $this->load($config_path);
    }

    /**
     * Načte ini soubor do pole.

     * @param $path string Cesta k souboru
     * @return mixed Pole s hodnotami configu
     */
    protected function load($path)
    {
        $check = file_exists($path);

        if ($check == true)
        {
            $config_arr = parse_ini_file($path, true);

            return $config_arr;
        }
        else
        {
            trigger_error("Config nebyl načten!");

            return null;
        }
    }

    /**
     * Zjištění hodnoty určité vlastnosti v configu.
     *
     * @param $sectionName string Výběr ini sekce v configu
     * @param $optionName string Název konkrétní vlastnosti v configu
     *
     * @return string Vrátí aktuální hodnotu zadané vlastnosti v configu
     */
    public function getProperty($sectionName,$optionName)
    {
        $value = $this->configArray[$sectionName][$optionName];

        if(isset($value))
        {
            return $value;
        }
        else
        {
            trigger_error("Volaná hodnota konfigurace neexistuje.");

            return null;
        }
    }

}