<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<ol class="breadcrumb"> <!-- breadcrumb mulai -->
			<li> <!-- li mulai -->
				<i class="fa fa-dashboard"></i> Dashboard / View Harga Categories
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-tags fa-fw"></i> View Harga Categories
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			
			<div class="panel-body"> <!-- panel-body mulai -->
				<div class="table-responsive"> <!-- table-responsive mulai -->
					<table class="table table-hover table-striped table-bordered"> <!-- table table-hover table-striped table-bordered mulai -->
						<thead> <!-- thead mulai -->
							<tr> <!-- tr mulai -->
								<th>Harga ID</th>
								<th>Harga Title</th>
								<th>Harga Desc</th>
								<th>Edit Harga</th>
								<th>Delete Harga</th>
							</tr> <!-- tr selesai -->
						</thead> <!-- thead selesai -->
						
						<tbody> <!-- tbody mulai -->
							<?php 
								$i=0;
	 							$get_har = "select * from harga_categories";
	 							$run_har = mysqli_query($con, $get_har);
	 							while($row_har = mysqli_fetch_array($run_har)){
									$har_id = $row_har['har_id'];
									$har_title = $row_har['har_title'];
									$har_desc = $row_har['har_desc'];
									$i++;
								
							?>
							
							<tr> <!-- tr mulai -->
								<td><?php echo $i; ?></td>
								<td><?php echo $har_title; ?></td>
								<td width="300"><?php echo $har_desc; ?></td>
								<td> 
									<a href="index.php?edit_harga_kat=<?php echo $har_id; ?>">
										<i class="fa fa-pencil"></i> Edit
									</a>
								</td>
								<td>
									<a href="index.php?delete_harga_kat= <?php echo $har_id; ?>">
										<i class="fa fa-trash"></i> Delete
									</a>
								</td>
							</tr> <!-- tr selesai -->
							
							<?php } ?>
							<tr> <a href="index.php?insert_harga_kat">Insert New Harga Categories >></a></tr>
						</tbody> <!-- tbody selesai -->
						
					</table> <!-- table table-hover table-striped table-bordered selesai -->
				</div> <!-- table-responsive selesai -->
			</div> <!-- panel-body selesai -->
		</div> <!-- panel panel-default selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->


<?php } ?>