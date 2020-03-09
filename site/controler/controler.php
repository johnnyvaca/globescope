<?php


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
    foreach ($images as $image) {

        if ($image['Droit'] != "") {
            $droits[$iDroit] = $image['Droit'];
            $iDroit++;
        } else if ($image['Ville'] != "") {

            $villes[$iVille] = $image['Ville'];
            $iVille++;
        } else if ($image['Equipe'] != "") {
            $equipes[$iEquipe] = $image['Equipe'];
            $iEquipe++;
        } else if ($image['Pays'] != "") {
            $pays[$iPays] = $image['Pays'];
            $iPays++;
        }

    }
    $equipes = array_unique($equipes);
    $villes = array_unique($villes);
    $droits = array_unique($droits);
    $pays = array_unique($pays);

    require "view/adminPanel.php";

}
