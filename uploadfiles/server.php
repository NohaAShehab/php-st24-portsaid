<?php

include '../base.php';
require '../form_validation/utils.php';
echo "<h1> Welcome to my PHP Server </h1>";


$errors = [];
$old_data = [];

//print_r($_FILES['image']['name']);
////var_dump(pathinfo($_FILES['image']['name'])['extension']);
//exit();

//var_dump(pathinfo($_FILES['name'])["extension"]);

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

if(isset($_FILES['image']) and empty($_FILES['image']['tmp_name']) ){
    $errors['image']= 'Image required';
}else{
    $extension = pathinfo($_FILES['image']['name'])['extension'];
    if ( !in_array($extension, ["jpg", "png", "jpeg", "gif"])){
        $errors['image']= 'the uploaded file is not a jpg or png image';
    }

}

## check extension of image ?? png. jpg , jpeg



if(count($errors) == 0){

    echo 'data received';
    var_dump($_POST);
    generatetitle("Get info about uploaded file");
    print_r($_FILES);

    $temp_name = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];

    ### move image to path on the server
    $uploaded =move_uploaded_file($temp_name,"images/{$image_name}");
    if($uploaded){
        generatetitle("Successfully saved the image", 'Green');
        echo "<img src='images/{$image_name}' alt='Green' width=200 height='200'>";
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













