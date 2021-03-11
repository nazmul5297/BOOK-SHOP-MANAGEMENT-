<!DOCTYPE html>
<html lang="en">
<head>
	<title>Users Profiles</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="animsition">

	<header class="header1">
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-child2">
					<div class="topbar-language rs1-select2">
						<a href="logout_admin.php">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logout
						</a>
					</div>
				</div>
			</div>
			<div class="wrap_header">
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="admin_home.html">Home</a>
							</li>
							<li>
								<a href="view_profiles_users.php">View Users Profile</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

<section class="bgwhite p-t-55 p-b-65">

<?php

			include_once('connect.php');
	
		$sql="SELECT * FROM user";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array( $result );
		$uid = $row['uid'];
        	$uname=$row['uname'];
        	$address=$row['address'];
        	$mno=$row['mno'];

        	echo "<div>";
			echo "<div style ='margin-left:300px'>";
			echo "<table style=' font-family:Verdana, Arial, Helvetica, sans-serif; font-size:20px;'>";
			echo "<tr> <th colspan='2' scope='col' style='background-color:red;'>Personal Information</th></tr>";
			echo "<tr>";
			echo "<td>Full Name:</td>";
			echo '<td>' . $uid . '</td>';
			echo "</tr>";
			echo "<tr>";
			echo "<td>ID:</td>";
			echo '<td>' . $uname . '</td>';
			echo "</tr>";
			echo "<tr>";
			echo "<td>Address:</td>";
			echo '<td>' . $address . '</td>';
			echo "</tr>";
			echo "<tr>";
			echo "<td>Mobile Number:</td>";
			echo '<td>' . $mno . '</td>';
			echo "</tr>";	
			echo "</table>";
			echo "</div>";
		while($row = mysqli_fetch_array( $result )) {

            $uid = $row['uid'];
        	$uname=$row['uname'];
        	$address=$row['address'];
        	$mno=$row['mno'];

			echo "<div>";
			echo "<div style ='margin-left:300px'>";
			echo "<table style=' font-family:Verdana, Arial, Helvetica, sans-serif; font-size:20px;'>";
			echo "<tr> <th colspan='2' scope='col' style='background-color:red;'>Personal Information</th></tr>";
			echo "<tr>";
			echo "<td>Full Name:</td>";
			echo '<td>' . $uid . '</td>';
			echo "</tr>";
			echo "<tr>";
			echo "<td>ID:</td>";
			echo '<td>' . $uname . '</td>';
			echo "</tr>";
			echo "<tr>";
			echo "<td>Address:</td>";
			echo '<td>' . $address . '</td>';
			echo "</tr>";
			echo "<tr>";
			echo "<td>Mobile Number:</td>";
			echo '<td>' . $mno . '</td>';
			echo "</tr>";	
			echo "</table>";
			echo "</div>";
		}
?>

</section>


	
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
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
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
	<script src="js/main.js"></script>

</body>
</html>
