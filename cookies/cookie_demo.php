<?php


    include '../base.php';

    generatetitle("Cookies", 'Red');

    print_r($_COOKIE);

    # to set cookie

    setcookie("name", 'iti',time()+3600, '/', '');

setcookie("email", 'iti@gmail.com',time()+60, '/', '');