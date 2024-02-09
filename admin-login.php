<?php
if(isset($_POST['submit']))
{
  $email=$_POST['email'];
  $pass=$_POST['pass'];

  if($email=='abc@123.com' && $pass=='password');
  {
    header("location:billing.php");
  }
  /*else
  {
    echo "Your Password is incorrect";
  }*/

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Creative Login page</title>
</head>
<link rel="stylesheet" href="style1.css">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<body>
    <div class="wrapper">

        <div class="login-box">
          <form action="billing.php" method="post">
            <h2>Login</h2>
      
            <div class="input-box" >
              <span class="icon">
                <ion-icon name="mail"></ion-icon>
              </span>
              <input type="email" name="email" required>
              <label>Email</label>
            </div>
      
            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon>
              </span>
              <input type="password" name="pass" required>
              <label>Password</label>
            </div>
      
            <div class="remember-forgot">
              <label><input type="checkbox"> Remember me</label>
              <a href="#">Forgot Password?</a>
            </div>
            <div class="submit">
            <input type="submit" name="submit" value="Login">
           <!-- <button type="submit">Login</button>-->
           </div>
            <div class="register-link">
              <p>Don't have an account? <a href="#">Register</a></p>
            </div>
          </form>
        </div>
      
      </div>
</body>
</html>
