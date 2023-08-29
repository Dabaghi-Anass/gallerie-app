<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES["uploaded_file"])) {
        $targetDirectory = "users_files/";
        $targetFile = $targetDirectory . basename($_FILES["uploaded_file"]["name"]);
        
        if (move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $targetFile)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
         } else {
        echo "No file uploaded.";
    }
    }
    echo "<script> window.location = '../../pages/profile.php';</script>";
?>
