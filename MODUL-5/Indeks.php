<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5; 
            font-family: 'Inter', sans-serif;
        }

        .dashboard h2 {
            margin-bottom: 30px;
            color: #2e7d32; 
        }

        .button-container {
            display: flex;
            flex-direction: column;
            gap: 15px; 
            align-items: center;
        }

        .button-container a {
            width: 200px; 
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h2>Naura's Library System</h2>
    </div>
    <div class="button-container">
        <a href="Member.php" class="waves-effect waves-light btn-small green">Data Member</a>
        <a href="Peminjaman.php" class="waves-effect waves-light btn-small green">Data Peminjaman</a>
        <a href="Buku.php" class="waves-effect waves-light btn-small green">Data Buku</a>
    </div>
</body>
</html>