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

$pocitadlo = new Pocitadlo("2017-03-31");

?>
<!doctype html>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>

    <meta name="theme-color" content="#deecf7">

    <!-- favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo LAYOUT_URL ?>/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo LAYOUT_URL ?>/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo LAYOUT_URL ?>/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo LAYOUT_URL ?>/img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo LAYOUT_URL ?>/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo LAYOUT_URL ?>/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo LAYOUT_URL ?>/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo LAYOUT_URL ?>/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php echo LAYOUT_URL ?>/img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php echo LAYOUT_URL ?>/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php echo LAYOUT_URL ?>/img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo LAYOUT_URL ?>/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php echo LAYOUT_URL ?>/img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="<?php echo $template->getPageName() ?>"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

    <title><?php echo $template->getTitle() ?></title>

    <meta name="Author" content="Michael Dojčár">
    <meta name="Description" content="Srdečně Vás zveme na Železného poutníka - postní pěší pouť ze Svatého Kopečka na Svatý Hostýn. 50 km za jednu noc.">
    <meta name="Keywords" content="pouť železný poutník 2017 pěší postní ">

    <link rel="stylesheet" href="<?php echo LAYOUT_URL ?>/css/theme.css">
    <link href="https://fonts.googleapis.com/css?family=Gentium+Basic|Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo ROOT_URL ?>/vendor/parallax.js-1.4.2/parallax.js"></script>
</head>

<body>
<?php include ROOT . '/vendor/google/g_analytics.php' ?>

<div class="page-container">
    <div class="header-container">
        <div class="header-title noselect" id="nadpis">
            <h1><a>Železný poutník</a></h1>
            <p>1 noc - 2 poutní místa - 50km - postní pěší pouť</p>
        </div>

        <div class="header-menu">
            <div class="info">
                <div class="d-only">
                    <p>Svatý Kopeček - Svatý Hostýn - <?php echo $pocitadlo->get(); ?></p>
                </div>
                <div class="m-only">
                    <p>Svatý Kopeček - Svatý Hostýn</p>
                    <p style="display: inline-block; padding: 0px;"><?php echo $pocitadlo->get(); ?></p>
                </div>
            </div>
            <div class="menu">
               <?php $template->render("menu.php"); ?>

            </div>

        </div> <!-- header-navigation -->
    </div> <!-- header-container -->

