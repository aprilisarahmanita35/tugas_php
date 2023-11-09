<!DOCTYPE html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <title>Edit Data Kategori</title>
</head>
<?php

    include "connection.php";

    $id_kategori =$_GET['id_kategori'];

    $kategori = mysqli_query($connection, "SELECT * FROM kategori WHERE id_kategori = '$id_kategori' ");

    foreach ($kategori as $kategori_data) {

    $jenis_kategori = $kategori_data ['jenis_kategori'];
    $ukuran = $kategori_data ['ukuran'];

    }

?>
<body>
    <div class="container">
        <div class="m-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <h1 class="text-center">Edit Data Kategori</h1>
            <form id="form_tambah" action="proses_edit_kategori.php?id_kategori=<?php echo $id_kategori ?>" method="post">
                <div class="form-group mb-3">
                    <div class="form-label">Jenis Kategori</div>
                    <input type="text" name="jenis_kategori" data-name="Jenis Kategori" class="required form-control" autocomplete="off" maxlength="50" value="<?php echo $jenis_kategori?>">
                </div>
                <div class="form-group mb-3">
                    <label>Ukuran</label>
                    <div class="form-check">
                        <?php 
                            if ($ukuran == 'Besar') {
                                echo ' <input class="form-check-input" type="radio" name="ukuran" value="Besar" id="ukuranBesar" checked="" > ';
                            } else {
                                echo ' <input class="form-check-input" type="radio" name="ukuran" value="Besar" id="ukuranBesar" > ';
                            }
                        ?>
                        <label class="form-check-label" for="ukuranBesar">
                            Besar
                        </label>
                    </div>
                    <div class="form-check">
                        <?php 
                            if ($ukuran == 'Kecil') {
                                echo ' <input class="form-check-input" type="radio" name="ukuran" value="Kecil" id="ukuranKecil" checked="" > ';
                            } else {
                                echo ' <input class="form-check-input" type="radio" name="ukuran" value="Kecil" id="ukuranKecil" > ';
                            }
                        ?>
                        <label class="form-check-label" for="ukuranKecil">
                            Kecil
                        </label>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                <a href="kategori.php" class="btn btn-danger btn-sm"><i class="bi bi-chevron-left"></i>Kembali</a>
                    <input type="submit" name="Submit" value="Edit Data" class="btn btn-warning btn-sm">
                </div>
            </form>
        </div>
    </div>

        <script>
            $(document).ready(function() {
                $('#form_tambah').submit(function(e) {
                    e.preventDefault(); // Mencegah pengiriman form
                    
                    // Menghapus pesan error yang mungkin ada
                    $('.error').remove();

                    // Cek setiap input dengan class "required"
                    $('.required').each(function() {
                        if ($(this).val() === '') {
                            // Mendapatkan nama kolom dari atribut data-name
                            var columnName = $(this).data('name');

                            // Jika input kosong, tambahkan pesan error dan beri warna merah di kolomnya
                            $(this).after('<div class=" form-text error text-danger" style="font-size: 12px;">' + columnName + ' tidak boleh kosong</div>');
                            $(this).css('border-color', 'red');
                        }
                    });

                    // Jika tidak ada input yang kosong, submit form
                    if ($('.error').length === 0) {
                        $(this).unbind('submit').submit();
                    }
                });

                // Menghapus pesan error dan warna merah saat input diubah
                $('.required').keyup(function() {
                    $(this).next('.error').remove();
                    $(this).css('border-color', '');
                });
            });
        </script>
</body>
</html>