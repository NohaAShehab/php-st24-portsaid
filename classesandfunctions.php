<?php


include "base.php";
generatetitle("Functions in php classes");
class  Student
{

    public $name='ahmed';
    protected $email='ahmed@gmail.com';
    private $grade=100;

    function __construct($name, $email, $grade){
//        echo "<p style='color: darkmagenta;font-weight: bold'>object is being created</p>";

        $this->name=$name;
        $this->email=$email;
        $this->grade=$grade;
    }

    function __destruct(){
        echo "<h1 style='color: red'>Object has been destroyed:{$this->name}</h1>";
    }

    # functions in php class have access modifiers
    # default 0-> public
    function printStd(){
        echo "<p style='color: darkmagenta;font-weight: bold'>Student($this->name,$this->email, $this->grade)</p>";
    }
}




$s = new Student("ahmed", "ahmed@gmail.com", "100");
$s->printStd();;





generatetitle("use functions to access private , protected members");

class  Student2
{

    public $name='ahmed';
    protected $email='ahmed@gmail.com';
    private $grade=100;

    function __construct($name, $email, $grade){
//        echo "<p style='color: darkmagenta;font-weight: bold'>object is being created</p>";

        $this->name=$name;
        $this->set_Email($email);
        $this->set_Grade($grade);
    }

    function __destruct(){
        echo "<h1 style='color: red'>Object has been destroyed:{$this->name}</h1>";
    }

    # functions in php class have access modifiers
    # default 0-> public
    function printStd(){
        echo "<p style='color: darkmagenta;font-weight: bold'>Student($this->name,$this->email, $this->grade)</p>";
    }

    function set_Email($email){
        # to apply specific logic
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        }else{
            throw new Exception("Invalid email address");
        }
    }

    function set_Grade($grade)
    {
        if(gettype($grade) == "integer" and $grade>0 and $grade<=100){
            $this->grade = $grade;
        }else{
            throw new Exception("Invalid grade");
        }
    }
}

$s22 = new Student2("ahmed", "ahmed@gmail.com", 100);

//$s22->set_Email("noha@gmail.com");

var_dump($s22);


//$s22->set_Grade("iti");



generatetitle("Self keyword");
class  Student4
{
        static  $count = 0;
    public $name='ahmed';
    protected $email='ahmed@gmail.com';
    private $grade=100;

    function __construct($name, $email, $grade){
//        echo "<p style='color: darkmagenta;font-weight: bold'>object is being created</p>";

        $this->name=$name;
        $this->set_Email($email);
        $this->set_Grade($grade);
        self::$count ++;
    }
    function set_Email($email){
        # to apply specific logic
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        }else{
            throw new Exception("Invalid email address");
        }
    }


    function set_Grade($grade)
    {
        if(gettype($grade) == "integer" and $grade>0 and $grade<=100){
            $this->grade = $grade;
        }else{
            throw new Exception("Invalid grade");
        }
    }

    // getters

    function getEmail(){
        return $this->email;
    }
    function getGrade(){
        return $this->grade;
    }

}

$s = new Student4("ahmed", "ahmed@gmail.com", 100);
var_dump($s);
var_dump($s->getGrade());
var_dump($s->getEmail());

















