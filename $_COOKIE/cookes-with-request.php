<?php
if(isset($_POST["btn"])){
    if($_POST["btn"] == 'set'){
        $val=$_POST['user'];
        // echo $val;
        echo "<br>";
        setcookie("user",$val);
        echo "cookie is set";
    }
    if($_POST["btn"] == 'display'){
        if(isset($_COOKIE["user"])){
            echo $_COOKIE["user"];
        }else{
            echo "No cookie found";
        }
    }
    if(isset($_POST["btn"])){
        if($_POST["btn"] == "delete"){
            setcookie("user","",time()-3600);
            echo "Cookie is deleted";
        }
        
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
          <button name="btn" class="btn btn-primary btn-lg m-2" value="set">Set Cookies</button>
          <button name="btn" value="display" class="btn btn-warning btn-lg m-2">Display cookies</button>
          <button name="btn" value="delete" class="btn btn-danger btn-lg m-2">Delete Cookies</button>
        </div>
      </form>
    </div>
  </div>

 
</body>
</html>




