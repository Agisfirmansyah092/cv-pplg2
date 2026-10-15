<?php
$studentAssetPrefix = 'gambar/';
$dashboardHref = '../../index.php#students';
?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="theme-color" content="#14525b">
	<title>Curriculum Vitae | Muhamad Al Agis Firmansyah</title>
	<style>
		:root {
			color-scheme: light;
			--ink: #203338;
			--muted: #66797b;
			--teal: #14525b;
			--teal-soft: #e6efee;
			--accent: #bd6548;
			--paper: #ffffff;
			--line: #d9e3e1;
			--side: #edf3f1;
		}

		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}

		body {
			background-color: #edf2f0;
			background-image: repeating-linear-gradient(135deg, transparent 0 32px, rgba(20, 82, 91, 0.025) 32px 33px);
			color: var(--ink);
			font-family: "Aptos", "Segoe UI", sans-serif;
			line-height: 1.65;
			padding: 36px 20px 56px;
		}

		.actions {
			align-items: center;
			display: flex;
			justify-content: space-between;
			margin: 0 auto 14px;
			max-width: 1020px;
		}

		.actions a,
		.actions button {
			align-items: center;
			background: transparent;
			border: 1px solid transparent;
			border-radius: 3px;
			color: var(--teal);
			cursor: pointer;
			display: inline-flex;
			font: inherit;
			font-size: 14px;
			font-weight: 700;
			gap: 8px;
			min-height: 42px;
			padding: 8px 12px;
			text-decoration: none;
			transition: background-color 160ms ease, border-color 160ms ease;
		}

		.actions button {
			background: var(--teal);
			color: white;
		}

		.actions a:hover,
		.actions a:focus-visible {
			background: white;
			border-color: var(--line);
		}

		.actions button:hover,
		.actions button:focus-visible {
			background: #0c4149;
		}

		.actions :focus-visible,
		.contact a:focus-visible {
			outline: 3px solid var(--accent);
			outline-offset: 3px;
		}

		.cv {
			animation: arrive 420ms ease-out both;
			background: var(--paper);
			box-shadow: 0 18px 54px rgba(32, 45, 41, 0.12);
			display: grid;
			grid-template-columns: 264px minmax(0, 1fr);
			margin: 0 auto;
			max-width: 1020px;
			overflow: hidden;
		}

		.masthead {
			align-items: center;
			background-color: var(--teal);
			background-image: repeating-linear-gradient(135deg, transparent 0 34px, rgba(255, 255, 255, 0.035) 34px 35px);
			color: white;
			display: flex;
			gap: 26px;
			grid-column: 1 / -1;
			min-height: 204px;
			padding: 30px 42px;
		}

		.foto {
			background: #dce7e4;
			border: 3px solid rgba(255, 255, 255, 0.85);
			border-radius: 5px;
			display: block;
			flex: 0 0 auto;
			height: 142px;
			object-fit: cover;
			width: 116px;
		}

		.identity {
			min-width: 0;
		}

		.masthead .label {
			color: #efc1a8;
			margin-bottom: 5px;
		}

		.masthead h1 {
			font-size: 31px;
			font-weight: 700;
			line-height: 1.2;
			max-width: 620px;
		}

		.jabatan {
			color: #dce9e7;
			font-size: 15px;
			margin-top: 8px;
		}

		aside {
			background: var(--side);
			border-right: 1px solid var(--line);
			color: var(--ink);
			padding: 34px 26px;
		}

		aside section {
			margin-bottom: 28px;
		}

		aside h2,
		main section h2 {
			align-items: center;
			color: var(--teal);
			display: flex;
			font-size: 13px;
			gap: 9px;
			margin-bottom: 14px;
			text-transform: uppercase;
		}

		aside h2::after,
		main section h2::after {
			background: var(--line);
			content: "";
			flex: 1;
			height: 1px;
		}

		aside ul {
			list-style: none;
		}

		aside li {
			color: #3e5356;
			font-size: 13px;
			margin-bottom: 10px;
			overflow-wrap: anywhere;
		}

		.contact a {
			color: var(--teal);
			font-weight: 600;
			text-decoration-color: #9ab8b5;
			text-underline-offset: 3px;
		}

		main {
			min-width: 0;
			padding: 36px 44px 30px;
		}

		.pembuka {
			border-left: 3px solid var(--accent);
			color: #405458;
			font-size: 15px;
			margin-bottom: 31px;
			padding: 2px 0 2px 16px;
		}

		.label {
			color: var(--accent);
			display: block;
			font-size: 11px;
			font-weight: 700;
			letter-spacing: 0.12em;
			margin-bottom: 7px;
			text-transform: uppercase;
		}

		main section {
			margin-bottom: 29px;
		}

		.item {
			border-left: 2px solid #b9cfcc;
			margin-bottom: 20px;
			padding: 0 0 1px 16px;
		}

		.item h3 {
			font-size: 15px;
			line-height: 1.45;
		}

		.waktu {
			color: var(--muted);
			font-size: 13px;
			margin: 2px 0 6px;
		}

		.item > p:last-child {
			color: #465b5e;
			font-size: 14px;
		}

		.keahlian {
			display: flex;
			flex-wrap: wrap;
			gap: 7px;
		}

		.keahlian span {
			background: var(--teal-soft);
			border: 1px solid #d2e2df;
			border-radius: 3px;
			color: var(--teal);
			font-size: 12px;
			padding: 4px 9px;
		}

		@keyframes arrive {
			from { opacity: 0; transform: translateY(8px); }
			to { opacity: 1; transform: translateY(0); }
		}

		@media (prefers-reduced-motion: reduce) {
			*, *::before, *::after {
				animation-duration: 0.01ms !important;
				animation-iteration-count: 1 !important;
				transition-duration: 0.01ms !important;
			}
		}

		@media (max-width: 760px) {
			body {
				padding: 14px 12px 30px;
			}

			.cv {
				grid-template-columns: 220px minmax(0, 1fr);
			}

			.masthead {
				padding: 28px 30px;
			}

			.masthead h1 {
				font-size: 27px;
			}

			aside {
				padding: 28px 20px;
			}

			main {
				padding: 30px 28px;
			}
		}

		@media (max-width: 680px) {
			.actions {
				margin-bottom: 10px;
			}

			.actions a,
			.actions button {
				font-size: 12px;
				gap: 5px;
				padding: 7px;
			}

			.cv {
				display: grid;
				grid-template-columns: minmax(0, 1fr);
			}

			.masthead {
				gap: 18px;
				min-height: 0;
				padding: 25px 22px;
			}

			.foto {
				height: 110px;
				width: 88px;
			}

			.masthead h1 {
				font-size: 24px;
			}

			.jabatan {
				font-size: 13px;
			}

			aside {
				border-bottom: 1px solid var(--line);
				border-right: 0;
				display: grid;
				gap: 4px 18px;
				grid-template-columns: repeat(2, minmax(0, 1fr));
				padding: 24px 22px 8px;
			}

			aside section {
				min-width: 0;
			}

			main {
				padding: 28px 22px 18px;
			}
		}

		@media (max-width: 390px) {
			.masthead {
				align-items: flex-start;
				gap: 14px;
				padding: 22px 16px;
			}

			.foto {
				height: 94px;
				width: 72px;
			}

			.masthead h1 {
				font-size: 21px;
			}

			.masthead .label {
				font-size: 10px;
			}

			aside {
				display: grid;
				grid-template-columns: minmax(0, 1fr);
				padding-right: 16px;
				padding-left: 16px;
			}

			main {
				padding-right: 16px;
				padding-left: 16px;
			}
		}

		@media print {
			@page {
				margin: 12mm;
				size: A4;
			}

			body {
				background: white;
				padding: 0;
				-webkit-print-color-adjust: exact;
				print-color-adjust: exact;
			}

			.actions {
				display: none;
			}

			.cv {
				animation: none;
				box-shadow: none;
				max-width: none;
			}

			.masthead {
				break-inside: avoid;
			}

			aside {
				border-right: 1px solid var(--line);
			}

			section,
			.item {
				break-inside: avoid;
			}
		}
	</style>
