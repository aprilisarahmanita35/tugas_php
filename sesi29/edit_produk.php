<!DOCTYPE html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <title>Edit Data Produk</title>
</head>

<?php

    include "connection.php";

    $id_produk = $_GET['id_produk'];

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
        <div class="m-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <h1 class="text-center">Edit Data Produk</h1>
            <form id="form_tambah" action="proses_edit_produk.php?id_produk=<?php echo $id_produk ?>" method="post">
                <div class="form-group mb-3">
                    <div class="form-label">ID Kategori</div>
                    <select name="id_kategori" class="required form-control">
                        <?php foreach ($kategori as $kategori) { ?>
                            <option value=" <?php echo $kategori['id_kategori'] ?> " 
                                <?php if ($kategori['id_kategori'] == $produk_data['id_kategori']) echo "selected"; ?>>
                                <?php echo $kategori['id_kategori'] . ' - ' . $kategori['jenis_kategori']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Nama Produk</div>
                    <input type="text" name="nama_produk" data-name="Nama Produk" class="required form-control" autocomplete="off" maxlength="50" value="<?php echo $nama_produk ?>">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Harga</div>
                    <input type="number" name="harga" data-name="Harga" class="required form-control" autocomplete="off" maxlength="8" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                    value="<?php echo $harga ?>">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Stok</div>
                    <input type="text" name="stok" data-name="Stok" class="required form-control" autocomplete="off" maxlength="4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                    value="<?php echo $stok ?>">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Tanggal Masuk</div>
                    <input type="date" name="tgl_masuk" data-name="Tanggal Masuk" class="required form-control" 
                    value="<?php echo $tgl_masuk ?>">
                </div>
                <div class="d-flex justify-content-between mb-3">
                <a href="index.php" class="btn btn-danger btn-sm"><i class="bi bi-chevron-left"></i>Kembali</a>
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