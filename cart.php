<!-- <!DOCTYPE html> -->

<?php
session_start();
?>
<html>
  <head>
    <title>Shopping Cart | IRLVintage</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />

    <script
      type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"
    ></script>
    <script type="text/javascript" src="js/jquery.shop.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="navBar">
        <div class="logo">
          <a href="home.php"
            ><img
              src="https://i.ibb.co/syY2nT6/Logo2.png"
              alt="Logo2"
              width="125px"
          /></a>
        </div>
        <nav>
          <ul id="menuItems">
            <li><a href="home.php">Home</a></li>
            <li><a href="products.php">Clothing</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login/logout.php">Logout</a></li>
          </ul>
        </nav>
        <a href="cart.php"
          ><img src="img/cart1.png" width="30px" height="30px"
        /></a>
        <img src="img/menu.png" class="menuIcon" onclick="menutoggle()" />
      </div>
    </div>

    <div id="site">
      <div class="smallContainer cartPage">
        <form id="shopping-cart" action="cart.php" method="get">
          <table class="shopping-cart">
            <thead>
              <tr>
                <th>Item</th>
                <th>Remove</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>

          <div class="tPrice">
            <table>
              <tr>
                <td>Subtotal</td>
                <td><span id="stotal"></span></td>
              </tr>
            </table>
          </div>

          <div>
            <ul id="shopping-cart-actions">
              <li class="cartBtn">
                <input
                  type="submit"
                  name="delete"
                  id="empty-cart"
                  class="btn"
                  value="Empty Cart"
                />
              </li>
              <li class="cartBtn">
                <a href="products.php" class="btn">Continue Shopping</a>
              </li>
              <li class="cartBtn">
                <a href="checkout.php" class="btn">Go To Checkout</a>
              </li>
            </ul>
          </div>
        </form>
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
                <a href="https://www.facebook.com/"
                  ><img src="img/fb.png" alt="FB Icon"
                /></a>
              </li>
              <br />
              <li>
                <a href="https://www.instagram.com/"
                  ><img src="img/ig.png" alt="IG Icon"
                /></a>
              </li>
            </ul>
          </div>
        </div>
        <hr />
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
