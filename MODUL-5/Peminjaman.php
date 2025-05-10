<?php
require("Model.php");
require("Style.php");
$peminjaman = getData("peminjaman");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Peminjaman</title>
</head>

<body>
<div class="container1">
    <h1>Data Peminjaman</h1>
    <table>
        <tr>
            <th>ID Peminjaman</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($peminjaman as $row) : 
            $tgl_pinjam = date_create($row["tgl_pinjam"]);
            $tgl_kembali = date_create($row["tgl_kembali"]); ?>
            <tr>
                <td><?= htmlspecialchars($row["id_peminjaman"]) ?></td>
                <td><?= date_format($tgl_pinjam, 'd-m-Y') ?></td>
                <td><?= date_format($tgl_kembali, 'd-m-Y') ?></td>
                <td>
                    <a href="FormPeminjaman.php?id_peminjaman=<?= urlencode($row["id_peminjaman"]); ?>" class="waves-effect waves-light grey btn-small">Edit</a>
                    <a href="HapusDataPeminjaman.php?id_peminjaman=<?= urlencode($row["id_peminjaman"]); ?>" class="waves-effect waves-light red btn-small" onclick="return confirm('Apakah yakin data akan dihapus?')">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <div class="buttonadd">
        <a href="FormPeminjaman.php" class="waves-effect waves-light green btn-large">Tambah Data</a>
        <a href="Indeks.php" class="waves-effect waves-light green btn-large">Kembali</a>
    </div>
</div>
</body>
</html>