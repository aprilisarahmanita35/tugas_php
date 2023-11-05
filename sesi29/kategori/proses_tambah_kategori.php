<?php  

	$jenis_kategori = $_POST ['jenis_kategori'];
	$ukuran = $_POST ['ukuran'];

	include "connection.php";

	mysqli_query($connection, "INSERT INTO `kategori` (`jenis_kategori`, `ukuran`) 
		VALUES ('$jenis_kategori', '$ukuran');");

	header("Location:kategori.php");

?>