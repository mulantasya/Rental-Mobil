<?php
$active='Product';
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
							Product
						</li>
					</ul>
				</div> <!-- col-md-12 Selesai -->
				
				<div class="col-md-3"> <!-- col-md-3 mulai -->
				<?php
				include("includes/kolomkategori.php");
				?>
				
				</div> <!-- col-md-3 Selesai -->
				
				<div class="col-md-9"> <!-- col-md-9 mulai -->
					<?php
					if(!isset($_GET['product_kat'])){
						if(!isset($_GET['pro_kapa'])){
							if(!isset($_GET['product_har'])){
						
					echo"
					
					<div class='box'> <!-- box mulai -->
						<h1> Product</h1>
						<p>
							
							Rental Mobil memberikan harga sewa mobil dengan harga kompetitif. Kami menyediakan sewa mobil Honda, Toyota, Daihatsu, Nissan dan Wuling. Dengan di dukung driver yang berpengalaman lebih dari 5 tahun masa kerja. Silahkan pilih mobil yang sesuai kebutuhan anda.
							
						</p>
					</div> <!-- box Selesai -->
					";
					}
					}
					}
					?>
					<div class="row"> <!-- row mulai -->
						<?php
						if(!isset($_GET['product_kat'])){
							if(!isset($_GET['pro_kapa'])){
								if(!isset($_GET['product_har'])){
								$per_page=6;
									if(isset($_GET['page'])){
										$page = $_GET['page'];
									}
									else{
										$page=1;
									}
									$start_from=($page-1) * $per_page;
									$get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
									$run_products = mysqli_query($con, $get_products);
									while($row_products = mysqli_fetch_array($run_products)){
										$pro_id = $row_products['product_id'];
										$pro_title = $row_products['product_title'];
										$pro_harga = $row_products['pro_har_6jam'];
										$pro_img1 = $row_products['product_img1'];
										
										echo "
											
										<div class='col-md-4 col-sm-6 center-responsive'>
											<div class='product'>
												<a href='details.php?pro_id=$pro_id'>
													<img class='img-responsive' src='admin_area/product_images/$pro_img1'></img>
												</a>
												<div class='text'>
													<h3>
														<a href='details.php?pro_id=$pro_id'>$pro_title</a>
													</h3>
													
													<p class='prices'>
														Rp $pro_harga.000
													</p>
													
													<p class='button'>
														<a class='btn btn-default' href='details.php?pro_id=$pro_id'>
															View Details
														</a>
														
														<a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
															<i class='fa fa-shopping-cart'></i> Booking
														</a>
													</p>
												</div>
											</div>
										
										</div>
										
										";

									
								
							
						}
						?>
					</div> <!-- row Selesai -->
					
					<center>
						<ul class="pagination"> <!-- Pagination mulai -->
							<?php
							$query = "select * from products";
							$result = mysqli_query($con, $query);
							$total_records = mysqli_num_rows($result);
							$total_pages = ceil($total_records / $per_page);
							
							echo "
								<li>
									<a href='product.php?page=1'>".'First Page'."</a>
								</li>
							";
							
							for($i=1; $i<=$total_pages;$i++){
								echo"
									<li>
										<a href='product.php?page=".$i."'>".$i."</a>
									</li>
								";	
								
							};
							
							echo"
								<li>
									<a href='product.php?page=$total_pages'>".'Last Page'."</a>
								</li>
							";
								}}}
							?>
						</ul> <!-- Pagination selesai -->
					</center>
					
					
					<?php 
					getPKatPro();
					getKatPro();
					getHarPro();
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