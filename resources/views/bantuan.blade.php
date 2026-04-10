<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan — AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        .nav-link { border-bottom: 2px solid transparent; transition: color 0.2s, border-color 0.2s; }
        .nav-link:hover { color: #111; }
        .nav-link.active { border-bottom-color: #111; color: #111; }
        details summary { cursor: pointer; list-style: none; }
        details summary::-webkit-details-marker { display: none; }
        details[open] .arrow { transform: rotate(180deg); }
        .arrow { transition: transform 0.2s ease; }
        details[open] summary { border-bottom-color: #f0f0ef; }
        .fade-in { animation: fadeIn 0.4s ease; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-[#fafaf9] text-[#111] antialiased min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-4xl mx-auto px-6 flex items-center justify-between h-14">
            <a href="/" class="text-sm font-semibold tracking-tight">Amikom<span class="text-gray-400 font-light">EventHub</span></a>
            <div class="flex items-center">
                <a href="/" class="nav-link text-gray-400 text-sm px-3 py-4 font-medium hover:text-gray-700">Home</a>
                <a href="/profil" class="nav-link text-gray-400 text-sm px-3 py-4 font-medium hover:text-gray-700">Profil</a>
                <a href="/katalog" class="nav-link text-gray-400 text-sm px-3 py-4 font-medium hover:text-gray-700">Katalog</a>
                <a href="/bantuan" class="nav-link active text-sm px-3 py-4 font-medium">Bantuan</a>
                <a href="/kontak" class="nav-link text-gray-400 text-sm px-3 py-4 font-medium hover:text-gray-700">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <main class="max-w-4xl mx-auto px-6 py-16 fade-in">

        <!-- Header -->
        <div class="mb-12 max-w-xl">
            <p class="text-xs uppercase tracking-widest text-gray-400 mb-2 font-medium">FAQ</p>
            <h1 class="text-3xl font-semibold text-gray-900 mb-2">Pusat Bantuan</h1>
            <p class="text-gray-400 text-sm leading-relaxed">Pertanyaan yang sering diajukan seputar penggunaan AmikomEventHub.</p>
        </div>

        <!-- FAQ Accordion -->
        <div class="max-w-2xl space-y-0">

            <details class="group bg-white border border-gray-100 rounded-2xl mb-3 overflow-hidden" open>
                <summary class="flex items-center justify-between px-6 py-4 border-b border-transparent hover:bg-gray-50 transition-colors">
                    <span class="text-sm font-medium text-gray-900">Apa itu AmikomEventHub?</span>
                    <svg class="arrow w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <div class="px-6 py-4">
                    <p class="text-sm text-gray-500 leading-relaxed">AmikomEventHub adalah platform digital untuk mengelola, mendaftarkan, dan memantau berbagai event di lingkungan Universitas AMIKOM Yogyakarta — mulai dari seminar, workshop, hingga kompetisi.</p>
                </div>
            </details>

            <details class="group bg-white border border-gray-100 rounded-2xl mb-3 overflow-hidden">
                <summary class="flex items-center justify-between px-6 py-4 border-b border-transparent hover:bg-gray-50 transition-colors">
                    <span class="text-sm font-medium text-gray-900">Bagaimana cara mendaftar event?</span>
                    <svg class="arrow w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <div class="px-6 py-4">
                    <p class="text-sm text-gray-500 leading-relaxed">Buka halaman Katalog, pilih event yang diminati, lalu klik tombol "Daftar Sekarang". Isi form dengan data diri (Nama, NIM, Email). Konfirmasi pendaftaran akan dikirim ke email kamu.</p>
                </div>
            </details>

            <details class="group bg-white border border-gray-100 rounded-2xl mb-3 overflow-hidden">
                <summary class="flex items-center justify-between px-6 py-4 border-b border-transparent hover:bg-gray-50 transition-colors">
                    <span class="text-sm font-medium text-gray-900">Apakah semua event berbayar?</span>
                    <svg class="arrow w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <div class="px-6 py-4">
                    <p class="text-sm text-gray-500 leading-relaxed">Tidak. Banyak event tersedia secara gratis, terutama untuk mahasiswa aktif AMIKOM. Untuk event berbayar, informasi harga tercantum jelas di halaman Katalog masing-masing event.</p>
                </div>
            </details>

            <details class="group bg-white border border-gray-100 rounded-2xl mb-3 overflow-hidden">
                <summary class="flex items-center justify-between px-6 py-4 border-b border-transparent hover:bg-gray-50 transition-colors">
                    <span class="text-sm font-medium text-gray-900">Bagaimana cara mendapatkan sertifikat?</span>
                    <svg class="arrow w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <div class="px-6 py-4">
                    <p class="text-sm text-gray-500 leading-relaxed">Sertifikat dikirim secara digital ke email yang terdaftar maksimal 7 hari setelah event selesai. Pastikan melakukan absensi saat hari pelaksanaan agar sertifikat dapat diproses.</p>
                </div>
            </details>

            <details class="group bg-white border border-gray-100 rounded-2xl mb-3 overflow-hidden">
                <summary class="flex items-center justify-between px-6 py-4 border-b border-transparent hover:bg-gray-50 transition-colors">
                    <span class="text-sm font-medium text-gray-900">Bisakah membatalkan pendaftaran?</span>
                    <svg class="arrow w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <div class="px-6 py-4">
                    <p class="text-sm text-gray-500 leading-relaxed">Pembatalan dapat dilakukan maksimal H-3 sebelum event dimulai. Hubungi tim kami melalui halaman Kontak dengan menyertakan nama, NIM, dan nama event yang ingin dibatalkan.</p>
                </div>
            </details>

        </div>

        <!-- CTA Kontak -->
        <div class="max-w-2xl mt-10">
            <div class="bg-white border border-gray-100 rounded-2xl px-6 py-5 flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-900">Masih ada pertanyaan?</p>
                    <p class="text-xs text-gray-400 mt-0.5">Tim kami siap membantu Senin–Jumat, 08.00–16.00 WIB</p>
                </div>
                <a href="/kontak" class="text-sm font-medium text-gray-900 bg-gray-50 border border-gray-100 px-4 py-2 rounded-lg hover:bg-gray-100 transition-colors flex items-center gap-1.5">
                    Hubungi Kami <span>→</span>
                </a>
            </div>
        </div>

        <!-- Footer Nav -->
        <div class="flex items-center justify-between mt-10 pt-8 border-t border-gray-100 max-w-2xl">
            <a href="/katalog" class="text-sm text-gray-400 hover:text-gray-700 transition-colors flex items-center gap-1.5">
                <span>←</span> Katalog
            </a>
            <a href="/kontak" class="text-sm text-gray-600 hover:text-gray-900 transition-colors flex items-center gap-1.5">
                Kontak <span>→</span>
            </a>
        </div>

    </main>

</body>
</html>