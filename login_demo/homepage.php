<?php

include '../base.php';

# user must be logged in before opening this page


session_start();
if($_SESSION['login']===true){

    # start timer after timer destroy the session ??
    generatetitle("Welcome {$_SESSION['user']} ", 'green');

    ### destroy cookies after one hour
//    $_COOKIE= [];
}else{
    session_destroy();
    setcookie('PHPSESSID', '', time() - 3600, '/');
    header("location: myform.php");
}




?>

<a href="logout.php" class="btn btn-dark"> Logout</a>
