<?php
/*Real-Life Use Cases of Cookies
-->User Preferences: Store user settings like theme or language.
-->Authentication: Save session identifiers or tokens.
-->Tracking: Maintain user activity or cart information.

-->Cookies in PHP are a way to store small pieces of information on the client’s browser and retrieve them later. They are commonly used to store user preferences, session data, or tracking information.*/




// Set a cookie named "user" with the value "Soumya" that expires in 1 hour
setcookie("user", "Soumya", time() + 3600, "/"); // "/" makes it available site-wide
echo "Cookie 'user' is set!";
echo "<br>";



// //To modify a cookie, you set it again with the same name and new value or parameters.
// setcookie("user", "anjan", time() + 3600, "/");
// echo "Cookie 'user' is updated!";
// echo"<br";













?>