<!--
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet WEB sur Globescope pour le cours Projet WEB
Date : 11.02.2020
-->

<?php
session_start();
require "controler/controler.php";

$action = $_GET['action'];
switch ($action) {
    case "login":
        getLoginPage();
        break;
    default:
        getHomePage();
        break;
}
?>