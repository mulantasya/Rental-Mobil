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
				<i class="fa fa-dashboard"></i>Dashboard / View User
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
								<th>Negara</th>
								<th>Job</th>
								<th>Kontak</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr> <!-- tr selesai -->
						</thead> <!-- thead selesai -->
						
						<tbody> <!-- tbody mulai -->
							<?php 
		 						$i=0;
		 						$get_user = "select * from admins";
		 						$run_user = mysqli_query($con, $get_user);
		 						while($row_user = mysqli_fetch_array($run_user)){
									$user_id = $row_user['admin_id'];
									$user_name = $row_user['admin_name'];
									$user_image = $row_user['admin_image'];
									$user_email = $row_user['admin_email'];
									$user_alamat = $row_user['admin_country'];
									$user_job = $row_user['admin_job'];
									$user_contact = $row_user['admin_contact'];
									$i++;
									
		 
		 					?>
								<tr> <!-- tr mulai -->
									<td><?php echo $i; ?></td>
									<td><?php echo $user_name; ?></td>
									<td align="center"><img src="../admin_area/admin_images/<?php echo $user_image; ?>" width="60" height="60"></td>
									<td><?php echo $user_email; ?></td>
									<td><?php echo $user_alamat; ?></td>
									<td><?php echo $user_job; ?></td>
									<td><?php echo $user_contact; ?></td>
									<td>
										<a href="index.php?user_profile=<?php echo $user_id; ?>">
											<i class="fa fa-pencil"></i> Edit
										</a>
									</td>
									<td>
										<a href="index.php?delete_user=<?php echo $user_id; ?>">
											<i class="fa fa-trash-o"></i> Delete
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