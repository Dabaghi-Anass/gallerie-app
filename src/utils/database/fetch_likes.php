<?php 
    $current_user = getLoggedUser();
    $statement = $conn->prepare("select image_id from likes where user_id = ?;");
    $statement->bind_param("i" , $currentUserUid);
    $images_ids = [];
    if($statement->execute()){
        $result = $statement->get_result();
        $statement->store_result();
        while ($row = $result->fetch_assoc()) {
            $images_ids[] = $row['image_id'];
        }
        $statement->free_result();
        $statement->close();
    }
    mysqli_store_result($conn);
?>