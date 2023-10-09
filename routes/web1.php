<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanControllers;
use App\Http\Controllers\masyarakatController;

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

Route::get('/home',[PengaduanControllers::class,'index']);

Route::get('isi', function(){
    return view('isi');
});

Route::post('/isi', [PengaduanControllers::class, 'isi_pengaduan']);

Route::get('/masyarakat', [masyarakatController::class,'rakyat']);

Route::get('/login', [masyarakatController::class,'login']);

Route::get('/hapus-pengaduan/{id}', [masyarakatController::class,'hapus']);

Route::POST('/isipengaduan',[PengaduanControllers::class,'proses_isi_pengaduan']);

Route::get('/detail_pengaduan/{id}', [pengaduanControllers::class,'detail_pengaduan']);
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/isi', function () {
//     return view('isi');
// });

// Route::get('login', function () {
//     return view('login');
// });+