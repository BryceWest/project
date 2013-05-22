<?php



# Load bootstrap to apply configuration
include("config/bootstrap.php");
// Include libraries
include(APP_MODEL . "/auth/auth_lib.php");



# Start session
session_start();

#Check if user is authenticated
if (!$_SESSION["username"] && $_GET["a"] != "process" && $_GET["q"] != "auth") {
    $_GET["q"] = "auth";
    $_GET["a"] = "login";
}



# Route request to desired controller
switch ($_GET["q"]) {

    case "home":
        include( APP_CONTROLLER . "/homeController.php");
        break;

    case "auth":
        include( APP_CONTROLLER . "/authController.php");
        break;

    default:
        include( APP_CONTROLLER . "/homeController.php");
        break;
}