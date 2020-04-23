<?php 
session_start();
include("includes/database.php");
include("functions/functions.php");

?>

<?php

if(isset($_GET['h_id'])){
	$customer_id = $_GET['h_id'];
}

$ip_add = getRealIpUser();
$status = "Pending";
$invoice_no = mt_rand();
$select_perhitungan = "select * from perhitungan where ip_add='$ip_add'";
$run_perhitungan = mysqli_query($con, $select_perhitungan);
while($row_perhitungan = mysqli_fetch_array($run_perhitungan)){
	$pro_id =  $row_perhitungan['h_id'];
	$jam_sewa =  $row_perhitungan['jam'];
	$get_products = "select * from products where product_id='$pro_id'";
	$run_products = mysqli_query($con,$get_products);
	while($row_products = mysqli_fetch_array($run_products)){
		if($jam_sewa == '6 Jam'){
			$hanya_harga = $row_products['pro_har_6jam'];
		}elseif($jam_sewa == '12 Jam'){
			$hanya_harga = $row_products['pro_har_12jam'];
		}elseif($jam_sewa=='24 Jam'){
			$hanya_harga = $row_products['pro_har_24jam'];
		}
		$sub_total = $hanya_harga;
		$insert_customer_booking = "insert into customer_booking (customer_id,due_amount,invoice_no,jam_sewa,book_date,book_status) values('$customer_id','$sub_total','$invoice_no','$jam_sewa',NOW(),'$status')";
		$run_customer_booking = mysqli_query($con, $insert_customer_booking);
		$insert_pending_booking = "insert into pending_booking (customer_id,invoice_no,product_id,jam_sewa,book_status) values('$customer_id','$invoice_no','$pro_id','$jam_sewa','$status')";
		$run_pending_booking = mysqli_query($con, $insert_pending_booking);
		$delete_perhitungan = "delete from perhitungan where ip_add='$ip_add'";
		$run_delete = mysqli_query($con, $delete_perhitungan);
		echo"
		<script>alert('Your booking has been submitted, Thanks')</script>
		";
		echo" <script>window.open('customer/my_account.php?my_orders','_self')</script>";
	}
}
?>