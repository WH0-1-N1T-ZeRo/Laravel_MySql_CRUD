<?php

use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class,"Siswa"])->name("siswa");

//Input ke database
Route::get('/TDataSiswa', [SiswaController::class,"TDataSiswa"])->name("TDataSiswa");
Route::post('/InsertData', [SiswaController::class,"InsertData"])->name("InsertData");

// Update ke database
Route::get('/BackData/{id}', [SiswaController::class,"BackData"])->name("BackData");
Route::post('/Update/{id}', [SiswaController::class,"Update"])->name("Update");

// Delete
Route::get('/Delete/{id}', [SiswaController::class,"Delete"])->name("Delete");