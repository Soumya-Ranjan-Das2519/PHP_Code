<?php
/*
Inheritance in php:-
 1.the process of transfermission of genes from parent to offspring.
 2.passing features from parent class to child class
 3. the ability of a child class to inherit properties and methods from a parent class.

*/

class UserAuth{
    function login($userType){
        echo "$userType logged in:";
        echo "<br>";
    }
}

class Students extends UserAuth{
    function getName($name){
        echo $name;
    }

}
class Teacher extends UserAuth{
    function getSkill($skill){
        echo $skill;
    }

}
$s1=new Students();
$s1->login("Students");
echo
$s1->getName("LICKY");
echo "<br>";
$t1=new Teacher();
$t1->login("Teacher");
// echo "<br>";
$t1->getSkill("DSA,OS,SE,WEB TECHNOLOGY");


?>