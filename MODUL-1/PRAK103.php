<?php
$celcius = 37.841;
function konversi_suhu($celcius) {
    $reamur = (4/5) * $celcius; 
    $fahrenheit = ($celcius * 9/5) + 32;
    $kelvin = $celcius + 273.15; 
    echo "Fahrenheit (F) = " . number_format($fahrenheit, 4) . "<br>";
    echo "Reamur (R) = " . number_format($reamur, 4) . "<br>";
    echo "Kelvin (K) = " . number_format($kelvin, 4) . "<br>";
}
konversi_suhu($celcius);
?>