@extends('layouts.app')
@section('content')
<main class="max-w-3xl mx-auto px-6 py-20 text-center">
    <div class="bg-white p-12 rounded-[2rem] shadow-2xl border border-slate-200">
        <h1 class="text-5xl font-black text-indigo-700 mb-6">Tiket Anda Siap!</h1>
        <p class="text-slate-600 text-lg mb-8">Terima kasih, pembayaran Anda telah berhasil. Lihat detail tiket di bawah ini.</p>
        <div class="bg-slate-50 rounded-3xl p-8 text-left shadow-sm border border-slate-200">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <p class="text-sm uppercase tracking-[0.25em] text-slate-400">Event</p>
                    <p class="text-xl font-bold">Jazz Night 2024: A Celebration</p>
                </div>
                <span class="px-4 py-2 rounded-full bg-emerald-100 text-emerald-700 font-bold">Paid</span>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex justify-between text-slate-600">
                    <span>Tanggal</span>
                    <span>16 Nov 2024</span>
                </div>
                <div class="flex justify-between text-slate-600">
                    <span>Lokasi</span>
                    <span>The Blue Note Lounge</span>
                </div>
                <div class="flex justify-between text-slate-600">
                    <span>Jumlah</span>
                    <span>1 Tiket</span>
                </div>
                <div class="flex justify-between text-slate-600">
                    <span>Total Bayar</span>
                    <span class="font-bold text-indigo-700">Rp 155.000</span>
                </div>
            </div>
        </div>
        <a href="{{ route('home') }}" class="mt-10 inline-block px-12 py-4 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition">Kembali ke Beranda</a>
    </div>
</main>
@endsection
