<?php 
session_start();

if (isset($_GET['pid'])){
	$pid=$_GET['pid'];
}
if (isset($_GET['action'])){
	$action = $_GET['action'];
}

if (!isset($_GEt['pid']) && !isset($_GET['action'])){
	header("location: index.php");
	echo "No product selected";
}


if (!isset($_SESSION['items'])){
	$_SESSION['items']=array();
}


switch ($action) {
	case 'add':
		if(isset($_SESSION['items'][$pid])){
			$_SESSION['items'][$pid]++;
		}else {
			$_SESSION['items'][$pid]=1;
		}

		break;
	case 'remove':
		if(isset($_SESSION['items'][$pid]) && $_SESSION['items'][$pid] > 0){
			$_SESSION['items'][$pid]--;
			if($_SESSION['items'][$pid]==0) {
			unset($_SESSION['items'][$pid]);
		}
		}else {
			echo "Invalid Product";
		}
		break;
	case 'empty':
		unset($_SESSION['items']);
		break;
	
	default:
		# code...
		break;
}
	
if(isset($_SESSION['items'])) {
	$nofi = count($_SESSION['items']);
}else {
	$nofi = 0;
}
	echo $nofi;  
?>