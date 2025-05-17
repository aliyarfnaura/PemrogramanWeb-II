<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>

<form method="POST">
    Nilai : <input type="text" name="nilai"><br><br>

    Dari : <br>
    <input type="radio" name="dari" checked name="dari" value="C"> Celcius <br>
    <input type="radio" name="dari" value="F"> Fahrenheit <br>
    <input type="radio" name="dari" value="Re"> Rheamur <br>
    <input type="radio" name="dari" value="K"> Kelvin <br><br>

    Ke : <br>
    <input type="radio" name="ke" checked name="ke" value="C"> Celcius <br>
    <input type="radio" name="ke" value="F"> Fahrenheit <br>
    <input type="radio" name="ke" value="Re"> Rheamur <br>
    <input type="radio" name="ke" value="K"> Kelvin <br><br>

    <input type="submit" name="konversi" value="Konversi">
</form>

<?php
if (isset($_POST['konversi'])) {
    $nilai = $_POST['nilai'];
    $dari = $_POST['dari'];
    $ke = $_POST['ke'];

    if ($dari == "C") {
        $celcius = $nilai;
    } elseif ($dari == "F") {
        $celcius = ($nilai - 32) * 5/9;
    } elseif ($dari == "Re") {
        $celcius = $nilai * 5/4;
    } elseif ($dari == "K") {
        $celcius = $nilai - 273.15;
    }

    if ($ke == "C") {
        $hasil = $celcius;
        $satuan = "°C";
    } elseif ($ke == "F") {
        $hasil = ($celcius * 9/5) + 32;
        $satuan = "°F";
    } elseif ($ke == "Re") {
        $hasil = $celcius * 4/5;
        $satuan = "°Re";
    } elseif ($ke == "K") {
        $hasil = $celcius + 273.15;
        $satuan = "K";
    }

    echo "<h3>Hasil Konversi: " . round($hasil, 1) . " $satuan</h3>";
}
?>

</body>
</html>