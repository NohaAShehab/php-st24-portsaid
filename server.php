<?php


echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';
echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>';

echo '<div class="container"> ';

echo "<h1> Welcome to my PHP Server </h1>";

// I need to access the parms received by sever ??
// server accept parms in array $_REQUEST // $_GET // $_POST;

echo $_REQUEST;  // echo print content of variable if it can be represented as string
echo "<br>";
// var_dump
echo '<h1> request </h1>';
var_dump($_REQUEST);
echo '<h1> get </h1>';
var_dump($_GET);
echo '<h1> post </h1>';
var_dump($_POST);

# to get name
echo "<p> email= ", $_POST["email"], '</p>';

echo '<p> email= {$_POST["email"]} </p>';  # print content of the string as it is
echo "<p> email= {$_POST['email']} </p>";  # print content after parsing string






















