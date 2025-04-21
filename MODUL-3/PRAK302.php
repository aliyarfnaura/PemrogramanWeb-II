<!DOCTYPE html>
<html>
<head>
  <title>Segitiga Terbalik Rata Kanan</title>
</head>
<body>
  <h3>Contoh Output:</h3>

  <form method="post">
    <label for="tinggi">Tinggi: </label>
    <input type="number" name="tinggi" value="<?php echo isset($_POST['tinggi']) ? $_POST['tinggi'] : '5'; ?>"><br><br>
    <label for="gambar">Alamat Gambar: </label>
    <input type="text" name="gambar" size="50" value="<?php echo isset($_POST['gambar']) ? $_POST['gambar'] : 'https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png'; ?>"><br><br>
    <button type="submit">Cetak</button>
  </form>

  <div style="font-family: monospace; margin-top: 20px;">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tinggi = intval($_POST['tinggi']);
        $gambar = $_POST['gambar'];

        $i = $tinggi;
        while ($i >= 1) {
            $spasi = $tinggi - $i;
            $s = 0;
            while ($s < $spasi) {
                echo "<span style='display:inline-block; width:30px;'></span>";
                $s++;
            }

            $j = 0;
            while ($j < $i) {
                echo "<img src='" . htmlspecialchars($gambar) . "' width='30'>";
                $j++;
            }

            echo "<br>";
            $i--;
        }
    }
    ?>
  </div>
</body>
</html>