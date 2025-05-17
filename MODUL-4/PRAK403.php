<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 40%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left; 
        }
        th {
            background-color: #d3d3d3;
        }
        .revisi {
            background-color: red;
            color: black;
        }
        .tidak-revisi {
            background-color: green;
            color: black;
        }
    </style>
</head>
<body>

<?php
$mahasiswa = [
    [
        "nama" => "Ridho",
        "mata_kuliah" => [
            ["nama_mk" => "Pemrograman I", "sks" => 2],
            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3],
        ]
    ],
    [
        "nama" => "Ratna",
        "mata_kuliah" => [
            ["nama_mk" => "Basis Data I", "sks" => 2],
            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3],
        ]
    ],
    [
        "nama" => "Tono",
        "mata_kuliah" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3],
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3],
        ]
    ]
];

foreach ($mahasiswa as $key => $data) {
    $total_sks = 0;
    foreach ($data['mata_kuliah'] as $mk) {
        $total_sks += $mk['sks'];
    }
    $mahasiswa[$key]['total_sks'] = $total_sks;
    $mahasiswa[$key]['keterangan'] = ($total_sks < 7) ? "Revisi KRS" : "Tidak Revisi";
}
?>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>

    <?php
    $no = 1;
    foreach ($mahasiswa as $data) {
        $total_sks = $data['total_sks'];
        $keterangan = $data['keterangan'];
        $class = ($keterangan == "Tidak Revisi") ? "tidak-revisi" : "revisi";
        $first = true;

        foreach ($data['mata_kuliah'] as $mk) {
            echo "<tr>";
            if ($first) {
                echo "<td>{$no}</td>";
                echo "<td>{$data['nama']}</td>";
            } else {
                echo "<td></td>";
                echo "<td></td>";
            }

            echo "<td>{$mk['nama_mk']}</td>";
            echo "<td>{$mk['sks']}</td>";

            if ($first) {
                echo "<td>{$total_sks}</td>";
                echo "<td class='$class'>{$keterangan}</td>";
                $first = false;
            } else {
                echo "<td></td>";
                echo "<td></td>";
            }
            echo "</tr>";
        }
        $no++;
    }
    ?>

</table>

</body>
</html>