<?php


    include 'base.php';

    generatetitle("Closure  with Classes");
    # define general functionality ---> works with different types
    # of object



    class Student{
        public $name;
        function __construct($name){
            $this->name = $name;
        }

        function printName(){
            echo $this->name;
        }
    }


    $s = new Student("Ahmed");
    $s->printName();


    class Course{
        public $name='PHP';
        function printName(){
            echo $this->name;
        }
    }

    $c=  new Course();
    $c ->printName();





############33 more general

$printClosure = function (){
    echo "<h3>$this->name</h3>";
};

class Person{
    public $name='Ahmed';
    public $age = 10;
    private $sal =1000;
}


class Car{
    public $name= "BMW";
}

$p = new Person();
$c = new Car();

# bind object to the closure ?
$personobj=$printClosure->bindTo($p);
var_dump($personobj);
$personobj();

$printClosure->bindTo($c)();

#############################
$printProperty = function($propertyname){
    echo "<h1 style='color: brown'>{$this->$propertyname}</h1>";
};

class Shape{
    public $dim=10;
}

$s = new Shape();

$printProperty->bindTo($s)("dim");


class Emp{
    public $email='Ahmed';
}

$e = new Emp();
$printProperty->bindTo($e)("email");

generatetitle("closure and private memebers");
class Member{

    private $address = 'portSaid';
}

$m = new Member();
//$printProperty->bindTo($m)("address");
# from php 7 --> closure can access private members ??

$res=$printProperty->call($m, 'address');


//var_dump($res);

# using bind to to access private members
$printProperty->bindTo($m, Member::class)("address");

# Route::get("/home", [UserContro::class, 'fff'];





















































