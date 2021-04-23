<?php
session_start();
?>
<html lan="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Clothing | IRLVintage</title>
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

  <div class="smallContainer">
    <div class="row row2">
      <h2>All Clothing</h2>
      <select>
        <option>Sort by Latest</option>
        <option>Sort by Price Low to High</option>
        <option>Sort by Price High to Low</option>
      </select>
    </div>


    <form action="productDetails.php" method="post" class="productList">


      <div class="row">

        <div class="col4">
        <button type="submit" value="7" name="prd"><img src="img/a1.png" alt=""></button>
          <h4>Ellesse Oversized Jumper</h4></a>
          <p>&euro;18.00</p>
        </div>
        <div class="col4">
        <button type="submit" value="8" name="prd"><img src="img/b1.png" alt=""></button>
          <h4>Pattern Fleece</h4></a>
          <p>&euro;15.00</p>
        </div>
        <div class="col4">
        <button type="submit" value="9" name="prd"><img src="img/c1.png" alt=""></button>
          <h4>UM Sweatshirt</h4></a>
          <p>&euro;12.00</p>
        </div>
        <div class="col4">
        <button type="submit" value="10" name="prd"><img src="img/d1.png" alt=""></button>
          <h4>Elephant Pattern Fleece</h4></a>
          <p>&euro;22.00</p>
        </div>

      </div>

      <div class="row">

        <div class="col4">
        <button type="submit" value="11" name="prd"><img src="img/e1.png" alt=""></button>
          <h4>Green / Cream Fleece</h4></a>
          <p>&euro;18.00</p>
        </div>
        <div class="col4">
        <button type="submit" value="12" name="prd"><img src="img/f1.png" alt=""></button>
          <h4>Butterfly Top</h4></a>
          <p>&euro;10.00</p>
        </div>
        <div class="col4">
        <button type="submit" value="13" name="prd"><img src="img/g1.png" alt=""></button>
          <h4>Green Skull Jumper</h4></a>
          <p>&euro;15.00</p>
        </div>
        <div class="col4">
        <button type="submit" value="15" name="prd"><img src="img/i1.png" alt=""></button>
          <h4>Arlington Basketball Jersey</h4></a>
          <p>&euro;12.00</p>
        </div>

      </div>

      <div class="row">

        <div class="col4">
        <button type="submit" value="19" name="prd"><img src="img/m1.png" alt=""></button>
          <h4>Checkered Pants</h4></a>
          <p>&euro;14.00</p>
        </div>
        <div class="col4">
        <button type="submit" value="20" name="prd"><img src="img/n1.png" alt=""></button>
          <h4>Two-Tone Jeans</h4></a>
          <p>&euro;15.00</p>
        </div>
        <div class="col4">
        <button type="submit" value="16" name="prd"><img src="img/j1.png" alt=""></button>
          <h4>Sham T-Shirt</h4></a>
          <p>&euro;18.00</p>
        </div>
        <div class="col4">
        <button type="submit" value="17" name="prd"><img src="img/k1.png" alt=""></button>
          <h4>The Specials Cropped T-Shirt</h4></a>
          <p>&euro;13.00</p>
        </div>

      </div>
    </form>
  </div>

  <div class="pageBtn">
    <span>1</span>
    <span>2</span>
    <span>3</span>
    <span>4</span>
    <span>&#8594;</span>
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