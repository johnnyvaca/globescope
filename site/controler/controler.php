<?php

require "model/GetData.php";
function getHomePage(){

    require "view/globescope.php";

}
function getLoginPage(){
   $images = getImages();
    require "view/adminPanel.php";
}
?>