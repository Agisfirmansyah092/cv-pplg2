<?php
// =========================================================================
// CONFIG & DATA CV
// Silakan ubah data pribadi kamu di bawah ini
// =========================================================================

// TANDA FOTO: Ganti 'foto-profil.jpg' dengan nama file foto kamu yang ada di folder htdocs/cv-pink/
$foto_profil     = "foto.jpeg";

$nama_lengkap   = "DWIYA NASYA GUNAWAN";
$profesi        = "Web Developer & UI/UX Designer";
$tentang_saya    = "Saya adalah seorang profesional yang kreatif dan berdedikasi tinggi dengan pengalaman dalam pengembangan web modern dan desain antarmuka pengguna. Berorientasi pada detail dan selalu bersemangat untuk mempelajari teknologi baru.";

// Informasi Kontak
$kontak = [
    "email"     => "nasyadwiya@gmail.com",
    "telepon"   => "+62 895-4154-62885",
    "lokasi"    => "Jawa Barat, Indonesia",
    "website"   => "www.portofoliokamu.com",
    "linkedin"  => "linkedin.com/in/username",
    "github"    => "github.com/username"
];

// Keahlian / Skills
$skills = [
    "PHP / Laravel"       => 85,
    "HTML5 & CSS3"        => 95,
    "JavaScript"          => 80,
    "Tailwind / Bootstrap"=> 90,
    "UI/UX Design (Figma)"=> 85,
    "MySQL Database"      => 75
];

// Pengalaman Kerja
$pengalaman = [
    [
        "posisi"       => "Senior Frontend Developer",
        "perusahaan"   => "PT. Technology Creative",
        "tahun"        => "2023 - Sekarang",
        "deskripsi"    => "Mengembangkan antarmuka aplikasi web yang responsif, mengoptimalkan performa halaman, dan berkolaborasi dengan tim backend untuk integrasi API."
    ],
    [
        "posisi"       => "Web Designer",
        "perusahaan"   => "Studio Digital Indonesia",
        "tahun"        => "2021 - 2023",
        "deskripsi"    => "Merancang layout web, membuat prototype di Figma, dan mengimplementasikannya ke dalam bentuk template HTML/CSS/PHP."
    ]
];

// Pendidikan
$pendidikan = [
    [
        "gelar"        => "S1 Teknik Informatika",
        "institusi"    => "Universitas Teknologi Indonesia",
        "tahun"        => "2017 - 2021",
        "deskripsi"    => "Lulus dengan predikat Cumlaude. Fokus pada Rekayasa Perangkat Lunak dan Pemrograman Web."
    ]
];

