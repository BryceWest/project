<?php

function list_privacy() {


    $user_name = $_SESSION["username"];

    $privacy = array();

    $sql = "SELECT  a.privacy1 ,  a.privacy2 ,  a.privacy3 ,  a.privacy4 ,  a.privacy5
            FROM  auth_user a
            WHERE  '" . $user_name . "' = a.username";


    $res = mysql_query($sql);


    while ( $row = mysql_fetch_array( $res) ) {
        $privacy[] = $row;
    }
    return ( $privacy );
}



function list_comment() {


    $user_name = $_SESSION["username"];

    $comment = array();

    $sql = "SELECT a.username, p.comment_parent, p.user, p.privacy_list, p.content
            FROM  post p, auth_user a
            WHERE  '" . $user_name . "' = a.username AND a.id = p.user";


    $res = mysql_query($sql);


    while ( $row = mysql_fetch_array( $res) ) {
        $comment[] = $row;
    }
    return ( $comment );
}





?>
