<style>
    .card-custom {
        background: #fef6e4;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .card-custom:hover {
        transform: scale(1.03);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }
    .fade-in {
        opacity: 0;
        animation: fadeInAnim 1s forwards;
    }

    @keyframes fadeInAnim {
        to {
            opacity: 1;
        }
    }
    .badge-custom {
        background-color: #b8c0ff;
        color: #2c3e50;
    }
</style>

<div class="card card-custom shadow-lg border-0 rounded-4 mt-4 fade-in text-center">
    <div class="card-body">
        <i class="fas fa-paw text-secondary"></i>
        <h3 class="card-title">Welcome!</h3>
<style>
    .interactive-text {
        font-size: 2rem; 
        font-weight: bold;
        color: #34495e;
        cursor: pointer;
        transition: color 0.3s ease, transform 0.3s ease;
        user-select: none; 
    }
    .interactive-text:hover {
        color: #e67e22;
        transform: scale(1.1);
    }
</style>

<p class="card-text mt-3">
    <strong class="interactive-text d-block mt-1"><?= esc($praktikan['nama']) ?></strong>
</p>
        <hr>
        <p style="font-style: italic; margin-top: 1.5rem;">
            <strong>Gak usah bingung, kamu gak nyasar kok!</strong><br>
            Website ini masih dalam tahap “perjalanan menuju keajaiban”. Jadi, santai dulu ya, isi keren segera menyusul.<br>
            Sementara itu, nikmati dulu sambutan hangat dariku!
        </p>
    </div>
</div>