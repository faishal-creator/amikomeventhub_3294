<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\CategoryController;



// Halaman Home (Menggantikan rute welcome bawaan Laravel)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Detail Event (Contoh dengan ID statis sesuai gambar)
Route::get('/event/1', [EventController::class, 'show'])->name('events.show');

// Checkout & Tiket
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    
    // Dashboard Admin (URL: /admin)
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // List Event Admin (URL: /admin/events)
    Route::get('/events', [AdminEventController::class, 'index'])->name('events.index');
    
    // Kategori Admin (URL: /admin/categories)
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    
    // Anda bisa menambahkan rute admin lainnya di sini...
});


Route::get('/kontak', function () { return view('contact'); });
Route::get('/profil', function () { return view('profil'); });
Route::get('/katalog', function () { return view('katalog'); });
Route::get('/bantuan', function () { return view('bantuan'); });