<?php

/**
 * Práce se stránkou
 */

namespace Poutnik;

require "../load.php";

/**
 * Layout stránky
 */

$template = new Template();
$template->setTemplatePath("/admin/layout/template");

$template->setTitle("Stránka");

$template->render("top.php");

?>
    <div class="page-header">
        <h1>Úprava stránky</a></h1>
    </div>


    <textarea>

    </textarea>


    <?php
$template->render("bottom.php");


