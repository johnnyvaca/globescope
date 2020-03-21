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

    }

    $droits = array_unique($droits);
    $villes = array_unique($villes);
    $equipes = array_unique($equipes);
    $pays = array_unique($pays);

    require "view/adminPanel.php";

<<<<<<< HEAD
<<<<<<< HEAD
function getModifyPage(){
    require "model/model.php";
    $images = getImages();
    require "view/modifyPanel.php";
=======
>>>>>>> parent of d1735f4... wip
=======
>>>>>>> parent of d1735f4... wip
}
