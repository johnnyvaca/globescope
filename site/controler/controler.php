<!--
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet WEB sur Globescope pour le cours Projet WEB
Date : 11.02.2020
-->

<?php


function getHomePage()
{

    require "model/GetData.php";
    require "view/globescope.php";

}

function getLoginPage()
{
    require "model/model.php";
    $images = getImages();
    require "view/adminPanel.php";
}

?>