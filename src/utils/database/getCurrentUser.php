<?php 
    $get_user_query = "SELECT * FROM users WHERE uid = 0;";
    $result = mysqli_query($conn,$get_user_query);
?>