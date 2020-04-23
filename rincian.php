<?php
$active='Rincian Sewa';
include("includes/header.php");

?>		
		<div id="content"> <!-- content mulai -->
		
			<div class="container"> <!-- container mulai -->
			
				<div class="col-md-12"> <!-- col-md-12 mulai -->
					<ul class="breadcrumb"> <!-- breadcrumb mulai -->
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							Rincian Sewa
						</li>
					</ul> <!-- breadcrumb selesai -->
				</div> <!-- col-md-12 Selesai -->
				
				<div id="rincian" class="col-md-9"> <!-- col-md-9 mulai -->
					<div class="box"> <!-- box mulai -->
						<form action="rincian.php" method="post" enctype="multipart/form-data"> <!-- form mulai -->
							<h1>Rincian Sewa</h1>
							
							<?php
							$ip_add = getRealIpUser();
							$select_perhitungan = "select * from perhitungan where ip_add = '$ip_add'";
							$run_perhitungan = mysqli_query($con, $select_perhitungan);
							$count = mysqli_num_rows($run_perhitungan);
							
							?>
							<p class="text-muted"> Berikut Rincian Sewa Mobil Anda, ada <?php echo $count; ?> Mobil yang di sewa  </p>
							
							<div class="table-responsive"> <!-- table-responsive mulai -->
								
								<table class="table"> <!-- table mulai -->
									<thead> <!-- thead mulai -->
										<tr> <!-- tr mulai -->
											<th colspan="2"> Product</th>
											<th> Unit Price</th>
											<th> Jam Sewa</th>
											<th colspan="1"> Delete</th>
											<th colspan="2"> Sub-total</th>
										</tr> <!-- tr selesai -->
									</thead> <!-- thead selesai -->
									<tbody> <!-- tbody mulai -->
										<?php 
										$total=0;
										while($row_perhitungan=mysqli_fetch_array($run_perhitungan)){
											$pro_id = $row_perhitungan['h_id'];
											$pro_jam = $row_perhitungan['jam'];
												
											$get_product = "select * from products where product_id='$pro_id'";
											$run_product= mysqli_query($con, $get_product);
											while($row_product=mysqli_fetch_array($run_product)){
												$product_title = $row_product['product_title'];
												$product_img1 = $row_product['product_img1'];
												if($pro_jam == '6 Jam'){
													$hanya_harga = $row_product['pro_har_6jam'];
												}elseif($pro_jam == '12 Jam'){
													$hanya_harga = $row_product['pro_har_12jam'];
												}elseif($pro_jam=='24 Jam'){
													$hanya_harga = $row_product['pro_har_24jam'];
												}
												
												$sub_total = $hanya_harga;
												$total +=$sub_total;
										
										?>
										<tr> <!-- tr mulai -->
											<td>
												<img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 1">
											</td>
											
											<td>
												<a href="details.php?pro_id=<?php echo $pro_id; ?>"> <?php echo $product_title; ?> </a>
											</td>
																					
											<td>
												Rp <?php echo $hanya_harga; ?>.000
											</td>
											
											<td>
												<?php echo $pro_jam; ?>
											</td>
											
											<td>
												<input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
											</td>
											
											<td>
												Rp <?php echo $sub_total; ?>.000
											</td>
										</tr> <!-- tr selesai -->
										<?php }} ?>
									</tbody> <!-- tbody selesai -->
									
									<tfoot> <!-- tfoot mulai -->
										<tr> <!-- tr mulai -->
											<th colspan="5">Total</th>
											<th colspan="2">Rp <?php echo $total; ?>.000</th>
										</tr> <!-- tr selesai -->
									</tfoot> <!-- tfoot selesai -->

								</table> <!-- table selesai -->
							</div> <!-- table-responsive selesai -->
							<div class="box-footer">  <!-- box-footer mulai -->
								<div class="pull-left">  <!-- pull-left mulai -->
									<a href="index.php" class="btn btn-default"> <!--btn btn-default mulai -->
										<i class="fa fa-chevron-left"></i> Lanjut Pilih Sewa Mobil
									</a> <!--btn btn-default selesai -->
								</div>  <!-- pull-left selesai -->
								<div class="pull-right">  <!-- pull-right mulai -->
									<button type="submit" name="update" value="update rincian" class="btn btn-default"> <!--btn btn-default mulai -->
										<i class="fa fa-refresh"></i> Update Rincian
									</button> <!--btn btn-default selesai -->
									
									<a href="checkout.php" class="btn btn-primary">
										Proses Rincian <i class="fa fa-chevron-right"></i>
									</a>
								</div>  <!-- pull-right selesai -->
							</div>  <!-- box-footer selesai -->
						</form> <!-- form selesai -->
					</div> <!-- box selesai -->
					
					<?php
					
					function update_perhitungan(){
						global $con;
						if(isset($_POST['update'])){
							foreach($_POST['remove'] as $remove_id){
								$delete_product = "delete from perhitungan where h_id='$remove_id'";
								$run_delete = mysqli_query($con, $delete_product);
								if($run_delete){
									echo "<script> window.open('rincian.php','_self')</script>";
								}
							}
						}
					}
					echo @$up_perhitugan = update_perhitungan();
					
					?>
					
					<div id="row same-height-row"> <!-- row same-height-row mulai -->
						<div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 mulai -->
							<div class="box same-height headline"> <!-- box same-height headline mulai -->
								<h3 class="text-center">Products You Maybe Like</h3>
							</div> <!-- box same-height headline Selesai -->
						</div> <!-- col-md-3 col-sm-6 Selesai -->
						
						<?php
						
						$get_product = "select * from products order by rand() LIMIT 0,3";
						$run_product = mysqli_query($con, $get_product);
						while($row_product=mysqli_fetch_array($run_product)){
							$pro_id = $row_product['product_id'];
							$product_title = $row_product['product_title'];
							$product_harga = $row_product['pro_har_6jam'];
							$pro_img1 = $row_product['product_img1'];
							
							echo"
							
							<div class='col-md-3 col-sm-6 center-responsive'> <!-- col-md-3 col-sm-6 center-responsive mulai -->
								<div class='product same-height'> <!-- product same-height mulai -->
									<a href='details.php?pro_id=$pro_id'>
										<img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 1'>
									</a>
								
									<div class='text'> <!-- text mulai -->
										<h3><a href='details.php?pro_id=$pro_id'> $product_title</a></h3>
									
										<p class='prices'>Rp $product_harga.000</p>
									</div> <!-- text selesai -->
								</div> <!-- product same-height selesai -->
							</div> <!-- col-md-3 col-sm-6 center-responsive Selesai -->
						
							";
						}
						?>
					</div> <!-- row same-height-row Selesai -->
				</div> <!-- col-md-9 selesai -->
				<div class="col-md-3"> <!-- col-md-3 mulai -->
					<div id="order-summary" class="box"> <!-- box mulai -->
						
						<div class="box-header"> <!-- box-header mulai -->
							<h3> Rincian Sewa Mobil</h3>
						</div> <!-- box-header selesai -->
						
						<p class="text-muted"> <!-- text-muted mulai -->
							Perhitungan rincian sewa
						</p> <!-- text-muted selesai -->
						
						<div class="table-responsive"> <!-- table-responsive mulai -->
							<table class="table">  <!-- table mulai -->
								<tbody> <!-- tbody mulai -->
									<tr> <!-- tr mulai -->
										<td> Sewa Mobil </td>
										<th> Rp <?php echo $total; ?>.000</th>
									</tr> <!-- tr selesai -->
									
									<tr class="total"> <!-- tr mulai -->
										<td> Total </td>
										<th> Rp <?php echo $total ; ?>.000  </th>
									</tr> <!-- tr selesai -->
									
								</tbody> <!-- tbody selesai -->
							</table>  <!-- table selesai -->
						</div> <!-- table-responsive selesai -->
					</div> <!-- box selesai -->
				</div> <!-- col-md-3 selesai -->
			</div> <!-- container selesai -->
		</div> <!-- content Selesai -->
		
	<?php
	include("includes/footer.php");
	?>
	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
	</body>

</html>