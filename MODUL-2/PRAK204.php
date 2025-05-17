<!DOCTYPE html>
<html>
<head>
    <title>Baca Ejaan Bilangan</title>
</head>
<body>

<form method="POST">
    Nilai : <input type="text" name="angka"><br><br>
    <input type="submit" name="submit" value="Konversi">
</form>

<?php
if (isset($_POST['submit'])) {
    $angka = $_POST['angka'];

    echo "<h2>Hasil: ";

    if (!is_numeric($angka) || $angka < 0) {
        echo "Input tidak valid";
    } else if ($angka == 0) {
        echo "Nol";
    } else if ($angka >= 1000) {
        echo "Anda Menginput Melebihi Limit Bilangan";
    } else if ($angka >= 100) {
        echo "Ratusan";
    } else if ($angka >= 20) {
        echo "Puluhan";
    } else if ($angka >= 11 && $angka <= 19) {
        echo "Belasan";
    } else if ($angka == 10) {
        echo "Puluhan";
    } else {
        echo "Satuan";
    }

    echo "</h2>";
}
?>

</body>
</html>