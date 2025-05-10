<?php
require("Model.php");
require("Style.php");

$id_buku = !empty($_GET['id_buku']) ? $_GET['id_buku'] : '';

$alert = ''; // Variabel untuk menyimpan skrip alert

if (isset($_POST["submit"])) {
    if (insertDataBuku($_POST) > 0) {
        $alert = "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data berhasil ditambahkan',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'Buku.php';
            });
        });
        </script>
        ";
    } else {
        $alert = "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Data gagal ditambahkan',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'Buku.php';
            });
        });
        </script>
        ";
    }
}

if (isset($_POST["ubah"])) {
    if (updateDataBuku($_POST) > 0) {
        $alert = "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data berhasil diubah',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'Buku.php';
            });
        });
        </script>
        ";
    } else {
        $alert = "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Data gagal diubah',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'Buku.php';
            });
        });
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?= $alert; ?>
    <?php if (empty($id_buku)) : ?>
        <section class="container1 green-text">
            <h4 class="center">Form Buku</h4>
            <form action="" method="post">
                <label class="black-text" for="judul_buku">Judul Buku : </label>
                <input type="text" name="judul_buku" id="judul_buku" required>
                <label class="black-text" for="penulis">Penulis : </label>
                <input type="text" name="penulis" id="penulis" required>
                <label class="black-text" for="penerbit">Penerbit : </label>
                <input type="text" name="penerbit" id="penerbit" required>
                <label class="black-text" for="tahun_terbit">Tahun Terbit : </label>
                <input type="number" name="tahun_terbit" id="tahun_terbit" required>
                <div class="center">
                    <button class="waves-effect waves-light green btn-small" type="submit" name="submit">Kirim</button>
                    <a href="Buku.php" class="waves-effect waves-light green btn-small">Kembali</a>
                </div>
            </form>
        </section>
    <?php else : ?>
        <?php $buku = getData("buku WHERE id_buku = $id_buku")[0]; ?>
        <section class="container green-text">
            <h4 class="center">Form Buku</h4>
            <form action="" method="post">
                <input type="hidden" name="id_buku" value="<?= $buku["id_buku"] ?>">
                <label class="black-text" for="judul_buku">Judul Buku : </label>
                <input type="text" name="judul_buku" id="judul_buku" required value="<?= $buku["judul_buku"] ?>">
                <label class="black-text" for="penulis">Penulis : </label>
                <input type="text" name="penulis" id="penulis" required value="<?= $buku["penulis"] ?>">
                <label class="black-text" for="penerbit">Penerbit : </label>
                <input type="text" name="penerbit" id="penerbit" required value="<?= $buku["penerbit"] ?>">
                <label class="black-text" for="tahun_terbit">Tahun Terbit : </label>
                <input type="number" name="tahun_terbit" id="tahun_terbit" required value="<?= $buku["tahun_terbit"] ?>">
                <div class="center">
                    <button class="waves-effect waves-light green btn-small" type="submit" name="ubah">Ubah</button>
                    <a href="Buku.php" class="waves-effect waves-light green btn-small">Kembali</a>
                </div>
            </form>
        </section>
    <?php endif; ?>
</body>
</html>
