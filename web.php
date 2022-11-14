<?php

use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UploadController;
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
Route::get('/dasboard',[DasboardController::class,'dasboard']);
Route::get('/transaksi',[TransaksiController::class,'tampil']);
Route::get('/transaksitampil',[CardController::class,'tampill'])->name('tampill');
Route::post('/transaksitampil',[CardController::class,'tambahtrx'])->name('tambahtrx');
Route::get('/laporan',[LaporanController::class,'laporan']);
Route::get('/produktampil',[BarangmasukController::class,'produktmpl'])->name('produktmpl');
Route::POST('/produkmasuk',[BarangmasukController::class,'produkmasuk'])->name('produkmasuk');
Route::post('/delete/{id}',[CardController::class,'delete'])->name('delete');
Route::get('/tmplupdate/{id}',[BarangmasukController::class,'tmplupdate'])->name('tmplupdate');
Route::post('/tmplupdatee/{id}',[ProfilController::class,'tmplupdatee'])->name('tmplupdatee');
Route::get('/profil',[ProfilController::class,'profiltmpl'])->name('profiltmpl');
Route::post('/profill',[ProfilController::class,'profiltmpll'])->name('profiltmpll');
Route::get('/upload/create',[UploadController::class,'upload'])->name('upload');
Route::post('/upload/create',[UploadController::class,'store'])->name('store');
Route::get('/upload/{upload}',[UploadController::class,'show'])->name('show');
