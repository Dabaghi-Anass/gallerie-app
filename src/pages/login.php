<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Gallerie App</title>
</head>
<body>
    <main class="login-page">
    <form class="auth-container" action="/" method="post">
        <p>Login</p>
        <div class="form-inputs">
            <input name="email" type="email" placeholder="Enter Your Email" class="app-input">
            <div class="input-container">
            <input name="password" type="password" placeholder="Enter Your Password" class="app-input">
            <ion-icon name="eye-outline"></ion-icon>
            </div>
            <button class="btn btn-large">Login</button>
        </div>
        <a href="#" class="link">don't have an account ?</a>
    </form>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>