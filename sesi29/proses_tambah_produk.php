<?php  

	$id_kategori = $_POST ['id_kategori'];
	$nama_produk = $_POST ['nama_produk'];
	$harga = $_POST ['harga'];
	$stok = $_POST ['stok'];
	$tgl_masuk = $_POST ['tgl_masuk'];

	include "connection.php";

	// Menggunakan parameterized query untuk mencegah SQL Injection
	$produk = "INSERT INTO `produk` (`id_kategori`, `nama_produk`, `harga`, `stok`, `tgl_masuk`) VALUES (?, ?, ?, ?, ?)";
	$stmt = mysqli_prepare($connection, $produk);

	if ($stmt) {
	    mysqli_stmt_bind_param($stmt, 'ssssi', $id_kategori, $nama_produk, $harga, $stok, $tgl_masuk);
	    if (mysqli_stmt_execute($stmt)) {
	        header("Location:index.php");
	    } else {
	        echo "Gagal menambahkan produk: " . mysqli_error($connection);
	    }
	    mysqli_stmt_close($stmt);
	} else {
	    echo "Error in prepared statement: " . mysqli_error($connection);
	}

	mysqli_close($connection);

?>

