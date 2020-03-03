<?php


function getHomePage()
{

    require "model/GetData.php";
    require "view/globescope.php";

}

function getLoginPage()
{
    require "model/model.php";
    $images = getImages();
    require "view/adminPanel.php";
}