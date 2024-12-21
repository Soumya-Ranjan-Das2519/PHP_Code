<?php

/*
// reading a file line by line
$file=fopen("myFile.txt", "r");
// echo fgets($file);
// echo fgets($file);
// echo fgets($file);
// var_dump(fgets($file));
if($file){
    while( $a=fgets($file)){
        echo $a."<br>";
    }
    fclose($file);

}else{
    echo "unable to read the file";
}*/

/*//reading a file charecter by charecter

$file=fopen("myFile.txt","r");
 echo fgets($file);
if($file){
    while($a=fgetc($file)){
        echo $a;
        // break;
    }
    fclose($file);
}else{
    echo "Unable to read the file";
}
echo '<br>';*/

/*//reading a file charecter by charecter
$file=fopen("myFile.txt","r");
while($a=fgetc($file)){
    echo $a;
    if($a=="c"){
        break;
    }
}
    fclose($file);
echo "<br>";*/


//Checking if a File Exists, You can use the file_exists() function.
if (file_exists("myFile.txt")) {
    echo "File exists!";
} else {
    echo "File does not exist.";
}
echo '<br>';


//You can use the unlink() function to delete a file.

if (file_exists("example.txt")) {
    unlink("example.txt"); // Delete the file
    echo "\nFile deleted successfully!";
} else {
    echo "File not found.";
}






?>