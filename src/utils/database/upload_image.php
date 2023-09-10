<?php
    include("database_connection.php");
    if(!isset($conn) || empty($conn)){
        $conn = connectToDb();
    }
    include("get_current_user.php");
    $current_user = getLoggedUser();
    if(!empty($current_user)){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES["image"])) {
        $targetDirectory = "../../../users_files/";
        $user_dir = $targetDirectory.$current_user["uid"]."/";
        $targetFile = $user_dir . time() .$_FILES["image"]["name"];
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0755, true);
        }
        if (!is_dir($user_dir)) {
            mkdir($user_dir, 0755, true);
        }
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $getMaxQuery = "select max(id) as id from images";
            $result = mysqli_query($conn,$getMaxQuery);
            $image_id = 0;
            if(mysqli_num_rows($result) > 0){
                $image_id = mysqli_fetch_assoc($result)["id"] + 1;
            }
        } else {
            echo "Error uploading file.";
        }
         } else {
        echo "No file uploaded.";
        }
        }
    }else {
        echo "<script> window.location = '../../pages/login.php';</script>";
    }
?>
