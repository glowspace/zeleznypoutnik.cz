<?php

/**
 * Autoload knihovna pro web poutníka - importuje se do každé stránky
 *
 * @author Michael Dojčár <michael.dojcar@gmail.com>;
 **/

namespace Poutnik;

// Kódování
header("Content-Type: text/html; charset=utf-8");

// Cesty
define('ROOT', dirname(__FILE__));
define('CLASS_PATH', ROOT . '/app');

// Načtení tříd
require CLASS_PATH . '/Config.php';
require CLASS_PATH . '/Database.php';
require CLASS_PATH . '/Page.php';
require CLASS_PATH . '/Template.php';
require CLASS_PATH . '/User.php';

$config = new Config();

// URL webu
define('ROOT_URL', 'http://' . htmlspecialchars($_SERVER['HTTP_HOST']) . $config->getProperty("web","server_url_subdir"));

$db_test = new Database();
$db_test->connect();









/*// Účty a přihlášení
require ROOT . '/login/login.class.php';
require ROOT . '/login/session.check.php';

$login = new Login();

// Objekt aktuálně přihlášeného uživatele
if($login->logged == true)
{
    $tu = new user();
    $tu->getData($login->loggedId);
}
else {
    $tu = null;
}*/

//foreach (glob(ROOT . "/app/*.php") as $filename)
//{
//    include $filename;
//}