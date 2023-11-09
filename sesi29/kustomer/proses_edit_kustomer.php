<?php  

	$id_kustomer = $_GET ['id_kustomer'];
	$nama_kustomer = $_POST ['nama_kustomer'];
	$password_kustomer = $_POST ['password_kustomer'];
	$alamat = $_POST ['alamat'];
	$email = $_POST ['email'];
	$telpon = $_POST ['telpon'];
	$id_kota = $_POST ['id_kota'];

	include "connection.php";

	// Menggunakan parameterized query untuk mencegah SQL Injection
    $kustomer = "UPDATE kustomer SET nama_kustomer = ?, password_kustomer = ?, alamat = ?, email = ?, telpon = ?, id_kota = ? WHERE id_kustomer = ?";
    $stmt = mysqli_prepare($connection, $kustomer);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'sssssii', $nama_kustomer, $password_kustomer, $alamat, $email, $telpon, $id_kota, $id_kustomer);
        if (mysqli_stmt_execute($stmt)) {
            header("Location:kustomer.php");
        } else {
            echo "Gagal menambahkan produk: " . mysqli_error($connection);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error in prepared statement: " . mysqli_error($connection);
    }

    mysqli_close($connection);

?>

