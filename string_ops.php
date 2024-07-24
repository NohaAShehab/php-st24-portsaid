<?php

include 'base.php';

generatetitle('Trim');
$text = "\t\tThese are a few words :) ...";
var_dump($text);
$trimmed = trim($text);
var_dump($trimmed);


$text = "\t\tThese are a few words :) ...";
var_dump($text);
$trimmed = trim($text, "\tThe");
var_dump($trimmed);

$str="\nYou came
to me
in that hour
of need ";
echo nl2br($str);

generatetitle("StringToupper/lower");
$string= "welcome to iti";
echo strtoupper($string)."</br>";
echo strtolower($string)."</br>";
echo ucfirst($string)."</br>";
echo ucwords($string)."</br>";


generatetitle(ucfirst($string), 'red');
generatetitle(($string), 'green');


generatetitle("Format string to storage");

$str = "What's your name's 's 's ?";
//var_dump($str);

echo addslashes($str);

$strr= addslashes($str);

echo stripcslashes($strr);

generatetitle("join/split/string", 'blue');


$InputArray = array('OS','Application','Track');
// Join without separator
print(implode($InputArray));
echo "<br>";

echo implode("_", $InputArray);

echo "<br>", join("#", $InputArray);

$str="I love coffee so much";
$arrstr=explode(" ",$str);
print_r($arrstr);

############################
generatetitle("String comparing", 'orange');
$var1 = "Hello";
$var2 = "hello";
if (strcmp($var1, $var2) !== 0) {
    echo '$var1 is not equal to $var2 in
a case sensitive string comparison';
}

# ignore the cases
$var1 = "Hello";
$var2 = "hello";
if (strcasecmp($var1, $var2) !== 0) {
    echo '$var1 is not equal to $var2 in
a case sensitive string comparison';
}else{
    generatetitle("Equal");
}

#####################################


$str="Welcome to php";
var_dump(strlen($str));


generatetitle("MD5");


$string = 'Hello World!';
$testt= md5($string);
echo($testt)."<br>";




$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "$", "Hello World of PHP");
echo $onlyconsonants."<br>";

generatetitle("String validation");
$email='nshehaiti.gov.eg';
$pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
if(preg_match($pattern,$email)){
    echo "<br>".'well formed';
}else{
    echo "<br>".'not well formed';
}


###############################33



$email="nohashehab.itl.com";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    echo "<br>",$emailErr;
}else{
    echo "<br>".'Checked by php functions and well formed';
}












































































