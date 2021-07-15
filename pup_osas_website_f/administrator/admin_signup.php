<?php include('admin_register_work.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | PUPBC OSAS</title>
    <link rel="stylesheet" href="css/user_reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Admin Signup</span></div>

        <form  method="POST" id ="signup_form" action="admin_register_work.php" class="signup_form">

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" id="userName" name="userName" placeholder="Username" required>
          </div>

          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Password" required>
          </div>

          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" id="role" name="role" placeholder="Admin Role" required>
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" id="firstName" name="firstName" placeholder="Admin First Name" required>
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" id="middleName" name="middleName" placeholder="Admin Middle Name" required>
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" id="lastName" name="lastName" placeholder="Admin Last Name" required>
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" id="email" name="email" placeholder="Admin Email Address" required>
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" id="contactNumber" name="contactNumber" placeholder="Admin Contact Number" required>
          </div>

          <div class="row button">
            <input type="submit" id="submit" name="submit" class="form-submit submit" value="Sign Up"/>
          </div>
          <div class="signup-link">Have An Existing Acc? <a href="admin_login.php" class="submit-link submit">Sign In</a>
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
