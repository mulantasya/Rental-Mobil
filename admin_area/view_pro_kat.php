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
				<i class="fa fa-dashboard"></i> Dashboard / View Product Category
			</li> <!-- li selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-tags fa-fw"></i> View Product Categories
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			
			<div class="panel-body"> <!-- panel-body mulai -->
				<div class="table-responsive"> <!-- table-responsive mulai -->
					<table class="table table-hover table-striped table-bordered"> <!-- table table-hover table-striped table-bordered mulai -->
						<thead> <!-- thead mulai -->
							<tr> <!-- tr mulai -->
								<th>Product Category ID</th>
								<th>Product Category Title</th>
								<th>Product Category Desc</th>
								<th>Edit Product Category</th>
								<th>Delete Product Category</th>
							</tr> <!-- tr selesai -->
						</thead> <!-- thead selesai -->
						
						<tbody> <!-- tbody mulai -->
							<?php 
								$i=0;
	 							$get_pro_kat = "select * from product_categories";
	 							$run_pro_kat = mysqli_query($con, $get_pro_kat);
	 							while($row_pro_kat = mysqli_fetch_array($run_pro_kat)){
									$pro_kat_id = $row_pro_kat['pro_kat_id'];
									$pro_kat_title = $row_pro_kat['pro_kat_title'];
									$pro_kat_desc = $row_pro_kat['pro_kat_desc'];
									$i++;
								
							?>
							
							<tr> <!-- tr mulai -->
								<td><?php echo $i; ?></td>
								<td><?php echo $pro_kat_title; ?></td>
								<td width="300"><?php echo $pro_kat_desc; ?></td>
								<td> 
									<a href="index.php?edit_pro_kat=<?php echo $pro_kat_id; ?>">
										<i class="fa fa-pencil"></i> Edit
									</a>
								</td>
								<td>
									<a href="index.php?delete_pro_kat= <?php echo $pro_kat_id; ?>">
										<i class="fa fa-trash"></i> Delete
									</a>
								</td>
							</tr> <!-- tr selesai -->
							
							<?php } ?>
							<tr> <a href="index.php?insert_pro_kat">Insert New Product Categories >></a></tr>
						</tbody> <!-- tbody selesai -->
						
					</table> <!-- table table-hover table-striped table-bordered selesai -->
				</div> <!-- table-responsive selesai -->
			</div> <!-- panel-body selesai -->
		</div> <!-- panel panel-default selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->


<?php } ?>