<center><!--  center mulai  -->
    
    <h1> My Orders </h1>
    
    <p class="lead"> Lakukan segera pembayaran anda</p>
    

    
</center><!--  center selesai  -->


<hr>


<div class="table-responsive"><!--  table-responsive mulai  -->
    
    <table class="table table-bordered table-hover"><!--  table table-bordered table-hover mulai  -->
        
        <thead><!--  thead mulai  -->
            
            <tr><!--  tr mulai  -->
                
                <th> NO </th>
                <th> Due Amount </th>
                <th> Invoice No </th>
                <th> Jam Sewa </th>
                <th> Order Date</th>
                <th> Paid / Unpaid </th>
                <th> Status </th>
            </tr><!--  tr selesai  -->
            
        </thead><!--  thead selesai  -->
        
        <tbody><!--  tbody mulai  -->
            <?php 
			
			$customer_session = $_SESSION['customer_email'];
			$get_customer = "select * from customers where customer_email='$customer_session'";
			$run_customer = mysqli_query($con, $get_customer);
			$row_customer = mysqli_fetch_array($run_customer);
			$customer_id = $row_customer['customer_id'];
			$get_booking = "select * from customer_booking where customer_id='$customer_id'";
			$run_booking = mysqli_query($con, $get_booking);
			$i = 0;
			while($row_booking = mysqli_fetch_array($run_booking)){
				$book_id = $row_booking['book_id'];
				$due_amount = $row_booking['due_amount'];
				$invoice_no = $row_booking['invoice_no'];
				$jam_sewa = $row_booking['jam_sewa'];
				$book_date = substr($row_booking['book_date'],0,11);
				$book_status = $row_booking['book_status'];
				$i++;
				if($book_status=='Pending'){
					$book_status = 'Unpaid';
				}else{
					$book_status = 'Paid';
				}
			
			?>
            
            <tr><!--  tr mulai  -->
                
                <th><?php echo $i; ?></th>
                <td>Rp <?php echo $due_amount; ?>.000</td>
                <td><?php echo $invoice_no; ?></td>
                <td><?php echo $jam_sewa; ?></td>
                <td><?php echo $book_date; ?></td>
                <td><?php echo $book_status; ?></td>
                <td>
                    
                    <a href="confirm.php?book_id=<?php echo $book_id; ?>" target="_self" class="btn btn-primary btn-sm"> Confirm Paid </a>
                    
                </td>
				
                
            </tr><!--  tr selesai  -->
            <?php } ?>
			
        </tbody><!--  tbody selesai  -->
        
    </table><!--  table table-bordered table-hover selesai  -->
    
</div><!--  table-responsive selesai  -->