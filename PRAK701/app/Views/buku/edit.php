<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5eee6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff7ef;
            padding: 30px 20px;
            border-radius: 16px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 420px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            color: #6d4c41;
            margin-bottom: 24px;
        }

        .error {
            background-color: #ffe6e6;
            color: #b00020;
            padding: 10px 14px;
            margin-bottom: 20px;
            border-left: 4px solid #b00020;
            border-radius: 6px;
        }

        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 4px;
            font-weight: 600;
            color: #6d4c41;
            text-align: left;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px 0;
            border: none;
            border-bottom: 2px solid #e0d3c2;
            font-size: 1em;
            background-color: transparent;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-bottom: 2px solid #b89a83;
            outline: none;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        button {
            background-color: #a1866f;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }

        button:hover {
            background-color: #8b6f5c;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit Buku</h2>

    <form action="/buku/update/<?= $buku['id'] ?>" method="post">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" id="judul" value="<?= old('judul', $buku['judul']) ?>" required>
        </div>

        <div class="form-group">
            <label for="penulis">Penulis:</label>
            <input type="text" name="penulis" id="penulis" value="<?= old('penulis', $buku['penulis']) ?>" required>
        </div>

        <div class="form-group">
            <label for="penerbit">Penerbit:</label>
            <input type="text" name="penerbit" id="penerbit" value="<?= old('penerbit', $buku['penerbit']) ?>" required>
        </div>

        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit:</label>
            <input type="number" name="tahun_terbit" id="tahun_terbit" value="<?= old('tahun_terbit', $buku['tahun_terbit']) ?>" required>
        </div>

        <div class="button-group">
            <button type="submit">Update</button>
            <button type="button" onclick="window.location.href='/buku'">Kembali</button>
        </div>
    </form>
</div>

</body>
</html>