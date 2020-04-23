<?php
$active='About Us';
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
							About Us
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
							<div class="panel-title">
								<h1 align="center"> North Biems Transport</h1>
							</div>
						</div> <!-- box-header selesai -->
						<div class="panel-body">
							<p>Temukan kami di :</p>
							<p>Jl. Lodan Raya No. 2 Ancol, Jakarta Utara 14430</p>
							<p>Kontak HP : 088977008172</p>
							<p>Email : agussantosococ03@gmail.com</p>
							<p>Rekening BCA <b>5310666101</b> a/n Agus Santoso</p>
							<br><hr>
							<h4><u>CARA PEMESANAN</u></h4>
							<ol>
								<li>Pilih mobil yang ingin anda sewa pada menu <b>Products</b></li>
								<li>Pilih <b>Booking / View Details</b> untuk melihat harga dan juga spesifikasi mobil</li>
								<li>Harga yang tertera pada mobil hanya untuk sewa <b>6 Jam</b></li>
								<li>Untuk melihat harga sewa <b>12 Jam</b> dan <b>24 Jam</b> lihat di <b>Product Details</b></li>
								<li>Jika ingin menyewa lebih dari 1 hari dapat hubungi nomor kami dan mengkonfirmasi ketersediaan mobil</li>
								<li>Jika sudah memilih mobil yang diinginkan klik tombol <b>Booking</b></li>
								<li>Jika anda memilih sewa <b>12 Jam</b> atau <b>24 Jam</b> harga akan tertera pada <b>Rincian Sewa</b></li>
								<li>Konfirmasi kembali mobil yang telah anda pilih pada menu <b>Rincian Sewa</b></li>
								<li>Jika mobil sudah sesuai pesanan anda klik <b>Process Rincian</b>, Jika anda salah atau ingin mengganti pilihan mobil klik <b>Delete</b> lalu klik <b>Update Rincian</b> Setelah itu klik <b>Lanjut Pilih Sewa Mobil</b></li>
								<li>Setelah berhasil Process Rincian, maka akan masuk ke dalam <b>My Orders</b> untuk melanjutkan pembayaran</li>
								<li>Pembayaran dapat dilakukan dengan mentransfer ke Nomor rekening yang tersedia</li>
								<li>Klik <b>Confirm Paid</b> Jika sudah melakukan pembayaran</li>
								<li>Isi kolom yang ada, lalu datang ke tempat kami untuk mengambil mobil yang telah anda booking</li>
							</ol>
							<br><br>
							
						</div>
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