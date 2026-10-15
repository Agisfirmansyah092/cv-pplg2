<?php
// ==========================================
// DATA DIRI
// EDIT BAGIAN INI SAJA
// ==========================================

$nama = "Yoga Hazimulfikri";
$nis = "9987543";
$kelas = "XII PPLG 2";
$sekolah = "SMKN 1 Majalengka";
$jurusan = "Pengembangan Perangkat Lunak dan Gim";

$tempat_lahir = "Majalengka";
$tgl_lahir = "28 Agustus 2009";

$alamat = "Desa Mindi, Kecamatan Leuwimunding, Kabupaten Majalengka";

$no_hp = "0812-3456-7890";

$email = "NaonWelahTosAgeng@email.com";

$hobi = "Hiking";

$cita_cita = "Pengusaha Sukses";

$tentang = "Halo! Saya siswa PPLG yang suka belajar membuat website dan aplikasi.
Saya sedang belajar PHP, HTML, CSS, dan Database MySQL.";


// ==========================================
// FOTO PROFIL
// ==========================================
//
// Letakkan foto JPG di folder yang sama dengan cv.php.
//
// Contoh:
// foto.jpg
//
// Untuk mengganti foto, cukup ganti file foto.jpg
// Tidak ada fitur upload/tambah foto di halaman.
//
// ==========================================

$foto = "foto.jpg";

?>

