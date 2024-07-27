<?php

    include 'base.php';
    generatetitle("Using functions", 'red');


    # 1- define function

    function printhi(){
        echo "<h3>Hi</h3>";
    }

    # to call function
    printhi();

    generatetitle("function accept variables");

    function sumnum($num1, $num2)
    {
        var_dump($num1 + $num2);
    }


    sumnum(1, 2);

    sumnum(3.4, 33.33);


    generatetitle("restrict type of param ", 'blue', 3);

    function sumnum2(int $num1, int $num2)
    {
        var_dump($num1 , $num2);
    }
    sumnum2(1, 2);
//    sumnum2("iti", "php");


    generatetitle("functions with default params ");

    function sumnum3($num1, $num2=7){
        echo "num1={$num1} , num2={$num2}, sum=";
        var_dump($num1 + $num2);
    }

    sumnum3(3,4);

    sumnum3(4);


    generatetitle("Function with variable arguments", 'blue');

    function total_salaries(... $salaries){

        print_r($salaries);
    }

    total_salaries(4,3, 4, true, 'dsf');
    total_salaries();


    generatetitle("Return", 'green');

    function total_salaries2(... $salaries){
        $total_salaries = 0;
        foreach ($salaries as $sal){
            $total_salaries +=$sal;
        }
        return $total_salaries;
    }


    $res = total_salaries2(3,4,5,3,324,33,33);
    var_dump($res);






    generatetitle("Call by value", 'orange');

    $var1 = 10;
    $var2= 20;

    function myfun($anyval1, $anyval2)
    {
        $anyval1 *=10;
        $res = $anyval1 + $anyval2;
        var_dump($res);
    }

    myfun($var1, $var2);

    var_dump($var2, $var1);

generatetitle("Call by reference", 'orange');

$var1 = 10;
$var2= 20;

function myfun2(&$anyval1, &$anyval2)
{
    $anyval1 *=10;
    $res = $anyval1 + $anyval2;
    var_dump($res);
}

myfun2($var1, $var2);

var_dump($var2, $var1);

















































































