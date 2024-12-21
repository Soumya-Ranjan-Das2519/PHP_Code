<?php
/*
  Access Modifiers:
    -->Access modifiers decides to where we can access the methods and properties.

    -->Access Zone:

    1. Public : accessible from anywhere.
    2. Private : only accessible within the same class.
    3. Protected : accessible within the same class and in the subclasses.
    4. Private static : accessible within the same class and in the subclasses but not outside the class.
    --> Access Modifiers in PHP:
        - Public : public
        - Private : private
        - Protected : protected
        - Private static : private static


*/



class Teachers {
    // Private function to set question paper type
    private function questionPaper($paperType) {
        return $paperType; // Dynamically return the paper type
    }

    // Exam function that decides exam eligibility
    function exam($paperType) {
        if ($this->questionPaper($paperType) == "IMPORTANT") {
            echo " -> You can take the exam";
        } else {
            echo " -> You cannot take the exam! Exfailed";
        }
        echo "<br>";
    }

    protected function studentMarks($allMarks){
        echo $allMarks;
        echo "<br>";
    }
}



class Management extends Teachers{
     function   reviewExams($allMarks){
        $this->studentMarks($allMarks);
     }   

}


// Example Usage
$st1 = new Teachers();
$st1->exam("IMPORTANT"); // Replace with "NORMAL" to test different cases\
// $st1->studentMarks();

$mg1 = new Management();
$mg1->reviewExams("All students marks"); // Calls the protected function from Teachers class

?>