<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        CV - <?php echo $nama; ?>
    </title>


    <!-- GOOGLE FONT -->

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <style>

        /* =========================================
           RESET
        ========================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* =========================================
           BODY
        ========================================= */

        body {

            font-family: 'Poppins', sans-serif;

            min-height: 100vh;

            padding: 30px 15px;

            color: #333;

            background:
                radial-gradient(
                    circle at top left,
                    rgba(76,175,80,0.35),
                    transparent 35%
                ),

                radial-gradient(
                    circle at bottom right,
                    rgba(27,94,32,0.35),
                    transparent 35%
                ),

                linear-gradient(
                    135deg,
                    #0b3d20,
                    #1b5e20,
                    #43a047
                );

        }


        /* =========================================
           BACKGROUND CIRCLE
        ========================================= */

        .circle {

            position: fixed;

            border-radius: 50%;

            background: rgba(255,255,255,0.08);

            z-index: -1;

            pointer-events: none;

        }


        .circle.one {

            width: 300px;
            height: 300px;

            top: -100px;
            left: -100px;

        }


        .circle.two {

            width: 250px;
            height: 250px;

            right: -80px;
            bottom: -80px;

        }


        .circle.three {

            width: 120px;
            height: 120px;

            right: 15%;
            top: 10%;

        }


        /* =========================================
           CONTAINER
        ========================================= */

        .container {

            width: 100%;

            max-width: 900px;

            margin: auto;

            background: rgba(255,255,255,0.96);

            border-radius: 25px;

            overflow: hidden;

            box-shadow:
                0 25px 60px rgba(0,0,0,0.30);

            animation: muncul 0.8s ease;

        }


        /* =========================================
           ANIMATION
        ========================================= */

        @keyframes muncul {

            from {

                opacity: 0;

                transform:
                    translateY(30px);

            }

            to {

                opacity: 1;

                transform:
                    translateY(0);

            }

        }


        /* =========================================
           NAVBAR
        ========================================= */

        .navbar {

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 15px 25px;

            background: white;

            border-bottom:
                1px solid #e5e5e5;

        }


        .nav-title {

            color: #1b5e20;

            font-size: 14px;

            font-weight: 700;

        }


        .nav-buttons {

            display: flex;

            gap: 10px;

        }


        .nav-btn {

            display: inline-block;

            padding: 9px 16px;

            border-radius: 10px;

            text-decoration: none;

            font-size: 12px;

            font-weight: 600;

            transition: 0.3s;

        }


        /* DASHBOARD */

        .btn-dashboard {

            color: #1b5e20;

            background: #e8f5e9;

        }


        .btn-dashboard:hover {

            background: #c8e6c9;

            transform:
                translateY(-2px);

        }


        /* LOGOUT */

        .btn-logout {

            color: white;

            background: #c62828;

        }


        .btn-logout:hover {

            background: #b71c1c;

            transform:
                translateY(-2px);

        }


        /* =========================================
           HEADER
        ========================================= */

        .header {

            position: relative;

            padding:
                55px 30px 50px;

            text-align: center;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #0d4d1c,
                    #1b5e20,
                    #43a047
                );

            overflow: hidden;

        }


        /* DEKORASI HEADER */

        .header::before {

            content: "";

            position: absolute;

            width: 300px;

            height: 300px;

            border-radius: 50%;

            background:
                rgba(255,255,255,0.08);

            top: -180px;

            left: -100px;

        }


        .header::after {

            content: "";

            position: absolute;

            width: 250px;

            height: 250px;

            border-radius: 50%;

            background:
                rgba(255,255,255,0.07);

            right: -80px;

            bottom: -150px;

        }


        /* =========================================
           FOTO PROFIL
        ========================================= */

        .profile-photo {

            position: relative;

            z-index: 2;

            display: block;

            width: 190px;

            height: 190px;

            margin:
                0 auto 20px auto;

            object-fit: cover;

            /* MEMBUAT FOTO BULAT */

            border-radius: 50%;

            /* BORDER PUTIH */

            border:
                7px solid white;

            /* BAYANGAN */

            box-shadow:
                0 12px 35px rgba(0,0,0,0.40),
                0 0 0 5px rgba(255,255,255,0.12);

            transition:
                0.4s ease;

        }


        /* EFEK HOVER FOTO */

        .profile-photo:hover {

            transform:
                scale(1.06);

            box-shadow:
                0 18px 45px rgba(0,0,0,0.45),
                0 0 0 6px rgba(255,255,255,0.18);

        }


        /* =========================================
           NAMA
        ========================================= */

        .header h1 {

            position: relative;

            z-index: 2;

            font-size: 32px;

            font-weight: 800;

            margin-bottom: 8px;

        }


        .header p {

            position: relative;

            z-index: 2;

            font-size: 15px;

            opacity: 0.92;

        }


        /* =========================================
           BADGE
        ========================================= */

        .badge {

            position: relative;

            z-index: 2;

            display: inline-block;

            margin-top: 18px;

            padding:
                8px 20px;

            border-radius: 30px;

            background:
                rgba(255,255,255,0.15);

            border:
                1px solid rgba(255,255,255,0.35);

            font-size: 12px;

            backdrop-filter:
                blur(10px);

        }


        /* =========================================
           CONTENT
        ========================================= */

        .content {

            padding: 35px;

            background:
                #f8faf8;

        }


        /* =========================================
           CARD
        ========================================= */

        .card {

            background:
                white;

            border-radius:
                18px;

            padding:
                25px;

            margin-bottom:
                22px;

            border:
                1px solid #e5e5e5;

            box-shadow:
                0 5px 18px rgba(0,0,0,0.06);

            transition:
                0.3s;

            position:
                relative;

            overflow:
                hidden;

        }


        .card:hover {

            transform:
                translateY(-4px);

            box-shadow:
                0 12px 25px rgba(0,0,0,0.10);

        }


        /* GARIS HIJAU */

        .card::before {

            content: "";

            position: absolute;

            left: 0;

            top: 0;

            width: 5px;

            height: 100%;

            background:
                linear-gradient(
                    #1b5e20,
                    #66bb6a
                );

        }


        /* =========================================
           JUDUL CARD
        ========================================= */

        .card-title {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 18px;

        }


        .icon {

            width: 42px;

            height: 42px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 12px;

            background:
                #e8f5e9;

            font-size: 20px;

        }


        .card h2 {

            color:
                #1b5e20;

            font-size:
                20px;

        }


        /* =========================================
           TENTANG SAYA
        ========================================= */

        .about-text {

            color:
                #666;

            line-height:
                1.8;

            font-size:
                14px;

        }


        /* =========================================
           DATA PRIBADI
        ========================================= */

        .info-grid {

            display:
                grid;

            grid-template-columns:
                1fr 1fr;

            gap:
                18px;

        }


        .info-item {

            padding:
                15px;

            background:
                #f8faf8;

            border-radius:
                12px;

            border:
                1px solid #edf2ed;

            transition:
                0.3s;

        }


        .info-item:hover {

            background:
                #eaf6eb;

            transform:
                translateX(3px);

        }


        .info-item b {

            display:
                block;

            color:
                #1b5e20;

            font-size:
                12px;

            margin-bottom:
                5px;

            text-transform:
                uppercase;

            letter-spacing:
                0.5px;

        }


        .info-item span {

            color:
                #555;

            font-size:
                14px;

            line-height:
                1.5;

            word-break:
                break-word;

        }


        /* =========================================
           SKILL
        ========================================= */

        .skill-list {

            display:
                flex;

            flex-wrap:
                wrap;

            gap:
                10px;

        }


        .skill {

            padding:
                9px 17px;

            border-radius:
                30px;

            background:
                linear-gradient(
                    135deg,
                    #1b5e20,
                    #43a047
                );

            color:
                white;

            font-size:
                13px;

            font-weight:
                500;

            box-shadow:
                0 4px 10px rgba(27,94,32,0.2);

            transition:
                0.3s;

        }


        .skill:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 7px 15px rgba(27,94,32,0.3);

        }


        /* =========================================
           KONTAK
        ========================================= */

        .contact-buttons {

            display:
                flex;

            flex-wrap:
                wrap;

            gap:
                12px;

        }


        .contact-btn {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                8px;

            padding:
                12px 20px;

            color:
                white;

            text-decoration:
                none;

            border-radius:
                12px;

            font-size:
                13px;

            font-weight:
                600;

            transition:
                0.3s;

        }


        .contact-btn.whatsapp {

            background:
                #25D366;

        }


        .contact-btn.email {

            background:
                #e53935;

        }


        .contact-btn:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 7px 15px rgba(0,0,0,0.2);

        }


        /* =========================================
           FOOTER
        ========================================= */

        .footer {

            padding:
                20px;

            text-align:
                center;

            background:
                #f5f8f5;

            color:
                #777;

            font-size:
                12px;

            border-top:
                1px solid #e5e5e5;

        }


        .footer strong {

            color:
                #1b5e20;

        }


        /* =========================================
           RESPONSIVE HP
        ========================================= */

        @media(max-width: 650px) {


            body {

                padding:
                    15px 10px;

            }


            /* NAVBAR */

            .navbar {

                flex-direction:
                    column;

                gap:
                    12px;

            }


            .nav-buttons {

                width:
                    100%;

                justify-content:
                    center;

            }


            /* HEADER */

            .header {

                padding:
                    40px 20px;

            }


            /* FOTO HP */

            .profile-photo {

                width:
                    155px;

                height:
                    155px;

                border-width:
                    6px;

            }


            .header h1 {

                font-size:
                    25px;

            }


            .header p {

                font-size:
                    13px;

            }


            /* CONTENT */

            .content {

                padding:
                    20px;

            }


            /* DATA */

            .info-grid {

                grid-template-columns:
                    1fr;

            }


            /* KONTAK */

            .contact-buttons {

                flex-direction:
                    column;

            }


            .contact-btn {

                justify-content:
                    center;

            }

        }

    </style>

