<?php
  include("./database_connection.php");
  $email = $_POST["email"];
  $password = $_POST["password"];
  if(!isset($email) || empty($email)){
      echo "<script>location = '/src/pages/login.php'</script>";
    }
  $conn = connectToDb();
  $statement = $conn->prepare("SELECT COUNT(*) AS count FROM users WHERE email=?;");
  $result = $statement->bind_param("s",$email);
  if($statement->execute()){
    $count = 0;
    $statement->store_result();
    $statement->bind_result($count);
    $statement->fetch();
    $statement->free_result();
    if($count == 0){
        echo "
        <div style='width : fit-content;height : 100%;margin-inline : auto;display : flex;flex-direction : column;align-items : center;gap:2rem;padding:2rem;'>
        <h1>no user exist with this email</h1>
        <div style='display : flex; gap : 1rem;'><a href='/src/pages/register.php' class='btn'>go to register</a>
        <button onclick='history.back()' class='btn' style='--_bg : blue;'>return</button></div>
        </div>
    ";
    } elseif($count > 0){
        $state = $conn->prepare("SELECT uid, password FROM users WHERE email=?;");
        if ($state === false) {
            echo "<br>Failed to prepare the statement: " . $conn->error;
            return;
        }
        $state->bind_param("s",$email);
        if($state->execute()){
            $state->store_result();
            $state->bind_result($uid,$db_pass);
            $state->fetch();
            $state->free_result();
            if($db_pass === $password){
                setcookie("currentUserUid", $uid, time() + 93312000, "/", "localhost");
                include("./get_current_user.php");
                $currentUser = getLoggedUser();
                echo "<script>location = '/src/pages/home.php'</script>";
            }else{
                echo "
                <div style='width : fit-content;height : 100%;margin-inline : auto;display : flex;flex-direction : column;align-items : center;gap:2rem;padding:2rem;'>
                <h1>no user exist with this credentials</h1>
                <div style='display : flex; gap : 1rem;'><a href='/src/pages/register.php' class='btn'>go to register</a>
                <button onclick='history.back()' class='btn' style='--_bg : blue;'>return</button></div>
                </div>
            ";
            }
            }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/style.css">
    <title>Login</title>
</head>
<body>
</body>
</html>