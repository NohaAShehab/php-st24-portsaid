<?php

require '../pdo/connection_credits.php';
require '../pdo/connect_to_db.php';

    var_dump($_GET);

    # get id of object ??
//
$db = connect_to_database($DB_DATABASE,$DB_HOST, $DB_USER, $DB_PASSWORD);
if(isset($_GET['id'])){
    $id = $_GET['id'] ;

    if($db){
        try{
            $delete_query = "DELETE FROM users WHERE id=:id";
            $stmt = $db->prepare($delete_query);
            $stmt->bindParam(':id',$id);
            $deleted=   $stmt->execute();  # operation was successfully
            if($stmt->rowCount()){
                echo generatetitle("Record deleted successfully", 'red');
                header("Location:userstable.php");

            }else{
                echo generatetitle("No change", 'blue');
            }

        }catch (PDOException $e){
            generatetitle("Error while deleting record");
            echo $e->getMessage();
        }
    }
}