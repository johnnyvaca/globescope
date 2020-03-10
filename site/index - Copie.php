<?php
session_start();
require "controler/controler.php";

$action = $_GET['action'];
switch ($action) {
    case "login":
        getAdminPanelPage();
        break;

    default:
        getHomePage();
}