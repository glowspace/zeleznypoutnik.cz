<?php

namespace Poutnik;

require "load.php";

$template = new Template();

$template->setTitle("Fotky");
$template->setPageName("fotky");

$template->render("top.php");
?>
    <div class="container">
        <div class="content">
            <h1>Fotky</h1>

            <h2>20. ročník (31. 3. - 1. 4. 2017)</h2>
                <ol>
                    <li>
                        <a href="http://galerie.clovekavira.cz/detail-galerie/45ff6e10-acee-45bc-9b69-8b74e011ab0b">Dominik Polanský - clovekavira.cz (1. album)</a>
                    </li>
                    <li>
                        <a href="http://galerie.clovekavira.cz/detail-galerie/3ab2afcc-ff27-4734-bd9f-5741d232484b">Dominik Polanský - clovekavira.cz (2. album)</a>
                    </li>

                </ol>
            </h2>

            <p>Pokud chcete dát k dispozici i Vaše fotky, napište nám na email <a href="mailto:michaeldojcar@gmail.com">michaeldojcar@gmail.com</a>.</p>
        </div>



    </div>

    <?php
$template->render("bottom.php");

