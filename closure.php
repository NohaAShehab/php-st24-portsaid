<?php
include 'base.php';
generatetitle("Closure,function without name", 'red',3);

function (){
    echo "Welcome to closure";
};


$myclosure=function (){
    echo "Welcome to closure";
};

var_dump($myclosure);

# check if it is callable or not ?
var_dump(is_callable($myclosure));
$x = 10;
var_dump(is_callable($x));


# you can closure
$myclosure();

generatetitle('where can i use it ?');

# callback function
//function myfunction ($callbackfunction)
//{
//    $res = 'abc';
//    $callbackfunction($res);
//    echo "Test";
//}
//
//
//
//myfunction(function($var){echo "<{$var}>";});


# higher order function
# function accept function, return function ?
function sumnum($num1, $mulfun){
    echo $mulfun($num1);
}

$mul_closure = function($num1){
    return "<h4> Hi  {$num1}</h4>";
};

sumnum(10,$mul_closure);











###############

function myfun2($name){
    $name = strtoupper($name);
    echo $name;
    return function ($anyvar){
        echo "<h1>{$anyvar}</h1>";
    };
}


$res=myfun2("Noha");
var_dump($res);
//
$res("abc");


myfun2("Ahmed")("ITI");

generatetitle("closure use the function var");

function myfun3($name){
    $name = strtoupper($name);
    echo $name;
    return function () use ($name){
      echo "<h1 style='color: purple'>{$name}</h1>";
    };

}

myfun3("Noha");

myfun3("test")();





























