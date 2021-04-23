<?php
session_start();

require_once('PHPMailer/PHPMailerAutoload.php');

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $mail_from = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $txt = "From: " . $name . ".\n\n\n" . $message;

  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = '465';
  $mail->isHTML();
  $mail->Username = 'sean.irlvintage@gmail.com';
  $mail->Password = 'SparAbbey33';
  $mail->SetFrom($mail_from);
  $mail->Subject = $subject;
  $mail->Body = $txt;
  $mail->AddAddress('irlvintage@outlook.com');

  $mail->send();

  header("location: contact.php?mailsend");
}

?>

<html lan="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact | IRLVintage</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- <script type="text/javascript" src="js/bootstrap.bundle.js"></script> -->
</head>

<body>
  <div class="container">
    <div class="navBar">
      <div class="logo">
        <a href="home.php"><img src="https://i.ibb.co/syY2nT6/Logo2.png" alt="Logo2" width="125px"></a>
      </div>
      <nav>
        <ul id="menuItems">
          <li><a href="home.php">Home</a></li>
          <li><a href="products.php">Clothing</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login/logout.php">Logout</a></li>
        </ul>
      </nav>
      <a href="cart.php"><img src="img/cart1.png" width="30px" height="30px" /></a>
      <img src="img/menu.png" class="menuIcon" onclick="menutoggle()" />
    </div>
  </div>

  <h2 class="title">Contact Us</h2>

  <div class="smallContainer contact-form">
    <p>We would love to hear your thoughts on anything we can do to improve your experience with IRLVintage!</p>
    <br>

    <form id="contact-form" action="contact.php" method="post">
      <input type="text" name="name" class="form-control" placeholder="Your Name" required>
      <br>
      <input type="email" name="email" class="form-control" placeholder="Your Email" required>
      <br>
      <input type="text" name="subject" class="form-control" placeholder="Subject" required>
      <br>
      <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea>
      <br>
      <input type="submit" name="submit" class="btn" value="SEND MESSAGE">

    </form>

  </div>

  <!-- Footer -->

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>App coming soon to Android and ios devices.</p>
          <div class="app-logo">
            <img src="img/play-store.png">
            <img src="img/app-store.png">
          </div>
        </div>
        <div class="footer-col-2">
          <img src="img/Logo2.png">
        </div>

        <div class="footer-col-3">
          <h3>Follow Us</h3>
          <ul>
            <li><a href="https://www.facebook.com/"><img src="img/fb.png" alt="FB Icon"></a></li>
            <br>
            <li><a href="https://www.instagram.com/"><img src="img/ig.png" alt="IG Icon"></a></li>
          </ul>
        </div>
      </div>
      <hr>
      <p class="copyright">Copyright 2021 - IRLVintage</p>
    </div>
  </div>

  <!-- js for toggle menu -->

  <script>
    var menuItems = document.getElementById("menuItems");

    menuItems.style.maxHeight = "0px";

    function menutoggle() {
      if (menuItems.style.maxHeight == "0px") {
        menuItems.style.maxHeight = "200px";
      } else {
        menuItems.style.maxHeight = "0px";
      }
    }
  </script>
</body>

</html>