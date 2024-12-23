<?php
//Write a PHP program to check if a given number is an Armstrong number (a number that is equal to the sum of its own digits each raised to the power of the number of digits).


function isArmstrong($num) {
    $digits=strlen($num);
    $sum=0;
    $temp=$num;
    while($temp>0){
        $rem=$temp%10;
        $sum=$sum+pow($rem,$digits);
        $temp=(int)($temp/10);
    }
    return $sum==$num;
}
$number=1534;
echo isArmstrong($number) ?"$number is Armstrong number":" $number is Not an Armstrong number";



?>