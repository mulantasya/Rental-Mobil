<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

<?php
	if(isset($_GET['edit_kapa'])){
		$edit_kapa_id = $_GET['edit_kapa'];
		$edit_kapa_query = "select * from kapasitas where kapa_id='$edit_kapa_id'";
		$run_edit = mysqli_query($con, $edit_kapa_query);
		$row_edit = mysqli_fetch_array($run_edit);
		$kapa_id = $row_edit['kapa_id'];
		$kapa_title = $row_edit['kapa_title'];
		$kapa_desc = $row_edit['kapa_desc'];
	}
?>

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<ol class="breadcrumb"> <!-- breadcrumb mulai -->
			<li> <!-- li mulai -->
				<i class="fa fa-dashboard"></i> Dashboard / Edit Kapasitas
			</li> <!-- li selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-pencil fa-fw"></i> Edit Kapasitas
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			
			<div class="panel-body"> <!-- panel-body mulai -->
				<form action="" class="form-horizontal" method="post"> <!-- form-horizontal mulai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Kapasitas Title 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input value="<?php echo $kapa_title; ?>" name="kapa_title" type="text" class="form-control">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Kapasitas Description 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<textarea type="text" name="kapa_desc" id="" cols="30" rows="10" class="form-control"><?php echo $kapa_desc;?></textarea>
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
		 $kapa_title = $_POST['kapa_title'];
		 $kapa_desc = $_POST['kapa_desc'];
		 $update_kapa = "update kapasitas set kapa_title='$kapa_title', kapa_desc='$kapa_desc' where kapa_id='$kapa_id'";
		 $run_kapa = mysqli_query($con, $update_kapa);
		 if($run_kapa){
			 echo "<script>alert('Your Kapasitas has been updated')</script>";
			 echo "<script>window.open('index.php?view_kapa','_self')</script>";
		 }
	}
	 
?>

<?php } ?>
