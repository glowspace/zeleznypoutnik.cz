<?php

/**
 * Práce se stránkou
 */

namespace Poutnik;

require "../load.php";

$config = new Config();

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
        <h1>20. ročník Železného poutníka</h1>

        <p>
            Srdečně Vás zveme na 20. ročník železného poutníka - postní pěší pouť, která se koná vždy v noci z pátku
            na sobotu týden před květnou nedělí. Pouť začíná mší svatou v Bazilice Navštívení Panny Marie na
            Svatém Kopečku a končí mší svatou v Bazilice Nanebevzetí Panny Marie na Svatém Hostýně.
        </p>

        <h2>info k letošnímu ročníku</h2>

        <div class="box">
            <ul style="list-style-type: none">
                <li><u>start:</u> pátek 31.3. 18:00 | Svatý Kopeček | mše svatá v Bazilice Navštívení Panny Marie</li>
                <li><u>konec:</u> sobota 1.4. 7:15 | Svatý Hostýn | mše svatá v Bazilice Nanebevzetí Panny Marie</li>
                <li><u>s sebou:</u> svačinu, dobrou náladu a dobré pohodlné boty</li>

            </ul>
        </div>

        <p>
            Zhruba v polovině trasy (v Prosenicích) bude připraveno menší občerstvení a teplý čaj.
            Kněží budou během cesty k dispozici pro duchovní rozhovor nebo svátost smíření.
        </p>

        <p>
            Případný odvoz na Hostýn během cesty je zajištěn.
            Zpáteční cestu ze Svatého Hostýna si zajišťuje každý sám.
            V případě dotazů je možné využít email <a href="mailto:info@zeleznypoutnik.cz">info@zeleznypoutnik.cz</a>, informace poskytuje taky farnost na <a href="http://svatykopecek.cz">Svatém Kopečku</a> nebo  v <a href="https://www.farnostlouka.cz">Louce</a>.
        </p>

        <p>
            Těšíme se na společnou pouť!
        </p>

        </div>
    </textarea>

    <?php
$template->render("bottom.php");


