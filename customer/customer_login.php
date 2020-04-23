
<div class="box"><!-- Box Mulai -->
	<div class="box-header"><!-- Box-header Mulai -->
		<center><!-- center Mulai -->
			<h1>Login</h1>
			<p class="lead">Sudah punya akun di sini ?</p>
			<p class="text-muted">Silahkan masukkan Email dan Password anda</p>
		</center> <!-- center Selesai -->
	</div> <!-- Box-header -->
	
	<form method="post" action="checkout.php"> <!-- Form mulai -->
	<div class="form-group"> <!-- Form-group mulai -->
		<label> Email </label>
		<input name="youremail" type="text" class="form-control" placeholder="Masukkan email anda" required>
	</div> <!-- Form-group Selesai --> 
	<div class="form-group"> <!-- Form-group mulai -->
		<label> Password </label>
		<input name="paswd" type="password" class="form-control" placeholder="Masukkan Password anda" required>
	</div> <!-- Form-group Selesai --> 
	<div class="text-center">
		<button name="login" value="Login" class="btn btn-primary">
			<i class="fa fa-sign-in"></i> Login
		</button>
	</div>
	</form> <!-- Form Selesai -->
	<center>
		<a href="customer_register.php">
			<h3> Don't have account..? Register Here</h3>
		</a>
	</center>
</div> <!-- Box Selesai -->

<?php

if(isset($_POST['login'])){
	$customer_email= $_POST['youremail'];
	$customer_pass= $_POST['paswd'];
	$select_customer= "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
	$run_customer = mysqli_query($con, $select_customer);
	$get_ip = getRealIpUser();
	$check_customer = mysqli_num_rows($run_customer);
	$select_perhitungan = "select * from perhitungan where ip_add='$get_ip'";
	$run_perhitungan = mysqli_query($con,$select_perhitungan);
	$check_perhitungan = mysqli_num_rows($run_perhitungan);
	if($check_customer==0){
		echo"<script>alert('Your email or password is wrong!')</script>";
		exit();
	}
	if($check_customer==1 AND $check_perhitungan==0){
		$_SESSION['customer_email']=$customer_email;
		echo"<script>alert('You are Logged in')</script>";
		echo"<script>window.open('customer/my_account.php?my_orders','_self')</script>";
	}else{
		$_SESSION['customer_email']=$customer_email;
		echo"<script>alert('You are Logged in')</script>";
		echo"<script>window.open('checkout.php','_self')</script>";
	}
}

?>