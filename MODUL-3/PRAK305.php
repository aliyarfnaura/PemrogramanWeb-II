<!DOCTYPE html>
<html>
<head>
    <title>Ulang Karakter</title>
    <style>
        .result {
            font-size: 16px;
        }
        input[type="text"] {
            font-size: 14px;
            width: 200px;
        }
        input[type="submit"] {
            font-size: 14px;
        }
        .label {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<form method="post">
    <input type="text" name="input" value="<?php echo isset($_POST['input']) ? $_POST['input'] : ''; ?>">
    <input type="submit" value="submit">
</form>

<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $panjang = strlen($input);

    echo "<p class='label'>Input:</p>";
    echo "<div class='result'>" . htmlspecialchars($input) . "</div>";

    echo "<p class='label'>Output:</p><div class='result'>";

    $i = 0;
    while ($i < $panjang) {
        $char = $input[$i];
        $output = strtoupper($char); 
        $j = 1;

        while ($j < $panjang) {
            $output .= strtolower($char);
            $j++;
        }

        echo $output;
        $i++;
    }

    echo "</div>";
}
?>

</body>
</html>