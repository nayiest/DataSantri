<?php
use App\Http\Controllers\SantriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PelanggaranController;    
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\mutabaahController; 
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\AuthController;    
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); 
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// DASHBOARD
Route::get('/',[DashboardController::class, 'index'])->name('dashboard');

// DATA SANTRI
Route::get('/santri',[SantriController::class, 'index'])->name('santri');
Route::get('/santri/addsantri',[SantriController::class, 'create'])->name('tambahsantri');
Route::post('/santri/store',[SantriController::class, 'store'])->name('storetambah');
Route::get('/santri/formeditsantri/{id}',[SantriController::class, 'edit'])->name('editsantri'); 
Route::put('/santri/updatesantri/{id}',[SantriController::class, 'update'])->name('updatesantri');
Route::get('/santri/show/{id}',[SantriController::class, 'show'])->name('detailsantri');
Route::get('/santri/hapussantri/{id}',[SantriController::class, 'destroy'])->name('hapussantri');

//pelanggaran
route::get('/pelanggaran',[pelanggarancontroller::class, 'index'])->name('pelanggaran');
route::get('/pelanggaran/addpelanggaran', [pelanggarancontroller::class, 'create'])->name('tambahpelanggaran');
Route::post('/pelanggaran/store',[pelanggaranController::class, 'store'])->name('storepelanggaran');
Route::get('/pelanggaran/formeditpelanggaran/{id}',[pelanggaranController::class, 'edit'])->name('editpelanggaran'); 
Route::put('/pelanggaran/updatepelanggaran/{id}',[pelanggaranController::class, 'update'])->name('updatepelanggaran');
Route::get('show/{id}',[pelanggaranController::class, 'show'])->name('detailpelanggaran');
Route::get('/pelanggaran/hapuspelanggaran/{id}',[pelanggaranController::class, 'destroy'])->name('hapuspelanggaran');

//prestasi
route::get('/prestasi',[prestasicontroller::class, 'index'])->name('prestasi');
route::get('/prestasi/addprestasi', [prestasicontroller::class, 'create'])->name('tambahprestasi');
Route::post('/prestasi/store',[prestasiController::class, 'store'])->name('storeprestasi');
Route::get('/prestasi/formeditprestasi/{id}',[prestasiController::class, 'edit'])->name('editprestasi'); 
Route::put('/prestasi/updateprestasi/{id}',[prestasiController::class, 'update'])->name('updateprestasi');
Route::get('show/{id}',[prestasiController::class, 'show'])->name('detailprestasi');
Route::get('/prestasi/hapusprestasi/{id}',[prestasiController::class, 'destroy'])->name('hapusprestasi');



//mutabaah
route::get('/mutabaah',[mutabaahcontroller::class, 'index'])->name('mutabaah');

//nilai
route::get('/nilai',[nilaicontroller::class, 'index'])->name('nilai');
route::get('/nilai/addnilai', [nilaicontroller::class, 'create'])->name('tambahnilai');
Route::get('/nilai/formeditnilainiali/{id}',[nilaicontroller::class, 'edit'])->name('editnilai'); 
Route::put('/nilai/updatenilainilai/{id}',[nilaicontroller::class, 'update'])->name('updatenilai');
Route::get('/nilai/hapusnilainilai/{id}',[nilaicontroller::class, 'destroy'])->name('hapusnilai');
Route::post('/nilai/nilai',[nilaicontroller::class, 'store'])->name('storenilai');

//tahajud
route::get('/mutabaah/addmutabaahtahajud', [mutabaahcontroller::class, 'create2'])->name('tambahmutabaahtahajud');
Route::get('/mutabaah/formeditmutabaahtahajud/{id}',[mutabaahcontroller::class, 'edit'])->name('editmutabaahtahajud'); 
Route::put('/mutabaah/updatemutabaahtahajud/{id}',[mutabaahcontroller::class, 'update'])->name('updatemutabaahtahajud');
Route::get('/mutabaah/hapusmutabaahtahajud/{id}',[mutabaahcontroller::class, 'destroy'])->name('hapusmutabaahtahajud');
Route::post('/mutabaah/mutabaahtahajud',[mutabaahcontroller::class, 'store'])->name('storemutabaahtahajud');

//shalat jamaah
route::get('/mutabaah/addmutabaahdzikir', [mutabaahcontroller::class, 'create'])->name('tambahmutabaahdzikir');
route::get('/mutabaah/addmutabaahsholat_jamaah', [mutabaahcontroller::class, 'create'])->name('tambahmutabaahsholat_jamaah');
route::get('/mutabaah/addmutabaahWO', [mutabaahcontroller::class, 'create'])->name('tambahmutabaahWO');
Route::get('/mutabaah/formeditmutabaah/{id}',[mutabaahcontroller::class, 'edit'])->name('editmutabaah'); 
Route::put('/mutabaah/updatemutabaah/{id}',[mutabaahcontroller::class, 'update'])->name('updatemutabaah');
Route::get('show/{id}',[mutabaahcontroller::class, 'show'])->name('detailprestasi');
Route::get('/mutabaah/hapusmutabaah/{id}',[mutabaahcontroller::class, 'destroy'])->name('hapusmutabaah');

});

require __DIR__.'/auth.php';


