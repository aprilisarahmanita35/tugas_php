<?php  

	$id_kategori = $_GET ['id_kategori'];
	$jenis_kategori = $_POST ['jenis_kategori'];
	$ukuran = $_POST ['ukuran'];

	include "connection.php";

    mysqli_query($connection, "UPDATE `kategori` 
        SET `jenis_kategori` = '$jenis_kategori',`ukuran` = '$ukuran' 
        WHERE `id_kategori` = '$id_kategori' ");

	header("Location:kategori.php");

?>