// Bahasa
$bahasa = [
    "Bahasa Indonesia" => "Penutur Asli (Native)",
    "Bahasa Inggris"   => "Fasih (Fluent)"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - <?php echo htmlspecialchars($nama_lengkap); ?></title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind Config untuk Warna Tema Pink -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        pinky: {
                            50:  '#fff1f2',
                            100: '#ffe4e6',
                            200: '#fecdd3',
                            300: '#fda4af',
                            400: '#fb7185',
                            500: '#f43f5e',
                            600: '#e11d48',
                            700: '#be123c',
                        }
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-pinky-50 font-sans text-gray-700 py-10 px-4 min-h-screen">

    <div class="max-w-5xl mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden border border-pinky-100 grid grid-cols-1 md:grid-cols-3">
        
        <!-- SIDEBAR KIRI (FOTO & KONTAK) -->
        <div class="bg-gradient-to-b from-pinky-100 via-pinky-50 to-white p-8 md:col-span-1 border-r border-pinky-100 flex flex-col justify-between">
            <div>
                <!-- FOTO PROFIL -->
                <div class="flex justify-center mb-6">
                    <div class="relative w-44 h-44 rounded-full p-2 bg-gradient-to-tr from-pinky-400 via-pinky-300 to-pinky-100 shadow-xl">
                        <?php if (file_exists(__DIR__ . '/' . $foto_profil)): ?>
                            <img src="<?php echo htmlspecialchars($foto_profil); ?>" alt="Foto Profil" class="w-full h-full object-cover rounded-full">
                        <?php else: ?>
                            <!-- Placeholder jika foto belum diisi/diupload -->
                            <div class="w-full h-full bg-pinky-200 rounded-full flex flex-col items-center justify-center text-pinky-600 text-center p-4">
                                <i class="fa-solid fa-camera text-3xl mb-1"></i>
                                <span class="text-xs font-semibold">TAROH FOTO DI SINI</span>
                                <span class="text-[10px] text-pinky-500">(<?php echo htmlspecialchars($foto_profil); ?>)</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- KONTAK -->
                <div class="mb-8">
                    <h3 class="text-lg font-bold text-pinky-700 uppercase tracking-wider mb-4 border-b-2 border-pinky-300 pb-1 flex items-center gap-2">
                        <i class="fa-solid fa-address-book text-pinky-500"></i> Kontak
                    </h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-center gap-3 text-gray-600">
                            <span class="w-8 h-8 rounded-full bg-pinky-200 text-pinky-600 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <span class="break-all"><?php echo $kontak['email']; ?></span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600">
                            <span class="w-8 h-8 rounded-full bg-pinky-200 text-pinky-600 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <span><?php echo $kontak['telepon']; ?></span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600">
                            <span class="w-8 h-8 rounded-full bg-pinky-200 text-pinky-600 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <span><?php echo $kontak['lokasi']; ?></span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600">
                            <span class="w-8 h-8 rounded-full bg-pinky-200 text-pinky-600 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-globe"></i>
                            </span>
                            <span><?php echo $kontak['website']; ?></span>
                        </li>
                    </ul>
                </div>

                <!-- KEAHLIAN / SKILLS -->
                <div class="mb-8">
                    <h3 class="text-lg font-bold text-pinky-700 uppercase tracking-wider mb-4 border-b-2 border-pinky-300 pb-1 flex items-center gap-2">
                        <i class="fa-solid fa-code text-pinky-500"></i> Keahlian
                    </h3>
                    <div class="space-y-3">
                        <?php foreach ($skills as $skill => $persen): ?>
                            <div>
                                <div class="flex justify-between text-xs font-semibold mb-1">
                                    <span><?php echo $skill; ?></span>
                                    <span class="text-pinky-600"><?php echo $persen; ?>%</span>
                                </div>
                                <div class="w-full bg-pinky-100 rounded-full h-2">
                                    <div class="bg-gradient-to-r from-pinky-300 to-pinky-500 h-2 rounded-full" style="width: <?php echo $persen; ?>%"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- BAHASA -->
                <div>
                    <h3 class="text-lg font-bold text-pinky-700 uppercase tracking-wider mb-4 border-b-2 border-pinky-300 pb-1 flex items-center gap-2">
                        <i class="fa-solid fa-language text-pinky-500"></i> Bahasa
                    </h3>
                    <ul class="space-y-2 text-sm">
                        <?php foreach ($bahasa as $lang => $tingkat): ?>
                            <li class="flex justify-between items-center">
                                <span class="font-medium text-gray-700"><?php echo $lang; ?></span>
                                <span class="text-xs text-pinky-600 font-semibold px-2 py-1 bg-pinky-100 rounded-full"><?php echo $tingkat; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- FOOTER SIDEBAR -->
            <div class="mt-8 pt-4 border-t border-pinky-200 text-center text-xs text-pinky-400">
                Created with <i class="fa-solid fa-heart text-pinky-500"></i> & PHP
            </div>
        </div>

        <!-- KONTEN UTAMA (KANAN) -->
        <div class="p-8 md:col-span-2 space-y-8">
            
            <!-- HEADER (NAMA & PROFESI) -->
            <div class="border-b border-pinky-100 pb-6">
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 tracking-tight">
                    <?php echo htmlspecialchars($nama_lengkap); ?>
                </h1>
                <p class="text-lg text-pinky-500 font-medium mt-1">
                    <?php echo htmlspecialchars($profesi); ?>
                </p>
                <p class="text-sm text-gray-500 mt-4 leading-relaxed">
                    <?php echo htmlspecialchars($tentang_saya); ?>
                </p>
            </div>

            <!-- PENGALAMAN KERJA -->
            <div>
                <h3 class="text-xl font-bold text-pinky-700 uppercase tracking-wider mb-6 flex items-center gap-2">
                    <span class="w-8 h-8 rounded-lg bg-pinky-500 text-white flex items-center justify-center text-sm shadow-md">
                        <i class="fa-solid fa-briefcase"></i>
                    </span> 
                    Pengalaman Kerja
                </h3>
                <div class="relative border-l-2 border-pinky-200 ml-4 pl-6 space-y-6">
                    <?php foreach ($pengalaman as $exp): ?>
                        <div class="relative group">
                            <!-- Dot Indicator -->
                            <div class="absolute -left-[31px] top-1.5 w-4 h-4 rounded-full bg-white border-4 border-pinky-400 group-hover:bg-pinky-500 transition-colors"></div>
                            
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                                <h4 class="text-base font-bold text-gray-800"><?php echo $exp['posisi']; ?></h4>
                                <span class="text-xs font-semibold px-2.5 py-0.5 rounded bg-pinky-100 text-pinky-600 w-fit mt-1 sm:mt-0">
                                    <?php echo $exp['tahun']; ?>
                                </span>
                            </div>
                            <div class="text-xs font-medium text-pinky-500 mb-2"><?php echo $exp['perusahaan']; ?></div>
                            <p class="text-sm text-gray-600 leading-relaxed"><?php echo $exp['deskripsi']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- PENDIDIKAN -->
            <div>
                <h3 class="text-xl font-bold text-pinky-700 uppercase tracking-wider mb-6 flex items-center gap-2">
                    <span class="w-8 h-8 rounded-lg bg-pinky-500 text-white flex items-center justify-center text-sm shadow-md">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </span> 
                    Pendidikan
                </h3>
                <div class="relative border-l-2 border-pinky-200 ml-4 pl-6 space-y-6">
                    <?php foreach ($pendidikan as $edu): ?>
                        <div class="relative group">
                            <!-- Dot Indicator -->
                            <div class="absolute -left-[31px] top-1.5 w-4 h-4 rounded-full bg-white border-4 border-pinky-400 group-hover:bg-pinky-500 transition-colors"></div>
                            
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                                <h4 class="text-base font-bold text-gray-800"><?php echo $edu['gelar']; ?></h4>
                                <span class="text-xs font-semibold px-2.5 py-0.5 rounded bg-pinky-100 text-pinky-600 w-fit mt-1 sm:mt-0">
                                    <?php echo $edu['tahun']; ?>
                                </span>
                            </div>
                            <div class="text-xs font-medium text-pinky-500 mb-2"><?php echo $edu['institusi']; ?></div>
                            <p class="text-sm text-gray-600 leading-relaxed"><?php echo $edu['deskripsi']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- MEDIA SOSIAL -->
            <div class="pt-4 border-t border-pinky-100">
                <div class="flex gap-4 justify-start">
                    <a href="https://<?php echo $kontak['linkedin']; ?>" target="_blank" class="w-10 h-10 rounded-full bg-pinky-100 text-pinky-600 flex items-center justify-center hover:bg-pinky-500 hover:text-white transition-all shadow-sm">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="https://<?php echo $kontak['github']; ?>" target="_blank" class="w-10 h-10 rounded-full bg-pinky-100 text-pinky-600 flex items-center justify-center hover:bg-pinky-500 hover:text-white transition-all shadow-sm">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>