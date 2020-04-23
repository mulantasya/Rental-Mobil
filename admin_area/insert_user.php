<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>
	
		<div class="row"> <!-- row mulai -->
			<div class="col-lg-12"> <!-- col-lg-12 mulai -->
				<ol class="breadcrumb"> <!-- breadcrumb mulai -->
					<li class="active"> <!-- breadcrumb mulai -->
						<i class="fa fa-dashboard"></i> Dashboard / Insert User
					</li> <!-- breadcrumb selesai -->
				</ol> <!-- breadcrumb selesai -->
			</div> <!-- col-lg-12 selesai -->
		</div> <!-- row selesai -->
		
		<div class="row"> <!-- row mulai -->
			
			<div class="col-lg-12">  <!-- col-lg-12 mulai -->
				
				<div class="panel panel-default">  <!--panel panel-default mulai -->
					
					<div class="panel-heading"> <!--panel-heading mulai -->
						<h3 class="panel-title"> <!--panel-title mulai -->
							<i class="fa fa-money fa-fw"></i> Insert User
						</h3> <!-- panel-title selesai -->
					</div> <!-- panel-heading selesai -->

					<div class="panel-body"> <!-- panel-body mulai -->
						
						<form method="post" class="form-horizontal" enctype="multipart/form-data"> <!-- form-horizontal mulai -->
						
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Username </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="admin_name" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> E-mail </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="admin_email" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Password </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="admin_pass" type="password" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Country </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="admin_country" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->		
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Contact </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="admin_contact" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->		
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Job </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="admin_job" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->		
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Photo </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="admin_image" type="file" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> About </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<textarea name="admin_about" class="form-control" rows="3"></textarea>
								</div> <!-- col-md-6 selesai -->		
							</div> <!-- form-group selesai -->
							
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"></label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="submit" value="Insert User" type="submit" class="btn btn-primary form-control">
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

if(isset($_POST['submit'])){
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
	
	$insert_user = "insert into admins(admin_name,admin_email,admin_pass,admin_country,admin_contact,admin_job,admin_image,admin_about) values ('$user_name','$user_email','$user_pass','$user_country','$user_contact','$user_job','$user_image','$user_about')";
	
	$run_user= mysqli_query($con, $insert_user);
	
	if($run_user){
		echo "<script>alert('Admin has been inserted successfully')</script>";
		echo "<script>window.open('index.php?view_user','_self')</script>";
	}
}
?>

<?php } ?>