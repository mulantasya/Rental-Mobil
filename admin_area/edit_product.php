<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

<?php

	if(isset($_GET['edit_product'])){
		$edit_id = $_GET['edit_product'];
		$get_pro = "select * from products where product_id='$edit_id'";
		$run_edit = mysqli_query($con, $get_pro);
		$row_edit = mysqli_fetch_array($run_edit);
		$pro_id = $row_edit['product_id'];
		$pro_title = $row_edit['product_title'];
		$pro_kat = $row_edit['pro_kat_id'];
		$pro_kapa = $row_edit['kapa_id'];
		$pro_har = $row_edit['har_id'];
		$pro_img1 = $row_edit['product_img1'];
		$pro_img2 = $row_edit['product_img2'];
		$pro_img3 = $row_edit['product_img3'];
		$pro_img4 = $row_edit['product_img4'];
		$pro_har_6jam = $row_edit['pro_har_6jam'];
		$pro_har_12jam = $row_edit['pro_har_12jam'];
		$pro_har_24jam = $row_edit['pro_har_24jam'];
		$pro_keywords = $row_edit['pro_keywords'];
		$pro_desc = $row_edit['pro_desc'];
	}
	$get_pro_kat = "select * from product_categories where pro_kat_id='$pro_kat'";
	$run_pro_kat = mysqli_query($con, $get_pro_kat);
	$row_pro_kat = mysqli_fetch_array($run_pro_kat);
	$pro_kat_title = $row_pro_kat['pro_kat_title'];
	$get_kapa = "select * from kapasitas where kapa_id='$pro_kapa'";
	$run_kapa = mysqli_query($con, $get_kapa);
	$row_kapa = mysqli_fetch_array($run_kapa);
	$kapa_title = $row_kapa['kapa_title'];
	$get_har = "select * from harga_categories where har_id='$pro_har'";
	$run_har = mysqli_query($con, $get_har);
	$row_har = mysqli_fetch_array($run_har);
	$har_title = $row_har['har_title'];
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
						<i class="fa fa-dashboard"></i> Dashboard / Edit Products
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
									<input name="product_title" type="text" class="form-control" required value="<?php echo $pro_title; ?>">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Product Categories</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<select name="product_kat" class="form-control"> <!-- form-control mulai -->
										<option value="<?php echo $pro_kat; ?>"> <?php echo $pro_kat_title; ?></option>
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
										<option value="<?php echo $pro_kapa; ?>"><?php echo $kapa_title; ?></option>
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
										<option value="<?php echo $pro_har; ?>"> <?php echo $har_title; ?> </option>
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
									<input name="product_img1" type="file" class="form-control" required><br>
									
									<img width="70" height="70" src="product_images/<?php echo $pro_img1; ?>" alt="<?php echo $pro_img1; ?>">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Foto Mobil 2</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="product_img2" type="file" class="form-control" required><br>
									
									<img width="70" height="70" src="product_images/<?php echo $pro_img2; ?>" alt="<?php echo $pro_img2; ?>">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Foto Mobil 3</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="product_img3" type="file" class="form-control" required><br>
									
									<img width="70" height="70" src="product_images/<?php echo $pro_img3; ?>" alt="<?php echo $pro_img3; ?>">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Foto Mobil 4</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="product_img4" type="file" class="form-control" required><br>
									
									<img width="70" height="70" src="product_images/<?php echo $pro_img4; ?>" alt="<?php echo $pro_img4; ?>">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Harga Sewa 6 Jam</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="pro_har_6jam" type="text" class="form-control" required value="<?php echo $pro_har_6jam; ?>">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Harga Sewa 12 Jam</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="pro_har_12jam" type="text" class="form-control" required value="<?php echo $pro_har_12jam; ?>">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Harga Sewa 24 Jam</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="pro_har_24jam" type="text" class="form-control" required value="<?php echo $pro_har_24jam; ?>">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Keyword Mobil</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="pro_keywords" type="text" class="form-control" required value="<?php echo $pro_keywords; ?>">
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"> Deskripsi Mobil</label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<textarea name="pro_desc" cols="19" rows="6" class="form-control"><?php echo $pro_desc; ?></textarea>
								</div> <!-- col-md-6 selesai -->
							</div> <!-- form-group selesai -->
							
							<div class="form-group"> <!-- form-group mulaai -->
								<label class="col-md-3 control-label"></label>
								<div class="col-md-6"> <!-- col-md-6 mulai -->
									<input name="update" value="Update Product" type="submit" class="btn btn-primary form-control">
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

if(isset($_POST['update'])){
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
	
	$update_product = "update products set pro_kat_id='$product_kat',kapa_id='$pro_kapa', har_id='$product_har', tgl=NOW(), product_title='$product_title', product_img1='$product_img1', product_img2='$product_img2', product_img3='$product_img3', product_img4='$product_img4', pro_keywords='$pro_keywords', pro_desc='$pro_desc', pro_har_6jam='$pro_har_6jam', pro_har_12jam='$pro_har_12jam', pro_har_24jam='$pro_har_24jam' where product_id='$pro_id'";
	
	$run_product = mysqli_query($con, $update_product);
	if($run_product){
		echo "<script>alert('Your Product has benn updated successfully')</script>";
		echo "<script>window.open('index.php?view_products','_self')</script>";
	}

}
?>

<?php } ?>