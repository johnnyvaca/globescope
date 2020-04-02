

<?php
//Auteurs : Kevin Vaucher et Johnny Vaca
//Projet : Projet Web Globescope
//Date : 16.03.2020
require "controler/controler.php";

$action = $_GET['action'];
switch ($action) {
    case "login":
        getAdminPanelPage();
        break;
    case "modify":
   //     var_dump($_POST['arrayModify']);

     $listeChose =   $_POST['arrayModify'];
        getModifyPage($listeChose);
        break;

    default:
        getHomePage();
}