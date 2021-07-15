<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | PUPBC OSAS</title>
    <link rel="stylesheet" href="css/user_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Administrator</span></div>
        <form method="POST" id ="signup_form" action="admin_login_work.php" class="login_form">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" id="uName" name="uName" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="pass" name="pass" required>
          </div>
          <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
          <div class="row button">
            <input type="submit" name="submit" id="submit" class="form-submit submit">
          </div>
          <div class="signup-link">Doesn't have Account yet? <a href="admin_signup.php">Signup now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
<?php
    unset($_SESSION["error"]);
?>