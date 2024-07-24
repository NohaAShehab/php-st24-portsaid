<?php
include '../base.php';

generatetitle("Welcome to logout", 'purple');

    session_start();
    var_dump($_SESSION);
# 1- destroy session
    $_SESSION = array();
    session_destroy();

    var_dump($_SESSION);

    header("location: myform.php ");