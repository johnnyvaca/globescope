<!--
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet Web Globescope
Date : 16.03.2020
-->

<?php

require "controler/controler.php";

$action = $_GET['action'];
switch ($action) {
    case "login":
        getAdminPanelPage();
        break;
<<<<<<< HEAD
    case "modify":
        var_dump($_POST['arrayModify']);
        getModifyPage();
        break;
=======
>>>>>>> parent of d1735f4... wip

    default:
        getHomePage();
}