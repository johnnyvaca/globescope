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
    require "view/adminPanel.php";
    foreach ($images as $image){
        if($image['Droit'] != ""){
            for($i = 0;$i<count($images);$i++){

            }
            $droit = "";
        }
    }

}