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
						<li>
							<a href="product.php?product_kat=<?php echo $pro_kat_id; ?>"><?php echo $pro_kat_title; ?></a>
						</li>
						<li>
						<?php  echo $product_title; ?>
						</li>
					</ul>
				</div> <!-- col-md-12 Selesai -->
				
				<div class="col-md-3"> <!-- col-md-3 mulai -->
				<?php
				include("includes/kolomkategori.php");
				?>
				
				</div> <!-- col-md-3 Selesai -->
				
				<div class="col-md-9"> <!-- col-md-9 mulai -->
					<div id="productMain" class="row"> <!-- product main mulai -->
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<div id="mainImage"> <!-- main image mulai -->
								<div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- carousel slide mulai -->
									<ol class="carousel-indicators"> <!-- carousel-indicators mulai -->
										<li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
										<li data-target="#myCarousel" data-slide-to="1" ></li>
										<li data-target="#myCarousel" data-slide-to="2" ></li>
										<li data-target="#myCarousel" data-slide-to="3" ></li>
									</ol> <!-- carousel-indicators Selesai -->
									
									<div class="carousel-inner"> <!-- carousel-inner mulai -->
										<div class="item active"> <!-- item active mulai -->
											<center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="mobil1"></center>
										</div> <!-- item active selesai -->
										<div class="item"> <!-- item mulai -->
											<center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="mobil2"></center>
										</div> <!-- item selesai -->
										<div class="item"> <!-- item mulai -->
											<center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="mobil3"></center>
										</div> <!-- item selesai -->
										<div class="item"> <!-- item mulai -->
											<center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img4; ?>" alt="mobil4"></center>
										</div> <!-- item selesai -->
									</div> <!-- carousel-inner selesai -->
									<a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- left carousel-control mulai -->
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Previous</span>
									</a> <!-- left carousel-control selesai -->
									<a href="#myCarousel" class="right carousel-control" data-slide="next"> <!-- right carousel-control mulai -->
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Previous</span>
									</a> <!-- right carousel-control selesai -->
								</div> <!-- carousel slide Selesai -->
							</div> <!-- main image Selesai -->
						</div> <!-- col-md-6 Selesai -->
						
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<div class="box"> <!-- box mulai -->
								<h1 class="text-center"><?php echo $product_title; ?></h1>
								<?php add_cart(); ?>
								<form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"> <!-- form-horizontal mulai -->
									<div class="form-group">
									<label for="" class="col-md-5 control-label">Jam Sewa</label>
										
										<div class="col-md-7">
											<select name="jam_sewa" id="" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('You must pick jam sewa')">
												<option disabled selected>Pilih jam Sewa</option>
												<option>6 Jam</option>
												<option>12 Jam</option>
												<option>24 Jam</option>
											</select>
										</div>
										</div>
									
									<p class="prices">Rp <?php echo $pro_har_6jam; ?>.000</p>
								
									<p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Booking</button></p>
								</form> <!-- form-horizontal selesai -->
							
							</div> <!-- box Selesai -->
							
							<div class="row" id="thumbs"> <!-- row mulai -->
								<div class="col-xs-4"> <!-- col-xs-4 mulai -->
									<a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"> <!-- thumb mulai -->
										<img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="mobil1" class="img-responsive">
									</a> <!-- thumb selesai -->
								</div> <!-- col-xs-4 Selesai -->
								<div class="col-xs-4"> <!-- col-xs-4 mulai -->
									<a data-target="#myCarousel" data-slide-to="1" href="#"  class="thumb"> <!-- thumb mulai -->
										<img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="mobil2" class="img-responsive">
									</a> <!-- thumb selesai -->
								</div> <!-- col-xs-4 Selesai -->
								<div class="col-xs-4"> <!-- col-xs-4 mulai -->
									<a data-target="#myCarousel" data-slide-to="2" href="#"  class="thumb"> <!-- thumb mulai -->
										<img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="mobil3" class="img-responsive">
									</a> <!-- thumb selesai -->
								</div> <!-- col-xs-4 Selesai -->
								
							</div> <!-- row Selesai -->
						</div> <!-- col-md-6 Selesai -->
					</div> <!-- product main Selesai -->
					<div class="box" id="details"> <!-- box mulai -->
						<h4>Product Details</h4>
						<p>
							<?php echo $pro_desc; ?>
							<a href="terms.php"> Terms & Condition</a>
						</p>
						<hr>
						<h4> Termasuk </h4>
						<ul>
							<li>Asuransi untuk mobil dan penumpang</li>
							<li>Penggunaan hingga 24 jam per hari</li>
				
						</ul>
						<hr>
						<h4> Alasan Memilih Kami </h4>
						<ul>
							<li>Performa Baik</li>
							<li>Berpengalaman</li>
							<li>kenyamanan</li>
							<li>Respon Cepat</li>
				
						</ul>
					</div> <!-- box Selesai -->
					<div id="row same-height-row"> <!-- row same-height-row mulai -->
						<div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 mulai -->
							<div class="box same-height headline"> <!-- box same-height headline mulai -->
								<h3 class="text-center">Products You Maybe Like</h3>
							</div> <!-- box same-height headline Selesai -->
						</div> <!-- col-md-3 col-sm-6 Selesai -->
						
						<?php
						
						$get_products = "select * from products order by rand() LIMIT 0,3";
						$run_products = mysqli_query($con, $get_products);
						
						while($row_products = mysqli_fetch_array($run_products)){
							$pro_id = $row_products['product_id'];
							$product_title = $row_products['product_title'];
							$pro_img1 = $row_products['product_img1'];
							$pro_har_6jam = $row_products['pro_har_6jam'];
							$pro_har_12jam = $row_products['pro_har_12jam'];
							echo"
							<div class = 'col-md-3 col-sm-6 center-responsive'>
								<div class = 'product same-height'>
									<a href='details.php?pro_id=$pro_id'>
										<img class='img-responsive' src='admin_area/product_images/$pro_img1'>
									</a>
									<div class='text'>
										<h3><a href='details.php?product_id=$pro_id'> $product_title</a></h3>
										<p class='prices'>Rp $pro_har_6jam.000</p>
									</div>
								</div>
							</div>
						";	
						}
						?>
					</div> <!-- row same-height-row Selesai -->
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