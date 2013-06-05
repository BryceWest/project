<?php



# Include html header
include(APP_VIEW . "/header.php");

# Include main navigation
include(APP_VIEW . "/nav.php");


switch ( $_GET["a"] ) {

    case "home":
        $privacy = list_privacy();
        $content = list_comment();
        include( APP_VIEW ."/home/homeSubNav.php" );
        include( APP_VIEW ."/home/homeView.php" );
        break;

    case "add":
        add_comment($_POST);
        $privacy = list_privacy();
        $content = list_comment();
        include( APP_VIEW ."/home/homeSubNav.php" );
        include( APP_VIEW ."/home/homeView.php" );
        break;

    case "profile":
        $privacy = list_privacy();
        $content = list_comment();
        $about = list_about();
        include( APP_VIEW ."/home/profileSubNav.php" );
        include( APP_VIEW ."/home/profileView.php" );
        break;

    case "proEdit":
        $privacy = list_privacy();
        $content = list_comment();
        $about = list_about();
        include( APP_VIEW ."/home/proEditSubNav.php" );
        include( APP_VIEW ."/home/profileView.php" );
        break;

    case "proPush":

        $about = $_POST["about"];
        $birth_day = $_POST["birth_day"];
        $birth_year = $_POST["birth_year"];
        $birth_month = $_POST["birth_month"];


        update_about($about,$birth_day,$birth_year,$birth_month);
        $privacy = list_privacy();
        $content = list_comment();
        $about = list_about();
        include( APP_VIEW ."/home/profileSubNav.php" );
        include( APP_VIEW ."/home/profileView.php" );
        break;

    default:
        $privacy = list_privacy();
        $content = list_comment();
        include( APP_VIEW ."/home/homeSubNav.php" );
        include( APP_VIEW ."/home/homeView.php" );
        break;
}


# Include html footer
include(APP_VIEW . "/footer.php");
