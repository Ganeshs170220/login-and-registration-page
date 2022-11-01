<?php
session_start();
if(isset($_SESSION['loginfailed'])){
  echo "<script>alert('Username or Password are incorrect')</script>";
  unset($_SESSION['loginfailed']);
}
if(isset($_SESSION['loginfail'])){
  echo "<script>alert('Username or Password are incorrect')</script>";
  unset($_SESSION['loginfail']);
}
if(isset($_SESSION['loginerror'])){
  echo "<script>alert('Username or Password are incorrect')</script>";
  unset($_SESSION['loginerror']);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time();?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <style>
      .error {
        text-align: center;
      }
      h4{
        padding-top: 10px;
        color: red;
      }
      .bi-exclamation-triangle-fill{
        color: red;
        padding-right: 3px;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="logo">
          <a href="loginpage.php">LOGIN</a>
        </div>
        <!--------------------------------------- navigation bar ends here--------------------- -->
      </header>
    </div>
    <!--------------------------------------- banner starts here--------------------- -->
    <div class="banner">
      <div class="bannerleft">
        <div class="banner-image"></div>
      </div>
      <div class="bannerright">
        <div class="bannerright2">
        <h3>Welcome Back!</h3>
        <h2>Login to continue ...</h2>
        <form action="login.php" method="POST" class="user">
          <div class="login">
            <input
              type="email"
              name="username"
              placeholder="Email Address*"
              required
            />
          </div>
          <div class="pass">
            <input
              class="password"
              type="password"
              name="password"
              id="password"
              placeholder="Password*"
              required
            /><i class="bi bi-eye-slash" id="toggle"></i>
          </div>
          <div class="forgot">
            <div class="checkname">
              <input class="check" type="checkbox" {{ old('remember') ?
              'checked' : ''}}/>Remember me!
            </div>
            <a class="for" href="#">Forgot Possword?</a>
          </div>
          <div class="login-submit">
            <input
              type="submit"
              name="submit"
              value="Login"
              class="submit-button"
            />
          </div>
          <div class="register">
            Don't have an account<a href="registerpage.php" class="registerlink"
              ><u>Create Account</u></a
            >
          </div>
        </form>
      </div>
      </div>
    </div>
    
    <!---------------------------------------footer starts here--------------------- -->
    <div class="footer">
      <div class="allrights">&copy; All Rights Reserved 2022.</div>
      <div class="rgukt">
        Rajiv Gandhi University of Knowledge Technologies, Srikakualm.
      </div>
    </div>
    <!---------------------------------------footer ends here--------------------- -->
    <!--------------------------------------- banner ends here--------------------- -->
    <script src="script.js"></script>
   
  </body>
</html>
