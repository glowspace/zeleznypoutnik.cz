<?php

namespace Poutnik;

/**
 * Třída pro práci s relací přihlášení.
 * Přihlášení se ukládá do sessions.
 *
 * @todo Zprovoznit
 *
 * @author Michael Dojčár <michael.dojcar@gmail.com>
 * @version 0.02
 */

class Login
{
    /**
     * @var boolean $logged Stav přihlášení. Pokud je TRUE, uživatel je přihlášen.
     */
    public $logged;

    /**
     * @var int|null $loggedId ID přihlášeného uživatele, pokud je přihlášen (jinak null)
     */
    public $loggedId;

    /**
     * @todo ?? zjistit typ
     *
     * @var string
     */
    public $error;

    // ID k přihlášení
    private $id;

    /**
     * @var string $tableName Název tabulky, která se má používat.
     */
    public $tableName;

    /**
     * @var object Objekt relace připojení k databázi
     */
    private $db;

    /**
     * Login constructor.
     */
    public function __construct()
    {
        // Připojení k databázi
        $this->db = new Database();

        // Nastavení výchozí tabulky
        $config = new Config();
        $this->tableName = $config->getProperty("tables","uzivatele");

        // Nastavení atributů logged, loggedId
        $this->loadSessions();
    }

    /**
     * Nastavení atributů logged, loggedId podle session.
     */
    public function loadSessions()
    {
        if(isset($_SESSION['logged_id']))
        {
            $this->logged = TRUE;
            $this->loggedId = $_SESSION['logged_id'];
        }
        else
        {
            $this->logged = FALSE;
            $this->loggedId = NULL;
        }
    }

    /**
     * Ověření správnosti přihlašovacích údajů
     *
     * v případě úspěchu uloží id k přihlášení do $this->id
     *
     * @param $login string Login účtu k ověření
     * @param $password string Heslo účtu k ověření
     *
     * @return boolean
     **/
    public function check($login,$password)
    {
        $hash = $this->hash($password);

        $query = $this->db->query("SELECT id, nick, email, heslo FROM $this->tableName WHERE (nick = '$login OR email = '$login') AND (heslo = '$hash' OR heslo = '')");

        $row = $query->fetch_array();

        if ($query->num_rows == 0)
        {
            return $row['id'];
        }

        else {
            return true;
        }

    }

    public function login()
    {
        // Ověření
        $correct = $this->check();

        if($correct == false)
        {
            $this->error = 'badlogin';
        }
        elseif($correct == true)
        {
            session_start();

            $_SESSION['logged_id'] = $this->id;
        }
    }

    public function logout()
    {
        session_start();

        unset($_SESSION['logged_id']);
    }

    public function hash($str)
    {
        $hash = md5(md5(md5(sha1($str))));

        return $hash;
    }

    // Vyžadování určité úrovně přístupu, jinak kickne na login
    public function level($requested_level)
    {
        if($requested_level == "user")
        {
            if($this->loggedLevel == "user" || $this->loggedLevel == "admin")
            {

            }
            else {
                $this->kick();
            }
        }

        elseif($requested_level == "admin")
        {
            if($this->loggedLevel != "admin")
            {
                echo "<script>
                  alert('Bohužel nemáte oprávnění zobrazit tuto stránku!');
                  window.location.href='" . ROOT_URL . "/index.php';
                  </script>";
            }
        }


    }

    public function kick()
    {
        header("location: " . ROOT_URL . "/login.php");
    }

}