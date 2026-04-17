@extends('layouts.admin')

@section('content')
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Manajemen Event</h1>
        <p class="text-slate-500 font-medium">Kelola semua event di platform Anda</p>
    </div>
    <button onclick="openAddModal()"
        class="px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition">
        + Tambah Event
    </button>
</header>

<!-- Events Table -->
<div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-slate-100 bg-slate-50">
                    <th class="px-6 py-4 text-left text-sm font-bold text-slate-600 uppercase tracking-wider">No.</th>
                    <th class="px-6 py-4 text-left text-sm font-bold text-slate-600 uppercase tracking-wider">Nama Event</th>
                    <th class="px-6 py-4 text-left text-sm font-bold text-slate-600 uppercase tracking-wider">Kategori</th>
                    <th class="px-6 py-4 text-left text-sm font-bold text-slate-600 uppercase tracking-wider">Tanggal</th>
                    <th class="px-6 py-4 text-left text-sm font-bold text-slate-600 uppercase tracking-wider">Harga</th>
                    <th class="px-6 py-4 text-left text-sm font-bold text-slate-600 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-center text-sm font-bold text-slate-600 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <!-- Sample Event 1 -->
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-900 font-medium">1</td>
                    <td class="px-6 py-4 font-bold">Jazz Night 2024</td>
                    <td class="px-6 py-4"><span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm font-bold">Konser</span></td>
                    <td class="px-6 py-4 text-slate-600">16 Nov 2024</td>
                    <td class="px-6 py-4 font-bold text-indigo-600">Rp 150.000</td>
                    <td class="px-6 py-4"><span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm font-bold">Aktif</span></td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2 justify-center">
                            <button class="px-4 py-2 bg-blue-50 text-blue-600 rounded-xl font-bold text-sm hover:bg-blue-100 transition">Edit</button>
                            <button class="px-4 py-2 bg-red-50 text-red-600 rounded-xl font-bold text-sm hover:bg-red-100 transition">Hapus</button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Event 2 -->
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-900 font-medium">2</td>
                    <td class="px-6 py-4 font-bold">AI & Future Workshop</td>
                    <td class="px-6 py-4"><span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm font-bold">Workshop</span></td>
                    <td class="px-6 py-4 text-slate-600">26 Oct 2024</td>
                    <td class="px-6 py-4 font-bold text-indigo-600">Rp 50.000</td>
                    <td class="px-6 py-4"><span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm font-bold">Aktif</span></td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2 justify-center">
                            <button class="px-4 py-2 bg-blue-50 text-blue-600 rounded-xl font-bold text-sm hover:bg-blue-100 transition">Edit</button>
                            <button class="px-4 py-2 bg-red-50 text-red-600 rounded-xl font-bold text-sm hover:bg-red-100 transition">Hapus</button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Event 3 -->
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-900 font-medium">3</td>
                    <td class="px-6 py-4 font-bold">Hackathon 2024</td>
                    <td class="px-6 py-4"><span class="px-3 py-1 bg-indigo-50 text-indigo-700 rounded-full text-sm font-bold">Seminar</span></td>
                    <td class="px-6 py-4 text-slate-600">18-20 Oct 2024</td>
                    <td class="px-6 py-4 font-bold text-green-600">Gratis</td>
                    <td class="px-6 py-4"><span class="px-3 py-1 bg-yellow-50 text-yellow-700 rounded-full text-sm font-bold">Mendatang</span></td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2 justify-center">
                            <button class="px-4 py-2 bg-blue-50 text-blue-600 rounded-xl font-bold text-sm hover:bg-blue-100 transition">Edit</button>
                            <button class="px-4 py-2 bg-red-50 text-red-600 rounded-xl font-bold text-sm hover:bg-red-100 transition">Hapus</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
