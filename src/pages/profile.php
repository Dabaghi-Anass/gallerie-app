<?php
    include("../utils/database/database_connection.php");
    $conn = connectToDb();
    include("../utils/database/get_current_user.php");
    if($currentUserUid == 0){
        echo "<script>location = 'login.php';</script>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <title>Gallerie App</title>
</head>
<body>
    <main class="container profile-page" >
    <div class="auth-container profile-container" id="user_form" >
        <form action="../utils/database/media_upload.php" method="post" enctype="multipart/form-data">
        <div class="image-container">
        <div class="profile-picture-container" data-count="20">
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
            <div class="input-container">
            <input name="email" type="email" placeholder="User Email" value="<?= $current_user["email"] ?>" class="app-input">
            <ion-icon name="at-circle" class="icon"></ion-icon>
            </div>
            <div class="input-container">
            <input name="password" id="password_field" type="password" placeholder="Enter new Password" class="app-input">
              <ion-icon id="eye-icon" class="icon" onclick="toggleHideInput()" name="eye-outline"></ion-icon>
            </div>
            <button class="btn auth-btn btn-large">Save</button>
            <input type="button" value="log out" class="btn" style="--_bg : var(--red); margin-top : 1rem;" onclick="logout()">
</form>
</div>
<div class="user-images-container">
    <div class="navigation" id="navigation">
    <div class="input-container">
            <input name="search" id="search" type="search" placeholder="search..." class="app-input">
              <ion-icon  class="icon search-icon" name="search-outline"></ion-icon>
            </div>
    <div class="buttons">
        <div class="spinner">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <button style="--_bg:var(--green);" class="btn"><ion-icon name="cloud-upload-outline"></ion-icon>upload</button>
        </div>
    </div>
    <div class="images-container">
            <div class="image">
                    <img src="https://source.unsplash.com/random" alt="gallerie-app" class="">
                        <div class="icons">
                            <ion-icon style="--clr: #1C274C;" class="icon-btn" name="download-outline"></ion-icon>
                            <ion-icon style="--clr:#1C274C;"class="icon-btn"  name="share-social-outline"></ion-icon>
                             <ion-icon style="--clr: #FFA600;" class="icon-btn" name="star-outline"></ion-icon>
                             <div class="grow"></div>
                            <ion-icon style="--clr: var(--red);"  class="icon-btn" name="trash-outline"></ion-icon>
                </div>
            </div>
            <div class="image">
                    <img src="https://source.unsplash.com/random" alt="gallerie-app" class="">
                        <div class="icons">
                            <ion-icon style="--clr: #1C274C;" class="icon-btn" name="download-outline"></ion-icon>
                            <ion-icon style="--clr:#1C274C;"class="icon-btn"  name="share-social-outline"></ion-icon>
                             <ion-icon style="--clr: #FFA600;" class="icon-btn" name="star-outline"></ion-icon>
                             <div class="grow"></div>
                            <ion-icon style="--clr: var(--red);"  class="icon-btn" name="trash-outline"></ion-icon>
                </div>
            </div>
            <div class="image">
                    <img src="https://source.unsplash.com/random" alt="gallerie-app" class="">
                        <div class="icons">
                            <ion-icon style="--clr: #1C274C;" class="icon-btn" name="download-outline"></ion-icon>
                            <ion-icon style="--clr:#1C274C;"class="icon-btn"  name="share-social-outline"></ion-icon>
                             <ion-icon style="--clr: #FFA600;" class="icon-btn" name="star-outline"></ion-icon>
                             <div class="grow"></div>
                            <ion-icon style="--clr: var(--red);"  class="icon-btn" name="trash-outline"></ion-icon>
                </div>
            </div>
    </div>
</div>
    </main>
    <a href="#navigation" class="btn scroll-to-top"><ion-icon name="chevron-up-circle-outline"></ion-icon></a>
    <script>
        let passwordInput = document.getElementById("password_field");
        let icon = document.getElementById("eye-icon");
        function toggleHideInput(){
            let inputType = passwordInput.getAttribute("type");
            if(inputType === "password"){
                passwordInput.setAttribute("type" , "text");
                icon.setAttribute("name" , "eye");
            }
            else{
                passwordInput.setAttribute("type" , "password");
                icon.setAttribute("name" , "eye-outline");
            }
        }
        function changeUi(e){
            let newValue = e.target.value;
            let inpName = e.target.getAttribute("name");
            if(inpName === "password") return;
            let id = `${inpName}_placeholder`;
            let element =document.getElementById(id);
            element.textContent = newValue;
        }
        const userForm =document.getElementById("user_form");
        let formContainer = document.getElementById("form_fields");
        formContainer.addEventListener("input", changeUi);
        let profileImagePlaceHolder = document.querySelector("[data-name='profile-image']");
        let profileImageInput = document.querySelector("#image_upload_input");
        profileImageInput.addEventListener("change" , (e)=>{
            let file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    profileImagePlaceHolder.src = e.target.result;
                };
                reader.readAsDataURL(file);
                document.getElementById("profile-save-btn").style.display = "block";
            }
        })
        function logout(){
            let exp = new Date("2000-01-01");
            document.cookie = `currentUserUid=0;expires=${exp.toUTCString()};path=/;domain=localhost;`;
            window.location.reload()
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>