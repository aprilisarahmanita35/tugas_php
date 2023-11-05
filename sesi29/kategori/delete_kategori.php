<?php

    include "connection.php";

    $id_kategori =$_GET['id_kategori'];

    mysqli_query($connection, "DELETE FROM kategori WHERE id_kategori = '$id_kategori' ");

    header("Location:kategori.php");


?>