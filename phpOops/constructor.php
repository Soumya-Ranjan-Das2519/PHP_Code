<?php
/*  Constructor in php:
->A sepecial function in class

->call automatically when an object is created.

-> __construct is fixed name for constructor.
*/

class constructor{
    // function setName(){
    //     echo "hello,World";
    //     echo "<br>";
    // }
   function __construct($nam){
    echo $nam;
    echo "<br>";
   }
}
$cons=new constructor("hello,soumya");
// $cons->setName();


class constructor1{
    public $name;
    function __construct($nm){
        $this->name=$nm;
        echo "Hello,".$this->name;
        echo "<br>";
    }
    function displayName(){
        $this->name;
    }
}
$cons1=new constructor1("licky");
$cons1->displayName();





?>