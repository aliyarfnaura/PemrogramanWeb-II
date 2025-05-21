<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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

        h2 {
            font-size: 2.5em;
            color: #5d4037;
            margin-bottom: 30px;
            font-weight: 600;
            animation: fadeIn 1s ease-out;
        }

        form {
            background-color: rgba(255, 248, 240, 0.95);
            padding: 30px 40px;
            border-radius: 16px;
            box-shadow: 0 8px 16px rgba(93, 64, 55, 0.1);
            width: 320px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            text-align: left;
        }

        label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #6d4c41;
        }

        input[type="text"],
        input[type="password"],
        button {
            box-sizing: border-box;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 2px solid #d7ccc8;
            border-radius: 12px;
            font-size: 1em;
            transition: border-color 0.3s;
            background-color: #f9f5f0;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #a1887f;
            outline: none;
        }

        button {
            padding: 12px;
            background-color: #a1866f;
            border: none;
            border-radius: 14px;
            color: white;
            font-weight: 600;
            font-size: 1.1em;
            cursor: pointer;
            box-shadow: 0 6px 12px rgba(93, 64, 55, 0.15);
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #7f6a56;
            transform: scale(1.05);
        }

        p.error {
            color: #d00000;
            font-weight: 600;
            margin-bottom: 20px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <h2>Login</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <p class="error"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form action="/login" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>