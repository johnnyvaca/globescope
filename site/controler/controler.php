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



        if($image['Ville'] != "")
        $villes[$i] = $image['Ville'];





        if($image['Equipe'] != "")
        $equipes[$i] = $image['Equipe'];



        if($image['Pays'] != "")
        $pays[$i] = $image['Pays'];

    }
    $equipes= array_unique($equipes);
    $equipes = sort($equipes);
    $villes = array_unique($villes);
    $ds= array_unique($droits);
    $droits= array_unique($droits);
    print_r($ds);
    echo natcasesort($droits);
    $pays = array_unique($pays);

    require "view/adminPanel.php";

}