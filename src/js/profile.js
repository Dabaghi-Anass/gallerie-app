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
            if(password.length === 0) return "";
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
            let err1 =validateEmail(emailInp.value);
            let emailErrorPlaceholder = document.querySelector(`.error-message.email`);
            userErrors.email =err1;
            emailErrorPlaceholder.textContent =err1;
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

const imageUploadInput = document.getElementById("image-upload-input");

imageUploadInput.addEventListener("change" , (e)=>{
    document.querySelector(".up-btn").style.display = "flex";
})