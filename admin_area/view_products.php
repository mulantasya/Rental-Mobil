<?php

	if(!isset($_SESSION['admin_email'])){
		echo"<script>window.open('login.php','_self')</script>";
	}
	else{
?>

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<ol class="breadcrumb"> <!-- breadcrumb mulai -->
			<li class="active"> <!-- active mulai -->
				<i class="fa fa-dashboard"></i>Dashboard / View Products
			</li> <!-- active selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-tags"></i> View Products
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			<div class="panel-body"> <!-- panel-body mulai -->
				<div class="table-responsive"> <!-- table-responsive mulai -->
					<table class="table table-striped table-bordered table-hover"> <!-- table table-striped table-bordered table-hover mulai -->
						<thead> <!-- thead mulai -->
							<tr> <!-- tr mulai -->
								<th>Product ID: </th>
								<th>Product Title: </th>
								<th>Product Image: </th>
								<th>Harga sewa 6 Jam: </th>
								<th>Product Sold: </th>
								<th>Product Keywords: </th>
								<th>Product Date: </th>
								<th>Product Delete: </th>
								<th>Product Edit: </th>
							</tr> <!-- tr selesai -->
						</thead> <!-- thead selesai -->
						
						<tbody> <!-- tbody mulai -->
							<?php 
		 						$i=0;
		 						$get_pro = "select * from products";
		 						$run_pro = mysqli_query($con, $get_pro);
		 						while($row_pro = mysqli_fetch_array($run_pro)){
									$pro_id = $row_pro['product_id'];
									$pro_title = $row_pro['product_title'];
									$pro_img1 = $row_pro['product_img1'];
									$pro_harga = $row_pro['pro_har_6jam'];
									$pro_keywords = $row_pro['pro_keywords'];
									$pro_date = $row_pro['tgl'];
									$i++;
									
		 
		 					?>
								<tr> <!-- tr mulai -->
									<td><?php echo $i; ?></td>
									<td><?php echo $pro_title; ?></td>
									<td><img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>
									<td>Rp<?php echo $pro_harga; ?>.000</td>
									<td><?php 
											$get_sold = "select * from pending_booking where product_id='$pro_id'";
										$run_sold = mysqli_query($con, $get_sold);
										$count = mysqli_num_rows($run_sold);
										echo $count;
										?>
									</td>
									<td><?php echo $pro_keywords; ?></td>
									<td><?php echo $pro_date; ?></td>
									<td>
										<a href="index.php?delete_product=<?php echo $pro_id; ?>">
											<i class="fa fa-trash-o"></i> Delete
										</a>
									</td>
									<td>
										<a href="index.php?edit_product=<?php echo $pro_id; ?>">
											<i class="fa fa-pencil"></i> Edit
										</a>
									</td>
								</tr> <!-- tr selesai -->
							
							<?php } ?>
							<tr> <a href="index.php?insert_product">Insert New Product >></a></tr>
						</tbody> <!-- tbody selesai -->
					</table> <!-- table table-striped table-bordered table-hover selesai -->
				</div> <!-- table-responsive selesai -->
			</div> <!-- panel-body selesai -->
			
		</div> <!-- panel panel-default selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<?php } ?>