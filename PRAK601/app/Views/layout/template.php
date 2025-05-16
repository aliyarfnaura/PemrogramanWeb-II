<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ffdde1, #ee9ca7); 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: background 1s ease;
        }
        .navbar {
            background-color: #fceabb; 
            transition: background 0.3s ease;
        }
        .navbar-brand, .nav-link {
            color: #34495e !important;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #e67e22 !important;
        }
        .container {
            background: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            transition: box-shadow 0.3s ease;
        }
        .container:hover {
            box-shadow: 0 12px 28px rgba(0,0,0,0.2);
        }
        @keyframes slideInFade {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .page-transition {
            animation: slideInFade 0.6s ease-out;
        }
        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: scale(0.97);
            }
        }

        .fade-out {
            animation: fadeOut 0.4s forwards;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-laptop-code"></i> My Portofolio </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/"><i class="fas fa-home"></i> Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="/profil"><i class="fas fa-user"></i> Profil</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4 page-transition">
    <?= $content ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            document.body.classList.add('fade-out');
            setTimeout(() => {
                window.location.href = this.href;
            }, 400);
        });
    });
</script>
</body>
</html>