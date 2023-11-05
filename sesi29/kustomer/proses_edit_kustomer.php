<?php  

	$id_kustomer = $_GET ['id_kustomer'];
	$nama_kustomer = $_POST ['nama_kustomer'];
	$password_kustomer = $_POST ['password_kustomer'];
	$alamat = $_POST ['alamat'];
	$email = $_POST ['email'];
	$telpon = $_POST ['telpon'];
	$id_kota = $_POST ['id_kota'];

	include "connection.php";

	mysqli_query($connection, "UPDATE `kustomer` 
        SET `nama_kustomer` = '$nama_kustomer',
        `password_kustomer` = '$password_kustomer', 
        `alamat` = '$alamat', 
        `email` = '$email',
        `telpon` = '$telpon',
        `id_kota` = '$id_kota' 
        WHERE `id_kustomer` = '$id_kustomer' ");

	header("Location:kustomer.php");

?>