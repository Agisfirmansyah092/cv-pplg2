<?php
// DATA DIRI - EDIT BAGIAN INI SAJA
$nama = "Muhammad Ridho Alfauzaan";
$nis = "09677521";
$kelas = "XII PPLG 2";
$sekolah = "SMKN 1 Leuwimunding";
$jurusan = "Pengembangan Perangkat Lunak dan Gim";
$tempat_lahir = "Majalengka";
$tgl_lahir = "20 april 2009";
$alamat = "Jl. K.H. Abdul Nopal No. 2, Leuwimunding";
$no_hp = "0838-9456-7890";
$email = "rdh.alpukat@email.com";
$hobi = "Coding, Main Game, Baca Buku";
$cita_cita = "Terserah";

$tentang = "Halo! Saya siswa PPLG yang suka belajar membuat website dan aplikasi. 
Saya sedang belajar PHP, HTML, CSS, dan Database MySQL.";

$foto = "poto.jpg";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - <?= $nama ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 40px 20px;
        }

        .header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid white;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 5px;
        }

        .header p {
            font-size: 16px;
            opacity: 0.9;
        }

        .content {
            padding: 30px;
        }

        .card {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .card h2 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .info-item {
            margin-bottom: 10px;
        }

        .info-item b {
            color: #333;
            display: block;
            font-size: 14px;
        }

        .info-item span {
            color: #555;
            font-size: 15px;
        }

        .skill-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill-list span {
            background: #667eea;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
        }

        .kontak a {
            display: inline-block;
            background: #25D366;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            margin-right: 10px;
            margin-top: 10px;
        }

        .kontak a.email {
            background: #EA4335;
        }

        .tombol-kembali {
            text-align: center;
            padding: 20px;
        }

        .btn-dashboard {
            display: inline-block;
            padding: 12px 25px;
            background: #2E7D32;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-dashboard:hover {
            background: #1B5E20;
            transform: translateY(-2px);
        }

        .footer {
            text-align: center;
            padding: 20px;
            background: #f1f1f1;
            color: #777;
            font-size: 14px;
        }

        @media(max-width: 600px) {
            .info-grid {
                grid-template-columns: 1fr;
            }

            .header img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- BAGIAN HEADER + FOTO -->
    <div class="header">
        <img src="<?= $foto ?>" alt="Foto <?= $nama ?>">
        <h1><?= $nama ?></h1>
        <p><?= $kelas ?> | <?= $jurusan ?></p>
    </div>

    <!-- BAGIAN ISI -->
    <div class="content">

        <!-- TENTANG SAYA -->
        <div class="card">
            <h2>Tentang Saya</h2>
            <p><?= $tentang ?></p>
        </div>

        <!-- DATA PRIBADI -->
        <div class="card">
            <h2>Data Pribadi</h2>
            <div class="info-grid">
                <div class="info-item">
                    <b>NIS</b>
                    <span><?= $nis ?></span>
                </div>
                <div class="info-item">
                    <b>Tempat, Tgl Lahir</b>
                    <span><?= $tempat_lahir ?>, <?= $tgl_lahir ?></span>
                </div>
                <div class="info-item">
                    <b>Alamat</b>
                    <span><?= $alamat ?></span>
                </div>
                <div class="info-item">
                    <b>Sekolah</b>
                    <span><?= $sekolah ?></span>
                </div>
                <div class="info-item">
                    <b>Hobi</b>
                    <span><?= $hobi ?></span>
                </div>
                <div class="info-item">
                    <b>Cita-cita</b>
                    <span><?= $cita_cita ?></span>
                </div>
            </div>
        </div>

        <!-- SKILL -->
        <div class="card">
            <h2>Skill</h2>
            <div class="skill-list">
                <span>HTML</span>
                <span>CSS</span>
                <span>PHP</span>
                <span>MySQL</span>
                <span>JavaScript</span>
            </div>
        </div>

        <!-- KONTAK -->
        <div class="card kontak">
            <h2>Hubungi Saya</h2>
            <a href="https://wa.me/62<?= substr($no_hp, 1) ?>" target="_blank">WhatsApp</a>
            <a href="mailto:<?= $email ?>" class="email">Email</a>
        </div>

    </div>

    <!-- TOMBOL KEMBALI -->
    <div class="tombol-kembali">
        <a href="dashboard.php" class="btn-dashboard">← KEMBALI KE DASHBOARD</a>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <p>© 2026 Dibuat dengan PHP oleh <?= $nama ?></p>
    </div>

</div>

</body>
</html>
