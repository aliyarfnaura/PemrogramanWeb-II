<style>
    .card-profile {
        background-color: #e0f7fa;
        border: none;
        transition: all 0.4s ease;
    }

    .card-profile:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .list-group-item {
        background-color: #ffffffcc;
        transition: background 0.3s ease;
    }

    .list-group-item:hover {
        background-color: #dfe6e9;
    }

    .about-me-container {
        background-color: #fff3e0;
        padding: 20px;
        margin-top: 30px;
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .about-me-container:hover {
        transform: translateY(-5px);
    }
</style>

<div class="card card-profile shadow fade-in">
    <div class="card-body text-center">
        <h3 class="mb-4">My Profile</h3>
        <?php if (!empty($profil['gambar'])): ?>
            <img src="<?= base_url('images/' . $profil['gambar']) ?>" alt="Profil" class="img-thumbnail mb-3" width="150">
        <?php endif; ?>
        <ul class="list-group">
            <li class="list-group-item">Nama: <?= esc($profil['nama']) ?></li>
            <li class="list-group-item">NIM: <?= esc($profil['nim']) ?></li>
            <li class="list-group-item">Prodi: <?= esc($profil['prodi']) ?></li>
            <li class="list-group-item">Hobi: <?= esc($profil['hobi']) ?></li>
            <li class="list-group-item">Skill: <?= esc($profil['skill']) ?></li>
        </ul>
    </div>
</div>

<div class="about-me-container mt-4">
    <h4>About Me</h4>
    <p style="text-align: justify;">
        Aku merupakan Mahasiswa Semester 4 Program Studi Teknologi Informasi Universitas Lambung Mangkurat yang memiliki minat besar dalam bidang Web Development, UI/UX, dan Desain Grafis. Ketertarikan ku juga meluas ke ranah Industri Kreatif, di mana aku terdorong untuk menuangkan ide-ide inovatif ke dalam berbagai bentuk karya seperti film, iklan, hingga konten visual digital lainnya.
        Aku menikmati proses menciptakan sesuatu yang tidak hanya menarik secara visual, tetapi juga memberikan manfaat nyata bagi orang lain. Bagiku, setiap karya adalah peluang untuk menyampaikan pesan, membangun pengalaman, dan memberikan solusi yang bermakna.
        Dengan semangat untuk terus belajar dan berkembang, aku berkomitmen menjadi pribadi yang lebih baik setiap harinya, baik dalam aspek profesional maupun personal. Aku percaya bahwa kolaborasi, kreativitas, dan keinginan untuk terus mencoba hal baru adalah kunci untuk tumbuh di dunia teknologi dan industri kreatif yang terus bergerak dinamis.
    </p>
</div>