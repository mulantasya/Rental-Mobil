<?php

$database = mysqli_connect("localhost","root","","rental_mobil");

function getRealIpUser(){
	switch(true){
			case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
			case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
			case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
			default : return $_SERVER['REMOTE_ADDR'];
	}
}

//function memasukan pesanan sewa //
function add_cart(){
	global $database;
	
	if(isset($_GET['add_cart'])){
		$ip_add = getRealIpUser();
		$h_id = $_GET['add_cart'];
		$product_qty = $_POST['product_qty'];
		$product_jam = $_POST['jam_sewa'];
		$check_product = "select * from perhitungan where ip_add='$ip_add' AND h_id='$h_id'";
		$run_check = mysqli_query($database, $check_product);
		if(mysqli_num_rows($run_check)>0){
			echo " <script>alert ('This Product has already added in cart')</script>
			";
			echo "
			<script>window.open('details.php?pro_id=$h_id','_self')</script>
			";
		}else{
			$query = "insert into perhitungan(h_id,ip_add,qty,jam) values ('$h_id','$ip_add','$product_qty','$product_jam')";
			$run_query = mysqli_query($database, $query);
			echo "
			<script>window.open('details.php?pro_id=$h_id','_self')</script>
			";
		}
	}
}

// Function memanggil produk //
function getPro(){
	global $database;
	$get_products = "select * from products order by 1 DESC LIMIT 0,8";
	$run_products = mysqli_query($database, $get_products);
	
	while($row_products = mysqli_fetch_array($run_products)){
		$pro_id = $row_products['product_id'];
		$pro_title = $row_products['product_title'];
		$pro_harga = $row_products['pro_har_6jam'];
		$pro_img1 = $row_products['product_img1'];
		
		echo "
		<div class='col-md-4 col-sm-6 single'>
			
			<div class='product'>
				<a href='details.php?pro_id=$pro_id'>
					<img class='img-responsive' src='admin_area/product_images/$pro_img1'>
				</a>
				
				<div class='text'>
					<h3>
						<a href='details.php?pro_id=$pro_id'>
							$pro_title
						</a>
					</h3>
					
					<p class='prices'>
						IDR $pro_harga 
					</p>
					
					<p class='button'>
						<a class='btn btn-default' href='details.php?pro_id=$pro_id'>
							View Details
						</a>
						
						<a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
							<i class='fa fa-shopping-cart'></i> Add to cart
						</a>
					
					</p>
				</div>
			</div>
		
		</div>
		
		";
	}
}


// Function memanggil kolom kategori //
function getPKat(){
	global $database;
	$get_pro_kat = "select * from product_categories";
	$run_pro_kat = mysqli_query($database, $get_pro_kat);
	
	while($row_pro_kat=mysqli_fetch_array($run_pro_kat)){
		$pro_kat_id = $row_pro_kat['pro_kat_id'];
		$pro_kat_title = $row_pro_kat['pro_kat_title'];
		
		echo "
		
		<li><a href='product.php?product_kat=$pro_kat_id'>$pro_kat_title </a></li>
		
		";
	}
	
}


function getKapa(){
	global $database;
	$get_kapa = "select * from kapasitas";
	$run_kapa = mysqli_query($database, $get_kapa);
	
	while($row_kapa=mysqli_fetch_array($run_kapa)){
		$kapa_id = $row_kapa['kapa_id'];
		$kapa_title = $row_kapa['kapa_title'];
		
		echo "
		
		<li><a href='product.php?pro_kapa=$kapa_id'>$kapa_title </a></li>
		
		";
	}
	
}

function getHar(){
	global $database;
	$get_har = "select * from harga_categories";
	$run_har = mysqli_query($database, $get_har);
	
	while($row_har=mysqli_fetch_array($run_har)){
		$har_id = $row_har['har_id'];
		$har_title = $row_har['har_title'];
		
		echo "
		
		<li><a href='product.php?product_har=$har_id'>$har_title</a></li>
		
		";
	}
	
}

function getPKatPro(){
	global $database;
	if(isset($_GET['product_kat'])){
		$pro_kat_id = $_GET['product_kat'];
		$get_pro_kat = "select * from product_categories where pro_kat_id='$pro_kat_id'";
		$run_pro_kat = mysqli_query($database, $get_pro_kat);
		$row_pro_kat = mysqli_fetch_array($run_pro_kat);
		$pro_kat_title = $row_pro_kat['pro_kat_title'];
		$pro_kat_desc = $row_pro_kat['pro_kat_desc'];
		$get_products = "select * from products where pro_kat_id='$pro_kat_id'";
		$run_products = mysqli_query($database, $get_products);
		$count = mysqli_num_rows($run_products);
		if($count==0){
			echo "
			
			<div class='box'>
				<h1> Maaf tidak ada merek mobil tersebut </h1>
			</div>
			";
		}
		else{
			echo "
			<div class='box'>
				<h1> $pro_kat_title </h1>
				<p> $pro_kat_desc </p>
			</div>
			
			";
		}
		
		while($row_products = mysqli_fetch_array($run_products)){
		$pro_id = $row_products['product_id'];
		$pro_title = $row_products['product_title'];
		$pro_harga = $row_products['pro_har_6jam'];
		$pro_img1 = $row_products['product_img1'];
		
			echo "
			<div class='col-md-4 col-sm-6 center-responsive'>
			
			<div class='product'>
				<a href='details.php?pro_id=$pro_id'>
					<img class='img-responsive' src='admin_area/product_images/$pro_img1'>
				</a>
				
				<div class='text'>
					<h3>
						<a href='details.php?pro_id=$pro_id'>
							$pro_title
						</a>
					</h3>
					
					<p class='prices'>
						IDR $pro_harga 
					</p>
					
					<p class='button'>
						<a class='btn btn-default' href='details.php?pro_id=$pro_id'>
							View Details
						</a>
						
						<a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
							<i class='fa fa-shopping-cart'></i> Add to cart
						</a>
					
					</p>
				</div>
			</div>
		
		</div>
		
		";

	
		}
	}
}

