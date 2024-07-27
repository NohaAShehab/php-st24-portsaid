<?php


include "base.php";


trait general {
//
//    # grouping of functions
    function printName()
    {
        echo "<h1> {$this->name}</h1>";
    }
    function printHi(){
        echo "<h1>Hi</h1>";
    }
}

//class Student{
//    private $name='Ahmed';
//
//    function printName()
//    {
//        echo "{$this->name}";
//    }
//
//}
//
//
//$s = new Student();
//$s->printName();



class Student{
    use general;
    private $name='Ahmed';

    function test()
    {
     print ("test");
    }

    # override hi function in trait
    function printHi()
    {
        print ("hi from student");
    }

}


$s = new Student();
$s->printName();
$s->printHi();

class Employee extends Student {
    use general;
    private $name='ali';
}

$e = new Employee();
$e->printName();
$e->test();









