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

    default:
        $privacy = list_privacy();
        $content = list_comment();
        include( APP_VIEW ."/home/homeSubNav.php" );
        include( APP_VIEW ."/home/homeView.php" );
        break;
}


# Include html footer
include(APP_VIEW . "/footer.php");
