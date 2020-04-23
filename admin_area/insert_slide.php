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
				<i class="fa fa-dashboard"></i> Dashboard / Insert Slide
			</li> <!-- li selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-tags fa-fw"></i> Insert Slide
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			
			<div class="panel-body"> <!-- panel-body mulai -->
				<form action="" class="form-horizontal" method="post" enctype="multipart/form-data"> <!-- form-horizontal mulai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Slide Name 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input name="slider_name" type="text" class="form-control">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Slide Url
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input name="slider_url" type="text" class="form-control">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Slide Image
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input type="file" name="slider_image" class="form-control">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
				
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
				
				</form> <!-- form-horizontal selesai -->
			</div> <!-- panel-body selesai -->
		</div> <!-- panel panel-default selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<?php
	if(isset($_POST['submit'])){
		$slider_name = $_POST['slider_name'];
		$slider_url = $_POST['slider_url'];
		$slider_image = $_FILES['slider_image']['name'];
		$temp_name = $_FILES['slider_image']['tmp_name'];
		$view_slides = "select * from slider";
		$view_run_slide = mysqli_query($con, $view_slides);
		$count = mysqli_num_rows($view_run_slide);
		if($count<4){
			move_uploaded_file($temp_name,"slides_images/$slider_name");
			$insert_slide = "insert into slider (slider_name,slider_url, slider_image) values ('$slider_name','$slider_url','$slider_image')";
			$run_slide = mysqli_query($con, $insert_slide);
			echo "<script>alert('Your new slide has been inserted')</script>";
			echo "<script>window.open('index.php?view_slide','_self')</script>";
		}else{
			echo "<script>alert('You have already inserted 4 slides ')</script>";
		}
	}
?>

<?php } ?>
