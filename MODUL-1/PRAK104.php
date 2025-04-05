<?php
$smartphones = [
    "Samsung Galaxy S22",
    "Samsung Galaxy S22+",
    "Samsung Galaxy A03",
    "Samsung Galaxy Xcover 5"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Smartphone Samsung</title>
    <style>
        table {
            border-collapse: separate;
            border-spacing: 1;
            border: 1px double black;
            font-family: 'Times New Roman', serif;
            font-size: 16px;
            margin: 2px;
        }

        th, td {
            border: 1px double black;
            padding: 1px 1px;
        }

        th {
            font-weight: bold;
            text-align: left;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php foreach ($smartphones as $phone): ?>
        <tr>
            <td><?= $phone; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>