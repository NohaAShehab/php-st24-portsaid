<?php

    if(isset($_GET['errors'])){

        $errors= json_decode($_GET['errors'], true);
        if(isset($_GET['old_data'])){
            $old_data = json_decode($_GET['old_data'], true);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<h1 style="text-align: center;" class="h1"> Registration form to Database</h1>
    <div class="container">
        <form action="register.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1"
                       name="name"
                       value="<?php if(isset($old_data['name'])) {echo $old_data['name'];} ?>"
                       aria-describedby="emailHelp">
                <div  class="text-danger" >
                    <?php if(isset($errors['name'])) {echo $errors['name'];} ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1"
                       name="email"
                       value="<?php if(isset($old_data['email'])) {echo $old_data['email'];} ?>"
                       aria-describedby="emailHelp">
                <div  class="text-danger" >
                    <?php if(isset($errors['email'])) {echo $errors['email'];} ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password"
                       value="<?php if(isset($old_data['password'])) {echo $old_data['password'];} ?>"

                       class="form-control" id="exampleInputPassword1">
                <div  class="text-danger" >
                    <?php if(isset($errors['password'])) {echo $errors['password'];} ?>
                </div>
            </div>
            <button type="submit"   class="btn btn-primary">Submit</button>
        </form>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>