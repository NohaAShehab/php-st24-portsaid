<?php

include("base.php");

generatetitle("Define classes", 'red');

class ITI{

}

# take an object from class

$var = new ITI();
var_dump($var);

# loosely dynamically typed lang.
# you can add params in the runtime to the object
$var->name = 'abc';
var_dump($var);
# print value
var_dump($var->name);
var_dump($var->email);

generatetitle("construct class with different properties", 'blue',2);

class  Student
{
    # add properties to the object ?
    # access modifiers , public, protected, private
    public $name;
    protected $email;
    private $grade;

}

$s = new Student();
var_dump($s);

$s2=  new Student();
var_dump($s2);

generatetitle("class with default values", 'blue',2);


class  Student2
{
    # add properties to the object ?
    # access modifiers , public, protected, private
    public $name='ahmed';
    protected $email='ahmed@gmail.com';
    private $grade=100;

}

$s = new Student2();
var_dump($s);

$s2=  new Student2();
var_dump($s2);

$s->name = 'ali';
var_dump($s);
//
//$s->email = 'updated';
//var_dump($s);


/*
 *  ***************** public ************
 * members with public modifiers can be accessed any
 * where inside / outside the class
 * inside class using --> $this
 * outside class --> $obj_ref
 *
 * ***************** protected ************
 * members with protected modifiers can be accessed
 * inside class using --> $this
 * outside class (only in derived class
 *  (classes that inherits from me ) ) --> $this
 *
 * ***************** private ************
 * members with protected modifiers can be accessed
 * inside class only using --> $this
 * ***///


generatetitle("Customize object creation");

class  Student3
{

    public $name='ahmed';
    protected $email='ahmed@gmail.com';
    private $grade=100;

    function __construct($name, $email, $grade){
        echo "<p style='color: darkmagenta;font-weight: bold'>object is being created</p>";

        $this->name=$name;
        $this->email=$email;
        $this->grade=$grade;
    }

}


$s = new Student3("ahmed", 'ahmed@gmail.com', 50);
var_dump($s);


$s3= new Student3("Ali", 'ali@gmail.com', 50);
var_dump($s3);


generatetitle("Destructors", 'blue',2);

class  Student4
{

    public $name='ahmed';
    protected $email='ahmed@gmail.com';
    private $grade=100;

    function __construct($name, $email, $grade){
        echo "<p style='color: darkmagenta;font-weight: bold'>object is being created</p>";

        $this->name=$name;
        $this->email=$email;
        $this->grade=$grade;
    }

    function __destruct(){
        echo "<h1 style='color: red'>Object has been destroyed:{$this->name}</h1>";
    }
}


//$s = new Student4("ahmed", 'ahmed@gmail.com', 50);
//var_dump($s);
//
//# destroy object ealier?
//unset($s);
//
//
//$s3= new Student4("Ali", 'ali@gmail.com', 50);
//var_dump($s3);

var_dump("abc");
var_dump("djksd");

generatetitle("Static members", 'green', 1);

class  Student5
{
    # count --> property represent class

    static  $count= 0 ;
    /** Properties represent object not the class ***/
    public  $object_count=0;
    public $name='ahmed';
    protected $email='ahmed@gmail.com';
    private $grade=100;

    function __construct($name, $email, $grade){
        echo "<p style='color: darkmagenta;font-weight: bold'>object is being created</p>";

        $this->name=$name;
        $this->email=$email;
        $this->grade=$grade;
        Student5::$count +=1;
        $this->object_count +=1;
    }

    function __destruct(){

        Student5::$count -=1;
        $count = Student5::$count;
        echo "<h1 style='color: red'>Object has been destroyed, remianing {$count} objects </h1>";
    }

}


$s11 = new Student5("ahmed", 'ahmed@gmail.com', 50);
$s12= new Student5("Ali", 'ali@gmail.com', 50);
$s13= new Student5("lli", 'ali@e.com', 50);

#
var_dump(Student5::$count);

unset($s11);
var_dump(Student5::$count);
var_dump($s13->object_count);















