<?php

include '../base.php';

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
    $users = ['ahmed@gmail.com', 'noha@gmail.com', 'mohamed@gmail.com', 'ali@gmail.com'];
    $password = '123';
    echo 'data received';
    if(in_array($_POST['email'], $users)  and $password == $_POST['password']){

        generatetitle("User logged in successfully", 'Green');
        # 1- I will start a session
        session_start();
        # then save username in this session
        $_SESSION['user'] = $_POST['email'];
        $_SESSION['login']=true;
        # then redirect to homepage
        header('Location: homepage.php');
    }
    else{
        generatetitle("User logged in failed", 'red');
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













