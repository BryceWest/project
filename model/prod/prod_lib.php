<?php



function list_products() {




    $product = array();

    $sql = "SELECT c.name as cat_name, p.name as prod_name, p.description as prod_description,
                   p.retail, p.qty, p.id
            FROM category c, product p
            WHERE c.id = p.category_id";

    $res = mysql_query($sql);


    while ( $row = mysql_fetch_array( $res) ) {
        $product[] = $row;
    }



    return ( $product );
}

function insert_product( $product ) {



    $sql = "INSERT INTO product
             ( category_id, name, description, cost, retail, qty )
            VALUES
             (  " . $product["category"]    . ",
               '" . $product["name"]        . "',
               '" . $product["description"] . "',
                " . $product["cost"]        . ",
                " . $product["retail"]      . ",
                " . $product["qty"]         . ")";

    //print $sql;

    mysql_query( $sql );

}

function change_product($prod_name,$prod_description,$retail,$qty,$id) {


    $sql = "UPDATE `product` SET
            `category_id` = '3',
            `name` =  '".$prod_name."',
            `description` =  '".$prod_description."',
            `cost` = '100',
            `retail` = '".$retail."',
            `qty` = '".$qty."'
            WHERE `id` = ".$id;

    mysql_query( $sql );


}