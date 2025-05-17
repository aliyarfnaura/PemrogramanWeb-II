<?php
require("Model.php");
require("Style.php");
$buku = getData("buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku</title>
    <link rel="stylesheet" href="Style.css"> 
</head>

<body>
    <div class="container1">
        <h1 class="header-title">Data Buku</h1> 
        <table class="book-table">
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($buku as $row) : ?>
                <tr class="book-row">
                    <td><?= $i; ?></td>
                    <td><?= $row["judul_buku"] ?></td>
                    <td><?= $row["penulis"] ?></td>
                    <td><?= $row["penerbit"] ?></td>
                    <td><?= $row["tahun_terbit"] ?></td>
                    <td>
                    <a href="FormBuku.php?id_buku=<?= $row["id_buku"]; ?>" class="waves-effect waves-light grey btn-small"></i>Edit</a>
                    <a href="HapusDataBuku.php?id_buku=<?= $row["id_buku"]; ?>" class="waves-effect waves-light red btn-small" onclick="return confirm('Apakah yakin data akan dihapus?')"></i>Delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </table>
<div class="buttonadd">
        <a href="FormBuku.php" class="waves-effect waves-light green btn-large"></i>Tambah Data</a>
        <a href="indeks.php" class="waves-effect waves-light green btn-large"></i>Kembali</a>
    </div>
</body>
</html>