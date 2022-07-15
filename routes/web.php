<?php

use App\Models\berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\BisnissenatController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProgramkerjaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use League\CommonMark\Normalizer\SlugNormalizer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/tentang', function () {
    return view('Tentang', [
        "title" => "TENTANG"
    ]);
});

Route::get('/struktur', function () {
    return view('Struktur_Organisasi', [
        "title" => "STRUKTUR ORGANISASI"
    ]);
});

Route::get('/produksenat', function () {
    return view('Produk_Senat', [
        "title" => "PRODUK SENAT"
    ]);
});





Route::get('/b2', function () {
    return view('Beranda2');
});
Route::get('/peraturansenat1', function () {
    return view('Peraturan_senat1', [
        "title" => "PRODUK SENAT"
    ]);
});
Route::get('/peraturansenat2', function () {
    return view('ps2', [
        "title" => "PRODUK SENAT"
    ]);
});
Route::get('/peraturansenat3', function () {
    return view('ps3', [
        "title" => "PRODUK SENAT"
    ]);
});
Route::get('/peraturansenat4', function () {
    return view('ps4', [
        "title" => "PRODUK SENAT"
    ]);
});
Route::get('/prosedur1', function () {
    return view('Prosedur1', [
        "title" => "PROSES BISNIS SENAT"
    ]);
});
Route::get('/prosedur2', function () {
    return view('Prosedur2', [
        "title" => "PROSES BISNIS SENAT"
    ]);
});
Route::get('/prosedur3', function () {
    return view('Prosedur3', [
        "title" => "PROSES BISNIS SENAT"
    ]);
});
Route::get('/prosedur4', function () {
    return view('Prosedur4', [
        "title" => "PROSES BISNIS SENAT"
    ]);
});
Route::get('/prosedur5', function () {
    return view('Prosedur5', [
        "title" => "PROSES BISNIS SENAT"
    ]);
});
Route::get('/prosedur6', function () {
    return view('Prosedur6', [
        "title" => "PROSES BISNIS SENAT"
    ]);
});
Route::get('/suratprosedur1', function () {
    return view('psdr1', [
        "title" => "PROSES BISNIS SENAT"
    ]);
});
Route::get('/suratprosedur2', function () {
    return view('psdr2', [
        "title" => "PROSES BISNIS SENAT"
    ]);
});
Route::get('/suratprosedur3', function () {
    return view('psdr3', [
        "title" => "PROSES BISNIS SENAT"
    ]);
});
Route::get('/suratprosedur4', function () {
    return view('psdr4', [
        "title" => "PROSES BISNIS SENAT"
    ]);
});
Route::get('/suratprosedur5', function () {
    return view('psdr5', [
        "title" => "PROSES BISNIS SENAT"
    ]);
});
Route::get('/suratprosedur6', function () {
    return view('psdr6', [
        "title" => "PROSES BISNIS SENAT"
    ]);
});
Route::get('/beranda2', function () {
    return view('Beranda2', []);
});

//halaman berita


Route::get('/login', [LoginController::class, 'login']);
Route::post('/loginproses', [LoginController::class, 'loginproses']);

Route::get('/register', [LoginController::class, 'register']);
Route::post('/registeruser', [LoginController::class, 'registeruser']);

Route::get('/dashboard', function () {
    return view('dashboard.maindashboard', [
        "title" => 'dashboard'

    ]);
});
Route::get('/adm', function () {
    return view('dashboard.adm');
});
Route::get('/mainlayout', function () {
    return view('layout.dashboard');
});
Route::get('/aspirasi', [AspirasiController::class, 'aspirasi']);
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/user', [UserController::class, 'user']);
Route::get('/tambahberita', [BeritaController::class, 'tambahberita']);
Route::post('/kirimberita', [BeritaController::class, 'kirimberita']);
Route::get('/tampilkanberita/{id}', [BeritaController::class, 'tampilkanberita']);
Route::post('/ubahberita/{id}', [BeritaController::class, 'ubahberita']);
Route::get('/hapusberita/{id}', [BeritaController::class, 'hapusberita']);
Route::get('/hapusaspirasi/{id}', [AspirasiController::class, 'hapusaspirasi']);
Route::get('/aspirasisenat', [AspirasiController::class, 'aspirasisenat']);
Route::post('/kirimaspirasi', [AspirasiController::class, 'kirimaspirasi']);
Route::get('/cetakaspirasi', [AspirasiController::class, 'cetakaspirasi']);



