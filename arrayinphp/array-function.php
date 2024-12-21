<?php
$users=["soumya","anubhaba","anjan","biswajit"];
print_r($users);
echo"<br>";
array_push($users,"licky");
print_r($users);
echo"<br>";
array_pop($users);
print_r($users);
echo"<br>";
array_pop($users);
print_r($users);
echo"<br>";
array_splice($users,-2);
print_r($users);

?>