<?php
// $user="peter";
// $user1="soumya";
$user=array("soumya","peter","anjan");
$user1=["soumya","anubhaba","anjan"];
echo $user1[2]."<br>";

print_r($user1);
echo "<br>";
echo count($user1)."<br>";
for($i=0;$i<=count($user1)-1;$i++){
echo "<h2 style='color:red'>".$user1[$i]."</h2>";
echo "<br>";
}


?>