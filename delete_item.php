<?php
	include 'config.php';
	$id = $_GET['id'];
	$sql = "Delete from products where md5(id) = '$id'";
	if($db_link->query($sql) === true){
		echo "Datos eliminados con éxito";
		header('location:products.php');
	}else{
		echo "Error ocurrido ";
	}
	$db_link->close();
?>