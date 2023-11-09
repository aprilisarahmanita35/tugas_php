<!DOCTYPE html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <title>Tambah Data Produk</title>
</head>

<?php 
    
    include "connection.php";

    $kategori = mysqli_query($connection, "SELECT * FROM kategori");

?>

<body>
    <div class="container">
        <div class="m-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <h1 class="text-center">Tambah Data Produk</h1>
            <form id="form_tambah" action="proses_tambah_produk.php" method="post">
                <div class="form-group mb-3">
                    <div class="form-label">ID Kategori</div>
                    <select name="id_kategori" class="required form-control">
                            <?php foreach ($kategori as $kategori) { ?>
                                        <option value=" <?php echo $kategori['id_kategori'] ?> ">
                                            <?php echo $kategori['id_kategori'] . ' - ' . $kategori['jenis_kategori']; ?>
                                        </option>
                            <?php } ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Nama Produk</div>
                    <input type="text" name="nama_produk" data-name="Nama Produk" class="required form-control" autocomplete="off" maxlength="50">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Harga</div>
                    <input type="number" name="harga" data-name="Harga" class="required form-control" autocomplete="off" maxlength="8" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Stok</div>
                    <input type="text" name="stok" data-name="Stok" class="required form-control" autocomplete="off" maxlength="4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Tanggal Masuk</div>
                    <input type="date" name="tgl_masuk" data-name="Tanggal Masuk" class="required form-control">
                </div>
                <div class="d-flex justify-content-between mb-3">
                <a href="index.php" class="btn btn-danger btn-sm"><i class="bi bi-chevron-left"></i>Kembali</a>
                    <input type="submit" name="Submit" value="Submit" class="btn btn-success btn-sm">
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