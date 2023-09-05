<?php
    include("database_connection.php");
    if(!isset($conn) || empty($conn)){
        $conn = connectToDb();
    }
    include("get_current_user.php");
    $current_user = getLoggedUser();
    if(!empty($current_user)){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES["uploaded_file"])) {
        $targetDirectory = "../../../users_files/";
        $user_dir = $targetDirectory.$current_user["uid"]."/";
        $ext = pathinfo($_FILES["uploaded_file"]["name"], PATHINFO_EXTENSION);
        $targetFile = $user_dir . "profile_image.".$ext;
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0755, true);
        }
        if (!is_dir($user_dir)) {
            mkdir($user_dir, 0755, true);
        }
        if (move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $targetFile)) {
            $query = "UPDATE users SET profile_image_url = ? WHERE uid = ?";
            $statement = $conn->prepare($query);
            $id = $currentUserUid;
            $path = "../../users_files/" .$id."/profile_image.".$ext;
            $statement->bind_param("si",$path, $id);
            $statement->execute();
        } else {
            echo "Error uploading file.";
        }
         } else {
        echo "No file uploaded.";
        }
        }
        echo "<script> window.location = '../../pages/profile.php';</script>";
    }else {
        echo "<script> window.location = '../../pages/login.php';</script>";
    }
?>
