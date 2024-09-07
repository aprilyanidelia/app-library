<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Buku2Controller;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\DaftarBukuController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [PageController::class,'index']);

// Route::get('/login', [LoginController::class,'index']);

Route::get('/login/user', [LoginController::class,'user'])->name('log');
Route::post('/login/user', [LoginController::class,'authenticate_user'])->name('login.authenticate_user');

Route::get('/login/admin', [LoginController::class,'admin']);
Route::post('/login/admin', [LoginController::class,'authenticate'])->name('login.authenticate');

Route::get('/login/staff', [LoginController::class,'staff']);
Route::post('/login/staff', [LoginController::class,'authenticate_staff'])->name('login.authenticate_staff');

Route::post('/', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard/user',[siswaController::class,'index']);
    Route::get('/pinjam/{id}',[siswaController::class,'peminjaman'])->name('pinjam.index');
    Route::post('/pinjam/{pinjam}', [siswaController::class, 'pinjam'])->name('pinjam.pinjam');
    Route::get('/kembali', [siswaController::class,'back']);
    Route::put('/kembali/{id}',[siswaController::class,'kembali'])->name('kembali.kembali');
    Route::get('/koleksi',[siswaController::class,'koleksi']);
    Route::post('/koleksi/{koleksi}',[siswaController::class,'collect'])->name('koleksi.collect');
    Route::delete('/koleksi/{koleksi}',[siswaController::class,'destroy'])->name('koleksi.destroy');
    Route::get('/penilaian',[siswaController::class,'ulasan']);
    Route::get('/penilaian/{id}',[siswaController::class,'rate'])->name('ulasan.rate');
    Route::post('/penilaian',[siswaController::class,'nilai'])->name('ulasan.nilai');

});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard',[Buku2Controller::class,'index'])->name('buku.index');
    Route::get('/dashboard/create',[Buku2Controller::class,'create'])->name('buku.create');
    Route::post('/dashboard',[Buku2Controller::class,'store'])->name('buku.store');
    Route::get('/dashboard/{dashboard}/edit',[Buku2Controller::class,'edit'])->name('buku.edit');
    Route::put('/dashboard/{dashboard}',[Buku2Controller::class,'update'])->name('buku.update');
    Route::delete('/dashboard/{dashboard}',[Buku2Controller::class,'destroy'])->name('dashboard.destroy');
    Route::get('/data_user',[Buku2Controller::class,'data']);
    Route::get('/data_staff',[Buku2Controller::class,'data_staff']);

    Route::get('/kategori',[CategoryController::class,'index'])->name('kategori.index');
    Route::post('/kategori',[CategoryController::class,'store'])->name('kategori.store');
    // Route::put('/kategori/{kategori}',[CategoryController::class,'update'])->name('kategori.update');
    Route::delete('/kategori/{kategori}',[CategoryController::class,'destroy'])->name('kategori.destroy');

    Route::get('/pengembalian',[StatusController::class,'index']);
    Route::post('/pengembalian', [StatusController::class, 'return'])->name('pinjam.return');

    Route::get('/print',[StatusController::class,'print']);

    Route::get('/ulasan',[StatusController::class,'ulasan']);
});


