<?php
/*
abstract Class:
-->template that defines methods for a child classes
-->i abstract class,we declare methodes but write implementtaion in child class



*/

abstract class ProductFeatures{
    abstract function getDetails(); 
    abstract function getImage(); 
    abstract function getOwnerDetails(); //i declare this method, but write implementation in child class
}
class UploadProduct extends ProductFeatures{
    function getDetails(){
        echo "This is product details";
    }
    function getImage(){
        echo "This is product Image";
    }
    function getOwnerDetails()
    {
        echo "This is owner details"; //i write implementation in child class
    }
}


$upload=new UploadProduct();
$upload->getDetails();
echo "<br>";
$upload->getImage();
echo "<br>";
$upload->getOwnerDetails();
echo "<br>";
// $productFeature= new ProductFeatures();


?>