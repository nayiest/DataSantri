<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PelanggaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});

Route::get('/datasantri',[SantriController::class, 'index'])->name('santri');
// Route::get('/santri/addsantri',[SantriController::class, 'create'])->name('tambahsantri');
// Route::post('/santri/store',[SantriController::class, 'store'])->name('storetambah');
Route::get('/santri/formaddsantri',[SantriController::class, 'create'])->name('tambahsantri');
Route::get('/santri/prosestambahsantri',[SantriController::class, 'store'])->name('storetambahsantri');

Route::get('/datasantri',[SantriController::class, 'index'])->name('dashboarddata');

Route::get('/datasantri',[SantriController::class, 'index'])->name('santri');

Route::get('/santri/addsantri',[SantriController::class, 'create'])->name('tambahsantri');
Route::post('/santri/store',[SantriController::class, 'store'])->name('storetambah');





// PELANGGARAN
Route::resource('pelanggaran', PelanggaranController::class);
Route::post('/pelanggaran/updatepelanggaran',[PelanggaranController::class, 'update'])->name('updatepelanggaranmodal');
Route::get('/pelanggaran/hapuspelanggaran/{id}',[PelanggaranController::class, 'destroy'])->name('hapuspelanggaran');
Route::get('/pelanggaran',[PelanggaranController::class, 'index'])->name('indexpelanggaran');