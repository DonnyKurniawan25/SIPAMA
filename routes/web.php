<?php
use App\Http\Controllers\DempsterController;
use App\Http\Controllers\CertaintyFactorController;

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

Route::resource('/', 'welcomeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/beranda', 'BerandaController');

Route::resource('/pasien', 'PasienController');
Route::resource('/penyakit', 'PenyakitController');
Route::resource('/gejala', 'GejalaController');

Route::resource('/pertanyaan', 'PertanyaanController');
Route::resource('/diagnosa', 'DiagnosaController');
Route::resource('/solusi', 'SolusiController');
Route::resource('/kaidah_produksi', 'KaidahproduksiController');
Route::resource('/hasil_konsultasi', 'HasilkonsultasiController');
Route::resource('/submit_pasien', 'DempsterController');

Route::resource('/konsultasi', 'KonsultasiclientController');

Route::get('/demspter', [DempsterController::class, 'index'])->name('diagnosa.index');
Route::post('/diagnosa', [DempsterController::class, 'diagnosa'])->name('diagnosa.diagnosa');

Route::get('/certainty', function () {
    $gejala = \App\Models\Gejala::all();

    return view('certainty-factor.index', compact('gejala'));
});

Route::post('/calculate', [CertaintyFactorController::class, 'calculate'])->name('calculate');