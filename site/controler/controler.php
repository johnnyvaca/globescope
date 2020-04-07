<?php

//Auteurs : Kevin Vaucher et Johnny Vaca
//Projet : Projet Web Globescope
//Date : 16.03.2020

require "model/model.php";

function getHomePage()
{
    require "model/GetData.php";
    require "view/globescope.php";
}

function getAdminPanelPage()
{
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
    $images = getImages();

    //   var_dump($tabla);
    $x = 0;
    foreach ($images as $i => $image) {
        if (in_array($image['IDPlace'], $listeModify)) {
            $imagesSelected[$x] = $image;
            $x++;
        }
    }

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

    require "view/modifyPanel.php";
}

function uploadMedia($tmp_name, $name, $max)
{


    for ($i = 0; $i < $max; $i++) {
        $extention = strchr($name, ".");
        //  $extentionAllowed = array(".jpg", ".JPG",".jpeg",".JPEG", ".png", ".PNG");
        $destination = "images/64-64/" . $name;
        //    if (in_array($extention, $extentionAllowed)) {
        if (move_uploaded_file($tmp_name, $destination)) {
            return;
        }
        //      }
    }

}

function uploadImages64($tmp_name, $name, $max)
{

    for ($i = 0; $i < $max; $i++) { }

        $extention = strchr($name, ".");
        $extentionAllowed = array(".jpg", ".JPG", ".jpeg", ".JPEG", ".png", ".PNG");
        $destination = "images/64-64/" . $name;
        if (in_array($extention, $extentionAllowed)) {
            if (move_uploaded_file($tmp_name, $destination)) {
                return;
            }
        }


}

function uploadImages128($tmp_name, $name, $max)
{

 //    var_dump($name);
    //   var_dump($tmp_name);
    for ($i = 0; $i < $max; $i++) {
        $extention = strchr($name, ".");
        $extentionAllowed = array(".jpg", ".JPG", ".png", ".PNG", ".jpeg", ".JPEG");
        $destination = "images/128-128/" . $name;
        if (in_array($extention, $extentionAllowed)) {
            if (move_uploaded_file($tmp_name, $destination)) {
                return;
            }
        }
    }

}

function uploadImages400($tmp_name, $name, $max)
{
    //var_dump($name);
    // var_dump($tmp_name);
    for ($i = 0; $i < $max; $i++) {
        $extention = strchr($name, ".");
        $extentionAllowed = array(".jpg", ".JPG", ".png", ".PNG", ".jpeg", ".JPEG");
        $destination = "images/400-500/" . $name;
        if (in_array($extention, $extentionAllowed)) {
            if (move_uploaded_file($tmp_name, $destination)) {
                return;
            }
        }
    }

}


function addSnow($imageChoisis, $mediaChoisis, $pseudo, $pays, $ville, $equipe, $droit, $slogan, $id)
{

    $personnes = getImages();
    $index = 0;
    foreach ($personnes as $i => $personne) {

        if ($personne['IDPlace'] === $id) {
            $tableau[$i] = ['IDPlace' => $id, 'IDImage' => $imageChoisis, 'mer' => $personne['mer'], 'lat' => $personne['lat'],
                'lon' => $personne['lon'], 'Pseudo' => $pseudo, 'Droit' => $droit, 'Slogan' => $slogan,
                'Provenance' => $personne['Provenance'], 'ImageOK' => $personne['ImageOK'], 'Pays' => $pays,
                'Ville' => $ville, 'Equipe' => $equipe, 'Media' => $personne['Media'], 'MediaDesc' => $personne['MediaDesc']];

        } else {
            $tableau[$i] = $personne;
        }
    }
    putSnow($tableau);
}
