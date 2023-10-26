<?php
    if(!isset($conn) || empty($conn)){
        $conn = connectToDb();
    }
    $current_user = null;
    $currentUserUid = 0;
    if (isset($_COOKIE['currentUserUid'])) {
        $currentUserUid = $_COOKIE['currentUserUid'];
    }
    $get_user_query = "SELECT * FROM users WHERE uid = " . $currentUserUid . ";";
    $result = mysqli_query($conn,$get_user_query);
    if(mysqli_num_rows($result) > 0){
        $current_user = mysqli_fetch_assoc($result);
    }
    function getLoggedUser(){
        global $current_user;
        global $currentUserUid;
        global $conn;
        $get_user_query = "SELECT * FROM users WHERE uid = " . $currentUserUid . ";";
        $result = mysqli_query($conn,$get_user_query);
        if(mysqli_num_rows($result) > 0){
            $current_user = mysqli_fetch_assoc($result);
        }
        return $current_user;
    }
?>
