		
	<script type="text/javascript">
			 $('.remove').click(function() {

		 	var url =  $(this).attr('href');
            $.ajax({
            type: "GET",
            url: url,
            success: function(msg){
                $('#num').html(msg);
                $('#lstcart').load('list_cart.php');
                $('#cartcont').load('cartage.php');
            }
        });   
        return false
          
  		  });




    $('#cshop').click(function() {
      	window.location.href ="/";
    })
    

	</script>
<?php 
	include 'connect.php';
	session_start();
	
?>

	<table class="table" style="color:black;font-size:14px;">

			<tr align="right">
				
				<td colspan="5">  <button type="button" id="cshop" class="btn btn-default" style="background-color:#d6d3d3;"><span style="font-size:10px;"><a href="/">CONTINUE SHOPPING</a></span></button> <button type="button" id="ptc" class="btn btn-warning"><span style="font-size:10px;">PROCEED TO CHECKOUT</span></button> </td>
			
						
			</tr>
			<tr align="center" style="color:red;">
				<th> Item </th>
				<th> Name</th>
				<th> Description </th>
				<th> Quantity </th>	
				<th> Price </th>	


			</tr>
		
          <?php
			if(isset($_SESSION['items']) && count($_SESSION['items']) > 0){
				$total = 0;
				foreach ($_SESSION['items'] as $id => $qty) {

					$sql = "Select * from tbl_products where p_id='$id'";
					$rs = $con->query($sql) or die($con->error);
					$prd = $rs->fetch_assoc();
					$subt = $prd['p_price'] * $qty;
					$total+=$subt;
					?>


					<tr>
					<td><?php echo "<img width='80px' height='80px' src=product_images/".$prd['p_image']." />";	?> </td>
					<td>
						<table>
							<tr> 
								<td><?php echo "<b>".$prd['p_name']."</b>";   ?> </td>
							</tr>
							<tr> 
								<td><span class="fa fa-close"></span><?php echo '<a class="remove" href="/cart.php?action=remove&pid='.$prd['p_id'].'">Remove</a>';?></td>
							</tr>

						</table>
					</td>
					<td> <?php echo "<b>".$prd['p_description']."</b>";   ?>  </td>
					<td style="font-weight:bold;">
						<?php echo $qty; ?>

					 </td>
					<td style="font-weight:bold;"><?php echo '<b>'."#".number_format($prd['p_price']).'</b>'; ?></td>
					</tr>
					
					<?php } ?>
				<tr>
				<td colspan="4" align="right"><b>Total: </b></td>
				<td><?php echo '#'.number_format($total); ?> </td>
				</tr>
				
				<?php
				
			}else 	
				echo "Your cart is empty"
			?>
	</table>

	