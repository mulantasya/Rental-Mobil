<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

<?php
	if(isset($_GET['edit_harga_kat'])){
		$edit_har_id = $_GET['edit_harga_kat'];
		$edit_har_query = "select * from harga_categories where har_id='$edit_har_id'";
		$run_edit = mysqli_query($con, $edit_har_query);
		$row_edit = mysqli_fetch_array($run_edit);
		$har_id = $row_edit['har_id'];
		$har_title = $row_edit['har_title'];
		$har_desc = $row_edit['har_desc'];
	}
?>

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<ol class="breadcrumb"> <!-- breadcrumb mulai -->
			<li> <!-- li mulai -->
				<i class="fa fa-dashboard"></i> Dashboard / Edit harga catefories
			</li> <!-- li selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-pencil fa-fw"></i> Edit harga categories
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			
			<div class="panel-body"> <!-- panel-body mulai -->
				<form action="" class="form-horizontal" method="post"> <!-- form-horizontal mulai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							harga categories Title 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input value="<?php echo $har_title; ?>" name="har_title" type="text" class="form-control">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							harga categories Description 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<textarea type="text" name="har_desc" id="" cols="30" rows="10" class="form-control"><?php echo $har_desc;?></textarea>
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
				
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input value="Update" name="update" type="submit" class="form-control btn btn-primary">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
				
				</form> <!-- form-horizontal selesai -->
			</div> <!-- panel-body selesai -->
		</div> <!-- panel panel-default selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<?php

	 if(isset($_POST['update'])){
		 $har_title = $_POST['har_title'];
		 $har_desc = $_POST['har_desc'];
		 $update_har = "update harga_categories set har_title='$har_title', har_desc='$har_desc' where har_id='$har_id'";
		 $run_har = mysqli_query($con, $update_har);
		 if($run_har){
			 echo "<script>alert('Your harga categories has been updated')</script>";
			 echo "<script>window.open('index.php?view_harga_kat','_self')</script>";
		 }
	}
	 
?>

<?php } ?>
