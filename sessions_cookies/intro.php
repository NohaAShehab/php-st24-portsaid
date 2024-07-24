<?php

    include '../base.php';

    generatetitle("Welcome to session");

    var_dump($_SESSION); # null in the first time

    # when you need to start the session
    session_start();
    generatetitle("after session start", 'red');
    var_dump($_SESSION);  # array

    $_SESSION['name']='Noha';