Route::get('/berita1', function () {
    return view('berita1', [
        "title" => "BERANDA"
    ]);
});
Route::get('/peraturansenat', [DokumenController::class, 'peraturansenat'])->name('peraturansenat');
Route::get('/tambahperaturan', [DokumenController::class, 'tambahperaturan']);
Route::post('/kirimperaturan', [DokumenController::class, 'kirimperaturan']);
Route::get('/tampilkanperaturan/{id}', [DokumenController::class, 'tampilkanperaturan']);
Route::post('/ubahperaturan/{id}', [DokumenController::class, 'ubahperaturan']);
Route::get('/hapusperaturan/{id}', [DokumenController::class, 'hapusperaturan']);
Route::get('/produksenatopen', [DokumenController::class, 'produksenatopen']);
Route::get('/', [BeritaController::class, 'beritadepan']);
Route::get('/berita-open/{id}', [BeritaController::class, 'beritaopen']);



Route::get('/sksenat', [DokumenController::class, 'sksenat'])->name('sksenat');
Route::get('/tambahsk', [DokumenController::class, 'tambahsk']);
Route::post('/kirimsk', [DokumenController::class, 'kirimsk']);
Route::get('/tampilkansk/{id}', [DokumenController::class, 'tampilkansk']);
Route::post('/ubahsk/{id}', [DokumenController::class, 'ubahsk']);
Route::get('/hapussk/{id}', [DokumenController::class, 'hapussk']);
Route::get('/sksenatopen', [DokumenController::class, 'skopen']);

Route::get('/spsenat', [DokumenController::class, 'spsenat'])->name('spsenat');
Route::get('/tambahsp', [DokumenController::class, 'tambahsp']);
Route::post('/kirimsp', [DokumenController::class, 'kirimsp']);
Route::get('/tampilkansp/{id}', [DokumenController::class, 'tampilkansp']);
Route::post('/ubahsp/{id}', [DokumenController::class, 'ubahsp']);
Route::get('/hapussp/{id}', [DokumenController::class, 'hapussp']);
Route::get('/spsenatopen', [DokumenController::class, 'spopen']);

Route::get('/bisnis', [BisnissenatController::class, 'bisnis'])->name('bisnis');
Route::get('/tambahbisnis', [BisnissenatController::class, 'tambahbisnis']);
Route::post('/kirimbisnis', [BisnissenatController::class, 'kirimbisnis']);
Route::get('/tampilkanbisnis/{id}', [BisnissenatController::class, 'tampilkanbisnis']);
Route::post('/ubahbisnis/{id}', [BisnissenatController::class, 'ubahbisnis']);
Route::get('/hapusbisnis/{id}', [BisnissenatController::class, 'hapusbisnis']);
Route::get('/bisnissenat', [BisnissenatController::class, 'bisnissenat']);

Route::get('/programkerja', [ProgramkerjaController::class, 'programkerja'])->name('programkerja');
Route::get('/tambahkerja', [ProgramkerjaController::class, 'tambahkerja']);
Route::post('/kirimkerja', [ProgramkerjaController::class, 'kirimkerja']);
Route::get('/tampilkankerja/{id}', [ProgramkerjaController::class, 'tampilkankerja']);
Route::post('/ubahkerja/{id}', [ProgramkerjaController::class, 'ubahkerja']);
Route::get('/hapuskerja/{id}', [ProgramkerjaController::class, 'hapuskerja']);
Route::get('/programkerjasenat', [ProgramkerjaController::class, 'programkerjasenat']);

Route::post("/logout", [LoginController::class, "store"])->name("logout");
