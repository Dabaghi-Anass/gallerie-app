<?php 
  include("../utils/database/database_connection.php");
  include("../utils/database/get_current_user.php");
  $current_user = getLoggedUser();
  if(!empty($current_user)){
    echo "<script> window.location = 'profile.php';</script>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <title>Login - Gallerie App</title>
</head>
<body>
    <main class="container">
    <form class="auth-container" action="/src/utils/database/auth.php" method="post">
        <p>Login</p>
        <div class="form-inputs">
            <div class="input-container">
            <input required name="email" type="email" placeholder="Enter Your Email" class="app-input">
            <ion-icon name="at-circle" class="icon"></ion-icon>
            </div>
            <div class="input-container">
            <input required name="password" id="password" type="password" placeholder="Enter Your Password" class="app-input">
              <ion-icon id="eye-icon" class="icon" onclick="toggleHideInput()" name="eye-outline"></ion-icon>
            </div>
            <button class="btn auth-btn btn-large">Login</button>
        </div>
        <a href="./register.php" class="link">don't have an account ?</a>
    </form>
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