<?php
$jari_jari = 4.2; 
function hitung_volume_bola($jari_jari) {
    return (4/3) * pi() * pow($jari_jari, 3);
}
$volume = hitung_volume_bola($jari_jari);
echo "Volume = " . number_format($volume, 3) . " m³<br>";
?>