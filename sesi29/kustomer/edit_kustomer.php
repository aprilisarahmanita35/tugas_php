<!DOCTYPE html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <title>Edit Data Kustomer</title>
</head>

<?php 
    
    include "connection.php";

    $id_kustomer = $_GET['id_kustomer'];

    $kustomer = mysqli_query($connection, "SELECT * FROM kustomer WHERE id_kustomer = '$id_kustomer' ");
    $kota = mysqli_query($connection, "SELECT * FROM kota");

    foreach ($kustomer as $kustomer_data) {

    $nama_kustomer = $kustomer_data ['nama_kustomer'];
    $password_kustomer = $kustomer_data ['password_kustomer'];
    $alamat = $kustomer_data ['alamat'];
    $email = $kustomer_data ['email'];
    $telpon = $kustomer_data ['telpon'];
    $id_kota = $kustomer_data ['id_kota'];

    }
?>

<body>
    <div class="container">
        <div class="m-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <h1 class="text-center">Edit Data Kustomer</h1>
            <form id="form_tambah" action="proses_edit_kustomer.php?id_kustomer=<?php echo $id_kustomer ?>" method="post">
                <div class="form-group mb-3">
                    <div class="form-label">Nama Kustomer</div>
                    <input type="text" name="nama_kustomer" data-name="Nama Kustomer" class="required form-control" autocomplete="off" maxlength="50" value="<?php echo $nama_kustomer ?>">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Password Kustomer</div>
                    <input type="text" name="password_kustomer" data-name="Password Kustomer" class="required form-control" autocomplete="off" maxlength="12" value="<?php echo $password_kustomer ?>">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Alamat</div>
                    <textarea name="alamat" data-name="Alamat" class="required form-control" autocomplete="off" rows="5"><?php echo $alamat ?></textarea>
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Email</div>
                    <input type="text" name="email" data-name="Email" class="required form-control" autocomplete="off" maxlength="50" value="<?php echo $email ?>">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Telpon</div>
                    <input type="number" name="telpon" data-name="Telpon" class="required form-control" autocomplete="off" maxlength="13" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo $telpon ?>">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">ID Kota</div>
                    <select name="id_kota" class="required form-control">
                        <?php foreach ($kota as $kota) { ?>
                            <option value=" <?php echo $kota['id_kota'] ?> " 
                                <?php if ($kota['id_kota'] == $kustomer_data['id_kota']) echo "selected"; ?>>
                                <?php echo $kota['id_kota'] . ' - ' . $kota['nama_kota']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="d-flex justify-content-between mb-3">
                <a href="kustomer.php" class="btn btn-danger btn-sm"><i class="bi bi-chevron-left"></i>Kembali</a>
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