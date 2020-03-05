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

    foreach ($images as $i => $image) {

        if($image['Droit'] != "")
        $droits[$i] = $image['Droit'];

    $droits= array_unique($droits);

        if($image['Ville'] != "")
        $villes[$i] = $image['Ville'];


    $villes = array_unique($villes);


        if($image['Equipe'] != "")
        $equipes[$i] = $image['Equipe'];

    $equipes= array_unique($equipes);

        if($image['Pays'] != "")
        $pays[$i] = $image['Pays'];

    }
    $pays = array_unique($pays);

    require "view/adminPanel.php";

}