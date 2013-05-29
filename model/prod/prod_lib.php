<?php

function list_products() {


    $product = array();

    $sql = "SELECT c.name as cat_name, p.name as prod_name, p.description as prod_description,
                   p.retail, p.qty
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