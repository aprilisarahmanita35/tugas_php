<?php  

	$nama_kota = $_POST ['nama_kota'];
	$ongkos_kirim = $_POST ['ongkos_kirim'];

	include "connection.php";

	mysqli_query($connection, "INSERT INTO `kota` (`nama_kota`, `ongkos_kirim`) 
		VALUES ('$nama_kota', '$ongkos_kirim');");

	header("Location:kota.php");

?>