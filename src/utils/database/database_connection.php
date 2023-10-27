<?php 
    $conn = "";
    function connectToDb() {
        $db_name = "gallerie_app";
        $db_server = "localhost" ;
        $db_user = "root";
        $db_password = "00000000";
        $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
        mysqli_store_result($conn);
        if($conn) {
            return $conn;
        }
        else {
            return null;
        }; 
    }
?>
