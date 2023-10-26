<?php 
    include("../utils/database/database_connection.php");
    $conn = connectToDb();
    include("../utils/database/get_current_user.php");
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
    <title>Register - Gallerie App</title>
</head>
<body>
    <main class="container">
    <form class="auth-container" id="form_fields" action="../utils/database/create_user.php" method="post">
        <p>Register</p>
        <div class="form-inputs">
            <div class="input-container">
            <input type="text" required name="full_name" placeholder="Enter Your name" class="app-input">
            <ion-icon name="person" class="icon"></ion-icon>
            </div>
            <span class="error-message full_name"></span>
            <div class="input-container">
                <input name="email" required type="email" placeholder="Enter Your Email" class="app-input">
                <ion-icon name="at-circle" class="icon"></ion-icon>
            </div>
            <span class="error-message email"></span>
            <div class="input-container">
                <input name="password" required id="password" type="password" placeholder="Enter Your Password" class="app-input">
                <ion-icon id="eye-icon" class="icon" onclick="toggleHideInput()" name="eye-outline"></ion-icon>
            </div>
            <span class="error-message password"></span>
            <button class="btn auth-btn btn-large unactive" id="auth-btn">Register</button>
        </div>
        <a href="./login.php" class="link">already have an account ?</a>
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
     <script>
        const fieldsForm =  document.getElementById("form_fields");
        const user = {
            full_name : "",
            email : "",
            password : ""
        }
        const userErrors = {
            full_name : "",
            email : "",
            password : ""
        }
        const validateName = (name) => {
            if(name.length < 3) return "name can't be less than 3 characters";
            return "";
        } 
        const validateEmail = (email) => {
            if(email.length === 0) return "email is required";
            let emailPattern = /.*@\w+\.\w+/;
            if(!emailPattern.test(email)){
                return "the provided input is not a valid email!";
            }
            return "";
        } 
        const validatePassword = (password) => {
            if(password.length === 0) return "password is required";
            let passwordPattern = /.*(?=.*[A-Z]).*(?=.*\d).*/;
            
            if(password.length <8) return  "password must be atleast 8 characters";
            if(!passwordPattern.test(password)) return "password must include At least One Upper Case letter and 1 digit";
            return "";
        }   
        const validateForm = (name,value) =>{
            if(!name) return "";
            switch(name){
                case "full_name" :
                    return validateName(value);
                break;
                case "email" : 
                    return validateEmail(value)
                    break;
                case "password" : 
                    return validatePassword(value);
                    break;
            }
        }
        const validateInputs = () =>{
            for(let prop in userErrors){
                if(userErrors[prop] !== "") return false;
            }
            return true;
        }
        fieldsForm.addEventListener("click",()=>{
            let emailInp = document.querySelector(`[name=email]`);
            let passInp = document.querySelector(`[name=password]`);
            let err1 =validateEmail(emailInp.value);
            let err2 =validatePassword(passInp.value);
            let emailErrorPlaceholder = document.querySelector(`.error-message.email`);
            let passErrorPlaceholder = document.querySelector(`.error-message.password`);
            userErrors.email =err1;
            userErrors.password =err2;
            emailErrorPlaceholder.textContent =err1;
            passErrorPlaceholder.textContent = err2;

        })
        fieldsForm.addEventListener("input", (e)=>{
            let name = e.target.getAttribute("name");
            let input = document.querySelector(`[name=${name}]`);
            let errorPlaceholder = document.querySelector(`.error-message.${name}`);
            user[name] = input.value;
            userErrors[name] = validateForm(name,input.value);
            errorPlaceholder.textContent =  userErrors[name];
            let btn = document.getElementById("auth-btn");
            btn.classList.toggle("unactive",!validateInputs());
        })
        
        
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>