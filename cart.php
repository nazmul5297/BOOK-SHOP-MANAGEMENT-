
<?php
	session_start();
	include_once('connect.php');
    if(isset($_SESSION['uid'])){
		$id=$_SESSION['uid'];
	}
	else{
		header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.html");
		echo "string";
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="animsition">

	<!-- Header -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="index.html">Bookshop</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item active">
        			<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="product.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				shop
        			</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
        				<a class="dropdown-item" href="product.php">All Product</a>
 			        	<a class="dropdown-item" href="product-science.php">Science</a>
         				<a class="dropdown-item" href="product-engineering.php">Engineering</a>
			          	<a class="dropdown-item" href="product-business.php">Business Studies</a>
          				<a class="dropdown-item" href="product-medical.php">Medical</a>
          				<a class="dropdown-item" href="product-story.php">Story</a>
        			</div>

      				<li class="nav-item">
        				<a class="nav-link" href="sale.html">Sale</a>
      				</li>

			    	<li class="nav-item">
    			    	<a class="nav-link" href="about.html">About</a>
    				</li>

		    	</li>
    		</ul>
    		<ul class="navbar-nav mr-auto">
    	
      			<li class="nav-item">
        			<a class="nav-link" href="logout.php">Logout</a>
      			</li>

      			<li class="nav-item">
        			<a class="nav-link" href="cart.php">Cart</a>
      			</li>
    		</ul>
  		</div>
	</nav>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/hand.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>

		


	</section>

	<!-- Cart -->
	<section class="bgwhite p-t-55 p-b-65">

	<div class="container">
		<?php
			$sql="SELECT * FROM cart JOIN books ON cart.bid=books.bid WHERE cart.uid='$id'";
			$result = mysqli_query($con,$sql);
			

			echo "<table>";

			echo "<tr><th>Book name </th> <th>User ID </th> </tr>";
			while($row = mysqli_fetch_array( $result )) {
				echo "<tr>";
				echo '<td>' . $row['bookname'] . '</td>';
				echo '<td>' . $row['uid'] . '</td>';
				echo "</tr>";
			}
			echo "</table";
		?>

		
	
	</div>
	<form action = "clearcart.php">
		<button type="button" class="btn btn-primary btn-sm">
			<input class="btn btn-primary btn-sm" type="submit" name ="purchase"  >
		</button>
	</form>

	


	</section>


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
					Any questions? Let us know at <font color="blue"><strong>booklabbd@gmail.com</strong> </font>or call us on <font color="blue"><strong>(+880) 017-06216308</strong> </font>
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Science
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Engineering
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Business Studies
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Medical
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Story
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							About Us
						</a>
					</li>

					
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			
			</div>
		</div>

		

			<div class="t-center s-text8 p-t-20">
				Copyright © 2019. All rights reserved. | 
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
