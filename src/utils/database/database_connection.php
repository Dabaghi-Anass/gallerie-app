<?php 
    $conn = "";
    function connectToDb() {
        $db_name = "sql11656945";
        $db_server = "sql11.freesqldatabase.com" ;
        $db_user = "sql11656945";
        $db_password = "gseHWmx4sM";
        $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
        if($conn) {
            return $conn;
        }
        else {
            return null;
        }; 
    }
?>
