<?php
//it has no index ,it has key and value
//index array
$user=["user1","user2","user3","user4","user5"];

//associative array
$userdetails=["name"=>"soumya","age"=>20,"gender"=>"male","city"=>"Bhubaneswar"];
// echo $userdetails["name"]."<br/>";
// echo $userdetails["age"]."<br/>";
// echo $userdetails["gender"]."<br/>";
// echo $userdetails["city"]."<br>";

foreach($userdetails as $key=>$value){
    echo $key." : ".$value."<br/>";
}
echo "<h2>"."User details"."</h2>";
foreach($userdetails as $key=>$value):
   
    echo $key." : ".$value."<br/>";
endforeach;

?>