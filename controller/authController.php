<?php

switch ( $_GET["a"] ) {

    case "login":
        include(APP_VIEW . "/header.php");
        include(APP_VIEW . "/nav.php");
        include( APP_VIEW . "/auth/loginView.php" );
        include(APP_VIEW . "/footer.php");
        break;

    case "new":
        include(APP_VIEW . "/header.php");
        include(APP_VIEW . "/nav.php");
        include( APP_VIEW . "/auth/newView.php" );
        include(APP_VIEW . "/footer.php");
        break;

    case "newPush":
        $newUser = newUser($_POST["email"], $_POST["fName"], $_POST["lName"],$_POST["username"], $_POST["username2"],$_POST["password"], $_POST["password2"]);

        if (true == $newUser["return"]) {


            #Setup session
            $_SESSION["username"] = $_POST["username"];

            header("Location: http://localhost" . APP_DOC_ROOT);
        }
        else {

            if (false == $newUser["return"]) {
                 include(APP_VIEW . "/header.php");
                 include(APP_VIEW . "/nav.php");
                 include( APP_VIEW . "/auth/newView.php" );
                 include(APP_VIEW . "/footer.php");
            }
        }

        break;

    case "logout":
        #Delete session data
        $_SESSION = 0;
        session_destroy();
        session_start();

        include(APP_VIEW . "/header.php");
        include(APP_VIEW . "/nav.php");
        include( APP_VIEW . "/auth/loginView.php" );
        include(APP_VIEW . "/footer.php");
        break;


    case "process":

        $auth = processAuth($_POST["username"], $_POST["password"]);

        if (true == $auth["return"]) {
            #Setup session
            $_SESSION["username"] = $_POST["username"];

            header("Location: http://localhost" . APP_DOC_ROOT);
        }
        else {

            if (false == $auth["return"]) {
                 include(APP_VIEW . "/header.php");
                 include(APP_VIEW . "/nav.php");
                 include( APP_VIEW . "/auth/loginView.php" );
                 include(APP_VIEW . "/footer.php");
            }
        }

        break;

}