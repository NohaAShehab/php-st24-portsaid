<?php


include '../pdo/connect_to_db.php';
include '../pdo/connection_credits.php';

$db = connect_to_database($DB_DATABASE,$DB_HOST, $DB_USER, $DB_PASSWORD);
$u= 'test';
$e ='a@gmail.com';
$p = 'tii';

generatetitle("Insert example");

//try {
//    # prepared statement (PHP, JAVA, Python)
//    # send query to the database as parts ...
        generatetitle("using : placeholder", 'brown', 3);
//    $insert_query = "INSERT INTO users ( name, password,email)
//        VALUES (:username, :userpassword, :useremail)";
//    $inst_stmt = $db->prepare($insert_query);
//    # send the data
//    # prepare the statement
//
//    $inst_stmt->bindParam(':username', $u);
//    $inst_stmt->bindParam(':userpassword', $p);
//    $inst_stmt->bindParam(':useremail', $e);
//    $res=$inst_stmt->execute();
//    var_dump($res);
//
//
//
////    var_dump($insert_query);
////    $inserted = $db->query($insert_query);
////    var_dump($inserted);
//}catch (Exception $e){
//    echo generatetitle("Error", "red");
//    echo $e->getMessage();
//}

$data_to_insert = [['val1', 'val12', 'val13'],[ 'val14', 'val15', 'val16'],['vall4', 'val17', 'val18'],
    ['vall5', 'val19', 'val20']];

generatetitle("Bulk insert example", 'green');
if($db){
        generatetitle("using ? placeholder", 'purple', 3);
        try {
            $insert_query = "Insert into users(`name`, `email`, `password`) values(?, ?,? )";
            $stmt = $db->prepare($insert_query);
            foreach ($data_to_insert as $row) {
                $stmt->execute($row);
            }
            header("Location: ../register_demo/userstable.php");
        }catch (PDOException $e){
            echo $e->getMessage();
        }




}
















