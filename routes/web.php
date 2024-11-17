<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiografiDireksiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HukumController;
use App\Http\Controllers\InfoRegistrasiController;
use App\Http\Controllers\InfoTagihanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\TeknisController;
use App\Http\Controllers\TentangPdamController;
use App\Http\Middleware\BlockDirectLoginAccess;
use App\Http\Middleware\EnsureAuth;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/berita', 'berita')->name('berita');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/visi-misi', 'visi')->name('visi');
    Route::get('/struktur-organisasi', 'struktur')->name('struktur');
    Route::get('/produk-hukum', 'hukum')->name('hukum');
    Route::get('/galeri', 'galeri')->name('galeri');
    Route::get('/aspek-pelayanan', 'pelayanan')->name('pelayanan');
    Route::get('/aspek-teknis', 'teknis')->name('teknis');
    Route::get('/aspek-manajemen', 'manajemen')->name('manajemen');
    Route::get('/aspek-keuangan', 'keuangan')->name('keuangan');
    Route::get('/registrasi', 'registrasi')->name('registrasi');
    Route::get('/biografi-direksi', 'biografi_direksi')->name('biografi_direksi');

});

Route::get('/lock', function () {
    return view('block.index');
})->name('block');

Route::prefix('admin')->group(function () {});

Route::middleware([BlockDirectLoginAccess::class])->group(function () {

    Route::middleware([RedirectIfAuthenticated::class])->group(function () {
        Route::get('auth/login', [AuthController::class, 'loginForm'])->name('login');
        Route::post('auth/login', [AuthController::class, 'login']);
    });

    Route::middleware([EnsureAuth::class])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [TampilanController::class, 'dashboard'])->name('dashboard');
        Route::get('/tampilan', [TampilanController::class, 'TampilanSlide'])->name('Tampilan');

        Route::resource('/users', AuthController::class);
        Route::resource('/roles', RoleController::class);
        Route::resource('/slides', SlideController::class);
        Route::resource('/jabatans', JabatanController::class);
        Route::resource('/karyawans', KaryawanController::class);
        Route::resource('/abouts', AboutController::class);
        Route::resource('/blogs', BlogController::class);
        Route::resource('/contacts', ContactController::class);
        Route::resource('team', TeamMemberController::class);
        Route::resource('pelayanans', PelayananController::class);
        Route::resource('strukturs', StrukturController::class);
        Route::resource('teknis', TeknisController::class);
        Route::resource('manajemen', ManajemenController::class);
        Route::resource('keuangan', KeuanganController::class);
        Route::resource('registrasis', RegistrasiController::class);
        Route::resource('info-registrasis', InfoRegistrasiController::class);
        Route::resource('info_tagihans', InfoTagihanController::class);
        Route::resource('biografi', BiografiDireksiController::class);
        Route::resource('tentang-pdams', TentangPdamController::class);
    });
});

Route::post('/registrasi', [RegistrasiController::class, 'registrasis'])->name('registrasis');

Route::post('/contact', [ContactController::class,'contact'])->name('contact');

Route::post('/kirim' , [HukumController::class, 'store']);