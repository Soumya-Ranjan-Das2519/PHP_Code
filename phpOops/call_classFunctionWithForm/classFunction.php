 <?php
// if(isset($_POST)){
//    class User{
//     function getName($name){
//         echo "User Name is $name";
//     }
//    }
//    $user=new User();
//    $user->getName($_POST['user']);
// }




// Define a class to handle the form
class FormHandler {
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email =$email;
        $this->password = $password;
    }

    public function displayData() {
        echo '<div class="container mt-5">';
        echo '<div class="alert alert-success">';
        echo '<h4>Form Data Submitted Successfully!</h4>';
        echo '<p><strong>Name:</strong> ' . $this->name . '</p>';
        echo '<p><strong>Email:</strong> ' . $this->email . '</p>';
        echo '<p><strong>Password:</strong> ' . str_repeat('*', strlen($this->password)) . '</p>'; // Mask the password
        echo '</div>';
        echo '<a href="form.html" class="btn btn-primary">Back to Form</a>';
        echo '</div>';
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formHandler = new FormHandler($_POST['name'], $_POST['email'], $_POST['password']);
    $formHandler->displayData();
} else {
    echo '<div class="container mt-5">';
    echo '<div class="alert alert-danger">Invalid Request</div>';
    echo '<a href="form.html" class="btn btn-primary">Back to Form</a>';
    echo '</div>';
}



?>