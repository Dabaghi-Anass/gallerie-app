<?php 
    include("./database_connection.php");
    $conn = connectToDb();
    $statement = $conn->prepare("UPDATE users SET full_name = ?,email = ? WHERE uid = ?");
    $name = $_POST["full_name"];
    $email = $_POST["email"];
    $id = 0;
    $password = $_POST["password"];
    if(strlen($password) !== 0){
        $statement = $conn->prepare("UPDATE users SET full_name = ?,email = ?,password = ? WHERE uid = ?");
        $statement->bind_param("sssi",$name ,$email,$password, $id);
    }
    else{
        $statement->bind_param("ssi",$name ,$email, $id);
    }
    if ($statement->execute()) {
        echo "Name updated successfully!";
    } else {
        echo "Error updating name: " . $statement->error;
    }
    echo "<script> window.location = '../../pages/profile.php';</script>";
?>