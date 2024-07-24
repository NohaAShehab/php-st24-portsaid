<?php

include '../base.php';

# user must be logged in before opening this page


session_start();
if($_SESSION['login']===true){
    generatetitle("Welcome {$_SESSION['user']} ", 'green');
}else{
    session_destroy();
    header("location: myform.php");
}




?>

<a href="logout.php" class="btn btn-dark"> Logout</a>
