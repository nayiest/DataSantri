<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PelanggaranController;    
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PrestasiController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/santri',[SantriController::class, 'index'])->name('santri');
Route::get('/dashboard',[SantriController::class, 'index'])->name('santri');


// DASHBOARD

// Route::get('/dashboard',[SantriController::class, 'index'])->name('dashboard');

// Route::get('/santri',[SantriController::class, 'index'])->name('santri');
// Route::get('/dashboard',[SantriController::class, 'index'])->name('santri');


// Route::get('/santri',[SantriController::class, 'index'])->name('santri');
Route::get('/dashboard',[SantriController::class, 'index'])->name('santri');

// Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');



// Route::get('/santri',[SantriController::class, 'index'])->name('santri');
// Route::get('/dashboard',[SantriController::class, 'index'])->name('santri');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); 
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

     
    Route::get('/santri',[SantriController::class, 'index'])->name('santri');

// Route::get('/dashboard',[SantriController::class, 'index'])->name('datasantri');

// DASHBOARD
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

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
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');


    // DASHBOARD
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

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
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

Route::get('/santri/hapussantri/{id}',[SantriController::class, 'destroy'])->name('hapussantri');


