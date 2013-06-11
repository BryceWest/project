<?php



# Load bootstrap to apply configuration
include("config/bootstrap.php");
// Include libraries
include(APP_MODEL . "/auth/auth_lib.php");
include(APP_MODEL . "/prod/prod_lib.php");
include(APP_MODEL . "/home/home_lib.php");




# Start session
session_start();

#Check if user is authenticated
if (!$_SESSION["username"] && $_GET["a"] != "process" && $_GET["q"] != "auth" && $_GET["a"] != "new" && $_GET["a"] != "newPush") {
    $_GET["q"] = "auth";
    $_GET["a"] = "login";
}



# Route request to desired controller
switch ($_GET["q"]) {

    case "home":
        include( APP_CONTROLLER . "/homeController.php");
        break;

    case "search":
        include( APP_CONTROLLER . "/friendSearchController.php");
        break;

    case "auth":
        include( APP_CONTROLLER . "/authController.php");
        break;

    case "prod":
        include( APP_CONTROLLER . "/prodController.php");
        break;

    default:
        include( APP_CONTROLLER . "/homeController.php");
        break;
}