<?php
	require 'connect.php';
	
	$query = 'Select * from tbl_products order by p_id desc limit 3';

	$rs = $con->query($query) or die($con->error);

	if($rs->num_rows){
?>

	<div class="panel panel-primary" style="margin:0px;">
        <div class="panel-heading">
            <h3 class="panel-title">Latest Products </h3>
       </div>
       <table class="table">
        <?php
			while($row = $rs->fetch_assoc()){ 
			$descr = $row['p_description'];
			$descr = substr($descr, 0, 20);
			echo '<a href="cart.php?action=add&pid='.$row['p_id'].'">';
			?>
				<tr>
					<td><?php echo "<img width='30px' height='30px' src=product_images/".$row['p_image']." />";	?> </td>
					<td><?php echo "<b>".$row['p_name']."</b>";   ?> </td>
					<td><?php echo '<strong>'."#".number_format($row['p_price'])."</strong>"; ?></td>
				</tr>
			
			<?php		
			echo '</a>';
			}
		?>	
	</table>
</div>
<?php	
		
	}else {
	?>
	<div class="alert alert-danger">
			<h5> No product in the Store </h5>
		</div>
	<?php	
	}
?>
