<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Pemrograman Web Dasar - Charles Wong</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Bagian Header (Judul Halaman) -->
    <header>
        <div class="container text-center">
            <!-- Foto profil -->
            <img src="siluet.jpeg" alt="Foto Profil Charles" class="profile-pic">
            <h1>
                <?php echo "Hello, Charles Wong!"; ?>
            </h1>
            <p class="subtitle">Mahasiswa Sistem Informasi | Web Developer & UI/UX Enthusiast</p>
        </div>
    </header>

    <!-- Bagian Navigasi Menu -->
    <nav>
        <div class="container">
            <ul class="nav-links">
                <li><a href="#aboutme">Tentang Saya</a></li>
                <li><a href="#skills">Keahlian</a></li>
                <li><a href="#hobbies">Hobi</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <main class="container">

        <!-- Menu Tentang Saya-->
        <section id="aboutme" class="card">
            <h2>Tentang Saya</h2>
            <p>Selamat datang di halaman web pribadi saya. Saya memiliki ketertarikan mendalam di bidang pengembangan perangkat lunak, perancangan antarmuka pengguna, serta mengelola struktur data di sisi front-end.</p>
        </section>

        <!-- Menu Keahlian-->
        <section id="skills" class="card">
            <h2>Keahlian Teknis</h2>
            <ul class="skills-tags">
                <li>HTML & CSS</li>
                <li>PHP</li>
                <li>Python</li>
                <li>Figma (UI/UX)</li>
                <li>Git & GitHub</li>
            </ul>
        </section>

        <!-- Menu Hobi-->
        <section id="hobbies" class="card">
            <h2>Daftar Hobi</h2>
            <table class="zebra-table">
                <thead>
                    <tr>
                        <th>Nama Hobi</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bermain Video Game</td>
                        <td>Eksplorasi game PC dan mobile (Batman Arkham, DOOM, eFootball).</td>
                    </tr>
                    <tr>
                        <td>Bermain Musik</td>
                        <td>Mempelajari produksi musik digital dan setting alat musik.</td>
                    </tr>
                    <tr>
                        <td>Memasak</td>
                        <td>Bereksperimen dengan resep dan teknik dapur dasar.</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Menu Kontak-->
        <section id="contact" class="card">
            <h2 class="form-title">Formulir Kontak</h2>

            <form action="#" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Tulis nama Anda" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="nama@email.com" required>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="4" placeholder="Tulis pesan..." required></textarea>
                </div>
                <button type="submit" class="submit-btn">Kirim Pesan</button>
            </form>
        </section>

    </main>

    <!-- Bagian Footer -->
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Charles Wong. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>