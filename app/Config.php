<?php

namespace Poutnik;

/**
 * Třída pro práci s konfiguračním souborem,
 * umístění konfigurace je uvedeno v constructoru.
 *
 * @author Michael Dojčár
 * @version 0.06
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
     */
    public function __construct()
    {
        $config_path = ROOT . '/config.ini';

        $this->configArray = $this->load($config_path);
    }

    /**
     * Načte ini soubor do pole
     *
     * @return array Pole s hodnotami configu
     * @param $path string Cesta k souboru
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
        }
    }

    /**
     * Zjištění hodnoty určité vlastnosti v configu
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
            trigger_error("Chybná hodnota konfigurace.");
        }
    }

}