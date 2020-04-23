<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

<?php
	if(isset($_GET['edit_pro_kat'])){
		$edit_pro_kat_id = $_GET['edit_pro_kat'];
		$edit_pro_kat_query = "select * from product_categories where pro_kat_id='$edit_pro_kat_id'";
		$run_edit = mysqli_query($con, $edit_pro_kat_query);
		$row_edit = mysqli_fetch_array($run_edit);
		$pro_kat_id = $row_edit['pro_kat_id'];
		$pro_kat_title = $row_edit['pro_kat_title'];
		$pro_kat_desc = $row_edit['pro_kat_desc'];
	}
?>

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<ol class="breadcrumb"> <!-- breadcrumb mulai -->
			<li> <!-- li mulai -->
				<i class="fa fa-dashboard"></i> Dashboard / Edit Product Category
			</li> <!-- li selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-pencil fa-fw"></i> Edit Product Category
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			
			<div class="panel-body"> <!-- panel-body mulai -->
				<form action="" class="form-horizontal" method="post"> <!-- form-horizontal mulai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Product Category Title 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input value="<?php echo $pro_kat_title; ?>" name="pro_kat_title" type="text" class="form-control">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Product Category Description 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<textarea type="text" name="pro_kat_desc" id="" cols="30" rows="10" class="form-control"><?php echo $pro_kat_desc;?></textarea>
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
		 $pro_kat_title = $_POST['pro_kat_title'];
		 $pro_kat_desc = $_POST['pro_kat_desc'];
		 $update_pro_kat = "update product_categories set pro_kat_title='$pro_kat_title', pro_kat_desc='$pro_kat_desc' where pro_kat_id='$pro_kat_id'";
		 $run_pro_kat = mysqli_query($con, $update_pro_kat);
		 if($run_pro_kat){
			 echo "<script>alert('Your product category has been updated')</script>";
			 echo "<script>window.open('index.php?view_pro_kat','_self')</script>";
		 }
	}
	 
?>

<?php } ?>
