<?php

if(!isset($_SESSION['admin_email'])){
	echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

	<?php
		if(isset($_GET['delete_terms'])){
			$delete_terms_id = $_GET['delete_terms'];
			$delete_terms = "delete from terms where terms_id='$delete_terms_id'";
			$run_delete = mysqli_query($con, $delete_terms);
			if($run_delete){
				echo "<script>alert('One of your terms has been deleted')</script>";
				echo "<script>window.open('index.php?view_terms','_self')</script>";
			}
		} 
	 
	 
	 ?>

<?php } ?>