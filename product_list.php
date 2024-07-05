<?php 
	require 'connect.php';

	if (!isset($_GET['page'])) {
		$page = "normal";
	}else {
		$page = $_GET['page'];
	}


?>
<div class="row">
				<div class="col-lg-12">
					<?php include($page.".php") ?>
				</div>
</div>

