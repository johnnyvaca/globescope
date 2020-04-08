<?php
//Auteurs : Kevin Vaucher et Johnny Vaca
//Projet : Projet Web Globescope
//Date : 16.03.2020
ob_start();
$title = "Panel Admin - choisir";
$subTitlePanel = "Choisissez les participants à changer";
$titlePanel = "Page Administration";
$check = '';

$action = "modify";
?>
    <br><br><br><br>
    <input class="btn btn-primary btn-lg btn-block" type='button' value='Retour à la page precedente pour modifier'
           id="btnRetour" name='bnom'
           onClick='javascript:history.back();'>
    <a href="?action=login" type="button" class="btn btn-secondary btn-lg btn-block">RETOUR A LA PAGE
        D'ADMINISTRATION</a>


<?php
$content = ob_get_clean();
require "view/gabaritAdminPanel.php";
?>