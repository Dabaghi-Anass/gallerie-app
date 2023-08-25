
<!DOCTYPE html>
<html>
  <head>
    <title>Redirecting...</title>
    <link rel="shortcut icon" href="src/assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="src/css/style.css">
  </head>
  <body>
    <main class="container index-container">
    <button class="skip btn" onclick="skip()"><ion-icon name="play-skip-forward-outline"></ion-icon></button>
      <div class="welcome-text-container">
        <div id="welcome-text"></div>
        <div id="slider"></div>
      </div>
    </main>
    <script>
        let redirectURL = "src/pages/login.php";
        function redirect() {
         window.location = redirectURL;
      	}
      let texts = ["GALLERIE-APP",
       "Exploring the Pixels: Unleashing Stunning Images for You...",
       "Gathering the Moments: Your Visual Journey is About to Begin",
       "Painting the Canvas: Bringing Spectacular Images Just for You.",
        "Crafting Visual Stories: Loading Images to Spark Your Imagination.",
        "Weaving the Visual Tapestry: Images Loading to Inspire Your Day."];
      let currentIndex = 0;
      var id;
      const welcomeTextContainer = document.getElementById("welcome-text");
      const slider = document.getElementById("slider");
      function skip(){
        clearTimeout(id);
        redirect();
      }
      function changeText(){
          slider.style.setProperty("opacity" , `${0}`);
          setTimeout(()=>{
            slider.style.setProperty("opacity" , `${1}`);
            },2000)
        	if (currentIndex >= texts.length) currentIndex = 0;
        	welcomeTextContainer.innerHTML = texts[currentIndex];
        	currentIndex++;
        	setTimeout(changeText,3000)
      }
      changeText()
      id = setTimeout(skip,3000 * texts.length);
    </script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
