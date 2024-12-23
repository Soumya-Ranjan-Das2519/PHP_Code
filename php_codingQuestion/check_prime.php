<?php
//Write a PHP function to check if a given number is a prime number.

function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$number = 4;
echo $number . " is " . (isPrime($number) ? "a prime number." : "not a prime number.");
?>



