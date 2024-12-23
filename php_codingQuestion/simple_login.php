


<?php
//Write a PHP script for a basic login system using hardcoded credentials.

$username = "admin";
$password = "password123";

$inputUser = "admin";
$inputPass = "password123";

if ($inputUser === $username && $inputPass === $password) {
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}
?>
