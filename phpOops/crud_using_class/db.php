<?php
$host="localhost:3307";
$username="root";
$password="";
$dbname="college";
//create connection
 try{
    $conn=new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected successfully";
 }catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage();
 }

?>