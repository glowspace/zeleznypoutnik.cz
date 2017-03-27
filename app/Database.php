<?php

namespace Poutnik;

/**
 * Jednoduchá třída pro práci s MySQL databází,
 * používá rozšíření MySQLi.
 *
 * Relace připojení je vytvořena společně s instancí třídy
 * podle přihlašovacích údajů z configu.
 *
 * @version 0.22
 */
class Database {

    /**
     * Autentifikační údaje z configu
     */
    private $host;
    private $user;
    private $password;
    private $database;

    /**
     * @var object $connection Relace připojení k databázi
     */
    public $connection;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this->connect();
    }

    /**
     * Vytvoření připojení k databázi pomocí údajů z atribut.
     *
     * Pokusí se připojit k mysql,
     * pokud je připojení úspěšné - uloží relaci připojení do $this->connection.
     *
     * @return bool TRUE při připojení k databázi
     */
    public function connect()
    {
        $config = new Config();

        // Výběr ini-sekce s údaji
        $this->loadCredentials($config->getProperty("database","use_database"));

        // Relace MySQLi pomocí načtených údajů
        $mysqli = new \mysqli($this->host, $this->user, $this->password, $this->database);

        // Chyba při selhání připojení
        if ($mysqli === false)
        {
            trigger_error("Chyba připojení k databázi MySQL. Byly zadány nesprávné přístupové údaje.");

            return false;
        }

        // Úspěšná relace se uloží do $this->connection
        else
        {
            $mysqli->set_charset("utf8");

            // Uloží relaci
            $this->connection = $mysqli;

            return true;
        }
    }

    /**
     * @return bool Pokud se připojení úspěšně ukončí, vrátí true.
     */
    public function close()
    {
        $this->connection->close;

        return true;
    }

    /**
     * Odeslání libovolného SQL dotazu.
     *
     * @param   string $query_content   SQL dotaz
     * @return  object MySQLi result object
     */
    public function query($query_content)
    {
        $query = $this->connection->query($query_content);

        if($this->connection->error)
        {
            trigger_error("Chyba SQL dotazu: " . $this->connection->error);
        }

        return $query;
    }

    /**
     * Vypíše výsledky SQL dotazu do pole (SELECT).
     *
     * @param  $query_content string SQL dotaz
     * @return null|array False při chybě / Assoc pole s nalezenými řádky
     */
    public function select($query_content)
    {
        $rows = array();
        $query = $this->query($query_content);

        if($query === FALSE)
        {
            return null;
        }

        while($row = $query->fetch_assoc())
        {
            // Přidání řádku do pole
            $rows[] = $row;
        }

        return $rows;
    }

    /**
     * Načte údaje z konfigurace do atribut instance.
     *
     * @param $config_section string Používaná sekce v configu
     */
    protected function loadCredentials($config_section)
    {
        $config = new Config();

        // Údaje k databázi
        $this->host = $config->getProperty($config_section,"host");
        $this->user = $config->getProperty($config_section,"user");
        $this->password = $config->getProperty($config_section,"password");
        $this->database = $config->getProperty($config_section,"name");
    }
}