</head>
<body>
	<nav class="actions" aria-label="Aksi CV">
		<a href="<?= htmlspecialchars($dashboardHref, ENT_QUOTES, 'UTF-8') ?>"><span aria-hidden="true">&#8592;</span> Kembali</a>
		<button type="button" onclick="window.print()"><span aria-hidden="true">&#8595;</span> Cetak / Simpan PDF</button>
	</nav>
	<div class="cv">
		<header class="masthead">
			<img class="foto" src="<?= htmlspecialchars($studentAssetPrefix . 'agis.jpeg', ENT_QUOTES, 'UTF-8') ?>" alt="Foto Muhamad Al Agis Firmansyah">
			<div class="identity">
				<span class="label">Curriculum Vitae</span>
				<h1>Muhamad Al Agis Firmansyah</h1>
				<p class="jabatan">Siswa SMK | Minat Pengembangan Web</p>
			</div>
		</header>

		<aside>
			<section>
				<h2>Kontak</h2>
				<ul class="contact">
					<li>Telepon: <a href="tel:0895413501040">0895 4135 01040</a></li>
					<li>Email: <a href="mailto:Agisfirmansyah092@gmail.com">Agisfirmansyah092@gmail.com</a></li>
					<li>Domisili: Leuwimunding, Majalengka</li>
				</ul>
			</section>

			<section>
				<h2>Data Diri</h2>
				<ul>
					<li>Lahir di Majalengka, 10 Maret 2009</li>
					<li>Status: Pelajar</li>
				</ul>
			</section>

			<section>
				<h2>Keahlian</h2>
				<div class="keahlian">
					<span>HTML</span>
					<span>CSS</span>
					<span>PHP</span>
					<span>MySQL</span>
					<span>Microsoft Office</span>
					<span>Entri data</span>
					<span>Promosi</span>
				</div>
			</section>
		</aside>

		<main>
			<section class="pembuka">
				<span class="label">Profil singkat</span>
				<p>Saya siswa SMK Negeri 1 Leuwimunding dan sedang belajar membuat website. Saya tertarik pada HTML, CSS, PHP, dan MySQL, serta pernah mengerjakan proyek halaman login dan mencoba membuat AI agent dengan OpenAI.</p>
			</section>

			<section>
				<h2>Pendidikan</h2>
				<div class="item">
					<h3>SMK Negeri 1 Leuwimunding</h3>
					<p class="waktu">2024 - Sekarang</p>
					<p>Sedang menempuh pendidikan menengah kejuruan.</p>
				</div>
			</section>

			<section>
				<h2>Pengalaman</h2>
				<div class="item">
					<h3>Proyek Agent AI</h3>
					<p class="waktu">2024 - 2025</p>
					<p>Mengembangkan AI agent dengan OpenAI.</p>
				</div>
			</section>

		</main>
	</div>
</body>
</html>
