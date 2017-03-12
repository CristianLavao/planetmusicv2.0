<?php 
	session_start();
	$_SESSION['productos[0]']="0";
	$_SESSION['precio[0]']="0";
	$_SESSION['cantidad[0]']="0";
	$_SESSION['CarroTemp[0]']="0";
	$_SESSION['Total_compra']="0";
		
	$_SESSION['cont']="0";	
	
	header('location:indexcarrito.php');
	
?>