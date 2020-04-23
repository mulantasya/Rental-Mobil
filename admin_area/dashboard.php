<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{
?>
<!-- row pertama -->
<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<h1 class="page-header">Dashboard</h1>
		<ol class="breadcrumb"> <!-- breadcrumb mulai -->
			<li class="active"> <!-- active mulai -->
				<i class="fa fa-dashboard"></i> Dashboard
			</li> <!-- active selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<!-- row kedua -->
<div class="row"> <!-- row mulai -->
	<div class="col-lg-3 col-md-6"> <!-- col-lg-3 col-md-6 mulai -->
		<div class="panel panel-primary"> <!-- panel panel-primary mulai -->
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<div class="row"> <!-- panel-heading row mulai -->
					<div class="col-xs-3"> <!-- col-xs-3 mulai -->
						<i class="fa fa-tasks fa-5x"></i>
					</div> <!-- col-xs-3 selesai -->
					
					<div class="col-xs-9 text-right"> <!-- col-xs-9 text-right mulai -->
						<div class="huge"><?php echo $count_products; ?></div>
						
						<div>Products</div>

					</div> <!-- col-xs-9 text-right selesai -->
				</div> <!-- panel-heading row selesai -->
			</div> <!-- panel-heading selesai -->
			<a href="index.php?view_products">  <!-- a href mulai -->
				<div class="panel-footer"> <!-- panel-footer mulai -->
					<span class="pull-left">  <!-- pull-left mulai -->
						View Details
					</span>  <!-- pull-left selesai -->
					<span class="pull-right">  <!-- pull-right mulai -->
						<i class="fa fa-arrow-circle-right"></i>
					</span>  <!-- pull-right selesai -->
					<div class="clearfix"></div>
				</div>  <!-- panel-footer selesai -->
			</a>  <!-- a href selesai -->
		</div> <!-- panel panel-primary selesai -->
	</div> <!-- col-lg-3 col-md-6 selesai -->

	<div class="col-lg-3 col-md-6"> <!-- col-lg-3 col-md-6 mulai -->
		<div class="panel panel-green"> <!-- panel panel-green mulai -->
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<div class="row"> <!-- panel-heading row mulai -->
					<div class="col-xs-3"> <!-- col-xs-3 mulai -->
						<i class="fa fa-users fa-5x"></i>
					</div> <!-- col-xs-3 selesai -->
					
					<div class="col-xs-9 text-right"> <!-- col-xs-9 text-right mulai -->
						<div class="huge"><?php echo $count_customers; ?> </div>
						
						<div>Customers</div>

					</div> <!-- col-xs-9 text-right selesai -->
				</div> <!-- panel-heading row selesai -->
			</div> <!-- panel-heading selesai -->
			<a href="index.php?view_customers">  <!-- a href mulai -->
				<div class="panel-footer"> <!-- panel-footer mulai -->
					<span class="pull-left">  <!-- pull-left mulai -->
						View Details
					</span>  <!-- pull-left selesai -->
					<span class="pull-right">  <!-- pull-right mulai -->
						<i class="fa fa-arrow-circle-right"></i>
					</span>  <!-- pull-right selesai -->
					<div class="clearfix"></div>
				</div>  <!-- panel-footer selesai -->
			</a>  <!-- a href selesai -->
		</div> <!-- panel panel-green selesai -->
	</div> <!-- col-lg-3 col-md-6 selesai -->
	
	<div class="col-lg-3 col-md-6"> <!-- col-lg-3 col-md-6 mulai -->
		<div class="panel panel-orange"> <!-- panel panel-yellow mulai -->
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<div class="row"> <!-- panel-heading row mulai -->
					<div class="col-xs-3"> <!-- col-xs-3 mulai -->
						<i class="fa fa-tags fa-5x"></i>
					</div> <!-- col-xs-3 selesai -->
					
					<div class="col-xs-9 text-right"> <!-- col-xs-9 text-right mulai -->
						<div class="huge"><?php echo $count_pro_kat; ?></div>
						
						<div>Product Categories</div>

					</div> <!-- col-xs-9 text-right selesai -->
				</div> <!-- panel-heading row selesai -->
			</div> <!-- panel-heading selesai -->
			<a href="index.php?view_kat">  <!-- a href mulai -->
				<div class="panel-footer"> <!-- panel-footer mulai -->
					<span class="pull-left">  <!-- pull-left mulai -->
						View Details
					</span>  <!-- pull-left selesai -->
					<span class="pull-right">  <!-- pull-right mulai -->
						<i class="fa fa-arrow-circle-right"></i>
					</span>  <!-- pull-right selesai -->
					<div class="clearfix"></div>
				</div>  <!-- panel-footer selesai -->
			</a>  <!-- a href selesai -->
		</div> <!-- panel panel-yellow selesai -->
	</div> <!-- col-lg-3 col-md-6 selesai -->
	
	<div class="col-lg-3 col-md-6"> <!-- col-lg-3 col-md-6 mulai -->
		<div class="panel panel-red"> <!-- panel panel-yellow mulai -->
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<div class="row"> <!-- panel-heading row mulai -->
					<div class="col-xs-3"> <!-- col-xs-3 mulai -->
						<i class="fa fa-shopping-cart fa-5x"></i>
					</div> <!-- col-xs-3 selesai -->
					
					<div class="col-xs-9 text-right"> <!-- col-xs-9 text-right mulai -->
						<div class="huge"> <?php echo $count_pending_booking; ?> </div>
						
						<div>Booking</div>

					</div> <!-- col-xs-9 text-right selesai -->
				</div> <!-- panel-heading row selesai -->
			</div> <!-- panel-heading selesai -->
			<a href="index.php?view_pro_kat">  <!-- a href mulai -->
				<div class="panel-footer"> <!-- panel-footer mulai -->
					<span class="pull-left">  <!-- pull-left mulai -->
						View Details
					</span>  <!-- pull-left selesai -->
					<span class="pull-right">  <!-- pull-right mulai -->
						<i class="fa fa-arrow-circle-right"></i>
					</span>  <!-- pull-right selesai -->
					<div class="clearfix"></div>
				</div>  <!-- panel-footer selesai -->
			</a>  <!-- a href selesai -->
		</div> <!-- panel panel-yellow selesai -->
	</div> <!-- col-lg-3 col-md-6 selesai -->
</div> <!-- row selesai -->

<!-- row ketiga -->
<div class="row"> <!-- row mulai -->
	<div class="col-lg-8"> <!-- col-lg-8 mulai -->
		<div class="panel panel-primary"> <!-- panel panel-primary mulai -->
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-money fa-fa"></i> New Orders
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			
			<div class="panel-body"> <!-- panel-body mulai --> 
				<div class="table-responsive"> <!-- table-responsive mulai -->
					<table class="table table-hover table-striped table-bordered"> <!-- table table-hover table-striped table-bordered mulai -->
						
						<thead> <!-- thead mulai -->
							<tr>
								<th>Booking No : </th>
								<th>Customer Email : </th>
								<th>Invoice No : </th>
								<th>Product ID :</th>
								<th>Jam Sewa : </th>
								<th>Status : </th>
							</tr>
						</thead> <!-- thead selesai -->
						
						<tbody> <!-- tbody mulai -->
							<?php 
							
	 							$i=0;
	 							$get_booking = "select * from pending_booking order by 1 DESC LIMIT 0,4";
	 							$run_booking = mysqli_query($con, $get_booking);
	 							while($row_booking = mysqli_fetch_array($run_booking)){
									$booking_id = $row_booking['book_id'];
									$customer_id = $row_booking['customer_id'];
									$invoice_no = $row_booking['invoice_no'];
									$product_id = $row_booking['product_id'];
									$jam_sewa = $row_booking['jam_sewa'];
									$book_status = $row_booking['book_status'];
									$i++;
	 
							?>
							<tr> <!-- tr mulai -->
								<td><?php echo $booking_id; ?></td>
								<td>
									<?php 
									
									$get_customer = "select * from customers where customer_id='$customer_id'";
									$run_customer = mysqli_query($con, $get_customer);
									$row_customer=mysqli_fetch_array($run_customer);
									$customer_email = $row_customer['customer_email'];
									echo $customer_email;
									?>
								</td>
								<td><?php echo $invoice_no; ?></td>
								<td><?php echo $product_id; ?></td>
								<td><?php echo $jam_sewa; ?></td>
								<td>
									<?php 
									
									if($book_status=='Pending'){
										echo $book_status='Pending';
									} else{
										echo $book_status='Complete';
									}
									
									?>
								</td>
							</tr> <!-- tr selesai -->
							<?php } ?>
							
						</tbody> <!-- tbody selesai -->
						
					</table> <!-- table table-hover table-striped table-bordered selesai -->
				</div>  <!-- table-responsive selesai -->
				<div class="text-right">
					<a href="index.php?view_booking">
						View All Booking <i class="fa fa-arrow-circle-right"></i>
					</a> <!-- a href selesai -->
				</div> <!-- text-right selesai -->
			</div> <!-- panel-body selesai -->
		</div> <!-- panel panel-primary selesai -->
	</div> <!-- col-lg-8 selesai -->
	
	<div class="col-md-4"> <!-- col-md-4 mulai -->
		<div class="panel"> <!-- panel mulai -->
			<div class="panel-body"> <!-- panel-body mulai -->
				<div class="mb-md thumb-info"> <!-- mb-md thumb-info mulai -->
					<img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" class="rounded img-responsive">
					
					<div class="thumb-info-title"> <!-- thumb-info-title mulai -->
						<span class="thumb-info-inner"><?php echo $admin_name; ?></span>
						<span class="thumb-info-type"><?php echo $admin_job;?></span>
					</div> <!-- thumb-info-title selesai -->
				</div> <!-- mb-md thumb-info selesai -->
				<div class="mb-md"> <!-- mb-md mulai -->
					<div class="widget-content-expanded"> <!-- widget-content-expanded mulai -->
						<i class="fa fa-user"></i><span> Email : <?php echo $admin_email; ?></span>  <br/>
						<i class="fa fa-flag"></i><span> Negara : <?php echo $admin_country; ?> </span> <br/>
						<i class="fa fa-envelope"></i><span> Contact :<?php echo $admin_contact; ?></span> <br/>
					</div> <!-- widget-content-expanded selesai -->
					
					<hr class="dotted short">
					<h5 class="text-muted">About Me</h5>
					<p>
						<?php echo $admin_about; ?>
					</p>
				</div> <!-- mb-md selesai -->
			</div> <!-- panel-body selesai -->
		</div> <!-- panel selesai -->
	</div> <!-- col-md-4 selesai -->
</div> <!-- row selesai -->

<?php
	
}

?>