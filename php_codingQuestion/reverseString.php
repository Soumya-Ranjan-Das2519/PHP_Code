<?php
//Write a PHP program to reverse a given string.

$str = "licky";
function ReverseString($str) {
    return strrev($str);
}

echo "Original String:  $str \n";
echo "<br>";

echo "Reversed String:".  ReverseString($str) ;


?>