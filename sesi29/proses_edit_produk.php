<?php

    $id_produk = $_GET ['id_produk'];
    $id_kategori = $_POST ['id_kategori'];
    $nama_produk = $_POST ['nama_produk'];
    $harga = $_POST ['harga'];
    $stok = $_POST ['stok'];
    $tgl_masuk = $_POST ['tgl_masuk'];

    include "connection.php";

    mysqli_query($connection, "UPDATE `produk` 
        SET `id_kategori` = '$id_kategori', 
        `nama_produk` = '$nama_produk',
        `harga` = '$harga', 
        `stok` = '$stok', 
        `tgl_masuk` = '$tgl_masuk' 
        WHERE `id_produk` = '$id_produk' ");

    header("Location:index.php");

?>