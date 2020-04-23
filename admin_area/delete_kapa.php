<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

	<?php
		if(isset($_GET['delete_kapa'])){
			$delete_kapa_id = $_GET['delete_kapa'];
			$delete_kapa = "delete from kapasitas where kapa_id='$delete_kapa_id'";
			$run_delete = mysqli_query($con, $delete_kapa);
			if($run_delete){
				echo "<script>alert('One of your kapasitas has been deleted')</script>";
				echo "<script>window.open('index.php?view_kapa','_self')</script>";
			}
		} 
	 
	 
	 ?>

<?php } ?>