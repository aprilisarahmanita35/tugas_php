<?php  

	$nama_kustomer = $_POST ['nama_kustomer'];
	$password_kustomer = $_POST ['password_kustomer'];
	$alamat = $_POST ['alamat'];
	$email = $_POST ['email'];
	$telpon = $_POST ['telpon'];
	$id_kota = $_POST ['id_kota'];

	include "connection.php";

	mysqli_query($connection, 
		"INSERT INTO `kustomer` (`nama_kustomer`, `password_kustomer`, `alamat`, `email`, `telpon`, `id_kota`) 
		VALUES ('$nama_kustomer', '$password_kustomer', '$alamat', '$email', '$telpon', '$id_kota');");

	header("Location:kustomer.php");

?>