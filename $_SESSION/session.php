<?php
session_start();
if(isset($_POST['btn'])){
    if($_POST["btn"]=="set"){
        $val=$_POST['user'];
        $_SESSION["user"]=$val;
        echo "Session set with value: ".$val;
    }
    if($_POST["btn"]=="get"){
        // $_SESSION["user"]=$val;
        echo "Session value: ".$_SESSION["user"];
    }
    if($_POST["btn"]=="delete"){
        session_destroy();
        // unset($_SESSION["user"]);
        echo "Session deleted";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form with Input and Buttons</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow-lg p-4" style="width: 600px; border-radius: 15px;">
      <h3 class="card-title text-center mb-4">User Form</h3>
      <form method="post">
        <!-- Input Field -->
        <div class="mb-3">
          <label for="userInput" class="form-label">Enter Your Text</label>
          <input type="text" class="form-control form-control-lg"
          name="user" id="userInput" placeholder="Enter user name">
        </div>

        <!-- Buttons -->
        <div class="d-flex justify-content-between m-2">
          <button name="btn" class="btn btn-primary btn-lg m-2" value="set">Set Session</button>
          <button name="btn" value="get" class="btn btn-warning btn-lg m-2">Get Session</button>
          <button name="btn" value="delete" class="btn btn-danger btn-lg m-2">Delete Session</button>
        </div>
      </form>
    </div>
  </div>

 
</body>
</html>
