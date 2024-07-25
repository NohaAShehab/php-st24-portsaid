<?php


require 'connection_credits.php';
require 'connect_to_db.php';


# function select
generatetitle("Select", 'purple');

$db = connect_to_database($DB_DATABASE,$DB_HOST, $DB_USER, $DB_PASSWORD);
var_dump($db);


# to select data

$select_query = "select * from `users`;";

# execute the query ?
$res = $db->query($select_query);
var_dump($res);

# to fetch the result ?

$rows = $res->fetchAll(PDO::FETCH_ASSOC);  # fetch all rows as assoc. array
var_dump($rows);


display_to_table($rows);






