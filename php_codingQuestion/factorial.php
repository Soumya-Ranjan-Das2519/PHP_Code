<?php
//Write a PHP function to find the factorial of a number using recursion.
/*function factorial($num){
    if($num==0 || $num==1){
        return 1;
    }
    else{
        return $num*factorial($num-1);
    }
}
$num = 5;
echo "Factorial of $num is: " . factorial($num);*/

//Write a PHP function to find the factorial of a number using  iteration 
function factorial($n) {
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

echo "Factorial: " . factorial(5);



?>