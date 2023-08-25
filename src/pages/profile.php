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
    <main class="container">
    <div class="auth-container profile-container" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <div class="image-container">
        <div class="profile-picture-container" data-count="20">
            <img class="profile-picture" src="../assets/images/profile.jpg" alt="">
            <div class="overlay">
            <ion-icon name="cloud-upload-outline"></ion-icon>
            </div>
        </div>
        <div class="info">
        <h6 class="user-name">user name</h6>
        <h6 class="user-email">example@email.com</h6>
        </div>
        </div>
        <div class="form-inputs">
            <div class="input-container">
            <input type="text" name="name" placeholder="User name" class="app-input">
            <ion-icon name="person" class="icon"></ion-icon>
            </div>
            <div class="input-container">
            <input name="email" type="email" placeholder="User Email" class="app-input">
            <ion-icon name="at-circle" class="icon"></ion-icon>
            </div>
            <div class="input-container">
            <input name="password" id="password" type="password" placeholder="Enter new Password" class="app-input">
              <ion-icon id="eye-icon" class="icon" onclick="toggleHideInput()" name="eye-outline"></ion-icon>
            </div>
            <button class="btn auth-btn btn-large">Save</button>
        </div>
</div>
    </main>
    <script>
        let passwordInput = document.getElementById("password");
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
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>