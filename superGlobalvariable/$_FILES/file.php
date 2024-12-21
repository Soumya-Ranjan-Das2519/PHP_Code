<?php
// print_r($_FILES);
if($_FILES['fileupload']){
    $path=$_FILES['fileupload']['name'];
    $upload_path="./uploads/".$path;

echo $upload_path;
}

?>