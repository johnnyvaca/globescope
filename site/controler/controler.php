<?php

//Auteurs : Kevin Vaucher et Johnny Vaca
//Projet : Projet Web Globescope
//Date : 16.03.2020
function getHomePage()
{
    require "model/GetData.php";
    require "view/globescope.php";
}

function getAdminPanelPage()
{
    require "model/model.php";
    $images = getImages();
    $iDroit = 0;
    $iVille = 0;
    $iEquipe = 0;
    $iPays = 0;
    $iPseudo = 0;
    $iSlogan = 0;
    foreach ($images as $image) {
        if ($image['Pseudo'] != "") {
            $pseudos[$iPseudo] = $image['Pseudo'];
            $iPseudo++;
        }
        if ($image['Droit'] != "") {
            $droits[$iDroit] = $image['Droit'];
            $iDroit++;
        }
        if ($image['Ville'] != "") {

            $villes[$iVille] = $image['Ville'];
            $iVille++;
        }
        if ($image['Equipe'] != "") {
            $equipes[$iEquipe] = $image['Equipe'];

            $iEquipe++;
        }
        if ($image['Pays'] != "") {
            $pays[$iPays] = $image['Pays'];

            $iPays++;
        }
        if ($image['Slogan'] != "") {
            $slogans[$iPseudo] = $image['Slogan'];
            $iSlogan++;
        }

    }
    $droits = array_unique($droits);
    $villes = array_unique($villes);
    $equipes = array_unique($equipes);
    $pays = array_unique($pays);
    $pseudos = array_unique($pseudos);
    $slogans = array_unique($slogans);
    require "view/adminPanel.php";
}

function getModifyPage($listeModify)
{
    require "model/model.php";
    $images = getImages();


    require "view/modifyPanel.php";
}
