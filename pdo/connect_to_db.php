<?php

function connect_to_database($DB_DATABASE,$DB_HOST, $DB_USER, $DB_PASSWORD)
{
    $dsn = "mysql:dbname={$DB_DATABASE};host={$DB_HOST};port=3306;"; #port number

    try {
        $db = new PDO($dsn, $DB_USER, $DB_PASSWORD);
//        var_dump($db);
        return $db;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        return false;
    }

}

function display_to_table($rows){
    echo '<table class="table">  <tr> <th>ID</th> <th> Name</th> <th>Password</th> <th>Email</th>
        <th> Show</th> <th> Edit </th> <th>Delete</th> </tr>';'
        </tr>';
    foreach($rows as $row){

       echo "<tr> <td> {$row['id']}</td>
        <td> {$row['name']}</td>
        <td> {$row['password']}</td>
        <td> {$row['email']}</td>
        <td> <a href='' class='btn btn-info'> Show</a></td>
        <td> <a href='../register_demo/edit_user.php?id={$row['id']}' class='btn btn-warning'> Edit</a></td>
        <td> <a href='../register_demo/delete_user.php?id={$row['id']}' class='btn btn-danger'> Delete</a></td>
        </tr>";
    }
    echo "</table>";
}


function select_all_from_table($db, $tablename){

    try {
        $select_query = "select * from `{$tablename}`;";
        $res = $db->query($select_query);


        $rows = $res->fetchAll(PDO::FETCH_ASSOC);  # fetch all rows as assoc. array
//        var_dump($rows);
        return $rows;

    }catch (Exception $e){
        return false;
    }
}