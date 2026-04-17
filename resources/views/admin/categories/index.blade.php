@extends('layouts.admin')

@section('content')
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Manajemen Kategori</h1>
        <p class="text-slate-500 font-medium">Kelola semua kategori event di platform ini</p>
    </div>
    <button onclick="openAddModal()"
        class="px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition">
        + Tambah Kategori
    </button>
</header>

<!-- Categories Table -->
<div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-slate-100 bg-slate-50">
                    <th class="px-6 py-4 text-left text-sm font-bold text-slate-600 uppercase tracking-wider">
                        No.
                    </th>
                    <th class="px-6 py-4 text-left text-sm font-bold text-slate-600 uppercase tracking-wider">
                        Nama Kategori
                    </th>
                     <th class="px-6 py-4 text-left text-sm font-bold text-slate-600 uppercase tracking-wider">
                        Deskripsi
                    </th>
                    <th class="px-6 py-4 text-left text-sm font-bold text-slate-600 uppercase tracking-wider">
                        Jumlah Event
                    </th>
                    <th class="px-6 py-4 text-center text-sm font-bold text-slate-600 uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <!-- Sample Category 1 -->
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-900 font-medium">1</td>
                    <td class="px-6 py-4">
                        <span class="px-4 py-2 bg-indigo-50 text-indigo-700 rounded-full font-bold text-sm">Seminar</span>
                    </td>
                    <td class="px-6 py-4 text-slate-600 text-sm">Acara pembelajaran dan diskusi profesional</td>
                    <td class="px-6 py-4 text-slate-900 font-bold">8</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2 justify-center">
                            <button onclick="openEditModal(1, 'Seminar', 'Acara pembelajaran dan diskusi profesional')"
                                class="px-4 py-2 bg-blue-50 text-blue-600 rounded-xl font-bold text-sm hover:bg-blue-100 transition">
                                Edit
                            </button>
                            <button onclick="openDeleteModal(1, 'Seminar')"
                                class="px-4 py-2 bg-red-50 text-red-600 rounded-xl font-bold text-sm hover:bg-red-100 transition">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Category 2 -->
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-900 font-medium">2</td>
                    <td class="px-6 py-4">
                        <span class="px-4 py-2 bg-purple-50 text-purple-700 rounded-full font-bold text-sm">Konser</span>
                    </td>
                    <td class="px-6 py-4 text-slate-600 text-sm">Pertunjukan musik dan hiburan live</td>
                    <td class="px-6 py-4 text-slate-900 font-bold">12</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2 justify-center">
                            <button onclick="openEditModal(2, 'Konser', 'Pertunjukan musik dan hiburan live')"
                                class="px-4 py-2 bg-blue-50 text-blue-600 rounded-xl font-bold text-sm hover:bg-blue-100 transition">
                                Edit
                            </button>
                            <button onclick="openDeleteModal(2, 'Konser')"
                                class="px-4 py-2 bg-red-50 text-red-600 rounded-xl font-bold text-sm hover:bg-red-100 transition">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Category 3 -->
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-900 font-medium">3</td>
                    <td class="px-6 py-4">
                        <span class="px-4 py-2 bg-green-50 text-green-700 rounded-full font-bold text-sm">Workshop</span>
                    </td>
                    <td class="px-6 py-4 text-slate-600 text-sm">Sesi pelatihan praktis dengan instruktur ahli</td>
                    <td class="px-6 py-4 text-slate-900 font-bold">5</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2 justify-center">
                            <button onclick="openEditModal(3, 'Workshop', 'Sesi pelatihan praktis dengan instruktur ahli')"
                                class="px-4 py-2 bg-blue-50 text-blue-600 rounded-xl font-bold text-sm hover:bg-blue-100 transition">
                                Edit
                            </button>
                            <button onclick="openDeleteModal(3, 'Workshop')"
                                class="px-4 py-2 bg-red-50 text-red-600 rounded-xl font-bold text-sm hover:bg-red-100 transition">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Category 4 -->
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-900 font-medium">4</td>
                    <td class="px-6 py-4">
                        <span class="px-4 py-2 bg-orange-50 text-orange-700 rounded-full font-bold text-sm">Pameran</span>
                    </td>
                    <td class="px-6 py-4 text-slate-600 text-sm">Pameran produk, karya seni, dan inovasi</td>
                    <td class="px-6 py-4 text-slate-900 font-bold">3</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2 justify-center">
                            <button onclick="openEditModal(4, 'Pameran', 'Pameran produk, karya seni, dan inovasi')"
                                class="px-4 py-2 bg-blue-50 text-blue-600 rounded-xl font-bold text-sm hover:bg-blue-100 transition">
                                Edit
                            </button>
                            <button onclick="openDeleteModal(4, 'Pameran')"
                                class="px-4 py-2 bg-red-50 text-red-600 rounded-xl font-bold text-sm hover:bg-red-100 transition">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Category 5 -->
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-900 font-medium">5</td>
                    <td class="px-6 py-4">
                        <span class="px-4 py-2 bg-pink-50 text-pink-700 rounded-full font-bold text-sm">Olahraga</span>
                    </td>
                    <td class="px-6 py-4 text-slate-600 text-sm">Kompetisi dan acara olahraga</td>
                    <td class="px-6 py-4 text-slate-900 font-bold">6</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2 justify-center">
                            <button onclick="openEditModal(5, 'Olahraga', 'Kompetisi dan acara olahraga')"
                                class="px-4 py-2 bg-blue-50 text-blue-600 rounded-xl font-bold text-sm hover:bg-blue-100 transition">
                                Edit
                            </button>
                            <button onclick="openDeleteModal(5, 'Olahraga')"
                                class="px-4 py-2 bg-red-50 text-red-600 rounded-xl font-bold text-sm hover:bg-red-100 transition">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Add/Edit Category Modal -->
