<?php
//foreach is used in loops
//foreach is used in multiple arrays
//we can use foreach loop inside  another foreach loop
$users=["tony","hulk","thor","wanda"];
foreach($users as $u){
    
    if($u=="hulk"){
        // break;
        continue;
    }
    echo "<h3 style='color:green'>".$u."</h3>"."<br>";
}

foreach($users as $x):
    echo "<h3 style='color:red'>".$x."</h3>"."<br>";
    endforeach




?>