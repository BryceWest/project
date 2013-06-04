<?php

function list_privacy() {

    if ($_GET["p"] == 1 || $_GET["p"] == 2 || $_GET["p"] == 3 || $_GET["p"] == 4 || $_GET["p"] == 5) {
        $privacy = $_GET["p"];
    } else {
        $privacy = 1;
    }

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
    $privacy = $_GET["p"];

    $sql = "SELECT id
            FROM  auth_user
            WHERE '" . $user_name . "' = username";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);
    $user_id = $row["id"];

    $sql = "SELECT a.username, p.comment_parent, p.user, p.privacy_list, p.content
            FROM  post p, auth_user a, friend f
            WHERE ('" . $user_name . "' = a.username AND ".$user_id." = p.user AND '".$privacy."' = p.privacy_list)";
           // (".$user_id." = p.user AND ".$user_id." = f.friend_id AND p.privacy_list = f.friend_privacy AND '".$privacy."' = p.privacy_list) OR


          //  "SELECT a.username, p.comment_parent, p.user, p.privacy_list, p.content
          //   FROM post p, auth_user a, friend f
          //   WHERE ('" . $user_name . "' = a.username AND a.id = p.user AND '".$privacy."' = p.privacy_list)
          //   OR p.user IN (SELECT p.user FROM auth_user a, friend f WHERE user_followers.user_id = "

    $res = mysql_query($sql);


    while ( $row = mysql_fetch_array( $res) ) {
        $comment[] = $row;
    }
    return ( $comment );
}


function add_comment($post) {


    $user_name = $_SESSION["username"];

    $comment = array();
    $privacy = $_GET["p"];
    $sql = "SELECT id
            FROM  auth_user
            WHERE '" . $user_name . "' = username";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);
    $user_id = $row["id"];

        $sql = "INSERT INTO post
             ( user, privacy_list, content )
            VALUES
             (  " . $user_id                   . ",
               '" . $privacy                     . "',
               '" . $post["content"]             . "')";

    //print $sql;

    mysql_query( $sql );
}


?>
