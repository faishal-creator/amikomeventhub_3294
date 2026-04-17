<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog — AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        .nav-link { border-bottom: 2px solid transparent; transition: color 0.2s, border-color 0.2s; }
        .nav-link:hover { color: #111; }
        .nav-link.active { border-bottom-color: #111; color: #111; }
        .event-card { transition: box-shadow 0.2s, transform 0.2s; }
        .event-card:hover { box-shadow: 0 8px 32px rgba(0,0,0,0.07); transform: translateY(-2px); }
        .badge { display: inline-flex; align-items: center; font-size: 11px; font-weight: 500; padding: 3px 8px; border-radius: 99px; }
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
                <a href="/katalog" class="nav-link active text-sm px-3 py-4 font-medium">Katalog</a>
                <a href="/bantuan" class="nav-link text-gray-400 text-sm px-3 py-4 font-medium hover:text-gray-700">Bantuan</a>
                <a href="/kontak" class="nav-link text-gray-400 text-sm px-3 py-4 font-medium hover:text-gray-700">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <main class="max-w-4xl mx-auto px-6 py-16 fade-in">

        <!-- Header -->
        <div class="flex items-end justify-between mb-10">
            <div>
                <p class="text-xs uppercase tracking-widest text-gray-400 mb-2 font-medium">Event</p>
                <h1 class="text-3xl font-semibold text-gray-900">Katalog Event</h1>
                <p class="text-gray-400 text-sm mt-1">Semua event yang tersedia di AmikomEventHub</p>
            </div>
            <span class="text-xs text-gray-400 bg-white border border-gray-100 px-3 py-1.5 rounded-full">4 event aktif</span>
        </div>

        <!-- Grid Event -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <!-- Event 1 -->
            <div class="event-card bg-white rounded-2xl border border-gray-100 p-6">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <span class="badge bg-gray-50 text-gray-500 border border-gray-100">Seminar</span>
                    </div>
                    <span class="badge bg-green-50 text-green-700 border border-green-100">Gratis</span>
                </div>
                <h3 class="text-base font-semibold text-gray-900 mb-1.5">Seminar Teknologi AI</h3>
                <p class="text-sm text-gray-400 leading-relaxed mb-5">Perkembangan kecerdasan buatan di era digital bisnis modern dan dampaknya terhadap industri.</p>
                <div class="border-t border-gray-50 pt-4 space-y-2">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>20 Juli 2026</span>
                    </div>
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Auditorium AMIKOM</span>
                    </div>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="event-card bg-white rounded-2xl border border-gray-100 p-6">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <span class="badge bg-gray-50 text-gray-500 border border-gray-100">Workshop</span>
                    </div>
                    <span class="badge bg-amber-50 text-amber-700 border border-amber-100">Rp 50.000</span>
                </div>
                <h3 class="text-base font-semibold text-gray-900 mb-1.5">Workshop Laravel</h3>
                <p class="text-sm text-gray-400 leading-relaxed mb-5">Membangun aplikasi web modern menggunakan framework Laravel dan Tailwind CSS secara intensif.</p>
                <div class="border-t border-gray-50 pt-4 space-y-2">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>5 Agustus 2026</span>
                    </div>
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Lab Komputer Lt. 3</span>
                    </div>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="event-card bg-white rounded-2xl border border-gray-100 p-6">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <span class="badge bg-gray-50 text-gray-500 border border-gray-100">Kompetisi</span>
                    </div>
                    <span class="badge bg-blue-50 text-blue-700 border border-blue-100">Hadiah 5 Juta</span>
                </div>
                <h3 class="text-base font-semibold text-gray-900 mb-1.5">Kompetisi UI/UX Design</h3>
                <p class="text-sm text-gray-400 leading-relaxed mb-5">Lomba desain antarmuka bertema smart city dengan total hadiah jutaan rupiah untuk mahasiswa.</p>
                <div class="border-t border-gray-50 pt-4 space-y-2">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>12 September 2026</span>
                    </div>
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Online</span>
                    </div>
                </div>
            </div>

            <!-- Event 4 -->
            <div class="event-card bg-white rounded-2xl border border-gray-100 p-6">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <span class="badge bg-gray-50 text-gray-500 border border-gray-100">Bootcamp</span>
                    </div>
                    <span class="badge bg-amber-50 text-amber-700 border border-amber-100">Rp 150.000</span>
                </div>
                <h3 class="text-base font-semibold text-gray-900 mb-1.5">Bootcamp Digital Marketing</h3>
                <p class="text-sm text-gray-400 leading-relaxed mb-5">Belajar strategi pemasaran digital, SEO, dan pengelolaan media sosial untuk keperluan bisnis.</p>
                <div class="border-t border-gray-50 pt-4 space-y-2">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>1 Oktober 2026</span>
                    </div>
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Gedung B AMIKOM</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer Nav -->
        <div class="flex items-center justify-between mt-12 pt-8 border-t border-gray-100">
            <a href="/profil" class="text-sm text-gray-400 hover:text-gray-700 transition-colors flex items-center gap-1.5">
                <span>←</span> Profil
            </a>
            <a href="/bantuan" class="text-sm text-gray-600 hover:text-gray-900 transition-colors flex items-center gap-1.5">
                Bantuan <span>→</span>
            </a>
        </div>

    </main>

</body>
</html>