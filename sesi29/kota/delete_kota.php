<?php

    include "connection.php";

    $id_kota = $_GET['id_kota'];

    mysqli_query($connection, "DELETE FROM kota WHERE id_kota = '$id_kota' ");

    header("Location:kota.php");


?>