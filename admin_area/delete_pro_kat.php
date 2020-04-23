<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

	<?php
		if(isset($_GET['delete_pro_kat'])){
			$delete_pro_kat_id = $_GET['delete_pro_kat'];
			$delete_pro_kat = "delete from product_categories where pro_kat_id='$delete_pro_kat_id'";
			$run_delete = mysqli_query($con, $delete_pro_kat);
			if($run_delete){
				echo "<script>alert('One of your product has been deleted')</script>";
				echo "<script>window.open('index.php?view_pro_kat','_self')</script>";
			}
		} 
	 
	 
	 ?>

<?php } ?>