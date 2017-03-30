<?php

/**
 * Index administrace
 */

namespace Poutnik;

require "../load.php";

$config = new Config();
$pg_name = $config->getProperty("template","pg_name");

/**
 * Layout stránky
 */

$template = new Template();
$template->setTemplatePath("/admin/layout/template");

$template->setTitle("Nástěnka");

$template->render("top.php");

?>
    <div class="page-header">
        <h1>Administrace webu <a href="<?php ROOT_URL ?>"><?php echo ROOT_URL_SHORT; ?></a></h1>
    </div>

<?php
$template->render("bottom.php");


