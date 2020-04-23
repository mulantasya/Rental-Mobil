<?php 
session_start();
if(!isset($_SESSION['customer_email'])){
	echo"<script>window.open('../checkout.php','_self')</script>";
}else{
	
include("includes/database.php");
include("functions/functions.php");

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
						<a href="my_account.php?my_orders" class="btn btn-success btn-sm">
							<?php
							if(!isset($_SESSION['customer_email'])){
								echo" Welcome";
							}else{
								echo"Welcome,  " . $_SESSION['customer_email'] ."";
							}
							
							?>	
						</a>
						<a href="../checkout.php"><?php items(); ?> Mobil, Total Harga sewa Rp. <?php total_price(); ?></a>
					</div> <!-- col-md-6 offer Selesai -->
				
					<div class="col-md-6"><!-- col-md-6 Mulai -->
						<ul class="menu"><!-- Menu Mulai -->
							<li>
								<a href="../customer_register.php">Register</a>
							</li>
		
							<li>
								<a href="customer/my_account.php">My Account</a>
							</li>
							
							
							<li>
								<a href="../checkout.php">
								<?php
									if(!isset($_SESSION['customer_email'])){
										echo"<a href='../checkout.php'>Login </a>";
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

						<a href="../index.php" class="navbar-brand home"> <!-- navbar-brand home Mulai -->
							<img src="images/Logo-Rental.png" alt="Rental Logo" class="hidden-xs">
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
                       
								<li>
									<a href="../index.php">Home</a>
								</li>
								
								<li>
									<a href="../product.php">Product</a>
								</li>
								
								<li>
									<a href="../rincian.php">Rincian Sewa</a>
								</li>
								
								<li>
									<a href="../about.php">About Us</a>
								</li>
							                  
								<li class="active">
									<a href="my_account.php">My Account</a>
								</li>
                       
							</ul><!-- nav navbar-nav left Selesai -->
                   
						</div><!-- padding-nav Selesai -->
               
						<a href="../rincian.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Mulai -->
                   
							<i class="fa fa-shopping-cart"></i>

                   
							<span><?php items(); ?> Items In Your Cart</span>
                   
						</a><!-- btn navbar-btn btn-primary Selesai -->
               
						<div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Mulai -->
                   
                   
						</div><!-- navbar-collapse collapse right Selesai -->
               
						<div class="collapse clearfix" id="search"><!-- collapse clearfix Mulai -->
                   
							<form method="get" action="results.php" class="navbar-form"><!-- navbar-form Mulai -->
                       
								<div class="input-group"><!-- input-group Mulai -->
							
									<input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
									<span class="input-group-btn"><!-- input-group-btn Mulai -->
                           
										<button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Mulai -->
                               
											<i class="fa fa-search"></i>
                               
										</button><!-- btn btn-primary Selesai -->
                           
									</span><!-- input-group-btn Selesai -->
                           
								</div><!-- input-group Selesai -->
                       
							</form><!-- navbar-form Selesai -->
                   
						</div><!-- collapse clearfix Selesai -->
               
					</div><!-- navbar-collapse collapse Selesai -->
           
				</div><!-- container Selesai -->
       
			</div><!-- navbar navbar-default Selesai -->

   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="../index.php">Home</a>
                   </li>
                   <li>
                       My Account
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/kolomkategori.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <?php
                   
                   if (isset($_GET['my_orders'])){
                       include("my_orders.php");
                   }
                   
                   ?>
				   
				   
				   <?php
                   
                   if (isset($_GET['edit_account'])){
                       include("edit_account.php");
                   }
                   
                   ?>
				   
				    <?php
                   
                   if (isset($_GET['change_password'])){
                       include("change_password.php");
                   }
                   
                   ?>
				   
				   <?php
                   
                   if (isset($_GET['delete_account'])){
                       include("delete_account.php");
                   }
                   
                   ?>
				   
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
<?php
}
	?>