<?php
    if(!isset($conn) || empty($conn)){
        $conn = connectToDb();
    }
    $current_user = null;
    $get_user_query = "SELECT * FROM users WHERE uid = 1;";
    $result = mysqli_query($conn,$get_user_query);
    if(mysqli_num_rows($result) > 0){
        $current_user = mysqli_fetch_assoc($result);
    }
?>