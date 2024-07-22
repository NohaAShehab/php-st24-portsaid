<?php
    require 'utils.php';
    include "./../base.php";

    ## display all users

    # call function --->
    generatetitle("All users ", 'blue');
    display_data_into_table('credits');