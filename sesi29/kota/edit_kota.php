<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Data Kota</title>
    <style>
        body {
            background-color: #98FB98;
            padding: 20px;
        }

        h3 {
            margin-top: 30px;
        }

        table {
            border-collapse: collapse;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            width: 100%;
        }

        .form-control {
            width: 100%;
        }

        .form-check-label {
            padding-left: 15px;
        }

        .container {
            background-color: #E6E6FA;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
    </style>
</head>

<?php

    include "connection.php";

    $id_kota =$_GET['id_kota'];

    $kota = mysqli_query($connection, "SELECT * FROM kota WHERE id_kota = '$id_kota' ");

    foreach ($kota as $kota_data) {

    $nama_kota = $kota_data ['nama_kota'];
    $ongkos_kirim = $kota_data ['ongkos_kirim'];

    }

?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h3 class="mt-3 text-center">Edit Data Kota</h3>
                <form action="proses_edit_kota.php?id_kota=<?php echo $id_kota ?>" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                Nama Kota
                            </td>
                            <td>
                                <input type="text" name="nama_kota" class="form-control" required="" autocomplete="off" maxlength="50" value="<?php echo $nama_kota?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ongkos Kirim
                            </td>
                            <td>
                                <input type="number" name="ongkos_kirim" class="form-control" required="" autocomplete="off" maxlength="8" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo $ongkos_kirim?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <input type="submit" name="Submit" value="Submit" class="btn btn-success">
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>