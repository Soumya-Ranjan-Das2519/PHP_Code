<?php
$nm="anjan";
// function getName(){
//     $name="soumya";//local variavle
//     echo "Local variable:".$name."<br>";


//     // echo $nm;//we can't print the global variable inside the function.


//     global $nm; // we can access the global variable inside the function using the global keyword.
    
//     echo "Global variable:".$nm;
// }
// getName();
// // echo "Global variable:".$nm;

// // echo $name;//we can't print the local variable out side function.

$name="srd";
function getName() {
    $name="peter";
    echo "Local variable: ".$name."<br>";
    function innerName(){
        global $name;
        echo "Inner variable: ".$name."<br>";
    }
}
getName();
innerName();
echo "Global variable: ".$name;

?>