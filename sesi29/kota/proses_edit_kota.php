<?php  

	$id_kota = $_GET ['id_kota'];
	$nama_kota = $_POST ['nama_kota'];
	$ongkos_kirim = $_POST ['ongkos_kirim'];

	include "connection.php";

	mysqli_query($connection, "UPDATE `kota` 
		SET `nama_kota` = '$nama_kota',`ongkos_kirim` = '$ongkos_kirim' 
        WHERE `id_kota` = '$id_kota' ");

	header("Location:kota.php");

?>