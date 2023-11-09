<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!--  Cdn Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Plugin Datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <title>TUGAS CRUD</title>
    <style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #E6E6FA;
    }

    .navbar {
        background-color: #98FB98;
        margin-bottom: 50px;
        padding: 1px;
        text-align: left;
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
                  <a class="nav-link active" aria-current="page" href="http://localhost/tugas_php/sesi29/kustomer/kustomer.php">KUSTOMER</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link active" aria-current="page" href="http://localhost/tugas_php/sesi29/kota/kota.php">
                    <font color="red">KOTA</font></a>
                  </a>
                </li>
              </ul>
            </div>
        </div>
      </nav>

    <!-- TABLE -->
    <div class="container">
        <div class="m-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <h1 class="text-center">Data Kota</h1>
            <a href="tambah_kota.php" class="btn btn-success btn-sm mb-3">+ Tambah Data Kota</a>
            <table class="table table-hover" id="myTable">
                <thead>
                    <tr class="text-center align-middle">
                        <th class="text-center" scope="col">No. </th>
                        <th class="text-center" scope="col">ID Kota</th>
                        <th class="text-center" scope="col">Nama Kota</th>
                        <th class="text-center" scope="col">Ongkos Kirim</th>
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connection.php";

                    $kota = mysqli_query($connection, "SELECT * FROM kota");

                    $no = 1;
                    foreach ($kota as $key => $kota_data) {
                    ?>
                            <tr>
                                <th class="text-center align-middle"><?php echo $no ?></th>
                                <td class="text-center align-middle"><?php echo $kota_data["id_kota"] ?></td>
                                <td class="text-center align-middle"><?php echo $kota_data["nama_kota"] ?></td>
                                <td class="text-center align-middle"><?php echo "Rp " . number_format($kota_data["ongkos_kirim"]) ?></td>
                                <td width="200px" class="text-center align-middle">
                                    <a href="edit_kota.php?id_kota=<?php echo $kota_data['id_kota'];?>" class="btn btn-warning">Edit</a>
                                    <a href="delete_kota.php?id_kota=<?php echo $kota_data['id_kota'];?>" class="btn btn-danger" 
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a>
                                </td>
                            </tr>
                        <?php $no++;
                        }; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>