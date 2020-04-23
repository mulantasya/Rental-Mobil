<?php 
session_start();
include("includes/database.php");
include("functions/functions.php");

?>

<?php

if(isset($_GET['pro_id'])){
	$product_id = $_GET['pro_id'];
	$get_product = "select * from products where product_id='$product_id'";
	$run_product = mysqli_query($con, $get_product);
	$row_product = mysqli_fetch_array($run_product);
	$pro_kat_id = $row_product['pro_kat_id'];
	$product_title = $row_product['product_title'];
	$pro_har_6jam = $row_product['pro_har_6jam'];
	$pro_har_12jam = $row_product['pro_har_12jam'];
	$pro_har_24jam = $row_product['pro_har_24jam'];
	$pro_desc = $row_product['pro_desc'];
	$pro_img1 = $row_product['product_img1'];
	$pro_img2 = $row_product['product_img2'];
	$pro_img3 = $row_product['product_img3'];
	$pro_img4 = $row_product['product_img4'];
	$get_pro_kat = "select * from product_categories where pro_kat_id='$pro_kat_id'";
	$run_pro_kat = mysqli_query($con, $get_pro_kat);
	$row_pro_kat = mysqli_fetch_array($run_pro_kat);
	$pro_kat_title = $row_pro_kat['pro_kat_title'];
}

?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
		<title>Rental Mobil</title>
		<link rel="stylesheet" href="styles/bootstrap-337.min.css">
		<link rel="stylesheet" href="styles/style.css">
		<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	</head>

	<body>
			<div id="top"> <!-- Top Mulai -->
				<div class="container"> <!-- Container Mulai -->
					<div class="col-md-6 offer"> <!-- col-md-6 offer Mulai -->
						<a href="customer/my_account.php?my_orders" class="btn btn-success btn-sm">
							<?php
							if(!isset($_SESSION['customer_email'])){
								echo" Welcome";
							}else{
								echo"Welcome,  " . $_SESSION['customer_email'] ."";
							}
							
							?>
						</a>
						<a href="rincian.php"><?php items(); ?> Mobil, Total Harga sewa Rp <?php total_price(); ?>.000</a>
					</div> <!-- col-md-6 offer Selesai -->
				
					<div class="col-md-6"><!-- col-md-6 Mulai -->
						<ul class="menu"><!-- Menu Mulai -->
							<li>
								<a href="customer_register.php">Register</a>
							</li>
		
							<li>
								<a href="customer/my_account.php">My Account</a>
							</li>
							
							<li>
								<a href="Login.php">
									<?php
									if(!isset($_SESSION['customer_email'])){
										echo"<a href='checkout.php'>Login </a>";
									}else{
										echo "<a href='logout.php'> Log Out </a>";
									}
									
									
									?>
								</a>
							</li>
							
						</ul> <!-- menu Selesai -->
						
					</div> <!-- col-md-6 Selesai -->
					
				</div> <!-- container Selesai -->
				
			</div> <!-- Top Selesai -->
		
			<div id="navbar" class="navbar navbar-default"> <!-- Navbar navbar-default Mulai -->
				
				<div class="container"> <!-- container Mulai -->
				
					<div class="navbar-header"> <!-- navbar-header Mulai -->

						<a href="index.php" class="navbar-brand home"> <!-- navbar-brand home Mulai -->
							<img src="images/Logo-Rentall.png" alt="Rental Logo" class="hidden-xs">
							<img src="images/Logo-Rental-Mobilee.png" alt="Rental Logo" class="visible-xs">
                   
						</a><!-- navbar-brand home Selesai -->
               
						<button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
							<span class="sr-only">Toggle Navigation</span>
                   
							<i class="fa fa-align-justify"></i>
                   
						</button>
               
				
					</div><!-- navbar-header Selesai -->
           
					<div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Mulai -->
               
						<div class="padding-nav"><!-- padding-nav Mulai -->
                   
							<ul class="nav navbar-nav left"><!-- nav navbar-nav left Mulai -->
                       
								<li class="<?php if($active=='Home') echo"active"; ?>">
									<a href="index.php">Home</a>
								</li>
								
								<li class="<?php if($active=='Product') echo"active"; ?>">
									<a href="product.php">Product</a>
								</li>
								
								<li  class="<?php if($active=='Rincian Sewa') echo"active"; ?>">
									<a href="rincian.php">Rincian Sewa</a>
								</li>
								
								<li  class="<?php if($active=='About Us') echo"active"; ?>">
									<a href="about.php">About Us</a>
								</li>
							                  
								<li  class="<?php if($active=='My Account') echo"active"; ?>">
									<?php
									
									if(!isset($_SESSION['customer_email'])){
										echo" <a href='checkout.php'>My Account</a>";
									}else{
										echo" <a href='customer/my_account.php?my_orders'>My Account</a>";
									}
									
									?>
									
								</li>
                       
							</ul><!-- nav navbar-nav left Selesai -->
                   
						</div><!-- padding-nav Selesai -->
               
						<a href="rincian.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Mulai -->
                   
							<i class="fa fa-shopping-cart"></i>
                   
							<span><?php items(); ?> Items In Your Cart</span>
                   
						</a><!-- btn navbar-btn btn-primary Selesai -->
               
           
				</div><!-- container Selesai -->
       
			</div><!-- navbar navbar-default Selesai -->
