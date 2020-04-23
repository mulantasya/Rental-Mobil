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
						<i class="fa fa-dashboard"></i> Dashboard / Create Terms
					</li> <!-- breadcrumb selesai -->
				</ol> <!-- breadcrumb selesai -->
			</div> <!-- col-lg-12 selesai -->
		</div> <!-- row selesai -->
		
		<div class="row"> <!-- row mulai -->
			
			<div class="col-lg-12">  <!-- col-lg-12 mulai -->
				
				<div class="panel panel-default">  <!--panel panel-default mulai -->
					
					<div class="panel-heading"> <!--panel-heading mulai -->
						<h3 class="panel-title"> <!--panel-title mulai -->
							<i class="fa fa-money fa-fw"></i> Create Terms
						</h3> <!-- panel-title selesai -->
					</div> <!-- panel-heading selesai -->

					<div class="panel-body"> <!-- panel-body mulai -->
						
						<form method="post" class="form-horizontal" enctype="multipart/form-data"> <!-- form-horizontal mulai -->
						
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Terms Title </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="terms_title" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Terms Link </label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="terms_link" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label">Terms Desc</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<textarea name="terms_desc" cols="19" rows="6" class="form-control"></textarea>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"></label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="submit" value="Create Term" type="submit" class="btn btn-primary form-control">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
						
						</form> <!-- form-horizontal selesai -->
					
					</div> <!-- panel-body selesai -->
					
				</div> <!-- panel panel-default selesai -->			
			
			</div>  <!-- col-lg-12 selesai -->
		
		</div> <!-- row selesai -->

<?php
	
	if(isset($_POST['submit'])){
		$terms_title = $_POST['terms_title'];
		$terms_link = $_POST['terms_link'];
		$terms_desc = $_POST['terms_desc'];
		
		$insert_terms = "insert into terms (terms_title,terms_link,terms_desc) values ('$terms_title','$terms_link','$terms_desc')";
		
		$run_terms = mysqli_query($con, $insert_terms);
		if($run_terms){
			echo "<script>alert('Your Terms has been created')</script>";
			echo "<script>window.open('index.php?view_terms','_self')</script>";
		}
	}
	
?>

<?php } ?>
		
		<script src="js/tinymce/tinymce.min.js"></script>
		<script>tinymce.init({selector:'textarea'});</script>
	</body>

</html>