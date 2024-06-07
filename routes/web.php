<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;

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



Route::get('/datasantri',[SantriController::class, 'index'])->name('dashboarddata');
Route::get('/santri/addsantri',[SantriController::class, 'create'])->name('tambahsantri');
Route::post('/santri/store',[SantriController::class, 'store'])->name('storetambah');
route::get('/dashboard/formeditsantri/{id}',[SantriController::class, 'edit'])->name('editsantri');
route::put('/dashboard/updatesantri/{id}',[SantriController::class, 'update'])->name('updatesantri');
route::get('/dashboard/hapussantri/{id}',[SantriController::class, 'destroy'])->name('hapussantri');
