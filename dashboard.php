<?php
$cvFiles = glob(__DIR__ . '/src/*/cv.php');
if ($cvFiles === false) {
    throw new RuntimeException('Tidak dapat membaca folder CV di src/.');
}

$tones = ['emerald', 'cyan', 'rose', 'indigo', 'silver'];
$students = [];
foreach ($cvFiles as $cvFile) {
    $slug = basename(dirname($cvFile));
    if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $slug)) {
        throw new RuntimeException("Nama folder CV tidak valid: {$slug}");
    }

    $name = ucwords(str_replace('-', ' ', $slug));
    $students[] = [
        'number' => str_pad((string) (count($students) + 1), 2, '0', STR_PAD_LEFT),
        'name' => $name,
        'nickname' => $name,
        'role' => 'Developer',
        'category' => 'developer',
        'tone' => $tones[count($students) % count($tones)],
        'status' => 'CV tersedia',
        'skills' => [],
        'slug' => $slug,
        'page' => 'cv.html',
    ];
}

if (is_file(__DIR__ . '/src/yoga/index.php')) {
    $students[] = [
        'number' => str_pad((string) (count($students) + 1), 2, '0', STR_PAD_LEFT),
        'name' => 'Yoga Hazimulfikri',
        'nickname' => 'Yoga',
        'role' => 'Developer',
        'category' => 'developer',
        'tone' => $tones[count($students) % count($tones)],
        'status' => 'CV tersedia',
        'skills' => [],
        'slug' => 'yoga',
        'page' => 'index.html',
    ];
}

