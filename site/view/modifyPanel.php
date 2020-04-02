
<?php
//Auteurs : Kevin Vaucher et Johnny Vaca
//Projet : Projet Web Globescope
//Date : 16.03.2020
ob_start();
$title = "Globescope - Modification";


$content = ob_get_clean();
require "view/gabaritAdminPanel.php";
?>

