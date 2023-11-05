<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tambah Data Kustomer</title>
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
            background-color: #E0FFFF;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
    </style>
</head>

<?php 
    
    include "connection.php";

    $kota = mysqli_query($connection, "SELECT * FROM kota");

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h3 class="mt-3 text-center">Tambah Data Kustomer</h3>
                <form action="proses_tambah_kustomer.php" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                Nama Kustomer
                            </td>
                            <td>
                                <input type="text" name="nama_kustomer" class="form-control" required="" autocomplete="off" maxlength="50">
                            </td>
                        </tr>
                            <td>
                                Password
                            </td>
                            <td>
                                <input type="password" name="password_kustomer" class="form-control" required="" autocomplete="off" maxlength="12">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Alamat
                            </td>
                            <td>
                                <textarea name="alamat" class="form-control" rows="5" required="" autocomplete="off"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                <input type="text" name="email" class="form-control" required="" autocomplete="off" 
                                maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Telpon
                            </td>
                            <td>
                                <input type="number" name="telpon" class="form-control" required="" autocomplete="off"
                                maxlength="13" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                ID Kota
                            </td>
                            <td>
                                <select name="id_kota" class="form-control">
                                    <?php foreach ($kota as $kota) { ?>
                                        <option value=" <?php echo $kota['id_kota'] ?> ">
                                            <?php echo $kota['id_kota'] . ' - ' . $kota['nama_kota']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
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