<?php
session_start();
require "controler/controler.php";

$action = $_GET['action'];
switch ($action){
    case "login":
        getLoginPage();
        break;

    default:

        getHomePage();
}
?>