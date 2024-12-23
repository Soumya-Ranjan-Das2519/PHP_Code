<?php
//Write a PHP program to find the largest number in an array.


function findLargest($arr) {
    return max($arr);
}

$array = [10, 20, 5, 8, 30];
echo "Largest number is: " . findLargest($array);



?>