<?php

/**
 * Autoload knihovna pro web poutníka - importuje se do každé stránky
 */

namespace Poutnik;

/**
 * Nastavení kódování
 */
header("Content-Type: text/html; charset=utf-8");

/**
 * Cesta do rootu
 */
define('ROOT', dirname(__FILE__));

/**
 * Načtení všech tříd
 */
foreach (glob(ROOT . "/app/*.php") as $filename)
{
    include $filename;
}

$config = new Config(ROOT . "/config.ini");

/**
 * Další cesty v adresáři
 */

// Administrace
define('CLASS_PATH', ROOT . '/admin');

/**
 * URL adresy
 */

// Root webu
define('ROOT_URL', 'http://' . htmlspecialchars($_SERVER['HTTP_HOST']) . $config->getProperty("web","server_url_subdir"));

// Root webu bez protokolu
define('ROOT_URL_SHORT', htmlspecialchars($_SERVER['HTTP_HOST']) . $config->getProperty("web","server_url_subdir"));

// Administrace
define('ADMIN_URL', ROOT_URL . "/admin");


