<!DOCTYPE html>
<html>
<head>
    <title>Cetak Matriks</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            width: 90px;
            height: 30px;
        }
        form p {
            margin: 1px 0;
        }
    </style>
</head>
<body>

<?php
$panjang = "";
$lebar = "";
$nilai_input = "";
$nilai = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = isset($_POST['panjang']) ? $_POST['panjang'] : "";
    $lebar = isset($_POST['lebar']) ? $_POST['lebar'] : "";
    $nilai_input = isset($_POST['nilai']) ? $_POST['nilai'] : "";

    $nilai = explode(' ', trim($nilai_input));
}
?>

<form method="post">
    <p>Panjang : <input type="text" name="panjang" value="<?php echo htmlspecialchars($panjang); ?>"></p>
    <p>Lebar : <input type="text" name="lebar" value="<?php echo htmlspecialchars($lebar); ?>"></p>
    <p>Nilai : <input type="text" name="nilai" value="<?php echo htmlspecialchars($nilai_input); ?>"></p>
    <button type="submit">Cetak</button>
    <br><br>
</form>

<?php
if (!empty($panjang) && !empty($lebar) && !empty($nilai)) {
    $panjang = intval($panjang);
    $lebar = intval($lebar);

    $index = 0;

    echo "<table>";
    for ($i = 0; $i < $lebar; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $panjang; $j++) {
            echo "<td>";
            if ($index < count($nilai)) {
                echo htmlspecialchars($nilai[$index]);
                $index++;
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
