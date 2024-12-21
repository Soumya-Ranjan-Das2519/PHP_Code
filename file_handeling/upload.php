<?php
$target_dir = "uploads/"; // Define the upload directory
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// Check if the uploads/ directory exists
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true); // Create directory with full permissions
}

// Attempt to move the uploaded file
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>
