<?php 
    $conn = "";
    function connectToDb() {
        $db_name = "b9fvyugluxs9htc4kspb";
        $db_server = "b9fvyugluxs9htc4kspb-mysql.services.clever-cloud.com" ;
        $db_user = "ud7uulszn0adb3bk";
        $db_password = "HVut2aiwJmiccyXjz5jB";
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
