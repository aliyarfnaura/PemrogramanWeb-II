<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Daftar Buku</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #f4ede3, #e9e0d6, #f4ede3);
            color: #5d4037;
            min-height: 100vh;
            text-align: center;
            position: relative;
        }

        h2 {
            font-weight: 600;
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #5d4037;
            animation: fadeIn 1s ease-out;
        }

        .burger-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1001;
        }

        .burger-btn {
            width: 30px;
            height: 24px;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .burger-btn div {
            height: 4px;
            background-color: #5d4037;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .burger-btn.open div:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        .burger-btn.open div:nth-child(2) {
            opacity: 0;
        }
        .burger-btn.open div:nth-child(3) {
            transform: rotate(-45deg) translate(6px, -6px);
        }

        .burger-menu {
            position: fixed;
            top: 60px;
            right: 20px;
            background-color: white;
            box-shadow: 0 6px 14px rgba(0,0,0,0.15);
            border-radius: 10px;
            display: none;
            flex-direction: column;
            min-width: 160px;
            z-index: 1000;
        }

        .burger-menu.show {
            display: flex;
        }

        .burger-menu a {
            padding: 14px 20px;
            text-decoration: none;
            color: #5d4037;
            font-weight: 600;
            font-size: 1em;
            cursor: pointer;
            user-select: none;
            transition: background-color 0.3s;
        }

        .burger-menu a:hover {
            background-color: #f0e6d2;
        }

        p.success {
            color: #5d4037;
            font-weight: 600;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f4ede3;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(93, 64, 55, 0.15);
            margin: 0 auto 50px auto;
            max-width: 1200px;
        }

        thead th {
            padding: 18px 18px;
            color: #5d4037;
            font-weight: 600;
            font-size: 1em;
            text-align: center;
            background-color: #d9cbb6;
            user-select: none;
        }

        tbody td {
            padding: 18px 18px;
            color: #5d4037;
            font-weight: 500;
            font-size: 1em;
            border-bottom: 1.5px solid #d7ccc8;
            text-align: center;
            vertical-align: middle;
        }

        tr:hover {
            background-color: #e9e0d6;
        }

        button.action-btn {
            padding: 8px 18px;
            border-radius: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s, border-color 0.3s;
            border: 2.5px solid;
            font-family: 'Poppins', sans-serif;
            margin-left: 6px;
            min-width: 75px;
        }

        button.edit-btn {
            background-color: #a1866f; 
            color: white;
            border-color: #7f6a56;
        }

        button.edit-btn:hover {
            background-color: #7f6a56;
            border-color: #5e4e3e;
            transform: scale(1.05);
        }

        button.delete-btn {
            background-color: #b55432; 
            color: white;
            border-color: #8e3e1f;
        }

        button.delete-btn:hover {
            background-color: #8e3e1f;
            border-color: #5f2b12;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px);}
            to { opacity: 1; transform: translateY(0);}
        }

        @media (max-width: 600px) {
            table, th, td {
                font-size: 0.9em;
            }
            button.action-btn {
                padding: 10px 14px;
                font-size: 0.9em;
                margin-left: 4px;
                min-width: 60px;
            }
            .burger-menu {
                right: 10px;
                min-width: 140px;
            }
            .burger-btn {
                width: 26px;
                height: 20px;
            }
            .burger-btn div {
                height: 3px;
            }
        }
    </style>
</head>
<body>
    <h2>Daftar Buku</h2>
    <div class="burger-container">
        <div id="burgerBtn" class="burger-btn" aria-label="Menu" tabindex="0">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div id="burgerMenu" class="burger-menu" role="menu" aria-hidden="true">
            <a href="/buku/create" role="menuitem">Tambah Buku Baru</a>
            <a href="/logout" role="menuitem">Logout</a>
        </div>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <p class="success"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($buku as $b): ?>
            <tr>
                <td><?= esc($b['judul']) ?></td>
                <td><?= esc($b['penulis']) ?></td>
                <td><?= esc($b['penerbit']) ?></td>
                <td><?= esc($b['tahun_terbit']) ?></td>
                <td>
                    <form action="/buku/edit/<?= $b['id'] ?>" method="get" style="display:inline;">
                        <button type="submit" class="action-btn edit-btn">Edit</button>
                    </form>
                    <form action="/buku/delete/<?= $b['id'] ?>" method="post" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                        <?= csrf_field() ?>
                        <button type="submit" class="action-btn delete-btn">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        const burgerBtn = document.getElementById('burgerBtn');
        const burgerMenu = document.getElementById('burgerMenu');

        burgerBtn.addEventListener('click', () => {
            const isOpen = burgerMenu.classList.toggle('show');
            burgerBtn.classList.toggle('open', isOpen);
            burgerMenu.setAttribute('aria-hidden', !isOpen);
        });

        document.addEventListener('click', (e) => {
            if (!burgerBtn.contains(e.target) && !burgerMenu.contains(e.target)) {
                burgerMenu.classList.remove('show');
                burgerBtn.classList.remove('open');
                burgerMenu.setAttribute('aria-hidden', 'true');
            }
        });
    </script>
</body>
</html>
