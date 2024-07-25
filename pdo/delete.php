<?php

require 'connection_credits.php';
require 'connect_to_db.php';

$db = connect_to_database($DB_DATABASE,$DB_HOST, $DB_USER, $DB_PASSWORD);
$id = 2 ;
if($db){
    try{
    $delete_query = "DELETE FROM users WHERE id=:id";
    $stmt = $db->prepare($delete_query);
    $stmt->bindParam(':id',$id);
    $deleted=   $stmt->execute();  # operation was successfully
        # deleted or not ??
        # row count

    var_dump($stmt->rowCount());
    if($stmt->rowCount()){
        echo generatetitle("Record deleted successfully", 'red');

    }else{
        echo generatetitle("No change", 'blue');
    }

    }catch (PDOException $e){
        generatetitle("Error while deleting record");
        echo $e->getMessage();
    }
}