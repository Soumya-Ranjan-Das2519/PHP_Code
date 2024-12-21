<?php
/*
Overriding Method and Property:
1.child class has the same method or property name as the parent class
2.But child class has different implementation of methods or properties 





*/
class Teacher{
    public $city="bbsr";
    function __construct(){
        echo "Teacher's constructor";
        echo "<br>";
    }
    function age(){
        echo "Teacher's age is 50";
        echo "<br>";
    }
}
class Student extends Teacher{
    public $city="tokyo";
    function age(){
        echo "Student's age is 15";
        echo "<br>";
    }
}
$std=new Student();
$std->age();
echo $std->city;



?>