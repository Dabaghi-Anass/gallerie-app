<?php
       
    include("../utils/database/database_connection.php");
    $conn = connectToDb();
    include("../utils/database/get_current_user.php");
    include("../utils/database/fetch_likes.php");
    $images = array();
    if($currentUserUid == 0){
        echo "<script>location = 'login.php';</script>";
    }else{
        $query = "select * from images where uid = ?;";
        $statement = $conn->prepare($query);
        $statement->bind_param("i",$currentUserUid);
        if($statement->execute()){
            $result = $statement->get_result();
            $statement->store_result();
            while ($row = $result->fetch_assoc()) {
                $images[] = $row;
            }
            $statement->free_result();
            $statement->close();
        }
    }
     $userfolder = $_SERVER['HTTP_HOST']."/users_files/".$currentUserUid."/";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <script defer>let IMAGE_ID_TO_BE_DELETED = 0;</script>
    <title>Profile - Gallerie App</title>
</head>
<body>
    <div class="modal">
        <span class="modal-close-btn">
            &#10006;
        </span>
        <div class="delete-section">
            <h1>confirm delete image</h1>
            <p>this action is not reversible</p>
            <form class="btns" action="../utils/database/delete_image.php" method="post">
                <input type="text" name="image-id" value="0" style="display : none;">
                <button class="btn" style="--_bg : var(--red)" id="delete-button">DELETE</button>
                <button class="btn" style="--_bg : var(--light-grey)" id="modal-cancel-btn">Cancel</button>
            </form>
        </div>
    </div>
    <?php include("../components/header.php") ?>
    <main class="container profile-page" >
    <div class="auth-container profile-container" id="user_form" >
        <form action="../utils/database/media_upload.php" method="post" enctype="multipart/form-data">
        <div class="image-container">
        <div class="profile-picture-container" data-count="<?=count($images)?>">
            <img class="profile-picture" data-name="profile-image" src="<?= $current_user["profile_image_url"] ?>" alt="">
                <label class="overlay">
                    <ion-icon name="cloud-upload-outline"></ion-icon>
                    <input type="file" name="uploaded_file" id="image_upload_input">
                </label>
                <button class="btn" style="--_bg : #40cf6d" id="profile-save-btn">Save</button>
            </div>
            <div class="info">
                <h6 class="user-name" id="full_name_placeholder"><?= $current_user["full_name"] ?></h6>
                <h6 class="user-email" id="email_placeholder"><?= $current_user["email"] ?></h6>
            </div>
        </div>
    </form>
        <form class="form-inputs" id="form_fields" action="../utils/database/update_user.php" method="POST">
            <div class="input-container">
            <input type="text" name="full_name" placeholder="User name" value="<?= $current_user["full_name"] ?>" class="app-input">
            <ion-icon name="person" class="icon"></ion-icon>
            </div>
            <span class="error-message full_name"></span>
            <div class="input-container">
            <input name="email" type="email" placeholder="User Email" value="<?= $current_user["email"] ?>" class="app-input">
            <ion-icon name="at-circle" class="icon"></ion-icon>
            </div>
            <span class="error-message email"></span>
            <div class="input-container">
            <input name="password" id="password_field" type="password" placeholder="Enter new Password" class="app-input">
              <ion-icon id="eye-icon" class="icon" onclick="toggleHideInput()" name="eye-outline"></ion-icon>
            </div>
            <span class="error-message password"></span>
            <button class="btn auth-btn btn-large" id="auth-btn">Save</button>
            <input type="button" value="log out" class="btn" style="--_bg : var(--red); margin-top : .5rem;" onclick="logout()">
</form>
</div>
<div class="user-images-container">
    <div class="navigation" id="navigation">
        <div class="buttons">
            <form class="upload-file-form"action="/src/utils/database/upload_image.php" method="post" enctype="multipart/form-data">
                <label style="--_bg:var(--green);" class="btn" id="upload-image-label"><ion-icon name="cloud-upload-outline"></ion-icon>
                <input name="image"  type="file" id="image-upload-input" style="display :none;">
                    upload
                </label>
                <button class="btn up-btn" style="display : none;--_bg : hsl(200,100%,50%);">save</button>
            </form>
            </div>
    </div>
    <div class="images-container" id="<?= count($images) == 0 ? 'empty-container' : '' ?>" >
        <?php 
            if(count($images) == 0){
                echo "<h1 class='information'>no images uploaded yet</h1>";
            }
            else{
                foreach($images as $image){
                    $icon_name = in_array($image["id"],$images_ids) ? "star" : "star-outline";
                    echo '
                    <div class="image">
                    <img src="'.$image["link"].'" alt="gallerie-app" class="">
                    <div class="icons">
                        <a href='.$image["link"].' download ><ion-icon style="--clr: #1C274C;" class="icon-btn" name="download-outline" ></ion-icon></a>
                        <ion-icon style="--clr:#1C274C;"class="icon-btn"  name="share-social-outline" onclick="copy(`'.$image['link'].'`)"></ion-icon>
                        <ion-icon data-id="'.$image["id"].'" data-uid="'.$currentUserUid.'" style="--clr: #FFA600;" class="icon-btn star-image" name="'.$icon_name.'"></ion-icon>
                        <div class="grow"></div>
                        <ion-icon data-image-identifier='.$image["id"].' style="--clr: var(--red);"  class=" delete-image-btn icon-btn" name="trash-outline"></ion-icon>
                    </div>
                    </div>
                    ';
                }
            }
        ?>
            
    </div>
    
    </main>
    
    <a href="#navigation" class="btn scroll-to-top"><ion-icon name="chevron-up-circle-outline"></ion-icon></a>
    <script>
         function copy(s){
            let name = s.replace("../../../","<?php echo $_SERVER['HTTP_HOST'] ?>"+"/");
            navigator.clipboard.writeText(name);
            alert("image link copied to clipboard");
        }
    </script>
    <script src="../js/profile.js"></script>
    <script src="../js/control.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>