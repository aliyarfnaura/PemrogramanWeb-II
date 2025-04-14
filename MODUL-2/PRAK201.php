<!DOCTYPE html>
<html>
<head>
    <title>Urutkan Nama</title>
</head>
<body>

<form method="POST">
    Nama: 1 <input type="text" name="nama1"><br>
    Nama: 2 <input type="text" name="nama2"><br>
    Nama: 3 <input type="text" name="nama3"><br><br>
    <input type="submit" name="submit" value="Urutkan">
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['nama1'];
    $b = $_POST['nama2'];
    $c = $_POST['nama3'];

    // Kondisi pengurutan manual (tanpa sort())
    if ($a <= $b && $a <= $c) {
        $pertama = $a;
        if ($b <= $c) {
            $kedua = $b;
            $ketiga = $c;
        } else {
            $kedua = $c;
            $ketiga = $b;
        }
    } elseif ($b <= $a && $b <= $c) {
        $pertama = $b;
        if ($a <= $c) {
            $kedua = $a;
            $ketiga = $c;
        } else {
            $kedua = $c;
            $ketiga = $a;
        }
    } else {
        $pertama = $c;
        if ($a <= $b) {
            $kedua = $a;
            $ketiga = $b;
        } else {
            $kedua = $b;
            $ketiga = $a;
        }
    }

    echo "<tr><th>    </th></tr><br>";
    echo "<tr><td>$pertama</td></tr><br>";
    echo "<tr><td>$kedua</td></tr><br>";
    echo "<tr><td>$ketiga</td></tr><br>";
}
?>

</body>
</html>