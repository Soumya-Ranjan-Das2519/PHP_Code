<?php
class MathOperation{//we can use the same class name as file name < class="e-MathOperation .php
    public $val=2;
    function sum($a,$b){
       // return $a+$b;
       echo $a+$b+$this->val;
    }
    function mul($a,$b){
        echo $a*$b+$this->val;;
    }
    function sub($a,$b){
        echo $a-$b+$this->val;;
    }
    function div($a,$b){
        echo $a/$b+$this->val;;
    }

}
$maths=new MathOperation();
// echo $maths->sum(10,20);
$maths->sum(10,20);
echo "<br>";
$maths->mul(20,10);
echo "<br>";
$maths->sub(20,10);
echo "<br>";
$maths->div(20,10);

// $add2=new MathOperation();
// $add2->sum(2,22);
// echo "<br>";
// $add3=new MathOperation();
// $add3->sum(3,4);
// echo '<br>';


$math1

?>