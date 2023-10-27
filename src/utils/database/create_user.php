<?php 
    include("./database_connection.php");
    $conn = connectToDb();    
    $name = $_POST["full_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $max_uid_query = "SELECT MAX(uid) AS uid FROM users;";
    $query = mysqli_query($conn,$max_uid_query);
    mysqli_store_result($conn);
    $maxuid = 1;
    if(mysqli_num_rows($query) > 0){
        $max_uid = mysqli_fetch_assoc($query);
        if(!empty($max_uid["uid"])){
            $maxuid = $max_uid["uid"] + 1;
        }
    }
    $user_folder = "../../../users_files/" . $maxuid;
    if (!is_dir($user_folder)) {
        mkdir($user_folder, 0755, true);
    }
    $statement = $conn->prepare("INSERT INTO users VALUES(?,?,?,?,'".$user_folder."/profile_image.jpg');");
    $statement->bind_param("isss",$maxuid,$name ,$email,$password);
        if ($statement->execute()) {
            $statement->store_result();
            setcookie("currentUserUid", $maxuid, time() + 93312000, "/", "localhost");
            $sourceImagePath = "../../assets/images/profile.jpg";
            $destinationImagePath = $user_folder . "/profile_image.jpg";
            copy($sourceImagePath, $destinationImagePath);
            $statement->free_result();
            $statement->close();
            echo "<script>location = '../../pages/profile.php';</script>";
        } else {
            echo "
                <div style='width : fit-content;height : 100%;margin-inline : auto;display : flex;flex-direction : column;align-items : center;gap:2rem;padding:2rem;'>
                <h1>a user exist with this email</h1>
            <div style='display : flex; gap : 1rem;'><a href='/src/pages/login.php' class='btn'> go to login</a>
            <button onclick='history.back()' class='btn' style='--_bg : blue;'>return</button></div>
                </div>
            ";
        }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/style.css">
    <title>Registering</title>
</head>
<body>
</body>
</html>