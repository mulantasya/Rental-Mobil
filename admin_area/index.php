<?php

session_start();
include("includes/database.php");
if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{
	$admin_session = $_SESSION['admin_email'];
	$get_admin = "select * from admins where admin_email='$admin_session'";
	$run_admin = mysqli_query($con, $get_admin);
	$row_admin = mysqli_fetch_array($run_admin);
	$admin_id = $row_admin['admin_id'];
	$admin_name = $row_admin['admin_name'];
	
		$admin_email = $row_admin['admin_email'];
		$admin_pass = $row_admin['admin_pass'];
		$admin_image = $row_admin['admin_image'];
		$admin_country = $row_admin['admin_country'];
		$admin_about = $row_admin['admin_about'];
		$admin_contact = $row_admin['admin_contact'];
		$admin_job = $row_admin['admin_job'];
	
	$get_products = "select * from products";
	$run_products = mysqli_query($con,$get_products);
	$count_products = mysqli_num_rows($run_products);
	$get_customers = "select * from customers";
	$run_customers = mysqli_query($con, $get_customers);
	$count_customers = mysqli_num_rows($run_customers);
	$get_pro_kat = "select * from product_categories";
	$run_pro_kat = mysqli_query($con, $get_pro_kat);
	$count_pro_kat = mysqli_num_rows($run_pro_kat);
	$get_pending_booking = "select * from pending_booking";
	$run_pending_booking = mysqli_query($con, $get_pending_booking);
	$count_pending_booking = mysqli_num_rows($run_pending_booking);
?>

<!doctype html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
		<title>Admin North Biems</title>
		<link rel="stylesheet" href="css/bootstrap-337.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	</head>

<body>
	<div id="wrapper"> <!-- #Wrapper mulai -->
		<?php include("includes/kolomkategori.php"); ?>
		<div id="page-wrapper"> <!-- #page-wrapper mulai -->
			<div class="container-fluid"> <!-- container-fluid mulai -->
				<?php
					
				if(isset($_GET['dashboard'])){
					include("dashboard.php");
				}
				if(isset($_GET['insert_product'])){
					include("insert_product.php");
				}
				if(isset($_GET['view_products'])){
					include("view_products.php");
				}
				if(isset($_GET['delete_product'])){
					include("delete_product.php");
				}
				if(isset($_GET['edit_product'])){
					include("edit_product.php");
				}
				if(isset($_GET['view_pro_kat'])){
					include("view_pro_kat.php");
				}
				if(isset($_GET['insert_pro_kat'])){
					include("insert_pro_kat.php");
				}
				if(isset($_GET['delete_pro_kat'])){
					include("delete_pro_kat.php");
				}
				if(isset($_GET['edit_pro_kat'])){
					include("edit_pro_kat.php");
				}
				if(isset($_GET['insert_kapa'])){
					include("insert_kapa.php");
				}
				if(isset($_GET['view_kapa'])){
					include("view_kapa.php");
				}
				if(isset($_GET['edit_kapa'])){
					include("edit_kapa.php");
				}
				if(isset($_GET['delete_kapa'])){
					include("delete_kapa.php");
				}
				if(isset($_GET['insert_harga_kat'])){
					include("insert_harga_kat.php");
				}
				if(isset($_GET['view_harga_kat'])){
					include("view_harga_kat.php");
				}
				if(isset($_GET['edit_harga_kat'])){
					include("edit_harga_kat.php");
				}
				if(isset($_GET['delete_harga_kat'])){
					include("delete_harga_kat.php");
				}
				if(isset($_GET['insert_slide'])){
					include("insert_slide.php");
				}
				if(isset($_GET['view_slide'])){
					include("view_slide.php");
				}
				if(isset($_GET['delete_slide'])){
					include("delete_slide.php");
				}
				if(isset($_GET['edit_slide'])){
					include("edit_slide.php");
				}
				if(isset($_GET['view_customers'])){
					include("view_customers.php");
				}
				if(isset($_GET['delete_customers'])){
					include("delete_customers.php");
				}
				if(isset($_GET['edit_customers'])){
					include("edit_customers.php");
				}
				if(isset($_GET['view_booking'])){
					include("view_booking.php");
				}
				if(isset($_GET['delete_booking'])){
					include("delete_booking.php");
				}
				if(isset($_GET['view_payments'])){
					include("view_payments.php");
				}
				if(isset($_GET['delete_payments'])){
					include("delete_payments.php");
				}
				if(isset($_GET['view_user'])){
					include("view_user.php");
				}
				if(isset($_GET['delete_user'])){
					include("delete_user.php");
				}
				if(isset($_GET['insert_user'])){
					include("insert_user.php");
				}
				if(isset($_GET['user_profile'])){
					include("user_profile.php");
				}
				if(isset($_GET['insert_terms'])){
					include("insert_terms.php");
				}
				if(isset($_GET['view_terms'])){
					include("view_terms.php");
				}
				if(isset($_GET['edit_terms'])){
					include("edit_terms.php");
				}
				if(isset($_GET['delete_terms'])){
					include("delete_terms.php");
				}
				if(isset($_GET['edit_css'])){
					include("edit_css.php");
				}
	
	
	
	
	
	
				?>
			</div> <!-- container-fluid selesai -->
		</div> <!-- #page-wrapper selesai -->
	</div> <!-- #Wrapper selesai -->
	
	
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>

<?php

}

?>