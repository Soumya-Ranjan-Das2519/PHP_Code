<?php
// // $a=readfile("myFile.txt");
// // echo $a;
// readfile("myFile.txt");
// // readfile("professional.jpg");
// readfile("file.html");

/*
//read contents of a file
$fptr=fopen("myFile.txt", "r");//return type is boolean
echo var_dump($fptr);
if(!$fptr){
    die("unable to open file. please enter the valid filename");
}else{
    
$content=fread($fptr,filesize("myFile.txt"));//fread(): return the content of file and filesize(): return the total number of characters in file
fclose($fptr);//close the file
echo $content;

}*/

/*
// write content to a file
$fptr=fopen("myFile.txt", "w");//open file in write mode ,return type boolean

if($fptr){
    $content="hii,this is a test content";
    $content2=fwrite($fptr,$content);//write content
    fclose($fptr);
    echo "content written successfully";

}else
{
    die("unable to write file. please enter the");
}*/

//to append new content to an existing file use (a/a+) mode
$file=fopen("myFile.txt", "a");
if($file){
    $content3=fwrite($file,"\n this is  an append line.");//append content to file
    fclose($file);
    echo"content append successfully";
}
else{
        echo "unable to append file. please enter the valid filename";
    
}


?>