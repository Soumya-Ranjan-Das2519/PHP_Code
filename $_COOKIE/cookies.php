<?php
// $fruits="apple";
setcookie("fruits","apple",time()+ 86400,);
setcookie("color","red",time()+ 86400,);

print_r($_COOKIE);
echo "<br>";

if(isset($_COOKIE['fruits'])){
    // print_r($_COOKIE);
    echo "Fruits cookie is set with value: ".$_COOKIE['fruits'];
    echo "<br>";
}
else{
    echo "No cookie found";
}
// echo "<br>";
if(isset($_COOKIE["color"])){
    echo "Color cookie is set with value: ".$_COOKIE["color"];
    echo "<br>";

}else{
    echo "No cookie found";
    echo "<br>";
}

?>