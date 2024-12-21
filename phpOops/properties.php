<?php
class properties{
    //public
    //private
    //protected : these are the keyword or access modifier

    public $name="madhubala";
    function getName(){
        echo $this->name;
    }
    function setName($nm){
        $this->name=$nm;
    }

}
$p1=new Properties();
// echo $p1->name;
echo "<br>";
$p1->setName("puspa");
$p1->getName();


?>