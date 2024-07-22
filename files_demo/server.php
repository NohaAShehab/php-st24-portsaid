<?php

include '../base.php';
require 'utils.php';

# include --> raise warning if file doesn't exist  -->
# require --> raise exception if file doesn't exist.


echo "<h1> Welcome to my PHP Server </h1>";





# save data to file --> credits  then display data of all users into table

if(!empty($_POST['email']) and !empty($_POST['password'])){
    echo 'data received';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data_to_save = "{$email}:{$password}\n";
    $saved =append_line("credits",$data_to_save);
    var_dump($saved);
    if($saved){
        # display data in table

        # show data
        # redirect to users.php
        header('Location: users.php');

//        header('Location: ../tips.php');

    }

}


//    echo "<a href='users.php'  class='btn btn-primary'>Show All users </a>"
?>













