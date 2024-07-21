<?php

# include content from other script
include 'base.php';

echo "<h1> 1- define variable </h1>";

$name = 'ahmed';
$Name= 'Ali';

var_dump($name); # string
var_dump($Name);

$age= 32;
var_dump($age); # int ?
/****************** scoping ***************/

generatetitle('Scoping', 'red', 2);

# global variable ? --> can be accessed anywhere
# in the script >> except inside the function

$email = 'ahmed@gmail.com'; # global
var_dump($email);

//
function printHello(){
    echo "<h3>Hello world </h3> {$email} ..";

}

//printHello();

generatetitle("Local variables");
# check this
function printHello2(){
    $email =  'test@gmail.com'; # local variable
    # can be accessed only inside the function
    echo "<h1>Hello world </h1>{$email} ..";

}
//printHello2();


generatetitle("access global variables from inside functions",
'green', 4);

# keyword --> global

$city='portsaid';
function getCity(){
    global $city;
    echo $city;
    $city = 'Cairo';
}
//getCity();
//var_dump($city);
/********************************/
generatetitle("Paramter Scope ", 'purple', 1);

function sumnum($num1, $num2){
    $res = $num1 + $num2;
    var_dump($res);
}

//sumnum(1,2);
//var_dump($num1);

generatetitle("Constant ", 'purple', 1);
/** constant can be accessed from inside
 * and outside the function */
const pi = 3.14;
var_dump(pi);

//pi='updated';

function printInfo(){
    generatetitle(pi);
}
//printInfo();



generatetitle("Static");

function counter(){
    $count = 0;
    $count +=1;
    generatetitle($count, 'purple', 1);

}

//counter();
//counter();


# variables with static scope
# will not be destroyed if the function
# is ended
function count_calls(){
    static $count = 0;
    $count +=1;
    $data= 'dsfff';
    generatetitle($count, 'purple', 1);

}
//count_calls();
//count_calls();
//count_calls();
//
//echo "0000000000000";
//count_calls();


generatetitle("Super global", 'red');
# can be accessed anywhere in the script ?


# $_POST, $_GET, $_REQUEST, $_SESSION#
# $_COOKIE

$_GET['id']=10;
var_dump($_GET);

function printGET()
{
    var_dump($_GET);
}

printGET();



generatetitle(
    "casting"
);

$var1 = 0;
$var2 = (float)$var1;
var_dump($var2);

$name= 'noha';
$name = (int)$name;
var_dump($name);


# check if variable is array ?
if (is_array($_GET)) {

    foreach ($_GET as $value) {
        echo $value . "<br>";
    }
}else{
    echo $_GET;
}




$test = 'hiiiiiiiii';
if (is_array($test)) {

    foreach ($test as $value) {
        echo $value . "<br>";
    }
}else{
    echo "here ".$test;
}



