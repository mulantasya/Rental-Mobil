<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

	<?php
		if(isset($_GET['delete_payments'])){
			$delete_payment_id = $_GET['delete_payments'];
			$delete_payments = "delete from pembayaran where pembayaran_id='$delete_payment_id'";
			$run_delete = mysqli_query($con, $delete_payments);
			if($run_delete){
				echo "<script>alert('One of your Payment has been deleted')</script>";
				echo "<script>window.open('index.php?view_payments','_self')</script>";
			}
		} 
	 
	 
	 ?>

<?php } ?>