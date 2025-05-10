<?php
date_default_timezone_set('Asia/Makassar');  

require("Model.php");
require("Style.php");

$id_member = !empty($_GET['id_member']) ? $_GET['id_member'] : '';

$alert = ''; // Initialize the alert variable

if (isset($_POST["submit"])) {
    $id_member_input = $_POST['id_member'];
    $nama_member = $_POST['nama_member'];
    $nomor_member = $_POST['nomor_member'];
    $alamat = $_POST['alamat'];
    $tgl_mendaftar = date('Y-m-d H:i:s');  
    $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

    $existingMember = getData("member WHERE id_member = '$id_member_input'");
    if (count($existingMember) > 0) {
        $alert = "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'ID Member sudah digunakan. Silakan pilih ID lain.',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'FormMember.php';
            });
        });
        </script>
        ";
    } else {
        $data = [
            'id_member' => $id_member_input,
            'nama_member' => $nama_member,
            'nomor_member' => $nomor_member,
            'alamat' => $alamat,
            'tgl_mendaftar' => $tgl_mendaftar,
            'tgl_terakhir_bayar' => $tgl_terakhir_bayar
        ];
        if (insertDataMember($data) > 0) {
            $alert = "
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Data berhasil ditambahkan',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = 'Member.php';
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
                    window.location.href = 'Member.php';
                });
            });
            </script>
            ";
        }
    }
}

if (isset($_POST["ubah"])) {
    $id_member_input = $_POST['id_member'];
    $nama_member = $_POST['nama_member'];
    $nomor_member = $_POST['nomor_member'];
    $alamat = $_POST['alamat'];
    $tgl_mendaftar = $_POST['tgl_mendaftar'];
    $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

    $data = [
        'id_member' => $id_member_input,
        'nama_member' => $nama_member,
        'nomor_member' => $nomor_member,
        'alamat' => $alamat,
        'tgl_mendaftar' => $tgl_mendaftar,
        'tgl_terakhir_bayar' => $tgl_terakhir_bayar
    ];
    if (updateDataMember($data) > 0) {
        $alert = "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data berhasil diubah',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'Member.php';
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
                window.location.href = 'Member.php';
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
    <title>Form Member</title>

    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?= $alert; ?> <!-- Display the alert here -->

<?php if (empty($id_member)) : ?>
    <section class="container1 blue-text">
        <h4 class="center">Form Member</h4>
        <form action="" method="post">
            <label class="black-text" for="id_member">ID Member : </label>
            <input type="text" name="id_member" id="id_member" required>

            <label class="black-text" for="nama_member">Nama Member : </label>
            <input type="text" name="nama_member" id="nama_member" required>

            <label class="black-text" for="nomor_member">Nomor Member : </label>
            <input type="text" name="nomor_member" id="nomor_member" required>

            <label class="black-text" for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" required>

            <label class="black-text" for="tgl_mendaftar">Tanggal Mendaftar : </label>
            <input type="text" name="tgl_mendaftar" id="tgl_mendaftar" value="<?= date('Y-m-d H:i') ?>" readonly>

            <label class="black-text" for="tgl_terakhir_bayar">Tanggal Terakhir Bayar : </label>
            <input type="date" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar" required>

            <div class="center">
                <button class="waves-effect waves-light green btn-small" type="submit" name="submit">Kirim</button>
                <a href="Member.php" class="waves-effect waves-light green btn-small">Kembali</a>
            </div>
        </form>
    </section>
<?php endif; ?>

<?php if (!empty($id_member)) : ?>
    <?php $member = getData("member WHERE id_member = '$id_member'")[0]; ?>    
    <section class="container blue-text">
        <h4 class="center">Form Member</h4>
        <form action="" method="post">
            <input type="hidden" name="id_member" value="<?= $member["id_member"]?>">

            <label class="black-text" for="nama_member">Nama Member : </label>
            <input type="text" name="nama_member" id="nama_member" required value="<?= $member["nama_member"]?>">

            <label class="black-text" for="nomor_member">Nomor Member : </label>
            <input type="text" name="nomor_member" id="nomor_member" required value="<?= $member["nomor_member"]?>">

            <label class="black-text" for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" required value="<?= $member["alamat"]?>">

            <label class="black-text" for="tgl_mendaftar">Tanggal Mendaftar : </label>
            <input type="text" name="tgl_mendaftar" id="tgl_mendaftar" value="<?= date('Y-m-d H:i', strtotime($member["tgl_mendaftar"])) ?>" readonly>

            <label class="black-text" for="tgl_terakhir_bayar">Tanggal Terakhir Bayar : </label>
            <input type="date" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar" required value="<?= $member["tgl_terakhir_bayar"]?>">

            <div class="center">
                <button class="waves-effect waves-light green btn-small" type="submit" name="ubah">Ubah</button>
                <a href="Member.php" class="waves-effect waves-light green btn-small">Kembali</a>
            </div>
        </form>
    </section>
<?php endif; ?>

</body>
</html>