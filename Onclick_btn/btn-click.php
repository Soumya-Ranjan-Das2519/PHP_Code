
<?php
if(isset($_POST['btn'])){
   btn_click_test();
}
function btn_click_test(){
    echo "function call on Button Click!";
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>call php function</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow-lg p-4" style="width: 350px; border-radius: 15px;">
      <h3 class="card-title text-center mb-4">Proceed Action! To call php function</h3>
      <form method="post">
        <div class="d-grid">
          <button class="btn btn-primary btn-lg" name="btn" value="btn1">
           Call Function
          </button>
        </div>
      </form>
    </div>
  </div>

  </body>
</html>
