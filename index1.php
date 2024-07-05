<?php 
	require 'connect.php';
	
	$query = 'Select * from tbl_products';

	$rs = $con->query($query) or die($con->error);

	if($rs->num_rows){
		


	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>ADIBAT::HOME</title>
		<link href="scripts/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
		<link href="scripts/css/style.css" rel="stylesheet" media="screen" type="text/css">
	</head>
	<body>
		<div class="container"> 
			<div class="row">
				<div class="col-lg-8 col-md-offset-2">	
					<div class="row">
						<ul class="plist">

								

						<?php
						while($row = $rs->fetch_assoc()){
							$descr = $row['p_description'];

							$descr = substr($descr, 0, 20);
							echo "<li>";
							echo "<div><img width='150' height='150' src=product_images/".$row['p_image']." />"."</div>"
								."<div><b>".$row['p_name']."</b></div>"
								.'<div><strong>'."#".number_format($row['p_price'])."</strong></div>"
								.'<div><i>'.$descr."</i></div>"
								.'<div class="ac"><a href="cart.php?action=add&pid='.$row['p_id'].'">Add to Cart</a></div>';
							echo "</li>";
						
						}
					 	?>	
					 	</ul>	
					 </div>									
				</div>
				<div class="col-lg-2">
					<div class="row">
					<?php 
						session_start();
						if(isset($_SESSION['items'])) {
							$nofi = count($_SESSION['items']);
						}else {
							$nofi = 0;
						}

						echo "Your Cart Contains $nofi items";

					?>
					</div>
					<div class="row">
						<a href="cart.php?action=empty">Empty Cart</a>
					</div>
				</div>
			</div>

		</div>
			
	</body>
		<script src="scripts/js/jquery-1.7.1.js"></script>
		<script src="scripts/js/bootstrap.min.js"></script>
		<script src="scripts/js/myjs.js"></script>

	</html>

	<?php	
		
	}else {
		echo "No record found";
	}
?>