$studentCount = count($students);
$categories = array_values(array_unique(array_column($students, 'category')));
$categoryLabels = ['developer' => 'Developer'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kenali siswa kelas developer lewat profil, keahlian, dan CV mereka.">
    <title>Direktori Kelas Developer 2026 | CV &amp; Portofolio Siswa</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="site-shell">
        <header class="site-header">
            <a class="brand" href="#top" aria-label="CV Dashboard, kembali ke atas">
                <span class="brand-symbol" aria-hidden="true">C.</span>
                <span class="brand-name">KARYA<span class="brand-accent">/</span>KELAS<br>DEVELOPER 2026</span>
            </a>

            <nav class="main-nav" aria-label="Navigasi utama">
                <a class="nav-link is-current" href="#top">Beranda</a>
                <a class="nav-link" href="#students">Siswa</a>
            </nav>

            <a class="header-cta" href="#students">Jelajahi kelas <span aria-hidden="true">↗</span></a>
        </header>

        <main id="top">
            <section class="hero" aria-labelledby="hero-title">
                <div class="hero-copy">
                    <p class="eyebrow"><span class="eyebrow-mark"></span> PORTOFOLIO KELAS <span class="eyebrow-divider">/</span> 2026</p>
                    <h1 id="hero-title">Bertumbuh<br>lewat <em>karya.</em></h1>
                    <p class="hero-description">Kenali teman sekelas lewat proyek, keahlian, dan perjalanan belajar mereka. Temukan profil yang ingin kamu ajak berkolaborasi.</p>
                    <div class="hero-actions">
                        <a class="button button-dark" href="#students">Lihat profil siswa <span aria-hidden="true">↗</span></a>
                        <span class="collection-note"><strong><?= sprintf('%02d', $studentCount) ?></strong> PROFIL</span>
                    </div>
                    <div class="hero-stats" aria-label="Ringkasan direktori kelas">
                        <div class="hero-stat"><strong><?= sprintf('%02d', $studentCount) ?></strong><span>PROFIL SISWA</span></div>
                        <div class="hero-stat"><strong><?= sprintf('%02d', count($categories)) ?></strong><span>SPESIALISASI</span></div>
                        <div class="hero-stat"><strong><?= sprintf('%02d', $studentCount) ?></strong><span>CV TERSEDIA</span></div>
                    </div>
                    <div class="hero-index"><span>01</span><span class="index-line"></span><span>DIREKTORI KELAS / <?= sprintf('%02d', $studentCount) ?> SISWA</span></div>
                </div>

                <div class="editor-window" aria-label="Contoh kode direktori siswa">
                    <div class="editor-topbar">
                        <span class="window-controls" aria-hidden="true"><i></i><i></i><i></i></span>
                        <span class="editor-tab"><span class="php-mark">PHP</span> src/</span>
                        <span class="editor-menu" aria-hidden="true">···</span>
                    </div>
                    <div class="editor-content">
                        <aside class="editor-gutter" aria-hidden="true">
                            <span>01</span><span>02</span><span>03</span><span>04</span><span>05</span><span>06</span><span>07</span><span>08</span><span>09</span>
                        </aside>
                        <div class="editor-code">
                            <div><span class="code-purple">$students</span> <span class="code-muted">=</span> <span class="code-yellow">[</span></div>
                            <?php foreach (array_slice($students, 0, 3) as $student): ?>
                                <div class="code-indent"><span class="code-yellow">[</span> <span class="code-green">'<?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8') ?>'</span><span class="code-muted">,</span></div>
                                <div class="code-indent code-indent-two"><span class="code-blue">'src/<?= htmlspecialchars($student['slug'], ENT_QUOTES, 'UTF-8') ?>/<?= htmlspecialchars($student['page'], ENT_QUOTES, 'UTF-8') ?>'</span> <span class="code-yellow">]</span><span class="code-muted">,</span></div>
                            <?php endforeach; ?>
                            <div><span class="code-yellow">]</span><span class="code-muted">;</span></div>
                            <div class="editor-comment">// building the next generation</div>
                        </div>
                    </div>
                    <div class="editor-status">
                        <span><i class="status-dot"></i> PHP · DIRECTORY READY</span>
                        <span><?= $studentCount ?> FILES <span class="status-separator">|</span> UTF-8</span>
                    </div>
                </div>
            </section>

            <section class="students-section" id="students" aria-labelledby="students-title">
                <div class="section-topline">
                    <div>
                        <p class="eyebrow section-eyebrow"><span class="eyebrow-mark"></span> CERITA DI BALIK SETIAP KARYA</p>
                        <h2 id="students-title">Teman <em>sekelas.</em></h2>
                    </div>
                    <p class="section-intro">Keahlian, proses, dan ide.<br>Temukan hal yang bisa dibangun bersama.</p>
                </div>

                <div class="collection-toolbar">
                    <div class="toolbar-title"><span>DIREKTORI KELAS</span><span class="toolbar-count"><?= sprintf('%02d', $studentCount) ?> PROFIL</span></div>
                    <label class="search-box">
                        <span class="search-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false">
                                <circle cx="10.8" cy="10.8" r="6.8"></circle>
                                <path d="m16 16 4.2 4.2"></path>
                            </svg>
                        </span>
                        <span class="visually-hidden">Cari nama, peran, atau keahlian siswa</span>
                        <input id="student-search" type="search" placeholder="Cari nama, peran, atau skill..." autocomplete="off">
                        <kbd class="search-shortcut" aria-hidden="true">/</kbd>
                        <button class="clear-search" type="button" aria-label="Hapus pencarian" hidden>&times;</button>
                    </label>
                    <p class="search-count" aria-live="polite"></p>
                </div>

                <div class="category-filters" role="group" aria-label="Filter berdasarkan spesialisasi">
                    <button class="filter-chip is-active" type="button" data-category-filter="all" aria-pressed="true">Semua <span><?= $studentCount ?></span></button>
                    <?php foreach ($categories as $category): ?>
                        <?php $categoryCount = count(array_filter($students, static fn (array $student): bool => $student['category'] === $category)); ?>
                        <button class="filter-chip" type="button" data-category-filter="<?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?>" aria-pressed="false">
                            <?= htmlspecialchars($categoryLabels[$category] ?? ucfirst($category), ENT_QUOTES, 'UTF-8') ?>
                            <span><?= $categoryCount ?></span>
                        </button>
                    <?php endforeach; ?>
                </div>

                <div class="student-grid">
                    <?php foreach ($students as $student): ?>
                        <?php $initial = mb_strtoupper(mb_substr($student['nickname'] ?? $student['name'], 0, 1, 'UTF-8'), 'UTF-8'); ?>
                        <?php $searchText = implode(' ', [$student['name'], $student['nickname'] ?? '', $student['role'], $student['category'], implode(' ', $student['skills'])]); ?>
                        <article
                            class="student-card tone-<?= htmlspecialchars($student['tone'], ENT_QUOTES, 'UTF-8') ?>"
                            data-student-card
                            data-name="<?= htmlspecialchars($searchText, ENT_QUOTES, 'UTF-8') ?>"
                            data-category="<?= htmlspecialchars($student['category'], ENT_QUOTES, 'UTF-8') ?>"
                        >
                            <a class="student-card-link" href="src/<?= rawurlencode($student['slug']) ?>/<?= rawurlencode($student['page']) ?>" aria-label="Lihat CV <?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8') ?>">
                                <div class="portrait-panel">
                                    <span class="portrait-grain" aria-hidden="true"></span>
                                    <span class="portrait-number"><?= htmlspecialchars($student['number'], ENT_QUOTES, 'UTF-8') ?> / DEVELOPER</span>
                                    <span class="portrait-monogram" aria-hidden="true"><?= htmlspecialchars($initial, ENT_QUOTES, 'UTF-8') ?></span>
                                    <span class="portrait-code" aria-hidden="true"><i>const</i> developer = <b>'<?= htmlspecialchars($student['nickname'] ?? $student['name'], ENT_QUOTES, 'UTF-8') ?>'</b>;</span>
                                    <span class="portrait-caption"><?= htmlspecialchars($categoryLabels[$student['category']] ?? ucfirst($student['category']), ENT_QUOTES, 'UTF-8') ?><br>CLASS OF 2026</span>
                                    <span class="portrait-open" aria-hidden="true">↗</span>
                                </div>
                                <div class="student-card-info">
                                    <div>
                                        <span class="student-role"><?= htmlspecialchars($student['role'], ENT_QUOTES, 'UTF-8') ?></span>
                                        <h3><?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                                    </div>
                                    <span class="student-arrow" aria-hidden="true">↗</span>
                                </div>
                                <div class="student-card-details">
                                    <span class="student-status"><i aria-hidden="true"></i><?= htmlspecialchars($student['status'], ENT_QUOTES, 'UTF-8') ?></span>
                                    <span class="student-skills"><?= htmlspecialchars($student['skills'] ? implode(' · ', array_slice($student['skills'], 0, 3)) : 'CV lengkap', ENT_QUOTES, 'UTF-8') ?></span>
                                </div>
                                <div class="student-card-footer">
                                    <span>CURRICULUM VITAE</span>
                                    <span>LIHAT PROFIL ↗</span>
                                </div>
                            </a>
                        </article>
                    <?php endforeach; ?>
                </div>

                <p class="no-results" hidden>Tidak ada nama yang cocok. Coba kata kunci lain.</p>
            </section>
        </main>

        <footer class="site-footer">
            <a class="footer-brand" href="#top"><span class="brand-symbol" aria-hidden="true">C.</span> PORTOFOLIO KELAS</a>
            <span>KARYA DAN PERJALANAN KELAS DEVELOPER <span class="footer-dot">·</span> &copy; <?= date('Y') ?></span>
        </footer>
    </div>
</body>
</html>
