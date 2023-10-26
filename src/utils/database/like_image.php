<?php
    include("database_connection.php");
    include("get_current_user.php");
    $current_user = getLoggedUser();
    $get_max_uid_st = $conn->prepare("select max(like_id) +1 as id from likes;");
    $max_uid=1;
    if($get_max_uid_st->execute()){
        $result = $get_max_uid_st->get_result();
        $get_max_uid_st->store_result();
        if ($row = $result->fetch_assoc()) {
            if(!empty($row["id"])){
                $max_uid = $row["id"];
                echo $max_uid;
            }
        } 
        $get_max_uid_st->free_result();
        $result->close();
    }
    $add_like_st = $conn->prepare("insert into likes values(?,?,?)");
    $add_like_st->bind_param("iii",$_POST["id"],$_POST["uid"],$max_uid);
    if($add_like_st->execute()){
        echo "added like";
    }
?>