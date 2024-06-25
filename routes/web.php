<?php
use App\Http\Controllers\SantriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PelanggaranController;    
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PrestasiController;
<<<<<<< HEAD
use App\Http\Controllers\AdminRoleController;
=======
use App\Http\Controllers\mutabaahController; 
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\AuthController;    
>>>>>>> a657f2a54621d89aa43a53ec48ee0bd5bdf3376d
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

Route::get('/santri',[SantriController::class, 'index'])->name('santri');
Route::get('/santri/addsantri',[SantriController::class, 'create'])->name('tambahsantri');
Route::post('/santri/store',[SantriController::class, 'store'])->name('storetambah');
Route::get('/santri/formeditsantri/{id}',[SantriController::class, 'edit'])->name('editsantri');
Route::put('/santri/updatesantri/{id}',[SantriController::class, 'update'])->name('updatesantri');
Route::get('show/{id}',[SantriController::class, 'show'])->name('detailsantri');
Route::get('/santri/hapussantri/{id}',[SantriController::class, 'destroy'])->name('hapussantri');
Route::get('/', function () {
    return view('welcome');
});


// Route::get('/santri',[SantriController::class, 'index'])->name('santri');
// Route::get('/dashboard',[SantriController::class, 'index'])->name('santri');


// DASHBOARD

// Route::get('/dashboard',[SantriController::class, 'index'])->name('dashboard');

// Route::get('/santri',[SantriController::class, 'index'])->name('santri');
// Route::get('/dashboard',[SantriController::class, 'index'])->name('santri');


// Route::get('/santri',[SantriController::class, 'index'])->name('santri');
// Route::get('/dashboard',[SantriController::class, 'index'])->name('santri');

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

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');


// DASHBOARD
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

// DATA SANTRI
Route::get('/santriadminv',[AdminRoleController::class, 'indexadminv'])->name('santriadminv');
Route::get('/santriadminv/addsantri',[AdminRoleController::class, 'createadminv'])->name('tambahsantriadminv');
Route::post('/santriadminv/store',[AdminRoleController::class, 'storeadminv'])->name('storetambahadminv');
Route::get('/santriadminv/formeditsantri/{id}',[AdminRoleController::class, 'editadminv'])->name('editsantriadminv'); 
Route::put('/santriadminv/updatesantri/{id}',[AdminRoleController::class, 'updateadminv'])->name('updatesantriadminv');
Route::get('/santriadminv/show/{id}',[AdminRoleController::class, 'showadminv'])->name('detailsantriadminv');
Route::get('/santriadminv/hapussantri/{id}',[AdminRoleController::class, 'destroyadminv'])->name('hapussantriadminv');

//pelanggaran
route::get('/pelanggaranadminv',[pelanggarancontroller::class, 'index'])->name('pelanggaran');
route::get('/pelanggaranadminv/addpelanggaran', [pelanggarancontroller::class, 'create'])->name('tambahpelanggaran');
Route::post('/pelanggaranadminv/store',[pelanggaranController::class, 'store'])->name('storepelanggaran');
Route::get('/pelanggaranadminv/formeditpelanggaran/{id}',[pelanggaranController::class, 'edit'])->name('editpelanggaran'); 
Route::put('/pelanggaranadminv/updatepelanggaran/{id}',[pelanggaranController::class, 'update'])->name('updatepelanggaran');
Route::get('show/{id}',[pelanggaranController::class, 'show'])->name('detailpelanggaran');
Route::get('/pelanggaranadminv/hapuspelanggaran/{id}',[pelanggaranController::class, 'destroy'])->name('hapuspelanggaran');

//prestasi
route::get('/prestasiadminv',[prestasicontroller::class, 'index'])->name('prestasi');
route::get('/prestasiadminv/addprestasi', [prestasicontroller::class, 'create'])->name('tambahprestasi');
Route::post('/prestasiadminv/store',[prestasiController::class, 'store'])->name('storeprestasi');
Route::get('/prestasiadminv/formeditprestasi/{id}',[prestasiController::class, 'edit'])->name('editprestasi'); 
Route::put('/prestasiadminv/updateprestasi/{id}',[prestasiController::class, 'update'])->name('updateprestasi');
Route::get('show/{id}',[prestasiController::class, 'show'])->name('detailprestasi');
Route::get('/prestasiadminv/hapusprestasi/{id}',[prestasiController::class, 'destroy'])->name('hapusprestasi');

// excel import
Route::get('santri/import', [AdminRoleController::class, 'importForm'])->name('santri.import.form');
Route::post('santri/import', [AdminRoleController::class, 'import'])->name('santri.import');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

<<<<<<< HEAD
Route::get('/santri/hapussantri/{id}',[SantriController::class, 'destroy'])->name('hapussantri');
=======
Route::get('/santri/hapussantri/{id}',[SantriController::class, 'destroy'])->name('hapussantri');
>>>>>>> a657f2a54621d89aa43a53ec48ee0bd5bdf3376d
