<?php 
    include("./database_connection.php");
    $conn = connectToDb();    

    // Check if the image ID is set in the POST request
    if(isset($_POST["image-id"])){
        $image_to_be_deleted = $_POST["image-id"];
        
        if($image_to_be_deleted == 0){
            echo "
            <script>
                document.write('Error deleting image. Please try again later. Redirecting in 1s...');
                setTimeout(() => {
                    history.back();
                }, 1000);
            </script>";
        } else {
            try{
                $statement = $conn->prepare("DELETE FROM images WHERE id=?;");
                $statement->bind_param("i", $image_to_be_deleted);
                if($statement->execute()){
                    $statement->store_result();
                    $statement->free_result();
                    $statement->close();
                    // If the deletion is successful, provide a success message
                    // echo "Image deleted successfully!";
                    echo "
                    <script>
                    window.location = '../../pages/profile.php';
                    </script>";
                } else {
                    // echo "Error deleting image.";
                }
            } catch (Exception $e) {
                // Catch any exceptions that may occur during execution
                // echo "Error: " . $e->getMessage();
            }
        }
    } else {
        // Handle the case where 'image-id' is not set in the POST request
        // echo "Image ID not provided.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/style.css">
    <title>Deleting...</title>
</head>
<body>
</body>
</html>
