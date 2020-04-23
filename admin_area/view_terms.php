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
				<i class="fa fa-dashboard"></i> Dashboard / View Terms
			</li> <!-- li selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-tags fa-fw"></i> View Terms
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			
			<div class="panel-body"> <!-- panel-body mulai -->
				<?php
					$get_terms = "select * from terms";
					$run_terms = mysqli_query($con, $get_terms);
					while($row_terms = mysqli_fetch_array($run_terms)){
						$terms_id = $row_terms['terms_id'];
						$terms_title = $row_terms['terms_title'];
						$terms_desc = $row_terms['terms_desc'];
					
				?>
				
				<div class="col-lg-3 col-md-3"> <!-- col-lg-3 col-md-3 mulai -->
					<div class="panel panel-primary"> <!-- panel panel-primary mulai -->
						<div class="panel-heading"> <!-- panel-heading mulai -->
							<h3 class="panel-title" align="center"> <!-- panel-title mulai -->
								<?php echo $terms_title; ?>
							</h3> <!-- panel-title selesai -->
						</div> <!-- panel-heading selesai -->
						
						<div class="panel-body"> <!-- panel-body mulai -->
							<?php echo $terms_desc; ?>	
						</div> <!-- panel-body selesai -->
						
						<div class="panel-footer"> <!-- panel-footer mulai -->
							<center> <!-- center mulai -->
								<a href="index.php?delete_terms=<?php echo $terms_id; ?>" class="pull-right"> <!-- pull-right mulai -->
									<i class="fa fa-trash"></i> Delete
								</a>  <!-- pull-right selesai -->
								
								<a href="index.php?edit_terms=<?php echo $terms_id; ?>" class="pull-left"> <!-- pull-right mulai -->
									<i class="fa fa-pencil"></i> Edit
								</a>  <!-- pull-right selesai -->
								
								<div class="clearfix"></div>
							</center> <!-- center selesai -->
						</div> <!-- panel-footer selesai -->
					</div> <!-- panel panel-primary selesai -->
				</div> <!-- col-lg-3 col-md-3 selesai -->
				
				<?php } ?> 
			</div> <!-- panel-body selesai -->
		</div> <!-- panel panel-default selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<?php } ?>