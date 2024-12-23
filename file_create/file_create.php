<?php
if(isset($_POST['filename'])){
    $fileName="upload/".$_POST['filename'];
    $content=$_POST['content'];
    $file=fopen($fileName,"w") or die("unable to open file");
    fwrite($file,$content);
    fclose($file);
    echo "file created";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form method="post">
            <!-- Input Field -->
            <div class="mb-3">
                <label for="exampleInput" class="form-label">enter the file name</label>
                <input type="text" name="filename" class="form-control" 
                id="exampleInput" placeholder="Enter the file name with extention">
            </div>

            <!-- Textarea -->
            <div class="mb-3">
                <label for="exampleTextarea" class="form-label">write your content</label>
                <textarea class="form-control"
                name="content" id="exampleTextarea" rows="4" placeholder="Enter your message"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

