<?php

function list_products() {


    $product = array();

    $sql = "SELECT c.name as cat_name, p.name as prod_name, p.description as prod_description,
                   p.retail, p.qty
            FROM category c, product p
            WHERE c.id = p.category_id";

    $res = mysql_query($sql);
    $row = mysql_fetch_array($res);

    while ( $row = mysql_fetch_array( $res) ) {
        $product[] = $row;
    }

    return ( $product );
}