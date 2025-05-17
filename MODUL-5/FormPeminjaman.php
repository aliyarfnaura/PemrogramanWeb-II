<?php
date_default_timezone_set('Asia/Makassar');  

require("Model.php");
require("Style.php");

$id_peminjaman = !empty($_GET['id_peminjaman']) ? $_GET['id_peminjaman'] : '';

if (isset($_POST["submit"])) {
    $id_peminjaman = $_POST['id_peminjaman'];  
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    if (insertDataPeminjaman($_POST) > 0) {
        echo "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data berhasil ditambahkan',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'Peminjaman.php';
            });
        });
        </script>
        ";
    } else {
        echo "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Data gagal ditambahkan',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'Peminjaman.php';
            });
        });
        </script>
        ";
    }
}

if (isset($_POST["ubah"])) {
    $id_peminjaman = $_POST['id_peminjaman'];  
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    if (updateDataPeminjaman($_POST) > 0) {
        echo "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data berhasil diubah',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'Peminjaman.php';
            });
        });
        </script>
        ";
    } else {
        echo "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Data gagal diubah',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'Peminjaman.php';
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
  <title>Form Peminjaman</title>
  <link rel="stylesheet" href="Style.css"> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

  <?php if (empty($id_peminjaman)) : ?>
    <section class="container1">
      <h4>Form Peminjaman</h4>
      <form action="" method="post">
        <label for="id_peminjaman">ID Peminjaman:</label>
        <input type="text" name="id_peminjaman" id="id_peminjaman" required>

        <label for="tgl_pinjam">Tanggal Pinjam:</label>
        <input type="date" name="tgl_pinjam" id="tgl_pinjam" required>

        <label for="tgl_kembali">Tanggal Kembali:</label>
        <input type="date" name="tgl_kembali" id="tgl_kembali" required>

        <div class="center">
          <button class="waves-effect waves-light green btn-small" type="submit" name="submit">Kirim</button>
          <a href="Peminjaman.php" class="waves-effect waves-light green btn-small">Kembali</a>
        </div>
      </form>
    </section>
  <?php endif; ?>

  <?php if (!empty($id_peminjaman)) : ?>
    <?php $peminjaman = getData("peminjaman WHERE id_peminjaman = $id_peminjaman")[0]; ?>
    <section class="container">
      <h4>Form Peminjaman</h4>
      <form action="" method="post">
        <input type="hidden" name="id_peminjaman" value="<?= $peminjaman["id_peminjaman"] ?>">

        <label for="id_peminjaman">ID Peminjaman:</label>
        <input type="text" name="id_peminjaman" id="id_peminjaman" required value="<?= $peminjaman["id_peminjaman"] ?>">

        <label for="tgl_pinjam">Tanggal Pinjam:</label>
        <input type="date" name="tgl_pinjam" id="tgl_pinjam" required value="<?= $peminjaman["tgl_pinjam"] ?>">

        <label for="tgl_kembali">Tanggal Kembali:</label>
        <input type="date" name="tgl_kembali" id="tgl_kembali" required value="<?= $peminjaman["tgl_kembali"] ?>">

        <div class="center">
          <button class="waves-effect waves-light green btn-small" type="submit" name="ubah">Ubah</button>
          <a href="Peminjaman.php" class="waves-effect waves-light green btn-small">Kembali</a>
        </div>
      </form>
    </section>
  <?php endif; ?>

</body>
</html>