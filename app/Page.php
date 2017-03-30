<?php

namespace Poutnik;

/**
 * Práce se stránkami v databázi.
 *
 * Zobrazení článku, editace
 *
 * @todo Dodělat
 *
 * @author Michael Dojčár <michaeldojcar@gmail.com>
 * @version 0.21
 */

class Page
{

    /**e
     * @var $db object Připojení k databázi.
     *
     * Sem se inicializuje objekt třídy database.
     */
    public $db;

    /**
     * @var string $tableName Název tabulky, která se má používat.
     */
    public $tableName;

    /**
     * Page constructor.
     */
    public function __construct()
    {
        // Připojení k db
        $this->db = new Database();

        // Config
        $config = new Config(ROOT . "/config.ini");

        // Nastavení používané tabulky
        $this->tableName = $config->getProperty("tables","stranky");
    }

    /**
     * Vytvoří v databázi záznam s novou stránkou.
     *
     * @param $page_title string
     * @param $page_content string
     */
    public function create($page_title,$page_content)
    {
        $this->db->query("INSERT INTO $this->tableName (page_title,page_content) VALUES ('$page_title','$page_content')");
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getPageName($id)
    {
        $query = $this->db->query("SELECT * FROM $this->tableName WHERE page_id = '$id'");

        return $query;
    }

    /**
     * @param $id int ID stránky
     *
     * @todo
     */
    public function setPageName($id)
    {
       # $query = $this->db->query("UPDATE $this->tableName ");
    }

    /**
     * @param $id int ID stránky
     * @return mixed
     */
    public function getPageContent($id)
    {
        $query = $this->db->query("SELECT * FROM $this->tableName WHERE id = $id");

        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * @param $id int ID stránky
     */
    public function setPageContent($id)
    {

    }

    /**
     * Vytvoří tabulku v databázi, pokud ještě není vytvořená.
     */
    public function initTable()
    {
        $query = $this->db->query("SHOW TABLES LIKE '$this->tableName'");

        if ($query->num_rows == 1)
        {
            trigger_error("Tabulka už byla vytvořená.");
        }
        else
        {
            $this->db->query("CREATE TABLE $this->tableName (page_id int, page_title varchar(50), page_content text,  PRIMARY KEY (page_id));");
            $this->db->query("INSERT INTO $this->tableName (page_id, page_title, page_content) VALUES ('1','Test','Test')");

            echo time() . "Úspěch. Tabulka $this->tableName byla vytvořena.";
        }
    }

}

