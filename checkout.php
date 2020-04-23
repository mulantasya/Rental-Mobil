<?php
$active='Home';
include("includes/header.php");

?>		
		<div id="content"> <!-- content mulai -->
		
			<div class="container"> <!-- container mulai -->
			
				<div class="col-md-12"> <!-- col-md-12 mulai -->
					<ul class="breadcrumb">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							Register
						</li>
					</ul>
				</div> <!-- col-md-12 Selesai -->
				
				<div class="col-md-3"> <!-- col-md-3 mulai -->
				<?php
				include("includes/kolomkategori.php");
				?>
				
				</div> <!-- col-md-3 Selesai -->
				<div class="col-md-9"> <!-- col-md-9 Mulai -->
				<?php
				
				if(!isset($_SESSION['customer_email'])){
					include("customer/customer_login.php");
				}else{
					include("payment_options.php");
				}
				
				?>
				</div> <!-- col-md-9 Selesai -->
			</div> <!-- container Selesai -->
			
		</div> <!-- content Selesai -->
		
	<?php
	include("includes/footer.php");
	?>
	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
	</body>

</html>

