<?php include('connect.php') ?>
					<?php 
						if(isset($_POST['searchparam'])){
							$param = $_POST['searchparam'];
						}else {
							$param = '';
						}

						
						$query = "SELECT * FROM `tbl_products` WHERE `p_name` LIKE '%$param%' ";

						$rs = $con->query($query) or die($con->error);
					?>

					<div class="row">
						<div class="col-lg-12" style="border-bottom:solid 2px red;">
							<b><?php echo $rs->num_rows; ?> Result(s) Found</b>
						</div>
					</div>
					<div class="row">
						<ul class="plist">
						<?php
						

						if($rs->num_rows){
						while($row = $rs->fetch_assoc()){
							$descr = $row['p_description'];

							$descr = substr($descr, 0, 20);
							echo '<a title="'.$row['p_name'].'" href="/cart.php?action=add&pid='.$row['p_id'].'" class="ajax-link">';
							echo "<li>";
							echo "<div><img src=product_images/".$row['p_image']." />"."</div>"
								."<div><b>".$row['p_name']."</b></div>"
								.'<div><strong>'."#".number_format($row['p_price'])."</strong></div>"
								.'<div><i>'.$descr."</i></div>";
								
							echo "</li>";
							echo "</a>";
						
						}

						}else {
						?>
							<div class="alert alert-danger">
								<h5> product not found </h5>
							</div>
						<?php	
						}
					 	?>	
					 </ul>	
					 </div>

					 