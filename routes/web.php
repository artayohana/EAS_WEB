<?php

use App\Http\Controllers\ctbuku;
use App\Http\Controllers\ctlogin;
use App\Http\Controllers\ctdaftar;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[ctlogin::class, 'index']); // LOGIN
Route::post('/proses',[ctlogin::class, 'proses']); // PROSES LOGIN
Route::get('/logout',[ctlogin::class, 'logout'])->name('logout'); // LOGOUT

Route::get('/regis',[ctdaftar::class, 'index']); // REGISFORM
Route::post('/regis',[ctdaftar::class, 'prosesdaftar']); // PROSES REGISTRASI

Route::get('/dashboard',[ctbuku::class, 'index']); // DASHBOARD
Route::get('/pengaturan',[ctbuku::class, 'settings']); // SETTINGS
Route::get('/cetak',[ctbuku::class, 'cetakpage']); // CETAK DOKUMEN
Route::get('/cetak/pdf',[ctbuku::class, 'pdf']); // CETAK PDF
Route::get('/cetak/excel',[ctbuku::class, 'excel']); // CETAK EXCEL
Route::get('/search',[ctbuku::class, 'search']); // SEARCH
Route::get('/search',[ctbuku::class, 'search']);
Route::get('/versi',[ctbuku::class, 'versi']); // VERSI APLIKASI
Route::get('/delete/{id}',[ctbuku::class, 'delete']); // MENGHAPUS
Route::get('/chart',[ctbuku::class, 'chart']); // CHART

Route::post('/proses',[ctbuku::class,'proses']); // TAMBAH DATA

Route::post('/edit/{id}',[ctbuku::class,'update']); // EDIT DATA




