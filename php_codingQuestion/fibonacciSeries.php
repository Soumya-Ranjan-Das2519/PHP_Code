<?php
//Write a PHP program to print the Fibonacci series up to a given number.
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i-1] + $fib[$i-2];
    }
    return $fib;
}

print_r(fibonacci(10));
?>
