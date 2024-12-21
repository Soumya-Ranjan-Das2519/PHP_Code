<?php
//multidimensional array/nested array
$user=[
    [1,"soumya","bbsr"],[2,"anjan","bdrk"],[3,"anubhaba","jjpr"],[4,"suvendu","kndrpd"]
];
// echo "<pre>";
// print_r($user);
// echo "<pre>";

for($i=0;$i<count($user);$i++){
    //  print_r($user[$i]);
    //  echo "<br/>";
    for($j=0;$j<count($user[$i]);$j++){
        echo $user[$i][$j];
        echo "<br/>";
}
}

?>