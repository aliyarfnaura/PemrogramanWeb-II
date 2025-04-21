<!DOCTYPE html>
<html>
<head>
  <title>Bintang Dinamis</title>
</head>
<body>
  <form method="post">
    <label>Jumlah bintang</label>
    <input type="number" name="jumlah" value="<?php echo isset($_POST['jumlah']) ? $_POST['jumlah'] : ''; ?>">
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <?php
    if (isset($_POST['jumlah'])) {
        $jumlah = intval($_POST['jumlah']);
        echo "<input type='hidden' name='jumlah_bintang' value='$jumlah'>";
    }
    ?>
  </form>

  <?php
  if (isset($_POST['submit']) || isset($_POST['tambah']) || isset($_POST['kurang'])) {
      $jumlah_bintang = isset($_POST['jumlah_bintang']) ? intval($_POST['jumlah_bintang']) : intval($_POST['jumlah']);

      if (isset($_POST['tambah'])) {
          $jumlah_bintang++;
      } elseif (isset($_POST['kurang']) && $jumlah_bintang > 0) {
          $jumlah_bintang--;
      }

      echo "<p>Jumlah bintang $jumlah_bintang</p>";

      $i = 0;
      $gambarBintang = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png"; // Ganti dengan file lokal jika diinginkan
      while ($i < $jumlah_bintang) {
          echo "<img src='$gambarBintang' width='50' style='vertical-align:middle;'>";
          $i++;
      }

      echo "
      <form method='post'>
        <input type='hidden' name='jumlah_bintang' value='$jumlah_bintang'>
        <br><br>
        <input type='submit' name='tambah' value='Tambah'>
        <input type='submit' name='kurang' value='Kurang'>
      </form>";
  }
  ?>
</body>
</html>