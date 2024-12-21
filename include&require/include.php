<?php

//include(): always gives the warning,it can be hide/remove.
//But require():give the warning and give the fatal error i can't execute the code.

// include './helloWorld.php';
// for($i=0;$i<=10;$i++) {
//     include './helloWorld.php';
//    }
for($i=0;$i<=10;$i++) {
 include_once './helloWorld.php';
}



?>