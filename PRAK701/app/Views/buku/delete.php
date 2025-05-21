<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Hapus Buku</title>
</head>
<body>
    <h1>Konfirmasi Hapus Buku</h1>

    <p>Apakah Anda yakin ingin menghapus buku berikut?</p>

    <ul>
        <li><strong>Judul:</strong> <?= esc($buku['judul']) ?></li>
        <li><strong>Penulis:</strong> <?= esc($buku['penulis']) ?></li>
        <li><strong>Penerbit:</strong> <?= esc($buku['penerbit']) ?></li>
        <li><strong>Tahun Terbit:</strong> <?= esc($buku['tahun_terbit']) ?></li>
    </ul>

    <form action="<?= site_url('buku/delete/' . $buku['id']) ?>" method="post">
        <?= csrf_field() ?>
        <button type="submit">Ya, Hapus</button>
        <a href="<?= site_url('buku') ?>">Batal</a>
    </form>
</body>
</html>
