<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tambah Data Kategori</title>
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
            background-color: #FFE4E1;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h3 class="mt-3 text-center">Tambah Data Kategori</h3>
                <form action="proses_tambah_kategori.php" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                Jenis Kategori
                            </td>
                            <td>
                                <input type="text" name="jenis_kategori" class="form-control" required="" autocomplete="off"
                                maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ukuran
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ukuran" value="Besar" id="ukuranBesar" required="" autocomplete="off">
                                    <label class="form-check-label" for="ukuranBesar">
                                        Besar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ukuran" value="Kecil" id="ukuranKecil" required="" autocomplete="off">
                                    <label class="form-check-label" for="ukuranKecil">
                                        Kecil
                                    </label>
                                </div>
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