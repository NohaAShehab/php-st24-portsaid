<?php
include("base.php");

Interface Engine {
    public function setModel($model);
    public function setYear($car);
}


Interface  Vehicle {

    public function setSpeed($model);

}

class Car  implements Vehicle , Engine {
    # implment the methods
    public function setSpeed($model)
    {
        // TODO: Implement setSpeed() method.
    }
    public function setYear($car)
    {
        // TODO: Implement setYear() method.
    }
    public function setModel($model)
    {
        // TODO: Implement setModel() method.
    }

}

$c= new Car();


