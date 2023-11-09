<!DOCTYPE html>
<html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <title>Edit Data Kota</title>
</head>

<?php

    include "connection.php";

    $id_kota = $_GET['id_kota'];

    $kota = mysqli_query($connection, "SELECT * FROM kota WHERE id_kota = '$id_kota' ");

    foreach ($kota as $kota_data) {

    $nama_kota = $kota_data ['nama_kota'];
    $ongkos_kirim = $kota_data ['ongkos_kirim'];

    }

?>

<body>
    <div class="container">
        <div class="m-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <h1 class="text-center">Edit Data Kota</h1>
            <form id="form_tambah" action="proses_edit_kota.php?id_kota=<?php echo $id_kota ?>" method="post">
                <div class="form-group mb-3">
                    <div class="form-label">Nama Kota</div>
                    <input type="text" name="nama_kota" data-name="Nama Kota" class="required form-control" autocomplete="off" maxlength="50" value="<?php echo $nama_kota?>">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Ongkos Kirim</div>
                    <input type="text" name="ongkos_kirim" data-name="Ongkos Kirim" class="required form-control" autocomplete="off"
                    maxlength="8" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this maxLength);" value="<?php echo $ongkos_kirim?>"value="<?php echo $ongkos_kirim?>">
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <a href="kota.php" class="btn btn-danger btn-sm"><i class="bi bi-chevron-left"></i> Kembali</a>
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