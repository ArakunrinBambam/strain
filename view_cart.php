<?php 
include 'connect.php';
session_start();

?>
<?php
if(isset($_SESSION['items'])){
	echo "<table border=1>";
	echo "<tr>";
	echo "<th> Name </th>";
	echo "<th> Description </th>";
	echo "<th> Price </th>";
	echo "<th> Quantity </th>";
	echo "<th> Sub-Total </th>";
	echo "</tr>";

	$total = 0;
	foreach ($_SESSION['items'] as $id => $qty) {

		$sql = "Select * from tbl_products where p_id='$id'";
		$rs = $con->query($sql) or die($con->error);
		$prd = $rs->fetch_assoc();
		$subt = $prd['p_price'] * $qty;
		$total+=$subt;
		echo "<tr>";
		echo "<td>". $prd['p_name']." </td>";
		echo "<td>". $prd['p_description']." </td>";
		echo "<td>". number_format($prd['p_price'])." </td>";
		echo "<td> $qty </td>";
		echo "<td>". number_format($subt)." </td>";
		echo "</tr>";
	}

	echo "<tr>";
	echo "<td colspan=4 align=right><b>Total: </b></td>";
	echo "<td>". number_format($total)." </td>";
	echo "</tr>";
	echo "</table>";

	
}else 	
	echo "Your cart is empty"
?>