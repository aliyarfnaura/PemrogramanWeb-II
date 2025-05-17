<?php
require("Model.php");
require("Style.php");
$member = getData("member");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Member</title>
</head>

<body>
    <div class="container1">
        <h1>Data Member</h1>
        <table>
            <tr>
                <th>ID Member</th>
                <th>Nama Member</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>

            <?php foreach ($member as $row) :
                $tgl_mendaftar = date_create($row["tgl_mendaftar"]);
                $tgl_terakhir_bayar = date_create($row["tgl_terakhir_bayar"]); ?>
                <tr>
                    <td><?= htmlspecialchars($row["id_member"]) ?></td>
                    <td><?= htmlspecialchars($row["nama_member"]) ?></td>
                    <td><?= htmlspecialchars($row["nomor_member"]) ?></td>
                    <td><?= htmlspecialchars($row["alamat"]) ?></td>
                    <td><?= date_format($tgl_mendaftar, 'd-m-Y H:i:s') ?></td>
                    <td><?= date_format($tgl_terakhir_bayar, 'd-m-Y') ?></td>
                    <td>
                        <a href="FormMember.php?id_member=<?= urlencode($row["id_member"]); ?>" class="waves-effect waves-light grey btn-small">Edit</a>
                        <a href="HapusDataMember.php?id_member=<?= urlencode($row["id_member"]); ?>" class="waves-effect waves-light red btn-small" onclick="return confirm('Apakah yakin data akan dihapus?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>

        <div class="buttonadd">
            <a href="FormMember.php" class="waves-effect waves-light green btn-large">Tambah Data</a>
            <a href="Indeks.php" class="waves-effect waves-light green btn-large">Kembali</a>
        </div>
    </div>
</body>

</html>
