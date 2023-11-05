<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>TUGAS CRUD</title>
    <style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #E0FFFF;
    }

    .navbar {
        background-color: #98FB98;
        margin-bottom: 50px;
        padding: 1px;
        text-align: left;
        padding-left: 45px;
        padding-right: 60px;
    }

    h3 {
        padding: 1px;
        text-align: center;
        padding-left: 45px;
        padding-right: 60px;
    }

    table {
        width: 80%;
        border-collapse: collapse;
        margin: 20px auto;
        background-color: #fff;
    }

    table, th, td {
        border: 1px solid #ccc;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #333;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ccc;
    }

    </style>
</head>
<body>

<!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand p-3 fs-4" href="#"> TOKO KUE </a>
        <div class="collapse navbar-collapse" id="navbar-nav">
          <ul class="navbar-nav ms-auto p-3 me-4" >
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="http://localhost/tugas_php/sesi29/index.php">PRODUK</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="http://localhost/tugas_php/sesi29/kategori/kategori.php">KATEGORI</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="http://localhost/tugas_php/sesi29/kustomer/kustomer.php">
              	<font color="red">KUSTOMER</font></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="http://localhost/tugas_php/sesi29/kota/kota.php">KOTA</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>

  <!-- TABLE -->
  <h3>DATA KUSTOMER</h3>
  <div style="padding-left: 130px;">
      <a href="tambah_kustomer.php" class="btn btn-success" > 
      + Tambah Data Kustomer</a>
  </div>
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th><b>No</b></th>
            <th><b>ID Kustomer</b></th>
            <th><b>Nama Kustomer</b></th>
            <th><b>Password</b></th>
            <th><b>Alamat</b></th>
            <th><b>Email</b></th>
            <th><b>Telpon</b></th>
            <th><b>ID Kota</b></th>
            <th><b>Aksi</b></th>
        </tr>
            <?php
            include "connection.php";

            $kustomer = mysqli_query($connection, "SELECT * FROM kustomer");

            $no = 1;
            foreach ($kustomer as $key => $kustomer_data) {
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $kustomer_data["id_kustomer"] ?></td>
                    <td><?php echo $kustomer_data["nama_kustomer"] ?></td>
                    <td><?php echo $kustomer_data["password_kustomer"] ?></td>
                    <td><?php echo $kustomer_data["alamat"] ?></td>
                    <td><?php echo $kustomer_data["email"] ?></td>
                    <td><?php echo $kustomer_data["telpon"] ?></td>
                    <td><?php echo $kustomer_data["id_kota"] ?></td>
                    <td>
                      <a href="edit_kustomer.php?id_kustomer=<?php echo $kustomer_data['id_kustomer'];?>" class="btn btn-warning">Edit</a>
                      <a href="delete_kustomer.php?id_kustomer=<?php echo $kustomer_data['id_kustomer'];?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a>
                    </td>
                </tr>
            <?php $no++;
            } ?>
    </table>


  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>