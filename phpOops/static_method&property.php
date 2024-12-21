<?php
/*


*/
class Honda{
        static public $product="vehicle";
        static function companyName(){
        echo "Honda";
    }
}
// $honda=new Honda();
// $honda->companyName();

Honda::companyName(); //Static method call using class name directly.
echo "<br>";

echo Honda::$product; //Static property access using class name directly.

?>