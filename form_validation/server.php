<?php

include '../base.php';
require 'utils.php';
echo "<h1> Welcome to my PHP Server </h1>";


$errors = [];
$old_data = [];
if(isset($_POST['email']) and empty($_POST['email']) ){
    $errors['email']= 'Email required';

}else{
    $old_data['email']= $_POST['email'];
}

if(isset($_POST['password']) and empty($_POST['password']) ){
    $errors['password']= 'Password required';

}else{
    $old_data['password']= $_POST['password'];
}


if(count($errors) == 0){

    echo 'data received';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data_to_save = "{$email}:{$password}\n";
    $saved =append_line("credits",$data_to_save);
    var_dump($saved);
    if($saved){
        header('Location: users.php');
    }
}else{
    $errors_str = json_encode($errors);
    $url= "Location: myform.php?errors={$errors_str}";
    if ($old_data){
        $old_data = json_encode($old_data);
        $url.="&old_data={$old_data}";

    }
    header($url);



}





//    echo "<a href='users.php'  class='btn btn-primary'>Show All users </a>"
?>













