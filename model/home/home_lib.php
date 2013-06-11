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

    $sql = "SELECT a.id, pic.name, p.about, p.birth_day, p.birth_month, p.birth_year
            FROM  profile p, auth_user a, pic pic
            WHERE " . $user_id . " = p.user_id AND a.id = $user_id AND a.picture = pic.id";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);


    return($row);
}

function list_fabout() {


    $user_name = $_GET["f"];

    $sql = "SELECT id
            FROM  auth_user
            WHERE '" . $user_name . "' = username";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);
    $user_id = $row["id"];

    $sql = "SELECT a.id, pic.name, p.about, p.birth_day, p.birth_month, p.birth_year
            FROM  profile p, auth_user a, pic pic
            WHERE " . $user_id . " = p.user_id AND a.id = ".$user_id." AND a.picture = pic.id";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);


    return($row);
}

function friend_check() {

    $user_name = $_GET["f"];
    $sql = "SELECT id
            FROM  auth_user
            WHERE '" . $user_name . "' = username";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);
    $friend_id = $row["id"];

    $user_name = $_SESSION["username"];
    $sql = "SELECT id
            FROM  auth_user
            WHERE '" . $user_name . "' = username";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);
    $user_id = $row["id"];

    $sql = "SELECT friend_id
            FROM   friend
            WHERE  ".$user_id." = user_id AND ".$friend_id." = friend_id ";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);

    if (!empty($row)) {
        $message = "You are friends.";
    } else {
        $message = "You are not friends.";
    }

    return($message);
}

function addFriend($p) {


    $user_name = $_GET["f"];
    $sql = "SELECT id
            FROM  auth_user
            WHERE '" . $user_name . "' = username";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);
    $friend_id = $row["id"];

    $user_name = $_SESSION["username"];
    $sql = "SELECT id
            FROM  auth_user
            WHERE '" . $user_name . "' = username";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);
    $user_id = $row["id"];

        $sql = "INSERT INTO friend
             ( user_id, friend_id, friend_privacy )
            VALUES
             (  " . $user_id                   . ",
               '" . $friend_id                 . "',
               '" . $p                         . "')";

    //print $sql;

    mysql_query( $sql );
}

function list_picOptions() {

    $option = array();

    $sql = "SELECT name
            FROM pic";
    $res = mysql_query($sql);

    while ( $row = mysql_fetch_array( $res) ) {
        $option[] = $row;
    }
    return ( $option );
}


function update_about($about,$birth_day,$birth_year,$birth_month, $proPic) {

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

    $sql = "UPDATE `auth_user` SET
            `picture` = ".$proPic."
            WHERE `id` = ".$user_id;

    mysql_query( $sql );

}

function update_privacy($priv1,$priv2,$priv3,$priv4,$priv5) {

    $user_name = $_SESSION["username"];

    $sql = "SELECT id
            FROM  auth_user
            WHERE '" . $user_name . "' = username";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);
    $user_id = $row["id"];

    $sql = "UPDATE `auth_user` SET
            `privacy1` =  '".$priv1."',
            `privacy2` =  '".$priv2."',
            `privacy3` =  '".$priv3."',
            `privacy4` =  '".$priv4."',
            `privacy5` =  '".$priv5."'
            WHERE `id` = ".$user_id;

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


    $sql = "SELECT a.username, pic.name, p.comment_parent, p.user, p.privacy_list, p.content
            FROM  post p, auth_user a, pic pic
            WHERE '" . $user_name . "' = a.username AND ".$user_id." = p.user AND '".$privacy."' = p.privacy_list AND pic.id = a.picture
            UNION
            SELECT a.username, pic.name, p.comment_parent, p.user, p.privacy_list, p.content
            FROM   post p, auth_user a, friend f, pic pic
            WHERE  f.user_id IN ( SELECT friend_id FROM friend WHERE ".$user_id." = user_id AND '".$privacy."' = friend_privacy) AND
                   p.user = f.user_id AND a.id = f.user_id AND f.friend_privacy = p.privacy_list AND ".$user_id." = f.friend_id AND pic.id = a.picture";


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
