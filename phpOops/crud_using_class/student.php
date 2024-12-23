<?php
include('./db.php');
class Students{
    public $DBconn;
    function __construct($conn){
        $this->DBconn=$conn;
    }
    function getData(){
        try {
            $getStudents = $this->DBconn->prepare("SELECT * FROM students");
            $getStudents->execute();
            $result = $getStudents->fetchAll(PDO::FETCH_ASSOC); // Use PDO::FETCH_ASSOC for an associative array
    
            if (!empty($result)) {
                echo "<pre>";
                print_r($result);
                echo "</pre>";
            } else {
                echo "No records found in the students table.";
            }
        } catch (PDOException $e) {
            echo "Error fetching data: " . $e->getMessage();
        }


        // $sql="SELECT * FROM students";
        // $result=$this->DBconn->query($sql);
        // return $result;
    }

    function insertData(){
        $sqlQuery="INSERT INTO students('id','name','email','age','course','registration_date') values(null,'soumya','sd@gmail.com',20,'mca',24-12-2015)";
        $students=$this->DBconn->prepare($sqlQuery);
        $result=$students->execute();
        if ($result){
            echo "data inserted";
        }else{
            echo "No records found in the students table.";

        }
    }
}
$std=new Students($conn);
// $std->getData();
$std->insertData()


?>