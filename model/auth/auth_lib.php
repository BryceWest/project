<?php

#processAuth
function processAuth($user, $pass) {

    $auth = array();
    $auth["return"] = false;
    $auth["message"] = "";

    $sql = "SELECT *
            FROM auth_user
            WHERE username = '$user'";

    $res = mysql_query($sql);
    $row = mysql_fetch_array($res);


// Check if user exists

    if ($row) {
        // Check if password is valid
        if ($row["password"] == md5($pass)) {
            $auth["return"] = true;
        }
        else {
            $auth["message"] = "Password does not match user";
        }
    }
    else {

        $auth["message"] = "User does not exist";

    }

    return($auth);
}
# -- End processAuth --


function newUser($email, $fName, $lName, $user, $user2, $pass, $pass2) {

    $newUser = array();
    $newUser["return"] = true;
    $newUser["message"] = "";
    if (!empty($email) && !empty($fName) && !empty($lName) && !empty($user) && !empty($user2) && !empty($pass) && !empty($pass2)){
        if ($user != $user2) {
            $newUser["message"] .= "The Username was not retyped correctly. ";
            $newUser["return"] = false;
        }

         $sql = "SELECT *
            FROM auth_user
            WHERE username = '$user'";
         $res = mysql_query($sql);
         $row = mysql_fetch_array($res);

         if ($row) {
             $newUser["message"] .= "The Username already exists. ";
             $newUser["return"] = false;
         }

         if ($pass != $pass2) {
             $newUser["message"] .= "The Password was not retyped correctly. ";
             $newUser["return"] = false;
         }

    } else {
             $newUser["message"] .= "Not all fields were entered. ";
             $newUser["return"] = false;

}

    if ($newUser["return"] == true) {

        $sql = "INSERT INTO auth_user
             ( fName, lName, username, password, email )
            VALUES
             ( '" . $fName             . "',
               '" . $lName             . "',
               '" . $user              . "',
               '" . md5($pass)         . "',
               '" . $email             . "'
                )";

            mysql_query( $sql );


    $sql = "SELECT id
            FROM  auth_user
            WHERE '" . $user . "' = username";
    $res = mysql_query($sql);
    $row = mysql_fetch_array( $res);
    $user_id = $row["id"];




        $sql = "INSERT INTO profile
             ( user_id )
            VALUES
             (" . $user_id . ")";

    //print $sql;

    mysql_query( $sql );






    }


    return($newUser);

}
# -- End processAuth --