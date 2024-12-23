<?php
//Write a PHP program to find the sum of the digits of a given number
function sumOfDigits($num) {
    $sum = 0;
    while ($num > 0) {
        $digit=$num % 10;
        $sum += $digit;
        $num = (int)($num / 10);
    }
    return $sum;
}

echo "Sum of digits: " . sumOfDigits(1234);
?>
