<?php

namespace Poutnik;

require "load.php";

$template = new Template();

$template->setTitle("Kontakty");
$template->setPageName("kontakty");

$template->render("top.php");
?>
    <div class="container">
        <div class="content">
            <h1>Fotky</h1>

            <p>
                <span style="color: #5f5f5f">email farnosti v Louce: </span> <a href="mailto:info@farnostlouka.cz">info@farnostlouka.cz</a>
            </p>
            <p>
                <span style="color: #5f5f5f">telefon na farnost v Louce: </span>+420 736 523 600
            </p>


        </div>



    </div>

    <?php
$template->render("bottom.php");

