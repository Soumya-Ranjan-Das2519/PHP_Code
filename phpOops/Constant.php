<?php
/*
CONSTANT IN PHP:
1.how to declare a constant within a class.


*/
class Constant{
     protected const collegeName="USBM";
    function getCollegeName(){ 
    //   echo self::collegeName;//output: "USBM";
    echo Constant::collegeName;//output: "USBM"; 
      echo "<br>";
    }

}

class child extends Constant{
    function getChildName(){
        echo self::collegeName;
        echo "<br>";
    }
}

// echo Constant::collegeName;

$child= new child();
 echo "<br>";
$child->getChildName();



$clg=new Constant();
echo "<br>";
$clg->getCollegeName();


?>