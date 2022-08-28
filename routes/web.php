<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\OperController;
use App\Http\Controllers\PelController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\LaporanSewaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('home2');
// });

// Route::get('/home', function () {
//     return view('home');
// });

//route admin
Route::get('/a',[SewaController::class, 'tampilan']);

//route alaberat
Route::get('/alatberat',[AlatController::class, 'index'])->middleware('verAdmin');
Route::get('/alatberat/form',[AlatController::class, 'create'])->middleware('verAdmin');
Route::post('/alatberat/store',[AlatController::class, 'store'])->middleware('verAdmin');
Route::get('/alatberat/edit/{id}',[AlatController::class, 'edit'])->middleware('verAdmin');
Route::put('/alatberat/{id}',[AlatController::class, 'update'])->middleware('verAdmin');
Route::delete('/alatberat/{id}',[AlatController::class, 'destroy'])->middleware('verAdmin');

//route merk
Route::get('/merk',[MerkController::class, 'index'])->middleware('verAdmin');
Route::get('/merk/form',[MerkController::class, 'create'])->middleware('verAdmin');
Route::post('/merk/store',[MerkController::class, 'store'])->middleware('verAdmin');
Route::get('/merk/edit/{id}',[MerkController::class, 'edit'])->middleware('verAdmin');
Route::put('/merk/{id}',[MerkController::class, 'update'])->middleware('verAdmin');
Route::delete('/merk/{id}',[MerkController::class, 'destroy'])->middleware('verAdmin');

//route Operator
Route::get('/ope',[OperController::class, 'index'])->middleware('verAdmin');
Route::get('/ope/form',[OperController::class, 'create'])->middleware('verAdmin');
Route::post('/ope/store',[OperController::class, 'store'])->middleware('verAdmin');
Route::get('/ope/edit/{id}',[OperController::class, 'edit'])->middleware('verAdmin');
Route::put('/ope/{id}',[OperController::class, 'update'])->middleware('verAdmin');
Route::delete('/ope/{id}',[OperController::class, 'destroy'])->middleware('verAdmin');

//route Pelanggan
Route::get('/pelanggan',[PelController::class, 'index'])->middleware('verAdmin');
Route::get('/pelanggan/form',[PelController::class, 'create'])->middleware('verAdmin');
Route::post('/pelanggan/store',[PelController::class, 'store'])->middleware('verAdmin');
Route::get('/pelanggan/edit/{id}',[PelController::class, 'edit'])->middleware('verAdmin');
Route::put('/pelanggan/{id}',[PelController::class, 'update'])->middleware('verAdmin');
Route::delete('/pelanggan/{id}',[PelController::class, 'destroy'])->middleware('verAdmin');

//route Sewa
Route::get('/sewa',[SewaController::class, 'index'])->middleware('verAdmin');
Route::get('/sewa/form',[SewaController::class, 'create'])->middleware('verAdmin');
Route::post('/sewa/store',[SewaController::class, 'store'])->middleware('verAdmin');
Route::get('/sewa/edit/{id}',[SewaController::class, 'edit'])->middleware('verAdmin');
Route::put('/sewa/{id}',[SewaController::class, 'update'])->middleware('verAdmin');
Route::delete('/sewa/{id}',[SewaController::class, 'destroy'])->middleware('verAdmin');

//route laporan sewa
Route::get('/laporan_sewa',[LaporanSewaController::class, 'index'])->middleware('verAdmin');
Route::get('/laporan_sewa/pdf',[LaporanSewaController::class, 'cetakpdf'])->middleware('verAdmin');

//route dashboard
Route::get('/admin',[HomeController::class, 'index'])->middleware('verAdmin')->name('home');

//routeuser
Route::get('/',[HomeController::class, 'beranda'])->name('user');
Route::get('/beranda',[HomeController::class, 'awal']);
Route::get('/kategori',[HomeController::class, 'kategori']);
// Route::get('/sewa-user',[SewaController::class, 'sewauser']);
Route::get('/sewa-user',[SewaController::class, 'tambah']);
Route::post('/sewa-user/userstore',[SewaController::class, 'userstore']);
// Route::post('/sewa-user/upload',[SewaController::class, 'indexupload']);

//route pembayaran
Route::get('/pembayaran',[PembayaranController::class, 'index'])->middleware('verAdmin');
Route::get('/pembayaran/upload',[PembayaranController::class, 'upload'])->middleware('verAdmin');
// Route::get('pembayaran/{$id}',[PembayaranController::class, 'status'])->middleware('verAdmin');
// Route::get('sewa/stok/{$id}',[SewaController::class, 'stok']);


//Route Update Stock
Route::get('/stock/{ID}',[SewaController::class, 'stock']);
//route bayar
Route::get('/bayar',[PembayaranController::class, 'bayar']);
// Route::post('/faktur/{$id}',[PembayaranController::class, 'fakturid']);
// Route::put('/faktur/{$id}',[PembayaranController::class, 'print']);
Route::get('/bayarsewa/{id}',[PembayaranController::class, 'bayaredit']);
Route::get('/faktur/cetak/{ID}',[PembayaranController::class, 'faktur']);
Route::put('/bayarsewa/{id}',[PembayaranController::class, 'update']);
route::get('/status/{$id}',[PembayaranController::class, 'statusedit']);
    
Route::post('/pembayaran/{id}',[PembayaranController::class,'UpdateStatus']);
Route::post('/status-kembali/{id}',[PembayaranController::class,'UpdateStatusKembali']);

//route riwayat
Route::get('/riwayat',[PembayaranController::class, 'riwayat']);

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');    
