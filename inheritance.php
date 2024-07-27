<?php

include 'base.php';

generatetitle("Inheritance");
class Person{
    private $nationality = 'Egyptain';
    public $name;
    protected $city;
    private $age;
    public function callingPerson(){
        echo "I am a person";}
}
class Studnet extends Person{
    public $level;

    function set_City($city){
        $this->city = $city;
    }
    public function callingStudent(){
        echo "I am a student";}
}


$s = new Studnet();
var_dump($s);
$s->name = 'noha';
$s->level = 10;
var_dump($s);
$s->callingStudent();
$s->callingPerson();
$s->age = 10;
var_dump($s);;
//$s->city='test';
//var_dump($s);
$s->set_City('PortSaid');
var_dump($s);



generatetitle("inheritance and ---> constructor");

class Base{
    private $country = 'Egypt';
    public  $name='';
    function __construct($name)
    {
            echo "<h1>I am base constructor</h1>";
            $this->name = $name;
    }
}

class Child extends Base{
    public $email= '';
    function __construct($name, $email)

    {
        #call parent constructor
        parent::__construct($name);
        $this->email = $email;
        echo "<h1 style='color: brown'>I am child constructor</h1>";
    }
}


$c =  new Child("nn", "jkhjkgh");
var_dump($c);




#############################################




