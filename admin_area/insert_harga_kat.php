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
				<i class="fa fa-dashboard"></i> Dashboard / Insert Harga Categories
			</li> <!-- li selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-tags fa-fw"></i> Insert Harga Categories
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			
			<div class="panel-body"> <!-- panel-body mulai -->
				<form action="" class="form-horizontal" method="post"> <!-- form-horizontal mulai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Harga Categories Title 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input name="har_title" type="text" class="form-control">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Harga Categories Description 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<textarea type="text" name="har_desc" id="" cols="30" rows="10" class="form-control"></textarea>
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
				
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input value="Submit" name="submit" type="submit" class="form-control btn btn-primary">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
				
				</form> <!-- form-horizontal selesai -->
			</div> <!-- panel-body selesai -->
		</div> <!-- panel panel-default selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<?php

	 if(isset($_POST['submit'])){
		 $har_title = $_POST['har_title'];
		 $har_desc = $_POST['har_desc'];
		 $insert_har = "insert into harga_categories (har_title, har_desc) values ('$har_title', '$har_desc')";
		 $run_har = mysqli_query($con, $insert_har);
		 if($run_har){
			 echo"<script>alert('Your new Harga Categories has been Inserted')</script>";
			 echo"<script>window.open('index.php?view_harga_kat','_self')</script>";
		 }
	 }
	 
?>

<?php } ?>
