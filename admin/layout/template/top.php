<?php

/**
 * Horní část šablony administrace
 *
 * @author Michael Dojčár <michaeldojcar@gmail.com>
 */

namespace Poutnik;

$template = $GLOBALS['template'];

$pg_title = $template->getTitle();
$pg_name = $template->getSiteName();

$config = new Config();
#$fb_display = $config->getProperty("template","fb_icon_display");

?>
<!doctype html>
<!--suppress HtmlUnknownTarget -->
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>

    <meta name="theme-color" content="#deecf7">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo ADMIN_URL; ?>/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo ADMIN_URL; ?>/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo ADMIN_URL; ?>/img/favicon/applex-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo ADMIN_URL; ?>/img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo ADMIN_URL; ?>/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo ADMIN_URL; ?>/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo ADMIN_URL; ?>/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo ADMIN_URL; ?>/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php echo ADMIN_URL; ?>/img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php echo ADMIN_URL; ?>/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php echo ADMIN_URL; ?>/img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo ADMIN_URL; ?>/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php echo ADMIN_URL; ?>/img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="<?php echo $pg_name ?>"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?php echo ADMIN_URL; ?>/img/favicon/stile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="<?php echo ADMIN_URL; ?>/img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="<?php echo ADMIN_URL; ?>/img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="<?php echo ADMIN_URL; ?>/img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="<?php echo ADMIN_URL; ?>/img/favicon/mstile-310x310.png" />

    <title><?php echo $pg_title; ?></title>

    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ADMIN_URL; ?>/layout/css/theme.css">

    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>

<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Administrace <span style="color: #46a6ff"><?php echo ROOT_URL_SHORT ?></span></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li<?php $li_nastenka; ?>><a href=".">Nástěnka</a></li>
                    <li<?php $li_stranky; ?>><a href="#about">Stránky</a></li>
                    <li<?php $li_nastaveni; ?>><a href="#contact">Nastavení</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Michael Dojčár<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container theme-showcase" role="main">