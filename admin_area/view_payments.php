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
				<i class="fa fa-dashboard"></i>Dashboard / View Payments
			</li> <!-- active selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-tags"></i> View Payments
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			<div class="panel-body"> <!-- panel-body mulai -->
				<div class="table-responsive"> <!-- table-responsive mulai -->
					<table class="table table-striped table-bordered table-hover"> <!-- table table-striped table-bordered table-hover mulai -->
						<thead> <!-- thead mulai -->
							<tr> <!-- tr mulai -->
								<th>No</th>
								<th>No Invoice</th>
								<th>Amount paid</th>
								<th>Method</th>
								<th>No Ref</th>
								<th>Code Pembayaran</th>
								<th>Tanggal Pembayaran</th>
								<th>Delete Pembayaran</th>
							</tr> <!-- tr selesai -->
						</thead> <!-- thead selesai -->
						
						<tbody> <!-- tbody mulai -->
							<?php 
		 						$i=0;
		 						$get_payments = "select * from pembayaran";
		 						$run_payments = mysqli_query($con, $get_payments);
		 						while($row_payments = mysqli_fetch_array($run_payments)){
									$payment_id = $row_payments['pembayaran_id'];
									$invoice_no = $row_payments['invoice_no'];
									$amount = $row_payments['amount'];
									$mode_pembayaran = $row_payments['mode_pembayaran'];
									$no_ref = $row_payments['no_ref'];
									$code = $row_payments['code'];
									$tgl_pembayaran = $row_payments['tgl_pembayaran'];
									$i++;
									
		 
		 					?>
								<tr> <!-- tr mulai -->
									<td><?php echo $i; ?></td>
									<td><?php echo $invoice_no; ?></td>
									<td>Rp <?php echo $amount; ?>.000</td>
									<td><?php echo $mode_pembayaran; ?></td>
									<td><?php echo $no_ref; ?></td>
									<td><?php echo $code; ?></td>
									<td><?php echo $tgl_pembayaran; ?></td>
									<td>
										<a href="index.php?delete_payments=<?php echo $payment_id; ?>">
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