<?php

require 'connection_credits.php';
require 'connect_to_db.php';

$db = connect_to_database($DB_DATABASE,$DB_HOST, $DB_USER, $DB_PASSWORD);
$id = 4 ;
$username='updated';
$password= 'updateed';
$email= 'email@gmail.com';
if($db){
    try{
            $update_query=  "Update `users` set `name`=:username, `password`=:mypassword ,
                   `email`=:email
               where `id`=:id";

            $update_stmt = $db->prepare($update_query);
            $update_stmt->bindParam(':username', $username);
            $update_stmt->bindParam(':email', $email);
            $update_stmt->bindParam(':mypassword', $password);
            $update_stmt->bindParam(':id', $id);

            $update_stmt->execute();


    if($update_stmt->rowCount()){
        echo generatetitle("Record updated successfully", 'green');

    }else{
        echo generatetitle("No change", 'blue');
    }

    }catch (PDOException $e){
        generatetitle("Error while deleting record");
        echo $e->getMessage();
    }
}