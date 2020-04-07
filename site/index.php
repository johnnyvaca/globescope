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
        $images = getImages();
        /*        foreach ($images as $image){
                    if ($nameImage === $image['IDImage']){
                        $newName = $image['IDImage'];
                    }

                }
        */
        $tous = glob('images/64-64/*');
//foreach ($tous as $item){
        // var_dump($item);
        //  var_dump("<br>");
//}

        //      var_dump("tous : <br><br><br>");
//        var_dump($tous);

        for ($i = 0; $i < count($_FILES['img64']['name']); $i++) {

            $rand1 = rand(1000, 999999);
            $rand2 = rand(1000, 999999);
            $rand3 = rand(1, 999);
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
            //   var_dump($nameImage[$i]);
            // var_dump("<br>");
            //    str_replace('','', $);


            for ($ii = 0; $ii < count($_POST['IDPlaces']); $ii++) {
                $delete[$ii] = $_POST['delete' . $ii];
            };

            if (!empty($image64[$i]['name'])) {

                $oldImage = $image64[$i]['name'];
                $newImage = $nameImage[$i] . ".png";

                if ($delete[$i] == "no") {
                    rename("images/64-64/$newImage", "images/old/64-64/$rand1$rand2$rand3$newImage");
                    // copy("images/64-64/$newImage", "images/64-64/old/$newImage");
                } else {
                    unlink("images/64-64/$newImage");
                }

                uploadImages64($image64[$i]['tmp_name'], $oldImage, count($_FILES['img64']['name']));
                rename("images/64-64/$oldImage", "images/64-64/$newImage");
            }

            // var_dump($retour64);
            if (!empty($image128[$i]['name'])) {

                $oldImage = $image128[$i]['name'];
                $newImage = $nameImage[$i] . ".png";

                if ($delete[$i] == "no") {
                    rename("images/128-128/$newImage", "images/old/128-128/$rand1$rand2$rand3$newImage");
                    // copy("images/64-64/$newImage", "images/64-64/old/$newImage");
                } else {
                    unlink("images/128-128/$newImage");
                }

                uploadImages128($image128[$i]['tmp_name'], $image128[$i]['name'], count($_FILES['img128']['name']));
                rename("images/128-128/$oldImage", "images/128-128/$newImage");
            }
            if (!empty($image400[$i]['name'])) {
                $oldImage = $image400[$i]['name'];
                $newImage = $nameImage[$i] . ".jpg";

                if ($delete[$i] == "no") {
                    rename("images/400-500/$newImage", "images/old/400-500/$rand1$rand2$rand3$newImage");
                    // copy("images/64-64/$newImage", "images/64-64/old/$newImage");
                } else {
                    unlink("images/400-500/$newImage");
                }

                uploadImages400($image400[$i]['tmp_name'], $image400[$i]['name'], count($_FILES['img400']['name']));
                rename("images/400-500/$oldImage", "images/400-500/$newImage");
            }


            if (!empty($media[$i]['name'])) {
                uploadMedia($media[$i]['tmp_name'], $media[$i]['name'], count($_FILES['media']['name']));
            }

            /*
                addSnow($image128[$i]['name'], $media[$i]['name'], $_POST['Pseudos'][$i], $_POST['Pays'][$i], $_POST['Villes'][$i],
                    $_POST['Equipes'][$i], $_POST['Droits'][$i], $_POST['Slogans'][$i], $_POST['IDPlaces'][$i]);
        */
        }


        break;

    default:
        getHomePage();
}