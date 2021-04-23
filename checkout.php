<!DOCTYPE html>
<html>

<head>
  <title>Checkout | IRLVintage</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet" />

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.shop.js"></script>
</head>

<body id="checkout-page">
  <div class="container">
    <div class="navBar">
      <div class="logo">
        <a href="home.php"><img src="https://i.ibb.co/syY2nT6/Logo2.png" alt="Logo2" width="125px" /></a>
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

  <div id="site">
    <div class="smallContainer" id="checkCart">
      <h2 class="title2">Checkout</h2>
      <table id="checkout-cart" class="shopping-cart">
        <thead>
          <tr>
            <th scope="col">Item</th>
            <th scope="col">Qty</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>

      <div class="tPrice">
        <table>
          <tr>
            <td>Shipping: </td>
            <td><span id="sshipping"></span></td>
          </tr>
          <tr>
            <td>Total: </td>
            <td><span id="stotal"></span></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="smallContainer">
      <form action="order.php" method="post" id="checkout-order-form">
        <h2 class="title2">Your Details</h2>

        <fieldset id="fieldset-billing">
          <legend>Billing</legend>
          <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" data-type="string" data-message="This field cannot be empty" />
          </div>
          <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" data-type="expression" data-message="Not a valid email address" />
          </div>
          <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city" data-type="string" data-message="This field cannot be empty" />
          </div>
          <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" data-type="string" data-message="This field cannot be empty" />
          </div>
          <div>
            <label for="zip">ZIP Code</label>
            <input type="text" name="zip" id="zip" data-type="string" data-message="This field cannot be empty" />
          </div>
          <div>
            <label for="country">Country</label>
            <select name="country" id="country" data-type="string" data-message="This field cannot be empty">
              <option value="">Select</option>
              <option value="Ireland">Ireland</option>
              <option value="UK">UK</option>
            </select>
          </div>
        </fieldset>

        <div id="shipping-same">
          Same as Billing
          <input type="checkbox" id="same-as-billing" value="" default="unchecked"/>
        </div>

        <fieldset id="fieldset-shipping">
          <legend>Shipping</legend>

          <div>
            <label for="sname">Name</label>
            <input type="text" name="sname" id="sname" data-type="string" data-message="This field cannot be empty" />
          </div>
          <div>
            <label for="semail">Email</label>
            <input type="text" name="semail" id="semail" data-type="expression" data-message="Not a valid email address" />
          </div>
          <div>
            <label for="scity">City</label>
            <input type="text" name="scity" id="scity" data-type="string" data-message="This field cannot be empty" />
          </div>
          <div>
            <label for="saddress">Address</label>
            <input type="text" name="saddress" id="saddress" data-type="string" data-message="This field cannot be empty" />
          </div>
          <div>
            <label for="szip">ZIP Code</label>
            <input type="text" name="szip" id="szip" data-type="string" data-message="This field cannot be empty" />
          </div>
          <div>
            <label for="scountry">Country</label>
            <select name="scountry" id="scountry" data-type="string" data-message="This field cannot be empty">
              <option value="">Select</option>
              <option value="Ireland">Ireland</option>
              <option value="UK">UK</option>
            </select>
          </div>
        </fieldset>

        <p>
          <input type="submit" id="submit-order" value="Submit" class="btn" />
        </p>
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