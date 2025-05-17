<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peserta</title>
    <style>
        .merah {
            color: red;
            font-size: 24px;
            font-weight: bold;
        }
        .hijau {
            color: green;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form method="POST">
        <label>Jumlah Peserta : </label>
        <input type="number" name="jumlah" />
        <button type="submit">Cetak</button>
    </form>

    <div id="output">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $jumlah = (int)$_POST['jumlah'];
                if ($jumlah > 0) {
                    for ($i = 1; $i <= $jumlah; $i++) {
                        echo "<p class='" . ($i % 2 === 0 ? "hijau" : "merah") . "'>Peserta ke-" . $i . "</p>";
                    }
                }
            }
        ?>
    </div>
</body>
</html>