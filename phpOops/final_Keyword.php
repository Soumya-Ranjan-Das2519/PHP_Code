<?php
/*



*/
//Fatal error: Cannot override final method Honda::__construct()
class Honda{
     function __construct(){
        echo "Honda:it is a car company";
      echo "<br>";

    }

}
 class Cars extends Honda{
    function __construct(){
        parent::__construct();
        echo "Cars: it is a vehicle";
        echo "<br>";
    }

}
$car=new Cars();






class Tata{
    //Fatal error: Cannot override final method Tata::__construct() 
    function __construct(){
       echo "TATA:it is a car company";
       echo "<br>";

   }

}
class Nexon extends Tata{
   function __construct(){
       parent::__construct();
       echo "NEXON: it is a vehicle";
   }

}
$cars=new Nexon();



?>