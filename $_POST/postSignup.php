<?php
// echo "signup page";
print_r($_POST);
echo "<br/>";
if($_POST){
    echo "username is:".$_POST["username"];
    echo "<br>";
    echo "user Email is:".$_POST["user_email"];
    echo "<br>";
    echo "user Password is:".$_POST["user_password"];
}



?>