</head>


<body>


    <!-- =========================================
         BACKGROUND DEKORASI
    ========================================= -->

    <div class="circle one"></div>

    <div class="circle two"></div>

    <div class="circle three"></div>



    <!-- =========================================
         CONTAINER
    ========================================= -->

    <div class="container">


        <!-- =====================================
             NAVBAR
        ===================================== -->

        <div class="navbar">


            <div class="nav-title">

                🌿 SMKN 1 LEUWIMUNDING

            </div>



            <div class="nav-buttons">


                <!-- DASHBOARD -->

                <a
                    href="dashboard.php"
                    class="nav-btn btn-dashboard"
                >

                    🏠 Dashboard

                </a>



                <!-- LOGOUT -->

                <a
                    href="logout.php"
                    class="nav-btn btn-logout"
                >

                    🚪 Logout

                </a>


            </div>


        </div>



        <!-- =====================================
             HEADER PROFIL
        ===================================== -->

        <div class="header">


            <!-- FOTO JPG -->

            <img
                src="<?php echo $foto; ?>"
                alt="Foto <?php echo $nama; ?>"
                class="profile-photo "
            >



            <!-- NAMA -->

            <h1>

                <?php echo $nama; ?>

            </h1>



            <!-- KELAS + JURUSAN -->

            <p>

                <?php echo $kelas; ?>

                &nbsp; • &nbsp;

                <?php echo $jurusan; ?>

            </p>



            <!-- BADGE -->

            <div class="badge">

                🎓 Siswa PPLG

            </div>


        </div>



        <!-- =====================================
             ISI CV
        ===================================== -->

        <div class="content">


            <!-- =================================
                 TENTANG SAYA
            ================================= -->

            <div class="card">


                <div class="card-title">


                    <div class="icon">

                        👋

                    </div>


                    <h2>

                        Tentang Saya

                    </h2>


                </div>



                <p class="about-text">

                    <?php echo nl2br($tentang); ?>

                </p>


            </div>



            <!-- =================================
                 DATA PRIBADI
            ================================= -->

            <div class="card">


                <div class="card-title">


                    <div class="icon">

                        👤

                    </div>


                    <h2>

                        Data Pribadi

                    </h2>


                </div>



                <div class="info-grid">


                    <!-- NIS -->

                    <div class="info-item">

                        <b>
                            NIS
                        </b>

                        <span>

                            <?php echo $nis; ?>

                        </span>

                    </div>



                    <!-- TEMPAT TANGGAL LAHIR -->

                    <div class="info-item">

                        <b>
                            Tempat, Tanggal Lahir
                        </b>

                        <span>

                            <?php echo $tempat_lahir; ?>,
                            <?php echo $tgl_lahir; ?>

                        </span>

                    </div>



                    <!-- ALAMAT -->

                    <div class="info-item">

                        <b>
                            Alamat
                        </b>

                        <span>

                            <?php echo $alamat; ?>

                        </span>

                    </div>



                    <!-- SEKOLAH -->

                    <div class="info-item">

                        <b>
                            Sekolah
                        </b>

                        <span>

                            <?php echo $sekolah; ?>

                        </span>

                    </div>



                    <!-- HOBI -->

                    <div class="info-item">

                        <b>
                            Hobi
                        </b>

                        <span>

                            <?php echo $hobi; ?>

                        </span>

                    </div>



                    <!-- CITA-CITA -->

                    <div class="info-item">

                        <b>
                            Cita-cita
                        </b>

                        <span>

                            <?php echo $cita_cita; ?>

                        </span>

                    </div>


                </div>


            </div>



            <!-- =================================
                 SKILL
            ================================= -->

            <div class="card">


                <div class="card-title">


                    <div class="icon">

                        ⚡

                    </div>


                    <h2>

                        Skill & Keahlian

                    </h2>


                </div>



                <div class="skill-list">


                    <span class="skill">
                        🥾 Hiking
                    </span>


                    <span class="skill">
                        🎮 Game
                    </span>


                    <span class="skill">
                        ⚽ Bola
                    </span>


                    <span class="skill">
                        🎣 Mancing
                    </span>


                    <span class="skill">
                        🥾 Trail Run
                    </span>


                    <span class="skill">
                        🌐 HTML
                    </span>


                    <span class="skill">
                        🎨 CSS
                    </span>


                    <span class="skill">
                        🗄️ MySQL
                    </span>


                </div>


            </div>



            <!-- =================================
                 KONTAK
            ================================= -->

            <div class="card">


                <div class="card-title">


                    <div class="icon">

                        📱

                    </div>


                    <h2>

                        Hubungi Saya

                    </h2>


                </div>



                <div class="contact-buttons">


                    <!-- WHATSAPP -->

                    <a
                        href="https://wa.me/62<?php echo substr($no_hp, 1); ?>"
                        target="_blank"
                        class="contact-btn whatsapp"
                    >

                        💬 WhatsApp

                    </a>



                    <!-- EMAIL -->

                    <a
                        href="mailto:<?php echo $email; ?>"
                        class="contact-btn email"
                    >

                        ✉️ Email

                    </a>


                </div>


            </div>


        </div>



        <!-- =====================================
             FOOTER
        ===================================== -->

        


    </div>


</body>

</html>