<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{
?>

<?php

	 $file = "../styles/style.css";
	 
	 if(file_exists($file)){
		 $data = file_get_contents($file);
	 }

?>

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<ol class="breadcrumb"> <!-- breadcrumb mulai -->
			<li class="active"> <!-- active mulai -->
				<i class="fa fa-dashboard"></i> Dashboard / Edit CSS
			</li> <!-- active selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-pencil"></i> CSS Editor
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			<div class="panel-body"> <!-- panel-body mulai -->
				<form action="" class="form-horizontal" method="post"> <!-- form-horizontal mulai -->
					<div class="form-group"> <!-- form-group mulai -->
						<div class="col-lg-12"> <!-- col-lg-12 mulai -->
							<textarea name="newdata" id=""  rows="15" class="form-control">
								<?php echo $data; ?>
							</textarea>
						</div> <!-- col-lg-12 selesai -->
					</div> <!-- form-group selesai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
				
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input value="Update CSS" name="update" type="submit" class="form-control btn btn-primary">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
				</form>	<!-- form-horizontal selesai -->
			</div> <!-- panel-body selesai -->
			
		</div> <!-- panel panel-default selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->
<?php

	 if(isset($_POST['update'])){
		 $newdata = $_POST['newdata'];
		 $handle = fopen($file, "w");
		 fwrite($handle, $newdata);
		 fclose($handle);
		 
		 echo "<script>alert('Your CSS Has Been Updated')</script>";
		 echo "<script>window.open('index.php?edit_css','_self')</script>";
		 
	 }
	 
?>

<?php } ?>