<?php
//Auteurs : Kevin Vaucher et Johnny Vaca
//Projet : Projet Web Globescope
//Date : 16.03.2020

session_start();

require "controler/controler.php";
require 'controler/GetData.php';

$action = $_GET['action'];
switch ($action) {
    case "connexion":
        connexion();
        break;
    case "GetData":
        GetData();
        break;

    case "successLogin":
        getAdminPanelPage();
        break;
    case "tryLogin":
        verifyLogin($_POST['email'], $_POST['password']);
        break;
    case "login":
        if ($_SESSION) {
            getAdminPanelPage();
        } else {
            getTryLogin();
        }


        break;
    case "modify":


        if ($_SESSION['droit'] == 1) {
            $listeChose = $_POST['arrayModify'];
            getModifyPage($listeChose);
        } else {
            getAdminPanelPage();
        }


        break;
    case "update":

        for ($i = 0; $i < count($_FILES['img64']['name']); $i++) {

            $rand1 = rand(0, 999);
            $rand2 = rand(0, 999);
            $rand3 = rand(0, 999);

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

            $nameImage[$i] = $_POST['nameImage'][$i];

            for ($ii = 0; $ii < count($_POST['IDPlaces']); $ii++) {
                $delete[$ii] = $_POST['delete' . $ii];
                $deleteMedia[$ii] = $_POST['deleteMedia' . $ii];

            }


            if (!empty($image64[$i]['name'])) {

                $oldImage64 = $image64[$i]['name'];
                $newImage64 = $nameImage[$i] . ".png";


                if ($delete[$i] == "no") {
                    rename("images/64-64/$newImage64", "images/old/64-64/$rand1$rand2$rand3$newImage64");
                } else {
                    unlink("images/64-64/$newImage64");
                }

                uploadImages64($image64[$i]['tmp_name'], $oldImage64, count($_FILES['img64']['name']));
                rename("images/64-64/$oldImage64", "images/64-64/$newImage64");
            }

            if (!empty($image128[$i]['name'])) {

                $oldImage128 = $image128[$i]['name'];
                $newImage128 = $nameImage[$i] . ".png";

                if ($delete[$i] == "no") {
                    rename("images/128-128/$newImage128", "images/old/128-128/$rand1$rand2$rand3$newImage128");
                } else {
                    unlink("images/128-128/$newImage128");
                }

                uploadImages128($image128[$i]['tmp_name'], $image128[$i]['name'], count($_FILES['img128']['name']));
                rename("images/128-128/$oldImage128", "images/128-128/$newImage128");

            }
            if (!empty($image400[$i]['name'])) {
                $oldImage400 = $image400[$i]['name'];
                $newImage400 = $nameImage[$i] . ".jpg";

                if ($delete[$i] == "no") {
                    rename("images/400-500/$newImage400", "images/old/400-500/$rand1$rand2$rand3$newImage400");

                } else {
                    unlink("images/400-500/$newImage400");
                }

                uploadImages400($image400[$i]['tmp_name'], $image400[$i]['name'], count($_FILES['img400']['name']));
                rename("images/400-500/$oldImage400", "images/400-500/$newImage400");

            }

            $copie = $_POST['nameMedia'][$i];
            $copie = substr($copie, 7);

            if (!empty($media[$i]['name'])) {

                if ($deleteMedia[$i] == "no") {
                    rename("medias/$copie", "medias/old/$rand1$rand2$rand3$copie");
                } else {
                    unlink("/medias/$copie");
                }


                uploadMedia($media[$i]['tmp_name'], $media[$i]['name'], count($_FILES['media']['name']));
            }
            if (!empty($media[$i]['name'])) {
                $retour = $media[$i]['name'];
                $retourMedia = "medias/" . $retour;

            } else {
                if (!empty($_POST['mediaInternet'][$i])) {
                    $retourMedia = $_POST['mediaInternet'][$i];
                } else {
                    $retourMedia = $_POST['nameMedia'][$i];
                }
            }


            addSnow($retourMedia, $_POST['mediaDesc'][$i], $_POST['Pseudos'][$i], $_POST['Pays'][$i], $_POST['Villes'][$i],
                $_POST['Equipes'][$i], $_POST['Droits'][$i], $_POST['Slogans'][$i], $_POST['IDPlaces'][$i]);


        }

        //    setcookie('resterco', -1);
        require "view/finUpdate.php";


        break;

    default:
        getHomePage();
}