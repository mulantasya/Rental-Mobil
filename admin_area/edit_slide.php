<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>
 
<?php

	if(isset($_GET['edit_slide'])){
		$edit_slide_id = $_GET['edit_slide'];
		$edit_slide = "select * from slider where slider_id='$edit_slide_id'";
		$run_edit_slide = mysqli_query($con, $edit_slide);
		$row_edit_slide = mysqli_fetch_array($run_edit_slide);
		$slider_id = $row_edit_slide['slider_id'];
		$slider_name = $row_edit_slide['slider_name'];
		$slider_url = $row_edit_slide['slider_url'];
		$slider_image = $row_edit_slide['slider_image'];
	}
	
?>

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<ol class="breadcrumb"> <!-- breadcrumb mulai -->
			<li> <!-- li mulai -->
				<i class="fa fa-dashboard"></i> Dashboard / Edit Slide
			</li> <!-- li selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-tags fa-fw"></i> Edit Slide
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			
			<div class="panel-body"> <!-- panel-body mulai -->
				<form action="" class="form-horizontal" method="post" enctype="multipart/form-data"> <!-- form-horizontal mulai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Slide Name 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input name="slider_name" type="text" class="form-control" value="<?php echo $slider_name; ?>">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Slide Url 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input name="slider_url" type="text" class="form-control" value="<?php echo $slider_url; ?>">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Slide Image
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input type="file" name="slider_image" class="form-control"><br/>
							<img src="slides_images/<?php echo $slider_image; ?>" class="img-responsive">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
				
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input type="submit" name="update" value="Update Now" class="btn btn-primary form-control">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
				
				</form> <!-- form-horizontal selesai -->
			</div> <!-- panel-body selesai -->
		</div> <!-- panel panel-default selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<?php
	if(isset($_POST['update'])){
		$slider_name = $_POST['slider_name'];
		$slider_url = $_POST['slider_url'];
		$slider_image = $_FILES['slider_image']['name'];
		$temp_name = $_FILES['slider_image']['tmp_name'];
		move_uploaded_file($temp_name,"slides_images/$slider_image");
		$update_slide = "update slider set slider_name='$slider_name',slider_url='$slider_url', slider_image='$slider_image' where slider_id='$slider_id'";
		$run_update_slide = mysqli_query($con, $update_slide);
		if($run_update_slide){
			echo "<script>alert('Your slide has been updated succesfully')</script>";
			echo "<script>window.open('index.php?view_slide','_self')</script>";
		}
	}
?>

<?php } ?>
