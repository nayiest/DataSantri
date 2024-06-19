<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\PrestasiController;

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
Route::get('/dashboard',[SantriController::class, 'index'])->name('santri');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); 
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

     
    Route::get('/santri',[SantriController::class, 'index'])->name('santri');
Route::get('/dashboard',[SantriController::class, 'index'])->name('datasantri');
Route::get('/santri/addsantri',[SantriController::class, 'create'])->name('tambahsantri');
Route::post('/santri/store',[SantriController::class, 'store'])->name('storetambah');
Route::get('/santri/formeditsantri/{id}',[SantriController::class, 'edit'])->name('editsantri');
Route::put('/santri/updatesantri/{id}',[SantriController::class, 'update'])->name('updatesantri');
Route::get('show/{id}',[SantriController::class, 'show'])->name('detailsantri');
Route::get('/santri/hapussantri/{id}',[SantriController::class, 'destroy'])->name('hapussantri'); 
});


//pelanggaran
route::get('/pelanggaran',[pelanggarancontroller::class, 'index'])->name('pelanggaran');
route::get('/pelanggaran/addpelanggaran', [pelanggarancontroller::class, 'create'])->name('tambahpelanggaran');
Route::post('/pelanggaran/store',[pelanggaranController::class, 'store'])->name('storepelanggaran');

// Prestasi
Route::get('/prestasi',[PrestasiController::class,'index'])->name('prestasi');
Route::get('/prestasi/formtambahprestasi',[PrestasiController::class,'create'])->name('tambahprestasi');
Route::post('/prestasi/prosestambah',[PrestasiController::class,'store'])->name('storeprestasi');
Route::get('/prestasi/formeditprestasi/{id}',[prestasiController::class, 'edit'])->name('editprestasi');
Route::put('/prestasi/updateprestasi/{id}',[prestasiController::class, 'update'])->name('updateprestasi');
Route::get('show/{id}',[prestasiController::class, 'show'])->name('detailprestasi');
Route::get('/prestasi/hapusprestasi/{id}',[prestasiController::class, 'destroy'])->name('hapusprestasi'); 