function getKatPro(){
    
    global $database;
    
    if(isset($_GET['pro_kapa'])){
        
        $kapa_id = $_GET['pro_kapa'];
        
        $get_kapa = "select * from kapasitas where kapa_id='$kapa_id'";
        
        $run_kapa = mysqli_query($database,$get_kapa);
        
        $row_kapa = mysqli_fetch_array($run_kapa);
        
        $kapa_title = $row_kapa['kapa_title'];
        
        $kapa_desc = $row_kapa['kapa_desc'];
        
        $get_kapa = "select * from products where kapa_id='$kapa_id' LIMIT 0,6";
        
        $run_products = mysqli_query($database,$get_kapa);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Category </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
                
                    <h1> $kapa_title </h1>
                    
                    <p> $kapa_desc </p>
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
            
            $pro_title = $row_products['product_title'];
            
            $pro_harga = $row_products['pro_har_6jam'];
            
            $pro_desc = $row_products['pro_desc'];
            
            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                    <div class='product'>
                                        
                        <a href='details.php?pro_id=$pro_id'>
                                            
                            <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                            
                        </a>
                                            
                        <div class='text'>
                                            
                            <h3>
                                                
                                <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                                
                            </h3>
                                            
                        <p class='prices'>

                            IDR$pro_harga

                        </p>

                            <p class='buttons'>

                                <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                                View Details

                                </a>

                                <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                                <i class='fa fa-shopping-cart'></i> Add To Cart

                                </a>

                            </p>
                                            
                        </div>
                                        
                    </div>
                                    
                </div>
            
            ";
		}
	}
}
            
function getHarPro(){
    
    global $database;
    
    if(isset($_GET['product_har'])){
        
        $har_id = $_GET['product_har'];
        
        $get_har = "select * from harga_categories where har_id='$har_id'";
        
        $run_har = mysqli_query($database,$get_har);
        
        $row_har = mysqli_fetch_array($run_har);
        
        $har_title = $row_har['har_title'];
        
        $har_desc = $row_har['har_desc'];
        
        $get_har = "select * from products where har_id='$har_id' LIMIT 0,6";
        
        $run_products = mysqli_query($database,$get_har);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Category </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
                
                    <h1> $har_title </h1>
                    
                    <p> $har_desc </p>
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
            
            $pro_title = $row_products['product_title'];
            
            $pro_harga = $row_products['pro_har_6jam'];
            
            $pro_desc = $row_products['pro_desc'];
            
            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                    <div class='product'>
                                        
                        <a href='details.php?pro_id=$pro_id'>
                                            
                            <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                            
                        </a>
                                            
                        <div class='text'>
                                            
                            <h3>
                                                
                                <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                                
                            </h3>
                                            
                        <p class='prices'>

                            IDR$pro_harga

                        </p>

                            <p class='buttons'>

                                <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                                View Details

                                </a>

                                <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                                <i class='fa fa-shopping-cart'></i> Add To Cart

                                </a>

                            </p>
                                            
                        </div>
                                        
                    </div>
                                    
                </div>
            
            ";
            
        }
        
    }
    
}

/// finish getcatpro functions ///


function items(){
	global $database;
	$ip_add = getRealIpUser();
	$get_items = "select * from perhitungan where ip_add='$ip_add'";
	$run_items = mysqli_query($database, $get_items);
	$count_items = mysqli_num_rows($run_items);
	echo $count_items;
}

function total_price(){
	global $database;
	$ip_add = getRealIpUser();
	$total = 0;
	$select_perhitungan = "select * from perhitungan where ip_add='$ip_add'";
	$run_perhitungan=mysqli_query($database,$select_perhitungan);
	while($record=mysqli_fetch_array($run_perhitungan)){
		$pro_id = $record['h_id'];
		$pro_qty = $record['qty'];
		$get_price = "select * from products where product_id='$pro_id'";
		$run_price = mysqli_query($database,$get_price);
		while($row_price=mysqli_fetch_array($run_price)){
			$sub_total = $row_price['pro_har_6jam']*$pro_qty;
			$total += $sub_total;
		}
	}
	
	echo"".$total;
}

?>