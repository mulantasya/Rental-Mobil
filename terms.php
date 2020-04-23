<?php
$active='Product';
include("includes/header.php");

?>		
		<div id="content"> <!-- content mulai -->
		
			<div class="container"> <!-- container mulai -->
			
				<div class="col-md-12"> <!-- col-md-12 mulai -->
					<ul class="breadcrumb">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							Terms & Conditions
						</li>
					</ul>
				</div> <!-- col-md-12 Selesai -->
				
				<div class="col-md-3"> <!-- col-md-3 mulai -->
					<div class="box"> <!-- box mulai -->
						<ul class="nav nav-pills nav-stacked"> <!-- nav nav-pills nav-stacked mulai -->
							<?php
							
							$get_terms = "select * from terms LIMIT 0,1";
							$run_terms = mysqli_query($con, $get_terms);
							
							while($row_terms = mysqli_fetch_array($run_terms)){
								$terms_title = $row_terms['terms_title'];
								$terms_link = $row_terms['terms_link'];
								
							?>
							<li class="active">
								<a data-toggle="pill" href="#<?php echo $terms_link; ?>">
									<?php echo $terms_title; ?>
								</a>
							</li>
							
							<?php } ?>
							
							<?php 
							
								$count_terms = "select * from terms";
								$run_count_terms = mysqli_query($con, $count_terms);
								$count = mysqli_num_rows($run_count_terms);
								$get_terms = "select * from terms LIMIT 1,$count";
								$run_terms = mysqli_query($con, $get_terms);
							
								while($row_terms = mysqli_fetch_array($run_terms)){
									$terms_title = $row_terms['terms_title'];
									$terms_link = $row_terms['terms_link'];
								?>
								
								<li>
									<a data-toggle="pill" href="#<?php echo $terms_link; ?>">
										<?php echo $terms_title; ?>
									</a>
								</li>
								<?php } ?>
							
						</ul> <!-- nav nav-pills nav-stacked selesai -->
						
					</div> <!-- box selesai -->
					
				</div> <!-- col-md-3 Selesai -->
				
				<div class="col-md-9"> <!-- col-md-9 mulai -->
					<div class="box"> <!-- box mulai -->
						<div class="tab-content"> <!-- tab-content mulai -->
							<?php 
							
								$get_terms = "select * from terms LIMIT 0,1";
								$run_terms = mysqli_query($con, $get_terms);
							
								while($row_terms=mysqli_fetch_array($run_terms)){
									$terms_title = $row_terms['terms_title'];
									$terms_desc = $row_terms['terms_desc'];
									$terms_link = $row_terms['terms_link'];
							
							?>
							
							<div id="<?php echo $terms_link; ?>" class="tab-pane fade in active">
								<h1 class="tabTitle"><?php echo $terms_title; ?></h1>
								<p class="tabDesc"><?php echo $terms_desc; ?> </p>
							</div>
							
							<?php } ?>
							
							<?php 
							
								$count_terms = "select * from terms";
								$run_count_terms = mysqli_query($con, $count_terms);
								$count = mysqli_num_rows($run_count_terms);
								$get_terms = "select * from terms LIMIT 1,$count";
								$run_terms = mysqli_query($con, $get_terms);
							
								while($row_terms = mysqli_fetch_array($run_terms)){
									$terms_title = $row_terms['terms_title'];
									$terms_desc = $row_terms['terms_desc'];
									$terms_link = $row_terms['terms_link'];
							?>
							<div id="<?php echo $terms_link; ?>" class="tab-pane fade in">
								<h1 class="tabTitle"><?php echo $terms_title; ?></h1>
								<p class="tabDesc"><?php echo $terms_desc; ?> </p>
							</div>
							
							<?php } ?>
						</div> <!-- tab-content selesai -->
					</div> <!-- box selesai -->
				</div> <!-- col-md-9 selesai -->
					
			</div> <!-- container Selesai -->
			
		</div> <!-- content Selesai -->
		
	<?php
	include("includes/footer.php");
	?>
	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>