<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

	<?php
		if(isset($_GET['delete_harga_kat'])){
			$delete_har_id = $_GET['delete_harga_kat'];
			$delete_har = "delete from harga_categories where har_id='$delete_har_id'";
			$run_delete = mysqli_query($con, $delete_har);
			if($run_delete){
				echo "<script>alert('One of your harga categories has been deleted')</script>";
				echo "<script>window.open('index.php?view_harga_kat','_self')</script>";
			}
		} 
	 
	 
	 ?>

<?php } ?>