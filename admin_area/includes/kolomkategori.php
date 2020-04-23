<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{
?>

<nav class="navbar navbar-inverse navbar-fixed-top"> <!-- navbar navbar-inverse navbar-fixed-top mulai -->
	<div class="navbar-header"> <!-- navbar-header mulai -->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle Navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="index.php?dashboard" class="navbar-brand">Admin area</a>
	</div> <!-- navbar-header selesai -->
	<ul class="nav navbar-right top-nav">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-user"></i> <?php echo  $admin_name; ?> <b class="caret"></b>
			</a> <!-- dropdown-toggle selesai -->
			<ul class="dropdown-menu">
				<li>
					<a href="index.php?user_profile=<?php echo $admin_id; ?>">
						<i class="fa fa-fw fa-user"></i> Profile
					</a> <!-- a href selesai -->
				</li> <!-- li selesai -->
				
				<li>
					<a href="index.php?view_products">
						<i class="fa fa-fw fa-envelope"></i> Products
						<span class="badge"><?php echo $count_products; ?></span>
					</a> <!-- a href selesai -->
				</li> <!-- li selesai -->
				
				<li>
					<a href="index.php?view_customers">
						<i class="fa fa-fw fa-user"></i> Customers
						<span class="badge"><?php echo $count_customers; ?></span>
					</a> <!-- a href selesai -->
				</li> <!-- li selesai -->
				
				<li>
					<a href="index.php?view_pro_kat">
						<i class="fa fa-fw fa-gear"></i> Kategori Mobil
						<span class="badge"><?php echo $count_pro_kat; ?></span>
					</a> <!-- a href selesai -->
				</li> <!-- li selesai -->
				<li class="divider"></li>
				<li>
					<a href="logout.php">
						<i class="fa fa-fw fa-power-off"></i> Log Out
					</a> <!-- a href selesai -->
				</li> <!-- li selesai -->
				
			</ul> <!-- dropdown-menu selesai -->
		</li> <!-- dropdown selesai -->
	</ul> <!-- nav navbar-right top-nav selesai -->
	
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			<li>
				<a href="index.php?dashboard">
					<i class="fa fa-fw fa-dashboard"></i> Dashboard
				</a>
			</li>
			
			<li>
				<a href="#" data-toggle="collapse" data-target="#products">
					<i class="fa fa-fw fa-tag"></i> Products
					<i class="fa fa-fw fa-caret-down"></i> 
				</a>
				
				<ul id="products" class="collapse">
					<li>
						<a href="index.php?insert_product"> Insert Product</a>
					</li>
					<li>
						<a href="index.php?view_products"> View Product</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="#" data-toggle="collapse" data-target="#pro_kat">
					<i class="fa fa-fw fa-edit"></i> Product Categories
					<i class="fa fa-fw fa-caret-down"></i> 
				</a>
				
				<ul id="pro_kat" class="collapse">
					<li>
						<a href="index.php?insert_pro_kat"> Insert Product Categories</a>
					</li>
					<li>
						<a href="index.php?view_pro_kat"> View Products categories</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="#" data-toggle="collapse" data-target="#kat">
					<i class="fa fa-fw fa-book"></i> Kapasitas
					<i class="fa fa-fw fa-caret-down"></i> 
				</a>
				
				<ul id="kat" class="collapse">
					<li>
						<a href="index.php?insert_kapa"> Insert Kapasitas</a>
					</li>
					<li>
						<a href="index.php?view_kapa"> View Kapasitas</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="#" data-toggle="collapse" data-target="#har">
					<i class="fa fa-fw fa-money"></i> Harga Categories
					<i class="fa fa-fw fa-caret-down"></i> 
				</a>
				
				<ul id="har" class="collapse">
					<li>
						<a href="index.php?insert_harga_kat"> Insert Harga Categories</a>
					</li>
					<li>
						<a href="index.php?view_harga_kat"> View Harga Categories</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="#" data-toggle="collapse" data-target="#terms">
					<i class="fa fa-fw fa-table"></i> Terms
					<i class="fa fa-fw fa-caret-down"></i>
				</a>
				
				<ul id="terms" class="collapse">
					<li>
						<a href="index.php?insert_terms"> Insert Terms</a>
					</li>
					<li>
						<a href="index.php?view_terms"> View Terms</a>
					</li>
				</ul>
			</li>

			
			<li>
				<a href="#" data-toggle="collapse" data-target="#slides">
					<i class="fa fa-fw fa-gear"></i> Slides
					<i class="fa fa-fw fa-caret-down"></i> 
				</a>
				
				<ul id="slides" class="collapse">
					<li>
						<a href="index.php?insert_slide"> Insert Slide</a>
					</li>
					<li>
						<a href="index.php?view_slide"> View Slide</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="index.php?view_customers">
					<i class="fa fa-fw fa-users"></i> View Customers 
				</a>
			</li>
			
			<li>
				<a href="index.php?view_booking">
					<i class="fa fa-fw fa-book"></i> View Booking
				</a>
			</li>
			
			<li>
				<a href="index.php?view_payments">
					<i class="fa fa-fw fa-money"></i> View Payments
				</a>
			</li>
			
			<li>
				<a href="index.php?edit_css">
					<i class="fa fa-fw fa-pencil"></i> CSS Editor
				</a> <!-- a href selesai -->
			</li> <!-- li selesai -->
				
			
			<li>
				<a href="#" data-toggle="collapse" data-target="#users">
					<i class="fa fa-fw fa-user"></i> Users
					<i class="fa fa-fw fa-caret-down"></i> 
				</a>
				
				<ul id="users" class="collapse">
					<li>
						<a href="index.php?insert_user"> Insert user</a>
					</li>
					<li>
						<a href="index.php?view_user"> View user</a>
					</li>
					<li>
						<a href="index.php?user_profile=<?php echo $admin_id; ?>">Edit user profile</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="logout.php">
					<i class="fa fa-fw fa-power-off"></i> Log Out
				</a>
			</li>
		</ul> <!-- nav navbar-nav slide-nav selesai -->
	</div> <!-- collapse navbar-collapse navbar-ex1-collapse selesai -->
</nav> <!-- navbar navbar-inverse navbar-fixed-top selesai -->

<?php
	
}

?>