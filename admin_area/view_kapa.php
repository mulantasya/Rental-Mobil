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
				<i class="fa fa-dashboard"></i> Dashboard / View Kapasitas
			</li> <!-- li selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-tags fa-fw"></i> View Kapasitas Categories
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			
			<div class="panel-body"> <!-- panel-body mulai -->
				<div class="table-responsive"> <!-- table-responsive mulai -->
					<table class="table table-hover table-striped table-bordered"> <!-- table table-hover table-striped table-bordered mulai -->
						<thead> <!-- thead mulai -->
							<tr> <!-- tr mulai -->
								<th>Kapasitas ID</th>
								<th>Kapasitas Title</th>
								<th>Kapasitas Desc</th>
								<th>Edit Kapasitas</th>
								<th>Delete Kapasitas</th>
							</tr> <!-- tr selesai -->
						</thead> <!-- thead selesai -->
						
						<tbody> <!-- tbody mulai -->
							<?php 
								$i=0;
	 							$get_kapa = "select * from kapasitas";
	 							$run_kapa = mysqli_query($con, $get_kapa);
	 							while($row_kapa = mysqli_fetch_array($run_kapa)){
									$kapa_id = $row_kapa['kapa_id'];
									$kapa_title = $row_kapa['kapa_title'];
									$kapa_desc = $row_kapa['kapa_desc'];
									$i++;
								
							?>
							
							<tr> <!-- tr mulai -->
								<td><?php echo $i; ?></td>
								<td><?php echo $kapa_title; ?></td>
								<td width="300"><?php echo $kapa_desc; ?></td>
								<td> 
									<a href="index.php?edit_kapa=<?php echo $kapa_id; ?>">
										<i class="fa fa-pencil"></i> Edit
									</a>
								</td>
								<td>
									<a href="index.php?delete_kapa= <?php echo $kapa_id; ?>">
										<i class="fa fa-trash"></i> Delete
									</a>
								</td>
							</tr> <!-- tr selesai -->
							
							<?php } ?>
							<tr> <a href="index.php?insert_kapa">Insert New Kapasitas Categories >></a></tr>
						</tbody> <!-- tbody selesai -->
						
					</table> <!-- table table-hover table-striped table-bordered selesai -->
				</div> <!-- table-responsive selesai -->
			</div> <!-- panel-body selesai -->
		</div> <!-- panel panel-default selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->


<?php } ?>