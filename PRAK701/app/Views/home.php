<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #f4ede3, #e9e0d6, #f4ede3);
            color: #5d4037;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            font-size: 2.8em;
            color: #5d4037;
            margin-bottom: 10px;
            animation: fadeIn 1s ease-out;
            font-weight: 600;
            user-select: none;
        }

        #typewriter {
            font-size: 1.2em;
            color: #6d4c41;
            font-weight: 500;
            height: 1.5em;
            margin-bottom: 30px;
        }

        .button-group {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        a {
            display: inline-block;
            padding: 14px 28px;
            text-decoration: none;
            color: white;
            background-color: #a1866f;
            border-radius: 14px;
            font-weight: 600;
            font-size: 1em;
            box-shadow: 0 6px 12px rgba(93, 64, 55, 0.15);
            transition: background-color 0.3s, transform 0.2s;
            user-select: none;
        }

        a:hover {
            background-color: #7f6a56;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <h1>Welcome!</h1>
    <div id="typewriter"></div>
    <div class="button-group">
        <a href="/buku">Lihat Daftar Buku</a>
        <a href="/logout">Logout</a>
    </div>

    <script>
        const messages = [
            "Senang melihatmu kembali!",
            "Jelajahi koleksi buku yang menarik",
            "Sudah berapa buku yang kamu baca hari ini?",
            "Terima kasih sudah hadir. Semoga harimu menyenangkan"
        ];
        let i = 0, j = 0, currentMessage = '', isDeleting = false;

        function type() {
            const typewriter = document.getElementById('typewriter');
            if (!isDeleting && j < messages[i].length) {
                currentMessage += messages[i].charAt(j++);
                typewriter.textContent = currentMessage;
                setTimeout(type, 50);
            } else if (isDeleting && j > 0) {
                currentMessage = currentMessage.slice(0, --j);
                typewriter.textContent = currentMessage;
                setTimeout(type, 30);
            } else {
                isDeleting = !isDeleting;
                if (!isDeleting) {
                    i = (i + 1) % messages.length;
                }
                setTimeout(type, 1000);
            }
        }

        window.onload = type;
    </script>
</body>
</html>