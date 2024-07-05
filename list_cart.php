<script type="text/javascript">
		 $('.remove-link').click(function() {

		 	var url =  $(this).attr('href');
            $.ajax({
            type: "GET",
            url: url,
            success: function(msg){
                $('#num').html(msg);
                $('#lstcart').load('list_cart.php');
            }
        });   
        return false
          
  		  });




    $('#viewcart').click(function() {
        window.location.href = "v_cart.php";
    })

     $('#ptc').click(function() {
        BootstrapDialog.alert("Welcome Damola!");
    })
		
    

	</script>
<?php 
	include 'connect.php';
	session_start();
?>
	<table class="table" style="color:black;font-size:11px;">
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
					<td><?php echo "<img width='50px' height='50px' src=product_images/".$prd['p_image']." />";	?> </td>
					<td>
						<table>
							<tr> 
								<td><?php echo "<b>".$prd['p_name']."</b>";   ?> </td>
							</tr>
							<tr> 
								<td>x<?php echo $qty;   ?> </td>
							</tr>
							<tr> 
								<td><span class="fa fa-close"></span><?php echo '<a class="remove-link" href="/cart.php?action=remove&pid='.$prd['p_id'].'">Remove</a>';?></td>
							</tr>

						</table>
					</td>
					
					<td><?php echo '<strong>'."#".number_format($prd['p_price'])."</strong>"; ?></td>
					</tr>
					<?php } ?>
				<tr>
				<td colspan="2" align="right"><b>Total: </b></td>
				<td><?php echo '#'.number_format($total); ?> </td>
				</tr>
				<tr>
					<td colspan="3">
					<table cellspacing="4" cellpadding="4">
						<tr> 
							<td><button type="button" id="viewcart" class="btn btn-default"  style="background-color:#d6d3d3;"><span style="font-size:10px;">VIEW CART</span></button></td>
							<td>&nbsp;&nbsp;</td>
							<td><button type="button" id="ptc" class="btn btn-warning"><span style="font-size:10px;">PROCEED TO CHECKOUT</span></button></td>
							
						</tr>
					</table>
					<td>
				</tr>
				<?php
				
			}else 	
				echo "Your cart is empty"
			?>
	</table>

	