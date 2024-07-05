<?php 
	require 'connect.php';
	
	$query = 'Select * from tbl_products limit 5';

	$rs = $con->query($query) or die($con->error);

	if($rs->num_rows){
		


	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>ADIBAT::Home</title>
		<link href="scripts/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
		<link href="scripts/css/style.css" rel="stylesheet" media="screen" type="text/css">
	</head>
	<body>
		<div class="container"> 
			<div class="row">
				<div class="col-lg-8 col-md-offset-2">	
					<div class="row">
						<?php
						while($row = $rs->fetch_assoc()){
							echo '<div class="col-lg-6" style="padding:5px; margin-bottom:5px; border: solid 1px #345923;">

								<div class="row"><div class="col-lg-8"><b>'.$row['p_name']."</b></div></div>"
								.'<div class="row"><div class="col-lg-8 price" >'."#".number_format($row['p_price'])."</div></div>"
								.'<div class="row"><div class="col-lg-10"><i>'.$row['p_description']."</i></div></div>"
								.'<div class="row"><div class="col-lg-8"><a href="index.php?action=add&pid='.$row['p_id'].'">Add to Cart</a></div></div>'
								
							."</div>";

						}
					 	?>		
					 </div>									
				</div>

			</div>

		</div>
			
	</body>
		<script src="scripts/js/jquery-1.7.1.js"></script>
		<script src="scripts/js/bootstrap.min.js"></script>
	</html>

	<?php	
		
	}else {
		echo "No record found";
	}
?>
