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
				<i class="fa fa-dashboard"></i>Dashboard / View Customers
			</li> <!-- active selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-tags"></i> View Customers
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			<div class="panel-body"> <!-- panel-body mulai -->
				<div class="table-responsive"> <!-- table-responsive mulai -->
					<table class="table table-striped table-bordered table-hover"> <!-- table table-striped table-bordered table-hover mulai -->
						<thead> <!-- thead mulai -->
							<tr> <!-- tr mulai -->
								<th>No</th>
								<th>Nama</th>
								<th>Foto</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>No. HP</th>
								<th>NO. KTP</th>
								<th>Foto KTP</th>
								<th>Delete</th>
								<th>Edit</th>
							</tr> <!-- tr selesai -->
						</thead> <!-- thead selesai -->
						
						<tbody> <!-- tbody mulai -->
							<?php 
		 						$i=0;
		 						$get_customers = "select * from customers";
		 						$run_customers = mysqli_query($con, $get_customers);
		 						while($row_customers = mysqli_fetch_array($run_customers)){
									$customers_id = $row_customers['customer_id'];
									$customers_name = $row_customers['customer_nama'];
									$customers_image = $row_customers['customer_foto'];
									$customers_email = $row_customers['customer_email'];
									$customers_alamat = $row_customers['customer_alamat'];
									$customers_nohp = $row_customers['customer_nohp'];
									$customers_noktp = $row_customers['customer_noktp'];
									$customers_imgktp = $row_customers['customer_imgktp'];
									$i++;
									
		 
		 					?>
								<tr> <!-- tr mulai -->
									<td><?php echo $i; ?></td>
									<td><?php echo $customers_name; ?></td>
									<td align="center"><img src="../customer/customer_image/<?php echo $customers_image; ?>" width="60" height="60"></td>
									<td><?php echo $customers_email; ?></td>
									<td><?php echo $customers_alamat; ?></td>
									<td><?php echo $customers_nohp; ?></td>
									<td><?php echo $customers_noktp; ?></td>
									<td align="center"><img src="../customer/customer_ktp/<?php echo $customers_imgktp; ?>" width="60" height="60"></td>
									
									<td>
										<a href="index.php?delete_customers=<?php echo $customers_id; ?>">
											<i class="fa fa-trash-o"></i> Delete
										</a>
									</td>
									<td>
										<a href="index.php?edit_customers=<?php echo $customers_id; ?>">
											<i class="fa fa-pencil"></i> Edit
										</a>
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