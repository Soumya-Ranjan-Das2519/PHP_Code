<?php
/*
Methode overriding Traits:


*/
trait Logger {
    public function log($message) {
        echo "Logging from Trait: $message\n";
    }
}
trait logout{
    public function log($message) {
        echo "Logout from Trait: $message\n";
    }
}

class Application {
    use logout;
    use logger{
    logout::log insteadof Logger;
    logger::log as login;
    }//use logout's log method





    // Override the trait method
    // public function log($message) {
    //     echo "Logging from Class: $message\n";
    // }
}

$app = new Application();
$app->log("Bye!"); // Outputs: Logging from Class: Hello!
echo "<br>";
$app->login("Welcome!");



?>