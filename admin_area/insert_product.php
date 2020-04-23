<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale-1">
		<title>Insert Products</title>
	</head>
	
	<body>
	
		<div class="row"> <!-- row mulai -->
			<div class="col-lg-12"> <!-- col-lg-12 mulai -->
				<ol class="breadcrumb"> <!-- breadcrumb mulai -->
					<li class="active"> <!-- breadcrumb mulai -->
						<i class="fa fa-dashboard"></i> Dashboard / Insert Products
					</li> <!-- breadcrumb selesai -->
				</ol> <!-- breadcrumb selesai -->
			</div> <!-- col-lg-12 selesai -->
		</div> <!-- row selesai -->
		
		<div class="row"> <!-- row mulai -->
			
			<div class="col-lg-12">  <!-- col-lg-12 mulai -->
				
				<div class="panel panel-default">  <!--panel panel-default mulai -->
					
					<div class="panel-heading"> <!--panel-heading mulai -->
						<h3 class="panel-title"> <!--panel-title mulai -->
							<i class="fa fa-money fa-fw"></i> Insert Mobil
						</h3> <!-- panel-title selesai -->
					</div> <!-- panel-heading selesai -->

					<div class="panel-body"> <!-- panel-body mulai -->
						
						<form method="post" class="form-horizontal" enctype="multipart/form-data"> <!-- form-horizontal mulai -->
						
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Title Mobil</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="product_title" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Product Categories</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<select name="product_kat" class="form-control"> <!-- form-control mulai -->
										<option> Select a Category Product</option>
										<?php
										$get_pro_kat = "select * from product_categories";
										$run_pro_kat = mysqli_query($con, $get_pro_kat);
										
										while($row_pro_kat = mysqli_fetch_array($run_pro_kat)){
											$pro_kat_id = $row_pro_kat['pro_kat_id'];
											$pro_kat_title = $row_pro_kat['pro_kat_title'];
											
											echo "
											
											<option value='$pro_kat_id'> $pro_kat_title </option>
											";
										}
										?>
									</select> <!-- form-control selesai -->
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Kapasitas Mobil</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<select name="pro_kapa" class="form-control"> <!-- form-control mulai -->
										<option> Select a Capacity </option>
										<?php
										$get_kapa = "select * from kapasitas";
										$run_kapa = mysqli_query($con, $get_kapa);
										
										while($row_kapa = mysqli_fetch_array($run_kapa)){
											$kapa_id = $row_kapa['kapa_id'];
											$kapa_title = $row_kapa['kapa_title'];
											
											echo "
											
											<option value='$kapa_id'> $kapa_title </option>
											";
										}
										?>
									</select> <!-- form-control selesai -->
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Kategori harga</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<select name="product_har" class="form-control"> <!-- form-control mulai -->
										<option> Range harga sewa </option>
										<?php
										$get_har = "select * from harga_categories";
										$run_har = mysqli_query($con, $get_har);
										
										while($row_har = mysqli_fetch_array($run_har)){
											$har_id = $row_har['har_id'];
											$har_title = $row_har['har_title'];
											
											echo "
											
											<option value='$har_id'> $har_title </option>
											";
										}
										?>
									</select> <!-- form-control selesai -->
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Foto Mobil 1</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="product_img1" type="file" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Foto Mobil 2</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="product_img2" type="file" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Foto Mobil 3</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="product_img3" type="file" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Foto Mobil 4</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="product_img4" type="file" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Harga Sewa 6 Jam</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="pro_har_6jam" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Harga Sewa 12 Jam</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="pro_har_12jam" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Harga Sewa 24 Jam</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="pro_har_24jam" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Keyword Mobil</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="pro_keywords" type="text" class="form-control" required>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Deskripsi Mobil</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<textarea name="pro_desc" cols="19" rows="6" class="form-control"></textarea>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"></label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
						
						</form> <!-- form-horizontal selesai -->
					
					</div> <!-- panel-body selesai -->
					
				</div> <!-- panel panel-default selesai -->			
			
			</div>  <!-- col-lg-12 selesai -->
		
		</div> <!-- row selesai -->
		
	
		<script src="js/tinymce/tinymce.min.js"></script>
		<script>tinymce.init({selector:'textarea'});</script>
	</body>

</html>

<?php

if(isset($_POST['submit'])){
	$product_title = $_POST['product_title'];
	$product_kat = $_POST['product_kat'];
	$pro_kapa = $_POST['pro_kapa'];
	$product_har = $_POST['product_har'];
	$pro_har_6jam = $_POST['pro_har_6jam'];
	$pro_har_12jam = $_POST['pro_har_12jam'];
	$pro_har_24jam = $_POST['pro_har_24jam'];
	$pro_keywords = $_POST['pro_keywords'];
	$pro_desc = $_POST['pro_desc'];
	$product_img1 = $_FILES['product_img1']['name'];
	$product_img2 = $_FILES['product_img2']['name'];
	$product_img3 = $_FILES['product_img3']['name'];
	$product_img4 = $_FILES['product_img4']['name'];
	
	$temp_name1 = $_FILES['product_img1']['tmp_name'];
	$temp_name2 = $_FILES['product_img2']['tmp_name'];
	$temp_name3 = $_FILES['product_img3']['tmp_name'];
	$temp_name4 = $_FILES['product_img4']['tmp_name'];
	
	move_uploaded_file($temp_name1, "product_images/$product_img1");
	move_uploaded_file($temp_name2, "product_images/$product_img2");
	move_uploaded_file($temp_name3, "product_images/$product_img3");
	move_uploaded_file($temp_name4, "product_images/$product_img4");

	
	$insert_product = "insert into products(pro_kat_id,kapa_id,har_id,tgl,product_title,product_img1,product_img2,product_img3,product_img4,pro_har_6jam,pro_har_12jam,pro_har_24jam,pro_keywords,pro_desc) values ('$product_kat','$pro_kapa','$product_har',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_img4','$pro_har_6jam','$pro_har_12jam','$pro_har_24jam','$pro_keywords','$pro_desc')";
	
	$run_product = mysqli_query($con, $insert_product);
	
	if($run_product){
		echo "<script>alert('Product has been inserted successfully')</script>";
		echo "<script>window.open('index.php?view_products','_self')</script>";
	}
}
?>

<?php } ?>