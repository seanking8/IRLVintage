<?php
session_start();

$id = $_POST['prd'];



//Connect to DB
include 'connect.php';
$sql = "SELECT * FROM products WHERE ID = " . $id;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$name = $row['NAME'];
$price = $row['PRICE'];
$size = $row['SIZE'];
$desc = $row['DESCRIPTION'];
$img1 = $row['IMG1'];
$img2 = $row['IMG2'];
$img3 = $row['IMG3'];


?>
<html lang="en">

<head>
	<title>Item Details | IRLVintage</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.shop.js"></script>
</head>

<body>

	<div id="site">
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


		<!-- single product details -->

		<div class="smallContainer sProduct" id="products">
			<div class="row">
				<div class="col2">
					<img src="<?php echo $img1; ?>" width="100%" id="productImg" />

					<div class="smallImgRow">
						<div class="smallImgCol">
							<img src="<?php echo $img1; ?>" width="100%" class="smallImg" />
						</div>
						<div class="smallImgCol">
							<img src="<?php echo $img2; ?>" width="100%" class="smallImg" />
						</div>
						<div class="smallImgCol">
							<img src="<?php echo $img3; ?>" width="100%" class="smallImg" />
						</div>
					</div>
				</div>
				<div class="col2">
					<h1><?php echo $name; ?></h1>
					<h4>&euro;<?php echo $price; ?></h4>
					<h4>SIze: <?php echo $size; ?></h4>
					<div class="product-description" data-name="<?php echo $name; ?>" data-price="<?php echo $price; ?>">
						<form class="add-to-cart" action="cart.php" method="get">
							<div id="hidden">
								<label for="qty-1">Quantity</label>
								<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
					<h3>Item Details</h3>
					<br>
					<p><?php echo $desc; ?>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Title -->

	<div class="smallContainer">
		<div class="row row2">
			<h2>Related Clothing</h2>
			<a href="products.php">View More</a>
		</div>
	</div>

	<!-- Clothing -->

	<div class="smallContainer">
		<form action="productDetails.php" method="post" class="productList">
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

	<!-- js for product gallery -->

	<script>
		var productImg = document.getElementById("productImg");
		var smallmg = document.getElementsByClassName("smallImg");

		smallmg[0].onclick = function() {
			productImg.src = smallmg[0].src;
		};
		smallmg[1].onclick = function() {
			productImg.src = smallmg[1].src;
		};
		smallmg[2].onclick = function() {
			productImg.src = smallmg[2].src;
		};
	</script>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$("h1").addClass("animated bounce");
		});
	</script>
</body>

</html>