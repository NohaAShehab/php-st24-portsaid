<?php
include 'base.php';
    generatetitle("Abstract Classes");

    # define general architecture ??

Abstract class Engine {
    public $type ;
    abstract function canMove();
}
//$e = new Engine();


class Car extends Engine {
    # override abstract method
    public function canMove()
    {
        // TODO: Implement canMove() method.
    }
}

$car = new Car();
var_dump($car);





Abstract class Machine extends Engine {

    abstract function canWork();
}

# you can extend one parent at time ??

class Buss extends Machine {
    function canWork(){

    }
    public function canMove()
    {
        // TODO: Implement canMove() method.
    }
}

$b = new Buss();
var_dump($b);