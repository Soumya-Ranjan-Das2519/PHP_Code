<?php
/*
Trait in php:
what is Trait:
-->In PHP, a trait is a mechanism for code reuse in single inheritance languages
-->Traits allow you to include methods and properties into classes without using inheritance.
-->They are particularly useful when you want to share methods between different classes without creating a rigid inheritance hierarchy.

*/


// Define a trait:using trait keyword.
trait Logger {
    public function login($message) {
        echo "Logging message: $message\n";
        echo "<br>";
    }
}

// Define another trait
trait Notifier {
    public function notify($message) {
        echo "Sending notification: $message\n";
        echo "<br>";
    }
}

// Use traits in a class
class User {
    use Logger, Notifier;

    public function createUser($name) {
        echo "User $name created.\n";
        echo "<br>";
        $this->login("User $name created.");
        $this->notify("Welcome $name!");
        echo "<br>";
    }
}

// Create an instance of User
$user = new User();
$user->createUser("LICKY");


?>