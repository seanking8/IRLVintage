<?php
session_start();
?>

<html lan="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Account | IRLVintage</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet" />

  <!-- <script type="text/javascript" src="js/bootstrap.bundle.js"></script> -->
</head>

<body>
  <div class="container">
    <div class="navBar">
      <div class="logo">
        <a href="index.php"><img src="https://i.ibb.co/syY2nT6/Logo2.png" alt="Logo2" width="125px" /></a>
      </div>
      <nav>
        <ul id="menuItems">
          
        </ul>
      </nav>
    </div>
  </div>

  <!-- A/c page -->

  <div class="accountPage">
    <div class="container">

      <?php
      // Display error message for incorrect login details
      if (isset($_SESSION['loginError'])) {
        echo "<div class='row'><p>Invalid username or password! Please try again.</p></div>";
        unset($_SESSION['loginError']);
      } else if (isset($_SESSION['regError'])) {
        echo "<div class='row'><p>There was a problem creating account!</p></div>";
        unset($_SESSION['regError']);
      } else if (isset($_SESSION['regSuccess'])) {
        echo "<div class='row'><p>Successfully created new account!</p></div>";
        unset($_SESSION['regSuccess']);
      }
      ?>

      <div class="row">
        <div class="col2">

          <img src="img/tracksuit1.png" width="100%" />
        </div>
        <div class="col2">
          <div class="formContainer">
            <div class="formBtn">
              <span onclick="login()">Login</span>
              <span onclick="register()">Register</span>
              <hr id="indicator" />
            </div>

            <form id="loginForm" action="login/login.php" method="post">
              <input type="email" placeholder="Email" name="email" required />
              <input type="password" placeholder="Password" name="password" required />
              <button type="submit" class="btn">Login</button>
            </form>

            <form id="regForm" action="login/register.php" method="POST">
              <input type="email" placeholder="Email" name="email" required />
              <input type="password" placeholder="Password" name="password" required />
              <input type="password" placeholder="Confirm password" name="confirm_password" required >
              <button type="submit" class="btn">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>App coming soon to Android and ios devices.</p>
          <div class="app-logo">
            <img src="img/play-store.png" />
            <img src="img/app-store.png" />
          </div>
        </div>
        <div class="footer-col-2">
          <img src="img/Logo2.png" />
        </div>

        <div class="footer-col-3">
          <h3>Follow Us</h3>
          <ul>
            <li>
              <a href="https://www.facebook.com/"><img src="img/fb.png" alt="FB Icon" /></a>
            </li>
            <br />
            <li>
              <a href="https://www.instagram.com/"><img src="img/ig.png" alt="IG Icon" /></a>
            </li>
          </ul>
        </div>
      </div>
      <hr />
      <p class="copyright">Copyright 2021 - IRLVintage</p>
    </div>
  </div>


  <!-- js for toggle form -->

  <script>
    var loginForm = document.getElementById("loginForm");
    var regForm = document.getElementById("regForm");
    var indicator = document.getElementById("indicator");

    function register() {
      regForm.style.transform = "translateX(0px)";
      loginForm.style.transform = "translateX(0px)";
      indicator.style.transform = "translateX(100px)";
    }

    function login() {
      regForm.style.transform = "translateX(300px)";
      loginForm.style.transform = "translateX(300px)";
      indicator.style.transform = "translateX(0px)";
    }
  </script>
</body>

</html>