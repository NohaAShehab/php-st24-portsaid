<?php

    include 'base.php';

    generatetitle("Arrays", 'red');

    $arr = ['eee', 33, 33.44, true];
    var_dump($arr);

    # get count of elements
    var_dump(count($arr));
    var_dump(sizeof($arr));

    # access elements ?
    var_dump($arr[2]);

    #  get elements
    for($i = 0; $i < count($arr); $i++) {

        echo "<li> {$arr[$i]} </li>";
    }
    echo '<hr>';
    # foreach ?
generatetitle('item ');
    foreach($arr as $item) {
        echo "<li> {$item} </li>";
    }

    # print item , index
    generatetitle('item , index');

    foreach($arr as $index => $item) {
        echo "<li>{$index}=>{$item} </li>";
    }


    generatetitle("Array from range", 'blue');
    $newarr = range(0,10, 2);
//    print_r($newarr);

$newarr = range('a','z', 3);
//print_r($newarr);


generatetitle("Associative array", 'green');

$info = [
    'name'=>'Noha',
    'city'=>'cairo',
    'age'=>32

];

print_r($info);

foreach($info as $item) {
    echo "<li> {$item} </li>";
}

foreach($info as $key=>$item) {
    echo "<li> {$key}=>{$item} </li>";
}




generatetitle("Array from variables");

$email = 'test';
$country = 'egypt';

$newarr = compact("email",'country');
print_r($newarr);



generatetitle('sorting arrays');
$names = array( 'noha', "Fatma", "Dina", "Andrew","Shimaa","suliman" );
sort($names);
var_dump($names);


#####################

$nums =[34,543,44,324,23,22];
sort($nums);
print_r($nums);

###########
$colors = array(
    'one' => 'red',
    'two' => 'blue',
    'three' => 'yellow');
var_dump(array_flip($colors));


generatetitle("in array");
$fruits = ['banana', 'apple'];
$found = in_array('banana', $fruits);
var_dump($found);


generatetitle("Array filter");

$my_array = [1,90,2,null,3,'',55,[],5,6,7,8,"", "iti"];
$non_empties = array_filter($my_array);
print_r($non_empties);













