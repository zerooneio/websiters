<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListPoliController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SlidersController;

// Route::get('/', function () {
//     return view('page/index');
// });

Route::get('/', [HomeController::class, 'index']) ->name('home.index');
Route::post('/', [HomeController::class, 'sendwa']) ->name('home.sendwa');

Route::get('/sliders', [SlidersController::class, 'index']) ->name('sliders.index');
Route::get('/sliders/add', [SlidersController::class, 'add']) ->name('sliders.add');
Route::post('/sliders', [SlidersController::class, 'savepict']) ->name('sliders.savepict');
Route::get('/sliders/edit/{id}', [SlidersController::class, 'edit']) ->name('sliders.edit');
Route::post('/sliders/edit/{id}', [SlidersController::class, 'update']) ->name('sliders.update');

Route::get('/listpoli', [ListPoliController::class, 'index']) ->name('listpoli.index');
Route::get('/listpoli/add', [ListPoliController::class, 'add']) ->name('listpoli.add');
Route::post('/listpoli', [ListPoliController::class, 'poli']) ->name('listpoli.poli');