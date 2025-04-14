<!DOCTYPE html>
<html>
<head>
    <title>Form Input dan Output</title>
    <style>
        .required {
            color: red;
        }
        .error {
            color: red;
        }
        .output {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<form method="POST" action="">
    Nama: <input type="text" name="nama">
    <span class="required">*</span>
    <span class="error">
        <?php if (isset($_POST['submit']) && empty($_POST['nama'])) echo "nama tidak boleh kosong"; ?>
    </span><br>

    Nim: <input type="text" name="nim">
    <span class="required">*</span>
    <span class="error">
        <?php if (isset($_POST['submit']) && empty($_POST['nim'])) echo "nim tidak boleh kosong"; ?>
    </span><br>

    Jenis Kelamin: <span class="required">*</span>
    <span class="error">
        <?php if (isset($_POST['submit']) && empty($_POST['jk'])) echo "jenis kelamin tidak boleh kosong"; ?>
    </span><br>
    <input type="radio" name="jk" value="Laki-laki"> Laki-Laki<br>
    <input type="radio" name="jk" value="Perempuan"> Perempuan<br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk  = isset($_POST['jk']) ? $_POST['jk'] : "";

    if (!empty($nama) && !empty($nim) && !empty($jk)) {
        echo "<div class='output'>";
        echo "<h3>Output:</h3>";
        echo "$nama<br>";
        echo "$nim<br>";
        echo "$jk<br>";
        echo "</div>";
    }
}
?>

</body>
</html>
