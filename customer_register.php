<?php
$active='Home';
include("includes/header.php");

?>		
		<div id="content"> <!-- content mulai -->
		
			<div class="container"> <!-- container mulai -->
			
				<div class="col-md-12"> <!-- col-md-12 mulai -->
					<ul class="breadcrumb">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							Register
						</li>
					</ul>
				</div> <!-- col-md-12 Selesai -->
				
				<div class="col-md-3"> <!-- col-md-3 mulai -->
				<?php
				include("includes/kolomkategori.php");
				?>
				
				</div> <!-- col-md-3 Selesai -->
				<div class="col-md-9"><!-- col-md-9 mulai -->
					<div class="box"> <!-- box mulai -->
						<div class="box-header"> <!-- box-header mulai -->
							<center> <!-- center mulai -->
								<h2> Register a new account </h2>
								<p class="text-muted"> <!-- text-muted mulai -->
									Daftar untuk membuat akun baru
								</p> <!-- text-muted selesai -->
							</center> <!-- center selesai -->
							<form action="customer_register.php" method="post" enctype="multipart/form-data"> <!-- form mulai -->
								<div class="form-group"> <!-- form-group mulai -->
									<label>Nama Lengkap</label>
									<input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda" name="fullname" required>
								</div> <!-- form-group selesai -->
								<div class="form-group"> <!-- form-group mulai -->
									<label>Email</label>
									<input type="text" class="form-control" placeholder="Masukkan Email Anda" name="youremail" required>
								</div> <!-- form-group selesai -->
								<div class="form-group"> <!-- form-group mulai -->
									<label>Alamat Lengkap</label>
									<input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="alamat" required>
								</div> <!-- form-group selesai -->
								<div class="form-group"> <!-- form-group mulai -->
									<label>Nomor Telepon</label>
									<input type="text" class="form-control" placeholder="Masukkan Nomor Telepon Anda" name="numberphone" required>
								</div> <!-- form-group selesai -->
								<div class="form-group"> <!-- form-group mulai -->
									<label>Nomor KTP</label>
									<input type="text" class="form-control" placeholder="Masukkan Nomor KTP Anda" name="numberktp" required>
								</div> <!-- form-group selesai -->
								<div class="form-group"> <!-- form-group mulai -->
									<label>KTP</label>
									<input type="file" class="form-control" name="ktpimage" required>
								</div> <!-- form-group selesai -->
								<div class="form-group"> <!-- form-group mulai -->
									<label>Your Profile Picture</label>
									<input type="file" class="form-control form-height-custom" name="profileimage" required>
								</div> <!-- form-group selesai -->
								<div class="form-group"> <!-- form-group mulai -->
									<label>Password</label>
									<input type="password" class="form-control" placeholder="Masukkan Password Anda" name="paswd" required>
								</div> <!-- form-group selesai -->
								<div class="text-center"> <!-- text-center mulai -->
									<button type="submit" name="register" class="btn btn-primary">
										<i class="fa fa-user-md"></i> Register
									</button>
									
								</div> <!-- text-center selesai -->
							</form> <!-- form selesai -->
						</div> <!-- box-header selesai -->
					</div> <!-- box selesai -->
				</div> <!-- col-md-9 selesai -->
			</div> <!-- container Selesai -->
			
		</div> <!-- content Selesai -->
		
	<?php
	include("includes/footer.php");
	?>
	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
	</body>

</html>

<?php

if(isset($_POST['register'])){
	$c_name = $_POST['fullname'];
	$c_email = $_POST['youremail'];
	$c_alamat = $_POST['alamat'];
	$c_notelp = $_POST['numberphone'];
	$c_noktp = $_POST['numberktp'];
	$c_imgktp = $_FILES['ktpimage']['name'];
	$c_imgktp_tmp = $_FILES['ktpimage']['tmp_name'];
	$c_foto = $_FILES['profileimage']['name'];
	$c_foto_tmp = $_FILES['profileimage']['tmp_name'];
	$c_pass = $_POST['paswd'];
	$c_ip = getRealIpUser();

	move_uploaded_file($c_imgktp_tmp,"customer/customer_ktp/$c_imgktp");
	move_uploaded_file($c_foto_tmp,"customer/customer_image/$c_foto");
	$insert_customer = "insert into customers (customer_nama,customer_email,customer_alamat,customer_nohp,customer_noktp,customer_imgktp,customer_foto,customer_pass,customer_ip) values ('$c_name','$c_email','$c_alamat','$c_notelp','$c_noktp','$c_imgktp','$c_foto','$c_pass','$c_ip')";
	
	$run_customer = mysqli_query($con, $insert_customer);
	$sel_perhitungan = "select * from perhitungan where ip_add='$c_ip'";
	$run_perhitungan = mysqli_query($con, $sel_perhitungan);
	$check_perhitungan = mysqli_num_rows($run_perhitungan);
	if($check_perhitungan>0){
		$_SESSION['customer_email'] = $c_email;
		echo "<script>alert('You have been registered sucessfully') </script>";
		echo"<script>window.open('checkout.php','_self') </script>";
	}else{
		$_SESSION['customer_email'] = $c_email;
		echo "<script>alert('You have been registered sucessfully') </script>";
		echo"<script>window.open('index.php','_self') </script>";
	}
}

?>