<?php



# Include html header
include(APP_VIEW . "/header.php");

# Include main navigation
include(APP_VIEW . "/nav.php");


switch ( $_GET["a"] ) {

    case "list":
        $product = list_products();
        include( APP_VIEW ."/prod/prodSubNav.php" );
        include( APP_VIEW ."/prod/listView.php" );
        break;

    case "add":
        include( APP_VIEW ."/prod/prodSubNav.php" );
        include( APP_VIEW ."/prod/addView.php" );
        break;

    case "insert":

        insert_product( $_POST );

        include( APP_VIEW ."/prod/prodSubNav.php" );
        include( APP_VIEW ."/prod/insertView.php" );
        break;

    default:
        $product = list_products();
        include( APP_VIEW ."/prod/prodSubNav.php" );
        include( APP_VIEW ."/prod/listView.php" );
        break;
}


# Include html footer
include(APP_VIEW . "/footer.php");
