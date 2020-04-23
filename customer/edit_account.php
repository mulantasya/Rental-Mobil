<?php

$customer_session= $_SESSION['customer_email'];
$get_customer = "select * from customers where customer_email='$customer_session'";
$run_customer = mysqli_query($con, $get_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_id = $row_customer['customer_id'];
$customer_nama = $row_customer['customer_nama'];
$customer_email = $row_customer['customer_email'];
$customer_alamat = $row_customer['customer_alamat'];
$customer_nohp = $row_customer['customer_nohp'];
$customer_noktp = $row_customer['customer_noktp'];
$customer_imgktp = $row_customer['customer_imgktp'];
$customer_foto = $row_customer['customer_foto'];


?>

<h1 align="center">Edit Your Account</h1>

<form action="" method="post" enctype="multipart/form-data"> <!-- form mulai -->
	<div class="form-group"> <!-- form-group mulai -->
		<label> Customer Name:</label>
		<input type="text" name="c_nama" class="form-control" value="<?php echo $customer_nama; ?>" required>
	</div> <!-- form-group selesai -->
	
	<div class="form-group"> <!-- form-group mulai -->
		<label> Customer email:</label>
		<input type="text" name="c_email" class="form-control" value="<?php echo $customer_email; ?>" required>
	</div> <!-- form-group selesai -->
	
	<div class="form-group"> <!-- form-group mulai -->
		<label> Alamat:</label>
		<input type="text" name="c_alamat" class="form-control" value="<?php echo $customer_alamat; ?>" required>
	</div> <!-- form-group selesai -->
	
	<div class="form-group"> <!-- form-group mulai -->
		<label> Nomor HP:</label>
		<input type="text" name="c_nohp" class="form-control" value="<?php echo $customer_nohp; ?>" required>
	</div> <!-- form-group selesai -->
	
	<div class="form-group"> <!-- form-group mulai -->
		<label> Nomor KTP:</label>
		<input type="text" name="c_noktp" class="form-control" value="<?php echo $customer_noktp; ?>" required>
	</div> <!-- form-group selesai -->
	
	<div class="form-group"> <!-- form-group mulai -->
		<label> Foto KTP:</label>
		<input type="file" name="c_imgktp" class="form-control form-height-custom" value="<?php echo $customer_imgktp; ?>" required>
	</div> <!-- form-group selesai -->
	
	<div class="form-group"> <!-- form-group mulai -->
		<label> Customer foto:</label>
		<input type="file" name="c_foto" class="form-control  form-height-custom" required>
	</div> <!-- form-group selesai -->
	
	<div class="text-center">
		<button name="update" class="btn btn-primary">
			<i class="fa fa-user-nd"></i> Update Now
		</button>
	</div>
	
</form> <!-- form selesai -->

<?php

if(isset($_POST['update'])){
	$update_id = $customer_id;
	$c_nama = $_POST['c_nama'];
	$c_email = $_POST['c_email'];
	$c_alamat = $_POST['c_alamat'];
	$c_nohp = $_POST['c_nohp'];
	$c_noktp = $_POST['c_noktp'];
	$c_imgktp = $_FILES['c_imgktp']['name'];
	$c_imgktp_tmp = $_FILES['c_imgktp']['tmp_name'];
	$c_foto = $_FILES['c_foto']['name'];
	$c_foto_tmp = $_FILES['c_foto']['tmp_name'];
	move_uploaded_file($c_foto_tmp, "customer_image/$c_foto");
	move_uploaded_file($c_imgktp_tmp, "customer_image/$c_imgktp");
	$update_customer = "update customers set customer_nama='$c_nama',customer_email='$c_email', customer_alamat='$c_alamat', customer_nohp='$c_nohp', customer_noktp='$c_noktp', customer_imgktp='$c_imgktp', customer_foto='$c_foto' where customer_id='$update_id'";
	$run_customer = mysqli_query($con, $update_customer);
	if($run_customer){
		echo"<script> alert('Your Account has been edited, to complere the process, please relogin')</script>";
		echo"<script>window.open('logout.php','_self')</script>";
	}
}

?>