<?php

require '../pdo/connection_credits.php';
require '../pdo/connect_to_db.php';

//    var_dump($_GET);

    # get id of object ??
//
$db = connect_to_database($DB_DATABASE,$DB_HOST, $DB_USER, $DB_PASSWORD);
if(isset($_GET['id'])){
    $id = $_GET['id'] ;

    if($db){
        try{
            $selected_query = "select * FROM users WHERE id=:id";
            $stmt = $db->prepare($selected_query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            #
            $row= $stmt->fetch(PDO::FETCH_ASSOC);
//            var_dump($row);




        }catch (PDOException $e){
            generatetitle("Error while deleting record");
            echo $e->getMessage();
        }
    }
}
?>
<div class="container">
<form action="" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1"
               name="name"
               value="<?php echo $row['name']?>"
               aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1"
               name="email"
               value="<?php echo $row['email']?>"
               aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password"
               value="<?php echo $row['password']?>"

               class="form-control" id="exampleInputPassword1">

    </div>
    <button type="submit"   class="btn btn-primary">Submit</button>
</form>
</div>