<div id="categoryModal"
    class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-6">
    <div class="bg-white w-full max-w-lg rounded-3xl shadow-2xl overflow-hidden">
        <!-- Modal Header -->
        <div class="bg-gradient-to-r from-indigo-600 to-indigo-700 px-8 py-6 flex justify-between items-center">
            <h2 id="modalTitle" class="text-xl font-bold text-white">Tambah Kategori Baru</h2>
            <button onclick="closeCategoryModal()" class="text-white hover:bg-indigo-700 p-2 rounded-lg">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="p-8">
            <form class="space-y-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Nama Kategori
                        *</label>
                    <input id="categoryName" type="text" placeholder="Contoh: Seminar"
                        class="w-full px-5 py-3 bg-white border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Deskripsi
                        Singkat</label>
                    <textarea id="categoryDesc" rows="3" placeholder="Deskripsi kategori event ini..."
                        class="w-full px-5 py-3 bg-white border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium"></textarea>
                </div>

                <div class="flex gap-4 justify-end pt-4">
                    <button type="button" onclick="closeCategoryModal()"
                        class="px-6 py-3 border-2 border-slate-200 text-slate-700 rounded-xl font-bold hover:bg-slate-50 transition">
                        Batal
                    </button>
                    <button type="button" onclick="saveCategory()"
                        class="px-8 py-3 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-200">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal"
    class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-6">
    <div class="bg-white w-full max-w-sm rounded-3xl shadow-2xl overflow-hidden">
        <!-- Modal Header -->
        <div class="bg-gradient-to-r from-red-600 to-red-700 px-8 py-6">
            <h2 class="text-xl font-bold text-white">Konfirmasi Penghapusan</h2>
        </div>

        <!-- Modal Body -->
        <div class="p-8 text-center">
            <svg class="w-16 h-16 text-red-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4v2m0 0H5m12 0v-2m0 2H5m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <p class="text-slate-600 mb-2">Anda yakin ingin menghapus kategori:</p>
            <p id="deleteItemName" class="text-lg font-bold text-slate-900 mb-6"></p>
            <p class="text-sm text-slate-500 mb-6">Tindakan ini tidak dapat dibatalkan.</p>

            <div class="flex gap-4 justify-center">
                <button onclick="closeDeleteModal()"
                    class="px-6 py-3 border-2 border-slate-200 text-slate-700 rounded-xl font-bold hover:bg-slate-50 transition">
                    Batal
                </button>
                <button onclick="confirmDelete()"
                    class="px-6 py-3 bg-red-600 text-white rounded-xl font-bold hover:bg-red-700 transition">
                    Hapus
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('extra-styles')
<style>
    /* Add smooth transitions for modals */
    #categoryModal,
    #deleteModal {
        transition: opacity 0.3s ease;
    }

    #categoryModal.hidden,
    #deleteModal.hidden {
        opacity: 0;
        pointer-events: none;
    }

    #categoryModal.flex,
    #deleteModal.flex {
        opacity: 1;
    }
</style>
@endsection

@section('extra-scripts')
<script>
    let currentEditId = null;

    function openAddModal() {
        document.getElementById('modalTitle').textContent = 'Tambah Kategori Baru';
        document.getElementById('categoryName').value = '';
        document.getElementById('categoryDesc').value = '';
        currentEditId = null;
        document.getElementById('categoryModal').classList.remove('hidden');
        document.getElementById('categoryModal').classList.add('flex');
    }

    function openEditModal(id, name, desc) {
        document.getElementById('modalTitle').textContent = 'Edit Kategori: ' + name;
        document.getElementById('categoryName').value = name;
        document.getElementById('categoryDesc').value = desc;
        currentEditId = id;
        document.getElementById('categoryModal').classList.remove('hidden');
        document.getElementById('categoryModal').classList.add('flex');
    }

    function closeCategoryModal() {
        document.getElementById('categoryModal').classList.add('hidden');
        document.getElementById('categoryModal').classList.remove('flex');
    }

    function saveCategory() {
        const name = document.getElementById('categoryName').value.trim();
        if (!name) {
            alert('Nama kategori tidak boleh kosong!');
            return;
        }
        alert(currentEditId ? `Kategori "${name}" berhasil diperbarui!` : `Kategori "${name}" berhasil ditambahkan!`);
        closeCategoryModal();
    }

    function openDeleteModal(id, name) {
        document.getElementById('deleteItemName').textContent = name;
        currentEditId = id;
        document.getElementById('deleteModal').classList.remove('hidden');
        document.getElementById('deleteModal').classList.add('flex');
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
        document.getElementById('deleteModal').classList.remove('flex');
    }

    function confirmDelete() {
        const name = document.getElementById('deleteItemName').textContent;
        alert(`Kategori "${name}" berhasil dihapus!`);
        closeDeleteModal();
    }
</script>
@endsection
