<?php  

	$id_kategori = $_POST ['id_kategori'];
	$nama_produk = $_POST ['nama_produk'];
	$harga = $_POST ['harga'];
	$stok = $_POST ['stok'];
	$tgl_masuk = $_POST ['tgl_masuk'];

	include "connection.php";

	mysqli_query($connection, 
		"INSERT INTO `produk` (`id_kategori`, `nama_produk`, `harga`, `stok`, `tgl_masuk`) 
		VALUES ('$id_kategori', '$nama_produk', '$harga', '$stok', '$tgl_masuk');");

	header("Location:index.php");

?>