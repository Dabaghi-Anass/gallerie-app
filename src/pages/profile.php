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
    <div class="auth-container profile-container" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <div class="image-container">
        <div class="profile-picture-container" data-count="20">
            <img class="profile-picture" src="https://source.unsplash.com/random" alt="">
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