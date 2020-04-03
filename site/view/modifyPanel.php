
<?php
//Auteurs : Kevin Vaucher et Johnny Vaca
//Projet : Projet Web Globescope
//Date : 16.03.2020
ob_start();

$title = "Panel Admin - modifier";
$subTitlePanel = "Modifier les participants à changer";
$titlePanel = "Page de Modification";
$check = '';
$chech1par1 = '';


$content = ob_get_clean();
require "view/gabaritAdminPanel.php";
?>

