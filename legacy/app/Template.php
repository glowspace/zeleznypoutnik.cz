<?php

namespace Poutnik;

/**
 * Třída pro práci s grafickými šablonami.
 *
 * @author Michael Dojčár <michael.dojcar@gmail.com>
 * @version 0.31
 */

class Template
{

    /**
     * @var $templatePath string Cesta, která bude použita pro import šablon
     */
    protected $templatePath;

    /**
     * @var $pageTitle string Titulek pro metodu $this->getTitle()
     */
    protected $pageTitle;

    /**
     * @var $pageName string Název stránky pro její identifikaci
     */
    protected $pageName;


    /**
     * Template constructor.
     */
    function __construct()
    {
        $config = new Config();

        // Určí defaultní cestu k adresáři s šablonami
        $this->setTemplatePath($config->getProperty("template","path"));
    }

    /**
     * Uloží cestu k adresáři s šablonami do atributu.
     *
     * @param $template_path string Relativní cesta k adresáři s šablonami
     */
    function setTemplatePath($template_path)
    {
        $this->templatePath = ROOT . $template_path;
    }

    /**
     * Importuje šablonu z defaultního adresáře.
     *
     * @param $template_file_name string Název souboru s šablonou, který se má importován
     * @return bool
     */
    public function render($template_file_name)
    {
        $render = $this->renderFile($this->templatePath . "/" . $template_file_name);

        if($render)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Importuje šablonu z určeného adresáře.
     *
     * @param $file_path string Absolutní cesta k souboru
     *
     * @return bool
     */
    private function renderFile($file_path)
    {
        // Ověření, zda soubor existuje
        $check = file_exists($file_path);

        if ($check == true)
        {
            include $file_path;

            return true;
        }
        // Pokude neexistuje, upozorní
        else
        {
            trigger_error("Neplatný název souboru šablony! ($file_path)");

            return false;
        }
    }

    /**
     * Nastaví titulek pro metodu getTitle().
     *
     * @param $title string Konkrétní titulek stránky
     * @return bool
     */
    public function setTitle($title)
    {
        if(isset($title))
        {
            $this->pageTitle = $title;

            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Vrátí titulek stránky.
     * Pokud byl nastaven konkr. titulek pomocí metody setTitle(),
     * vrátí vypsaný konkrétní titulek.
     *
     * @return string Vrátí nastavený titulek
     */
    public function getTitle()
    {
        // Zobrazení titulku
        if (isset($this->pageTitle))
        {
            $title = $this->pageTitle . ' - ' . $this->getSiteName();

            return $title;
        }
        else
        {
            $title = $this->getSiteName();

            return $title;
        }
    }

    /**
     * Nastaví název stránky pro její identifikaci
     *
     * @param $name string Název stránky
     * @return bool
     */
    public function setPageName($name)
    {
        if(isset($name))
        {
            $this->pageName = $name;

            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Vrátí název stránky pro její identifikaci.
     *
     * @return string Vrátí nastavený titulek
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * Vrátí název stránky z konfigurace.
     *
     * @return string Název stránky
     */
    public function getSiteName()
    {
        $config = new Config();

        $page_name = $config->getProperty("template","pg_name");

        return $page_name;
    }
}