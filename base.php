<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';
echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>';

//echo '<div style="background-color: antiquewhite" class="container"> ';

echo '<div  class="container"> <pre style="font-family: Courier New, Courier, monospace;">';
//echo '<div class="container">';
# to write function in php ??

function generatetitle($title, $color='black', $size=1){
    echo "<hr>";
    echo "<h{$size}  style='color:{$color}'>{$title}</h{$size}>";
}
