<?php
// Set a cookie
setcookie("username", "Soumya", time() + (86400 * 7), "/"); // Expires in 7 days

// Check if the cookie is set
// if (isset($_COOKIE["username"])) {
//     echo "Welcome back, " . $_COOKIE["username"] . "!";
// } else {
//     echo "Hello, new user!";
// }

// Delete the cookie
if (isset($_GET['delete'])) {
    setcookie("username", "", time() - 86400*7, "/");
    echo "Cookie deleted.";
}
// ?>
