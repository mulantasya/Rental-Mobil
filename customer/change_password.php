<h1 align="center">Change Password</h1>

<form action="" method="post" enctype="multipart/form-data"> <!-- form mulai -->
	<div class="form-group"> <!-- form-group mulai -->
		<label>Your old password:</label>
		<input type="text" name="pass_lama" class="form-control" required>
	</div> <!-- form-group selesai -->
	
	<div class="form-group"> <!-- form-group mulai -->
		<label> Your New Password:</label>
		<input type="text" name="pass_baru" class="form-control" required>
	</div> <!-- form-group selesai -->
	
	<div class="form-group"> <!-- form-group mulai -->
		<label> Confirm Your New Password:</label>
		<input type="text" name="konfirm_pass_baru" class="form-control" required>
	</div> <!-- form-group selesai -->
	
	<div class="text-center">
		<button type="submit" name="submit" class="btn btn-primary">
			<i class="fa fa-user-nd"></i> Update Now
		</button>
	</div>
</form>
	
	
</form> <!-- form selesai -->

<?php

if(isset($_POST['submit'])){
	$c_email = $_SESSION['customer_email'];
	$c_pass_lama = $_POST['pass_lama'];
	$c_pass_baru = $_POST['pass_baru'];
	$c_konfirm_pass_baru = $_POST['konfirm_pass_baru'];
	$sel_c_pass_lama = "select * from customers where customer_pass='$c_pass_lama'";
	$run_c_pass_lama = mysqli_query($con, $sel_c_pass_lama);
	$check_c_pass_lama = mysqli_fetch_array($run_c_pass_lama);
	if($check_c_pass_lama==0){
		echo" <script>alert('sorry, your current password did not valid. please try again') </script>";
		exit();
	}
	if($c_pass_baru!=$c_konfirm_pass_baru){
		echo" <script>alert('sorry, your new password did not match.') </script>";
		exit();
	}
	$update_c_pass = "update customers set customer_pass='$c_pass_baru' where customer_email='$c_email'";
	$run_c_pass = mysqli_query($con, $update_c_pass);
	if($run_c_pass){
		echo" <script>alert('Your password has been updated')</script>";
		echo" <script>window.open('my_account.php?my_orders','_self')</script>";
	}
}

?>