<?php

function processAuth($user, $pass) {

    $userList = array();
    $userList["bryce"] = "password";
    $userList["admin"] = "admin";
    $userList["user"] = "user1234";


    $auth = array();
    $auth["return"] = false;
    $auth["message"] = "";

// Check if user exists
    $userArray = array_keys($userList);
    if (in_array($user, $userArray)) {
        // Check if password is valid
        if ($pass == $userList[$user]) {
            $auth["return"] = true;
        }
        else {
            $auth["message"] = "Password does not match user";
        }
    }
    else {

        $auth["message"] = "User does not exist";

    }
// Check if password is valid


    return($auth);
}