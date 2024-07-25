<?php
    require '../pdo/connection_credits.php';
    require '../pdo/connect_to_db.php';

    $db = connect_to_database($DB_DATABASE,$DB_HOST, $DB_USER, $DB_PASSWORD);
    if($db){
        $rows = select_all_from_table($db, 'users');
        display_to_table($rows);

    }else{
        generatetitle("Connection failed", 'red');
    }

?>

<a href="myform.php" class="btn btn-dark">Add new user </a>
