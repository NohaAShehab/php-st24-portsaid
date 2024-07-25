<?php


    require 'connection_credits.php';
    require 'connect_to_db.php';

    $db = connect_to_database($DB_DATABASE,$DB_HOST, $DB_USER, $DB_PASSWORD);
    if($db){
        var_dump($db);

        $insert_query = "INSERT INTO users ( name, password,email) VALUES ('ali','iti' ,'ali@gmailll.com' )";

        $inserted=$db->query($insert_query);
        var_dump($inserted);

        ## check if added
        $rows = select_all_from_table($db, "users");
        display_to_table($rows);

    }