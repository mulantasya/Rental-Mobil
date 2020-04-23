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
				<i class="fa fa-dashboard"></i> Dashboard / Insert Kapasitas
			</li> <!-- li selesai -->
		</ol> <!-- breadcrumb selesai -->
	</div> <!-- col-lg-12 selesai -->
</div> <!-- row selesai -->

<div class="row"> <!-- row mulai -->
	<div class="col-lg-12"> <!-- col-lg-12 mulai -->
		<div class="panel panel-default"> <!-- panel panel-default mulai -->
			
			<div class="panel-heading"> <!-- panel-heading mulai -->
				<h3 class="panel-title"> <!-- panel-title mulai -->
					<i class="fa fa-tags fa-fw"></i> Insert Kapasitas
				</h3> <!-- panel-title selesai -->
			</div> <!-- panel-heading selesai -->
			
			<div class="panel-body"> <!-- panel-body mulai -->
				<form action="" class="form-horizontal" method="post"> <!-- form-horizontal mulai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Kapasitas Title 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<input name="kapa_title" type="text" class="form-control">
						</div> <!-- col-md-6 selesai -->
					</div> <!-- form-group selesai -->
					
					<div class="form-group"> <!-- form-group mulai -->
						<label for="" class="control-label col-md-3"> <!-- control-label col-md-3 mulai -->
							Kapasitas Description 
						</label> <!-- control-label col-md-3 selesai --> 
						<div class="col-md-6"> <!-- col-md-6 mulai -->
							<textarea type="text" name="kapa_desc" id="" cols="30" rows="10" class="form-control"></textarea>
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
		 $kapa_title = $_POST['kapa_title'];
		 $kapa_desc = $_POST['kapa_desc'];
		 $insert_kapa = "insert into kapasitas (kapa_title, kapa_desc) values ('$kapa_title', '$kapa_desc')";
		 $run_kapa = mysqli_query($con, $insert_kapa);
		 if($run_kapa){
			 echo"<script>alert('Your new Kapasitas has been Inserted')</script>";
			 echo"<script>window.open('index.php?view_kapa','_self')</script>";
		 }
	 }
	 
?>

<?php } ?>
