<?php
    include("database_connection.php");
    include("get_current_user.php");
    $current_user = getLoggedUser();
    $delete_statement = $conn->prepare("DELETE from likes where image_id=? and user_id=?;");
    $delete_statement->bind_param("ii" ,$_POST["id"],$_POST["uid"]);
    $delete_statement->execute();
?>