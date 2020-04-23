<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

<?php

	if(isset($_GET['user_profile'])){
		$edit_user = $_GET['user_profile'];
		$get_user = "select * from admins where admin_id='$edit_user'";
		$run_user = mysqli_query($con, $get_user);
		$row_user = mysqli_fetch_array($run_user);
		$user_id = $row_user['admin_id'];
		$user_name = $row_user['admin_name'];
		$user_email = $row_user['admin_email'];
		$user_pass = $row_user['admin_pass'];
		$user_image = $row_user['admin_image'];
		$user_country = $row_user['admin_country'];
		$user_contact = $row_user['admin_contact'];
		$user_job = $row_user['admin_job'];
		$user_about = $row_user['admin_about'];
	}

?>

	
		<div class="row"> <!-- row mulai -->
			<div class="col-lg-12"> <!-- col-lg-12 mulai -->
				<ol class="breadcrumb"> <!-- breadcrumb mulai -->
					<li class="active"> <!-- breadcrumb mulai -->
						<i class="fa fa-dashboard"></i> Dashboard / Edit User
					</li> <!-- breadcrumb selesai -->
				</ol> <!-- breadcrumb selesai -->
			</div> <!-- col-lg-12 selesai -->
		</div> <!-- row selesai -->
		
		<div class="row"> <!-- row mulai -->
			
			<div class="col-lg-12">  <!-- col-lg-12 mulai -->
				
				<div class="panel panel-default">  <!--panel panel-default mulai -->
					
					<div class="panel-heading"> <!--panel-heading mulai -->
						<h3 class="panel-title"> <!--panel-title mulai -->
							<i class="fa fa-money fa-fw"></i> Edit User
						</h3> <!-- panel-title selesai -->
					</div> <!-- panel-heading selesai -->

					<div class="panel-body"> <!-- panel-body mulai -->
						
						<form method="post" class="form-horizontal" enctype="multipart/form-data"> <!-- form-horizontal mulai -->
						
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Username </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input value="<?php echo $user_name; ?>" name="admin_name" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> E-mail </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input value="<?php echo $user_email; ?>" name="admin_email" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Password </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input value="<?php echo $user_pass; ?>" name="admin_pass" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group se0lesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Country </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input value="<?php echo $user_country; ?>" name="admin_country" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->		
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Contact </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input value="<?php echo $user_contact; ?>" name="admin_contact" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->		
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Job </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input value="<?php echo $user_job; ?>" name="admin_job" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->		
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Photo </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="admin_image" type="file" class="form-control" required>
									<img src="admin_images/<?php echo $admin_image; ?> " alt="<?php echo $admin_name; ?>" width="70" height="70">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> About </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<textarea name="admin_about" class="form-control" rows="3"> <?php echo $user_about; ?></textarea>
								</div> <!-- col-md-6 selesai -->		
							</div> <!-- form-group selesai -->
							
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"></label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="update" value="Update User" type="submit" class="btn btn-primary form-control">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
						
						</form> <!-- form-horizontal selesai -->
					
					</div> <!-- panel-body selesai -->
					
				</div> <!-- panel panel-default selesai -->			
			
			</div>  <!-- col-lg-12 selesai -->
		
		</div> <!-- row selesai -->
		
	
		<script src="js/tinymce/tinymce.min.js"></script>
		<script>tinymce.init({selector:'textarea'});</script>

<?php

if(isset($_POST['update'])){
	$user_name = $_POST['admin_name'];
	$user_email = $_POST['admin_email'];
	$user_pass = $_POST['admin_pass'];
	$user_country = $_POST['admin_country'];
	$user_contact = $_POST['admin_contact'];
	$user_job = $_POST['admin_job'];
	$user_image = $_FILES['admin_image']['name'];
	$temp_admin_image = $_FILES['admin_image']['tmp_name'];
	$user_about = $_POST['admin_about'];
	move_uploaded_file($temp_admin_image, "admin_images/$user_image");
	
	$update_user = "update admins set admin_name='$user_name', admin_email='$user_email', admin_pass='$user_pass', admin_country='$user_country', admin_contact='$user_contact', admin_job='$user_job', admin_image='$user_image', admin_about='$user_about' where admin_id='$user_id'";
	
	$run_user= mysqli_query($con, $update_user);
	
	if($run_user){
		echo "<script>alert('Admin has been updated successfully')</script>";
		echo "<script>window.open('login.php','_self')</script>";
		session_destroy();
	}
}
?>

<?php } ?>