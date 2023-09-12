<?php 
    include("./database_connection.php");
    $conn = connectToDb();    
    $image_to_be_deleted = $_POST["image-id"];
    if($image_to_be_deleted == 0){
        echo "
        <script>document.write('error deleting image try again later! redirecting in 1s...')
            setTimeout(()=>{
                history.back()
            },1000)
        </script>";
    }
    $statement = $conn->prepare("DELETE FROM images WHERE id=?;");
    $statement->bind_param("i", $image_to_be_deleted);
    if($statement->execute()){
        echo "
        <script>
        location ='../../pages/profile.php';
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/style.css">
    <title>deleting...</title>
</head>
<body>
</body>
</html>