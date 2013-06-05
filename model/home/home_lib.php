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

function list_about() {


    $user_name = $_SESSION["username"];

    $sql = "SELECT id
            FROM  auth_user
            WHERE '" . $user_name . "' = username";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);
    $user_id = $row["id"];

    $sql = "SELECT a.id, p.about, p.birth_day, p.birth_month, p.birth_year
            FROM  profile p, auth_user a
            WHERE " . $user_id . " = p.user_id AND a.id = $user_id";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);


    return($row);
}

function update_about($about,$birth_day,$birth_year,$birth_month) {

    $user_name = $_SESSION["username"];

    $sql = "SELECT id
            FROM  auth_user
            WHERE '" . $user_name . "' = username";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);
    $user_id = $row["id"];

    $sql = "UPDATE `profile` SET
            `about` = '".$about."',
            `birth_day` =  '".$birth_day."',
            `birth_year` =  '".$birth_year."',
            `birth_month` = '".$birth_month."'
            WHERE `user_id` = ".$user_id;

    mysql_query( $sql );
}

function list_comment() {


    $user_name = $_SESSION["username"];

    $comment = array();
    if ($_GET["p"] == 0) {
        $_GET["p"] = 1;
    }
    $privacy = $_GET["p"];

    $sql = "SELECT id
            FROM  auth_user
            WHERE '" . $user_name . "' = username";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);
    $user_id = $row["id"];

    $sql = "SELECT a.username, p.comment_parent, p.user, p.privacy_list, p.content
            FROM  post p, auth_user a
            WHERE '" . $user_name . "' = a.username AND ".$user_id." = p.user AND '".$privacy."' = p.privacy_list
            UNION
            SELECT a.username, p.comment_parent, p.user, p.privacy_list, p.content
            FROM   post p, auth_user a, friend f
            WHERE  f.user_id IN ( SELECT friend_id FROM friend WHERE ".$user_id." = user_id AND '".$privacy."' = friend_privacy) AND
                   p.user = f.user_id AND a.id = f.user_id AND f.friend_privacy = p.privacy_list AND ".$user_id." = f.friend_id";


    $res = mysql_query($sql);


    while ( $row = mysql_fetch_array( $res) ) {
        $comment[] = $row;
    }
    return ( $comment );
}


function add_comment($post) {


    $user_name = $_SESSION["username"];

    $comment = array();
    if ($_GET["p"] == 0) {
        $_GET["p"] = 1;
    }
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
