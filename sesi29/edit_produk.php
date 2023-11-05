<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Data Produk</title>
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
            background-color: #FFFFF0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
    </style>
</head>
<?php

    include "connection.php";

    $id_produk =$_GET['id_produk'];

    $produk = mysqli_query($connection, "SELECT * FROM produk WHERE id_produk = '$id_produk' ");
    $kategori = mysqli_query($connection, "SELECT * FROM kategori");

    foreach ($produk as $produk_data) {

    $id_kategori = $produk_data ['id_kategori'];
    $nama_produk = $produk_data ['nama_produk'];
    $harga = $produk_data ['harga'];
    $stok = $produk_data ['stok'];
    $tgl_masuk = $produk_data ['tgl_masuk'];

    }

?>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h3 class="mt-3 text-center">Edit Data Produk</h3>
                <form action="proses_edit_produk.php?id_produk=<?php echo $id_produk ?>" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                ID Kategori
                            </td>
                            <td>
                                <select name="id_kategori" class="form-control">
                                    <?php foreach ($kategori as $kategori) { ?>
                                        <option value=" <?php echo $kategori['id_kategori'] ?> "><?php echo $kategori['id_kategori'] . ' - ' . $kategori['jenis_kategori']; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nama Produk
                            </td>
                            <td>
                                <input type="text" name="nama_produk" class="form-control" required="" autocomplete="off"
                                maxlength="50" value="<?php echo $nama_produk ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Harga
                            </td>
                            <td>
                                <input type="number" name="harga" class="form-control" required="" autocomplete="off" maxlength="8" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo $harga ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Stok
                            </td>
                            <td>
                                <input type="number" name="stok" class="form-control" required="" autocomplete="off" 
                                maxlength="4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo $stok ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tanggal Masuk
                            </td>
                            <td>
                                <input type="date" name="tgl_masuk" class="form-control" required="" autocomplete="off" value="<?php echo $tgl_masuk ?>">
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