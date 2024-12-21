<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multi and associative array</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 class="text-center">3x3 Bootstrap Table</h2>
<?php
$users=[
 [ 'name' =>"soumya","age"=>30,"city"=>"bbsr"],
 [ 'name' =>"anjan","age"=>30,"city"=>"bripda"],
 [ 'name' =>"prakash","age"=>25,"city"=>"blr"],
 [ 'name' =>"ramesh","age"=>35,"city"=>"hyd"],
 [ 'name' =>"ramesh","age"=>35,"city"=>"bglr"],

];
echo "<table class='table table-bordered'>";
echo "<thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>City</th>
                </tr>
      </thead>";
echo "<tbody>";
foreach($users as $user){
    echo "<tr>";
    // print_r($user);
    echo "<br>";
    foreach($user as $key=>$item){
        echo "<td>".$key." : ".$item."</td>";
    }
    }      

echo "</table>";
?>



</div>
    
</body>
</html>








