<?php

namespace Poutnik;

/**
 * Třída pro práci s grafickými šablonami.
 *
 * @author Michael Dojčár <michael.dojcar@gmail.com>
 * @version 0.28
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
     * Načte šablonu z defaultního adresáře.
     *
     * @param $template_name string Název souboru s šablonou, který se má importován
     * @return string Obsah šablony
     */
    public function get($template_name)
    {
        $content = $this->getFromDir($this->path,$template_name);

        return $content;
    }

    /**
     * Importuje do stránky určitý soubor ze zadaného adresáře
     *
     * @param $template_path string
     * @param $template_name string
     *
     * @return string Obsah souboru se šablonou
     */
    protected function getFromDir($template_path, $template_name)
    {
        $file_path = $template_path . '/' . $template_name;

        // Ověření, jestli soubor existuje
        $check = file_exists($file_path);

        if ($check == true)
        {
            $template_content = readfile($file_path);

            return $template_content;
        }
        // Pokud ne..
        else
        {
            trigger_error("Neplatný název souboru šablony! ($file_path)");

            return null;
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