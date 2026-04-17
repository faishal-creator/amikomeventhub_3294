<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak — AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        .nav-link { border-bottom: 2px solid transparent; transition: color 0.2s, border-color 0.2s; }
        .nav-link:hover { color: #111; }
        .nav-link.active { border-bottom-color: #111; color: #111; }
        .contact-row { transition: background 0.15s; }
        .contact-row:hover { background: #fafaf9; }
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
                <a href="/bantuan" class="nav-link text-gray-400 text-sm px-3 py-4 font-medium hover:text-gray-700">Bantuan</a>
                <a href="/kontak" class="nav-link active text-sm px-3 py-4 font-medium">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <main class="max-w-4xl mx-auto px-6 py-16 fade-in">

        <!-- Header -->
        <div class="mb-12 max-w-xl">
            <p class="text-xs uppercase tracking-widest text-gray-400 mb-2 font-medium">Kontak</p>
            <h1 class="text-3xl font-semibold text-gray-900 mb-2">Hubungi Kami</h1>
            <p class="text-gray-400 text-sm leading-relaxed">Ada pertanyaan atau butuh bantuan? Tim kami siap membantu kamu.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-3xl">

            <!-- Info Kontak -->
            <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-50">
                    <p class="text-xs uppercase tracking-wide text-gray-400 font-medium">Informasi Kontak</p>
                </div>

                <div class="contact-row flex items-center gap-4 px-6 py-4 border-b border-gray-50">
                    <div class="w-8 h-8 rounded-lg bg-gray-50 border border-gray-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 mb-0.5">Email</p>
                        <p class="text-sm font-medium text-gray-800">admin@amikomeventhub.com</p>
                    </div>
                </div>

                <div class="contact-row flex items-center gap-4 px-6 py-4 border-b border-gray-50">
                    <div class="w-8 h-8 rounded-lg bg-gray-50 border border-gray-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 mb-0.5">Telepon</p>
                        <p class="text-sm font-medium text-gray-800">+62 896-4877-7163</p>
                    </div>
                </div>

                <div class="contact-row flex items-center gap-4 px-6 py-4 border-b border-gray-50">
                    <div class="w-8 h-8 rounded-lg bg-gray-50 border border-gray-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 mb-0.5">Jam Operasional</p>
                        <p class="text-sm font-medium text-gray-800">Senin – Jumat, 08.00 – 16.00</p>
                    </div>
                </div>

                <div class="contact-row flex items-center gap-4 px-6 py-4">
                    <div class="w-8 h-8 rounded-lg bg-gray-50 border border-gray-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 mb-0.5">Alamat</p>
                        <p class="text-sm font-medium text-gray-800">Ring Road Utara, Depok, Sleman, Yogyakarta</p>
                    </div>
                </div>
            </div>

            <!-- Pesan Singkat -->
            <div class="space-y-4">
                <div class="bg-white rounded-2xl border border-gray-100 p-6">
                    <p class="text-xs uppercase tracking-wide text-gray-400 font-medium mb-4">Kirim Pesan</p>
                    <div class="space-y-3">
                        <div>
                            <label class="text-xs text-gray-400 mb-1 block">Nama</label>
                            <input type="text" placeholder="Nama kamu" class="w-full border border-gray-100 rounded-lg px-3 py-2.5 text-sm text-gray-800 bg-gray-50 focus:outline-none focus:border-gray-300 transition-colors placeholder-gray-300">
                        </div>
                        <div>
                            <label class="text-xs text-gray-400 mb-1 block">Email</label>
                            <input type="email" placeholder="email@kamu.com" class="w-full border border-gray-100 rounded-lg px-3 py-2.5 text-sm text-gray-800 bg-gray-50 focus:outline-none focus:border-gray-300 transition-colors placeholder-gray-300">
                        </div>
                        <div>
                            <label class="text-xs text-gray-400 mb-1 block">Pesan</label>
                            <textarea rows="3" placeholder="Tulis pesanmu di sini..." class="w-full border border-gray-100 rounded-lg px-3 py-2.5 text-sm text-gray-800 bg-gray-50 focus:outline-none focus:border-gray-300 transition-colors resize-none placeholder-gray-300"></textarea>
                        </div>
                        <button class="w-full bg-gray-900 text-white text-sm font-medium py-2.5 rounded-lg hover:bg-gray-700 transition-colors">
                            Kirim Pesan
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer Nav -->
        <div class="flex items-center justify-between mt-12 pt-8 border-t border-gray-100 max-w-3xl">
            <a href="/bantuan" class="text-sm text-gray-400 hover:text-gray-700 transition-colors flex items-center gap-1.5">
                <span>←</span> Bantuan
            </a>
            <a href="/" class="text-sm text-gray-600 hover:text-gray-900 transition-colors flex items-center gap-1.5">
                Kembali ke Home <span>→</span>
            </a>
        </div>

    </main>

</body>
</html>