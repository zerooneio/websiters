<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListPoliController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\JadwaldokterController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('page/index');
// });

// halaman utamalistpoli
// Route::get('/', [HomeController::class, 'index']) ->name('home.index') ->middleware(['auth'])->name('home');
Route::get('/', [HomeController::class, 'index']) ->name('home.index');
Route::post('/', [HomeController::class, 'sendwa']) ->name('home.sendwa');
Route::get('/informasi/{id}', [HomeController::class, 'berita_detail']) ->name('home.berita_detail');
Route::get('/tentangkami', [TentangkamiController::class, 'index']) ->name('about.index');

// halaman login
Route::get('/login', [AuthController::class, 'login'])->middleware(['guest'])->name('login');
Route::post('/login', [AuthController::class, 'login_dasboard'])->middleware(['guest'])->name('login.dasboard');
Route::post('/logout', [AuthController::class, 'logout']) ->name('logout');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->middleware(['auth'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->middleware(['auth'])->name('actionregister');

Route::middleware(['auth'])->group(function () {
    Route::get('/sliders', [SlidersController::class, 'index']) ->name('sliders.index');
    Route::get('/sliders/add', [SlidersController::class, 'add']) ->name('sliders.add');
    Route::post('/sliders', [SlidersController::class, 'savepict']) ->name('sliders.savepict');
    Route::get('/sliders/edit/{id}', [SlidersController::class, 'edit']) ->name('sliders.edit');
    Route::post('/sliders/edit/{id}', [SlidersController::class, 'update']) ->name('sliders.update');
    Route::delete('/sliders/{id}', [SlidersController::class, 'delete']) ->name('sliders.delete');

    Route::get('/listpoli', [ListPoliController::class, 'index']) ->name('listpoli.index');
    Route::get('/listpoli/add', [ListPoliController::class, 'add']) ->name('listpoli.add');
    Route::post('/listpoli', [ListPoliController::class, 'poli']) ->name('listpoli.poli');
    Route::get('/listpoli/edit/{id}', [ListPoliController::class, 'edit']) ->name('listpoli.edit');
    Route::post('/listpoli/edit/{id}', [ListPoliController::class, 'update']) ->name('listpoli.update');
    Route::delete('/listpoli/{id}', [ListPoliController::class, 'delete']) ->name('listpoli.delete');


    Route::get('/tentangkami/list', [TentangkamiController::class, 'index']) ->name('about.index');
    Route::get('/tentangkami/add', [TentangkamiController::class, 'add']) ->name('about.add');
    Route::post('/addttentangkami', [TentangkamiController::class, 'saveabout']) ->name('about.saveabout');
    Route::get('/edittentangkami/{id}', [TentangkamiController::class, 'edit']) ->name('about.edit');
    Route::post('/edittentangkami/{id}', [TentangkamiController::class, 'update']) ->name('about.update');

    Route::get('/jadwaldokter/list', [JadwaldokterController::class, 'index']) ->name('jadwal.index');
    Route::post('/jadwaldokter/list', [JadwaldokterController::class, 'savejadwal']) ->name('jadwal.savejadwal');
    Route::get('/jadwaldokter/edit/{id}', [JadwaldokterController::class, 'edit']) ->name('jadwal.edit');
    Route::post('/jadwaldokter/edit/{id}', [JadwaldokterController::class, 'update']) ->name('jadwal.update');

    Route::get('/dokter/list', [DokterController::class, 'index']) ->name('dokter.index');
    Route::get('/dokter/add', [DokterController::class, 'add']) ->name('dokter.add');
    Route::post('/dokter/list', [DokterController::class, 'savedokter']) ->name('dokter.savedokter');
    Route::get('/dokter/edit/{id}', [DokterController::class, 'edit']) ->name('dokter.edit');
    Route::post('/dokter/edit/{id}', [DokterController::class, 'update']) ->name('dokter.update');

    Route::get('/galery/list', [GaleryController::class, 'index']) ->name('galery.index');

    Route::get('/berita/list', [BeritaController::class, 'list']) ->name('berita.list');
    Route::get('/berita/add', [BeritaController::class, 'add']) ->name('berita.add');
    Route::post('/berita/list', [BeritaController::class, 'saveberita']) ->name('berita.saveberita');
    Route::get('/berita/edit/{id}', [BeritaController::class, 'edit']) ->name('berita.edit');
    Route::put('/berita/edit/{id}', [BeritaController::class, 'update']) ->name('berita.update');    
});
