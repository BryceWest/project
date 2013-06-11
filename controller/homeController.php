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

    case "fprofile":
        $privacy = list_privacy();
        $f = $_GET["f"];
        $message = friend_check();
        $about = list_fabout();
        include( APP_VIEW ."/home/fprofileSubNav.php" );
        include( APP_VIEW ."/home/fprofileView.php" );
        break;

    case "addFriend":
        $privacy = list_privacy();
        addFriend($_POST["privacy"]);
        $message = friend_check();
        $about = list_fabout();
        include( APP_VIEW ."/home/fprofileSubNav.php" );
        include( APP_VIEW ."/home/fprofileView.php" );
        break;

    case "proEdit":
        $picOptions = list_picOptions();
        $privacy = list_privacy();
        $content = list_comment();
        $about = list_about();
        include( APP_VIEW ."/home/proEditSubNav.php" );
        include( APP_VIEW ."/home/profileView.php" );
        break;

    case "privEdit":
        $privacy = list_privacy();
        $content = list_comment();
        $about = list_about();
        include( APP_VIEW ."/home/privEditSubNav.php" );
        include( APP_VIEW ."/home/profileView.php" );
        break;


    case "proPush":

        $about = $_POST["about"];
        $birth_day = $_POST["birth_day"];
        $birth_year = $_POST["birth_year"];
        $birth_month = $_POST["birth_month"];
        $proPic = $_POST["proPic"];

        update_about($about,$birth_day,$birth_year,$birth_month,$proPic);
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


    case "privPush":

        $priv1 = $_POST["priv1"];
        $priv2 = $_POST["priv2"];
        $priv3 = $_POST["priv3"];
        $priv4 = $_POST["priv4"];
        $priv5 = $_POST["priv5"];

        update_privacy($priv1,$priv2,$priv3,$priv4,$priv5);
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
