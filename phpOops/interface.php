<?php
/*
 what is interface:
 interface tell what methods a class should implement.
 why use interface:
 -> to define features of a class.
 -> to provide a common behavior for different classes.
 -> to make code reusable.
 interface vs abstract Class:
 -->interfaces cannot have properties,while abstract classes can,interface has only methods.
 -->all interface methods must be public and abstract class method are public or protected.
 -->all methods in an interface are abstract,so they canot be implemented in code and the abstarct keyword is not necessary.

*/

interface CarInterface{
    // public $city="bbsr";
    function startEngine();
    function stopEngine();
    /*function start(){
        echo "Car started";
    }//Interface function CarInterface::start() cannot contain body */
}

class MyCar implements CarInterface{
    function startEngine(){
        echo "Engine started";
    }
    function stopEngine(){
        echo "Engine stopped";
    }
}

$myCar=new MyCar();

$myCar->startEngine();
echo "<br>";

$myCar->stopEngine();


?>