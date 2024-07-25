<?php

include '../pdo/connect_to_db.php';
include '../pdo/connection_credits.php';

echo "<h1> Welcome to my PHP Server </h1>";


$errors = [];
$old_data = [];

if(isset($_POST['name']) and empty($_POST['name']) ){
    $errors['name']= 'Name required';

}else{
    $old_data['name']= $_POST['name'];
}

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


    # save data to the database
    #
    var_dump($_POST);

    $name=  "'$_POST[name]'";
    $db = connect_to_database($DB_DATABASE,$DB_HOST, $DB_USER, $DB_PASSWORD);
    try {
//        $insert_query = "INSERT INTO users ( name, password,email) VALUES
//                                              ('{$_POST['name']}','{$_POST['password']}',
//
//                                               '{$_POST['email']}' )";
//
//        var_dump($insert_query);
//        $inserted = $db->query($insert_query);
//        var_dump($inserted);
        # 1- prepare the query
        $insert_query = "INSERT INTO users ( name, password,email) 
        VALUES (:username, :userpassword, :useremail)";
        $inst_stmt = $db->prepare($insert_query);
        # send parameters
        $inst_stmt->bindParam(':username', $_POST['name']);
        $inst_stmt->bindParam(':userpassword', $_POST['password']);
        $inst_stmt->bindParam(':useremail', $_POST['email']);

        # execute
        $inserted =$inst_stmt->execute();
        var_dump($inserted);

        header("Location: userstable.php");


    }catch (Exception $e){
        echo generatetitle("Error", "red");
        echo $e->getMessage();
    }


    # connect to db


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













