<!DOCTYPE html>
<html>
<head>
  <title>Cek Bilangan +7 Kelipatan 5</title>
</head>
<body>
  <h3>Contoh Output:</h3>

  <form method="post">
    <label for="bawah">Batas Bawah : </label>
    <input type="number" name="bawah" value="<?php echo isset($_POST['bawah']) ? $_POST['bawah'] : '1'; ?>"><br>
    <label for="atas">Batas Atas : </label>
    <input type="number" name="atas" value="<?php echo isset($_POST['atas']) ? $_POST['atas'] : '10'; ?>"><br>
    <button type="submit">Cetak</button>
  </form>

  <div style="margin-top:20px; font-size: 20px;">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bawah = intval($_POST['bawah']);
        $atas = intval($_POST['atas']);
        $bintang = "<img src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png' width='20' style='vertical-align: middle;'>";
        $i = $bawah;
        do {
            if ((($i + 7) % 5) == 0) {
                echo $bintang . " ";
            } else {
                echo $i . " ";
            }
            $i++;
        } while ($i <= $atas);
    }
    ?>
  </div>
</body>
</html>