<?php
//you can get the both $_GET and $_POST methods in $_REQUEST
//Basically it is a global variable.
echo "<br>";
// echo "username is :".$_GET["username"];
// echo "<br>";
// echo "user_password is :".$_GET["user_password"];


// if($_POST){
// echo "username is :".$_POST["username"];
// echo "<br>";
// echo "user_password is :".$_POST["user_password"];
// }

// $_REQUEST is a superglobal variable that collects data from both GET and POST methods.

// echo "username is :".$_REQUEST["username"];
// echo "<br>";
// echo "user_password is :".$_REQUEST["user_password"];


print_r($_REQUEST);
echo "<br>";
$_REQUEST["Address"]="bbsr";
if($_REQUEST){
    foreach($_REQUEST as $key=>$req){
        echo "$key is : ".$req;
        echo "<br>";
    }

}

//for practice only
// $x="hello";
// // echo $x;
// $hello="anjan";
// echo $x.",".$$x;




?> 