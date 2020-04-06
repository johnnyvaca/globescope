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

        $listeChose = $_POST['arrayModify'];
        getModifyPage($listeChose);

        break;
    case "update":
        /*

                var_dump("<br><br>IMAGE 64-64  <br>");
                var_dump($_FILES['img64']);
                var_dump("<br><br>IMAGE 128-128  <br>");
                var_dump($_FILES['img128']);
                var_dump("<br><br>IMAGE 400-400  <br>");
                var_dump($_FILES['img400']);
        */
        for ($i = 0; $i < count($_FILES['img64']['name']); $i++) {
            $media[$i]['name'] = $_FILES['media']['name'][$i];
            $media[$i]['tmp_name'] = $_FILES['media']['tmp_name'][$i];
            $image64[$i]['name'] = $_FILES['img64']['name'][$i];
            $image64[$i]['tmp_name'] = $_FILES['img64']['tmp_name'][$i];
            //var_dump($image64[$i]['tmp_name']);

            $image64[$i]['name'] = $_FILES['img64']['name'][$i];
            $image64[$i]['tmp_name'] = $_FILES['img64']['tmp_name'][$i];
            $image128[$i]['name'] = $_FILES['img128']['name'][$i];
            $image128[$i]['tmp_name'] = $_FILES['img128']['tmp_name'][$i];
            $image400[$i]['name'] = $_FILES['img400']['name'][$i];
            $image400[$i]['tmp_name'] = $_FILES['img400']['tmp_name'][$i];


            if (!empty($image64[$i]['name'])) {

                uploadImages64($image64[$i]['tmp_name'], $image64[$i]['name'], count($_FILES['img64']['name']));
            }
            if (!empty($image128[$i]['name'])) {

                    uploadImages128($image128[$i]['tmp_name'], $image128[$i]['name'], count($_FILES['img128']['name']));
                    addSnow($image128[$i]['name'], $media[$i]['name'], $_POST['Pseudos'][$i], $_POST['Pays'][$i], $_POST['Villes'][$i],
                        $_POST['Equipes'][$i], $_POST['Droits'][$i], $_POST['Slogans'][$i], $_POST['IDPlaces'][$i]);

            }
            if (!empty($image400[$i]['name'])) {
                uploadImages400($image400[$i]['tmp_name'], $image400[$i]['name'], count($_FILES['img400']['name']));
            }  if (!empty($media[$i]['name'])) {
                uploadMedia($media[$i]['tmp_name'], $media[$i]['name'], count($_FILES['media']['name']));
                addSnow($image128[$i]['name'], $media[$i]['name'], $_POST['Pseudos'][$i], $_POST['Pays'][$i], $_POST['Villes'][$i],
                    $_POST['Equipes'][$i], $_POST['Droits'][$i], $_POST['Slogans'][$i], $_POST['IDPlaces'][$i]);
            }


        }

        for ($i = 0; $i < count($_POST['IDPlaces']); $i++) {
            $delete[$i] = $_POST['delete' . $i];
        }


        break;

    default:
        getHomePage();
}