<?php

include 'base.php';

generatetitle("tips");

$data= `ls -l`;
var_dump($data);


generatetitle("Variablels functions", 'red');

$name='ahmed';
print(gettype($name));

# type casting ?
$num = 10;
$num = (string) $num;
var_dump($num);

# using setype ?
$salary= 1000;
settype($salary, "float");
var_dump($salary);

generatetitle('isset vs isempty', 'blue');
$test;
var_dump($test);

//var_dump(isset($test)); # false
//var_dump(empty($test));  # true
# #####################
$test = 0 ;
//var_dump(isset($test)); # true
//var_dump(empty($test));  # true

#######################
$test = false ;
//var_dump(isset($test)); # true
//var_dump(empty($test));  # true

###
$test = null ;
var_dump(isset($test)); # false
var_dump(empty($test));  # true
##
$test = "false" ;
var_dump(isset($test)); # true
var_dump(empty($test));  # false

# empty return true --> value represent falsy value
# or doesn't exist

# 0, false , '', []
########################################
$test = [] ;
var_dump(isset($test)); # true
var_dump(empty($test));  # true


















































