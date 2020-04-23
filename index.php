<?php
$active='Home';
include("includes/header.php");

?>
			<div class="container" id="slider"> <!-- Container Mulai -->
				<div class="col-md-12"><!-- col-md-12 Mulai -->
					<div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel Mulai -->
						<ol class="carousel-indicators">
							<li class="active" data-target="#myCarousel" data-slide-to="0"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol> <!-- carousel-indicators selesai -->
						<div class="carousel-inner"> <!-- carousel-inner Mulai -->
							
							<?php 
							
							$get_slides = "select * from slider LIMIT 0,1";
							
							$run_slides = mysqli_query($con,$get_slides);
							
							while($row_slides = mysqli_fetch_array($run_slides)){
								
								$slider_name = $row_slides['slider_name'];
								$slider_image = $row_slides['slider_image'];
								$slider_url = $row_slides['slider_url'];
								
								echo "
								
								<div class='item active'>
									<a href = '$slider_url'>
										<img src='admin_area/slides_images/$slider_image'>
									</a>
								</div>
								";	
							}
							
							$get_slides = "select * from slider LIMIT 1,3";
							
							$run_slides = mysqli_query($con,$get_slides);
							
							while($row_slides = mysqli_fetch_array($run_slides)){
								
								$slider_name = $row_slides['slider_name'];
								$slider_image = $row_slides['slider_image'];
								$slider_url = $row_slides['slider_url'];
								
								
								echo "
								
								<div class='item'>
									<a href = '$slider_url'>
										<img src='admin_area/slides_images/$slider_image'>
									</a>
								</div>
								";	
							}
							?>
						</div> <!-- carousel-inner selesai -->
						<a href="#myCarousel" class="left carousel-control" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a href="#myCarousel" class="right carousel-control" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div> <!-- carousel slide Selesai -->
				</div> <!-- col-md-12 Selesai -->
       
			</div> <!-- container Selesai -->
       	
		<div id="hot"> <!-- hot Mulai -->
			<div class="box"> <!-- box Mulai -->
				<div class="container"> <!-- container Mulai -->
					<div class="col-md-12"> <!-- col-md-12 Mulai -->
						<h2>
							Our Latest Products
						</h2>
					</div> <!-- col-md-12 Selesai -->
				</div> <!-- container Selesai -->
			</div> <!-- box Selesai -->
		</div> <!-- hot Selesai -->
		
		<div id="content" class="container"> <!-- content container Mulai -->
			<div class="row"> <!-- row Mulai -->
				<?php
				
				getPro();
				
				?>
			</div> <!-- row Selesai -->
		</div> <!-- content container Selesai -->
		
		<?php
			include("includes/footer.php");
		?>
		
		<script src="js/jquery-331.min.js"></script>
		<script src="js/bootstrap-337.min.js"></script>
	</body>
</html>