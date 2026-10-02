<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Tsaniyah Khoirunnisa - SMKN 5 Batam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header>
        <div class="profile-info">
            <div class="avatar">👤</div>
            <div>
                <h1 style="margin:0;">Tsaniyah Khoirunnisa</h1>
                <p style="margin:5px 0 0 0; color: gray;">Siswa Teknik Komputer dan Jaringan SMKN 5 Batam</p>
            </div>
        </div>
        <nav>
            <a href="#profil">Home</a>
            <a href="#skills">Skills</a>
            <a href="#kontak">Contact</a>
            <button id="btn-theme" onclick="toggleTheme()">Dark Mode</button>
        </nav>
    </header>

    <div class="main-content">
        <!-- Kolom Kiri -->
        <div class="left-column">
            <div class="card" id="profil">
                <h2>PROFIL</h2>
                <h3>BIODATA</h3>
                <p>Pelajar aktif dan praktisi di bidang Teknik Komputer dan Jaringan dengan fokus pada administrasi server dan keamanan jaringan.</p>

                <h3>PENDIDIKAN</h3>
                <ul>
                    <li>TK Almukmin (2015)</li>
                    <li>SDN 002 (2016-2021)</li>
                    <li>SMP ALFALAH (2022-2025)</li>
                    <li>SMKN 5 Batam (2025-2027)</li>
                </ul>

                <h3>PENGALAMAN SISWA</h3>
                <ul>
                    <li>Siswa TKJ di SMKN 5 Batam</li>
                    <li>Membuat kabel LAN & Konfigurasi</li>
                </ul>
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="right-column">
            <div class="card" id="skills">
                <h2>NETWORK SKILLS</h2>

                <div class="skill-item">
                    <span class="skill-name">MikroTik RouterOS</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 90%;"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Cisco Networking</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 85%;"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Linux Server (Debian/Ubuntu)</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 80%;"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Network Security</span>
                    <div class="progress-bar"><div class="progress-fill" style="width: 75%;"></div></div>
                </div>
            </div>

            <div class="card" id="kontak">
                <h2>FORM KONTAK</h2>
                <div id="pesan-status"></div>

                <form id="contactForm" onsubmit="kirimPesan(event)">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="txt_nama" placeholder="Masukkan nama..." required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="txt_email" placeholder="Masukkan email..." required>
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan:</label>
                        <textarea id="pesan" name="txt_pesan" rows="4" placeholder="Tuliskan pesan..." required></textarea>
                    </div>

                    <button type="submit" name="btn_kirim" class="btn-submit">KIRIM PESAN</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
