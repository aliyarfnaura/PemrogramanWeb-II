<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: left; 
        }
        table {
            width: 40%;
            margin: 20px auto;
        }
        th {
            background-color: #d3d3d3; 
            color: black;
        }
    </style>
</head>
<body>

<?php
$mahasiswa = [
    [
        "nama" => "Andi",
        "nim" => "2101001",
        "uts" => 87,
        "uas" => 65
    ],
    [
        "nama" => "Budi",
        "nim" => "2101002",
        "uts" => 76,
        "uas" => 79
    ],
    [
        "nama" => "Tono",
        "nim" => "2101003",
        "uts" => 50,
        "uas" => 41
    ],
    [
        "nama" => "Jessica",
        "nim" => "2101004",
        "uts" => 60,
        "uas" => 75
    ]
];

function hitungNilaiAkhir($uts, $uas) {
    return (0.4 * $uts) + (0.6 * $uas);
}

function tentukanNilaiHuruf($nilaiAkhir) {
    if ($nilaiAkhir >= 80) {
        return "A";
    } elseif ($nilaiAkhir >= 70) {
        return "B";
    } elseif ($nilaiAkhir >= 60) {
        return "C";
    } elseif ($nilaiAkhir >= 50) {
        return "D";
    } else {
        return "E";
    }
}

echo "<table>";
echo "<tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
      </tr>";

foreach ($mahasiswa as $data) {
    $nilaiAkhir = hitungNilaiAkhir($data['uts'], $data['uas']);
    $nilaiHuruf = tentukanNilaiHuruf($nilaiAkhir);

    echo "<tr>";
    echo "<td>{$data['nama']}</td>";
    echo "<td>{$data['nim']}</td>";
    echo "<td>{$data['uts']}</td>";
    echo "<td>{$data['uas']}</td>";
    echo "<td>" . round($nilaiAkhir, 1) . "</td>"; 
    echo "<td>{$nilaiHuruf}</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>