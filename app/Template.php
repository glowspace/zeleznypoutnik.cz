<?php

namespace Poutnik;

/**
 * Třída pro práci s grafickými šablonami.
 *
 * @author Michael Dojčár <michael.dojcar@gmail.com>
 * @version 0.26
 */

class Template
{

    /**
     * @var $title string Zobrazovaný titulek
     */
    public $title;

    /**
     * @var $pageName string Název stránky - načítá se z configu
     */
    public $pageName;

    /**+
     * @var $path string Cesta k adresáři s šablonami
     */
    public $path;

    /**
     * Template constructor.
     */
    function __construct()
    {
        $config = new Config();

        $this->pageName = $config->getProperty("template","pg_name");
        $this->path = ROOT . $config->getProperty("template","path");
    }

    /**
     * Importuje do stránky určitý soubor z adresáře se šablonami.
     * Pokud soubor neexistuje, vyhodí exception.
     *
     * @param $templateName string Název souboru s šablonou, který se má importovat
     *
     * @return bool True pokud je import úspěšný
     * @throws \Exception
     */
    public function render($templateName)
    {
        // Kompletní cesta k šabloně
        $template_path = $this->path . '/' . $templateName;

        // Ověření, jestli soubor existuje
        $check = file_exists($template_path);

        if ($check == true)
        {
            require($this->path . '/' . $templateName);

            return true;
        }
        // Pokud ne..
        else
        {
            throw new \Exception('Neplatný název souboru šablony!');
        }
    }

    /**
     * Vrátí titulek nastavený před renderem šablony do atributu $this->title.
     *
     * @return string Vrátí nastavený titulek
     */
    public function getTitle()
    {
        // Zobrazení titulku
        if (isset($this->title))
        {
            $title = $this->title . ' - ' . $this->pageName;

            return $title;
        }
        else
        {
            $title = $this->pageName;

            return $title;
        }
    }

    public function getTitleAdmin()
    {
        // Zobrazení titulku
        if (isset($this->title))
        {
            $title = $this->title . ' - Administrace';

            return $title;
        }
        else
        {
            $title = 'Administrace Železného poutníka';

            return $title;
        }
    }

    /**
     * Vrátí název stránky z konfigurace.
     *
     * @return string Vrátí nastavený název stránky
     */
    public function getPageName()
    {
        $config = new Config();

        $page_name = $config->getProperty("template","pg_name");

        if(!empty($page_name))
        {
            return $page_name;
        }
        else
        {
            return "[pageName]";
        }
    }
}