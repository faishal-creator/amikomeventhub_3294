<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Admin Utama
        \App\Models\User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Insert Kategori Event
        $category = \App\Models\Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $category2 = \App\Models\Category::firstOrCreate([
            'name' => 'Entertaiment',
            'slug' => 'entertaiment',
        ]);

        $category3 = \App\Models\Category::firstOrCreate([
            'name' => 'Workshop',
            'slug' => 'workshop',
        ]);

        // 3. Insert Sampel Events
        \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'Hackaton - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!',
            'date' => '2026-05-05 10:00:00','location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-2.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan

            teknologi masa depan bersama para ahli di bidangnya.',

            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-3.png',
        ]);

        // 4
\App\Models\Event::create([
    'category_id' => $category->id,
    'title' => 'Digital Marketing Seminar',
    'description' => 'Belajar strategi pemasaran digital modern.',
    'date' => '2026-06-05 13:00:00',
    'location' => 'Ruang Seminar',
    'price' => 50000,
    'stock' => 80,
    'poster_path' => 'posters/event-4.png',
]);

// 5
\App\Models\Event::create([
    'category_id' => $category3->id,
    'title' => 'Laravel Bootcamp',
    'description' => 'Belajar Laravel dari dasar sampai mahir.',
    'date' => '2026-06-10 09:00:00',
    'location' => 'Lab Komputer',
    'price' => 100000,
    'stock' => 50,
    'poster_path' => 'posters/event-5.png',
]);

// 6
\App\Models\Event::create([
    'category_id' => $category3->id,
    'title' => 'Mobile App Workshop',
    'description' => 'Membuat aplikasi mobile menggunakan Flutter.',
    'date' => '2026-06-12 09:00:00',
    'location' => 'Lab Mobile',
    'price' => 90000,
    'stock' => 50,
    'poster_path' => 'posters/event-6.png',
]);

// 7 (bonus biar lebih keren)
\App\Models\Event::create([
    'category_id' => $category2->id,
    'title' => 'E-Sport U-Champ',
    'description' => 'Turnamen game antar mahasiswa.',
    'date' => '2026-06-15 15:00:00',
    'location' => 'Auditorium',
    'price' => 30000,
    'stock' => 200,
    'poster_path' => 'posters/event-7.png',
]);
    }
}