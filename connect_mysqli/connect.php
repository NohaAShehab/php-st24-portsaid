<?php


include '../base.php';

const DB_HOST= "localhost";
const DB_USER="st44";
const DB_PASSWORD= 'iti123456789_';
const DB_DATABASE = 'php_st1';


# to connect to the database
//$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, 3306);
//var_dump($conn);
//
//
//
//$res = mysqli_query($conn,
//    " create table `users` (`id` int primary key auto_increment, `name`
// varchar(40), `password` varchar(20) default NULL, `email` varchar(100) unique)");
//
//
//var_dump($res);
//
//var_dump($conn);


generatetitle("Mysqli_oop");

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

var_dump($conn);

# select data ??

$res = $conn->query('select * from users');
var_dump($res);


# use connection object to fetch data
$rows=$res->fetch_assoc();
var_dump($rows);










