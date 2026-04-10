<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil — AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        .nav-link { border-bottom: 2px solid transparent; transition: color 0.2s, border-color 0.2s; }
        .nav-link:hover { color: #111; }
        .nav-link.active { border-bottom-color: #111; color: #111; }
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
                <a href="/profil" class="nav-link active text-sm px-3 py-4 font-medium">Profil</a>
                <a href="/katalog" class="nav-link text-gray-400 text-sm px-3 py-4 font-medium hover:text-gray-700">Katalog</a>
                <a href="/bantuan" class="nav-link text-gray-400 text-sm px-3 py-4 font-medium hover:text-gray-700">Bantuan</a>
                <a href="/kontak" class="nav-link text-gray-400 text-sm px-3 py-4 font-medium hover:text-gray-700">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <main class="max-w-4xl mx-auto px-6 py-16 fade-in">

        <!-- Header -->
        <div class="mb-12">
            <p class="text-xs uppercase tracking-widest text-gray-400 mb-2 font-medium">Status</p>
            <h1 class="text-3xl font-semibold text-gray-900 mb-1">Profil Mahasiswa</h1>
            <p class="text-gray-400 text-sm">Informasi Identitas Mahasiswa</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Kartu Identitas -->
            <div class="md:col-span-2 space-y-0 bg-white rounded-2xl border border-gray-100 overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-50">
                    <p class="text-xs text-gray-400 uppercase tracking-wide font-medium mb-0.5">Nama Lengkap</p>
                    <p class="text-base font-medium text-gray-900">Faishal Mumtazah</p>
                </div>
                <div class="px-6 py-5 border-b border-gray-50">
                    <p class="text-xs text-gray-400 uppercase tracking-wide font-medium mb-0.5">NIM</p>
                    <p class="text-base font-medium text-gray-900 font-mono">24.12.3294</p>
                </div>
                <div class="px-6 py-5 border-b border-gray-50">
                    <p class="text-xs text-gray-400 uppercase tracking-wide font-medium mb-0.5">Program Studi</p>
                    <p class="text-base font-medium text-gray-900">S1 Sistem Informasi</p>
                </div>
                <div class="px-6 py-5 border-b border-gray-50">
                    <p class="text-xs text-gray-400 uppercase tracking-wide font-medium mb-0.5">Mata Kuliah</p>
                    <p class="text-base font-medium text-gray-900">Digital Bisnis <span class="text-gray-400 font-normal text-sm">SI-04</span></p>
                </div>
                <div class="px-6 py-5">
                    <p class="text-xs text-gray-400 uppercase tracking-wide font-medium mb-0.5">Institusi</p>
                    <p class="text-base font-medium text-gray-900">Universitas AMIKOM Yogyakarta</p>
                </div>
            </div>

            <!-- Sidebar Info -->
            <div class="space-y-4">
                <div class="bg-white rounded-2xl border border-gray-100 p-6">
                    <div class="w-14 h-14 rounded-xl bg-gray-50 border border-gray-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                        </svg>
                    </div>
                    <p class="text-xs text-gray-400 mb-1">Tahun Akademik</p>
                    <p class="font-medium text-sm">2025 / 2026</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 p-6">
                    <p class="text-xs text-gray-400 uppercase tracking-wide font-medium mb-3">Navigasi</p>
                    <div class="space-y-2">
                        <a href="/katalog" class="flex items-center justify-between text-sm text-gray-600 hover:text-gray-900 transition-colors py-1">
                            <span>Lihat Katalog</span>
                            <span class="text-gray-300">→</span>
                        </a>
                        <a href="/bantuan" class="flex items-center justify-between text-sm text-gray-600 hover:text-gray-900 transition-colors py-1">
                            <span>Pusat Bantuan</span>
                            <span class="text-gray-300">→</span>
                        </a>
                        <a href="/kontak" class="flex items-center justify-between text-sm text-gray-600 hover:text-gray-900 transition-colors py-1">
                            <span>Kontak Kami</span>
                            <span class="text-gray-300">→</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>
</html>