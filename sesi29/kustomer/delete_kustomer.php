<?php

    include "connection.php";

    $id_kustomer =$_GET['id_kustomer'];

    mysqli_query($connection, "DELETE FROM kustomer WHERE id_kustomer = '$id_kustomer' ");

    header("Location:kustomer.php");


?>