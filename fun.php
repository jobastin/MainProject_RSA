<?php

$error = "";
function connect($caller="fun"){
    //helps to connect to whicheveer database is being used
    $server = "localhost";
    $db = "rsa";
    $user = "root";
    $pw = "";
    $con = mysqli_connect($server, $user, $pw, $db) or die("$caller : Unable to connect to db.");
    return $con;
}


function sessioncheck(){
    //checks if a user has logged in, returns to signinpage otherwise
    session_start();
    if (!isset($_SESSION['loginid'])){
        return false;
    } else {
        return true;
    }
}


function sessiondelete(){
    session_start();
    if (isset($_SESSION['loginid'])){
        unset($_SESSION['loginid']);
    }
    session_destroy();
}


function sessioncheckotp(){
    //checks if a user has logged in, returns to signinpage otherwise
    session_start();
    if (!isset($_SESSION['email'])){
        return false;
    } else {
        return true;
    }
}

function sessiondeleteotp(){
    session_start();
    if (isset($_SESSION['email'])){
        unset($_SESSION['email']);
    }
    session_destroy();
}

function sessiondeleteotp1(){
    if (isset($_SESSION['email'])){
        unset($_SESSION['email']);
    }
    session_destroy();
}

function sessiontime(){
    //checks if a user has logged in, returns to signinpage otherwise
    session_start();
    if (!isset($_SESSION['exp'])){
        return false;
    } else {
        return true;
    }
}

function sessiondeletetime(){
    session_start();
    if (isset($_SESSION['exp'])){
        unset($_SESSION['exp']);
    }
    session_destroy();
}

?>
