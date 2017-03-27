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
 * @version 0.2
 */

class Page
{

    /**
     * @var $db object Objekt připojení do db
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
        $config = new Config();

        // Jméno tabulky která se bude používat
        $this->tableName = $config->getProperty("tables","stranky");
    }

    public function create()
    {

    }

    /**
     * @param $id
     * @return mixed
     */
    public function getPageName($id)
    {
        $query = $this->db->query("SELECT * FROM $this->tableName WHERE id = $id");

        return $query;
    }

    /**
     * Vytvoří tabulku, pokud ještě není vytvořená.
     */
    public function init()
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

