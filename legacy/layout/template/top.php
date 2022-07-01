<?php

/**
 * Horní část šablony poutníka
 *
 * @author Michael Dojčár <michaeldojcar@gmail.com>
 */

namespace Poutnik;

$template = $GLOBALS['template'];

$config = new Config();
$fb_display = $config->getProperty("template","fb_icon_display");

$layout_url = ROOT_URL . $config->getProperty("template","layout_path");

?>

<?php include ROOT . '/vendor/google/g_analytics.php' ?>

<div class="page-container">
    <div class="header-container">
        <div class="header-title noselect" id="nadpis">
            <h1><a>Železný poutník</a></h1>
            <p>1 noc - 2 poutní místa - 50km - postní pěší pouť</p>
        </div>

        <div class="header-navigation">

            <?php
            // výpočet rotdílu mezi časy
            $now = time();
            $poutnik = strtotime("2017-03-31");

            $datediff = $poutnik - $now;
            $pocet_dni = floor($datediff / (60 * 60 * 24));

            if ($pocet_dni > 4) {
                $dny_do_poutnika = "31. března 2017 - 18:00 (<b>za $pocet_dni dní</b>)";
            } elseif ($pocet_dni > 1) {
                $dny_do_poutnika = '31. března 2017 - 18:00 (<b>za ' . $pocet_dni . ' dny</b>)';
            } elseif ($pocet_dni == 1) {
                $dny_do_poutnika = '<b>zítra od 18:00</b>';
            } elseif ($pocet_dni == 0) {
                $dny_do_poutnika = '<b>dnes od 18:00</b>';
            } elseif ($pocet_dni < 0) {
                $dny_do_poutnika = '<b>postní doba 2018</b>';
            }

            ?>

            <div class="info">
                <div class="d-only">
                    <a>Svatý Kopeček - Svatý Hostýn - <?php echo $dny_do_poutnika; ?></a>
                </div>
                <div class="m-only">
                    <a>Svatý Kopeček - Svatý Hostýn</a>
                    <a style="display: inline-block; padding: 0px;"><?php echo $dny_do_poutnika; ?></a>
                </div>
            </div>
            <div class="menu">
                <a href=".">info k letošnímu ročníku</a>
                <a href="<?php echo ROOT_URL ?>/mapa.php">mapa trasy</a>
                <a href="<?php echo ROOT_URL ?>/kontakty.php">kontakt</a>
            </div>

        </div> <!-- header-navigation -->
    </div> <!-- header-container -->

