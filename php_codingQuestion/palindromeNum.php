<?php
//Write a PHP program to check if a given string is a palindrome.

function isPalindrome($str) {
    return $str === strrev($str);
}

$string = "level";
echo $string . " is " . (isPalindrome($string) ? "a palindrome." : "not a palindrome.");


?>