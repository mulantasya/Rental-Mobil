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
				<i class="fa fa-dashboard"></i>Dashboard / View Booking
			</li> <!-- active selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-tags"></i> View Booking
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			<div class="panel-body"> <!-- panel-body mulai -->
				<div class="table-responsive"> <!-- table-responsive mulai -->
					<table class="table table-striped table-bordered table-hover"> <!-- table table-striped table-bordered table-hover mulai -->
						<thead> <!-- thead mulai -->
							<tr> <!-- tr mulai -->
								<th>No</th>
								<th>Customer Email</th>
								<th>Invoice No</th>
								<th>Product</th>
								<th>Jam Sewa</th>
								<th>Booking date</th>
								<th>Total Amount</th>
								<th>Status</th>
								<th>Delete</th>
							</tr> <!-- tr selesai -->
						</thead> <!-- thead selesai -->
						
						<tbody> <!-- tbody mulai -->
							<?php 
		 						$i=0;
		 						$get_booking = "select * from pending_booking";
		 						$run_booking = mysqli_query($con, $get_booking);
		 						while($row_booking = mysqli_fetch_array($run_booking)){
									$book_id = $row_booking['book_id'];
									$customers_id = $row_booking['customer_id'];
									$invoice_no = $row_booking['invoice_no'];
									$pro_id = $row_booking['product_id'];
									$jam_sewa = $row_booking['jam_sewa'];
									$book_status = $row_booking['book_status'];
									$get_products = "select * from products where product_id='$pro_id'";
									$run_products = mysqli_query($con, $get_products);
									$row_products = mysqli_fetch_array($run_products);
									$products_title = $row_products['product_title'];
									$get_customers = "select * from customers where customer_id = '$customers_id'";
									$run_customers = mysqli_query($con, $get_customers);
									$row_customers = mysqli_fetch_array($run_customers);
									$customers_email = $row_customers['customer_email'];
									$get_customers_booking = "select * from customer_booking where book_id='$book_id'";
									$run_customer_booking = mysqli_query($con, $get_customers_booking);
									$row_customers_booking = mysqli_fetch_array($run_customer_booking);
									$book_date = $row_customers_booking['book_date'];
									$book_amount = $row_customers_booking['due_amount'];
									$i++;
									
		 
		 					?>
								<tr> <!-- tr mulai -->
									<td><?php echo $i; ?></td>
									<td><?php echo $customers_email; ?></td>
									<td><?php echo $invoice_no; ?></td>
									<td><?php echo $products_title; ?></td>
									<td><?php echo $jam_sewa; ?></td>
									<td><?php echo $book_date; ?></td>
									<td>Rp <?php echo $book_amount; ?>.000</td>
									<td>
										<?php 
											if($book_status=='Pending'){
												echo $book_status='Pending';
											}else{
												echo $book_status='Complete';
											}
										?>
									</td>
									<td>
										<a href="index.php?delete_booking=<?php echo $book_id; ?>">
											<i class="fa fa-trash-o"></i> Delete
									</td>
								</tr> <!-- tr selesai -->
							
							<?php } ?>
							
						</tbody> <!-- tbody selesai -->
					</table> <!-- table table-striped table-bordered table-hover selesai -->
				</div> <!-- table-responsive selesai -->
			</div> <!-- panel-body selesai -->
			
		</div> <!-- panel panel-default selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<?php } ?>