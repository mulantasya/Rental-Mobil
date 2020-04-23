<div id="footer"> <!-- footer mulai -->
	<div class="container"> <!-- container mulai -->
		<div class="row"> <!-- row mulai -->
			<div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 mulai -->
				<h4>Pages</h4>
				<ul> <!-- ul mulai -->
					<li> <a href="../index.php"> Home </a></li>
					<li> <a href="../rincian.php"> Rincian Sewa </a></li>
					<li> <a href="../about.php"> About Us </a></li>
					<li> <a href="../product.php"> Product </a></li>
					<li> <a href="my_account.php"> My Account </a></li>
				</ul> <!-- ul selesai -->
				<hr>
				<h4> User Section</h4>
				<ul> <!-- ul mulai -->
					<?php
									
						if(!isset($_SESSION['customer_email'])){
							echo" <a href='../checkout.php'>Login</a>";
						}else{
							echo" <a href='my_account.php?my_orders'>My Account</a>";
						}
									
					?>

					<li>
						<?php
									
							if(!isset($_SESSION['customer_email'])){
								echo" <a href='../checkout.php'>Login</a>";
							}else{
								echo" <a href='my_account.php?edit_account'>Edit Account</a>";
							}
									
						?>
					</li>
					
					<li><a href="../terms.php">Terms & Conditions</a></li>
				</ul><!-- ul selesai -->
				<hr class="hidden-md hidden-lg hidden-sm">
			</div> <!-- col-sm-6 col-md-3 selesai -->
			
			<div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 mulai -->
							
				<h4> Mobil Yang Di Sewakan</h4>
				<ul> <!-- ul mulai -->
					<?php
					$get_pro_kat = "select * from product_categories";
					$run_pro_kat = mysqli_query($con, $get_pro_kat);
					
					while($row_pro_kat=mysqli_fetch_array($run_pro_kat)){
						$pro_kat_id = $row_pro_kat['pro_kat_id'];
						$pro_kat_title = $row_pro_kat['pro_kat_title'];
						
						echo "
							<li>
								<a href='../product.php?product_kat=$pro_kat_id'>
									$pro_kat_title
								</a>
							</li>
						";
					}
					?>
				</ul> <!-- ul selesai -->

				<hr class="hidden-md hidden-lg">
				
			</div> <!-- col-sm-6 col-md-3 selesai -->
			
			<div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 mulai -->
				<h4> Hubungi Kami </h4>
				
				<p> <!-- p mulai -->
				
					<strong> Rental Mobil UBM</strong>
					<br/> Jakarta
					<br/> Lodan
					<br/> 0889-7700-8172
					<br/> agussantosococ03@gmail.com
					<br/> <strong>Agus Santoso</strong>
				</p> <!-- p selesai -->
				<a href="../about.php"> Check Our Pages</a>
		
				<hr class="hidden-md hidden-lg">
				
			</div> <!-- col-sm-6 col-md-3 selesai -->
			
			<div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 mulai -->
				<h4> Social Media</h4>
				<p class="social"> 
					<a href="https://www.facebook.com" class="fa fa-facebook"></a>
					<a href="https://www.twitter.com" class="fa fa-twitter"></a>
					<a href="https://www.instagram.com/agussantoso_w" class="fa fa-instagram"></a>
					<a href="https://www.gmail.com" class="fa fa-google-plus"></a>
					<a href="https://www.youtube.com" class="fa fa-youtube"></a>
				</p>
			</div> <!-- col-sm-6 col-md-3 selesai -->
		</div> <!-- row selesai -->
	</div> <!-- container selesai -->
</div> <!-- footer selesai -->

<div id="copyright"> <!-- copyright mulai -->
	<div class="container"> <!-- container mulai -->
		<div class="col-md-6"> <!-- col-md-6 mulai -->
			<p class="pull-left"> &copy; 2020 North Biems Transport </p> 
		</div> <!-- col-md-6 selesai -->
		<div class="col-md-6"> <!-- col-md-6 mulai -->
			<p class="pull-right"> &copy; Design by <a href="https://www.instagram.com/susukntlmanis.uht/"> Rizkyana</a>, &copy; Coding by <a href="https://www.instagram.com/agussantoso_w/">Agus Santoso</a>, &copy; Team Creative <a href="https://www.instagram.com/mulan_anastasia/">Mulan Anastasia</a> </p> 
		</div> <!-- col-md-6 selesai -->
	</div> <!-- container selesai -->
</div> <!-- copyright selesai -->