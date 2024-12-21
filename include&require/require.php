<?php
//require(): give the warning and fatal error messages if any exception is occurring.

require("./helloWorld.php");

// for($i = 0; $i <10; $i++) {
//     require("./helloWorld.php");
// }

for($i = 0; $i <10; $i++) {
    require_once("./helloWorld.php");
}

?>