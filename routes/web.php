<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListPoliController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TentangkamiController;

// Route::get('/', function () {
//     return view('page/index');
// });

// halaman utama
Route::get('/', [HomeController::class, 'index']) ->name('home.index');
Route::post('/', [HomeController::class, 'sendwa']) ->name('home.sendwa');
Route::get('/berita', [BeritaController::class, 'index']) ->name('berita.index');
Route::get('/tentangkami', [TentangkamiController::class, 'index']) ->name('about.index');

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

Route::get('/berita/list', [BeritaController::class, 'list']) ->name('berita.list');
Route::get('/berita/add', [BeritaController::class, 'add']) ->name('berita.add');
Route::get('/berita/{id}', [BeritaController::class, 'detail']) ->name('berita.detail');
Route::post('/berita/list', [BeritaController::class, 'saveberita']) ->name('berita.saveberita');
Route::get('/berita/edit/{id}', [BeritaController::class, 'edit']) ->name('berita.edit');
Route::put('/berita/edit/{id}', [BeritaController::class, 'update']) ->name('berita.update');

Route::post('/tentangkami', [TentangkamiController::class, 'add']) ->name('about.add');
Route::get('/edittentangkami', [TentangkamiController::class, 'edit']) ->name('about.edit');
Route::post('/edittentangkami', [TentangkamiController::class, 'saveabout']) ->name('about.saveabout');