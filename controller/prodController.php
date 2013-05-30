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

    case "update":

        $product = list_products();
        include( APP_VIEW ."/prod/prodSubNav.php" );
        include( APP_VIEW ."/prod/updateView.php" );
        break;

        case "push":


        $prod_name = $_POST['prod_name'];
        $prod_description = $_POST['prod_description'];
        $retail = $_POST['retail'];
        $qty = $_POST['qty'];
        $id = $_POST['id'];

        change_product($prod_name, $prod_description, $retail, $qty, $id);

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
        $product = list_products();
        include( APP_VIEW ."/prod/prodSubNav.php" );
        include( APP_VIEW ."/prod/listView.php" );
        break;

    default:
        $product = list_products();
        include( APP_VIEW ."/prod/prodSubNav.php" );
        include( APP_VIEW ."/prod/listView.php" );
        break;
}


# Include html footer
include(APP_VIEW . "/footer.php");
