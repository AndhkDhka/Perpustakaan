<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return "<h1>Laravel Berhasil Online!</h1><p>Vercel sudah oke, tinggal setting database nanti.</p>";
});
// ================= PUBLIC =================
// use App\Http\Controllers\Public\HomeController;
// use App\Http\Controllers\Public\ProfilController;
// use App\Http\Controllers\Public\VisiMisiController;
// use App\Http\Controllers\Public\KontakController;
// use App\Http\Controllers\Public\PpdbController;
// use App\Http\Controllers\Public\BeritaController as PublicBeritaController;

// // ================= ADMIN =================
// use App\Http\Controllers\Admin\DashboardController;
// use App\Http\Controllers\Admin\BeritaController;
// use App\Http\Controllers\Admin\ProfileController;

// /*
// |--------------------------------------------------------------------------
// | PUBLIC AREA
// |--------------------------------------------------------------------------
// */
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
// Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi');
// Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

// Route::get('/ppdb', [PpdbController::class, 'index'])->name('ppdb.index');
// Route::post('/ppdb/submit', [PpdbController::class, 'submit'])->name('ppdb.submit');

// /*
// |--------------------------------------------------------------------------
// | BERITA PUBLIK
// |--------------------------------------------------------------------------
// */
// Route::prefix('berita')->name('berita.')->group(function () {
//     Route::get('/', [PublicBeritaController::class, 'index'])->name('index');
//     Route::get('/{slug}', [PublicBeritaController::class, 'show'])->name('show');
// });

