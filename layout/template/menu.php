<?php
/**
 * Menu webu
 */

$template = $GLOBALS['template'];

$a_class = 'class="active" ';

switch ($template->getPageName()) {
    case "uvod":
        $a_uvod = $a_class;
        break;
    case "mapa":
        $a_mapa = $a_class;
        break;
    case "fotky":
        $a_fotky = $a_class;
        break;
    case "kontakty":
        $a_kontakty = $a_class;
        break;
    case "zkusenosti":
        $a_zkusenosti = $a_class;
        break;
}


?>
                <a <?php if(isset($a_uvod)){echo $a_uvod;} ?>href=".">úvodní strana</a>
                <a <?php if(isset($a_fotky)){echo $a_fotky;} ?>href="<?php echo ROOT_URL ?>/fotky.php">fotky</a>
                <a <?php if(isset($a_zkusenosti)){echo $a_zkusenosti;} ?>href="<?php echo ROOT_URL ?>/zkusenosti.php">napsali o nás</a>
                <a <?php if(isset($a_mapa)){echo $a_mapa;} ?>href="<?php echo ROOT_URL ?>/mapa.php">mapa trasy</a>
                <a <?php if(isset($a_kontakty)){echo $a_kontakty;} ?>href="<?php echo ROOT_URL ?>/kontakty.php">kontakt</a>
