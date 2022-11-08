<?php
session_start();
if(isset($_SESSION['Emailexists'])){
  echo "<script>alert('Email Id Already Exists')</script>";
  unset($_SESSION['Emailexists']);
}
if(isset($_SESSION['errmsg'])){
  echo "<script>alert('Email is not valid')</script>";
  unset($_SESSION['errmsg']);
}
if(isset($_SESSION['registrationsuccess'])){
  echo "<script>alert('Registration successful')</script>";
  unset($_SESSION['registrationsuccess']);
}
if(isset($_SESSION['mismatched'])){
  echo "<script>alert('Both passwords are mismatched')</script>";
  unset($_SESSION['mismatched']);
}
if(isset($_SESSION['passwordnot'])){
  echo "<script>alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.')</script>";
  unset($_SESSION['passwordnot']);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Page</title>
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
  </head>
  <body>
    <div class="container">
      <header>
        <div class="logo">
          <a href="registerpage.php">REGISTER</a>
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
        <h3>Welcome!!!</h3>
        <h2>You don't have an account register here</h2>
        <form action="register.php" method="POST" class="user">
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
              class="password pr-password"
              type="password"
              name="password"
              id="password"
              placeholder="Password*"
              required
            /><i class="bi bi-eye-slash" id="toggle"></i>
          </div>
          <div class="repass">
            <input
              class="repassword"
              type="password"
              name="repassword"
              id="repassword"
              placeholder="Reenter password*"
              required
            />
          </div>
          <div class="login-submit">
            <input
              type="submit"
              name="submit"
              value="Register"
              class="submit-button"
            />
          </div>
          <div class="register">
            Already have an account<a href="loginpage.php" class="registerlink"
              ><u>Login Here</u></a
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
