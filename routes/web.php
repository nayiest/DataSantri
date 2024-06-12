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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function() {
    return view('welcome');
});

Route::get('/santri',[SantriController::class, 'index'])->name('santri');
Route::get('/santri/addsantri',[SantriController::class, 'create'])->name('tambahsantri');
Route::post('/santri/store',[SantriController::class, 'store'])->name('storetambah');
Route::get('/santri/formeditsantri/{id}',[SantriController::class, 'edit'])->name('editsantri');
Route::put('/santri/updatesantri/{id}',[SantriController::class, 'update'])->name('updatesantri');
Route::get('show/{id}',[SantriController::class, 'show'])->name('detailsantri');
Route::get('/santri/hapussantri/{id}',[SantriController::class, 'destroy'])->name('hapussantri'); 

//pelanggaran
route::get('/pelanggaran',[pelanggarancontroller::class, 'index'])->name('pelanggaran');
route::get('/pelanggaran/addpelanggaran', [pelanggarancontroller::class, 'create'])->name('tambahpelanggaran');
Route::post('/pelanggaran/store',[pelanggaranController::class, 'store'])->name('storepelanggaran');