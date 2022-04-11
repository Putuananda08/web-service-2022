<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SoalController;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
});

Route::get('/tentang', function(){
    return view('about');
});

Route::get('/education', function() {
    return view('education');
});

Route::get('/portfolio', function() {
    return view('portfolio');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/nama', function(){
    return 'Putu Ananda Pradnya Wirawan';
});

Route::get('/dari-view', function (){
    return view('home');
});

Route::view('master', 'template/master');

Route::get('data-mahasiswa', [MahasiswaController::class, 'index']);
Route::get('add-mahasiswa', [MahasiswaController::class, 'create']);
Route::post('getData',[MahasiswaController::class, 'ambilData'])->name('mahasiswa.getData');
Route::get('data-soal',[SoalController::class,'index']);
Route::get('add-soal',[SoalController::class,'create']);
Route::post('getDataS', [SoalController::class, 'ambilData'])->name('soal.getDataS');